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
        <p>شماره موبایل خود را وارد کنید</p>
        <div id="first">
            <input type="text" name="" id="mobile" placeholder="شماره موبایل">
            <span id="send_code" class="btn1">
                ارسال کد موقت
            </span>

        </div>
        <div id="second" style="display: none">
            <h5>
                شماره وارد شده
                <span class="mobile"></span>
            </h5>
            <input type="text" name="" id="code" placeholder="کد پیامک شده">
            <h5>
                شماره اشتباهه؟
                <span class="" id="wrong">کلیک کنید</span>
            </h5>

            <span id="check_code" class="btn1">
                ورود
            </span>

        </div>


    </div>



</div>
@endsection
