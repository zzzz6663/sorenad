@extends('master.site')

@section('content')
<h2 class="title_right">
 <div class="d-flex">
    <h1>   لیست تیکتها</h1>
    <a href="{{ route("userticket.create") }}" class="btn btn-success">
        تیکت جدید
    </a>
 </div>
</h2>
<div class="flex dashbord_table">
    <div class="dashbord_table_title">
        <ul class="flex">
            <li>شماره تیکت</li>
            <li>موضوع</li>
            <li>وضعیت تیکت</li>
            <li>تاریخ</li>
            <li>...</li>
        </ul>
    </div>
    @foreach ($tickets as $ticket )
    <div class="dashbord_table_row">
        <ul class="flex">
            <li>{{ $ticket->number }}</li>
            <li>{{ $ticket->title }}</li>
            <li><span class="ticket_answered">
                {{ __("arr.".$ticket->status) }}
                </span></li>
            <li>
                {{ jdate($ticket->created_at)->format("Y-m-d") }}
            </li>
            <li><a class="show_ticket" href="{{ route("userticket.show",$ticket->id) }}">مشاهده تیکت</a></li>
        </ul>
    </div>
    @endforeach




</div>
@endsection
