<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\services;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    public function service()
    {
        return view('backend.service');
    }

    public function addservice()
    {
        return view('backend.ServicesAdd');
    }
    public function dataTablesForservice()
    {
        $query = Service::query();
        return DataTables::of($query)
            ->addColumn('service_en', function ($row) {
                return $row->service_en;
            })
            ->addColumn('service_ar', function ($row) {
                return $row->service_ar;
            })

            ->make(true);
    }
    public function store(Request $request)
    {
        try {
            $services = new Service();
            $services->service_en = $request->service_en;
            $services->service_ar = $request->service_ar;
            $services->save();

            return response()->json([
                'status' => true,
                'message' => 'Service created successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 400);
        }
    }
    public function edit($id)
    {
        $services = Service::find($id);

        return view('backend.servicesedit', compact('services', 'id'));
    }
    public function update(Request $request)
    {
        try {
            $services = Service::findOrFail($request->id);
            $services->service_en = $request->service_en;
            $services->service_ar = $request->service_ar;

            $services->save();
            if ($request->ajax()) {
                return response()->json(['status' => true, 'message' => 'Services updated successfully.']);
            } else {
                return redirect()->route('service.service')->with('success', 'Services updated successfully.');
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json(['status' => false, 'message' => $e->validator->errors()->first()], 422);
            } else {
                return back()->with('error', $e->validator->errors()->first());
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
        $services = Service::findOrFail($id);
        $services->delete();
        return response()->json(['status' => true, 'message' => 'Service deleted successfully'], 200);
    }
}
