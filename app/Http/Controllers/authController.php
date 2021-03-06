<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;

class authController extends Controller
{
    public function login()
    {
        return view('form/login');
    }
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            ['email'=> 'required|email',
            'password' => 'required',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back->withError($validator)->withInput();
        }
        $remember = $request->remember;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if (Auth::user()->trangthaikichhoat!=1) {
                return redirect()->route('auth.login')->with('message', 'Tài khoản đã bị khóa vui lòng liên hệ admin');
            }
            if (Auth::user()->role==0) {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->route('admin')->with('success', 'Đăng nhập thành công');
            }
        }
    }

    public function logout()
    {
        $data = Auth::user()->role;
        if ($data == 0) {
            Auth::logout();
            return redirect('/');
        } else {
            Auth::logout();
            return redirect()->route('auth.login');
        }
        // Auth::logout();

        // return redirect()->route('auth.login');
    }
}
