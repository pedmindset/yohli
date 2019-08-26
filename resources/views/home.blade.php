@extends('layouts.master')
@section('title', 'Home')

@section('content')

<div class="intro-banner" data-background-image="{{ asset('assets/images/home-background.jpg') }}">
	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Hire experts or be hired for any job, any time.</strong>
						<br>
						<span>Thousands of small businesses use <strong class="color">Yohli</strong> to turn their ideas into reality.</span>
					</h3>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95">

					<!-- Search Field -->
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect">What job you want?</label>
						<input id="intro-keywords" type="text" placeholder="Job Title or Keywords">
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect">Search</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-12">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,586</strong>
						<span>Jobs Posted</span>
					</li>
					<li>
						<strong class="counter">1,443</strong>
						<span>Jobs Completed</span>
					</li>
					<li>
						<strong class="counter">1,232</strong>
						<span>Freelancers</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

<!-- Popular Job Categories -->
<div class="section margin-top-65 margin-bottom-30">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Popular Categories</h3>
				</div>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="#" class="photo-box small" data-background-image="{{ asset('assets/images/job-category-01.jpg') }}">
					<div class="photo-box-content">
						<h3>Web / Software Dev</h3>
						<span>612</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="#" class="photo-box small" data-background-image="{{ asset('assets/images/job-category-02.jpg') }}">
					<div class="photo-box-content">
						<h3>Data Science / Analitycs</h3>
						<span>113</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="#" class="photo-box small" data-background-image="{{ asset('assets/images/job-category-03.jpg') }}">
					<div class="photo-box-content">
						<h3>Accounting / Consulting</h3>
						<span>186</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="#" class="photo-box small" data-background-image="{{ asset('assets/images/job-category-04.jpg') }}">
					<div class="photo-box-content">
						<h3>Writing & Translations</h3>
						<span>298</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="#" class="photo-box small" data-background-image="{{ asset('assets/images/job-category-05.jpg') }}">
					<div class="photo-box-content">
						<h3>Sales & Marketing</h3>
						<span>549</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="#" class="photo-box small" data-background-image="{{ asset('assets/images/job-category-06.jpg') }}">
					<div class="photo-box-content">
						<h3>Graphics & Design</h3>
						<span>873</span>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="#" class="photo-box small" data-background-image="{{ asset('assets/images/job-category-07.jpg') }}">
					<div class="photo-box-content">
						<h3>Digital Marketing</h3>
						<span>125</span>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="#" class="photo-box small" data-background-image="{{ asset('assets/images/job-category-08.jpg') }}">
					<div class="photo-box-content">
						<h3>Education & Training</h3>
						<span>445</span>
					</div>
				</a>
			</div>

		</div>
	</div>
</div>
<!-- Features Jobs -->
<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-35">
					<h3>Featured Jobs</h3>
					<a href="#" class="headline-link">Browse All Jobs</a>
				</div>
				
				<!-- Jobs Container -->
				<div class="listings-container compact-list-layout margin-top-35">
					
					<!-- Job Listing -->
					<a href="#" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-01.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Bilingual Event Support Specialist</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> Hexagon <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>
										<li><i class="icon-material-outline-location-on"></i> Accra</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
							<span class="list-apply-button ripple-effect">Apply Now</span>
						</div>
					</a>	


					<!-- Job Listing -->
					<a href="#" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-05.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Competition Law Officer</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> Laxo</li>
										<li><i class="icon-material-outline-location-on"></i> Accra</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
							<span class="list-apply-button ripple-effect">Apply Now</span>
						</div>
					</a>
					<!-- Job Listing -->
					<a href="#" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-02.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Barista and Cashier</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> Coffee</li>
										<li><i class="icon-material-outline-location-on"></i> Accra</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
							<span class="list-apply-button ripple-effect">Apply Now</span>
						</div>
					</a>
					

					<!-- Job Listing -->
					<a href="#" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-03.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">Restaurant General Manager</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> King <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>
										<li><i class="icon-material-outline-location-on"></i> Accra</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
							<span class="list-apply-button ripple-effect">Apply Now</span>
						</div>
					</a>

					<!-- Job Listing -->
					<a href="#" class="job-listing with-apply-button">

						<!-- Job Listing Details -->
						<div class="job-listing-details">

							<!-- Logo -->
							<div class="job-listing-company-logo">
								<img src="{{ asset('assets/images/company-logo-05.png') }}" alt="">
							</div>

							<!-- Details -->
							<div class="job-listing-description">
								<h3 class="job-listing-title">International Marketing Coordinator</h3>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="icon-material-outline-business"></i> Skyist</li>
										<li><i class="icon-material-outline-location-on"></i> Accra</li>
										<li><i class="icon-material-outline-business-center"></i> Full Time</li>
										<li><i class="icon-material-outline-access-time"></i> 2 days ago</li>
									</ul>
								</div>
							</div>

							<!-- Apply Button -->
							<span class="list-apply-button ripple-effect">Apply Now</span>
						</div>
					</a>

				</div>
				<!-- Jobs Container / End -->

			</div>
		</div>
	</div>
</div>
<!-- Featured Jobs / End -->

@endsection