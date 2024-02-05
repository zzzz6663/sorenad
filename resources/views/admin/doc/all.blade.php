@extends('master.admin')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header  ">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">

                                سند ها
                               ({{ $docs->total() }})
                            </h3>
                            <div class="">
                                <div class="card-tools">
                                    <a href="{{ route("doc.create") }}" class="btn btn-primary">سند جدید
                                        <i class="ti ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                       <form  autocomplete="off" action="{{ route("doc.index") }}" method="get" id="search_f" class="d-flex  align-items-center">
                        @csrf
                        @method('get')

                        <div class="inp">
                            <label for="">از تاریخ</label>
                            <input type="text" class="persian_date form-control" name="from" value="{{ request("from") }}">
                        </div>
                        <div class="inp">
                            <label for="">تا تاریخ</label>
                            <input type="text" class="persian_date form-control" name="to" value="{{ request("to") }}">
                        </div>

                        <div class="inp">
                            <button class="btn btn-secondary" style="margin-top:22px">
                                جستجو
                            </button>
                        </div>

                       </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive text-nowrap">
                        <table class="table ">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <th>تاریخ</th>

                                    <th>بدهکار</th>
                                    <th>طلبکار</th>
                                    <th>توضیحات</th>
                                    <th>ضمیمه</th>
                                    <th>ایجاد کننده </th>
                                    <th>ثبت سند </th>
                                    <th>وضعیت</th>
                                    <th>سند</th>
                                    <th>بیشتر</th>
                                </tr>
                                @foreach ($docs as $doc )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>


                                    <td>
                                        <span class="alert">
                                            {{ jdate($doc->submited)->format("Y-m-d") }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="alert alert-danger">
                                            {{ $doc->account_debt->name }}
                                            <br>
                                        </span>
                                        <div>
                                            {{ number_format($doc->debt_price) }}
                                            ریال
                                        </div>
                                    </td>
                                    <td>
                                        <span class="alert alert-success">
                                            {{ $doc->account_demand->name }}
                                            <br>
                                        </span>
                                        <div>
                                            {{ number_format($doc->demand_price) }}
                                            ریال
                                        </div>
                                    </td>
                                    <td>
                                            @if(strlen($doc->info)>60)
                                            <span class="tooltiper" title="{{ $doc->info }}">
                                            {{ Str::limit($doc->info, 20)  }}....

                                            </span>
                                            @else
                                            {{ $doc->info }}
                                            @endif


                                    </td>
                                    <td>
                                        @if($doc->attach )
                                        <a href="{{ route("download",['name'=>$doc->attach]) }}">
                                            <i class="ti ti-cloud-download"></i>
                                        </a>

                                        @endif

                                    </td>
                                    <td>
                                        {{ $doc->user->name }}
                                    </td>

                                    <td>
                                        @if($doc->approved)
                                        {{ $doc->approved->name }}
                                        @endif
                                        @if( !$doc->serial)

                                        <i style=";" class="ti ti-table-export insert_serial" id="btn_serial{{ $doc->id }}"  data-id="{{ $doc->id }}" data-bs-target="#enableOTP" data-bs-toggle="modal"></i>
                                        {{--  <button class="btn btn-danger waves-effect waves-light insert_serial"
                                            data-id="{{ $doc->id }}" data-bs-target="#enableOTP" data-bs-toggle="modal"
                                            type="button" id="btn_serial{{ $doc->id }}"> ثبت سند</button>  --}}
                                            @endif
                                    </td>
                                    <td>



                                        <div id="status_serial{{ $doc->id }}" class=" alert alert-{{ $doc->status }}">
                                            {{ __("arr.".$doc->status) }}
                                        </div>
                                    </td>
                                    <td id="number_serial{{ $doc->id }}">
                                        {{$doc->serial}}
                                    </td>


                                    {{-- <td>
                                        <span class="alert">
                                            {{ \Morilog\Jalali\Jalalian::forge($doc->created_at) }}
                                        </span>
                                    </td> --}}
                                    <td>

                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                                type="button" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="{{ route('doc.edit',$doc->id) }}">
                                                    <i class="ti ti-pencil me-1"></i>
                                                    ویرایش
                                                </a>
                                                {{-- <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="ti ti-trash me-1"></i>
                                                    حذف
                                                </a> --}}
                                            </div>
                                        </div>
                                        {{-- <a href="{{ route('doc.show',$doc->id) }}"
                                            class="btn btn-primary">بیشتر</a> --}}
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <div class="pagi">
                            {{ $docs->appends(Request::all())->links('admin.section.pagination') }}
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div><!-- /.container-fluid -->
</section>


<div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button aria-label="بستن" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">ثبت شماره سند</h3>
                </div>
                <form class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false"
                    novalidate="novalidate">
                    <div class="col-12 fv-plugins-icon-container">
                        <label class="form-label" for="modalEnableOTPPhone">شماره سند در نرم افزار
                        </label>
                        <div class="input-group has-validation">
                            <input class="form-control phone-number-otp-mask ltr" id="serial" name="modalEnableOTPPhone"
                                placeholder="9100 000 0000" type="text">
                        </div>
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                    <div class="col-12">
                        <span class="btn btn-primary me-sm-3 me-1 waves-effect waves-light update_serial"
                            type="submit">ثبت شماره سند</span>
                        <button aria-label="" class="btn btn-label-secondary waves-effect" data-bs-dismiss="modal"
                            type="reset">
                            بازگشت
                        </button>
                    </div>
                    <input type="hidden">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
