<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserPostRequest;
use App\Http\Requests\UserPutRequest;
use App\Http\Requests\LoginRequest;
use Carbon\Carbon;
use Storage;

use App\User;
use App\Business;
use App\Role;
use App\File;

use Auth;
use Route;

define("ADMIN_ROLE_ID", 1);
define("CLIENT_ROLE_ID", 2);

define("PATH_STORAGE_CAMPAIGNS", "campaigns");

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

    public function upload(Request $req) {
      $hashFileName = "";
      if ($req->has('file') and $req->has('campaign_id') and $req->has('category_file_id')) {
        $campaignId = $req->input("campaign_id");
        $categoryFileId = $req->input("category_file_id");
        $filenameOrig = $req->file('file')->getClientOriginalName();
        $hashFileName = $req->file('file')->hashName();
        $res = $req->file('file')->storeAs(PATH_STORAGE_CAMPAIGNS.'/'.$campaignId, $hashFileName, 'public');
        File::create([
          "name" => $filenameOrig,
          "url" => $hashFileName,
          "category_file_id" => $categoryFileId,
          "campaign_id" => $campaignId,
        ]);
      }
      return $hashFileName;
    }

    public function uploadDelete(Request $req) {
      if ($req->has('filename') and $req->has('campaign_id')) {
        $campaignId = $req->input('campaign_id');
        $filename = $req->input('filename');
        $pathfilename = PATH_STORAGE_CAMPAIGNS.'/'.$campaignId.'/'.$filename;
        Storage::disk('public')->delete($pathfilename);

        $file = File::where('campaign_id', $campaignId)->where('url', $filename)->first();
        $file->delete();
      }
    }
}
