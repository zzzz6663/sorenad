{{-- <div id="sidebar_right">

    <div class="bodydeactive"><i class="fa fa-close"></i></div>

    <div class="accordionWrapper box_shdow">
        <a class="{{(Route::currentRouteName()=='admin.dashoard')?'mactive':''}}" href="{{ route("admin.dashoard") }}"><svg width="30px" height="30px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.02 5.5H20.98C21.27 5.5 21.5 5.73 21.5 6.02V18.98C21.5 19.27 21.27 19.5 20.98 19.5H3.02C2.73 19.5 2.5 19.27 2.5 18.98V6.02C2.5 5.73 2.73 5.5 3.02 5.5Z" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
    <path d="M12 8.25V10.25" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
    <path d="M12 15.25V16.75" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
    <path d="M17 8.25V8.95999" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
    <path d="M7 11.25V16.75" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
    <path d="M7 9.75C7.55228 9.75 8 9.30228 8 8.75C8 8.19772 7.55228 7.75 7 7.75C6.44772 7.75 6 8.19772 6 8.75C6 9.30228 6.44772 9.75 7 9.75Z" fill="#000000"></path>
    <path d="M12 13.75C12.5523 13.75 13 13.3023 13 12.75C13 12.1977 12.5523 11.75 12 11.75C11.4477 11.75 11 12.1977 11 12.75C11 13.3023 11.4477 13.75 12 13.75Z" fill="#000000"></path>
    <path d="M17 11.96C17.5523 11.96 18 11.5122 18 10.96C18 10.4077 17.5523 9.95996 17 9.95996C16.4477 9.95996 16 10.4077 16 10.96C16 11.5122 16.4477 11.96 17 11.96Z" fill="#000000"></path>
    <path d="M17 12.96V16.75" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
</svg> پیشوان</a>
<div class="accordionItem close">
    <div class="accordionItemHeading">

        <span><svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="10" cy="6" r="4" stroke="#000000" stroke-width="1.5"></circle>
                <path d="M21 10H19M19 10H17M19 10L19 8M19 10L19 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                <path d="M17.9975 18C18 17.8358 18 17.669 18 17.5C18 15.0147 14.4183 13 10 13C5.58172 13 2 15.0147 2 17.5C2 19.9853 2 22 10 22C12.231 22 13.8398 21.8433 15 21.5634" stroke="#000000" stroke-width="1" stroke-linecap="round"></path>
            </svg> مدیریت کاربران</span>

        <div class="left_arrow"><svg width="10px" height="10px" viewBox="0 -19.04 75.804 75.804" xmlns="http://www.w3.org/2000/svg">
                <g id="Group_67" data-name="Group 67" transform="translate(-798.203 -587.815)">
                    <path id="Path_59" data-name="Path 59" d="M798.2,589.314a1.5,1.5,0,0,1,2.561-1.06l33.56,33.556a2.528,2.528,0,0,0,3.564,0l33.558-33.556a1.5,1.5,0,1,1,2.121,2.121l-33.558,33.557a5.53,5.53,0,0,1-7.807,0l-33.56-33.557A1.5,1.5,0,0,1,798.2,589.314Z" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg></div>

    </div>
    <div class="accordionItemContent">
        <ul>
            <li><a href="{{ route("user.index") }}"> نمایش دهنده ها</a></li>
            <li><a href=""> تبلیغ دهنده ها</a></li>
        </ul>
    </div>
</div>
<a href=""><svg width="30px" height="30px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.02 5.5H20.98C21.27 5.5 21.5 5.73 21.5 6.02V18.98C21.5 19.27 21.27 19.5 20.98 19.5H3.02C2.73 19.5 2.5 19.27 2.5 18.98V6.02C2.5 5.73 2.73 5.5 3.02 5.5Z" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M12 8.25V10.25" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M12 15.25V16.75" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M17 8.25V8.95999" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M7 11.25V16.75" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M7 9.75C7.55228 9.75 8 9.30228 8 8.75C8 8.19772 7.55228 7.75 7 7.75C6.44772 7.75 6 8.19772 6 8.75C6 9.30228 6.44772 9.75 7 9.75Z" fill="#000000"></path>
        <path d="M12 13.75C12.5523 13.75 13 13.3023 13 12.75C13 12.1977 12.5523 11.75 12 11.75C11.4477 11.75 11 12.1977 11 12.75C11 13.3023 11.4477 13.75 12 13.75Z" fill="#000000"></path>
        <path d="M17 11.96C17.5523 11.96 18 11.5122 18 10.96C18 10.4077 17.5523 9.95996 17 9.95996C16.4477 9.95996 16 10.4077 16 10.96C16 11.5122 16.4477 11.96 17 11.96Z" fill="#000000"></path>
        <path d="M17 12.96V16.75" stroke="#000000" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg> مدیریت رسانه ها</a>

<a href=""><svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.0799 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V12M3 9H21M18 21V15M21 18.0008L15 18" stroke="#000000" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg> تسویه حساب ها</a>

<a href=""><svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30" xml:space="preserve">
        <style type="text/css">
            .st0 {
                fill: none;
                stroke: #000000;
                stroke-width: 1;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-miterlimit: 10;
            }

        </style>
        <path class="st0" d="M8.8,8.5L8.8,8.5C5.6,8.5,3,11,3,14v0c0,3,2.6,5.5,5.8,5.5h0c5.1,0,10,1.1,14.6,3.3L28,25V12.5V3l-4.7,2.2
        C18.8,7.4,13.8,8.5,8.8,8.5z"></path>
        <polyline class="st0" points="5.3,18.6 10.5,29 16,29 16,8.6 "></polyline>
    </svg> لیست تبلیغات</a>

<div class="accordionItem {{in_array(Route::currentRouteName(),[
            'setting.ads.app',
            'setting.ads.banner',
            'setting.ads.fixpost',
            'setting.ads.popup',
            'setting.ads.video',
            'setting.ads.txt',
            ])?"open":"close"}}">
    <div class="accordionItemHeading">

        <span><svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 30 30" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: none;
                        stroke: #000000;
                        stroke-width: 1;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-miterlimit: 10;
                    }

                </style>
                <path class="st0" d="M8.8,8.5L8.8,8.5C5.6,8.5,3,11,3,14v0c0,3,2.6,5.5,5.8,5.5h0c5.1,0,10,1.1,14.6,3.3L28,25V12.5V3l-4.7,2.2
        C18.8,7.4,13.8,8.5,8.8,8.5z"></path>
                <polyline class="st0" points="5.3,18.6 10.5,29 16,29 16,8.6 "></polyline>
            </svg> تنظیمات تبلیغات</span>

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
            <li class="subitem {{ Route::currentRouteName()=="setting.ads.txt"?"active":"" }}"><a href="{{ route("setting.ads.txt") }}">تبلیغات متنی</a></li>
        </ul>
    </div>
</div>


<a href="">
    <svg width="30px" height="30px" viewBox="0 0 24 24" id="_24x24_On_Light_Support" data-name="24x24/On Light/Support" xmlns="http://www.w3.org/2000/svg">
        <rect id="view-box" width="24" height="24" fill="none"></rect>
        <path id="Shape" d="M8,17.751a2.749,2.749,0,0,1,5.127-1.382C15.217,15.447,16,14,16,11.25v-3c0-3.992-2.251-6.75-5.75-6.75S4.5,4.259,4.5,8.25v3.5a.751.751,0,0,1-.75.75h-1A2.753,2.753,0,0,1,0,9.751v-1A2.754,2.754,0,0,1,2.75,6h.478c.757-3.571,3.348-6,7.022-6s6.264,2.429,7.021,6h.478a2.754,2.754,0,0,1,2.75,2.75v1a2.753,2.753,0,0,1-2.75,2.75H17.44A5.85,5.85,0,0,1,13.5,17.84,2.75,2.75,0,0,1,8,17.751Zm1.5,0a1.25,1.25,0,1,0,1.25-1.25A1.251,1.251,0,0,0,9.5,17.751Zm8-6.75h.249A1.251,1.251,0,0,0,19,9.751v-1A1.251,1.251,0,0,0,17.75,7.5H17.5Zm-16-2.25v1A1.251,1.251,0,0,0,2.75,11H3V7.5H2.75A1.251,1.251,0,0,0,1.5,8.751Z" transform="translate(1.75 2.25)" fill="#141124"></path>
    </svg>
    تیکت ها
</a>
<a href="{{ route("faq.index") }}" class="{{(Route::currentRouteName()=='faq.index')?'mactive':''}}">
    <svg width="30px" height="30px" viewBox="0 0 24 24" id="_24x24_On_Light_Support" data-name="24x24/On Light/Support" xmlns="http://www.w3.org/2000/svg">
        <rect id="view-box" width="24" height="24" fill="none"></rect>
        <path id="Shape" d="M8,17.751a2.749,2.749,0,0,1,5.127-1.382C15.217,15.447,16,14,16,11.25v-3c0-3.992-2.251-6.75-5.75-6.75S4.5,4.259,4.5,8.25v3.5a.751.751,0,0,1-.75.75h-1A2.753,2.753,0,0,1,0,9.751v-1A2.754,2.754,0,0,1,2.75,6h.478c.757-3.571,3.348-6,7.022-6s6.264,2.429,7.021,6h.478a2.754,2.754,0,0,1,2.75,2.75v1a2.753,2.753,0,0,1-2.75,2.75H17.44A5.85,5.85,0,0,1,13.5,17.84,2.75,2.75,0,0,1,8,17.751Zm1.5,0a1.25,1.25,0,1,0,1.25-1.25A1.251,1.251,0,0,0,9.5,17.751Zm8-6.75h.249A1.251,1.251,0,0,0,19,9.751v-1A1.251,1.251,0,0,0,17.75,7.5H17.5Zm-16-2.25v1A1.251,1.251,0,0,0,2.75,11H3V7.5H2.75A1.251,1.251,0,0,0,1.5,8.751Z" transform="translate(1.75 2.25)" fill="#141124"></path>
    </svg>
    سوالات متداول
</a>


<div class="accordionItem close">
    <div class="accordionItemHeading">

        <span><svg fill="#000000" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 463 463" xml:space="preserve">
                <g>
                    <path d="M367.5,32h-57.734c-3.138-9.29-11.93-16-22.266-16h-24.416c-7.41-9.965-19.148-16-31.584-16
            c-12.435,0-24.174,6.035-31.585,16H175.5c-10.336,0-19.128,6.71-22.266,16H95.5C78.131,32,64,46.131,64,63.5v368
            c0,17.369,14.131,31.5,31.5,31.5h272c17.369,0,31.5-14.131,31.5-31.5v-368C399,46.131,384.869,32,367.5,32z M175.5,87h112
            c7.023,0,13.332-3.101,17.641-8H352v337H111V79h46.859C162.168,83.899,168.477,87,175.5,87z M175.5,31h28.438
            c2.67,0,5.139-1.419,6.482-3.727C214.893,19.588,222.773,15,231.5,15c8.728,0,16.607,4.588,21.079,12.272
            c1.343,2.308,3.813,3.728,6.482,3.728H287.5c4.687,0,8.5,3.813,8.5,8.5v24c0,4.687-3.813,8.5-8.5,8.5h-112
            c-4.687,0-8.5-3.813-8.5-8.5v-24C167,34.813,170.813,31,175.5,31z M384,431.5c0,9.098-7.402,16.5-16.5,16.5h-272
            c-9.098,0-16.5-7.402-16.5-16.5v-368C79,54.402,86.402,47,95.5,47H152v16.5c0,0.168,0.009,0.333,0.013,0.5H103.5
            c-4.143,0-7.5,3.358-7.5,7.5v352c0,4.142,3.357,7.5,7.5,7.5h256c4.143,0,7.5-3.358,7.5-7.5v-352c0-4.142-3.357-7.5-7.5-7.5h-48.513
            c0.004-0.167,0.013-0.332,0.013-0.5V47h56.5c9.098,0,16.5,7.402,16.5,16.5V431.5z"></path>
                    <path d="M231.5,47c1.979,0,3.91-0.8,5.3-2.2c1.4-1.39,2.2-3.33,2.2-5.3c0-1.97-0.8-3.91-2.2-5.3c-1.39-1.4-3.32-2.2-5.3-2.2
            c-1.98,0-3.91,0.8-5.3,2.2c-1.4,1.39-2.2,3.32-2.2,5.3s0.8,3.91,2.2,5.3C227.59,46.2,229.52,47,231.5,47z"></path>
                    <path d="M183.5,159h136c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-136c-4.143,0-7.5,3.358-7.5,7.5S179.357,159,183.5,159z"></path>
                    <path d="M183.5,239h136c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-136c-4.143,0-7.5,3.358-7.5,7.5S179.357,239,183.5,239z"></path>
                    <path d="M183.5,319h24c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-24c-4.143,0-7.5,3.358-7.5,7.5S179.357,319,183.5,319z"></path>
                    <path d="M183.5,199h136c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-136c-4.143,0-7.5,3.358-7.5,7.5S179.357,199,183.5,199z"></path>
                    <path d="M183.5,279h32c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-32c-4.143,0-7.5,3.358-7.5,7.5S179.357,279,183.5,279z"></path>
                    <path d="M183.5,359h32c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-32c-4.143,0-7.5,3.358-7.5,7.5S179.357,359,183.5,359z"></path>
                    <path d="M143.5,159h8c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-8c-4.143,0-7.5,3.358-7.5,7.5S139.357,159,143.5,159z"></path>
                    <path d="M143.5,239h8c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-8c-4.143,0-7.5,3.358-7.5,7.5S139.357,239,143.5,239z"></path>
                    <path d="M143.5,319h8c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-8c-4.143,0-7.5,3.358-7.5,7.5S139.357,319,143.5,319z"></path>
                    <path d="M143.5,199h8c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-8c-4.143,0-7.5,3.358-7.5,7.5S139.357,199,143.5,199z"></path>
                    <path d="M143.5,279h8c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-8c-4.143,0-7.5,3.358-7.5,7.5S139.357,279,143.5,279z"></path>
                    <path d="M143.5,359h8c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5h-8c-4.143,0-7.5,3.358-7.5,7.5S139.357,359,143.5,359z"></path>
                    <path d="M279.5,264c-26.191,0-47.5,21.309-47.5,47.5s21.309,47.5,47.5,47.5c10.583,0,20.367-3.482,28.272-9.357
            c0.074-0.052,0.155-0.088,0.228-0.143c0.2-0.15,0.389-0.309,0.57-0.474C319.771,340.329,327,326.747,327,311.5
            C327,285.309,305.691,264,279.5,264z M272,279.883V304h-24.117C250.708,292.094,260.094,282.708,272,279.883z M247.883,319h27.867
            l16.719,22.292c-3.976,1.737-8.36,2.708-12.969,2.708C264.161,344,251.279,333.315,247.883,319z M304.463,332.284L287,309v-29.117
            c14.315,3.396,25,16.278,25,31.617C312,319.398,309.165,326.646,304.463,332.284z"></path>
                </g>
            </svg> گزارش ها</span>

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
    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#292D32" stroke-width="1" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z" stroke="#292D32" stroke-width="1" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
    تنظیمات سایت
</a>

<a href="{{ route("logout") }}"><svg width="30px" height="30px" stroke-width="1" viewBox="0 0 24 24" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="grid_system"></g>
        <g id="_icons">
            <g>
                <path d="M16.6,4.2c-0.5-0.3-1.1-0.1-1.4,0.4c-0.3,0.5-0.1,1.1,0.4,1.4c2.1,1.3,3.5,3.6,3.5,6c0,3.9-3.1,7-7,7s-7-3.1-7-7    c0-2.5,1.4-4.8,3.5-6.1C9,5.6,9.2,5,8.9,4.6C8.6,4.1,8,3.9,7.5,4.2C4.7,5.8,3,8.8,3,12c0,5,4,9,9,9s9-4,9-9    C21,8.8,19.3,5.9,16.6,4.2z"></path>
                <path d="M12,13c0.6,0,1-0.4,1-1V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v9C11,12.6,11.4,13,12,13z"></path>
            </g>
        </g>
    </svg>خروج از حساب</a>

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
</div> --}}




<div id="sidebar_right">

    <div class="bodydeactive"><i class="fa fa-close"></i></div>

    <a class="ads_send_panel" href="">ورود به پنل تبلیغ دهنده</a>


    <div class="accordionWrapper box_shdow">
        <div class="accordionItem open">
            <div class="accordionItemHeading"> <span><svg width="30px" height="30px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: none;
                                stroke: #000000;
                                stroke-width: 1;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10;
                            }

                            .st1 {
                                fill: none;
                                stroke: #000000;
                                stroke-width: 1;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                            }

                            .st2 {
                                fill: none;
                                stroke: #000000;
                                stroke-width: 1;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-dasharray: 5.2066, 0;
                            }

                        </style>
                        <path class="st0" d="M3,6v15c0,1.1,0.9,2,2,2h22c1.1,0,2-0.9,2-2V6c0-1.1-0.9-2-2-2H5C3.9,4,3,4.9,3,6z"></path>
                        <line class="st0" x1="9" y1="29" x2="23" y2="29"></line>
                        <path class="st0" d="M13,23c0,2.1-0.7,4.6-1.8,6"></path>
                        <path class="st0" d="M20.8,29c-1.1-1.4-1.8-3.9-1.8-6"></path>
                        <path class="st0" d="M12.5,9.6L12.5,9.6c-1.4,0-2.5,1.2-2.5,2.6v0c0,1.4,1.1,2.6,2.5,2.6h0c2.2,0,4.4,0.5,6.4,1.5l2,1v-5.8V7l-2,1
        C17,9,14.8,9.6,12.5,9.6z"></path>
                        <polyline class="st0" points="11,14.2 13.4,19 15.9,19 15.9,9.6 "></polyline>
                    </svg>نمایش تبلیغات </span>
                <div class="left_arrow"><svg width="10px" height="10px" viewBox="0 -19.04 75.804 75.804" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group_67" data-name="Group 67" transform="translate(-798.203 -587.815)">
                            <path id="Path_59" data-name="Path 59" d="M798.2,589.314a1.5,1.5,0,0,1,2.561-1.06l33.56,33.556a2.528,2.528,0,0,0,3.564,0l33.558-33.556a1.5,1.5,0,1,1,2.121,2.121l-33.558,33.557a5.53,5.53,0,0,1-7.807,0l-33.56-33.557A1.5,1.5,0,0,1,798.2,589.314Z" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg></div>
            </div>
            <div class="accordionItemContent">
                <ul>
                    <li><a href="">ثبت و مدیریت سایت</a></li>
                    <li><a href="">دریافت کد تبلیغات</a></li>
                    <li><a href="">گزارش نمایش تبلیغات</a></li>
                </ul>
            </div>
        </div>

        <div class="accordionItem {{in_array(Route::currentRouteName(),[
            'userticket.create',
            'userticket.index',
            'userticket.show',
            ])?"open":"close"}}">
            <div class="accordionItemHeading">
                <span><svg width="30px" height="30px" viewBox="0 0 24 24" id="_24x24_On_Light_Support" data-name="24x24/On Light/Support" xmlns="http://www.w3.org/2000/svg">
                        <rect id="view-box" width="24" height="24" fill="none"></rect>
                        <path id="Shape" d="M8,17.751a2.749,2.749,0,0,1,5.127-1.382C15.217,15.447,16,14,16,11.25v-3c0-3.992-2.251-6.75-5.75-6.75S4.5,4.259,4.5,8.25v3.5a.751.751,0,0,1-.75.75h-1A2.753,2.753,0,0,1,0,9.751v-1A2.754,2.754,0,0,1,2.75,6h.478c.757-3.571,3.348-6,7.022-6s6.264,2.429,7.021,6h.478a2.754,2.754,0,0,1,2.75,2.75v1a2.753,2.753,0,0,1-2.75,2.75H17.44A5.85,5.85,0,0,1,13.5,17.84,2.75,2.75,0,0,1,8,17.751Zm1.5,0a1.25,1.25,0,1,0,1.25-1.25A1.251,1.251,0,0,0,9.5,17.751Zm8-6.75h.249A1.251,1.251,0,0,0,19,9.751v-1A1.251,1.251,0,0,0,17.75,7.5H17.5Zm-16-2.25v1A1.251,1.251,0,0,0,2.75,11H3V7.5H2.75A1.251,1.251,0,0,0,1.5,8.751Z" transform="translate(1.75 2.25)" fill="#141124"></path>
                    </svg>پشتیبانی</span>
                <div class="left_arrow"><svg width="10px" height="10px" viewBox="0 -19.04 75.804 75.804" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group_67" data-name="Group 67" transform="translate(-798.203 -587.815)">
                            <path id="Path_59" data-name="Path 59" d="M798.2,589.314a1.5,1.5,0,0,1,2.561-1.06l33.56,33.556a2.528,2.528,0,0,0,3.564,0l33.558-33.556a1.5,1.5,0,1,1,2.121,2.121l-33.558,33.557a5.53,5.53,0,0,1-7.807,0l-33.56-33.557A1.5,1.5,0,0,1,798.2,589.314Z" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg></div>

            </div>
            <div class=" accordionItemContent ">
                <ul>
                    <li class="subitem {{ Route::currentRouteName()=="userticket.create"?"active":"" }}"><a href="{{ route("userticket.create") }}">ارسال تیکت جدید</a></li>
                    <li class="subitem {{ Route::currentRouteName()=="userticket.index"?"active":"" }}"><a href="{{ route("userticket.index") }}">لیست تیکت ها</a></li>
                    {{--  <li class="subitem {{ Route::currentRouteName()=="userticket.show."?"active":"" }}"><a href="{{ route("userticket.show") }}">  پیام های دریافتی</a></li>  --}}
                </ul>
            </div>
        </div>

        <div class="accordionItem close">
            <div class="accordionItemHeading">

                <span><svg fill="#000000" width="30px" height="30px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <title>credit-card-front</title>
                        <path d="M28 5.25h-24c-1.518 0.002-2.748 1.232-2.75 2.75v16c0.002 1.518 1.232 2.748 2.75 2.75h24c1.518-0.002 2.748-1.232 2.75-2.75v-16c-0.002-1.518-1.232-2.748-2.75-2.75h-0zM29.25 24c-0.001 0.69-0.56 1.249-1.25 1.25h-24c-0.69-0.001-1.249-0.56-1.25-1.25v-16c0.001-0.69 0.56-1.249 1.25-1.25h24c0.69 0.001 1.249 0.56 1.25 1.25v0zM10 21.25h-4c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h4c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0zM20 21.25h-6c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h6c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0zM24 17.25h-18c-0.414 0-0.75 0.336-0.75 0.75s0.336 0.75 0.75 0.75v0h18c0.414 0 0.75-0.336 0.75-0.75s-0.336-0.75-0.75-0.75v0zM26 9.25h-6c-0.414 0-0.75 0.336-0.75 0.75v0 4c0 0.414 0.336 0.75 0.75 0.75h6c0.414-0 0.75-0.336 0.75-0.75v0-4c-0-0.414-0.336-0.75-0.75-0.75v0zM25.25 13.25h-4.5v-2.5h4.5z"></path>
                    </svg>
                    امور مالی </span>

                <div class="left_arrow"><svg width="10px" height="10px" viewBox="0 -19.04 75.804 75.804" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group_67" data-name="Group 67" transform="translate(-798.203 -587.815)">
                            <path id="Path_59" data-name="Path 59" d="M798.2,589.314a1.5,1.5,0,0,1,2.561-1.06l33.56,33.556a2.528,2.528,0,0,0,3.564,0l33.558-33.556a1.5,1.5,0,1,1,2.121,2.121l-33.558,33.557a5.53,5.53,0,0,1-7.807,0l-33.56-33.557A1.5,1.5,0,0,1,798.2,589.314Z" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg></div>

            </div>
            <div class="accordionItemContent">
                <ul>
                    <li><a href="">درخواست تسویه حساب</a></li>
                    <li><a href="">لیست درخواست ها</a></li>
                </ul>
            </div>
        </div>

        <div class="accordionItem {{in_array(Route::currentRouteName(),[
            'advertiser.bank.info',
            'advertiser.change.password',
            'advertiser.profile',
            ])?"open":"close"}}">
            <div class="accordionItemHeading">

                <span><svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> تنظیمات</span>

                <div class="left_arrow"><svg width="10px" height="10px" viewBox="0 -19.04 75.804 75.804" xmlns="http://www.w3.org/2000/svg">
                        <g id="Group_67" data-name="Group 67" transform="translate(-798.203 -587.815)">
                            <path id="Path_59" data-name="Path 59" d="M798.2,589.314a1.5,1.5,0,0,1,2.561-1.06l33.56,33.556a2.528,2.528,0,0,0,3.564,0l33.558-33.556a1.5,1.5,0,1,1,2.121,2.121l-33.558,33.557a5.53,5.53,0,0,1-7.807,0l-33.56-33.557A1.5,1.5,0,0,1,798.2,589.314Z" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg></div>

            </div>
            <div class="accordionItemContent">
                <ul>
                    <li class="subitem {{ Route::currentRouteName()=="advertiser.profile"?"active":"" }}"><a href="{{ route("advertiser.profile") }}">اطلاعات کلی</a></li>
                    <li class="subitem {{ Route::currentRouteName()=="advertiser.bank.info"?"active":"" }}"><a href="{{ route("advertiser.bank.info") }}">  اطلاعات مالی</a></li>
                    <li class="subitem {{ Route::currentRouteName()=="advertiser.change.password"?"active":"" }}"><a href="{{ route("advertiser.change.password") }}">  تغییر رمز عبور</a></li>
                </ul>
            </div>
        </div>

        <a href=""> <svg fill="#000000" width="30px" height="30px" viewBox="0 0 64 64" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="_x32_5_attachment"></g>
                <g id="_x32_4_office"></g>
                <g id="_x32_3_pin"></g>
                <g id="_x32_2_business_card"></g>
                <g id="_x32_1_form"></g>
                <g id="_x32_0_headset"></g>
                <g id="_x31_9_video_call"></g>
                <g id="_x31_8_letter_box"></g>
                <g id="_x31_7_papperplane"></g>
                <g id="_x31_6_laptop"></g>
                <g id="_x31_5_connection"></g>
                <g id="_x31_4_phonebook"></g>
                <g id="_x31_3_classic_telephone"></g>
                <g id="_x31_2_sending_mail"></g>
                <g id="_x31_1_man_talking"></g>
                <g id="_x31_0_date"></g>
                <g id="_x30_9_review"></g>
                <g id="_x30_8_email"></g>
                <g id="_x30_7_information"></g>
                <g id="_x30_6_phone_talking">
                    <g>
                        <g>
                            <path d="M37.063,18.062h-0.0596c-0.5522,0-0.9702,0.4478-0.9702,1s0.4775,1,1.0298,1s1-0.4478,1-1S37.6152,18.062,37.063,18.062z     "></path>
                            <path d="M45.1787,18.062H45.123c-0.5522,0-0.9722,0.4478-0.9722,1s0.4756,1,1.0278,1s1-0.4478,1-1S45.731,18.062,45.1787,18.062z     "></path>
                            <path d="M53.2983,18.062h-0.0596c-0.5522,0-0.9702,0.4478-0.9702,1s0.4775,1,1.0298,1s1-0.4478,1-1     S53.8506,18.062,53.2983,18.062z"></path>
                            <path d="M45.1953,45.9268c-5.1489-2.9038-6.6909-2.6665-10.6172-0.4468c-2.0146,1.3389-4.4404,0.5225-8.6563-2.9111     c-0.8276-0.6743-1.6592-1.4263-2.4688-2.2319c-0.8091-0.8125-1.5605-1.644-2.2344-2.4722     c-3.1782-3.8999-4.0435-7.459-3.0112-8.5317c3.042-3.271,2.3516-5.957-0.3335-10.7173c-1.6172-3.0591-3.3931-6.104-5.7568-6.8027     c-1.7139-0.5034-4.2588,0.8154-5.0166,1.3184c-1.9492,1.2983-3.8003,3.5947-4.8311,5.9937     c-1.896,4.4136-1.3931,9.7329-0.29,13.2397c1.812,5.749,6.1611,12.4063,11.6348,17.8086     c5.4043,5.4761,12.0615,9.8242,17.8081,11.6313c1.8154,0.5728,4.1167,0.9844,6.5283,0.9844c2.2437,0,4.583-0.3564,6.7124-1.271     c2.3989-1.0327,4.6938-2.8838,5.9888-4.8306c0.5039-0.7554,1.8276-3.2998,1.3184-5.021     C51.2754,49.3071,48.2305,47.5308,45.1953,45.9268z M44.2368,47.6821c1.8521,0.979,5.2998,2.8018,5.8149,4.5513     c0.1056,0.3564-0.0228,1.0059-0.2598,1.681l-13.5292-7.089C38.8073,45.4165,39.8377,45.2009,44.2368,47.6821z M11.5513,13.7314     c1.7524,0.5181,3.5752,3.9663,4.5674,5.8428c2.6213,4.647,2.613,6.1134,0.9274,8.0579L9.748,14.0356     c0.556-0.2056,1.1049-0.3412,1.499-0.3412C11.3633,13.6943,11.4658,13.7061,11.5513,13.7314z M43.873,59.6807     c-3.9175,1.6836-8.8311,1.1694-11.8501,0.2163c-5.4517-1.7144-11.8032-5.8765-16.9897-11.1328     c-0.0034-0.0034-0.0063-0.0063-0.0098-0.0098C9.7695,43.5698,5.606,37.2178,3.8872,31.7642     c-0.9497-3.0195-1.4619-7.9346,0.2202-11.8501c0.8441-1.9645,2.3123-3.8291,3.8699-4.948l7.923,14.7618     c-0.4362,2.3732,0.9189,5.9038,3.7676,9.4001c0.7153,0.8789,1.5122,1.7607,2.3711,2.623     c0.8594,0.856,1.7407,1.6528,2.6196,2.3687c3.0879,2.5153,6.3303,4.6262,9.3667,3.7915l14.8708,7.792     C47.7888,57.3002,45.8823,58.816,43.873,59.6807z"></path>
                            <path d="M60.9551,10.771C56.3843,2.0591,45.5757-1.3105,36.8604,3.2568l-0.0005,0.0005     c-8.7119,4.5723-12.0825,15.3813-7.5137,24.0952c0.3311,0.6313,0.709,1.2549,1.1274,1.8613l-2.7012,4.6299     c-0.1885,0.3228-0.1812,0.7241,0.0195,1.0396c0.1997,0.3159,0.5596,0.4912,0.9321,0.4604l7.75-0.6851     c2.7095,1.5068,5.6899,2.2627,8.6748,2.2627c2.8374,0,5.6787-0.6836,8.293-2.0552     C62.1543,30.2944,65.5249,19.4854,60.9551,10.771z M52.5127,33.0952c-4.8472,2.543-10.5723,2.4214-15.3154-0.3252     c-0.1523-0.0884-0.3257-0.1348-0.501-0.1348c-0.0293,0-0.0586,0.0015-0.0879,0.0039l-6.1338,0.542l2.0532-3.519     c0.2017-0.3462,0.1777-0.7793-0.0615-1.1006c-0.5132-0.6899-0.9668-1.4092-1.3486-2.1377     c-4.0571-7.7373-1.0645-17.3354,6.6719-21.396l-0.0005,0.0005c7.7378-4.0581,17.3354-1.0635,21.395,6.6719     C63.2417,19.438,60.2485,29.0356,52.5127,33.0952z"></path>
                        </g>
                    </g>
                </g>
                <g id="_x30_5_women_talking"></g>
                <g id="_x30_4_calling"></g>
                <g id="_x30_3_women"></g>
                <g id="_x30_2_writing"></g>
                <g id="_x30_1_chatting"></g>
            </svg>تماس با پشتیبانی</a>
        <a href="{{ route("advertiser.faqs") }}" class="{{(Route::currentRouteName()=='advertiser.faqs')?'mactive':''}}">
            <svg fill="#000000" stroke-width="2" width="30px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                <path d="M512 277.333c-58.974 0-106.667 47.693-106.667 106.667 0 11.782-9.551 21.333-21.333 21.333s-21.333-9.551-21.333-21.333c0-82.538 66.795-149.333 149.333-149.333S661.333 301.463 661.333 384c0 75.294-55.586 137.489-128 147.823V640c0 11.78-9.553 21.333-21.333 21.333S490.667 651.78 490.667 640V512c0-11.78 9.553-21.333 21.333-21.333 58.974 0 106.667-47.693 106.667-106.667S570.974 277.333 512 277.333zm0 506.454c23.565 0 42.667-19.102 42.667-42.667S535.565 698.453 512 698.453s-42.667 19.102-42.667 42.667 19.102 42.667 42.667 42.667z"></path>
                <path d="M512 85.333C276.358 85.333 85.333 276.358 85.333 512c0 235.639 191.025 426.667 426.667 426.667 235.639 0 426.667-191.027 426.667-426.667C938.667 276.358 747.64 85.333 512 85.333zM128 512c0-212.077 171.923-384 384-384 212.079 0 384 171.923 384 384 0 212.079-171.921 384-384 384-212.077 0-384-171.921-384-384z"></path>
            </svg>

            سوالات متداول
        </a>

        {{--  <a href="{{ route("advertiser.bank.info") }}" class="{{(Route::currentRouteName()=='advertiser.bank.info')?'mactive':''}}">
            <svg fill="#000000" stroke-width="2" width="30px" height="30px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                <path d="M512 277.333c-58.974 0-106.667 47.693-106.667 106.667 0 11.782-9.551 21.333-21.333 21.333s-21.333-9.551-21.333-21.333c0-82.538 66.795-149.333 149.333-149.333S661.333 301.463 661.333 384c0 75.294-55.586 137.489-128 147.823V640c0 11.78-9.553 21.333-21.333 21.333S490.667 651.78 490.667 640V512c0-11.78 9.553-21.333 21.333-21.333 58.974 0 106.667-47.693 106.667-106.667S570.974 277.333 512 277.333zm0 506.454c23.565 0 42.667-19.102 42.667-42.667S535.565 698.453 512 698.453s-42.667 19.102-42.667 42.667 19.102 42.667 42.667 42.667z"></path>
                <path d="M512 85.333C276.358 85.333 85.333 276.358 85.333 512c0 235.639 191.025 426.667 426.667 426.667 235.639 0 426.667-191.027 426.667-426.667C938.667 276.358 747.64 85.333 512 85.333zM128 512c0-212.077 171.923-384 384-384 212.079 0 384 171.923 384 384 0 212.079-171.921 384-384 384-212.077 0-384-171.921-384-384z"></path>
            </svg>
            اطلاعات حساب بانکی
        </a>  --}}
        <a href="{{ route("logout") }}"><svg width="30px" height="30px" viewBox="0 0 24 24" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="grid_system"></g>
                <g id="_icons">
                    <g>
                        <path d="M16.6,4.2c-0.5-0.3-1.1-0.1-1.4,0.4c-0.3,0.5-0.1,1.1,0.4,1.4c2.1,1.3,3.5,3.6,3.5,6c0,3.9-3.1,7-7,7s-7-3.1-7-7    c0-2.5,1.4-4.8,3.5-6.1C9,5.6,9.2,5,8.9,4.6C8.6,4.1,8,3.9,7.5,4.2C4.7,5.8,3,8.8,3,12c0,5,4,9,9,9s9-4,9-9    C21,8.8,19.3,5.9,16.6,4.2z"></path>
                        <path d="M12,13c0.6,0,1-0.4,1-1V3c0-0.6-0.4-1-1-1s-1,0.4-1,1v9C11,12.6,11.4,13,12,13z"></path>
                    </g>
                </g>
            </svg>خروج از حساب</a>

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
