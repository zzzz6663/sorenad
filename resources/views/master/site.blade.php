<!DOCTYPE html>

<html dir="rtl" lang="fa">


<head>
    <meta charset="utf-8" />
     <title>
       سورن اد
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--  <link href="/logo/Component 1.svg" rel="icon" sizes="128x128" />  --}}
    {{--  <meta name="viewport" content="width=device-width, initial-scale=1">  --}}
    <link rel="stylesheet" href="{{ asset("/site/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/site/libs/modal-loading.css") }}">
    <link rel="stylesheet" href="{{ asset("/site/libs/fs.css") }}">
    <link rel="stylesheet" href="{{ asset("/site/css/font-awesome.css") }}">
    <link rel="stylesheet" href="{{ asset("/site/libs/bs.css") }}">
    <link rel="stylesheet" href="{{ asset("/site/libs/tooltipster.bundle.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/site/libs/persian-datepicker.css") }}">

    <script src="{{ asset('/site/js/jquery.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body>
    @yield('login')
    @if (Request::url() != route('admin.login'))
    @includeWhen(empty($sidebar), 'admin.section.navbar')
    <section id="center_box">
            <div class="tarlanweb_center">
                @auth
                @if(auth()->user()->role=="admin")
                @includeWhen(empty($sidebar), 'admin.section.sidebar')
                @endif
                @if(auth()->user()->role=="customer")
                @includeWhen(empty($sidebar), 'admin.section.sidebar_customer')
                @endif
                @endauth
               <div id="sidebar_left">
                @yield('content')
               </div>
            </div>
    </section>
    {{-- <div id="" class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @includeWhen(empty($sidebar), 'admin.section.sidebar')
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>  --}}
    @endif



    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('/site/js/scripts.js') }}"></script>
    <script src="{{ asset('/site/libs/modal-loading.js') }}"></script>
    <script src="/site/libs/persian-date.js"></script>
    <script src="/site/libs/persian-datepicker.js"></script>
    <script src="/site/libs/modal-loading.js"></script>
    <script src="/site/libs/persian_number.js"></script>
    <script src="/site/libs/select2.js"></script>
    <script src="/site/libs/tooltipster.bundle.min.js"></script>
    <script src="/site/libs/persian-datepicker.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/js/app.js')

    @yield('script')
</body>
@include('sweetalert::alert')

</html>
