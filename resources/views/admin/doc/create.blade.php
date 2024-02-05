@extends('master.admin')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">تعریف سند جدید
                <i class="ti ti-user-plus"></i>
            </h5>
            <div class="card-body">
                @include('master.error')
                <form action="{{ route("doc.store") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 red">
                                <label class="form-label" for="debt_price">مبلغ
                                </label>
                                <input name="debt_price" class="form-control number_format" id="debt_price"
                                    placeholder="  " type="number" value="{{ old(" debt_price") }}">
                                @if(old("debt_price"))
                                <p class="alert alert-danger green_label">
                                    {{ number_format(old("debt_price")) }}
                                </p>
                                @endif
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="debt_id">طرف بدهکار (محل هزینه) </label>
                                <select class="form-select select2" id="debt_id" name="debt_id">
                                    <option value="">انتخاب کنید </option>
                                    @foreach ($accounts as $accont )
                                    <option {{ old("debt_id")==$accont->id?"selected":"" }} value="{{ $accont->id }}">{{
                                        $accont->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 ">
                                <label class="form-label" for="demand_id">طرف طلبکار (محل برداشت)</label>
                                <select class="form-select select2" id="demand_id" name="demand_id">
                                    <option value="">انتخاب کنید </option>
                                    @foreach ($accounts as $accont_d )
                                    <option {{ old("demand_id")==$accont_d->id?"selected":"" }} value="{{ $accont_d->id
                                        }}">{{ $accont_d->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--  <div class="mb-3 green">
                                <label class="form-label" for="demand_price">مبلغ طلبکار
                                </label>
                                <input name="demand_price" class="form-control number_format" id="demand_price"
                                    placeholder="  " type="number" value="{{ old(" demand_price") }}">
                                @if(old("demand_price"))
                                <p class="alert alert-success green_label">
                                    {{ number_format(old("demand_price")) }}
                                </p>
                                @endif
                            </div>  --}}
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="submited">تاریخ
                                </label>
                                <input name="submited" class="form-control persian_cal" id="submited" placeholder="  "
                                    type="text" value="{{ old(" submited") }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="attach"> ضمیمه
                                </label>
                                <input name="attach" class="form-control " id="attach" placeholder="  " type="file">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="debt_id">توضیحات</label>
                                <textarea name="info" id="" class="form-control" cols="10"
                                    rows="5">{{ old("info") }}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <a href="{{ route("doc.index") }}" class="btn btn-warning">
                            برگشت
                            <i class="ti ti-arrow-narrow-left"></i>
                        </a>
                        <button class="btn btn-success"> ذخیره
                            <i class="ti ti-plus"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
