<?php

namespace App\Http\Controllers\advertiser;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use PHPUnit\Framework\Constraint\Count;

class AdvertiserController extends Controller
{

    public function faqs(Request $request)
    {
        $user = auth()->user();
        $faqs = Faq::all();
        return view('advertiser.faqs', compact(["user", "faqs"]));
    }

    public function withdrawal_request(Request $request)
    {
        $user = auth()->user();
         
        if ($request->isMethod("post")) {
            $data = $request->validate([
                'amount' => "required|integer|min:100000|max:".   $user->balance(),
            ]);
            $withdrawal=  $user->withdrawals()->create([
                'status'=>"wait_for_admin_confirm",
                'amount'=>$data['amount'],
            ]);
            $user->transactions()->create([
                'status'=>"wait_for_admin_confirm",
                'amount'=>-1*$data['amount'],
                'type'=>"withdrawal",
                'withdrawal_id'=>$withdrawal->id,
                'track'=>$withdrawal->id+1000,
            ]);

            alert()->success("درخواست شما با موفقیت ثبت شد  ");
            return redirect()->route("advertiser.withdrawal.request");
        }
        return view('advertiser.withdrawal_request', compact(["user"]));
    }
    public function profile(Request $request)
    {
        $user = auth()->user();

        if ($request->isMethod("post")) {
            $data = $request->validate([
                'name' => "required",
                'family' => "required",
                'mellicode' => "required|size:10",
                'avatar' => "nullable",
            ]);

            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $name_img = 'avatar_' . $user->id . '.' . $avatar->getClientOriginalExtension();
                $avatar->move(public_path('/media/users/avatar/'), $name_img);
                $data['avatar'] = $name_img;
            }


            $user->update($data);
            alert()->success("اطلاعات با موفقیت ثبت شد ");
            return redirect()->route("advertiser.profile");
        }



        return view('advertiser.profile', compact(["user"]));
    }
    public function change_password(Request $request)
    {
        $user = auth()->user();

        if ($request->isMethod("post")) {
            $data = $request->validate([
                'password' => "required|confirmed|min:6",
            ]);
            $data['password'] = bcrypt($data['password']);
            $user->update($data);
            alert()->success("اطلاعات با موفقیت ثبت شد ");
            return redirect()->route("advertiser.change.password");
        }


        return view('advertiser.change_password', compact(["user"]));
    }
    public function sites(Request $request)
    {
        $user = auth()->user();
        if ($request->isMethod("post")) {
            $data = $request->validate([
                'name' => "required|max:50",
                'site' =>   array(
                    'required',
                    'unique:sites,site',
                    'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'
                ),
                'cat_id' => "required",
            ]);
            $data['status'] = "created";
            $user->sites()->create($data);
            alert()->success("سایت با موفقیت اضافه شد");
            return redirect()->route("advertiser.sites");
        }

        $sites = $user->sites;
        return view('advertiser.sites', compact(["user", "sites"]));
    }
    public function bank_info(Request $request)
    {
        $user = auth()->user();

        if ($request->isMethod("post")) {
            $data = $request->validate([
                'shaba' => "required|size:24",
                'cart' => "required|size:16",
                'account' => "required",
                'a_mellicode' => "required|size:10",
                'bank' => "required",
            ]);
            $data['confirm_bank_account'] = null;
            $user->update($data);
            alert()->success("اطلاعات با موفقیت ثبت شد ");
            return redirect()->route("advertiser.bank.info");
        }
        return view('advertiser.bank_info', compact(["user"]));
    }
}
