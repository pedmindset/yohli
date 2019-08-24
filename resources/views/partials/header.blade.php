<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="#" class="current">How it works</a></li>
						<li><a href="#">Browse Jobs</a></li>
						<li>
							<a href="#" class="button button-sliding-icon ripple-effect" tabindex="0">
								<span class="text-white">Post a Job</span> 
								<i class="icon-material-outline-add-circle-outline text-white"></i>
							</a>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				
				<div class="header-widget hide-on-mobile">

					<div class="header-notifications">
						<!-- Trigger -->
						<div class="header-notifications-trigger">
							<a href="#" class="text-uppercase">Login</a>
						</div>
					</div>

					<div class="header-notifications">
						<!-- Trigger -->
						<div class="header-notifications-trigger">
							<a href="#" class="text-uppercase">Sign up</a>
						</div>
					</div>

				</div>

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="{{ asset('assets/images/user-avatar-small-01.jpg') }}" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="{{ asset('assets/images/user-avatar-small-01.jpg') }}" alt=""></div>
									<div class="user-name">
										Tom Smith <span>Freelancer</span>
									</div>
								</div>	
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="index-logged-out.html"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>