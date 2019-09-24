    <div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
								<a href="#"><i class="icon-material-outline-dashboard"></i> Dashboard</a>
							</li>
							<li class="{{ (request()->is('messages')) ? 'active' : '' }}">
								<a href="{{ route('messages') }}"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a>
							</li>
							{{-- <li><a href="#"><i class="icon-material-outline-star-border"></i> Bookmarks</a></li>
							<li><a href="#"><i class="icon-material-outline-rate-review"></i> Reviews</a></li> --}}
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li class="{{ (request()->is('new-jobs') || request()->is('ongoing-jobs') || request()->is('bidders') || request()->is('my-bids')) ? 'active-submenu' : '' }}"><a href="#"><i class="icon-material-outline-assignment"></i> Jobs</a>
								<ul>
									<li><a href="{{ route('new-jobs') }}">[H] New Jobs <span class="nav-tag">1</span></a></li>
									{{-- New and Unassigned Jobs just posted by Hirer --}}

									<li><a href="{{ route('ongoing-jobs') }}">[F, H] Ongoing Jobs <span class="nav-tag">4</span></a></li>
									{{-- Assigned Jobs being worked on by Freelancer --}}
									<li><a href="#">[F, H] Completed Jobs <span class="nav-tag">7</span></a></li>
									{{-- Past Jobs posted by Hireer or Completed by Freelance --}}

									<li><a href="{{ route('my-bids') }}">[F] My Active Bids <span class="nav-tag">4</span></a></li>
									{{-- Active Jobs bidded on by Freelancer --}}
								</ul>	
							</li>

							<li class="{{ (request()->is('add-funds') || request()->is('withdraw-funds') || request()->is('transaction-history')) ? 'active-submenu' : '' }}">
								<a href="#">
									<i class="icon-line-awesome-money"></i> Finances
								</a>
								<ul>
									<li><a href="{{ route('add-funds') }}">Add Funds </a></li>
									<li><a href="{{ route('withdraw-funds') }}">Withdraw Funds </a></li>
									<li><a href="#">Transaction History</a></li>
								</ul>	
							</li>
						</ul>

						<ul data-submenu-title="Account">
							<li class="{{ (request()->is('settings')) ? 'active' : '' }}">
								<a href="{{ route('settings') }}"><i class="icon-material-outline-settings"></i> Settings</a>
							</li>
							<li><a href="#"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>