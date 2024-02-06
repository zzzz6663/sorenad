@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.banner_title") }}
</h2>
@include("master.error")
<form action="{{ route("setting.ads.banner") }}" method="post">
    @csrf
    @method('post')
    <div class="dashboard_site_form">
        <div class="flex">
            <label for="setting_installbanner_show">فعال کردن تبلیغ در سایت ؟</label>
            <div class="flex switch_box">
                <span>بله</span>
                <label class="switch" for="banner_active_site">
                    <input type="text" name="banner_active_site" hidden value="0">
                    <input type="checkbox" id="banner_active_site" name="banner_active_site" {{ old("banner_active_site",$banner_active_site->val)?"checked":"" }} value="1">
                    <span class="slider"></span>
                </label>
                <span>خیر</span>
            </div>
        </div>

        <div class="flex_threerow">

            <p>
                <label for="banner_advertiser_click">
                    {{ __("setting.banner_advertiser_click") }}
                </label>
                <input type="text" id="banner_advertiser_click" name="banner_advertiser_click" value="{{ old("banner_advertiser_click",$banner_advertiser_click->val) }}">
            </p>

            <p>
                <label for="banner_advertiser_show">
                    {{ __("setting.banner_advertiser_show") }}
                </label>
                <input type="text" id="banner_advertiser_show" name="banner_advertiser_show" value="{{ old("banner_advertiser_show",$banner_advertiser_show->val) }}">
            </p>
            <p>
                <label for="banner_limit_order">
                    {{ __("setting.banner_limit_order") }}
                </label>
                <input type="text" id="banner_limit_order" name="banner_limit_order" value="{{ old("banner_limit_order",$banner_limit_order->val) }}">
            </p>



        </div>



        <div class="flex_tworow">

            <p>
                <label for="banner_user_vip_click">
                    {{ __("setting.banner_user_vip_click") }}
                </label>
                <input type="text" id="banner_user_vip_click" name="banner_user_vip_click" value="{{ old("banner_user_vip_click",$banner_user_vip_click->val) }}">
            </p>
            <p>
                <label for="banner_user_vip_show">
                    {{ __("setting.banner_user_vip_show") }}
                </label>
                <input type="text" id="banner_user_vip_show" name="banner_user_vip_show" value="{{ old("banner_user_vip_show",$banner_user_vip_show->val) }}">
            </p>


        </div>

        <div class="flex_tworow">




            <p>
                <label for="banner_user_normal_click">
                    {{ __("setting.banner_user_normal_click") }}
                </label>
                <input type="text" id="banner_user_normal_click" name="banner_user_normal_click" value="{{ old("banner_user_normal_click",$banner_user_normal_click->val) }}">
            </p>



            <p>
                <label for="banner_user_normal_show">
                    {{ __("setting.banner_user_normal_show") }}
                </label>
                <input type="text" id="banner_user_normal_show" name="banner_user_normal_show" value="{{ old("banner_user_normal_show",$banner_user_normal_show->val) }}">
            </p>



        </div>



    </div>

    <button class="btn btn-success">

        به روز سانی
    </button>
</form>

@endsection
