@extends('master.site')
@php
$navbar=true;
$sidebar=true;
@endphp
@section('login')



<div class="login_box">


    <form action="{{ route("register") }}" method="post">
    <div class="login_forms_box box_shdow">

            @csrf
            @method('post')
    @include('master.error')

            <div class="logo_box">
                <figure><img src="/site/images/logo.png"></figure>
            </div>
            <p>حساب کاربری دارید ؟ <a class="register_url" href="{{ route("login") }}">ورود</a></p>
            <input type="text" name="name" value="{{ old("name") }}" placeholder="نام">
            <input type="text" name="family" value="{{ old("mobile") }}" placeholder="نام خانوادگی">
            <input type="text" name="mobile" value="{{ old("mobile") }}" placeholder="تلفن همراه">
            <input type="text" name="password" value="" placeholder="رمز ورود">
            <input type="text" name="password_confirmation" value="" placeholder="تکرار رمز ورود">
            <input type="submit" value="ثبت نام">

    </div>

</form>


</div>
@endsection
