<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DepartmentController extends Controller
{
   
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Department::query();

            return DataTables::of($query)
                ->addColumn('department', function ($row) {
                    return $row->department;
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d H:i:s');
                })
                ->filterColumn('department', function($query, $keyword) {
                    $query->where('department', 'like', "%{$keyword}%");
                })
                ->make(true);
        }
        return view('backend.departments');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'department' => 'required|string|max:255',
        ]);

        Department::create($request->all());

        return response()->json(['status' => true, 'message' => 'Department created successfully']);
    }

   
    public function edit($id)
    {
        $department = Department::find($id);
        if (!$department) {
            return response()->json([
                'status' => false,
                'message' => 'Department not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $department,
        ]);
    }

   
    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        $request->validate([
            'department' => 'required|string|max:255',
        ]);

        $department->update($request->all());

        return response()->json(['status' => true, 'message' => 'Department updated successfully']);
    }

    
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return response()->json(['status' => true, 'message' => 'Department deleted successfully']);
    }


    public function show(Request $request, $id)
    {
        $department = Department::find($id);
    
        if (!$department) {
            return response()->json([
                'status' => false,
                'message' => 'Department not found',
            ], 404);
        }
    
        return response()->json([
            'status' => true,
            'data' => $department,
        ]);
    }
    
}