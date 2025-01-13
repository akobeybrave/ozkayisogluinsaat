<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>@yield("title")</title>
    <!-- Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Açıklama"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image" href="{{ asset("uploads/logos/" . $setting->favicon) }}" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    @include('website.layouts.includes._styles')


</head>
<body data-theme="dark">

<!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    @include('website.layouts.includes._aside')
    <!-- Sidebar End -->


    <!-- Main wrapper -->
    <div class="body-wrapper">

        <!-- Header Start -->
        @include('website.layouts.includes._header')
        <!-- Header End -->

        <!-- Main -->
        <div class="container-fluid">



            @if(session('success'))
                {{ session('success') }}
            @endif


            @yield('content')


        </div>

        <!-- main -->

    </div>
</div>

@include('website.layouts.includes._scripts')

{{--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>--}}

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@stack("scripts")
</body>
</html>
