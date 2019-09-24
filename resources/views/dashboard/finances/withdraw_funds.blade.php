@extends('layouts.dashboard_master')
@section('title', 'Withdraw Funds')

@section('content')
<div class="row">
    <!-- Dashboard Box -->
    <div class="col-xl-6">
        <div class="dashboard-box margin-top-0">
    
            <div class="content px-4 py-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="submit-field">
                            <h5>Payment Method</h5>
                            <div class="row">
                                <div class="col-xl-12">
                                    <select class="selectpicker with-border" id="payment_method">
                                        <option>Skrill (someemail@mail.com)</option>
                                        <option>Something else?</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-field">
                            <h5>Amount</h5>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="input-with-icon-left no-border">
                                        <i class="icon-feather-dollar-sign"></i>
                                        <input type="number" class="input-text" value="300.00">
                                    </div> 
                                    <small class="text-muted">Yohli fee $1.00 per payment<span class="float-right">Additional skrill fee may be applied</span></small>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-12"> 
                        <p>Total <span class="float-right">$301.00</span></p>
                    </div>
                    <div class="col-12">
                        <button class="button ripple-effect">
                            <i class="icon-material-outline-check-circle mr-1"></i>
                            Confirm & Send $301.00
                        </button>
                    </div> 
                </div>
            </div>

        </div>
    </div>
</div>
@endsection