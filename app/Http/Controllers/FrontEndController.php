<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Article;

class FrontEndController extends Controller
{

    public function home()
    {
        $data = array();
        $data['doctors'] = Doctor::join('departments', 'doctors.departmentId', '=', 'departments.id')
            ->select('doctors.*', 'departments.department as department_name')
            ->get();
        $data['article'] = Article::latest()->take(5)->get();

        return view('frontend.home', $data);
    }
    public function articleDetails($slug = null)
    {
        $data = array();
        $data['article'] = Article::where('slug', $slug)->firstOrFail();
        return view('frontend.articleDetails', $data);
    }
}
