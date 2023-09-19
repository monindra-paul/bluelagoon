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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a
				porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per
				conubia nostra, per inceptos himenaeos.</p>
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
													<img src="{{asset('asset/images/our-services/large/s1.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Full Legs
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<img src="{{asset('asset/images/our-services/large/s2.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Half Legs  </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<img src="{{asset('asset/images/our-services/large/s3.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Underarms </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
</div>
<!-- PRICING SECTION END  -->


<div class="section-full bg-gray p-t100 p-b70">

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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a
				porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per
				conubia nostra, per inceptos himenaeos.</p>
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
													<img src="{{asset('asset/images/our-services/large/s1.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Full Legs
													</h3>
													<h4 class="site-text-primary"> </h4>
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<img src="{{asset('asset/images/our-services/large/s2.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Half Legs  </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<img src="{{asset('asset/images/our-services/large/s3.jpg')}}" alt="">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="wt-tilte">
													<h3 class="font-26 font-weight-400">Underarms </h3>
													<h4 class="site-text-primary"> </h4>
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
													<p>Lorem Ipsum is simply dummy text of the printing and
														typesetting industry.
														Lorem Ipsum has been the industry's standard dummy
														text ever since the 1500s,
														when an unknown printer took a galley of type and
														scrambled it to make a type specimen book.
														remaining essentially unchanged. It was popularised
														in the with theLorem Ipsum is simply dummy
														text of the printing and eentially unchanged.
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
</div>

@endsection('content')