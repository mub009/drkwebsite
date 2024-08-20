<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DepartmentController extends Controller
{
    
    public function index()
    {
        return view('backend.departments');
    }
    public function dataTablesForDepartments(Request $request){
    if ($request->ajax()) {
        $query = Department::query();

        return DataTables::of($query)
            ->addColumn('department_en', function ($row) {
                return $row->department_en;
            })
            ->addColumn('department_ar', function ($row) {
                return $row->department_ar;
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('Y-m-d H:i:s');
            })
            ->filterColumn('department_en', function($query, $keyword) {
                $query->where('department_en', 'like', "%{$keyword}%");
            })
            ->filterColumn('department_ar', function($query, $keyword) {
                $query->where('department_ar', 'like', "%{$keyword}%");
            })
            ->make(true);
    }
}
public function addDepartments()
    {
        return view('backend.departmentsAdd');
    }
    
public function store(Request $request)
{
   
    try {
        $request->validate([
            'department_en' => 'required|string|max:255',
            'department_ar' => 'required|string|max:255',
        ]);
        $department = new Department;
        $department->department_en = $request->department_en;
        $department->department_ar = $request->department_ar;
        
        $department->save();
        return response()->json(['status' => true, 'message' => 'Department created successfully.']);
    } catch (\Exception $e) {
        
        return response()->json(['status' => false, 'message' => $e->getMessage()], 400);
    }
}



    
    public function edit($id)
    {
        $department = Department::find($id);
    
        return view('backend.department-edit',compact('department'));
    }

   
    public function update(Request $request, $id)
{
    try {

        
        $department = Department::findOrFail($id);

        $request->validate([
            'department_en' => 'required|string|max:255',
            'department_ar' => 'required|string|max:255',
        ]);
        $department->department_en = $request->department_en;
        $department->department_ar = $request->department_ar;
        $department->save();

        

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'Department updated successfully.']);
        } else {
            return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
        }
    } catch (\Exception $e) {
        if ($request->ajax()) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 400);
        } else {
            return back()->with('error', $e->getMessage());
        }
    }
}
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return response()->json(['status' => true, 'message' => 'Department deleted successfully'],);
    }


    public function show(Request $request, $id)
    {
        $department = Department::find($id);
    
        return view('backend.department-show',compact('department'));
    }
    
}