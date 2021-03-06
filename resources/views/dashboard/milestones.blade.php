@extends('layouts.dashboard_master')
@section('title', 'Milestones')
@section('subtitle')
Milestones for <a href="#">Food Delivery Mobile Application</a>
@endsection

@section('content')
<div class="row">
    <!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">
            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-material-outline-access-time"></i> </h3>
            </div>
    
            <div class="content pb-1">
                <ul class="timeline">
                    <li class="event done">
                        <h3>UI Design 
                            <i class="icon-material-outline-check-circle text-success"></i>
                            <span class="float-right">
                                <a href="#small-dialog-1"  class="popup-with-zoom-anim button btn-xs">
                                    Release Payment
                                </a>
                            </span>
                        </h3>
                        <p>$600</p>
                    </li>
                    <li class="event notdone">
                        <h3>API Development</h3>
                        <p>$300</p>    
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- Bid Acceptance Popup
================================================== -->
<div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab1">Release Payment</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Release Payment to David for Milestone?</h3>
					<div class="bid-acceptance margin-top-15">
						$600
					</div>

				</div>

				<!-- Button -->
				<button class="margin-top-15 button full-width button-sliding-icon ripple-effect" type="submit" form="terms">Yes, Release <i class="icon-material-outline-check-circle"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Bid Acceptance Popup / End -->
@endsection