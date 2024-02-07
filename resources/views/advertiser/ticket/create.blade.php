@extends('master.site')
@section('content')


<div class="ticket_box">

    <!-- ticket_item -->
    <div class="ticket_item">
        <div class="ticket_avatar"><img src="/site/images/support.png"></div>
        <div class="ticket_content">
            <p>کاربر گرامی لطفا درخواستهای پشتیبانی خود را از طریق لینک زیر برای ما ارسال کنید.</p>
            <p>همچنین در صورت نیاز می توانید با شماره تلفن 021326546545 تماس بگیرید.</p>
        </div>
    </div>
    <!-- ticket_item -->


    <!-- ticket_box -->
    <div class="ticket_form">
        @include('master.error')
        <div class="dashboard_site_form">
            <form method="post" action="{{ route("userticket.store") }}" enctype="multipart/form-data">
                @csrf
                @method('post')
                <p>
                    <label for="ticket_subject">موضوع</label>
                    <input type="text" id="ticket_subject" name="title" value="{{ old("title") }}">
                </p>

                <p>
                    <label for="ticket_content">توضیحات</label>
                    <textarea placeholder="متن توضیحات را وارد کنید" name="content">{{ old("content") }}</textarea>
                </p>

                <p>
                    <label class="file_select" for="file_select">آپلود فایل</label>
                    <input type="file" id="file_select" class="form-control" name="attach">
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

    <div class="clear"></div>
</div>
@endsection
