<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SEOController extends Controller
{
    public function sitemap()
    {
        return view('backend.seo.sitemap');
    }

    public function robot()
    {
        return view('backend.seo.robot');
    }
}
