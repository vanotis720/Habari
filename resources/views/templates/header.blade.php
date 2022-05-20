<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Decourir les actualites de la RDC - Habari </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/app/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/style.css') }}">
</head>

<body>

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="{{ asset('assets/app/img/icon/header_icon1.png') }}" alt="">
                                            {{ \Carbon\Carbon::now()->format('d M Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/logo.png') }}" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{ asset('assets/app/img/hero/header_card.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        @include('templates.menu')
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
