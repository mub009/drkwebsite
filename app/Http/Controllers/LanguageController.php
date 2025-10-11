<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $locale = $request->input('locale');

        if (!in_array($locale, ['en', 'ar'])) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid locale'
            ], 400);
        }

        Session::put('locale', $locale);

        App::setLocale($locale);

        return response()->json([
            'status' => 'success',
            'locale' => $locale
        ]);
    }
}
