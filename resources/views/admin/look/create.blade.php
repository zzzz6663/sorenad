@extends('master.admin')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">تعریف
                بازدید
                کلاسی

                جدید
            </h5>
            <div class="card-body">
                @include('master.error')
                <form action="{{ route("look.store") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="row">
                        <!-- Vertical Icons Wizard -->
                        <div class="col-12 mb-4">
                            <small class="text-light fw-medium"> مشخصات واحد آموزشي </small>
                            <div class="bs-stepper vertical wizard-vertical-icons-example mt-2">
                                <div class="bs-stepper-header">
                                    <div class="step" data-target="#account-details-vertical">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-file-description"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title"> مشخصات اولیه </span>
                                                {{-- <span class="bs-stepper-subtitle">راه اندازی حساب کاربری</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>

                                    <div class="step" data-target="#questions">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-question-mark"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">سوالات</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>



                                    <div class="step" data-target="#creative">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-brain"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">سایر اطاعات</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>

                                    <div class="step" data-target="#camera">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-camera"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">فایل پیوست</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>


                                </div>
                                <div class="bs-stepper-content">
                                    <!-- Account Details -->
                                    <div class="content" id="account-details-vertical">
                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success0">مشخصات اولیه واحدآموزشی را وارد
                                                کنید</ا>
                                                {{-- <small>جزئیات حساب خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3">

                                            <div class="col-sm-4">
                                                <label class="form-label" for="name">{{
                                                    __("basic2.name") }}</label>
                                                <input type="text" value="{{ old("name") }}" class="form-control" id="name" name="name" />
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-label" for="personal_code">{{ __("basic2.personal_code")
                                                    }}</label>
                                                <input type="text" value="{{ old("personal_code") }}" class="form-control" id="personal_code" name="personal_code" />
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="years_of_service">{{ __("basic2.years_of_service")
                                                    }}</label>
                                                <input type="number" value="{{ old("years_of_service") }}" class="form-control" id="years_of_service" name="years_of_service" />
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-label" for="degree">{{ __("basic2.degree")
                                                    }}</label>
                                                <input type="text" value="{{ old("degree") }}" class="form-control" id="degree" name="degree" />
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-label" for="basis_of_teaching">{{ __("basic2.basis_of_teaching")
                                                    }}</label>
                                                <input type="text" value="{{ old("basis_of_teaching") }}" class="form-control" id="basis_of_teaching" name="basis_of_teaching" />
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="student_statistics">{{ __("basic2.student_statistics")
                                                    }}</label>
                                                <input type="text" value="{{ old("student_statistics") }}" class="form-control" id="student_statistics" name="student_statistics" />
                                            </div>


                                            <div class="col-sm-4">
                                                <label class="form-label" for="region_id">{{ __("basic1.region_id")
                                                    }}</label>
                                                <select class="select2" id="region_id" name="region_id">
                                                    <option value="">انتخاب کنید </option>
                                                    @foreach (App\Models\Region::withoutTrashed()->get() as $region
                                                    )
                                                    <option {{ old("region_id")==$region->id?"selected":"" }} value="{{
                                                        $region->id }}">{{ $region->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-label" for="school_name">{{ __("basic2.school_name")
                                                    }}</label>
                                                <input type="text" value="{{ old("school_name") }}" class="form-control" id="school_name" name="school_name" />
                                            </div>



                                            <div class="col-sm-4">
                                                <label class="form-label" for="mobile">{{ __("basic2.mobile")
                                                    }}</label>
                                                <input type="text" value="{{ old("mobile") }}" class="form-control" id="mobile" name="mobile" />
                                            </div>




                                            <div class="col-sm-4">
                                                <label class="form-label" for="look_date">{{ __("basic2.look_date")
                                                    }}</label>
                                                <input type="text" value="{{ old("look_date") }}" class="persian_cal form-control" id="look_date" name="look_date" />
                                            </div>

                                            <div class="col-sm-8">
                                                <label class="form-label" for="pass_priod">{{ __("basic2.pass_priod")
                                                    }}</label>
                                                <div class="form-check form-check-inline">
                                                    <input type="text" value="no" hidden class=" form-control" id="pass_priod" name="pass_priod" />
                                                    <br>

                                                    <input class="form-check-input" id="pass_priod" type="checkbox"  name="pass_priod" {{ old("pass_priod")=="yes"?"checked":"" }} value="yes">
                                                    <label class="form-check-label" for="pass_priod">گذرانده است</label>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="row g-3 mb-4 ">
                                            <div class="col-12 d-flex justify-content-between">
                                                {{--  <span class="btn btn-label-secondary btn-prev" disabled>
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                                </span>  --}}

                                                <span class="btn btn-primary btn-next">
                                                            <span
                                                                class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                            <i class="ti ti-arrow-right"></i>
                                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- questions Info -->
                                    <div class="content" id="questions">
                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">سوالات</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class=" row g-3 mb-4">
                                            @foreach (__("axes2") as $ke1 =>$val1 )
                                            <div class="row mb-5">
                                                <div class="col-lg-12">
                                                    <h5>
                                                        {{ $ke1+1 }}-
                                                        {{$val1['content']}}
                                                    </h5>
                                                </div>
                                                <div class="col-md-4 mb-2 ">
                                                    <div class="form-check custom-option custom-option-basic ">
                                                        <label class="form-check-label custom-option-content" for="q{{ $val1['name']."_val" }}_op1">
                                                            <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op1" name="{{$val1['name']."_val"}}" type="radio" {{
                                                                old($val1['name']."_val" )=="4" ?"checked":"" }} value="4" checked>
                                                            <span class="custom-option-header">
                                                                <span class="  mb-0  -success">
                                                                    خیلی خوب
                                                                    (4)
                                                                </span>
                                                            </span>

                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-2">
                                                    <div class="form-check custom-option custom-option-basic">
                                                        <label class="form-check-label custom-option-content" for="q{{ $val1['name']."_val" }}_op2">
                                                            <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op2" name="{{$val1['name']."_val"}}" type="radio" {{ old(
                                                                $val1['name']."_val")=="3" ?"checked":"" }} value="3">
                                                            <span class="custom-option-header">
                                                                <span class="  mb-0  -danger">
                                                                    خوب
                                                                    (3)
                                                                </span>
                                                            </span>

                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2 ">
                                                    <div class="form-check custom-option custom-option-basic ">
                                                        <label class="form-check-label custom-option-content" for="q{{ $val1['name']."_val" }}_op3">
                                                            <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op3" name="{{$val1['name']."_val"}}" type="radio" {{ old(
                                                                $val1['name']."_val")=="2" ?"checked":"" }} value="2">
                                                            <span class="custom-option-header">
                                                                <span class="  mb-0  -success">

                                                                    متوسط
                                                                    (2)
                                                                </span>
                                                            </span>

                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check custom-option custom-option-basic">
                                                        <label class="form-check-label custom-option-content" for="q{{ $val1['name']."_val" }}_op4">
                                                            <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op4" name="{{$val1['name']."_val"}}" type="radio" {{ old(
                                                                $val1['name']."_val")=="1" ?"checked":"" }} value="1">
                                                            <span class="custom-option-header">
                                                                <span class="  mb-0  -danger">

                                                                    نیاز به راهنمایی بیشتر
                                                                    (1)
                                                                </span>
                                                            </span>

                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check custom-option custom-option-basic">
                                                        <label class="form-check-label custom-option-content" for="q{{ $val1['name']."_val" }}_op5">
                                                            <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op5" name="{{$val1['name']."_val"}}" type="radio" {{ old(
                                                                $val1['name']."_val")=="0" ?"checked":"" }} value="0">
                                                            <span class="custom-option-header">
                                                                <span class="  mb-0  -danger">

                                                                    عدم انجام
                                                                    (0)
                                                                </span>
                                                            </span>

                                                        </label>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-4">
                                                    <label class="form-label" for="{{ $val1['name'] }}">امتیاز</label>
                                                <input type="number" value="{{ old($val1['name']."_score")}}" class="form-control" id="{{$val1['name']  }}" name="{{ ($val1['name']."_score")}}" />
                                            </div> --}}

                                        </div>

                                        @endforeach
                                    </div>
                                    <div class="row g-3 mb-4 ">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>

                                            <span class="btn btn-primary btn-next">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </span>
                                        </div>
                                    </div>
                                </div>


                                <!-- creative Info -->
                                <div class="content" id="creative">
                                    <div class="content-header mb-3">
                                        <h5 class="mb-0 alert alert-success">سایر اطلاعات </h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-5">
                                            <label class="form-label" for="creative">
                                                نقاط قوت ،ابتکارات،خالقیت ها
                                            </label>
                                            <textarea name="creative" class="form-control" id="" cols="30" rows="5">{{ old("creative") }}</textarea>
                                        </div>
                                        <div class="col-lg-12 mb-5">
                                            <label class="form-label" for="problem">

                                                مشکالت وموارد قابل بهبود در اين کالس
                                            </label>
                                            <textarea name="problem" class="form-control" id="" cols="30" rows="5">{{ old("problem") }}</textarea>
                                        </div>

                                        <div class="col-sm-12  mb-5">
                                            <label class="form-label" for="visitors">{{ __("field.visitors")
                                                }}</label>
                                                <textarea name="visitors" id="visitors" class="form-control" cols="30" rows="4">{{ old("visitors") }}</textarea>
                                        </div>
                                        {{--  <div class="col-lg-6  mb-5">
                                            <label class="form-label" for="visitor1_name">{{ __("other2.visitor1_name")
                                                    }}</label>
                                            <input type="text" value="{{ old("visitor1_name") }}" class="form-control" id="visitor1_name" name="visitor1_name" />
                                        </div>
                                        <div class="col-lg-6  mb-5">
                                            <label class="form-label" for="visitor1_val">{{ __("other2.visitor1_val")
                                                  }}</label>
                                            <input type="text" value="{{ old("visitor1_val") }}" class="form-control" id="visitor1_val" name="visitor1_val" />
                                        </div>

                                        <div class="col-lg-6  mb-5">
                                            <label class="form-label" for="visitor2_name">{{ __("other2.visitor2_name")
                                                    }}</label>
                                            <input type="text" value="{{ old("visitor2_name") }}" class="form-control" id="visitor2_name" name="visitor2_name" />
                                        </div>
                                        <div class="col-lg-6  mb-5">
                                            <label class="form-label" for="visitor2_val">{{ __("other2.visitor2_val")
                                                  }}</label>
                                            <input type="text" value="{{ old("visitor2_val") }}" class="form-control" id="visitor2_val" name="visitor2_val" />
                                        </div>  --}}

                                    </div>
                                    <div class="row g-3 mb-4 ">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>

                                            <span class="btn btn-primary btn-next">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </span>
                                        </div>
                                    </div>


                                </div>




                                <!-- camera Info -->
                                <div class="content" id="camera">
                                    <div class="content-header mb-3">
                                        <h5 class="mb-0 alert alert-success">فایل پیوست</h5>
                                    </div>


                                    <div class="col-sm-12 mb-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="formFileMultiple">انتخاب چند فایل</label>
                                            <input class="form-control" name="attaches[]" id="formFileMultiple" multiple="" type="file">
                                        </div>
                                    </div>
                                    <div class="row g-3 mb-4 ">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>
                                            {{-- <span class="btn btn-primary btn-next">
                                                <span
                                                    class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-12 mb-3">
                                            <div class="mb-3">
                                                <label class="form-label" for="formFileMultiple">انتخاب چند فایل</label>
                                                <input class="form-control" name="attaches[]" id="formFileMultiple" multiple="" type="file">
                                            </div>
                                        </div>
  --}}





                            </div>



                        </div>
                    </div>
            </div>
            <!-- /Vertical Icons Wizard -->
        </div>

        {{-- <div class="mb-3">
                        <label class="form-label" for="active">وضعیت</label>
                        <select class="form-select" id="active" name="active">
                            <option value="">انتخاب کنید </option>
                            <option {{ old("active")=="1" ?"selected":"" }} value="1">فعال</option>
        <option {{ old("active")=="0" ?"selected":"" }} value="0">غیر فعال</option>
        </select>
    </div> --}}
    <div class="mb-3">
        <a href="{{ route("visit.index") }}" class="btn btn-warning">
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
