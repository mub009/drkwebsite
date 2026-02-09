<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Yajra\DataTables\DataTables;

class EnquiryController extends Controller
{
    public function index()
    {
        return view('backend.enquiry');
    }

    public function dataTablesForEnquiry()
    {
        $query = Enquiry::query();
        return DataTables::of($query)
            ->addColumn('enquiryId', function ($row) {
                return $row->enquiryId;
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('phone', function ($row) {
                return $row->phone;
            })
            ->addColumn('branch', function ($row) {
                return $row->branch;
            })
            ->addColumn('email', function ($row) {
                return $row->email;
            })
            ->filterColumn('enquiryId', function ($query, $keyword) {
                $query->where('enquiryId', 'like', "%{$keyword}%");
            })
            ->filterColumn('name', function ($query, $keyword) {
                $query->where('name', 'like', "%{$keyword}%");
            })
            ->filterColumn('phone', function ($query, $keyword) {
                $query->where('phone', 'like', "%{$keyword}%");
            })
            ->filterColumn('branch', function ($query, $keyword) {
                $query->where('branch', 'like', "%{$keyword}%");
            })
            ->filterColumn('email', function ($query, $keyword) {
                $query->where('email', 'like', "%{$keyword}%");
            })
            ->make(true);
    }
}
