@extends('layouts.dashboard_master')
@section('title', 'Ongoing Jobs')

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
                                    <h3 class="job-listing-title"><a href="#">Design a Landing Page</a> </h3>

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
                            <a href="{{ route('milestones', 1) }}" class="button ripple-effect"><i class="icon-line-awesome-list-alt"></i> View Milestones <span class="button-info">3</span></a>
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
                                            <li><i class="icon-material-outline-access-time"></i> 
                                                <span class="text-danger">
                                                    Exceeded Deadline by 23 Hours
                                                </span>
                                            </li>
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
                            <a href="{{ route('milestones', 1) }}" class="button ripple-effect"><i class="icon-line-awesome-list-alt"></i> View Milestones <span class="button-info">3</span></a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
@endsection