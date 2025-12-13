<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OfficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:offices.view')->only(['index', 'show']);
        $this->middleware('permission:offices.create')->only(['create', 'store']);
        $this->middleware('permission:offices.edit')->only(['edit', 'update']);
        $this->middleware('permission:offices.delete')->only(['destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $offices = Office::select('*')->orderBy('sort_order', 'asc');

            return DataTables::of($offices)
                ->addColumn('status', function ($office) {
                    $checked = $office->is_active ? 'checked' : '';
                    return '<label class="toggle-switch">
                            <input type="checkbox" ' . $checked . ' onchange="toggleStatus(' . $office->id . ', this)">
                            <span class="slider"></span>
                            </label>';
                })
                ->addColumn('actions', function ($office) {
                    $actions = '';
                    if (auth()->user()->can('offices.edit')) {
                        $actions .= '<a href="javascript:void(0)" class="btn btn-sm btn-info me-1" onclick="editOffice(' . $office->id . ')" title="' . __('common.edit') . '">
                                <i class="bi bi-pencil-square"></i></a>';
                    }
                    if (auth()->user()->can('offices.delete')) {
                        $actions .= '<button onclick="deleteOffice(' . $office->id . ')" class="btn btn-sm btn-danger" title="' . __('common.delete') . '">
                                <i class="bi bi-trash"></i></button>';
                    }
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }

        return view('admin.offices.index');
    }

    public function create()
    {
        return view('admin.offices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        Office::create($data);

        return redirect()->route('admin.offices.index')->with('success', __('Office created successfully'));
    }

    public function edit($id)
    {
        $office = Office::findOrFail($id);
        return view('admin.offices.edit', compact('office'));
    }

    public function update(Request $request, $id)
    {
        $office = Office::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        $office->update($data);

        return redirect()->route('admin.offices.index')->with('success', __('Office updated successfully'));
    }

    public function destroy($id)
    {
        $office = Office::findOrFail($id);
        $office->delete();

        return response()->json(['success' => 'Office deleted successfully']);
    }

    public function toggleStatus(Request $request, $id)
    {
        $office = Office::findOrFail($id);
        $office->update(['is_active' => !$office->is_active]);

        return response()->json(['success' => true, 'message' => 'Status updated successfully']);
    }
}
