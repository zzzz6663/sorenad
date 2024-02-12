@extends('master.site')
{{-- @section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> لیست کاربران</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  @endsection  --}}
@section('content')
<div class="card-header ">
    <h2 class="title_right">مدیریت تراکنش ها </h2>

    <form action="{{ route('withdrawal.index') }}" method="get" autocomplete="off">
        @csrf
        @method('get')
        <div class="row">
            {{--  <div class="col-lg-2">
                <label for="search">جستجو</label>
                <input type="text" name="search" value="{{ request('search') }}" class="form-control ">
            </div>  --}}
            <div class="col-lg-2">
                <label for="from">از</label>
                <input type="text" name="from" value="{{ request('from') }}" class="form-control persian_date">
            </div>
            <div class="col-lg-2">
                <label for="to">تا </label>
                <input type="text" name="to" value="{{ request('to') }}" class="form-control persian_date">
            </div>
            {{--  <div class="col-lg-2">
                <label for="vip">وضعیت </label>
                <select class="form-control" name="vip" id="vip">
                    <option value=""> انتخاب کنید </option>
                    <option {{ request("vip")==1?"selected":"1" }} value="1"> فعال  </option>
                    <option {{ request("vip")==0?"selected":"0" }} value="0"> غیر فعال </option>
                </select>
            </div>  --}}

            <div class="col-lg-2">
                <label for="customer_id">مشتری  </label>
                <select class="form-control select2" name="customer_id" id="customer_id"  >
                    <option value=""> انتخاب کنید </option>
                    @foreach ($customers as $customer )
                        <option  {{ request("customer_id")?"selected":"0" }} value="{{ $customer->id }}">
                            {{ $customer->name }}
                            {{ $customer->family }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-2">
                <label for="status">وضعیت </label>
                <select class="form-control" name="status" id="status">
                    <option value=""> انتخاب کنید </option>
                    @foreach (__("withdrawal") as $key=>$val )
                    <option {{ request("status" )==$key ?"selected":"1" }} value="{{ $key }}"> {{ __("withdrawal.".$key) }}  </option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-2">
                <br>
                <button class="btn btn-success">
                    جست جو
                </button>
                @if(request()->has("search"))
                <a href="{{ route("withdrawal.index") }}" class="btn btn-danger"><i class="fas fa-window-close"></i></a>
                @endif
            </div>
            <div class="col-lg-2">
                <br>
              <h5>
                {{ $withdrawals->total() }}
                رکورد
              </h5>
            </div>
        </div>

    </form>

</div>
<br>
<div id="">
    <div class="flex dashbord_table admin_dashboard_table_xs">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>نام </th>
                    <th>مقدار </th>
                    <th>وضعیت </th>
                    <th>تاریخ</th>
                    <th>توضیحات </th>
                    <th>پیوست  </th>

                    <th>عملیات</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($withdrawals as $withdrawal )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $withdrawal->user->name }}
                        {{ $withdrawal->user->family }}
                    </td>
                    <td>{{number_format( $withdrawal->amount) }}
                        تومان
                    </td>
                    <td>
                       <span class="alert alert-{{ $withdrawal->status=="before_pay"?"danger":"" }}{{ $withdrawal->status=="payed"?"success":"" }}{{ $withdrawal->status==""?"":"" }}">
                        {{ __("withdrawal.".$withdrawal->status) }}
                       </span>
                    </td>

                    <td>{{ jdate($withdrawal->created_at)->format("Y-m-d") }}</td>
                    <td>{{ $withdrawal->info}}</td>
                    <td>
                        @if($withdrawal->attach())
                        <a class="no_link" href="{{ route("download",['path'=>$withdrawal->attach()]) }}">
                            <i class="fas fa-download"></i>
                        </a>
                        @endif

                </td>
                    <td>
                        @if($withdrawal->status!="admin_confirmed")

                        <a href="{{ route("withdrawal.edit",$withdrawal->id) }}" class="btn btn-danger">  ثبت اطلاعات </a>
                        @endif

                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>







    </div>



    <!-- delete withdrawal -->
    <div class="popup_c_bg1">
        <div class="popuup_c_box1">
            <div class="pop_title_c_box">
                <h5>حذف کاربر</h5>
            </div>
            <div class="btn_close_c_top close_c_box1"> <span>+</span> </div>
            <div class="modal-body">
                <p>مطمعن هستید که میخواهید کاربر را حذف کنید ؟</p>
                <p><a class="btn_links green_urlx" href="">بله</a> <a class="btn_links red_urlx" href="">خیر</a></p>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- delete withdrawal -->

    <!-- deactive withdrawal -->
    <div class="popup_c_bg2">
        <div class="popuup_c_box2">
            <div class="pop_title_c_box">
                <h5>غیرفعال کردن کاربر</h5>
            </div>
            <div class="btn_close_c_top close_c_box2"> <span>+</span> </div>
            <div class="modal-body">
                <p>مطمعن هستید که میخواهید کاربر را غیرفعال کنید ؟</p>
                <p><a class="btn_links green_urlx" href="">بله</a> <a class="btn_links red_urlx" href="">خیر</a></p>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- deactive withdrawal -->

    <!-- increase money withdrawal -->
    <div class="popup_c_bg3">
        <div class="popuup_c_box3">
            <div class="pop_title_c_box">
                <h5>افزایش موجودی</h5>
            </div>
            <div class="btn_close_c_top close_c_box3"> <span>+</span> </div>
            <div class="modal-body">
                <p>میزان افزایش موجودی را وارد کنید.</p>
                <div class="flex increase_form">
                    <input type="text" name="" placeholder="مبلغ را وارد کنید">
                    <input type="submit" value="ثبت">
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- increase money withdrawal -->

    <!-- dencrease money withdrawal -->
    <div class="popup_c_bg4">
        <div class="popuup_c_box4">
            <div class="pop_title_c_box">
                <h5>کاهش موجودی</h5>
            </div>
            <div class="btn_close_c_top close_c_box4"> <span>+</span> </div>
            <div class="modal-body">
                <p>میزان کاهش موجودی را وارد کنید.</p>
                <div class="flex increase_form">
                    <input type="text" name="" placeholder="مبلغ را وارد کنید">
                    <input type="submit" value="ثبت">
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- dencrease money withdrawal -->


    <!-- dencrease money withdrawal -->
    <div class="popup_c_bg5">
        <div class="popuup_c_box5">
            <div class="pop_title_c_box">
                <h5>ارسال پیام</h5>
            </div>
            <div class="btn_close_c_top close_c_box5"> <span>+</span> </div>
            <div class="modal-body">

                <div class="flex adx_form">
                    <input type="text" name="" placeholder="عنوان">
                    <textarea placeholder="متن پیام"></textarea>
                    <input type="submit" value="ارسال">
                </div>

                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- dencrease money withdrawal -->


    <!-- edite withdrawal -->
    <div class="popup_c_bg6">
        <div class="popuup_c_box6">
            <div class="pop_title_c_box">
                <h5>ویرایش اطلاعات</h5>
            </div>
            <div class="btn_close_c_top close_c_box6"> <span>+</span> </div>
            <div class="modal-body">

                <div class="flex adx_form">
                    <input type="text" name="" placeholder="نام">
                    <input type="text" name="" placeholder="نام خانوادگی">
                    <input type="text" name="" placeholder="سمت">
                    <input type="text" name="" placeholder="تلفن همراه">
                    <input type="text" name="" placeholder="رمز عبور">
                    <input type="submit" value="ارسال">
                </div>

                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- edite withdrawal -->

    <!-- vip withdrawal -->
    <div class="popup_c_bg7">
        <div class="popuup_c_box7">
            <div class="pop_title_c_box">
                <h5>ارتقاء به کاربر vip</h5>
            </div>
            <div class="btn_close_c_top close_c_box7"> <span>+</span> </div>
            <div class="modal-body">
                <p>مطمعن هستید که میخواهید کاربر را vip کنید ؟</p>
                <p><a class="btn_links green_urlx" href="">بله</a> <a class="btn_links red_urlx" href="">خیر</a></p>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- vip withdrawal -->

    <!-- normal withdrawal -->
    <div class="popup_c_bg8">
        <div class="popuup_c_box8">
            <div class="pop_title_c_box">
                <h5>بازگشت به کاربر معمولی</h5>
            </div>
            <div class="btn_close_c_top close_c_box8"> <span>+</span> </div>
            <div class="modal-body">
                <p>مطمعن هستید که میخواهید کاربر را معمولی کنید ؟</p>
                <p><a class="btn_links green_urlx" href="">بله</a> <a class="btn_links red_urlx" href="">خیر</a></p>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- normal withdrawal -->


    <div class="clear"></div>
</div>
@endsection
