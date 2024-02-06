@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.video_title") }}
</h2>
@include("master.error")
<form action="{{ route("setting.ads.video") }}" method="post">
    @csrf
    @method('post')
    <div class="dashboard_site_form">
        <div class="flex">
            <label for="setting_installapp_show">فعال کردن تبلیغ در سایت ؟</label>
            <div class="flex switch_box">
                <span>بله</span>
                <label class="switch" for="video_active_site">
                    <input type="text" name="video_active_site" hidden value="0">
                    <input type="checkbox" id="video_active_site" name="video_active_site" {{ old("video_active_site",$video_active_site->val)?"checked":"" }} value="1">
                    <span class="slider"></span>
                </label>
                <span>خیر</span>
            </div>
        </div>

        <div class="flex_threerow">

            <p>
                <label for="video_advertiser_click">
                    {{ __("setting.video_advertiser_click") }}
                </label>
                <input type="text" id="video_advertiser_click" name="video_advertiser_click" value="{{ old("video_advertiser_click",$video_advertiser_click->val) }}">
            </p>

            <p>
                <label for="video_advertiser_show">
                    {{ __("setting.video_advertiser_show") }}
                </label>
                <input type="text" id="video_advertiser_show" name="video_advertiser_show" value="{{ old("video_advertiser_show",$video_advertiser_show->val) }}">
            </p>
            <p>
                <label for="video_limit_order">
                    {{ __("setting.video_limit_order") }}
                </label>
                <input type="text" id="video_limit_order" name="video_limit_order" value="{{ old("video_limit_order",$video_limit_order->val) }}">
            </p>



        </div>



        <div class="flex_tworow">

            <p>
                <label for="video_user_vip_click">
                    {{ __("setting.video_user_vip_click") }}
                </label>
                <input type="text" id="video_user_vip_click" name="video_user_vip_click" value="{{ old("video_user_vip_click",$video_user_vip_click->val) }}">
            </p>
            <p>
                <label for="video_user_vip_show">
                    {{ __("setting.video_user_vip_show") }}
                </label>
                <input type="text" id="video_user_vip_show" name="video_user_vip_show" value="{{ old("video_user_vip_show",$video_user_vip_show->val) }}">
            </p>


        </div>

        <div class="flex_tworow">




            <p>
                <label for="video_user_normal_click">
                    {{ __("setting.video_user_normal_click") }}
                </label>
                <input type="text" id="video_user_normal_click" name="video_user_normal_click" value="{{ old("video_user_normal_click",$video_user_normal_click->val) }}">
            </p>



            <p>
                <label for="video_user_normal_show">
                    {{ __("setting.video_user_normal_show") }}
                </label>
                <input type="text" id="video_user_normal_show" name="video_user_normal_show" value="{{ old("video_user_normal_show",$video_user_normal_show->val) }}">
            </p>



        </div>



    </div>

    <button class="btn btn-success">

        به روز سانی
    </button>
</form>

@endsection
