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
    <h2 class="title_right">مدیریت کاربران</h2>

    <form action="{{ route('user.index') }}" method="get" autocomplete="off">
        @csrf
        @method('get')
        <div class="row">
            <div class="col-lg-2">
                <label for="search">جستجو</label>
                <input type="text" name="search" value="{{ request('search') }}" class="form-control ">
            </div>
            <div class="col-lg-2">
                <label for="from">از</label>
                <input type="text" name="from" value="{{ request('from') }}" class="form-control persian_date">
            </div>
            <div class="col-lg-2">
                <label for="to">تا </label>
                <input type="text" name="to" value="{{ request('to') }}" class="form-control persian_date">
            </div>
            <div class="col-lg-2">
                <label for="vip">وضعیت </label>
                <select class="form-control" name="vip" id="vip">
                    <option value=""> انتخاب کنید </option>
                    <option {{ request("vip")?"selected":"1" }} value="1"> فعال  </option>
                    <option {{ request("vip")?"selected":"0" }} value="0"> غیر فعال </option>
                </select>
            </div>
            <div class="col-lg-2">
                <label for="active">Vip </label>
                <select class="form-control" name="active" id="active">
                    <option value=""> انتخاب کنید </option>
                    <option {{ request("active")?"selected":"1" }} value="1"> فعال  </option>
                    <option {{ request("active")?"selected":"0" }} value="0"> غیر فعال </option>
                </select>
            </div>
            <div class="col-lg-2">
                <br>
                <button class="btn btn-success">
                    جست جو
                </button>
                @if(request()->has("search"))
                <a href="{{ route("user.index") }}" class="btn btn-danger"><i class="fas fa-window-close"></i></a>
                @endif
            </div>
            <div class="col-lg-2">
                <br>
              <h5>
                {{ $users->total() }}
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
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>تلفن همراه</th>
                    <th>وضعیت </th>
                    <th>Vip</th>
                    <th>تاریخ</th>

                    <th>عملیات</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($users as $user )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $user->name }}
                        {{ $user->family }}
                    </td>
                    <td>{{ $user->mobile }}</td>
                    <td>
                        <span class="text tooltiper text-{{ $user->active?"success":"danger" }} " title="{{ $user->active?"فعال":"غیر فعال" }}">
                            <i class="fa-solid tooltiper
                                 {{ $user->active?"fa-badge-check":"fa-circle-xmark" }} ">
                                </i>
                        </span>
                    </td>
                    <td>
                        <span class="text tooltiper text-{{ $user->vip?"success":"danger" }} " title="کاب {{ $user->active?"Vip":"معمولی" }}">
                            <i class="fa-solid tooltiper
                                 {{ $user->vip?"fa-badge-check":"fa-circle-xmark" }} ">
                                </i>
                        </span>
                    </td>
                    <td>{{ jdate($user->created_at)->format("Y-m-d") }}</td>
                    <td>
                        <a href="{{ route("user.edit",$user->id) }}" class="btn btn-success">
                            <i class="fa-solid fa-pen tooltiper" title="ویرایش کاربر"></i>
                        </a>
                        @if($user->confirm_bank_account)
                        <span>
                            تایید شده در
                            {{ jdate($user->confirm_bank_account)->format("Y-m-d") }}
                        </span>
                        @else
                        <a href="{{ route("user.bank.info",$user->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-money-check-dollar tooltiper" title="تایید اطلاعات حساب کاربر"></i>
                        </a>
                        @endif

                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>







    </div>



    <!-- delete user -->
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
    <!-- delete user -->

    <!-- deactive user -->
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
    <!-- deactive user -->

    <!-- increase money user -->
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
    <!-- increase money user -->

    <!-- dencrease money user -->
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
    <!-- dencrease money user -->


    <!-- dencrease money user -->
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
    <!-- dencrease money user -->


    <!-- edite user -->
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
    <!-- edite user -->

    <!-- vip user -->
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
    <!-- vip user -->

    <!-- normal user -->
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
    <!-- normal user -->


    <div class="clear"></div>
</div>
@endsection
