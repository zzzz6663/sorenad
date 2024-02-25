<div id="sidebar_right">

    <div class="bodydeactive"><i class="fa fa-close"></i></div>

    <div class="accordionWrapper box_shdow">
        <span>
          {{auth()->user()->role}}
        </span>
        <a  class="{{(Route::currentRouteName()=='admin.dashoard')?'mactive':''}}"  href="{{ route("admin.dashoard") }}">

            <i class="fa-solid fa-gauge-high"></i>
             پیشوان</a>
        {{-- {{(Route::currentRouteName()=='visit.index')?'active':''}} --}}

            <a href="{{ route("site.index") }}" class="{{(Route::currentRouteName()=='site.index')?'mactive':''}}">
<i class="fas fa-globe-africa"></i>
             مدیریت سایت
             @if($unread_site=App\Models\Site::whereStatus("created")->count())
             <span class="num_circle">{{ $unread_site }}</span>

             @endif
            </a>

            <a href="{{ route("user.index") }}" class="{{(Route::currentRouteName()=='user.index')?'mactive':''}}">
                <i class="fas fa-users"></i>

             کابران
            </a>

            <a href="{{ route("transaction.index") }}" class="{{(Route::currentRouteName()=='transaction.index')?'mactive':''}}">
                <i class="fas fa-users"></i>

             تراکنش ها
            </a>



        <a href="">
            <i class="fa-solid fa-photo-film"></i>
              مدیریت رسانه ها</a>


            <a href="{{ route("withdrawal.index") }}" class="{{(Route::currentRouteName()=='withdrawal.index')?'mactive':''}}">
                <i class="fa-solid fa-money-bill-transfer"></i>

                تسویه حساب ها
                @if(auth()->user()->unread_withdrawal())
                <span class="num_circle">{{ auth()->user()->unread_withdrawal() }}</span>
                @endif
            </a>

        <a href="{{ route("advertise.index") }}" class="{{(Route::currentRouteName()=='advertise.index')?'mactive':''}}">

            <i class="fa-solid fa-volume-high"></i>


            لیست تبلیغات</a>

        <div class="accordionItem {{in_array(Route::currentRouteName(),[
            'setting.ads.app',
            'setting.ads.banner',
            'setting.ads.fixpost',
            'setting.ads.popup',
            'setting.ads.video',
            'setting.ads.text',
            ])?"open":"close"}}">
            <div class="accordionItemHeading">

                <span>
                    <i class="fa-solid fa-sliders"></i>
                    تنظیمات تبلیغات</span>

                <div class="left_arrow"><svg width="10px" height="10px" viewBox="0 -19.04 75.804 75.804" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group_67" data-name="Group 67" transform="translate(-798.203 -587.815)">
                            <path id="Path_59" data-name="Path 59" d="M798.2,589.314a1.5,1.5,0,0,1,2.561-1.06l33.56,33.556a2.528,2.528,0,0,0,3.564,0l33.558-33.556a1.5,1.5,0,1,1,2.121,2.121l-33.558,33.557a5.53,5.53,0,0,1-7.807,0l-33.56-33.557A1.5,1.5,0,0,1,798.2,589.314Z" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg></div>

            </div>
            <div class="accordionItemContent">
                <ul>
                    <li class="subitem {{ Route::currentRouteName()=="setting.ads.app"?"active":"" }}"><a href="{{ route("setting.ads.app") }}">تبلیغات نصب اپلیکیشن</a></li>
                    <li class="subitem {{ Route::currentRouteName()=="setting.ads.banner"?"active":"" }}"><a href="{{ route("setting.ads.banner") }}">تبلیغات نصب بنری</a></li>
                    <li class="subitem {{ Route::currentRouteName()=="setting.ads.fixpost"?"active":"" }}"><a href="{{ route("setting.ads.fixpost") }}">تبلیغات پست ثابت</a></li>
                    <li class="subitem {{ Route::currentRouteName()=="setting.ads.popup"?"active":"" }}"><a href="{{ route("setting.ads.popup") }}">تبلیغات پاپ آپ</a></li>
                    <li class="subitem {{ Route::currentRouteName()=="setting.ads.video"?"active":"" }}"><a href="{{ route("setting.ads.video") }}">تبلیغات ویدیویی</a></li>
                    <li class="subitem {{ Route::currentRouteName()=="setting.ads.text"?"active":"" }}"><a href="{{ route("setting.ads.text") }}">تبلیغات متنی</a></li>
                </ul>
            </div>
        </div>


        <a href="{{ route("ticket.index") }}" class="{{(Route::currentRouteName()=='ticket.index')?'mactive':''}}">
            <i class="fa-solid fa-headphones-simple"></i>
            تیکت ها
            @if(auth()->user()->unread_message())
            <span class="num_circle">{{ auth()->user()->unread_message() }}</span>
            @endif
        </a>
        <a href="{{ route("faq.index") }}" class="{{(Route::currentRouteName()=='faq.index')?'mactive':''}}">
            <i class="fa-solid fa-person-circle-question"></i>
            سوالات متداول
        </a>

        <a href="{{ route("cat.index") }}" class="{{(Route::currentRouteName()=='cat.index')?'mactive':''}}">
            <i class="fa-solid fa-list"></i>
            دسته بندی ها
        </a>



        <div class="accordionItem close">
            <div class="accordionItemHeading">

                <span>
                    <i class="fa-regular fa-clipboard"></i>
                    گزارش ها</span>

                <div class="left_arrow"><svg width="10px" height="10px" viewBox="0 -19.04 75.804 75.804" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group_67" data-name="Group 67" transform="translate(-798.203 -587.815)">
                            <path id="Path_59" data-name="Path 59" d="M798.2,589.314a1.5,1.5,0,0,1,2.561-1.06l33.56,33.556a2.528,2.528,0,0,0,3.564,0l33.558-33.556a1.5,1.5,0,1,1,2.121,2.121l-33.558,33.557a5.53,5.53,0,0,1-7.807,0l-33.56-33.557A1.5,1.5,0,0,1,798.2,589.314Z" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg></div>

            </div>
            <div class="accordionItemContent">
                <ul>
                    <li><a href="">گزارش نمایش تبلیغات</a></li>
                    <li><a href="">گزارش آخرین تراکنش ها</a></li>
                    <li><a href="">گزارش کاربران</a></li>
                </ul>
            </div>
        </div>

        <a href="{{ route("site.setting") }}">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            تنظیمات سایت
        </a>

        <a href="{{ route("logout") }}">
            <i class="fa-solid fa-right-from-bracket"></i>
            خروج از

            حساب</a>

    </div>

    <script type="text/javascript">
        var accItem = document.getElementsByClassName('accordionItem');
        var accHD = document.getElementsByClassName('accordionItemHeading');
        for (i = 0; i < accHD.length; i++) {
            accHD[i].addEventListener('click', toggleItem, false);
        }

        function toggleItem() {
            var itemClass = this.parentNode.className;
            for (i = 0; i < accItem.length; i++) {
                accItem[i].className = 'accordionItem close';
            }
            if (itemClass == 'accordionItem close') {
                this.parentNode.className = 'accordionItem open';
            }
        }

    </script>

    <div class="clear"></div>
</div>
