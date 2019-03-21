<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Shop') - Laravel 电商教程</title>
    <meta name="description" content="GARO is a real-estate template">
    <meta name="author" content="Kimarotec">
    <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="/home/assets/css/normalize.css">
    <link rel="stylesheet" href="/home/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/home/assets/css/fontello.css">
    <link href="/home/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="/home/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="/home/assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/home/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/home/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/home/assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="/home/assets/css/price-range.css">
    <link rel="stylesheet" href="/home/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/home/assets/css/owl.theme.css">
    <link rel="stylesheet" href="/home/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="/home/assets/css/style.css">
    <link rel="stylesheet" href="/home/assets/css/responsive.css">
</head>
<body>
@include('layouts._header')

@yield('content')



@include('layouts._footer')
@yield('scriptsAfterJs')

<script src="/home/assets/js/modernizr-2.6.2.min.js"></script>

<script src="/home/assets/js/jquery-1.10.2.min.js"></script>
<script src="/home/bootstrap/js/bootstrap.min.js"></script>
<script src="/home/assets/js/bootstrap-select.min.js"></script>
<script src="/home/assets/js/bootstrap-hover-dropdown.js"></script>

<script src="/home/assets/js/easypiechart.min.js"></script>
<script src="/home/assets/js/jquery.easypiechart.min.js"></script>

<script src="/home/assets/js/owl.carousel.min.js"></script>
<script src="/home/assets/js/wow.js"></script>

<script src="/home/assets/js/icheck.min.js"></script>
<script src="/home/assets/js/price-range.js"></script>

<script src="/home/assets/js/main.js"></script>

</body>
</html>
