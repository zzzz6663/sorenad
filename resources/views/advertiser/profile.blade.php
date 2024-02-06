@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.app_title") }}
</h2>
@include("master.error")
<form action="{{ route("setting.ads.app") }}" method="post">
    @csrf
    @method('post')
    <h2 class="title_right"><i class="fa fa-user-o"></i>اطلاعات کلی</h2>
    <div class="dashboard_site_form">
        <form>

            <div class="form_right_box flex_tworow">

                <p>
                    <label for="fname">نام</label>
                    <input type="text" id="fname" value="{{ old("name",$user->name) }}"  name="name">
                </p>

                <p>
                    <label for="family">نام خانوادگی</label>
                    <input type="text" id="family" value="{{ old("family",$user->family) }}"  name="family">
                </p>

                <p>
                    <label for="mellicode">کد ملی</label>
                    <input type="text" id="mellicode" value="{{ old("mellicode",$user->mellicode) }}" name="mellicode">
                </p>

                <p>
                    <label for="mobile">شماره موبایل</label>
                    <input type="text" id="mobile" value="{{ old("mobile",$user->mobile) }}" name="mobile">
                </p>

            </div>

            <div class="form_left_box upload_avatar">

                <p>
                    <i class="fa fa-image"></i>
                    <label class="avatar_select" for="avatar">آپلود آواتار</label>
                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                </p>

            </div>
            <div class="clear2"></div>
            <p><button id="submit_form">ثبت </button></p>
        </form>

        <div class="clear"></div>
    </div>

    <button class="btn btn-success">

        به روز سانی
    </button>
</form>

@endsection
