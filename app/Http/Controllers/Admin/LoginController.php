<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Helpers\CommonHelper;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('admin.home.login');
    }

    public function postLogin(Request $request)
    {
        if (!$request->get('email')) {
            return response('Email không được để trống!',400);
        }

        if (!$request->get('password')) {
            return response('Password không được để trống!',400);
        }

        $login = DB::table('admin')->where([
            'email'     =>  $request     -> get('email'),
            'password'  =>  md5($request -> get('password'))
        ])->first();

        if (!$login) {
            return response('Tài khoản hoặc mật khẩu sai!',400);
        }

        if($login -> id){
            Cookie::queue('logged_user', json_encode($login), 10000);
            return response('Thành công!');
        }

    }

    public function logout() {
        // Logout luon
        CommonHelper::destroyCookie();
        return redirect()->route('admin.login');
    }
}
