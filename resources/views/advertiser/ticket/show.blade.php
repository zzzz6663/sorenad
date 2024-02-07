@extends('master.site')
@section('content')

<h2 class="title_right">
    {{ $userticket->title }}
</h2>
<div class="ticket_box ticket_show_item">

    @foreach ($answers as $answer)
    @if($answer->customer_id)
    <p class="ticket_send_date_box">
        {{ jdate($answer->created_at) }}
    </p>
    <!-- ticket_item -->
    <div class="user_ticket ticket_item">
        <div class="ticket_avatar"><img src="{{ $answer->customer->avatar() }}"></div>
        <div class="ticket_content">
            {{ ($answer->answer) }}
        </div>
        @if($answer->attach())
        <a class="no_link" href="{{ route("download",['path'=>$answer->attach()]) }}">
            <i class="fas fa-download"></i>
           </a>
        @endif
    </div>
    <!-- ticket_item -->
    @else
    <p class="ticket_send_date_box">
        {{ jdate($answer->created_at) }}
    </p>


    <!-- ticket_item -->
    <div class="ticket_item admin_ticket_item">
        <div class="ticket_avatar"><img src="{{ $answer->user->avatar() }}"></div>
        <div class="ticket_content">
            {{ ($answer->answer) }}
        </div>
        @if($answer->attach())
        <a class="no_link" href="{{ route("download",['path'=>$answer->attach()]) }}">
            <i class="fas fa-download"></i>
           </a>
        @endif

    </div>
    <!-- ticket_item -->

    @endif






    @endforeach


    @if($userticket->status=="closed")

    <div class="alert_box">
        <i class="fa fa-info-circle"></i>
        <p>این درخواست بسته شده است و امکان ارسال پاسخ در آن وجود ندارد. در صورت نیاز تیکت جدیدی ایجاد کنید.</p>
    </div>
    @endif

    @if($userticket->status!="closed")


    <!-- ticket_box -->
    <div class="ticket_form">
        @include('master.error')
        <div class="dashboard_site_form">
            <form action="{{ route("advertiser.new.answer",$userticket->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <p>
                    <label for="ticket_content">توضیحات</label>
                    <textarea placeholder="متن توضیحات را وارد کنید" name="answer">{{ old("answer") }}</textarea>
                </p>
                <p>
                    <label class="file_select" for="file_select">آپلود فایل</label>
                    <input type="file" id="file_select" name="attach">
                </p>
                <p>فایلهای لازم را انتخاب کنید</p>
                <p></p>
                <div class="clear2"></div>
                <p><button id="submit_form">ارسال تیکت </button></p>
            </form>

            <div class="clear"></div>
        </div>

    </div>
    <!-- ticket_item -->
    @endif


    <div class="clear"></div>
</div>
@endsection
