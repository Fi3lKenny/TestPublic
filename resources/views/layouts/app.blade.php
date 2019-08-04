<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>

    <title>Tes mobil Kamu</title>
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/dataTables.bootstrap4.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/sb-admin-2.min.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/custom.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('vendors/fontawesome/css/fontawesome-all.min.css') !!}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body id="page-top">

<div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content" class="p-2">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</div>

@yield('script-content')
<script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/sb-admin-2.min.js') !!}" async></script>
<script type="text/javascript" src="{!! asset('js/jquery.dataTables.min.js') !!}" async></script>
<script type="text/javascript" src="{!! asset('js/dataTables.bootstrap4.min.js') !!}" async></script>
<script type="text/javascript" src="{!! asset('js/custom.js') !!}" async></script>


</body>



