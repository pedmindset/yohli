@extends('layouts.dashboard_master')
@section('title', 'New Jobs')

@section('content')
<div class="row">
    <!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-material-outline-assignment"></i> Jobs List</h3>
            </div>

            <div class="content">
                <ul class="dashboard-box-list">
                    <li>
                        <!-- Job Listing -->
                        <div class="job-listing width-adjustment">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title"><a href="#">Design a Landing Page</a> <span class="dashboard-status-button yellow">Expiring</span></h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-access-time"></i> 23 hours left</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Task Details -->
                        <ul class="dashboard-task-info">
                            <li><strong>3</strong><span>Bids</span></li>
                            <li><strong>$22</strong><span>Avg. Bid</span></li>
                            <li><strong>$15 - $30</strong><span>Hourly Rate</span></li>
                        </ul>

                        <!-- Buttons -->
                        <div class="buttons-to-right always-visible">
                            <a href="{{ route('bidders', 1) }}" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Bidders <span class="button-info">3</span></a>
                            <a href="#" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                            <a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                        </div>
                    </li>

                    <li>
                        <!-- Job Listing -->
                        <div class="job-listing width-adjustment">

                            <!-- Job Listing Details -->
                            <div class="job-listing-details">

                                <!-- Details -->
                                <div class="job-listing-description">
                                    <h3 class="job-listing-title"><a href="#">Food Delivery Mobile Application</a></h3>

                                    <!-- Job Listing Footer -->
                                    <div class="job-listing-footer">
                                        <ul>
                                            <li><i class="icon-material-outline-access-time"></i> 6 days, 23 hours left</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Task Details -->
                        <ul class="dashboard-task-info">
                            <li><strong>3</strong><span>Bids</span></li>
                            <li><strong>$3,200</strong><span>Avg. Bid</span></li>
                            <li><strong>$2,500 - $4,500</strong><span>Fixed Price</span></li>
                        </ul>

                        <!-- Buttons -->
                        <div class="buttons-to-right always-visible">
                            <a href="{{ route('bidders', 1) }}" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Bidders <span class="button-info">3</span></a>
                            <a href="#" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
                            <a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
@endsection