<!DOCTYPE html>

<html lang="en">

<head>

	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="description" content="">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.html" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

	<!-- PAGE TITLE HERE -->
	<title>The Blue Lagoon | The Spa Saloon</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}"><!-- BOOTSTRAP STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/fontawesome/css/font-awesome.min.css')}}">
	<!-- FONTAWESOME STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/flaticon.min.css')}}"><!-- FLATICON STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/animate.min.css')}}"><!-- ANIMATE STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/owl.carousel.min.css')}}"><!-- OWL CAROUSEL STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap-select.min.css')}}"><!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/magnific-popup.min.css')}}"><!-- MAGNIFIC POPUP STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/loader.min.css')}}"><!-- LOADER STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}"><!-- MAIN STYLE SHEET -->
	<link rel="stylesheet" type="text/css" class="skin" href="{{asset('asset/css/skin/skin-7.css')}}">
	<!-- THEME COLOR CHANGE STYLE SHEET -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/css/switcher.css')}}"><!-- SIDE SWITCHER STYLE SHEET -->


	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/plugins/revolution/revolution/css/settings.css')}}">
	<!-- REVOLUTION NAVIGATION STYLE -->
	<link rel="stylesheet" type="text/css" href="{{asset('asset/plugins/revolution/revolution/css/navigation.css')}}">


</head>
<body id="bg">

	<div class="page-wraper">

		<!-- HEADER START -->
		


		<header class="site-header header-style-3  mobile-sider-drawer-menu">
            <!-- Search Form -->

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar site-bg-primary">
                    <div class="container">
                        <div class="logo-header">
                            <a href="{{url('/')}}">
                                <img src="{{asset('asset/images/bluelagoon/bluelagoon.png')}}" width="180px" height="37" alt="">
                            </a>
                        </div>

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active">
                                    <a href="{{url('/')}}">Home </a>                                    
                                </li>

                                <li>
                                    <a href="{{url('/about-us')}}">About </a>                                    
                                </li>

                                <li>
                                    <a href="{{route('services.index')}}">Services </a>                                    
                                </li>

                                <li>
                                    <a href="{{url('/gallery')}}">Gallery </a>                                 
                                </li>
                                
                                <li>
                                    <a href="{{url('/contact-us')}}">Contact </a>                                 
                                </li>                               

                                
                            </ul>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only"></span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                        <!-- ETRA Nav -->
                        
                        <!-- SITE Search -->
                        <div id="search">
                            <span class="close"></span>
                            <form role="search" id="searchform" action="https://thewebmax.org/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search">
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER END -->
