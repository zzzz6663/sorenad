@extends('master.site')
@php
$navbar=true;
$sidebar=true;
@endphp
@section('login')
<div class="login_box">
    <div class="login_forms_box box_shdow">
        <div class="logo_box">
            <figure><img src="/site/images/logo.png"></figure>
        </div>
        <p>حساب کاربری ندارید ؟ <a class="register_url" href="{{ route("register") }}">ثبت نام </a></p>
        <input type="text" name="" placeholder="تلفن همراه">
        <input type="text" name="" value="" placeholder="رمز ورود">
        <a class="login_ads_panels" href=""> 🎯ورود به پنل تبلیغ دهنده</a>
        <input type="submit" value="ورود">
        <div class="flex bt_form_txt">
            <p><a href="{{ route("mobile.login") }}"> 🔑ورود بدون رمز</a></p>
            <p class="rember_me_box">
                <input type="radio" id="remeber_me" name="remeber_me">
                <label for="remeber_me">مرا به خاطر بسپار</label></p>
        </div>
    </div>
</div>
@endsection
