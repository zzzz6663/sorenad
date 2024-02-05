<!DOCTYPE html>

<html dir="rtl" lang="fa">


<head>
    <meta charset="utf-8" />
     <title>
        نرم افزار حسابداری گاما
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--  <link href="/logo/Component 1.svg" rel="icon" sizes="128x128" />  --}}
    {{--  <meta name="viewport" content="width=device-width, initial-scale=1">  --}}
    <link rel="stylesheet" href="{{ asset("/site/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("/site/libs/modal-loading.css") }}">
    <link rel="stylesheet" href="{{ asset("/site/css/font-awesome.css") }}">
    <script src="{{ asset('/site/js/jquery.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body>
    @yield('login')
    @if (Request::url() != route('admin.login'))
    @includeWhen(empty($sidebar), 'admin.section.navbar')
    <section id="center_box">
            <div class="tarlanweb_center">
                @includeWhen(empty($sidebar), 'admin.section.sidebar')
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
    <script src="{{ asset('/site/libs/modal-loading.js') }}"></script>
    <script src="/admin/libs/persian-date.js"></script>
    <script src="/admin/libs/persian-datepicker.js"></script>
    <script src="/admin/libs/modal-loading.js"></script>
    <script src="/admin/libs/persian_number.js"></script>
    <script src="/admin/libs/select2/select2.js"></script>
    <script src="/admin/js/tooltipster.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite('resources/js/app.js')

    @yield('script')
</body>
@include('sweetalert::alert')

</html>
