@extends('layouts.dashboard_master')
@section('title', 'Add Funds')

@section('content')
<div class="row">
    <!-- Dashboard Box -->
    <div class="col-xl-6">
        <div class="dashboard-box margin-top-0">
            <!-- Headline -->
            <div class="headline">
                <h3>
                    <i class="icon-line-awesome-money"></i> 
                    <img src="{{ asset('assets/images/stripe-logo.png') }}" height="30px">
                </h3>
            </div>
    
            <div class="content px-4 py-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <h5>Currency & Amount</h5>
                            <div class="row">
                                <div class="col-xl-4">
                                    <select class="selectpicker with-border" id="currency">
                                        <option>USD</option>
                                        <option>GHS</option>
                                        <option>EUR</option>
                                        <option>CAD</option>
                                        <option>INR</option>
                                        <option>GBP</option>
                                        <option>AUD</option>
                                        <option>HKD</option>
                                        <option>NZD</option>
                                    </select>
                                </div>
                                <div class="col-xl-8">
                                    <input type="number" class="with-border" value="50">
                                    <small class="text-muted">Processing fee <span class="float-right">$0.99</span></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-12"> 
                        <p>Total <span class="float-right">$50.99</span></p>
                    </div>
                    <div class="col-12">
                        <button class="button ripple-effect">
                            <i class="icon-material-outline-check-circle mr-1"></i>
                            Confirm & Add $50.99
                        </button>
                    </div> 
                </div>
            </div>

        </div>
    </div>
</div>
@endsection