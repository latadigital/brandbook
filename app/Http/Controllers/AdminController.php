<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserPostRequest;
use App\Http\Requests\UserPutRequest;
use App\Http\Requests\LoginRequest;
use Carbon\Carbon;

use App\User;
use App\Business;
use App\Role;

use Auth;
use Route;

define("ADMIN_ROLE_ID", 1);
define("CLIENT_ROLE_ID", 2);

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function loginValidate(LoginRequest $req) {
        $email = $req->input("email");
        $password = $req->input("password");
        $remember = $req->has("remember") ? true : false;
        if (!Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1, 'deleted_at' => null], $remember)) {
            return redirect()->route('admin_login')->with('message', 'Email y/o password son inválidos');
        }
        $redirect = 'front_home';
        if (Auth::user()->role_id == ADMIN_ROLE_ID) {
            $redirect = 'admin_dashboard';
        }
        return redirect()->route($redirect);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin_login');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }
}
