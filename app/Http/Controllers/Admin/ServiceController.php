<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:services.view')->only(['index', 'show']);
        $this->middleware('permission:services.create')->only(['create', 'store']);
        $this->middleware('permission:services.edit')->only(['edit', 'update']);
        $this->middleware('permission:services.delete')->only(['destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $services = Service::select('*');

            return DataTables::of($services)
                ->addIndexColumn()
                ->editColumn('front_image', function ($service) {
                    if ($service->front_image) {
                        return '<img src="' . asset($service->front_image) . '" class="table-img" alt="Front">';
                    } else {
                        return '<span class="text-muted">None</span>';
                    }
                })
                ->editColumn('back_image', function ($service) {
                     if ($service->back_image) {
                        return '<img src="' . asset($service->back_image) . '" class="table-img" alt="Back">';
                    } else {
                        return '<span class="text-muted">None</span>';
                    }
                })
                ->addColumn('status', function ($service) {
                    $checked = $service->is_active ? 'checked' : '';
                    return '<label class="toggle-switch">
                            <input type="checkbox" ' . $checked . ' onchange="toggleStatus(' . $service->id . ', this)">
                            <span class="slider"></span>
                            </label>';
                })
                ->addColumn('actions', function ($service) {
                    $actions = '';
                    if (auth()->user()->can('services.edit')) {
                        $actions .= '<a href="' . route('admin.services.edit', $service->id) . '" class="btn btn-sm btn-info me-1" title="' . __('common.edit') . '">
                                <i class="bi bi-pencil-square"></i></a>';
                    }
                    if (auth()->user()->can('services.delete')) {
                        $actions .= '<button onclick="deleteService(' . $service->id . ')" class="btn btn-sm btn-danger" title="' . __('common.delete') . '">
                                <i class="bi bi-trash"></i></button>';
                    }
                    return $actions;
                })
                ->rawColumns(['front_image', 'back_image', 'status', 'actions'])
                ->make(true);
        }

        return view('admin.services.index');
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'front_title' => 'required|string|max:255',
            'front_description' => 'required|string',
            'front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'back_title' => 'required|string|max:255',
            'back_description' => 'required|string',
            'back_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'button_text' => 'nullable|string|max:50',
            'button_link' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        if (Service::where('sort_order', $request->sort_order)->exists()) {
             Service::where('sort_order', '>=', $request->sort_order)->increment('sort_order');
        }

        $data = $request->all();

        if ($request->hasFile('front_image')) {
            $imageName = 'front_' . time() . '.' . $request->front_image->extension();
            $request->front_image->move(public_path('uploads/services'), $imageName);
            $data['front_image'] = 'uploads/services/' . $imageName;
        }

        if ($request->hasFile('back_image')) {
            $imageName = 'back_' . time() . '.' . $request->back_image->extension();
            $request->back_image->move(public_path('uploads/services'), $imageName);
            $data['back_image'] = 'uploads/services/' . $imageName;
        }

        $data['is_active'] = $request->has('is_active');

        Service::create($data);

        return redirect()->route('admin.services.index')
            ->with('success', __('about.created_success'));
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'front_title' => 'required|string|max:255',
            'front_description' => 'required|string',
            'front_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'back_title' => 'required|string|max:255',
            'back_description' => 'required|string',
            'back_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'button_text' => 'nullable|string|max:50',
            'button_link' => 'nullable|string|max:255',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        if ($request->sort_order != $service->sort_order) {
            if (Service::where('sort_order', $request->sort_order)->exists()) {
                 Service::where('sort_order', '>=', $request->sort_order)
                     ->where('id', '!=', $service->id)
                     ->increment('sort_order');
            }
        }

        $data = $request->all();

        if ($request->hasFile('front_image')) {
             if ($service->front_image && file_exists(public_path($service->front_image))) {
                unlink(public_path($service->front_image));
            }
            $imageName = 'front_' . time() . '.' . $request->front_image->extension();
            $request->front_image->move(public_path('uploads/services'), $imageName);
            $data['front_image'] = 'uploads/services/' . $imageName;
        }

        if ($request->hasFile('back_image')) {
             if ($service->back_image && file_exists(public_path($service->back_image))) {
                unlink(public_path($service->back_image));
            }
            $imageName = 'back_' . time() . '.' . $request->back_image->extension();
            $request->back_image->move(public_path('uploads/services'), $imageName);
            $data['back_image'] = 'uploads/services/' . $imageName;
        }

        $data['is_active'] = $request->has('is_active');

        $service->update($data);

        return redirect()->route('admin.services.index')
            ->with('success', __('about.updated_success'));
    }

    public function destroy(Service $service)
    {
        if ($service->front_image && file_exists(public_path($service->front_image))) {
            unlink(public_path($service->front_image));
        }
        if ($service->back_image && file_exists(public_path($service->back_image))) {
            unlink(public_path($service->back_image));
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', __('about.deleted_success'));
    }

    public function toggleStatus(Request $request, Service $service)
    {
        $service->is_active = $request->status === 'true' ? true : false;
        $service->save();

        return response()->json(['success' => true, 'message' => __('common.status_updated')]);
    }
}
