@extends('master.site')

@section('content')
<h2 class="title_right">
    {{ __("setting.app_title") }}
</h2>
@include("master.error")
<form action="{{ route("advertiser.bank.info") }}" method="post">
    @csrf
    @method('post')

    <h2 class="title_right"><i class="fa fa-credit-card"></i> اطلاعات مالی</h2>
    @if(!$user->confirm_bank_account && $user->cart)
    <div class="alert_box">
        <i class="fa fa-info-circle"></i>
        <p>اطلاعات مالی در انتظار تائید می باشد.</p>
    </div>
    @else
   <span class="alert alert-success">
    تایید شده
   </span>
    @endif
    <br>
    <br>


    <div class="dashboard_site_form">
        <form>

            <p>
                <label for="shaba">شماره شبا</label>
                <div class="sheba_field"><input type="text" id="shaba" name="shaba" value="{{ old("shaba",$user->shaba) }}"><span class="sheba_ir">IR</span></div>
            </p>

            <p>
                <label for="cart">شماره کارت</label>
                <input type="text" value="{{ old("cart",$user->cart) }}" id="cart" name="cart">
            </p>

            <div class="flex_tworow">

                <p>
                    <label for="account">نام صاحب حساب</label>
                    <input type="text" value="{{ old("account",$user->account) }}" id="account" name="account">
                </p>

                <p>
                    <label for="bank">نام بانک</label>
                    <input type="text" value="{{ old("bank",$user->bank) }}" id="bank" name="bank">

                    {{--  <select class="select_banks">
                        <option {{ old("bank",$user->bank)==""?"selected":"" }} value="AL">ملی</option>
                        <option {{ old("bank",$user->bank)==""?"selected":"" }} value="WY">سپه</option>
                        <option {{ old("bank",$user->bank)==""?"selected":"" }} value="WY">صادرات</option>
                        <option {{ old("bank",$user->bank)==""?"selected":"" }} value="WY">بلوبانک</option>
                        <option {{ old("bank",$user->bank)==""?"selected":"" }} value="WY">تجارت</option>
                    </select>  --}}
                </p>

            </div>

            <p>
                <label for="a_mellicode">کد ملی</label>
                <input type="text" id="a_mellicode"  value="{{ old("a_mellicode",$user->a_mellicode) }}"  name="a_mellicode">
            </p>

            <div class="clear2"></div>
            <p><button id="submit_form">ثبت </button></p>
        </form>

        <div class="clear"></div>
    </div>


    <!-- nemoodar_box -->
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $(".select_banks").select2();
            });
        }(jQuery));

    </script>


    <div class="clear"></div>
    </div>
    <!-- sidebar_left -->


    <div class="clear"></div>
</form>

@endsection
