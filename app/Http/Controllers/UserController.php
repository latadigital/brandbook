<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Business;
use App\Role;

use Route;

define("ADMIN_ROLE_ID", 1);
define("CLIENT_ROLE_ID", 2);

class UserController extends Controller
{
    public function users(Request $req) {
        $roleID = CLIENT_ROLE_ID;
        if (Route::currentRouteName() == 'admin_admin') {
            $roleID = ADMIN_ROLE_ID;
        }
        $search = $req->get("search");
        $query = User::where('role_id', $roleID)->whereNull('deleted_at')->orderBy('created_at', 'desc');
        if ($search != "") {
            $query->where(function($query) use ($search) {
                $query
                    ->where("firstname", "like", "%".$search."%")
                    ->orWhere("lastname", "like", "%".$search."%")
                    ->orWhere("position", "like", "%".$search."%")
                    ->orWhere("email", "like", "%".$search."%");
            });
        }
        $query->orderBy('created_at', 'desc')->get();
        $users = $query->get();

        $referTitle = "Clientes";
        $routePath = "admin_user";
        if ($roleID == ADMIN_ROLE_ID) {
            $referTitle = "Administradores";
            $routePath = "admin_admin";
        }

        $output = [
            "users" => $users,
            "role_id" => $roleID,
            "refer_title" => $referTitle,
            "route_path" => $routePath,
            "word_search" => $search,
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

        $filename = "";
        if($req->hasFile('avatar')){
            $filename = $req->avatar->hashName();
            $req->avatar->storeAs('avatar',$filename,'public');
        }

        User::create([
            "firstname" => $firstname,
            "lastname" => $lastname,
            "position" => $position,
            "email" => $email,
            "password" => $password,
            "business_id" => $businessID,
            "role_id" => $roleID,
            "active" => $active,
            "avatar" => $filename,
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

        $filename = "";
        if($req->hasFile('avatar')){
            $filename = $req->avatar->hashName();
            $req->avatar->storeAs('avatar',$filename,'public');
        }

        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->position = $position;
        $user->email = $email;
        $user->business_id = $businessID;
        $user->role_id = $roleID;
        $user->password = $password;
        $user->active = $active;
        if ($filename !== "") {
            $user->avatar = $filename;
        }
        $user->save();

        return redirect()->route('admin_user_edit', [$roleID, $user->id]);
    }
}
