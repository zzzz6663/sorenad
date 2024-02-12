@extends('master.pdf')

@section('content')
<br>
<div class="page-header d-print-none">
    <div class="row g-2 align-items-center">
        <div class="col">
            <h4 class="page-title">

                Proforma Invoice:
                {{$transaction->id}}
            </h4>
        </div>

    </div>


</div>



<div class="card card-lg ">
    <div class="card-body canvas_div_pdf_war">
        <div class="row">
            <div class="col-12 " style=" text-align:center">
                <div class="center-block" style=" display: inline-block">

                </div>
            </div>


        </div>
 
    </div>

</div>


@endsection
