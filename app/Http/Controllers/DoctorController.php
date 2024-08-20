<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DoctorController extends Controller
{
    
    public function index()
    {
        return view('backend.doctors');
    }
    public function dataTablesForDoctors(Request $request){
    if ($request->ajax()) {
        $query = Doctor::query();

        return DataTables::of($query)
            ->addColumn('name_en', function ($row) {
                return $row->name_en;
            })
            ->addColumn('name_ar', function ($row) {
                return $row->name_ar;
            })
            ->addColumn('image', function ($row) {
                if ($row->image) {
                    return $imageUrl = asset('images/' . $row->image); // Ensure this path is correct

                } else {
                    return 'No Image';
                }
            })
            ->addColumn('department_en', function ($row) {
                return $row->department_en;
            })
            ->addColumn('department_ar', function ($row) {
                return $row->department_ar;
            })
            ->editColumn('created_at', function ($row) {
                return $row->created_at->format('Y-m-d H:i:s');
            })
            ->filterColumn('name_en', function($query, $keyword) {
                $query->where('name_en', 'like', "%{$keyword}%");
            })
            ->filterColumn('name_ar', function($query, $keyword) {
                $query->where('name_ar', 'like', "%{$keyword}%");
            })
            ->filterColumn('department_en', function($query, $keyword) {
                $query->where('dipartment_ar', 'like', "%{$keyword}%");
            })
            ->filterColumn('department_ar', function($query, $keyword) {
                $query->where('department_ar', 'like', "%{$keyword}%");
            })
            ->make(true);
    }
}
public function addDoctors()
    {
        return view('backend.doctorsAdd');
    }
    
public function store(Request $request)
{
   
    try {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'department_en' => 'required|string|max:255',
            'department_ar' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|required',
        ]);
        $doctor = new Doctor;
        $doctor->name_en = $request->name_en;
        $doctor->name_ar = $request->name_ar;
        $doctor->department_en = $request->department_en;
        $doctor->department_ar = $request->department_ar;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $doctor->image = $imageName;
        }
        $doctor->save();
        return response()->json(['status' => true, 'message' => 'Doctor created successfully.']);
    } catch (\Exception $e) {
        
        return response()->json(['status' => false, 'message' => $e->getMessage()], 400);
    }
}



    
    public function edit($id)
    {
        $doctor = Doctor::find($id);
    
        return view('backend.doctor-edit',compact('doctor'));
    }

   
    public function update(Request $request, $id)
{
    try {

        
        $doctor = Doctor::findOrFail($id);

        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'department_en' => 'required|string|max:255',
            'department_ar' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|required',
        ]);

        $doctor->name_en = $request->name_en;
        $doctor->name_ar = $request->name_ar;
        $doctor->department_en = $request->department_en;
        $doctor->department_ar = $request->department_ar;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $doctor->image = $imageName;
        }

        $doctor->save();

        

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'Doctor updated successfully.']);
        } else {
            return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully.');
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
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return response()->json(['status' => true, 'message' => 'Doctor deleted successfully'],);
    }


    public function show(Request $request, $id)
    {
        $doctor = Doctor::find($id);
    
        return view('backend.doctor-show',compact('doctor'));
    }
    
}