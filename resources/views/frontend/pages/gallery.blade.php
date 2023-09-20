@extends('frontend.layout.app')
@section('content')

  <div class="page-content">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('asset/images/banner/gallery-banner.jpg')}})">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Gallery</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
            
            <!-- CONTENT SECTION START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">

                	<!-- PAGINATION TOP START -->
                    <div class="filter-wrap p-tb15">
                        <ul class="masonry-filter link-style  text-uppercase">
                            <li class="active"><a data-filter="*" href="#">All</a></li>
                            <li><a data-filter=".cat-5" href="#">Hair Cutting</a></li>
                            <li><a data-filter=".cat-2" href="#">Hair Makeup</a></li>
                            <li><a data-filter=".cat-3" href="#">Waxing</a></li>
                            <li><a data-filter=".cat-4" href="#">Face Makeup</a></li>
                            <li><a data-filter=".cat-1" href="#">Pedicure & Manicure</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION TOP END -->
                    
                    <!-- GALLERY CONTENT START -->
                    
                    <div class="portfolio-wrap mfp-gallery row">
                    
                        <!-- COLUMNS 1 --> 
                        <div class="masonry-item cat-1 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/bluelagoon/gallery/prdicure.webp')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/bluelagoon/gallery/prdicure.webp')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item cat-1 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/bluelagoon/gallery/menicure.webp')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/bluelagoon/gallery/menicure.webp')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 --> 
                        <div class="masonry-item cat-2 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/latest-projects/pic2.jpg')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/gallery/pic2.jpg')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 --> 
                        <div class="masonry-item cat-3 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/latest-projects/pic3.jpg')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/gallery/pic3.jpg')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 --> 
                        <div class="masonry-item cat-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/latest-projects/pic4.jpg')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/gallery/pic4.jpg')}}" class="mfp-link m-b15">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 --> 
                        <div class="masonry-item cat-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/bluelagoon/gallery/hair-cutting-gal.webp')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/bluelagoon/gallery/hair-cutting-gal.webp')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item cat-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/bluelagoon/gallery/hair-cutting-gal-2.webp')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/bluelagoon/gallery/hair-cutting-gal-2.webp')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item cat-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/bluelagoon/gallery/hair-cutting-gal-3.webp')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/bluelagoon/gallery/hair-cutting-gal-3.webp')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry-item cat-5 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/bluelagoon/gallery/hair-cutting-gal-4.webp')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/bluelagoon/gallery/hair-cutting-gal-4.webp')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 --> 
                        <div class="masonry-item cat-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/bluelagoon/gallery/face-makeup-gal.webp')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/bluelagoon/gallery/face-makeup-gal.webp')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 --> 
                        <div class="masonry-item cat-3 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/latest-projects/pic7.jpg')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a href="{{asset('asset/images/gallery/pic7.jpg')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 --> 
                        <div class="masonry-item cat-2 col-lg-6 col-md-6 col-sm-6 col-xs-6 m-b30">
                            <div class="wt-gallery-bx">
                                <div class="wt-thum-bx wt-img-overlay5 wt-img-effect blurr">
                                    <a href="services-detail.html">
                                        <img src="{{asset('asset/images/latest-projects/pic8.jpg')}}"  alt="">
                                    </a>
                                    <div class="overlay-bx">
                                        <div class="overlay-icon">
                                             
                                            <a  href="{{asset('asset/images/gallery/pic8.jpg')}}" class="mfp-link">
                                                <i class="fa fa-arrows-alt wt-icon-box-xs"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                    <!-- GALLERY CONTENT END -->
                    
                  
                    
                </div>
            </div>
            <!-- CONTENT SECTION END  -->

        </div>

@endsection