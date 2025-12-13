<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;

class AboutSectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:about_sections.view')->only(['index', 'show']);
        $this->middleware('permission:about_sections.create')->only(['create', 'store']);
        $this->middleware('permission:about_sections.edit')->only(['edit', 'update']);
        $this->middleware('permission:about_sections.delete')->only(['destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $sections = AboutSection::select('*');

            return DataTables::of($sections)
                ->addIndexColumn()
                ->editColumn('type', function ($section) {
                    return '<span class="badge bg-secondary">' . ucwords(str_replace('_', ' ', $section->type)) . '</span>';
                })
                ->editColumn('image', function ($section) {
                    if ($section->image) {
                        return '<img src="' . asset($section->image) . '" class="table-img" alt="Image">';
                    } else {
                        return '<span class="text-muted">No Image</span>';
                    }
                })
                ->addColumn('status', function ($section) {
                    $checked = $section->is_active ? 'checked' : '';
                    return '<label class="toggle-switch">
                            <input type="checkbox" ' . $checked . ' onchange="toggleStatus(' . $section->id . ', this)">
                            <span class="slider"></span>
                            </label>';
                })
                ->addColumn('actions', function ($section) {
                    $actions = '';
                    if (auth()->user()->can('about_sections.edit')) {
                        $actions .= '<a href="' . route('admin.about-sections.edit', $section->id) . '" class="btn btn-sm btn-info me-1" title="' . __('common.edit') . '">
                                <i class="bi bi-pencil-square"></i></a>';
                    }
                    if (auth()->user()->can('about_sections.delete')) {
                        $actions .= '<button onclick="deleteSection(' . $section->id . ')" class="btn btn-sm btn-danger" title="' . __('common.delete') . '">
                                <i class="bi bi-trash"></i></button>';
                    }
                    return $actions;
                })
                ->rawColumns(['type', 'image', 'status', 'actions'])
                ->make(true);
        }

        return view('admin.about-sections.index');
    }

    public function create()
    {
        return view('admin.about-sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:intro,full_width_image,content_image,quote,services',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_position' => 'required|in:left,right',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        // Smart Sorting: Shift existing sections down if inserting at occupied position
        if (AboutSection::where('sort_order', $request->sort_order)->exists()) {
             AboutSection::where('sort_order', '>=', $request->sort_order)->increment('sort_order');
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/about'), $imageName);
            $data['image'] = 'uploads/about/' . $imageName;
        }

        // Set is_active default if not present (checkbox)
        $data['is_active'] = $request->has('is_active');

        AboutSection::create($data);

        return redirect()->route('admin.about-sections.index')
            ->with('success', __('about.created_success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSection $aboutSection)
    {
        return view('admin.about-sections.show', compact('aboutSection'));
    }

    public function edit(AboutSection $aboutSection)
    {
        return view('admin.about-sections.edit', compact('aboutSection'));
    }

    public function update(Request $request, AboutSection $aboutSection)
    {
        $request->validate([
            'type' => 'required|in:intro,full_width_image,content_image,quote,services',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_position' => 'required|in:left,right',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        // Smart Sorting on Update: If order changed to an occupied spot, shift others down
        if ($request->sort_order != $aboutSection->sort_order) {
            if (AboutSection::where('sort_order', $request->sort_order)->exists()) {
                 AboutSection::where('sort_order', '>=', $request->sort_order)
                     ->where('id', '!=', $aboutSection->id)
                     ->increment('sort_order');
            }
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($aboutSection->image && file_exists(public_path($aboutSection->image))) {
                unlink(public_path($aboutSection->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/about'), $imageName);
            $data['image'] = 'uploads/about/' . $imageName;
        }

        // Set is_active default if not present (checkbox)
        $data['is_active'] = $request->has('is_active');

        $aboutSection->update($data);

        return redirect()->route('admin.about-sections.index')
            ->with('success', __('about.updated_success'));
    }

    public function destroy(AboutSection $aboutSection)
    {
        if ($aboutSection->image && file_exists(public_path($aboutSection->image))) {
            unlink(public_path($aboutSection->image));
        }

        $aboutSection->delete();

        return redirect()->route('admin.about-sections.index')
            ->with('success', 'Section deleted successfully.');
    }

    public function toggleStatus(Request $request, AboutSection $aboutSection)
    {
        $aboutSection->is_active = $request->status === 'true' ? true : false;
        $aboutSection->save();

        return response()->json(['success' => true, 'message' => __('common.status_updated')]);
    }
}
