@extends('layouts.master')
@section('title', 'Browse Jobs')

@section('content')

<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<div class="sidebar-container">
				
				<!-- Location -->
				<div class="sidebar-widget">
					<h3>Location</h3>
					<div class="input-with-icon">
						<div id="autocomplete-container">
							<input id="autocomplete-input" type="text" placeholder="Location">
						</div>
						<i class="icon-material-outline-location-on"></i>
					</div>
				</div>

				<!-- Category -->
				<div class="sidebar-widget">
					<h3>Category</h3>
					<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" >
						<option>Admin Support</option>
						<option>Customer Service</option>
						<option>Data Analytics</option>
						<option>Design & Creative</option>
						<option>Legal</option>
						<option>Software Developing</option>
						<option>IT & Networking</option>
						<option>Writing</option>
						<option>Translation</option>
						<option>Sales & Marketing</option>
					</select>
				</div>

				<!-- Keywords -->
				<div class="sidebar-widget">
					<h3>Keywords</h3>
					<div class="keywords-container">
						<div class="keyword-input-container">
							<input type="text" class="keyword-input" placeholder="e.g. job title"/>
							<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
						</div>
						<div class="keywords-list"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>

				<!-- Budget -->
				{{-- <div class="sidebar-widget">
					<h3>Fixed Price</h3>
					<div class="margin-top-55"></div>

					<!-- Range Slider -->
					<input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="10" data-slider-max="2500" data-slider-step="25" data-slider-value="[10,2500]"/>
				</div> --}}

				<!-- Hourly Rate -->
				{{-- <div class="sidebar-widget">
					<h3>Hourly Rate</h3>
					<div class="margin-top-55"></div>

					<!-- Range Slider -->
					<input class="range-slider" type="text" value="" data-slider-currency="$" data-slider-min="10" data-slider-max="150" data-slider-step="5" data-slider-value="[10,200]"/>
				</div> --}}

				<!-- Tags -->
				<div class="sidebar-widget">
					<h3>Skills</h3>

					<div class="tags-container">
						<div class="tag">
							<input type="checkbox" id="tag1"/>
							<label for="tag1">front-end dev</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag2"/>
							<label for="tag2">angular</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag3"/>
							<label for="tag3">react</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag4"/>
							<label for="tag4">vue js</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag5"/>
							<label for="tag5">web apps</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag6"/>
							<label for="tag6">design</label>
						</div>
						<div class="tag">
							<input type="checkbox" id="tag7"/>
							<label for="tag7">wordpress</label>
						</div>
					</div>
					<div class="clearfix"></div>

					<!-- More Skills -->
					<div class="keywords-container margin-top-20">
						<div class="keyword-input-container">
							<input type="text" class="keyword-input" placeholder="add more skills"/>
							<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
						</div>
						<div class="keywords-list"><!-- keywords go here --></div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">Search Results</h3>

			<div class="notify-box margin-top-15">
				<div class="switch-container">
					{{-- <label class="switch"><input type="checkbox"><span class="switch-button"></span><span class="switch-text">Turn on email alerts for this search</span></label> --}}
				</div>

				<div class="sort-by">
					<span>Sort by:</span>
					<select class="selectpicker hide-tick">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select>
				</div>
			</div>
			
			<!-- Tasks Container -->
			<div class="tasks-list-container compact-list margin-top-35">
				
				<!-- Task -->
				<a href="{{ route('jobs.show', 1) }}" class="task-listing">

					<!-- Job Listing Details -->
					<div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<h3 class="task-listing-title">Food Delviery Mobile App</h3>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-on"></i> San Francisco</li>
								<li><i class="icon-material-outline-access-time"></i> 2 minutes ago</li>
							</ul>
							<p class="task-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster.</p>
							<div class="task-tags">
								<span>iOS</span>
								<span>Android</span>
								<span>mobile apps</span>
								<span>design</span>
							</div>
						</div>

					</div>

					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>$1,000 - $2,500</strong>
								<span>Fixed Price</span>
							</div>
							<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
						</div>
					</div>
				</a>

				<!-- Task -->
				<a href="{{ route('jobs.show', 1) }}" class="task-listing">

					<!-- Job Listing Details -->
					<div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<h3 class="task-listing-title">2000 Words English to German</h3>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-off"></i> Online Job</li>
								<li><i class="icon-material-outline-access-time"></i> 5 minutes ago</li>
							</ul>
							<p class="task-listing-text">Bring to the table win-win strategies to ensure domination and user generated content in real-time will have multiple touchpoints.</p>
							<div class="task-tags">
								<span>copywriting</span>
								<span>translating</span>
								<span>editing</span>
							</div>
						</div>

					</div>

					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>$75</strong>
								<span>Fixed Price</span>
							</div>
							<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
						</div>
					</div>
				</a>

				<!-- Task -->
				<a href="{{ route('jobs.show', 1) }}" class="task-listing">

					<!-- Job Listing Details -->
					<div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<h3 class="task-listing-title">Fix Python Selenium Code</h3>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-off"></i> Online Job</li>
								<li><i class="icon-material-outline-access-time"></i> 30 minutes ago</li>
							</ul>
							<p class="task-listing-text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional.</p>
							<div class="task-tags">
								<span>Python</span>
								<span>Flask</span>
								<span>API Development</span>
							</div>
						</div>

					</div>

					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>$100 - $150</strong>
								<span>Hourly Rate</span>
							</div>
							<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
						</div>
					</div>
				</a>

				<!-- Task -->
				<a href="{{ route('jobs.show', 1) }}" class="task-listing">

					<!-- Job Listing Details -->
					<div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<h3 class="task-listing-title">WordPress Theme Installation</h3>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-off"></i> Online Job</li>
								<li><i class="icon-material-outline-access-time"></i> 1 hour ago</li>
							</ul>
							<p class="task-listing-text">Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate customer service with robust ideas.</p>
							<div class="task-tags">
								<span>WordPress</span>
								<span>Theme Installation</span>
							</div>
						</div>

					</div>

					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>$100</strong>
								<span>Fixed Price</span>
							</div>
							<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
						</div>
					</div>
				</a>

				<!-- Task -->
				<a href="{{ route('jobs.show', 1) }}" class="task-listing">

					<!-- Job Listing Details -->
					<div class="task-listing-details">

						<!-- Details -->
						<div class="task-listing-description">
							<h3 class="task-listing-title">PHP Core Website Fixes</h3>
							<ul class="task-icons">
								<li><i class="icon-material-outline-location-off"></i> Online Job</li>
								<li><i class="icon-material-outline-access-time"></i> 1 hour ago</li>
							</ul>
							<p class="task-listing-text">Objectively innovate empowered manufactured products whereas parallel platforms. Extensible testing procedures for reliable supply.</p>
							<div class="task-tags">
								<span>PHP</span>
								<span>MySQL Administration</span>
								<span>API Development</span>
							</div>
						</div>

					</div>

					<div class="task-listing-bid">
						<div class="task-listing-bid-inner">
							<div class="task-offers">
								<strong>$50 - $80</strong>
								<span>Hourly Rate</span>
							</div>
							<span class="button button-sliding-icon ripple-effect">Bid Now <i class="icon-material-outline-arrow-right-alt"></i></span>
						</div>
					</div>
				</a>		

			</div>
			<!-- Tasks Container / End -->


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
					<div class="pagination-container margin-top-60 margin-bottom-60">
						<nav class="pagination">
							<ul>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
								<li><a href="#" class="ripple-effect">1</a></li>
								<li><a href="#" class="current-page ripple-effect">2</a></li>
								<li><a href="#" class="ripple-effect">3</a></li>
								<li><a href="#" class="ripple-effect">4</a></li>
								<li class="pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- Pagination / End -->

		</div>
	</div>
</div>

@endsection