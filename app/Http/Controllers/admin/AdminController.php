<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use TimeHunter\LaravelGoogleReCaptchaV2\Validations\GoogleReCaptchaV2ValidationRule;

class AdminController extends Controller
{

    public function users()
    {
        return view('admin.users.all');
    }
    public function provinces()
    {
        return view('admin.provinces.all');
    }
    public function login()
    {
        $user = auth()->user();
        return view('admin.auth.login');
    }

    public function admin_dashoard()
    {
        $user = auth()->user();
        return view('admin.dashboard.admin_dashoard');
    }

}
