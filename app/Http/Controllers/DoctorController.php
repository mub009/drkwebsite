<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DoctorController extends Controller
{
   
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Doctor::join('departments', 'doctors.departmentId', '=', 'departments.id')
                ->select('doctors.*', 'departments.department as department_name');
    
            return DataTables::of($query)
                ->addColumn('name', function ($row) {
                    return $row->name;
                })
                ->addColumn('image', function ($row) {
                    return $row->image; // Use department name here
                })
                ->addColumn('designation', function ($row) {
                    return $row->department_name; // Use department name here
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d H:i:s');
                })
                ->filterColumn('name', function($query, $keyword) {
                    $query->where('name', 'like', "%{$keyword}%");
                })
                ->filterColumn('designation', function($query, $keyword) {
                    $query->where('department_name', 'like', "%{$keyword}%"); // Update filter to use department name
                })
                ->make(true);
        }
        return view('backend.doctors');
    }
    
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'departmentId' => 'required',
        ]);
        $doctor = new Doctor;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $doctor->image = $imageName;
        }
        $doctor->name=$request->name;
        $doctor->departmentId=$request->departmentId;
        $doctor->save();
        return response()->json(['status' => true, 'message' => 'Doctor created successfully']);
    }

   
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        if (!$doctor) {
            return response()->json([
                'status' => false,
                'message' => 'Doctor not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $doctor,
        ]);
    }

   
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'departmentId' => 'required',
        ]);

        $doctor->update($request->all());

        return response()->json(['status' => true, 'message' => 'Doctor updated successfully']);
    }

    
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return response()->json(['status' => true, 'message' => 'Doctor deleted successfully']);
    }


    public function show(Request $request, $id)
    {
        $doctor = Doctor::find($id);
    
        if (!$doctor) {
            return response()->json([
                'status' => false,
                'message' => 'Doctor not found',
            ], 404);
        }
    
        return response()->json([
            'status' => true,
            'data' => $doctor,
        ]);
    }

   public function getDepartment()
{
    try {
        $departments = Department::select('id', 'department')->get();
        return response()->json([
            'status' => true,
            'data' => $departments
        ]);
    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage(),
        ], 500);
    }
}

    
}