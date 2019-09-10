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
                        <h3>UI Design <i class="icon-material-outline-check-circle text-success"></i></h3>
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
@endsection