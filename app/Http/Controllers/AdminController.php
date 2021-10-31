<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserPostRequest;
use App\Http\Requests\UserPutRequest;
use Carbon\Carbon;

use App\User;
use App\Business;
use App\Role;

use Route;

define("ADMIN_ROLE_ID", 1);
define("CLIENT_ROLE_ID", 2);

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function admin() {
        $roleID = CLIENT_ROLE_ID;
        if (Route::currentRouteName() == 'admin_admin') {
            $roleID = ADMIN_ROLE_ID;
        }
        $users = User::where('role_id', $roleID)
            ->whereNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->get();

        $referTitle = "Clientes";
        if ($roleID == ADMIN_ROLE_ID) {
            $referTitle = "Administradores";
        }

        $output = [
            "users" => $users,
            "role_id" => $roleID,
            "refer_title" => $referTitle,
        ];
        return view('admin.user.user', $output);
    }

    public function createUser(Request $req) {
        $referTitle = "Clientes";
        $referURL = route("admin_user");
        if ($req->get("r") == ADMIN_ROLE_ID) {
            $referTitle = "Administradores";
            $referURL = route("admin_admin");
        }
        $business = Business::all();
        $roles = Role::all();
        $data = [
            "refer_title" => $referTitle,
            "refer_url" => $referURL,
            "business" => $business,
            "roles" => $roles,
        ];
        return view('admin.user.user-create', $data);
    }

    public function createUserPost(UserPostRequest $req) {
        $firstname = $req->input("firstname");
        $lastname = $req->input("lastname");
        $position = $req->input("position");
        $email = $req->input("email");
        $password = $req->input("r_password");
        $businessID = $req->input("business");
        $roleID = $req->input("role");
        $active = $req->input("active");

        User::create([
            "firstname" => $firstname,
            "lastname" => $lastname,
            "position" => $position,
            "email" => $email,
            "password" => $password,
            "business_id" => $businessID,
            "role_id" => $roleID,
            "active" => $active,
        ]);

        $aliasRoute = "admin_user";
        if ($roleID == ADMIN_ROLE_ID) {
            $aliasRoute = "admin_admin";
        }
        return redirect()->route($aliasRoute);
    }

    public function deleteUser($userID = 0) {
        $user = User::find($userID);
        if (!$user) {
            return redirect()->back();
        }
        $user->deleted_at = Carbon::now();
        $user->save();

        return redirect()->back();
    }

    public function editUser($roleID = 0, $userID = 0) {
        $referTitle = "Clientes";
        $referURL = route("admin_user");
        if ($roleID == ADMIN_ROLE_ID) {
            $referTitle = "Administradores";
            $referURL = route("admin_admin");
        }

        $user = User::find($userID);
        if (!$user) {
            return redirect()->back();
        }

        $business = Business::all();
        $roles = Role::all();
        $data = [
            "refer_title" => $referTitle,
            "refer_url" => $referURL,
            "user" => $user,
            "business" => $business,
            "roles" => $roles,
        ];
        return view('admin.user.user-edit', $data);
    }

    public function editUserPut(UserPutRequest $req, $roleID = 0, $userID = 0) {
        $user = User::find($userID);
        if (!$user) {
            return redirect()->route('admin_dashboard');
        }

        $firstname = $req->input("firstname");
        $lastname = $req->input("lastname");
        $position = $req->input("position");
        $email = $req->input("email");
        $password = $req->input("r_password");
        $businessID = $req->input("business");
        $roleID = $req->input("role");
        $active = $req->input("active");

        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->position = $position;
        $user->email = $email;
        $user->business_id = $businessID;
        $user->role_id = $roleID;
        $user->password = $password;
        $user->active = ($active ? true : false);
        $user->save();

        return redirect()->route('admin_user_edit', [$roleID, $user->id]);
    }
}
