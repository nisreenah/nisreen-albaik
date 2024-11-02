<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title> Nisreen Al-Baik - @yield('title') </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="{{asset('admin/assets/img/icon.ico')}}" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{asset('admin/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {"families": ["Lato:300,400,700,900"]},
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['{{ asset('admin/assets/css/fonts.min.css') }}']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/atlantis.min.css')}}">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">

    @yield('styles')

</head>
<body>
<div class="wrapper">

    @include('admin.includes.main-header')

    @include('admin.includes.sidebar')

    <div class="main-panel">

        <div class="content">
            @yield('content')
        </div>

        @include('admin.includes.footer')

    </div>

</div>
<!--   Core JS Files   -->
<script src="{{asset('admin/assets/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('admin/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

<!-- Atlantis JS -->
<script src="{{asset('admin/assets/js/atlantis.min.js')}}"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{asset('admin/assets/js/setting-demo2.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
        case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();
            break;
        case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
    }
    @endif
</script>

@yield('scripts')

</body>
</html>
