<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function loginMentor()
    {
        return view('Login.mentor', [
            'title' => 'Login | Mentor'
        ]);
    }

    public function loginStudent()
    {
        return view('Login.student', [
            'title' => 'Login | Student'
        ]);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
            // 'role_id' => 'required'


        ]);
        dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials)) {


            return redirect()->intended('/Student/index');
            // if ($request['role_id'] == '2') {
            //     dd('berhasil login Mentor');

            // } elseif ($request['role_id'] == '1') {
            //     dd('berhasil login Mentor');
            //     return redirect()->intended('/Mentor/index');
            // }
        }
    }
}
