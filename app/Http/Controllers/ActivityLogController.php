<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class ActivityLogController extends Controller
{
    public function showLogs(Request $request)
    {
        // Fetch the activity logs
        // $logs = ActivityLog::orderBy('created_at', 'desc')->get();

        if ($request->ajax()) {

            $query = ActivityLog::query();

            return DataTables::of($query)
                ->addColumn('user_id', function ($row) {
                    return $row->id ? $row->user_id : 'System';
                })
                ->addColumn('action', function ($row) {
                    return $row->id ? $row->action : 'System';
                })
                ->addColumn('agent', function ($row) {
                    return $row->id ? $row->agent : 'System';
                })
                ->addColumn('ip_address', function ($row) {
                    return $row->id ? $row->ip_address : 'System';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d H:i:s');
                })
                ->filterColumn('action', function ($query, $keyword) {
                    $query->where('action', 'like', "%{$keyword}%");
                })
                ->filterColumn('user_id', function ($query, $keyword) {
                    $query->where('user_id', 'like', "%{$keyword}%");
                })
                ->filterColumn('agent', function ($query, $keyword) {
                    $query->where('agent', 'like', "%{$keyword}%");
                })
                ->filterColumn('ip_address', function ($query, $keyword) {
                    $query->where('user_id', 'like', "%{$keyword}%");
                })
                ->make(true);
        }

        // Return the logs view with the data
        return view('backend.activity-logs');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ActivityLog $activityLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityLog $activityLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ActivityLog $activityLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityLog $activityLog)
    {
        //
    }
}
