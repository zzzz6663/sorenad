@extends('master.admin')
@section('content')
<div class="row">
    <!-- Basic Badges -->
    <div class="col-lg">
        <div class="card mb-4">
            <h3 class="card-header">اطلاعات بازدید</h3>
            <div class="card-body">
                <div class="row ">
                    @foreach (__("basic2") as $ke=>$val )
                    <div class="col-lg-3">
                        <div class="d-flex justify-content-space-between">
                            <h6 class="content">{{ $val }} :</h6>
                            <h6 class="title">
                                @if($ke=="look_date")
                                {{ jdate( $look[$ke] )->format("Y-m-d") }}
                                @else
                                {{ $look[$ke] }}
                                @endif

                            </h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Basic Badges -->
    <div class="col-lg">
        <div class="card mb-4">
            <h3 class="card-header">اطلاعات پایه ها



            </h3>
            <div class="card-body">
                <div class="row ">



                    @foreach (__("axes2") as $ke=>$val1 )


                    <div class="mb-5">
                        {{--  @dd( $val1)  --}}
                        <h6 class="title">
                            {{  $ke+1 }}-
                            {{$val1['content'] }}
                        </h6>
                        <h6>
                            <span class="alert alert{{ $look[ $val1['name']."_val"] }}">
                                عملکرد

                                {{__("func.". $look[ $val1['name']."_val"] )}}
                            </span>

                            <span class="">
                                امتیاز
                                {{ $look[ $val1['name']."_score"] }}

                            </span>


                        </h6>
                    </div>


                    {{--  <div class="col-lg-3">
                        <div class="d-flex justify-content-space-between">
                            <h6 class="content">{{ $val['content'] }} :</h6>


                            <h6 class="title">


                            </h6>
                        </div>
                    </div>  --}}
                    @endforeach
                </div>
                <h1>
                    درصد
                {{ $look->performance_percentage }} %
                ----
                امتیاز
                {{ $look->total_score }}
                </h1>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <!-- Basic Badges -->
    <div class="col-lg">
        <div class="card mb-4">
            <h3 class="card-header">تصاویر پیوست </h3>
            <div class="card-body">

                    @foreach ($look->attaches as $attach )
                    <button class="btn btn-primary waves-effect waves-light" data-bs-target="#enableOTP{{ $attach->id }}" data-bs-toggle="modal" type="button"> نمایش</button>
                    <div class="modal fade" id="enableOTP{{ $attach->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                            <div class="modal-content p-3 p-md-5">
                                <div class="modal-body">
                                    <button aria-label="بستن" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                                    <div class="text-center mb-4">
                                        <h3 class="mb-2">تصویر  </h3>
                                    </div>
                                    <form class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" id="enableOTPForm" onsubmit="return false" novalidate="novalidate">
                                        <div class="col-12 fv-plugins-icon-container">
                                            <img src="{{ $attach->attach() }}" alt="">
                                        </div>
                                        <div class="col-12">
                                            <button aria-label="" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal" type="reset">
                                                بازگشت
                                            </button>
                                        </div>
                                        <input type="hidden">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>


<div class="row">
    <!-- Basic Badges -->
    <div class="col-lg">
        <div class="card mb-4">
            <h3 class="card-header">یادداشت ناظر </h3>
            <div class="card-body">
                <p>{{ $look->note }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
