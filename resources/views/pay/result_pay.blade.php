@extends('master.site')
@php
$navbar=true;
$sidebar=true;
@endphp
@section('login')
<div class="container">
     <div class="row d-flex justify-content-center">
        <di class="col-lg-6 ">
            <div class=" m-5 text-center box_pay">
                <h1 class=" text-center alert alert-{{ $transaction->status=="payed"?"success":"danger" }}">
                    پرداخت  انجام
                    {{ $transaction->status=="payed"?"شد":"نشد" }}
                </h1>
                <br>
                <h2>
                     مبلغ
            {{ number_format($transaction->amount) }}
            تومان 
                </h2>

               <h3>

                    شماره پیگیری
           {{ ($transaction->transactionId) }}
        </h3>

                <br>

                <a href="{{ route("customer.money.charge") }}" class="btn btn-success">بازگشت به پنل </a>

            </div>
        </di>
     </div>

</div>
@endsection
