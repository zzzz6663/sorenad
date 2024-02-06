<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use PHPUnit\Framework\Constraint\Count;

class PanelController extends Controller
{

    public function profile(Request $request)
    {
        $user=auth()->user();
        return view('site.panel.profile', compact(["user"]));
    }
}
