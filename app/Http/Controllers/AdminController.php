<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserPostRequest;
use App\User;
use Route;

define("ADMIN_ROLE_ID", 1);
define("CLIENT_ROLE_ID", 2);

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function admin() {
        $roleID = CLIENT_ROLE_ID;
        if (Route::currentRouteName() == 'admin_admin') {
            $roleID = ADMIN_ROLE_ID;
        }
        $users = User::where('role_id', $roleID)->get();

        $referTitle = "Clientes";
        if ($roleID == ADMIN_ROLE_ID) {
            $referTitle = "Administradores";
        }

        $output = [
            "users" => $users,
            "role_id" => $roleID,
            "refer_title" => $referTitle,
        ];
        return view('admin.user', $output);
    }

    public function createUser(Request $req) {
        $referTitle = "Clientes";
        $referURL = route("admin_user");
        if ($req->get("r") == ADMIN_ROLE_ID) {
            $referTitle = "Administradores";
            $referURL = route("admin_admin");
        }
        $data = [
            "refer_title" => $referTitle,
            "refer_url" => $referURL,
        ];
        return view('admin.user-create', $data);
    }

    public function createUserPost(UserPostRequest $req) {

    }
}
