<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
//        dd($request->all());
        if (auth()->attempt($request->only(['username', 'password']))) {
            // 登录成功
            return redirect()->route('admin.index')->with('msg', '登录成功');
        }
        return redirect()->back()->withErrors(['errors' => '登录不合法']);
    }

}
