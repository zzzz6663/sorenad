@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.fixpost_title") }}
</h2>
@include("master.error")
<form action="{{ route("setting.ads.fixpost") }}" method="post">
    @csrf
    @method('post')
    <div class="dashboard_site_form">
        <div class="flex">
            <label for="setting_installapp_show">فعال کردن تبلیغ در سایت ؟</label>
            <div class="flex switch_box">
                <span>بله</span>
                <label class="switch" for="fixpost_active_site">
                    <input type="text" name="fixpost_active_site" hidden value="0">
                    <input type="checkbox" id="fixpost_active_site" name="fixpost_active_site" {{ old("fixpost_active_site",$fixpost_active_site->val)?"checked":"" }} value="1">
                    <span class="slider"></span>
                </label>
                <span>خیر</span>
            </div>
        </div>

        <div class="flex_threerow">

            <p>
                <label for="fixpost_advertiser_click">
                    {{ __("setting.fixpost_advertiser_click") }}
                </label>
                <input type="text" id="fixpost_advertiser_click" name="fixpost_advertiser_click" value="{{ old("fixpost_advertiser_click",$fixpost_advertiser_click->val) }}">
            </p>

            <p>
                <label for="fixpost_advertiser_show">
                    {{ __("setting.fixpost_advertiser_show") }}
                </label>
                <input type="text" id="fixpost_advertiser_show" name="fixpost_advertiser_show" value="{{ old("fixpost_advertiser_show",$fixpost_advertiser_show->val) }}">
            </p>
            <p>
                <label for="fixpost_limit_order">
                    {{ __("setting.fixpost_limit_order") }}
                </label>
                <input type="text" id="fixpost_limit_order" name="fixpost_limit_order" value="{{ old("fixpost_limit_order",$fixpost_limit_order->val) }}">
            </p>



        </div>



        <div class="flex_tworow">

            <p>
                <label for="fixpost_user_vip_click">
                    {{ __("setting.fixpost_user_vip_click") }}
                </label>
                <input type="text" id="fixpost_user_vip_click" name="fixpost_user_vip_click" value="{{ old("fixpost_user_vip_click",$fixpost_user_vip_click->val) }}">
            </p>
            <p>
                <label for="fixpost_user_vip_show">
                    {{ __("setting.fixpost_user_vip_show") }}
                </label>
                <input type="text" id="fixpost_user_vip_show" name="fixpost_user_vip_show" value="{{ old("fixpost_user_vip_show",$fixpost_user_vip_show->val) }}">
            </p>


        </div>

        <div class="flex_tworow">




            <p>
                <label for="fixpost_user_normal_click">
                    {{ __("setting.fixpost_user_normal_click") }}
                </label>
                <input type="text" id="fixpost_user_normal_click" name="fixpost_user_normal_click" value="{{ old("fixpost_user_normal_click",$fixpost_user_normal_click->val) }}">
            </p>



            <p>
                <label for="fixpost_user_normal_show">
                    {{ __("setting.fixpost_user_normal_show") }}
                </label>
                <input type="text" id="fixpost_user_normal_show" name="fixpost_user_normal_show" value="{{ old("fixpost_user_normal_show",$fixpost_user_normal_show->val) }}">
            </p>



        </div>



    </div>

    <button class="btn btn-success">

        به روز سانی
    </button>
</form>

@endsection
