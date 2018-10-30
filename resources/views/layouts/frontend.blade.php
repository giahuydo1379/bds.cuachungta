<?php
$ver_js = \App\Helpers\General::get_version_js();
$ver_css = \App\Helpers\General::get_version_css();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" type='image/x-icon' href="/html/assets/images/favicon.ico">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@if(isset($title)){{$title.' :: '.config('app.name')}} @else @yield('title', 'Trang chủ'){{' :: '.config('app.name')}}@endif</title>

    <meta name="viewport" content="initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/html/assets/css/style.css">

    @yield('after_styles')

    <?php \App\Helpers\General::get_scripts_include('head'); ?>
</head>

<body class="header-1 page-header-1">
    @include('includes.frontend.header')

    @yield('content')

    @include('includes.frontend.footer')

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="/html/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/html/assets/js/moment.min.js"></script>
    <script type="text/javascript" src="/html/assets/js/jquery.daterangepicker.min.js"></script>
    <script type="text/javascript" src="/html/assets/js/slick.min.js"></script>
    <script type="text/javascript" src="/html/assets/js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="/html/assets/js/apps.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('after_scripts')

    <?php \App\Helpers\General::get_scripts_include('body'); ?>
</body>
</html>
