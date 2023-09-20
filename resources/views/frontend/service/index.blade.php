@extends('frontend.layout.app')
@section('content')

<div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('asset/images/banner/gallery-banner.jpg')}})">
	<div class="overlay-main bg-black opacity-07"></div>
	<div class="container">
		<div class="wt-bnr-inr-entry">
			<h1 class="text-white">Services</h1>
		</div>
	</div>
</div>
<div class="section-full bg-gray p-t100 p-b70">

	<div class="container">


		<div class="section-head text-center">
			<h1><span class="site-text-primary">Women</span> Services</h1>
			<div class="wt-separator-outer">
				<div class="wt-separator style-icon">
					<i class="fa fa-leaf text-black"></i>
					<span class="separator-left site-bg-primary"></span>
					<span class="separator-right site-bg-primary"></span>
				</div>
			</div>
			{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a
				porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per
				conubia nostra, per inceptos himenaeos.</p> --}}
		</div>
		<!-- TITLE END-->
		<div class="section-content">
			<div class="owl-carousel our-pricing-carousel owl-btn-vertical-center owl-btn-hover nav nav-tabs">

				<!-- Block 1 -->
				<div class="item active-arrow active">
					<a data-bs-toggle="tab" href="#pricing-item1" class="tab-block">
						<div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
							<div class="wt-icon-box-wraper center  p-lr10">
								<div class="icon-lg m-b5">
									<span class="icon-cell  text-black"><i class="flaticon-people"></i></span>
								</div>
								<div class="icon-content">
									<span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Waxing</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- Block 2 -->
				<div class="item">
					<a data-bs-toggle="tab" href="#pricing-item2" class="tab-block">
						<div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
							<div class="wt-icon-box-wraper center  p-lr10">
								<div class="icon-lg m-b5">
									<span class="icon-cell  text-black"><i class="flaticon-eye"></i></span>
								</div>
								<div class="icon-content">
									<span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Hair
										Ladies</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- Block 3 -->
				<div class="item">
					<a data-bs-toggle="tab" href="#pricing-item3" class="tab-block">
						<div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
							<div class="wt-icon-box-wraper center  p-lr10">
								<div class="icon-lg m-b5">
									<span class="icon-cell  text-black"><i class="flaticon-female-hairs"></i></span>
								</div>
								<div class="icon-content">
									<span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Makeup Ladies</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- Block 4 -->
				<div class="item">
					<a data-bs-toggle="tab" href="#pricing-item4" class="tab-block">
						<div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
							<div class="wt-icon-box-wraper center  p-lr10">
								<div class="icon-lg m-b5">
									<span class="icon-cell  text-black"><i class="flaticon-mirror"></i></span>
								</div>
								<div class="icon-content">
									<span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Face Wax</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- Block 5 -->
				<div class="item">
					<a data-bs-toggle="tab" href="#pricing-item5" class="tab-block">
						<div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
							<div class="wt-icon-box-wraper center  p-lr10">
								<div class="icon-lg m-b5">
									<span class="icon-cell  text-black"><i class="flaticon-spray-bottle"></i></span>
								</div>
								<div class="icon-content">
									<span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Pedicure & Manicures</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- Block 6 -->
				<div class="item">
					<a data-bs-toggle="tab" href="#pricing-item6" class="tab-block">
						<div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
							<div class="wt-icon-box-wraper center  p-lr10">
								<div class="icon-lg m-b5">
									<span class="icon-cell  text-black"><i class="flaticon-people"></i></span>
								</div>
								<div class="icon-content">
									<span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Face Ladies</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- Block 7 -->
				

			</div>

			<div class="tab-content m-b30">
				<!-- Block 1 -->
				<div id="pricing-item1" class="pricing-tab-content-block tab-pane active-arrow">
					<div class="section-content p-t50">
						<!-- TABS DEFAULT NAV LEFT -->
						<div class="wt-tabs vertical bg-tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab1-1">Full Legs</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-2">Half Legs </a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-3">Underarms</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-4">Full Front</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-5">Full Back</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab1-6">Full Body</a></li>
							</ul>
							<div class="tab-content p-l50">

								<div id="pricing-tab1-1" class="tab-pane active">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/bluelagoon/wax-full-leg.webp')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Full Legs
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time for some self-care! Show your legs some love with a full leg wax. Feel smooth and refreshed with the ultimate pampering session. Ready for the season ahead, your legs will be looking their best!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab1-2" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/bluelagoon/wax-half-leg.webp')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Half Legs  </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Achieve smoother, hair-free skin with waxing! Our professional waxing service for half legs is the perfect way to leave your skin feeling soft and looking flawless. Let us help you achieve the perfect results!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab1-3" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/bluelagoon/wax-underarms.webp')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Underarms </h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time to get smooth and silky underarms! Waxing is an effective way to get rid of unwanted hair and maintain a smooth and flawless complexion. Not only is waxing quick and easy, it also offers long-lasting results that will leave your underarms feeling soft and looking beautiful.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab1-4" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Full Front</h3>
													<h4 class="site-text-primary"> </h4>
													<p>When it comes to waxing, it's all about the details. That's why I love getting my full front waxed - it leaves me feeling smooth and polished! With the help of my esthetician, I can trust that I'm in good hands and will get the perfect wax every time.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab1-5" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s5.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Full Back</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Smooth and hair-free! Professional full-back waxing! Ready to show off your beautiful, flawless skin? Let us help you achieve that goal with our specialized waxing treatment. Experience silky-smooth skin with long-lasting results. Book your appointment today and get ready to flaunt your body confidently!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab1-6" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s6.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Full Body
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>After being pampered today, I'm feeling my best! Today I indulged in full body waxing and am ready to take on anything that comes my way. Waxing is an excellent way to keep your skin smooth and free of unwanted hair, while also feeling refreshed and rejuvenated. With this new found confidence, I'm sure to take on the world!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- Block 2 -->
				<div id="pricing-item2" class="pricing-tab-content-block tab-pane">
					<div class="section-content p-t50">
						<!-- TABS DEFAULT NAV LEFT -->
						<div class="wt-tabs vertical bg-tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab2-1">Hair Spa</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab2-2">Baby Cutting</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab2-3">Colour Touchup</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab2-4">Shampoo</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab2-5">Oil Message</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab2-6">Hair Setting</a></li>
							</ul>
							<div class="tab-content p-l50">

								<div id="pricing-tab2-1" class="tab-pane active">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s2.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Hair Spa </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Treating yourself to a luxurious hair spa experience is a must! Pamper your locks with a professional treatment that will leave your hair looking and feeling refreshed and nourished. Enjoy the lavishness of a salon-style spa experience from the comfort of your home, indulge in the bliss of a revitalizing hair spa treatment today!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab2-2" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s3.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Baby Cutting</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time for a fresh start! Our talented team of stylists is ready to give you the perfect baby cutting to show off your beautiful hair. Our aim is to provide you with a look that will make you stand out from the crowd. With our expertise and attention to detail, the end result is sure to be stunning!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab2-3" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Colour Touchup
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>A new look, a new start! With the help of Colour Touchup, I was able to give my hair a whole new look. From lifeless and dull to vibrant and full of life, I feel like I'm ready to take on the world.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab2-4" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s5.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Shampoo</h3>
													<h4 class="site-text-primary"> </h4>
													<p>She's ready to get her hair looking extra soft and shiny!  After using this luxurious ladies shampoo, she's looking forward to achieving salon-quality results at home! With its nourishing ingredients and luxurious lather, this shampoo makes for a truly indulgent experience.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab2-5" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s6.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Oil Message</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Say goodbye to dry and damaged hair! With the right oils, all hair ladies can keep their locks looking luxuriously healthy and shiny. Our special blend of oils nourishes your hair from root to tip, leaving you with luscious locks that you'll be proud to show off!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab2-6" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s1.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Hair Setting</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time to get your hair setting goals in check! Our team of experienced professionals is here to help you create the perfect hairstyle that will make you look and feel your best. From a sleek bob to a voluminous blowout, we'll make sure you leave our salon looking and feeling fabulous.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- Block 3 -->
				<div id="pricing-item3" class="pricing-tab-content-block tab-pane">
					<div class="section-content p-t50">
						<!-- TABS DEFAULT NAV LEFT -->
						<div class="wt-tabs vertical bg-tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab3-1">Bridal Makeup </a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab3-2">Party Makeup </a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab3-3">Hair Style</a></li>

							</ul>
							<div class="tab-content p-l50">

								<div id="pricing-tab3-1" class="tab-pane active">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s3.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Bridal Makeup </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Makeup is an essential part of any bride's look on her special day. Let our professional makeup artists help you create that perfect look. From natural to glam, we have got you covered! Let us help you make your special day even more special with our bridal makeup services.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab3-2" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Party Makeup  </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Celebrating beauty and glamour! Let's get the party started with some stunning makeup looks for all the gorgeous ladies out there. From natural looks to full glam, our makeup artists will help you find your perfect party look. Whether you're looking for something subtle and elegant or bold and dramatic, we have you covered!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab3-3" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s5.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Hair Style
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Makeup is an art, and these ladies are true masters! From soft and subtle to bold and beautiful, they can create any hairstyle with precision and finesse. Each look is crafted with style and skill, making them the perfect choice for the perfect hairstyle.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								

							</div>
						</div>
					</div>
				</div>
				<!-- Block 4 -->
				<div id="pricing-item4" class="pricing-tab-content-block tab-pane">
					<div class="section-content p-t50">
						<!-- TABS DEFAULT NAV LEFT -->
						<div class="wt-tabs vertical bg-tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab4-1">Upper Lip</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab4-2">Chin</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab4-3">Side Locks</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab4-4">Lower Lip</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab4-5">Full Face</a></li>
							</ul>
							<div class="tab-content p-l50">

								<div id="pricing-tab4-1" class="tab-pane active">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Upper Lip</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time to take care of myself! I treated myself to a face waxing session today and I'm already feeling the difference. My upper lip is smooth and free of unwanted hairs. Taking time for self-care is always a good idea and this step is a great way to start my journey to feeling my best.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab4-2" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s5.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Chin</h3>
													<h4 class="site-text-primary"> </h4>
													<p>I'm feeling so smooth after my face wax chin! This professional treatment has really given my skin a fresh and rejuvenated look. It's an easy and effective way to get rid of unwanted facial hair and I'm definitely recommending it to anyone looking for a simple way to feel beautiful and confident.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab4-3" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s6.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Side Locks</h3>
													<h4 class="site-text-primary"> </h4>
													<p>"Add a touch of sophistication to your look with side locks! Perfect for elevating any outfit, these locks are a great way to make a statement and show off your style.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab4-4" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s1.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Lower Lips</h3>
													<h4 class="site-text-primary"> </h4>
													<p>I'm so pleased with the results of my face wax treatment! My lower lips now look smooth and silky, and I'm confident that my overall look is improved.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab4-5" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s2.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Full Face</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Having a fresh start to my week with a full face wax! Taking care of my skin is essential, and this is the perfect way to pamper myself and prepare for the upcoming days. Ready to greet the world with a soft, smooth, and refreshed face!
													</p>													  
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Block 5 -->
				<div id="pricing-item5" class="pricing-tab-content-block tab-pane">
					<div class="section-content p-t50">
						<!-- TABS DEFAULT NAV LEFT -->
						<div class="wt-tabs vertical bg-tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab5-1">Manicure with Scrub & Pack</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab5-2">Body Care</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab5-3">Lotus Crystal</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab5-4">Pedicure with Scrub & Pack</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab5-5">Ice Cream</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab5-6">Lotus Crystal Spa</a></li>
							</ul>
							<div class="tab-content p-l50">

								<div id="pricing-tab5-1" class="tab-pane active">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s5.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Manicure with Scrub & Pack</h3>
													<h4 class="site-text-primary"> </h4>
													<p>My hands and feet are ready for a self-care session! Just treated myself to a pedicure and manicure that includes a scrub and pack. It's always important to take time for yourself and give your hands and feet the pampering they deserve.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab5-2" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s6.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Body Care </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Nailed it! Just finished up with a luxurious pedicure and manicure session - treating my body to the care it deserves. Taking care of oneself is essential to feeling and looking one's best!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab5-3" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s1.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Lotus Crystal</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Treat your hands and feet to the royal treatment with Lotus Crystal's luxurious pedicure and manicure! Our professional spa environment offers a wide range of services to make sure your hands and feet look and feel their best. Come in and pamper yourself with a relaxing and rejuvenating experience that will leave you feeling refreshed and beautiful.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab5-4" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s2.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Pedicure with Scrub & Pack</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Indulge in a luxurious pampering session with a pedicure and manicure! Get your hands and feet ready for the season with our gentle scrub and pack. Our experienced professionals will provide you with the ultimate spa-like experience that will leave you feeling relaxed and refreshed.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab5-5" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s3.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Ice Cream</h3>
													<h4 class="site-text-primary"> </h4>
													<p>My hands and feet are ready for the delightful treat that is a pedicure and manicure ice cream! This unique combination of spa-style treatments and dessert is the perfect way to pamper and indulge with a luxurious experience. The pedicure and manicure ice cream is sure to provide an unforgettable experience of relaxation and deliciousness that will leave your hands and feet feeling refreshed and rejuvenated.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab5-6" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Lotus Crystal Spa</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Let your hands and feet feel the luxury of a pedicure and manicure at Lotus Crystal Spa! Our professional team of experts provide a unique experience that will make you look and feel your best. Come in and enjoy a relaxing, pampering session that will leave you feeling refreshed and rejuvenated!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- Block 6 -->
				<div id="pricing-item6" class="pricing-tab-content-block tab-pane ">
					<div class="section-content p-t50">
						<!-- TABS DEFAULT NAV LEFT -->
						<div class="wt-tabs vertical bg-tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab6-1">Lotus Professional Clean up</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab6-2">Lotus Gold Sheen Facial with De-Tan </a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab6-3">Basic Facial with Massage</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab6-4">Facial with Rubber Mask</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab6-5">Aroma Magic( Gold , Diamond )</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab6-6">Skin Lighting & Anti Pigmentation</a></li>
							</ul>
							<div class="tab-content p-l50">

								<div id="pricing-tab6-1" class="tab-pane active">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s6.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Lotus Professional Clean up
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Clean up the day with Lotus Professional! Feel the confidence of having a clean, refreshed face in just one step. With the help of Lotus Professional's unique range of products, you can transform your look and feel your best. Get ready to face the world with a radiant glow and renewed confidence.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab6-2" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s1.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Lotus Gold Sheen Facial with De-Tan</h3>
													<h4 class="site-text-primary"> </h4>
													<p>As the summer season approaches, it's important to take extra care of your skin and protect it from the harsh sun rays. The perfect solution is to indulge in a Lotus Gold Sheen Facial with De-Tan Tone! This professional facial from Lotus is designed to nourish and hydrate your skin, while also providing a de-tanning treatment to remove any dullness or dark spots. Let's take care of our skin and get shining with Lotus' Gold Sheen Facial with De-Tan Tone!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab6-3" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s2.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Basic Facial with Massage</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time to pamper yourself! Treat yourself to a luxurious basic facial with massage and relax while the expert spa staff provides a much needed refresher for your skin. Embrace the feeling of rejuvenation and relaxation that comes with this indulgent experience and show your face the love it deserves.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab6-4" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Facial with Rubber Mask</h3>
													<h4 class="site-text-primary"> </h4>
													<p>The ladies at our spa sure don't believe that! We've brought in the newest trend in facial treatments - the Rubber Mask Facial! Our Rubber Mask Facial is an innovative way to deeply nourish and hydrate your skin while providing a relaxing and enjoyable experience. The unique combination of powerful active ingredients and a rubberized mask help to create an intense and indulgent facial that will leave your skin feeling refreshed, rejuvenated and glowing!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab6-5" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Aroma Magic( Gold , Diamond )</h3>
													<h4 class="site-text-primary"> </h4>
													<p>The skin of all ladies deserve to be pampered with nothing less than the best. Our Aroma Magic Gold and Diamond range provides you with the perfect blend of natural ingredients to nourish and revitalize your skin. Pamper yourself with our luxurious range and get the youthful and glowing skin you deserve!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab6-6" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s5.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Skin Lighting & Anti Pigmentation
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>The glow on these ladies’ faces is undeniable! With our Skin Lighting & Anti Pigmentation treatment, their skin is brighter, smoother, and more even toned. Our unique formula provides powerful results for a brighter complexion, and we’re proud to see the difference it makes.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- Block 7 -->
				

			</div>
		</div>

		




	</div>







	<div class="container">


		<div class="section-head text-center">
			<h1><span class="site-text-primary">Men</span> Services</h1>
			<div class="wt-separator-outer">
				<div class="wt-separator style-icon">
					<i class="fa fa-leaf text-black"></i>
					<span class="separator-left site-bg-primary"></span>
					<span class="separator-right site-bg-primary"></span>
				</div>
			</div>
			{{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a
				porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per
				conubia nostra, per inceptos himenaeos.</p> --}}
		</div>
		<!-- TITLE END-->
		<div class="section-content">
			<div class="owl-carousel our-pricing-carousel owl-btn-vertical-center owl-btn-hover nav nav-tabs">

				<!-- Block 1 -->
				<div class="item active-arrow active">
					<a data-bs-toggle="tab" href="#pricing-item15" class="tab-block">
						<div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
							<div class="wt-icon-box-wraper center  p-lr10">
								<div class="icon-lg m-b5">
									<span class="icon-cell  text-black"><i class="flaticon-people"></i></span>
								</div>
								<div class="icon-content">
									<span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Hair Gents</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- Block 2 -->
				<div class="item">
					<a data-bs-toggle="tab" href="#pricing-item25" class="tab-block">
						<div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">
							<div class="wt-icon-box-wraper center  p-lr10">
								<div class="icon-lg m-b5">
									<span class="icon-cell  text-black"><i class="flaticon-eye"></i></span>
								</div>
								<div class="icon-content">
									<span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">Face Gents</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<!-- Block 3 -->
				
				<!-- Block 7 -->
				

			</div>

			<div class="tab-content m-b30">
				<!-- Block 1 -->
				<div id="pricing-item15" class="pricing-tab-content-block tab-pane active-arrow">
					<div class="section-content p-t50">
						<!-- TABS DEFAULT NAV LEFT -->
						<div class="wt-tabs vertical bg-tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab15-1">Cutting</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab15-2">Saving</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab15-3">Keratin</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab15-4">Hair Spa</a></li>
							</ul>
							<div class="tab-content p-l50">

								<div id="pricing-tab15-1" class="tab-pane active">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s1.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Cutting
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time for a fresh cut! 💈 Enjoying a much needed visit to the barbershop to get my hair cut and styled. 💇‍♂️ Taking a step towards re-energizing my look and feeling my best!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab15-2" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s2.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Saving </h3>
													<h4 class="site-text-primary"> </h4>
													<p>What an impactful transformation!  After a few hours of hard work and dedication, this client is ready to show off his new look.  With the help of our amazing team of professionals, this gent's hair has been completely changed! Check out the before-and-after to see how our team's expertise has given this client a completely new look.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab15-3" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s3.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Keratin</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time to show off your healthiest and strongest hair yet! Our keratin treatment is the perfect solution for all gents looking to take their hair game to the next level. Our keratin treatment will help to protect your hair from everyday damage, while leaving your locks feeling strong, smooth, and looking shiny and healthy.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab15-4" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Hair Spa</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's the perfect time to pamper your hair!  A luxurious hair spa at Hair Gents is the best way to nourish and revive your hair. Our team of professional stylists will provide you with a relaxing experience to leave your hair looking and feeling its best. Visit us for a complete hair makeover and enjoy the ultimate hair spa experience!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

							

							</div>
						</div>
					</div>
				</div>
				<!-- Block 2 -->
				<div id="pricing-item25" class="pricing-tab-content-block tab-pane">
					<div class="section-content p-t50">
						<!-- TABS DEFAULT NAV LEFT -->
						<div class="wt-tabs vertical bg-tabs">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#pricing-tab25-1">Eye Brows</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab25-2">Facial</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab25-3">Bleach</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab25-4">Tan</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab25-5">O3+</a></li>
								<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#pricing-tab25-6">Facial Lotus</a></li>
							</ul>
							<div class="tab-content p-l50">

								<div id="pricing-tab25-1" class="tab-pane active">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s2.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Eye Brows </h3>
													<h4 class="site-text-primary"> </h4>
													<p>"It's all about how you frame your face! Get creative with your eye brows and give yourself a professional look with our range of face gents eye brow products.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab25-2" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s3.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Facial</h3>
													<h4 class="site-text-primary"> </h4>
													<p>"A simple yet effective way to boost your self-care routine is to try out a face gent facial! Taking the time to focus on your skin and treat yourself to a little pampering can make all the difference.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab25-3" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s4.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Bleach
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>"Bringing out the best in you is our top priority! Our special 'Face Gents Bleach' is designed to make your skin glow and help bring out its natural beauty. Get ready to show off your best self!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab25-4" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s5.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Tan</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Focused and determined, these two gents are ready to take on the world. Tan is the new black and these two are making a statement with their style. With their impeccable fashion sense and confidence, they'll be sure to turn heads and make an impact wherever they go.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab25-5" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s6.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">O3+</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Now it's time to let your skin shine with O3+ and Face Gents! This luxurious skincare brand is perfect for keeping your skin looking healthy and glowing all day long. From their deeply nourishing face washes to their refreshing face masks, O3+ and Face Gents have everything you need for a well-groomed look. Not only does it give you a beautiful complexion, but also brings out the best in you. So, go ahead and treat yourself to some professional-level skincare with O3+ and Face Gents!
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="pricing-tab25-6" class="tab-pane">
									<div class="pricing-tab-inner">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="wt-media">
													<img src="{{asset('asset/images/our-services/large/s1.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Facial Lotus</h3>
													<h4 class="site-text-primary"> </h4>
													<p>It's time to take your grooming routine to the next level with  Facial Lotus! Enjoy a relaxing facial massage with the lotus-shaped head of this innovative device, perfect for unclogging pores and releasing tension in the face. Pamper yourself with this luxurious device and leave your skin feeling refreshed and invigorated.
													</p>
													  
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- Block 3 -->
				
				

			</div>
		</div>

		




	</div>









</div>


@endsection('content')