@extends('frontend.layout.app')
@section('content')


<div class="page-content">
            
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('asset/images/banner/about-banner.jpg')}});">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">About Us</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END --> 
                
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END --> 
            
                <!-- ABOUT COMPANY SECTION START -->
                <div class="section-full p-t80 p-b50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-8 m-b30">
                                <div class="about-com-pic">
                                    <img src="{{asset('asset/images/bluelagoon/ceo.jpg')}}" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 m-b30">
                                <div class="section-head text-left">
                                    <h3 class="text-uppercase">About <span class="text-primary">Blue Lagoon </span></h3>
                                    <div class="wt-separator-outer">
                                        <div class="wt-separator style-icon">
                                            <i class="fa fa-leaf text-black"></i>
                                            <span class="separator-left site-bg-primary"></span>
                                            <span class="separator-right site-bg-primary"></span>
                                        </div>                            
                                    </div>
                                    <p> Blue Lagoon is an unisex Hair & Beauty Family Salon located in Golpark, Kolkata. It is the best salon in Gariahat.
                                    Our team of professionals are trained experts who aim to create an everlasting impact with their creativity and innovation.
                                     Blue Lagoon provides the best beauty, hair and skin care products that not only decks you up, but also takes care of your hair and skin
                                    simultaneously. We provide you with notable services that define the ultimate facets of hair and beauty.
                                    </p>
                                   
                                </div>
                                <div class="about-types row">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-md site-text-primary">
                                                <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-female-hairs"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h5 class="wt-tilte text-uppercase m-b0">Waxing</h5>
                                                <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-md site-text-primary">
                                                <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-eye"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h5 class="wt-tilte text-uppercase m-b0">Hair Makeup</h5>
                                                <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-md site-text-primary">
                                                <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-mirror"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h5 class="wt-tilte text-uppercase m-b0 ">Facial</h5>
                                                <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-xs-100pc m-b30 ">
                                        <div class="wt-icon-box-wraper left">
                                            <div class="icon-md site-text-primary">
                                                <a href="#" class="icon-cell p-t5 center-block"><i class="flaticon-spray-bottle" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h5 class="wt-tilte text-uppercase m-b0">Massage</h5>
                                                <p>Lorem ipsum dolor sit piscing sed diam nonmy end .</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <!-- ABOUT COMPANY SECTION END --> 
                 
                <!--COUNTER SECTION START -->
                <div class="section-full p-t30 site-bg-primary">
                    
                    <div class="container">
                        <!-- COUNTER BLOCKS START -->    
                        <div class="section-content">
                            <div class="row">
                                
                            <div class="col-md-3 col-sm-6">
                            	<div class="wt-icon-box-wraper right p-a10 text-white m-b30">
                                    <span class="icon-md p-t10">
                                        <i class="fa fa-building"></i>
                                    </span>
                                    <div class="icon-content">
                                        <div class="font-26 font-weight-800  m-b5"><span class="counter">1000</span><b>+</b></div>
                                        <span class="text-uppercase">Happy Clients</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <div class="wt-icon-box-wraper right p-a10 text-white m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-users"></i>
                                    </span>
                                    <div class="icon-content">
                                        <div class="font-26 font-weight-800  m-b5"><span class="counter">1500</span><b>+</b></div>
                                        <span>HAPPY CLIENTS</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <div class="wt-icon-box-wraper right p-a10 text-white m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-user-plus"></i>
                                    </span>
                                    <div class="icon-content">
                                        <div class="counter font-26 font-weight-800 m-b5">4500</div>
                                        <span>WORKERS EMPLOYED</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <div class="wt-icon-box-wraper right p-a10 text-white m-b30">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-trophy"></i>
                                    </span>
                                    <div class="icon-content">
                                        <div class="counter font-26 font-weight-800 m-b5">260</div>
                                        <span>AWARDS WON</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        </div>
                        <!-- COUNTER BLOCKS START -->
                    </div>
                </div>
                <!-- COUNTER SECTION END -->
                   
                



                <div class="section-full p-t80 p-b50">
                <div class="container">
                
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                        <h3 class="text-uppercase">Product Used</h3>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>                            
                        </div>
                        <p>Product We Used for Our Valueable Customers.</p>
                    </div>
                    <!-- TITLE END -->
                    
                    <!-- IMAGE CAROUSEL START -->
                    <div class="section-content">
                        <div class="owl-carousel client-logo-carousel m-b30">
                        
                        	<!-- COLUMNS 1 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p1.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p5.png')}}" alt="s"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p6.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p7.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p4.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p12.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p10.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p11.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p6.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 10 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p18.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 11 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p15.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 12 --> 
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo wt-img-effect on-color">
                                        <a href="#"><img src="{{asset('asset/images/bluelagoon/p3.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>                        
                        
                        </div>
                    </div>
                    <!-- IMAGE CAROUSEL START -->
                </div>
            
            </div>

               
        </div>


@endsection