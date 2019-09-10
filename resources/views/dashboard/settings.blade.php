@extends('layouts.dashboard_master')
@section('title', 'Settings')

@section('content')
<div class="row">
    <!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box margin-top-0">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
            </div>

            <div class="content with-padding padding-bottom-0">

                <div class="row">

                    <div class="col-auto">
                        <div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
                            <img class="profile-pic" src="{{ asset('assets/images/user-avatar-placeholder.png') }}" alt="" />
                            <div class="upload-button"></div>
                            <input class="file-upload" type="file" accept="image/*"/>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row">

                            <div class="col-xl-6">
                                <div class="submit-field">
                                    <h5>First Name</h5>
                                    <input type="text" class="with-border" value="Tom">
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="submit-field">
                                    <h5>Last Name</h5>
                                    <input type="text" class="with-border" value="Smith">
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <!-- Account Type -->
                                <div class="submit-field">
                                    <h5>Phone</h5>
                                    <input type="text" class="with-border" value="123 456 789">
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="submit-field">
                                    <h5>Email</h5>
                                    <input type="text" class="with-border" value="tom@example.com">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Dashboard Box -->
    <div class="col-xl-12">
        <div class="dashboard-box">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-material-outline-face"></i> Freelancer Profile Settings</h3>
            </div>

            <div class="content">
                <ul class="fields-ul">
                <li>
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="submit-field">
                                <div class="bidding-widget">
                                    <!-- Headline -->
                                    <span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

                                    <!-- Slider -->
                                    <div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
                                    <input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Skills <i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills"></i></h5>

                                <!-- Skills List -->
                                <div class="keywords-container">
                                    <div class="keyword-input-container">
                                        <input type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>
                                        <button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
                                    </div>
                                    <div class="keywords-list">
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
                                        <span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="submit-field">
                                <h5>Attachments</h5>
                                
                                <!-- Attachments -->
                                <div class="attachments-container margin-top-0 margin-bottom-0">
                                    <div class="attachment-box ripple-effect">
                                        <span>Cover Letter</span>
                                        <i>PDF</i>
                                        <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                    </div>
                                    <div class="attachment-box ripple-effect">
                                        <span>Contract</span>
                                        <i>DOCX</i>
                                        <button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                
                                <!-- Upload Button -->
                                <div class="uploadButton margin-top-0">
                                    <input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
                                    <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                                    <span class="uploadButton-file-name">Maximum file size: 10 MB</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="submit-field">
                                <h5>Professional Headline</h5>
                                <input type="text" class="with-border" value="iOS Expert + Node Dev">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="submit-field">
                                <h5>Country</h5>
                                <select class="selectpicker with-border" data-size="7" title="Select Country" data-live-search="true">
                                    <option value="GH">Ghana</option>
                                    <option value="US" selected>United States</option>                                   
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="submit-field">
                                <h5>Introduce Yourself</h5>
                                <textarea cols="30" rows="5" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>

    <!-- Dashboard Box -->
    <div class="col-xl-12">
        <div id="test1" class="dashboard-box">

            <!-- Headline -->
            <div class="headline">
                <h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
            </div>

            <div class="content with-padding">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="submit-field">
                            <h5>Current Password</h5>
                            <input type="password" class="with-border">
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="submit-field">
                            <h5>New Password</h5>
                            <input type="password" class="with-border">
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="submit-field">
                            <h5>Repeat New Password</h5>
                            <input type="password" class="with-border">
                        </div>
                    </div>

                    {{-- <div class="col-xl-12">
                        <div class="checkbox">
                            <input type="checkbox" id="two-step" checked>
                            <label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    
    <!-- Button -->
    <div class="col-xl-12">
        <a href="#" class="button ripple-effect big margin-top-30">Save Changes</a>
    </div>
</div>
@endsection