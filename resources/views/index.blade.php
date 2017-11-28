@extends('layouts.landing')

@section('loading')
	@include('include.website-loading')
@endsection

@section('banner')
	@include('include.banner')
@endsection

@section('content')
<!-- Content
============================================= -->
<section id="content">

	<div id="content-wrap">

		<!-- === About =========== -->
		<div id="about" class="flat-section make-appointment" data-scroll-index="1">

			<div class="section-content" style="padding: 20px 0;">

				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12">
						
							<img src="{{asset('images/files/about/dummy-1.png')}}" alt="" width="300" class="foo">
						
						</div><!-- .col-md-4 end -->
						<div class="col-md-8 col-sm-12">
							
							<div class="section-title mt-70 colored">

								<h2>Health Around You</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been standard dummy text ever since the 1500s
								</p>

								<div class="row">
									<div class="col-md-4 col-sm-6 mb-md-50">
														
										<div class="box-info-2 text-center">
											<div class="box-icon"><img src={{asset('images/files/box-info-2/healthcare.png')}} alt=""></div>
											<div class="box-content">
												<h4>Digitalize Your Health Care</h4>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
											</div><!-- .box-content end -->
										</div><!-- .box-info-2 end -->
																	
									</div><!-- .col-md-4 end -->
									<div class="col-md-4 col-sm-6 mb-md-50">
														
										<div class="box-info-2 text-center">
											<div class="box-icon"><img src={{asset('images/files/box-info-2/time.png')}} alt=""></div>
											<div class="box-content">
												<h4>Saves Time</h4>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
											</div><!-- .box-content end -->
										</div><!-- .box-info-2 end -->
																	
									</div><!-- .col-md-4 end -->
									<div class="col-md-4 col-sm-6">
														
										<div class="box-info-2 text-center">
											<div class="box-icon"><img src={{asset('images/files/box-info-2/track-medical.png')}} alt=""></div>
											<div class="box-content">
												<h4>Track Your Medical History</h4>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum.</p>
											</div><!-- .box-content end -->
										</div><!-- .box-info-2 end -->
																	
									</div><!-- .col-md-4 end -->
								</div>

							</div><!-- .section-title end -->
						
						</div><!-- .col-md-8 end -->

					</div><!-- .row end -->
				</div><!-- .container end -->

			</div><!-- .section-content end -->

		</div><!-- .flat-section end -->

		<!-- === How It Works =========== -->
		<div id="how" class="parallax-section watch-video" data-scroll-index="2">

			<div class="section-inner">

				<div class="container">
					<div class="row">
						<div class="section-content">

						<div class="col-md-4">
						
							<div class="section-title text-white mt-70">
								<h2>How It Works</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been standard dummy text ever since the 1500s
								</p>
							</div><!-- .section-title end -->

							<div class="row">
								<div class="col-sm-6">
								
									<div class="box-counter text-white mb-md-30">
										<h1><span class="counter-stats">820</span></h1>
										<h5>Hospitals</h5>
									</div><!-- .box-counter end -->
								
								</div><!-- .col-md-6 end -->
								<div class="col-sm-6">
								
									<div class="box-counter text-white mb-md-50">
										<h1><span class="counter-stats">24</span></h1>
										<h5>Clinics</h5>
									</div><!-- .box-counter end -->
								
								</div><!-- .col-md-6 end -->
							</div><!-- .row end -->
						
						</div><!-- .col-md-4 end -->
						<div class="col-md-7 col-md-offset-1">
						
							<div class="video-preview"><iframe src="http://player.vimeo.com/video/95558527"></iframe></div>
						
						</div><!-- .col-md-7 end -->

						</div><!-- .section-content end -->

					</div><!-- .row end -->
				</div><!-- .container end -->

			</div><!-- .section-inner end -->

		</div><!-- .parallax-section end -->

		<!-- === Our Partners =========== -->
		<div id="partner" class="flat-section happy-clients" data-scroll-index="3">

			<div class="section-content">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
						
							<div class="section-title colored text-center">
								<h2>Our Partners</h2>
								<p>
									Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been standard dummy text ever since the 1500s
								</p>
							</div><!-- .section-title end -->
						
						</div><!-- .col-md-8 end -->
						<div class="col-md-12">
						
							<div class="col-md-4 text-center">
								<img src={{asset('images/files/box-info-1/dummy-partner.png')}} width="100">
							</div>
							<div class="col-md-4 text-center">
								<img src={{asset('images/files/box-info-1/dummy-partner.png')}} width="100">
							</div>
							<div class="col-md-4 text-center">
								<img src={{asset('images/files/box-info-1/dummy-partner.png')}} width="100">
							</div>
						
						</div><!-- .col-md-12 end -->
						
					</div><!-- .row end -->
				</div><!-- .container end -->

			</div><!-- .section-content end -->

		</div><!-- .flat-section end -->

		<!-- === Benefits =========== -->
		<div id="benefits" class="parallax-section our-services" data-scroll-index="4">
			<div class="section-inner">

				<div class="container">
					<div class="row">
						<div class="section-content">
							<div class="section-title text-white text-center">
								<h2>Benefits For Hospital & Clinics</h2>
							</div><!-- .section-title end -->

							<div class="col-md-4 col-md-offset-4 col-sm-6">

								<div class="box-info-1 text-white mb-50">
									<div class="box-icon"><img src={{asset('images/files/box-info-1/img-1.png')}} alt=""></div>
									<div class="box-content">
										<h4>Manage Doctor's Schedule</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor ever since the 1500s.</p>
									</div><!-- .box-content end -->
								</div><!-- .box-info-1 end -->

							</div><!-- .col-md-4 end -->
							<div class="col-md-4 col-sm-6">

								<div class="box-info-1 text-white mb-50">
									<div class="box-icon"><img src={{asset('images/files/box-info-1/img-2.png')}} alt=""></div>
									<div class="box-content">
										<h4>Manage Patient's Medical Records</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor ever since the 1500s.</p>
									</div><!-- .box-content end -->
								</div><!-- .box-info-1 end -->

							</div><!-- .col-md-4 end -->
							<div class="col-md-4 col-md-offset-4 col-sm-6 mb-md-50">

								<div class="box-info-1 text-white">
									<div class="box-icon"><img src={{asset('images/files/box-info-1/img-3.png')}} alt=""></div>
									<div class="box-content">
										<h4>Data Safety</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor ever since the 1500s.</p>
									</div><!-- .box-content end -->
								</div><!-- .box-info-1 end -->

							</div><!-- .col-md-4 end -->
							<div class="col-md-4 col-sm-6">

								<div class="box-info-1 text-white">
									<div class="box-icon"><img src={{asset('images/files/box-info-1/img-4.png')}} alt=""></div>
									<div class="box-content">
										<h4>Attention and Care</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor ever since the 1500s.</p>
									</div><!-- .box-content end -->
								</div><!-- .box-info-1 end -->

							</div><!-- .col-md-4 end -->

						</div><!-- .section-content end -->

					</div><!-- .row end -->
				</div><!-- .container end -->

			</div><!-- .section-inner end -->

		</div><!-- .parallax-section end -->

		<!-- === Contact =========== -->
		<div id="team" class="parallax-section cta-title-1" data-scroll-index="5">

			<div class="section-inner" style="padding: 100px 0;">

				<div class="container">
					<div class="row">
						<div class="section-content">

							<div class="col-md-8">

								<div class="section-title text-white" style="padding: 0;">
									<h2>Meet The Team</h2>
								</div><!-- .section-title end -->

								<div class="row" style="padding-top: 50px;">
									<div class="col-md-4 text-center">
										<img src="{{ asset('images/team/igo.png')}}" style="margin-bottom: 20px;">
										<div class="box-content text-white">
											<h5>Yudanto Anas Nugroho</h5>
											<p>Hipster</p>
										</div><!-- .box-content end -->
									</div>

									<div class="col-md-4 text-center">
										<img src="{{ asset('images/team/ham.png')}}" style="margin-bottom: 20px;">
										<div class="box-content text-white">
											<h5>Muhammad Ilham</h5>
											<p>Hacker</p>
										</div><!-- .box-content end -->
									</div>

									<div class="col-md-4 text-center">
										<img src="{{ asset('images/team/rft.png')}}" style="margin-bottom: 20px;">
										<div class="box-content text-white">
											<h5>Siti Raftiana Putri</h5>
											<p>Hustler</p>
										</div><!-- .box-content end -->
									</div>
								</div>

							</div><!-- .col-md-4 end -->
							<div class="col-md-4">

								<div class="section-title text-white" style="padding: 0;">
									<h2>Our Office</h2>
								</div><!-- .section-title end -->

								<div id="map"></div>
								<script>
							      function initMap() {
							        var uluru = {lat: -6.979608, lng: 107.630630};
							        var map = new google.maps.Map(document.getElementById('map'), {
							          zoom: 15,
							          center: uluru
							        });
							        var marker = new google.maps.Marker({
							          position: uluru,
							          map: map
							        });
							      }
							    </script>
							    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMwo4vPSl8OosnsmVDqt031uO3n3ReRHI&callback=initMap">
							    </script>

						    <div class="row office">
							    	<div class="office-info">
								    	<img src="{{ asset('images/icons/location.png')}}" class="office-item">
							    		<p class="office-desc">Jalan Sukabirus No. 148, Desa Citereup, Kab. Bandung</p>
							    	</div>
							    	<div class="office-info">
								    	<img src="{{ asset('images/icons/contact.png')}}" class="office-item">
							    		<p class="office-desc" style="padding-top: 10px;">info@healtharoundu.com</p>
							    	</div>
							    </div>

							</div><!-- .col-md-4 end -->

						</div><!-- .section-content end -->

					</div><!-- .row end -->
				</div><!-- .container end -->

			</div><!-- .section-inner end -->

		</div><!-- .parallax-section end -->

	</div><!-- #content-wrap -->

</section><!-- #content end -->
@endsection