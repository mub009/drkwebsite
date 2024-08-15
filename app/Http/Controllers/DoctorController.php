<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DoctorController extends Controller
{
   
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Doctor::query();

            return DataTables::of($query)
                ->addColumn('name', function ($row) {
                    return $row->name;
                })
                ->addColumn('designation', function ($row) {
                    return $row->designation;
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d H:i:s');
                })
                ->filterColumn('name', function($query, $keyword) {
                    $query->where('name', 'like', "%{$keyword}%");
                })
                ->filterColumn('designation', function($query, $keyword) {
                    $query->where('designation', 'like', "%{$keyword}%");
                })
                ->make(true);
        }
        return view('doctors');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string',
        ]);

        Doctor::create($request->all());

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
            'designation' => 'required|string',
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
    
}