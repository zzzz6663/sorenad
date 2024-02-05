@extends('master.admin')
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
<div id="sidebar_left">

    <h2 class="title_right">مدیریت کاربران</h2>
    <div class="flex dashbord_table admin_dashboard_table_xs">

        <div class="dashbord_table_title">
            <ul class="flex">
                <li>نام</li>
                <li>نام خانوادگی</li>
                <li>سمت</li>
                <li>تلفن همراه</li>
                <li>رمز عبور</li>
                <li>عملیات</li>
            </ul>
        </div>

        <div class="dashbord_table_row">
            <ul class="flex">
                <li>احمد</li>
                <li>کلهری</li>
                <li>تبلیغ دهنده</li>
                <li>09158856205</li>
                <li>7877&amp;*#45؛6</li>
                <li>
                    <div class="flex acc_admin_cd">
                        <div class="delete_item show_c_box1 tooltip">❌<span class="tooltiptext">حذف کاربر</span></div>
                        <div class="deactive_item show_c_box2 tooltip">⛔<span class="tooltiptext">غیرفعال کردن</span></div>
                        <div class="increase_item show_c_box3 tooltip">🔼<span class="tooltiptext">افزایش موجودی</span></div>
                        <div class="decrease_item show_c_box4 tooltip active">🔽<span class="tooltiptext">کاهش موجودی</span></div>
                        <div class="send_messages_item show_c_box5 tooltip">📨<span class="tooltiptext">ارسال پیام</span></div>
                        <div class="edit_info_item show_c_box6 tooltip">✏️<span class="tooltiptext">ویرایش اطلاعات کاربر</span></div>
                        <div class="up_to_vip show_c_box7 tooltip">🥇<span class="tooltiptext">ارتقاء به کاربر vip</span></div>
                        <div class="down_to_user show_c_box8 tooltip">👨‍💼<span class="tooltiptext">بازگشت به کاربر معمولی</span></div>
                    </div>
                </li>
            </ul>
        </div>




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
