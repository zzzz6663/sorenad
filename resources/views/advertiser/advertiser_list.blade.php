@extends('master.site')

@section('content')
<h2 class="title_right">لیست تبلیغات </h2>


<div class=" dashbord_table">

    <div class="dashbord_table_row table-responsive">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>تایتل </th>
                    <th>نوع </th>
                    <th>وضعیت </th>
                    <th>تعداد سفارش </th>
                    <th>محدودیت روزانه </th>
                    <th>دستگاه </th>
                    <th>لینک </th>
                    <th>تاریخ </th>
                    <th>اقدام</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($advertises as $advertise)
                <tr >
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $advertise->title }}</td>
                    <td>{{(__("arr.". $advertise->type)) }}</td>
                    <td>{{(__("a_status.". $advertise->status)) }}</td>
                    <td>{{ $advertise->order_count }}</td>
                    <td>{{ $advertise->limit_daily_view }}</td>
                    <td>{{(__("arr.". $advertise->device)) }}</td>
                    <td>
                        <a target="__blank" class="tooltipster no_tdnk" title="{{ $advertise->login_tdnk_page }}" href="{{ $advertise->login_tdnk_page }}">مشاهده</a>
                    </td>
                    <td>
                        {{jdate( $advertise->created_at)->format("Y-m-d") }}
                    </td>
                    <td>
                        @if(!$advertise->payed)
                        <form action="{{ route("advertiser.new.ad.".$advertise->type,$advertise->id) }}" method="post">
                            @csrf
                            @method('post')
                            <input type="text" value="acc_money" name="pay_type" hidden>
                            <input type="submit" class="btn btn-primary" value="پرداخت با کیف">
                        </form>
                        <form action="{{ route("advertiser.new.ad.".$advertise->type,$advertise->id) }}" method="post">
                            @csrf
                            @method('post')
                            <input type="text" value="bank_pay" name="pay_type"  hidden>

                            <input type="submit" class="btn btn-primary" value="پرداخت مجدد">
                        </form>
                        @endif

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

</div>
@endsection
