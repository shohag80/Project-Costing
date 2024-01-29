<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        // dd('Hello Login');
        return view('Backend.Pages.Auth.login');
    }

    public function log_store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $credentials = $request->only('email', 'password');

        $login = auth()->attempt($credentials);

        if ($login) {
            return redirect()->route('Dashboard');
        }
        return redirect()->back()->withInput();
    }

    public function registration()
    {
        // dd('Hello Login');
        return view('Backend.Pages.Auth.registration');
    }
    public function reg_store(Request $request)
    {
        // dd($request);
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        };

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('Login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('Login');
    }
}
