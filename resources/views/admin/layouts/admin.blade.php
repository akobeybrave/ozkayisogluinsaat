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

    @include('admin.layouts.includes._styles')





</head>
<body data-theme="dark">

<!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    @include('admin.layouts.includes._aside')
    <!-- Sidebar End -->


    <!-- Main wrapper -->
    <div class="body-wrapper">

        <!-- Header Start -->
        @include('admin.layouts.includes._header')
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

@include('admin.layouts.includes._scripts')



@stack("javascript")
</body>
</html>
