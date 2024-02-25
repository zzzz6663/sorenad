@extends('master.site')

@section('content')
<h2 class="title_right">
    گزارشات
</h2>
<div class="">
    <ul id="logs">
        @foreach ($logs as $log )
        <li class="text text-{{ $log->seen?"":"danger" }}">
            <span>
                <i class="fa-solid fa-font-awesome"></i>
            </span>
            @switch($log->type)
            @case("confirm_site")
                سایت شما با تایتل
               <span class="text text-info">
                {{ $log->site->name }}
               </span>
                تایید شد
                @break


                @case("reject_site")
                سایت شما با تایتل
               <span class="text text-info">
                {{ $log->site->name }}
               </span>
               به دلیل
               <span class="text text-danger">
                {{ $log->site->reason }}
               </span>
                رد  شد
                @break
            @case("confirm_withdrawal")
                درخواست برداشت وجه به مبلغ
               <span class="text text-info">
                {{ number_format($log->withdrawal->amount) }}
                تومان
               </span>
                تایید شد
                <br>
               <p>
                توضیحات:
                {{ $log->withdrawal->info }}
               </p>
                @break









                @case("new_answer")
                یک جواب برای شما درتیکت
               <span class="text text-info">
                {{ $log->answer->ticket->title }}
               </span>
                ثبت شد
                <p>
                    <a href="{{ route("userticket.index") }}">مشاهده</a>
                </p>
                @break


            @default

        @endswitch
        <span dir="rtl" class="text text-success">
            {{jdate($log->created_at) }}
        </span>
        </li>


        @endforeach
    </ul>
</div>
@php
    $user->logs()->whereNull("seen")->update(['seen'=>Carbon\Carbon::now()]);
@endphp
@endsection
