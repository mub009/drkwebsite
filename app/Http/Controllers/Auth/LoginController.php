<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Traits\ActivityLogTrait;

class LoginController extends Controller
{
    use ActivityLogTrait;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->all()
            ], 422);
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $this->logActivity(
                Auth::id(),               
                'login',                  
                'User logged in',
                $request->header('User-Agent'), 
                $request->ip()           
            );

            return response()->json([
                'success' => true,
                'message' => 'Login successful',
            ]);
        }

        return response()->json([
            'success' => false,
            'errors' => ['Invalid email or password']
        ], 401);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }
}
