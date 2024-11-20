<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    function __construct() {}

    public function index()
    {
        if (Auth::id() > 0) {
            return redirect()->route('auth.dashboard');
        }
        return view('auth.login_user');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        // session()->forget('error');
        // die();
        if (Auth::attempt($credentials)) {
            //session(['success' => 'Đăng nhập thành công!']);
            return redirect()->route('auth.dashboard')->with('success', 'Đăng nhập thành công!');;
        }
        return redirect()->route('auth.index')->with('error', 'Email hoặc mật khẩu không chính xác!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.index');
    }

    public function doregister(RegisterRequest $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('auth.index')->with('success', 'Đăng ký thành công, vui lòng đăng nhập tài khoản!');
    }
}
