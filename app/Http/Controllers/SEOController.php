<?php

namespace App\Http\Controllers;

use App\Models\TableSetting;
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

    public function storeSitemap(Request $request)
    {
        try {
            $settings = new TableSetting();
            $settings->type = 'sitemap';
            $settings->content = $request->sitemap_xml;

            $settings->save();
            return response()->json(['status' => true, 'message' => 'SiteMap created successfully.']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()], 400);
        }
    }
}
