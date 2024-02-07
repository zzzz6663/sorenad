@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.app_title") }}
</h2>
@include("master.error")
<form action="{{ route("advertiser.change.password") }}" method="post">
    @csrf
    @method('post')
    <h2 class="title_right"><i class="fa fa-user-o"></i>اطلاعات کلی</h2>
    <div class="dashboard_site_form">

        <div class="flex_tworow">

        <p>
        <label for="password">رمز عبور </label>
        <input type="text" id="password" name="password">
        </p>

        <p>
        <label for="password">تکرار رمز عبور</label>
        <input type="text" id="password" name="password_confirmation">
        </p>

        </div>

        <div class="clear"></div>
        </div>
    <button class="btn btn-success">

        به روز سانی
    </button>
</form>

@endsection
