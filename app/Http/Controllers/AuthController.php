<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //

    // public function showRegister()
    // {
    //     return response()->view('cms.register');
    // }

    // public function register(Request $request)
    // {
    //     $validator = validator($request->all(), [
    //         'name' => 'required|max:30|min:3',
    //         'email' => 'required|email|string',
    //         'password' => 'required|string|min:3',
    //         'remember_me' => 'required|boolean',
    //     ], [
    //         'name.required' => 'رجاء! أدخل الاسم بشكل صحيح',
    //         'email.required' => 'رجاء!ادخل البريد الالكترونى',
    //         'email.email' => 'البريد الالكترونى المدخل غير صحيح !',
    //         'password.required' => 'رجاء! ادخل كلمة المرور',
    //     ]);

    //     $credentials = [
    //         'email' => $request->get('email'),
    //         'password' => $request->get('password'),
    //     ];
    //     if (!$validator->fails()) {
    //         if (Auth::guard('web')->attempt($credentials)) {
    //             return response()->json(['message' => 'Logged in successfully'], 200);
    //         } else {
    //             return response()->json(['message' => 'Error credentials'], 400);
    //         }
    //     } else {
    //         return response()->json(['message' => $validator->getMessageBag()->first()], 400);
    //     }
    // }


    public function showLogin()
    {
        return response()->view('auth.login');
    }
    
    public function login(Request $request)
    {
        $validator = validator($request->all(), [
            'email' => 'required|email|string',
            'password' => 'required|string|min:3',
        ], [
            'email.required' => 'رجاء!ادخل البريد الالكترونى',
            'email.email' => 'البريد الالكترونى المدخل غير صحيح !',
            'password.required' => 'رجاء! ادخل كلمة المرور',
        ]);

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        if (!$validator->fails()) {
            if (Auth::guard('web')->attempt($credentials)) {
                // return response()->json(['message' => 'Logged in successfully'], 200);
                return response()->view('temp');

            } else {
                return response()->json(['message' => 'Error credentials'], 400);
            }
        } else {
            return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}
