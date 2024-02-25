@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.txt_title") }}
</h2>
@include("master.error")
<form action="{{ route("setting.ads.text") }}" method="post">
    @csrf
    @method('post')
    <div class="dashboard_site_form">
        <div class="flex">
            <label for="setting_installapp_show">فعال کردن تبلیغ در سایت ؟</label>
            <div class="flex switch_box">
                <span>بله</span>
                <label class="switch" for="txt_active_site">
                    <input type="text" name="txt_active_site" hidden value="0">
                    <input type="checkbox" id="txt_active_site" name="txt_active_site" {{ old("txt_active_site",$txt_active_site->val)?"checked":"" }} value="1">
                    <span class="slider"></span>
                </label>
                <span>خیر</span>
            </div>
        </div>

        <div class="flex_threerow">

            <p>
                <label for="txt_advertiser_click">
                    {{ __("setting.txt_advertiser_click") }}
                </label>
                <input type="text" id="txt_advertiser_click" name="txt_advertiser_click" value="{{ old("txt_advertiser_click",$txt_advertiser_click->val) }}">
            </p>

            <p>
                <label for="txt_advertiser_show">
                    {{ __("setting.txt_advertiser_show") }}
                </label>
                <input type="text" id="txt_advertiser_show" name="txt_advertiser_show" value="{{ old("txt_advertiser_show",$txt_advertiser_show->val) }}">
            </p>
            <p>
                <label for="txt_limit_order">
                    {{ __("setting.txt_limit_order") }}
                </label>
                <input type="text" id="txt_limit_order" name="txt_limit_order" value="{{ old("txt_limit_order",$txt_limit_order->val) }}">
            </p>



        </div>



        <div class="flex_tworow">

            <p>
                <label for="txt_user_vip_click">
                    {{ __("setting.txt_user_vip_click") }}
                </label>
                <input type="text" id="txt_user_vip_click" name="txt_user_vip_click" value="{{ old("txt_user_vip_click",$txt_user_vip_click->val) }}">
            </p>
            <p>
                <label for="txt_user_vip_show">
                    {{ __("setting.txt_user_vip_show") }}
                </label>
                <input type="text" id="txt_user_vip_show" name="txt_user_vip_show" value="{{ old("txt_user_vip_show",$txt_user_vip_show->val) }}">
            </p>


        </div>

        <div class="flex_tworow">




            <p>
                <label for="txt_user_normal_click">
                    {{ __("setting.txt_user_normal_click") }}
                </label>
                <input type="text" id="txt_user_normal_click" name="txt_user_normal_click" value="{{ old("txt_user_normal_click",$txt_user_normal_click->val) }}">
            </p>



            <p>
                <label for="txt_user_normal_show">
                    {{ __("setting.txt_user_normal_show") }}
                </label>
                <input type="text" id="txt_user_normal_show" name="txt_user_normal_show" value="{{ old("txt_user_normal_show",$txt_user_normal_show->val) }}">
            </p>



        </div>



    </div>

    <button class="btn btn-success">

        به روز سانی
    </button>
</form>

@endsection
