@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.video_title") }}
</h2>
@include("master.error")
<form action="{{ route("site.setting") }}" method="post">
    @csrf
    @method('post')
    <h2 class="title_right">تنظیمات سایت</h2>
    <div class="dashboard_site_form">

        <div class="flex_tworow">

            <p>
                <label for="">{{ __("setting.tax_percent_page_ad") }}</label>
                <input type="text" id="tax_percent_page_ad" value="{{ old("tax_percent_page_ad",$tax_percent_page_ad->val) }}" name="tax_percent_page_ad" >
            </p>



            <p>
                <label for="">{{ __("setting.min_val_checkout") }}</label>
                <input type="text" id="min_val_checkout" class="number_format" value="{{ old("min_val_checkout",$min_val_checkout->val) }}" name="min_val_checkout" >
                <div class="amount_total"></div>
            </p>

        </div>


        <div class="flex_tworow">


            <p>
                <label for="">{{ __("setting.change_pass_admin") }}</label>
                <input type="text" id="change_pass_admin" value="" name="change_pass_admin" >
            </p>

            <p>
                <label for="">{{ __("setting.repeat_pass_admin") }}</label>
                <input type="text" id="repeat_pass_admin" value="" name="repeat_pass_admin" >
            </p>



        </div>

    </div>
    <button class="btn btn-success">

        به روز سانی
    </button>
</form>

@endsection
