@extends('frontend.layout.app')
@section('content')

<div class="page-content">
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('asset/images/banner/gallery-banner.jpg')}})">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Contact Us</h1>
            </div>
        </div>
    </div>


    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">

    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENTG START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="section-content m-b50">
                <div class="row">
                    <!-- LOCATION BLOCK-->


                    <!-- CONTACT FORM-->
                </div>
            </div>

            <!-- CONTACT DETAIL BLOCK -->
            <div class="section-content ">
                <div class="row">
                    <div class="wt-box col-md-12">
                        <h4 class="text-uppercase">Contact Detail </h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>



                        <div class="section-full p-t80 p-b50">
                            <div class="container">
                                <div class="wt-mid-page">
                                    <!-- TITLE START -->
                                    <div class="section-head">
                                        <h2 class="text-uppercase">Our Branches</h2>
                                        <div class="wt-separator-outer">

                                            <div class="wt-separator style-icon">
                                                <i class="fa fa-leaf text-black"></i>
                                                <span class="separator-left site-bg-primary"></span>
                                                <span class="separator-right site-bg-primary"></span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- TITLE START -->

                                    <!-- TOGGLES OUTLINE -->
                                    <div class="section-content">
                                        <div class="wt-accordion acc-outline m-b30" id="accordion3">
                                            <div class="panel wt-panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title text-uppercase">
                                                        <a data-bs-toggle="collapse" href="#collapseOne3"><span class="fa fa-fa"></span>
                                                            Sonarpur
                                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseOne3" class="acod-body collapse">
                                                    <div class="acod-content p-tb15">
                                                        <b><span style="color: #0087D3;">Phone No: </span></b>+91 6291211341<br>
                                                        <b><span style="color: #0087D3;">Email: </span></b>thebluelagoonsalon@gmail.com<br>
                                                        <b><span style="color: #0087D3;">Address: </span>Bhowmik Park , Sonarpur , Kolkata - 150 ( Beside Friend's Club )</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel wt-panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title text-uppercase">
                                                        <a data-bs-toggle="collapse" href="#collapseTwo3" class="collapsed"><span class="fa fa-fa"></span>
                                                            Kamalgazi
                                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseTwo3" class="acod-body collapse">
                                                    <div class="acod-content p-tb15">
                                                        <b><span style="color: #0087D3;">Phone No: </span></b>+91 8420119525 <br>
                                                        <b><span style="color: #0087D3;">Email: </span></b>thebluelagoonsalon@gmail.com<br>
                                                        <b><span style="color: #0087D3;">Address: </span>Kamalgazi Narendrapur , Kolkata - 103 (Opposite B D)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel wt-panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title text-uppercase">
                                                        <a data-bs-toggle="collapse" href="#collapseThree3" class="collapsed"><span class="fa fa-fa"></span>
                                                            Sonarpur Station Road
                                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapseThree3" class="acod-body collapse">
                                                    <div class="acod-content p-tb15">
                                                        <b><span style="color: #0087D3;">Phone No: </span></b>+91 9874447171 <br>
                                                        <b><span style="color: #0087D3;">Email: </span></b>thebluelagoonsalon@gmail.com<br>
                                                        <b><span style="color: #0087D3;">Address: </span>Sonarpur Station Road , 1st Floor , Kolkata - 150 (Opposite Future Campus School)</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- SECTION CONTENT END -->

    <div class="section-full overlay-wraper bg-parallax" data-stellar-background-ratio="0.2" style="background-image:url(images/background/bg-11.jpg);">
        <div class="overlay-main bg-white opacity-07"></div>
        <div class="container">

            <div class="row conntact-home">
                <div class="col-lg-5 col-md-5 contact-home4-left">
                    <div class="section-content p-tb30 overlay-wraper">
                        <div class="overlay-main site-bg-primary opacity-09"></div>
                        <div class="p-a30" style="z-index:1; position:relative">
                            <h3 class="font-weight-400 text-white m-b5">Make an</h3>
                            <h2 class="text-white m-t0" style="font-family: 'Crete Round', serif;">
                                <i>Appointment</i>
                            </h2>
                            <form class=" form-transparent" method="post" action="{{url('/contact-us')}}">
                                @csrf

                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                </div>

                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                </div>

                                @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                </div>

                                @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                                <div class="form-group">

                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="site-button-secondry radius-sm">
                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Send Us</span>
                                </button>
                                @if(session('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 contact-home4-right p-t50 p-b50">
                    <div class="section-content">
                        <div class="opening-block bdr-5 bdr-primary p-a40 text-right">
                            <a href="services-2.html" class="site-bg-primary book-now-btn p-tb5 p-lr15 text-uppercase font-16 font-weight-500">All
                                Services</a>
                            <h2 class="text-uppercase  text-secondry m-tb0">Best Services</h2>
                            <span class="font-60 font-weight-600 text-uppercase site-text-primary">Open
                                Hours</span>
                            <p>If you feel tired and stressed after a working day, we are happy to give you an
                                enjoyable and healthy solution to find your balance again.</p>
                            <div class="clearfix">
                                <ul class="list-unstyled m-b0">
                                    <li>
                                        <div class="clearfix"><span class="opening-date">Mon-Sat: </span> <span class="opening-time">10 AM - 9 PM</span></div>
                                    </li>
                                   
                                    <li>
                                        <div class="clearfix"><span class="opening-date">Sunday: </span> <span class="opening-time">10 AM - 9 PM</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="container mt-5">
        <div class="wt-box col-md-12">
            <h4 class="text-uppercase">Location</h4>
            <div class="wt-separator-outer m-b30">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-black"></i>
                    <span class="separator-left site-bg-primary"></span>
                    <span class="separator-right site-bg-primary"></span>
                </div>
            </div>
            <div class="gmap-outline m-b30">
                <div id="gmap_canvas" class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.4272498890987!2d88.3856307728543!3d22.450573392320877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0271fca6224095%3A0x8fe7dc2e250eddb1!2sThe%20Blue%20Lagoon!5e0!3m2!1sen!2sin!4v1694963433817!5m2!1sen!2sin" width="auto" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>



    <!-- CONTACT US SECTION END  -->

    <!-- CONTACT US OFFER SECTION END  -->



</div>

@endsection('content')