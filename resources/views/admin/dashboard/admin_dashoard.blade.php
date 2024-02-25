@extends('master.site')

@section('content')
<div class="flex amar_box">

    <div class="amar_item">
    <p><i class="fa fa-user"></i>ثبت نام های امروز</p>
    <p>{{ $current_register->count() }}</p>
    </div>

    <div class="amar_item">
    <p><i class="fa fa-mouse-pointer"></i> تبلیغات در انتظار تائید</p>
    <p>{{ $advertise_ready_to_confirm->count() }}</p>
    </div>

    <div class="amar_item">
    <p><i class="fa fa-bullhorn"></i> تبلیغات فعال سرویس</p>
    <p>{{ $ready_to_show->count() }} </p>
    </div>

    <div class="amar_item">
    <p><i class="fa fa-money"></i> درخواست های تسویه حساب</p>
    <p>{{ $withdrawal_wait_for_admin_confirm->count() }}</p>
    </div>


    </div>
@endsection
