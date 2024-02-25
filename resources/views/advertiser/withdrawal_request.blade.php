@extends('master.site')

@section('content')
<h2 class="title_right">
    درخواست وجه
</h2>
<div class="request_box flex">

    <div class="blue_box">
        <div class="box_title">
            <h4>درامد قابل برداشت</h4>
            <p>
                {{ number_format($user->balance() )}}
                تومان</p>
        </div>
    </div>

    <div class="green_box">
        <div class="box_title">
            <h4>جمع کل برداشتی</h4>
            <p>
                {{ number_format($user->total_withdrawal() )}}
                    تومان</p>
        </div>
    </div>

</div>
@include("master.error")
<form action="{{ route("advertiser.withdrawal.request") }}" method="post">
    @csrf
    @method('post')
    <div class="moneybox_req box_shdow">
        <p>مبلغی که قصد دارید از حساب تان خارج کنید را وارد کنید. </p>
        <p>این مبلغ باید کمتر از درامد قابل برداشت شما و بیشتر از
             {{ number_format($min_val_checkout) }}

            تومان باشد.</p>
        <div class="dashboard_site_form">
            <input type="number" id="money" class="number_format form-control" name="amount" value="{{ old("amount") }}" placeholder="تومان">
            <br>
            <br>
            <p id="amount_total" class="persian_number">

            </p>
            @if( $user->withdrawals()->whereStatus("wait_for_admin_confirm")->count())
            <p class="text text-danger">
                در حال حاضر یک درخواست در دست برسی دارید
            </p>
            @else
            <button class="btn btn-danger">درخواست برداشت</button>

            @endif
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</form>



<h2 class="title_right">لیست درخواست ها</h2>
<div class="flex dashbord_table">
    <div class="dashbord_table_title">
        <ul class="flex">
            <li>شماره درخواست</li>
            <li>وضعیت درخواست</li>

            <li>مبلغ </li>

            <li>تاریخ درخواست</li>

        </ul>
    </div>

    <div class="dashbord_table_row">
        @foreach ($user->withdrawals()->latest()->get() as  $withrawal)
        <ul class="flex">
            <li>{{$loop->iteration }}</li>
            <li>{{__("withdrawal.".$withrawal->status) }}</li>
            <li>
                {{ number_format($withrawal->amount )}}
                <span class="price_format">تومان</span>
            </li>
            <li>{{ jdate($withrawal->created_at) }} </li>
        </ul>
        @endforeach

    </div>

</div>

@endsection
