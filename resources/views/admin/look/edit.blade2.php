@extends('master.admin')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">

                ویرایش بازدید
                <i class="ti ti-user-plus"></i>
            </h5>
            <div class="card-body">
                @include('master.error')
                <form action="{{ route("visit.update",$visit->id) }}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('patch')
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
                                    <div class="step" data-target="#personal-one-vertical">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-number-1"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">اطلاعات پایه اول</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>

                                    <div class="step" data-target="#personal-two-vertical">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-number-2"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">اطلاعات پایه دوم</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>

                                    <div class="step" data-target="#personal-three-vertical">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-number-3"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">اطلاعات پایه سوم</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>



                                    <div class="step" data-target="#personal-four-vertical">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-number-4"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">اطلاعات پایه چهارم</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>




                                    <div class="step" data-target="#personal-five-vertical">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-number-5"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">اطلاعات پایه پنجم</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>



                                    <div class="step" data-target="#personal-six-vertical">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-number-6"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">اطلاعات پایه ششم</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>

                                    <div class="step" data-target="#personal-total-vertical">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-numbers"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">جمع کل</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
                                                --}}
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>


                                    <div class="step" data-target="#other_info">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-info-circle"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">سایر اطلاعات</span>
                                                {{-- <span class="bs-stepper-subtitle">اطلاعات شخصی پروفایل شما</span>
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


                                    <div class="step" data-target="#tabel_score">
                                        <button class="step-trigger" type="button">
                                            <span class="bs-stepper-circle">
                                                <i class="ti ti-scoreboard"></i>
                                            </span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">امتیازات</span>
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
                                                <span class="bs-stepper-title">شرح خلاقیت و ابتکارات</span>
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
                                                <label class="form-label" for="region_id">{{ __("field.region_id")
                                                    }}</label>
                                                <select class="select2" id="region_id" name="region_id">
                                                    <option value="">انتخاب کنید </option>
                                                    @foreach (App\Models\Region::withoutTrashed()->get() as $region
                                                    )
                                                    <option {{ old("region_id",$visit->region_id)==$region->id?"selected":"" }} value="{{
                                                        $region->id }}">{{ $region->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-label" for="unit_Name_educational">{{
                                                    __("field.unit_Name_educational") }}</label>
                                                <input type="text" value="{{ old("unit_Name_educational",$visit->unit_Name_educational) }}"
                                                    class="form-control" id="unit_Name_educational"
                                                    name="unit_Name_educational" />
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-label" for="location">{{ __("field.location")
                                                    }}</label>
                                                <input type="text" value="{{ old("location",$visit->location) }}" class="form-control"
                                                    id="location" name="location" />
                                            </div>



                                            <div class="col-sm-4">
                                                <label class="form-label" for="gender">{{ __("field.gender")
                                                    }}</label>
                                                <select class="select2" id="gender" name="gender">
                                                    <option value="">انتخاب کنید </option>
                                                    <option {{ old("gender",$visit->gender)=="girl" ?"selected":"" }} value="girl">
                                                        دخترانه</option>
                                                    <option {{ old("gender",$visit->gender)=="boy" ?"selected":"" }} value="boy">
                                                        پسرانه</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="form-label" for="preiod">{{ __("field.preiod")
                                                    }}</label>
                                                <input type="text" value="{{ old("preiod",$visit->preiod) }}" class="form-control"
                                                    id="preiod" name="preiod" />
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="unit_type">{{ __("field.unit_type")
                                                    }}</label>
                                                <input type="text" value="{{ old("unit_type",$visit->unit_type) }}" class="form-control"
                                                    id="unit_type" name="unit_type" />
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="manager_name">{{
                                                    __("field.manager_name") }}</label>
                                                <input type="text" value="{{ old("manager_name",$visit->manager_name) }}"
                                                    class="form-control" id="manager_name" name="manager_name" />
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="manager_course">{{
                                                    __("field.manager_course") }}</label>
                                                <input type="text" value="{{ old("manager_course",$visit->manager_course) }}"
                                                    class="form-control" id="manager_course" name="manager_course" />
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="manager_year_service">{{
                                                    __("field.manager_year_service") }}</label>
                                                <input type="text" value="{{ old("manager_year_service",$visit->manager_year_service) }}"
                                                    class="form-control" id="manager_year_service"
                                                    name="manager_year_service" />
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="manager_tell">{{
                                                    __("field.manager_tell") }}</label>
                                                <input type="text" value="{{ old("manager_tell",$visit->manager_tell) }}"
                                                    class="form-control" id="manager_tell" name="manager_tell" />
                                            </div>

                                            <div class="col-sm-4">
                                                <label class="form-label" for="manager_adress">{{
                                                    __("field.manager_adress") }}</label>
                                                <input type="text" value="{{ old("manager_adress",$visit->manager_adress) }}"
                                                    class="form-control" id="manager_adress" name="manager_adress" />
                                            </div>



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
                                    <!-- one Info -->
                                    <div class="content" id="personal-one-vertical">
                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">پایه اول</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4">
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_one_girl">{{
                                                    __("field.educational_background_one_girl") }}</label>
                                                <input type="number" value="{{ old("educational_background_one_girl",$visit->educational_background_one_girl)}}" class="form-control" id="educational_background_one_girl"
                                                    name="educational_background_one_girl" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_one_boy">{{
                                                    __("field.educational_background_one_boy") }}</label>
                                                <input type="number" value="{{ old("educational_background_one_boy",$visit->educational_background_one_boy)
                                                    }}" class="form-control" id="educational_background_one_boy"
                                                    name="educational_background_one_boy" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_one_sum">{{
                                                    __("field.educational_background_one_sum") }}</label>
                                                <input type="number" value="{{ old("educational_background_one_sum",$visit->educational_background_one_sum)
                                                    }}" class="form-control" id="educational_background_one_sum"
                                                    name="educational_background_one_sum" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label"
                                                    for="educational_background_one_class_count">{{
                                                    __("field.educational_background_one_class_count") }}</label>
                                                <input type="number" value="{{ old("educational_background_one_class_count",$visit->educational_background_one_class_count) }}" class="form-control"
                                                    id="educational_background_one_class_count"
                                                    name="educational_background_one_class_count" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_one_density">{{
                                                    __("field.educational_background_one_density") }}</label>
                                                <input type="number" value="{{ old("educational_background_one_density",$visit->educational_background_one_density) }}" class="form-control"
                                                    id="educational_background_one_density"
                                                    name="educational_background_one_density" />
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>
                                            <span class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- two Info -->
                                    <div class="content" id="personal-two-vertical">

                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">پایه دوم</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4 ">
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_tow_girl">{{
                                                    __("field.educational_background_tow_girl") }}</label>
                                                <input type="number" value="{{ old("educational_background_tow_girl",$visit->educational_background_tow_girl)
                                                    }}" class="form-control" id="educational_background_tow_girl"
                                                    name="educational_background_tow_girl" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_tow_boy">{{
                                                    __("field.educational_background_tow_boy") }}</label>
                                                <input type="number" value="{{ old("educational_background_tow_boy",$visit->educational_background_tow_boy)
                                                    }}" class="form-control" id="educational_background_tow_boy"
                                                    name="educational_background_tow_boy" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_tow_sum">{{
                                                    __("field.educational_background_tow_sum") }}</label>
                                                <input type="number" value="{{ old("educational_background_tow_sum",$visit->educational_background_tow_sum)
                                                    }}" class="form-control" id="educational_background_tow_sum"
                                                    name="educational_background_tow_sum" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label"
                                                    for="educational_background_tow_class_count">{{
                                                    __("field.educational_background_tow_class_count") }}</label>
                                                <input type="number" value="{{ old("educational_background_tow_class_count",$visit->educational_background_tow_class_count) }}" class="form-control"
                                                    id="educational_background_tow_class_count"
                                                    name="educational_background_tow_class_count" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_tow_density">{{
                                                    __("field.educational_background_tow_density") }}</label>
                                                <input type="number" value="{{ old("educational_background_tow_density",$visit->educational_background_tow_density) }}" class="form-control"
                                                    id="educational_background_tow_density"
                                                    name="educational_background_tow_density" />
                                            </div>
                                        </div>


                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>
                                            <span class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <!-- three Info -->
                                    <div class="content" id="personal-three-vertical">

                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">پایه سوم</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4 ">
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_three_girl">{{
                                                    __("field.educational_background_three_girl") }}</label>
                                                <input type="number" value="{{ old("educational_background_three_girl",$visit->educational_background_three_girl)
                                                    }}" class="form-control" id="educational_background_three_girl"
                                                    name="educational_background_three_girl" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_three_boy">{{
                                                    __("field.educational_background_three_boy") }}</label>
                                                <input type="number" value="{{ old("educational_background_three_boy",$visit->educational_background_three_boy)
                                                    }}" class="form-control" id="educational_background_three_boy"
                                                    name="educational_background_three_boy" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_three_sum">{{
                                                    __("field.educational_background_three_sum") }}</label>
                                                <input type="number" value="{{ old("educational_background_three_sum",$visit->educational_background_three_sum)
                                                    }}" class="form-control" id="educational_background_three_sum"
                                                    name="educational_background_three_sum" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label"
                                                    for="educational_background_three_class_count">{{
                                                    __("field.educational_background_three_class_count") }}</label>
                                                <input type="number" value="{{ old("educational_background_three_class_count",$visit->educational_background_three_class_count) }}" class="form-control"
                                                    id="educational_background_three_class_count"
                                                    name="educational_background_three_class_count" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_three_density">{{
                                                    __("field.educational_background_three_density") }}</label>
                                                <input type="number" value="{{ old("educational_background_three_density",$visit->educational_background_three_density) }}" class="form-control"
                                                    id="educational_background_three_density"
                                                    name="educational_background_three_density" />
                                            </div>
                                        </div>


                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>
                                            <span class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <!-- four Info -->
                                    <div class="content" id="personal-four-vertical">

                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">پایه چهارم</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4 ">
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_four_girl">{{
                                                    __("field.educational_background_four_girl") }}</label>
                                                <input type="number" value="{{ old("educational_background_four_girl",$visit->educational_background_four_girl)
                                                    }}" class="form-control" id="educational_background_four_girl"
                                                    name="educational_background_four_girl" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_four_boy">{{
                                                    __("field.educational_background_four_boy") }}</label>
                                                <input type="number" value="{{ old("educational_background_four_boy",$visit->educational_background_four_boy)
                                                    }}" class="form-control" id="educational_background_four_boy"
                                                    name="educational_background_four_boy" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_four_sum">{{
                                                    __("field.educational_background_four_sum") }}</label>
                                                <input type="number" value="{{ old("educational_background_four_sum",$visit->educational_background_four_sum)
                                                    }}" class="form-control" id="educational_background_four_sum"
                                                    name="educational_background_four_sum" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label"
                                                    for="educational_background_four_class_count">{{
                                                    __("field.educational_background_four_class_count") }}</label>
                                                <input type="number" value="{{ old("educational_background_four_class_count",$visit->educational_background_four_class_count) }}" class="form-control"
                                                    id="educational_background_four_class_count"
                                                    name="educational_background_four_class_count" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_four_density">{{
                                                    __("field.educational_background_four_density") }}</label>
                                                <input type="number" value="{{ old("educational_background_four_density",$visit->educational_background_four_density) }}" class="form-control"
                                                    id="educational_background_four_density"
                                                    name="educational_background_four_density" />
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>
                                            <span class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <!-- five Info -->
                                    <div class="content" id="personal-five-vertical">

                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">پایه پنجم</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4 ">
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_five_girl">{{
                                                    __("field.educational_background_five_girl") }}</label>
                                                <input type="number" value="{{ old("educational_background_five_girl",$visit->educational_background_five_girl)
                                                    }}" class="form-control" id="educational_background_five_girl"
                                                    name="educational_background_five_girl" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_five_boy">{{
                                                    __("field.educational_background_five_boy") }}</label>
                                                <input type="number" value="{{ old("educational_background_five_boy",$visit->educational_background_five_boy)
                                                    }}" class="form-control" id="educational_background_five_boy"
                                                    name="educational_background_five_boy" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_five_sum">{{
                                                    __("field.educational_background_five_sum") }}</label>
                                                <input type="number" value="{{ old("educational_background_five_sum",$visit->educational_background_five_sum)
                                                    }}" class="form-control" id="educational_background_five_sum"
                                                    name="educational_background_five_sum" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label"
                                                    for="educational_background_five_class_count">{{
                                                    __("field.educational_background_five_class_count") }}</label>
                                                <input type="number" value="{{ old("educational_background_five_class_count",$visit->educational_background_five_class_count) }}" class="form-control"
                                                    id="educational_background_five_class_count"
                                                    name="educational_background_five_class_count" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_five_density">{{
                                                    __("field.educational_background_five_density") }}</label>
                                                <input type="number" value="{{ old("educational_background_five_density",$visit->educational_background_five_density) }}" class="form-control"
                                                    id="educational_background_five_density"
                                                    name="educational_background_five_density" />
                                            </div>
                                        </div>


                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>
                                            <span class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <!-- six Info -->
                                    <div class="content" id="personal-six-vertical">

                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">پایه ششم</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4 ">
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_six_girl">{{
                                                    __("field.educational_background_six_girl") }}</label>
                                                <input type="number" value="{{ old("educational_background_six_girl",$visit->educational_background_six_girl)
                                                    }}" class="form-control" id="educational_background_six_girl"
                                                    name="educational_background_six_girl" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_six_boy">{{
                                                    __("field.educational_background_six_boy") }}</label>
                                                <input type="number" value="{{ old("educational_background_six_boy",$visit->educational_background_six_boy)
                                                    }}" class="form-control" id="educational_background_six_boy"
                                                    name="educational_background_six_boy" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_six_sum">{{
                                                    __("field.educational_background_six_sum") }}</label>
                                                <input type="number" value="{{ old("educational_background_six_sum",$visit->educational_background_six_sum)
                                                    }}" class="form-control" id="educational_background_six_sum"
                                                    name="educational_background_six_sum" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label"
                                                    for="educational_background_six_class_count">{{
                                                    __("field.educational_background_six_class_count") }}</label>
                                                <input type="number" value="{{ old("educational_background_six_class_count",$visit->educational_background_six_class_count) }}" class="form-control"
                                                    id="educational_background_six_class_count"
                                                    name="educational_background_six_class_count" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_six_density">{{
                                                    __("field.educational_background_six_density") }}</label>
                                                <input type="number" value="{{ old("educational_background_six_density",$visit->educational_background_six_density) }}" class="form-control"
                                                    id="educational_background_six_density"
                                                    name="educational_background_six_density" />
                                            </div>
                                        </div>


                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>
                                            <span class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- total Info -->
                                    <div class="content" id="personal-total-vertical">

                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">جمع</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4 ">
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_total_girl">{{
                                                    __("field.educational_background_total_girl") }}</label>
                                                <input type="number" value="{{ old("educational_background_total_girl",$visit->educational_background_total_girl)
                                                    }}" class="form-control" id="educational_background_total_girl"
                                                    name="educational_background_total_girl" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_total_boy">{{
                                                    __("field.educational_background_total_boy") }}</label>
                                                <input type="number" value="{{ old("educational_background_total_boy",$visit->educational_background_total_boy)
                                                    }}" class="form-control" id="educational_background_total_boy"
                                                    name="educational_background_total_boy" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_total_sum">{{
                                                    __("field.educational_background_total_sum") }}</label>
                                                <input type="number" value="{{ old("educational_background_total_sum",$visit->educational_background_total_sum)
                                                    }}" class="form-control" id="educational_background_total_sum"
                                                    name="educational_background_total_sum" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label"
                                                    for="educational_background_total_class_count">{{
                                                    __("field.educational_background_total_class_count") }}</label>
                                                <input type="number" value="{{ old("educational_background_total_class_count",$visit->educational_background_total_class_count) }}" class="form-control"
                                                    id="educational_background_total_class_count"
                                                    name="educational_background_total_class_count" />
                                            </div>
                                            <div class="col col-md-6">
                                                <label class="form-label" for="educational_background_total_density">{{
                                                    __("field.educational_background_total_density") }}</label>
                                                <input type="number" value="{{ old("educational_background_total_density",$visit->educational_background_total_density) }}" class="form-control"
                                                    id="educational_background_total_density"
                                                    name="educational_background_total_density" />
                                            </div>
                                        </div>


                                        <div class="col-12 d-flex justify-content-between">
                                            <span class="btn btn-label-secondary btn-prev" disabled>
                                                <i class="ti ti-arrow-left me-sm-1"></i>
                                                <span class="align-middle d-sm-inline-block d-none">قبلی</span>
                                            </span>
                                            <span class="btn btn-primary btn-next">
                                                <span class="align-middle d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                <i class="ti ti-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- other_info Info -->
                                    <div class="content" id="other_info">
                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">سایر اطلاعات</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4 ">

                                            <div class="col-sm-6">
                                                <label class="form-label" for="total_teachers_count">{{
                                                    __("field.total_teachers_count") }}</label>
                                                <input type="number" value="{{ old("total_teachers_count",$visit->total_teachers_count) }}"
                                                    class="form-control" id="total_teachers_count"
                                                    name="total_teachers_count" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="total_teachers_hour">{{
                                                    __("field.total_teachers_hour") }}</label>
                                                <input type="number" value="{{ old("total_teachers_hour",$visit->total_teachers_hour) }}"
                                                    class="form-control" id="total_teachers_hour"
                                                    name="total_teachers_hour" />
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="form-label" for="educational_assistant_count">{{
                                                    __("field.educational_assistant_count") }}</label>
                                                <input type="number" value="{{ old("educational_assistant_count",$visit->educational_assistant_count) }}"
                                                    class="form-control" id="educational_assistant_count"
                                                    name="educational_assistant_count" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="educational_assistant_hour">{{
                                                    __("field.educational_assistant_hour") }}</label>
                                                <input type="number" value="{{ old("educational_assistant_hour",$visit->educational_assistant_hour) }}"
                                                    class="form-control" id="educational_assistant_hour"
                                                    name="educational_assistant_hour" />
                                            </div>




                                            <div class="col-sm-6">
                                                <label class="form-label" for="deputy_assistant_count">{{
                                                    __("field.deputy_assistant_count") }}</label>
                                                <input type="number" value="{{ old("deputy_assistant_count",$visit->deputy_assistant_count) }}"
                                                    class="form-control" id="deputy_assistant_count"
                                                    name="deputy_assistant_count" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="deputy_assistant_hour">{{
                                                    __("field.deputy_assistant_hour") }}</label>
                                                <input type="number" value="{{ old("deputy_assistant_hour",$visit->deputy_assistant_hour) }}"
                                                    class="form-control" id="deputy_assistant_hour"
                                                    name="deputy_assistant_hour" />
                                            </div>





                                            <div class="col-sm-6">
                                                <label class="form-label" for="breeding_assistant_count">{{
                                                    __("field.breeding_assistant_count") }}</label>
                                                <input type="number" value="{{ old("breeding_assistant_count",$visit->breeding_assistant_count) }}"
                                                    class="form-control" id="breeding_assistant_count"
                                                    name="breeding_assistant_count" />
                                            </div>


                                            <div class="col-sm-6">
                                                <label class="form-label" for="breeding_assistant_hour">{{
                                                    __("field.breeding_assistant_hour") }}</label>
                                                <input type="number" value="{{ old("breeding_assistant_hour",$visit->breeding_assistant_hour) }}"
                                                    class="form-control" id="breeding_assistant_hour"
                                                    name="breeding_assistant_hour" />
                                            </div>





                                            <div class="col-sm-6">
                                                <label class="form-label" for="consultant_working_count">{{
                                                    __("field.consultant_working_count") }}</label>
                                                <input type="number" value="{{ old("consultant_working_count",$visit->consultant_working_count) }}"
                                                    class="form-control" id="consultant_working_count"
                                                    name="consultant_working_count" />
                                            </div>


                                            <div class="col-sm-6">
                                                <label class="form-label" for="consultant_working_hour">{{
                                                    __("field.consultant_working_hour") }}</label>
                                                <input type="number" value="{{ old("consultant_working_hour",$visit->consultant_working_hour) }}"
                                                    class="form-control" id="consultant_working_hour"
                                                    name="consultant_working_hour" />
                                            </div>



                                            <div class="col-sm-6">
                                                <label class="form-label" for="sport_coach_count">{{
                                                    __("field.sport_coach_count") }}</label>
                                                <input type="number" value="{{ old("sport_coach_count",$visi->sport_coach_count) }}"
                                                    class="form-control" id="sport_coach_count"
                                                    name="sport_coach_count" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label" for="sport_coach_hour">{{
                                                    __("field.sport_coach_hour") }}</label>
                                                <input type="number" value="{{ old("sport_coach_hour",$visi->sport_coach_hour) }}"
                                                    class="form-control" id="sport_coach_hour"
                                                    name="sport_coach_hour" />
                                            </div>



                                            <div class="col-sm-6">
                                                <label class="form-label" for="hygiene_coach_count">{{
                                                    __("field.hygiene_coach_count") }}</label>
                                                <input type="number" value="{{ old("hygiene_coach_count",$visit->hygiene_coach_count) }}"
                                                    class="form-control" id="hygiene_coach_count"
                                                    name="hygiene_coach_count" />
                                            </div>


                                            <div class="col-sm-6">
                                                <label class="form-label" for="hygiene_coach_hour">{{
                                                    __("field.hygiene_coach_hour") }}</label>
                                                <input type="number" value="{{ old("hygiene_coach_hour",$visit->hygiene_coach_hour) }}"
                                                    class="form-control" id="hygiene_coach_hour"
                                                    name="hygiene_coach_hour" />
                                            </div>




                                            <div class="col-sm-6">
                                                <label class="form-label" for="breeding_coach_count">{{
                                                    __("field.breeding_coach_count") }}</label>
                                                <input type="number" value="{{ old("breeding_coach_count",$visit->breeding_coach_count) }}"
                                                    class="form-control" id="breeding_coach_count"
                                                    name="breeding_coach_count" />
                                            </div>


                                            <div class="col-sm-6">
                                                <label class="form-label" for="breeding_coach_hour">{{
                                                    __("field.breeding_coach_hour") }}</label>
                                                <input type="number" value="{{ old("breeding_coach_hour",$visit->breeding_coach_hour) }}"
                                                    class="form-control" id="breeding_coach_hour"
                                                    name="breeding_coach_hour" />
                                            </div>




                                            <div class="col-sm-6">
                                                <label class="form-label" for="servicer_coach_count">{{
                                                    __("field.servicer_coach_count") }}</label>
                                                <input type="number" value="{{ old("servicer_coach_count",$visit->servicer_coach_count) }}"
                                                    class="form-control" id="servicer_coach_count"
                                                    name="servicer_coach_count" />
                                            </div>


                                            <div class="col-sm-6">
                                                <label class="form-label" for="servicer_coach_hour">{{
                                                    __("field.servicer_coach_hour") }}</label>
                                                <input type="number" value="{{ old("servicer_coach_hour",$visit->servicer_coach_hour) }}"
                                                    class="form-control" id="servicer_coach_hour"
                                                    name="servicer_coach_hour" />
                                            </div>



                                            <div class="col-sm-6">
                                                <label class="form-label" for="janitor_coach_count">{{
                                                    __("field.janitor_coach_count") }}</label>
                                                <input type="number" value="{{ old("janitor_coach_count",$visit->janitor_coach_count) }}"
                                                    class="form-control" id="janitor_coach_count"
                                                    name="janitor_coach_count" />
                                            </div>


                                            <div class="col-sm-6">
                                                <label class="form-label" for="janitor_coach_hour">{{
                                                    __("field.janitor_coach_hour") }}</label>
                                                <input type="number" value="{{ old("janitor_coach_hour",$visit->janitor_coach_hour) }}"
                                                    class="form-control" id="janitor_coach_hour"
                                                    name="janitor_coach_hour" />
                                            </div>

                                            <div class="col-sm-9">
                                                <label class="form-label" for="visitors">{{ __("field.visitors")
                                                    }}</label>
                                                    <textarea name="{{ old("visitors") }}" id="visitors" class="form-control" cols="30" rows="4">{{ old("visitors",$visit->visitors) }}</textarea>
                                            </div>

                                            <div class="col-sm-3">
                                                <label class="form-label" for="visit_date">{{ __("field.visit_date")
                                                    }}</label>
                                                <input type="text" value="{{ old("visit_date",$visit->visit_date) }}"
                                                    class="form-control persian_cal" id="visit_date"
                                                    name="visit_date" />
                                            </div>

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
                                    <!-- questions Info -->
                                    <div class="content" id="questions">
                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">سوالات</h5>
                                            {{-- <small>اطلاعات شخصی خود را وارد کنید</small> --}}
                                        </div>
                                        <div class="row g-3 mb-4 ">
                                            <div class="col-sm-12">
                                                <!-- questions 1 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            1-
                                                            {{ __("question_form1.q1") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q1_op1">
                                                                <input class="form-check-input" id="q1_op1"
                                                                    name="q1_val" type="radio" {{ old("q1_val",$visit->q1_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q1_op2">
                                                                <input class="form-check-input" id="q1_op2"
                                                                    name="q1_val" type="radio" {{ old("q1_val",$visit->q1_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <label class="form-label" for="q1_more">چند ساعت</label>
                                                        <input type="number" value="{{ old("q1_more",$visit->q1_more) }}"
                                                            class="form-control " id="q1_more" name="q1_more" />
                                                    </div>
                                                </div>
                                                <!-- questions 2 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            2-
                                                            {{ __("question_form1.q2") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q2_op1">
                                                                <input class="form-check-input" id="q2_op1"
                                                                    name="q2_val" type="radio" {{ old("q2_val",$visit->q2_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q2_op2">
                                                                <input class="form-check-input" id="q2_op2"
                                                                    name="q2_val" type="radio" {{ old("q2_val",$visit->q2_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <label class="form-label" for="q2_more">چند ساعت</label>
                                                        <input type="number" value="{{ old("q2_more",$visit->q2_more) }}"
                                                            class="form-control " id="q2_more" name="q2_more" />
                                                    </div>
                                                </div>
                                                <!-- questions 3 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            3-
                                                            {{ __("question_form1.q3") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q3_op1">
                                                                <input class="form-check-input" id="q3_op1"
                                                                    name="q3_val" type="radio" {{ old("q3_val",$visit->q3_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q3_op2">
                                                                <input class="form-check-input" id="q3_op2"
                                                                    name="q3_val" type="radio" {{ old("q3_val",$visit->q3_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <label class="form-label" for="q3_more">چند نفر</label>
                                                        <input type="number" value="{{ old("q3_more",$visit->q3_more) }}"
                                                            class="form-control " id="q3_more" name="q3_more" />
                                                    </div>
                                                </div>
                                                <!-- questions 4 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            4-
                                                            {{ __("question_form1.q4") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q4_op1">
                                                                <input class="form-check-input" id="q4_op1"
                                                                    name="q4_val" type="radio" {{ old("q4_val",$visit->q4_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q4_op2">
                                                                <input class="form-check-input" id="q4_op2"
                                                                    name="q4_val" type="radio" {{ old("q4_val",$visit->q4_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <label class="form-label" for="q4_more">چند نفر</label>
                                                        <input type="number" value="{{ old("q4_more",$visit->q4_more) }}"
                                                            class="form-control " id="q4_more" name="q4_more" />
                                                    </div>
                                                </div>
                                                <!-- questions 5 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            5-
                                                            {{ __("question_form1.q5") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q5_op1">
                                                                <input class="form-check-input" id="q5_op1"
                                                                    name="q5_val" type="radio" {{ old("q5_val",$visit->q5_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q5_op2">
                                                                <input class="form-check-input" id="q5_op2"
                                                                    name="q5_val" type="radio" {{ old("q5_val",$visit->q5_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- questions 6 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            6-
                                                            {{ __("question_form1.q6") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q6_op1">
                                                                <input class="form-check-input" id="q6_op1"
                                                                    name="q6_val" type="radio" {{ old("q6_val",$visit->q6_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q6_op2">
                                                                <input class="form-check-input" id="q6_op2"
                                                                    name="q6_val" type="radio" {{ old("q6_val",$visit->q6_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- questions 7 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            7-
                                                            {{ __("question_form1.q7") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q7_op1">
                                                                <input class="form-check-input" id="q7_op1"
                                                                    name="q7_val" type="radio" {{ old("q7_val",$visit->q7_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q7_op2">
                                                                <input class="form-check-input" id="q7_op2"
                                                                    name="q7_val" type="radio" {{ old("q7_val",$visit->q7_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <label class="form-label" for="q7_more">
                                                            چند درصد اولیا آموزش ديده اند؟

                                                        </label>
                                                        <input type="number" value="{{ old("q7_more",$visit->q7_more) }}"
                                                            class="form-control " id="q7_more" name="q7_more" />
                                                    </div>
                                                </div>
                                                <!-- questions 8 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            8-
                                                            {{ __("question_form1.q8") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q8_op1">
                                                                <input class="form-check-input" id="q8_op1"
                                                                    name="q8_val" type="radio" {{ old("q8_val",$visit->q8_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q8_op2">
                                                                <input class="form-check-input" id="q8_op2"
                                                                    name="q8_val" type="radio" {{ old("q8_val",$visit->q8_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- questions 9 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            9-
                                                            {{ __("question_form1.q9") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q9_op1">
                                                                <input class="form-check-input" id="q9_op1"
                                                                    name="q9_val" type="radio" {{ old("q9_val",$visit->q9_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q9_op2">
                                                                <input class="form-check-input" id="q9_op2"
                                                                    name="q9_val" type="radio" {{ old("q9_val",$visit->q9_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- questions 10 -->
                                                <div class="row mb-3">
                                                    <div class="col-lg-12">
                                                        <h6>
                                                            10-
                                                            {{ __("question_form1.q10") }}
                                                        </h6>
                                                    </div>
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic ">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q10_op1">
                                                                <input class="form-check-input" id="q10_op1"
                                                                    name="q10_val" type="radio" {{ old("q10_val",$visit->q10_val)=="1"
                                                                    ?"checked":"" }} value="1">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-success">بله
                                                                    </span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content"
                                                                for="q10_op2">
                                                                <input class="form-check-input" id="q10_op2"
                                                                    name="q10_val" type="radio" {{ old("q10_val",$visit->q10_val)=="0"
                                                                    ?"checked":"" }} value="0">
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0 alert alert-danger">خیر</span>
                                                                </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <label class="form-label" for="q10_more">
                                                            نام و سمت بازديدكننده
                                                        </label>
                                                        <input type="text" value="{{ old("q10_more",$visit->q10_more) }}"
                                                            class="form-control " id="q10_more" name="q10_more" />
                                                    </div>
                                                </div>
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
                                    </div>



                                    <!-- tabel_score Info -->
                                    <div class="content" id="tabel_score">
                                        <div class="content-header mb-3">
                                            <h5 class="mb-0 alert alert-success">امتیازات</h5>
                                        </div>

                                        <!-- questions 1 -->
                                        @foreach (__("axes") as $ke =>$val )

                                        <h3>
                                            {{ $val["title"] }}
                                        </h3>
                                        @foreach ($val["questions"] as $ke1 =>$val1 )
                                        <div class="row mb-3">
                                            <div class="col-lg-12">
                                                <h5>
                                                    {{ $ke1+1 }}-
                                                    {{$val1['content']}}
                                                </h5>
                                            </div>
                                            <div class="col-md mb-md-0 mb-2">
                                                <div class="form-check custom-option custom-option-basic ">
                                                    <label class="form-check-label custom-option-content"
                                                        for="q{{ $val1['name']."_val" }}_op1">
                                                        <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op1"
                                                            name="{{$val1['name']."_val"}}" type="radio" {{
                                                            old($val1['name']."_val" ,$visit[$val1['name']."_val"] )=="4" ?"checked":"" }} value="4">
                                                        <span class="custom-option-header">
                                                            <span class="  mb-0  -success">
                                                                خیلی خوب
                                                                (4)
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="form-check custom-option custom-option-basic">
                                                    <label class="form-check-label custom-option-content"
                                                        for="q{{ $val1['name']."_val" }}_op2">
                                                        <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op2"
                                                            name="{{$val1['name']."_val"}}" type="radio" {{ old(
                                                            $val1['name']."_val" ,$visit[$val1['name']."_val"])=="3" ?"checked":"" }} value="3">
                                                        <span class="custom-option-header">
                                                            <span class="  mb-0  -danger">
                                                                خوب
                                                                (3)
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md mb-md-0 mb-2">
                                                <div class="form-check custom-option custom-option-basic ">
                                                    <label class="form-check-label custom-option-content"
                                                        for="q{{ $val1['name']."_val" }}_op3">
                                                        <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op3"
                                                            name="{{$val1['name']."_val"}}" type="radio" {{ old(
                                                            $val1['name']."_val" ,$visit[$val1['name']."_val"])=="2" ?"checked":"" }} value="2">
                                                        <span class="custom-option-header">
                                                            <span class="  mb-0  -success">

                                                                متوسط
                                                                (2)
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-check custom-option custom-option-basic">
                                                    <label class="form-check-label custom-option-content"
                                                        for="q{{ $val1['name']."_val" }}_op4">
                                                        <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op4"
                                                            name="{{$val1['name']."_val"}}" type="radio" {{ old(
                                                            $val1['name']."_val" ,$visit[$val1['name']."_val"])=="1" ?"checked":"" }} value="1">
                                                        <span class="custom-option-header">
                                                            <span class="  mb-0  -danger">

                                                                نیاز به راهنمایی بیشتر
                                                                (1)
                                                            </span>
                                                        </span>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-check custom-option custom-option-basic">
                                                    <label class="form-check-label custom-option-content"
                                                        for="q{{ $val1['name']."_val" }}_op5">
                                                        <input class="form-check-input" id="q{{ $val1['name']."_val" }}_op5"
                                                            name="{{$val1['name']."_val"}}" type="radio" {{ old(
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

                                        </div>
                                        <div class="row">
                                            <div class="col col-md-12">
                                                <label class="form-label" for="educational_background_one_girl">امتیاز</label>
                                                <input type="number" value="{{ old($val1['name']."_score",$visit[$val1['name']."_score"])}}" class="form-control" id="educational_background_one_girl"
                                                name="{{ ($val1['name']."_score")}}" />
                                            </div>
                                        </div>
                                        @endforeach

                                        @endforeach





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
                                            <h5 class="mb-0 alert alert-success">شرح خلاقیت و ابتکارات</h5>
                                        </div>

                                        <!-- questions 1 -->

                                        <h3>
                                            {{ $val["title"] }}
                                        </h3>
                                        <div class="col-sm-12">
                                            <label class="form-label" for="unit_type"> </label>
                                           <textarea name="creative" class="form-control" id="" cols="30" rows="10">{{ old("creative",$visit->creative) }}</textarea>
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



                                </div>
                            </div>
                        </div>
                        <!-- /Vertical Icons Wizard -->
                    </div>

                    {{-- <div class="mb-3">
                        <label class="form-label" for="active">وضعیت</label>
                        <select class="form-select" id="active" name="active">
                            <option value="">انتخاب کنید </option>
                            <option {{ old("active",$visit->active)=="1" ?"selected":"" }} value="1">فعال</option>
                            <option {{ old("active",$visit->active)=="0" ?"selected":"" }} value="0">غیر فعال</option>
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
