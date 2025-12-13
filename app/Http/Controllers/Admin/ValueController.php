<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Value;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ValueController extends Controller
{
    public function __construct()
    {
        // Permissions can be added later if needed, following section logic
        // $this->middleware('permission:about_sections.view')->only(['index', 'show']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $values = Value::select('*');

            return DataTables::of($values)
                ->addIndexColumn()
                ->editColumn('icon', function ($value) {
                    if ($value->icon) {
                        return '<img src="' . asset($value->icon) . '" class="table-img" alt="Icon" style="height: 50px;">';
                    } else {
                        return '<span class="text-muted">No Icon</span>';
                    }
                })
                ->addColumn('status', function ($value) {
                    $checked = $value->is_active ? 'checked' : '';
                    return '<label class="toggle-switch">
                            <input type="checkbox" ' . $checked . ' onchange="toggleStatus(' . $value->id . ', this)">
                            <span class="slider"></span>
                            </label>';
                })
                ->addColumn('actions', function ($value) {
                    $actions = '';
                    $actions .= '<a href="' . route('admin.values.edit', $value->id) . '" class="btn btn-sm btn-info me-1" title="' . __('common.edit') . '">
                            <i class="bi bi-pencil-square"></i></a>';
                    
                    $actions .= '<button onclick="deleteValue(' . $value->id . ')" class="btn btn-sm btn-danger" title="' . __('common.delete') . '">
                            <i class="bi bi-trash"></i></button>';
                    
                    return $actions;
                })
                ->rawColumns(['icon', 'status', 'actions'])
                ->make(true);
        }

        return view('admin.values.index');
    }

    public function create()
    {
        return view('admin.values.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            $imageName = time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('uploads/values'), $imageName);
            $data['icon'] = 'uploads/values/' . $imageName;
        }

        $data['is_active'] = $request->has('is_active');

        Value::create($data);

        return redirect()->route('admin.values.index')
            ->with('success', 'Value created successfully.');
    }

    public function edit(Value $value)
    {
        return view('admin.values.edit', compact('value'));
    }

    public function update(Request $request, Value $value)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            if ($value->icon && file_exists(public_path($value->icon))) {
                unlink(public_path($value->icon));
            }
            $imageName = time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('uploads/values'), $imageName);
            $data['icon'] = 'uploads/values/' . $imageName;
        }

        $data['is_active'] = $request->has('is_active');

        $value->update($data);

        return redirect()->route('admin.values.index')
            ->with('success', 'Value updated successfully.');
    }

    public function destroy(Value $value)
    {
        if ($value->icon && file_exists(public_path($value->icon))) {
            unlink(public_path($value->icon));
        }
        
        $value->delete();

        return redirect()->route('admin.values.index')
            ->with('success', 'Value deleted successfully.');
    }

    public function toggleStatus(Request $request, Value $value)
    {
        $value->is_active = $request->status === 'true' ? true : false;
        $value->save();

        return response()->json(['success' => true, 'message' => __('common.status_updated')]);
    }
}
