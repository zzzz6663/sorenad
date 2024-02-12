@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.app_title") }}
</h2>
@include("master.error")
<form action="{{ route("advertiser.sites") }}" method="post">
    @csrf
    @method('post')
    <h2 class="title_right"><i class="fa fa-user-o"></i>اطلاعات کلی</h2>
    <div class="dashboard_site_form">

        <form>
            <p>
                <label for="name">نام سایت</label>
                <input type="text" id="name" name="name" value="{{ old("name") }}">
            </p>

            <p>
                <label for="site">آدرس سایت</label>
                <input type="text" id="site" name="site" value="{{ old("site") }}">
            </p>


            <p>
                <label for="site_category">انتخاب دسته بندی</label>
                <select name="cat_id" id="" class="form-contol">
                    <option value="">یک مورد را انتخاب کنید </option>
                    @foreach ( App\Models\Cat::whereActive(1)->get() as $cat )
                    <option {{ old("cat_id")==$cat->id?"selected":"" }} value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </p>

            <p><button id="submit_form">ثبت سایت</button></p>
        </form>

        <div class="clear"></div>
    </div>
</form>
<div class="dashbord_box_table">
    <h2 class="title_right">سایتهای من</h2>
    <div class="flex dashbord_table">

        <div class="dashbord_table_title">
            <ul class="flex">
                <li>نام</li>
                <li> سایت</li>
                <li>میزان درامد</li>
                <li>تاریخ ایجاد</li>
                <li>وضعیت نمایش دهنده</li>
            </ul>
        </div>
        @foreach ($sites as $site )

        <div class="dashbord_table_row">
            <ul class="flex">
                <li>{{ $site->name }}</li>
                <li>{{ $site->site }}</li>
                <li>
                    {{ $site->income() }}
                    <span class="price_format">تومان</span>
                </li>
                <li>
                    {{ jdate($site->created_at) }}
                </li>
                <li><i class="fa fa-check-circle-o"></i></li>
            </ul>
        </div>

        @endforeach



    </div>

</div>

@endsection
