@extends('layouts.dashboard_master')
@section('title', 'Post a job')

@section('content')
<div class="row">

	<!-- Dashboard Box -->
	<div class="col-xl-12">
		<div class="dashboard-box margin-top-0">

			<!-- Headline -->
			<div class="headline">
				<h3><i class="icon-feather-folder-plus"></i> Tell us what you need done</h3>
			</div>

			<div class="content with-padding padding-bottom-10">
				<form>
					<div class="row form-section" id="section-1">
						<div class="col-xl-12">
							<div class="submit-field">
								<h5>Job Title</h5>
								<input type="text" class="with-border" id="title">
							</div>
						</div>
						<div class="col-xl-12">
							<div class="submit-field">
								<h5>Job Description</h5>
								<textarea cols="30" rows="5" class="with-border" id="description"></textarea>
							</div>
						</div>
						<div class="col-xl-12">
							<button class="btn btn-outline-secondary next-btn" type="button">NEXT</button>
						</div>
					</div>
					
					<div class="row d-none animated fadeInUp form-section" id="section-2">

						<div class="col-xl-4">
							<div class="submit-field">
								<h5>Job Type</h5>
								<select class="selectpicker with-border" data-size="7" title="Select Job Type" id="type">
									<option>Full Time</option>
									<option>Freelance</option>
									<option>Part Time</option>
									<option>Internship</option>
									<option>Temporary</option>
								</select>
							</div>
						</div>

						<div class="col-xl-4">
							<div class="submit-field">
								<h5>Job Category</h5>
								<select class="selectpicker with-border" data-size="7" title="Select Category" id="category">
									<option>Accounting and Finance</option>
									<option>Clerical & Data Entry</option>
									<option>Counseling</option>
									<option>Court Administration</option>
									<option>Human Resources</option>
									<option>Investigative</option>
									<option>IT and Computers</option>
									<option>Law Enforcement</option>
									<option>Management</option>
									<option>Miscellaneous</option>
									<option>Public Relations</option>
								</select>
							</div>
						</div>

						<div class="col-xl-4">
							<div class="submit-field">
								<h5>Location</h5>
								<div class="input-with-icon">
									<div id="autocomplete-container">
										<input id="autocomplete-input" class="with-border location-field" type="text" placeholder="Type Address">
									</div>
									<i class="icon-material-outline-location-on"></i>
								</div>
							</div>
						</div>

						<div class="col-xl-12">
							<button class="btn btn-outline-secondary next-btn" type="button">NEXT</button>
						</div>

					</div>

					<div class="row d-none animated fadeInUp form-section" id="section-3">
						<div class="col-xl-4">
							<div class="submit-field">
								<h5>Salary</h5>
								<div class="row">
									<div class="col-xl-6">
										<div class="input-with-icon">
											<input class="with-border" type="text" placeholder="Min" id="min">
											<i class="currency">USD</i>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="input-with-icon">
											<input class="with-border" type="text" placeholder="Max" id="max">
											<i class="currency">USD</i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-4">
							<div class="submit-field">
								<h5>Skills <span>(e.g. HTML, SQL, React, Java)</span>  <i class="help-icon" data-tippy-placement="right" title="Maximum of 10 tags"></i></h5>
								<div class="keywords-container">
									<div class="keyword-input-container">
										<input id="skills" type="text" class="keyword-input with-border" placeholder="e.g. HTML, SQL, React, Java"/>
										<button class="keyword-input-button ripple-effect" type="button"><i class="icon-material-outline-add"></i></button>
									</div>
									<div class="keywords-list"><!-- keywords go here --></div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>

						<div class="col-xl-12">
							<div class="submit-field">
								<div class="uploadButton margin-top-30">
									<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
									<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
									<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="col-xl-12">
		<button class="button ripple-effect big margin-top-30 d-none" id="submitBtn"><i class="icon-feather-plus"></i> Post a Job</button>
	</div>

</div>
@endsection

@push('custom-scripts')
    <script>
		$(document).ready(function(){

			// Button
			var nextBtn = $('.next-btn');
			nextBtn.on("click", function(){
				var closestSection = $(this).closest('.form-section');
				var csID = closestSection.attr('id');
				var sectionId = csID.split("-")[1];

				var _isValidSection = isValidSection(sectionId);

				if(_isValidSection){
					// Hide BTN 
					$(this).addClass('d-none');
					// Show next section
					var nextSectionId = parseInt(sectionId) + 1;
					$('#section-' + nextSectionId).removeClass('d-none');
				}
			});

			






			// Functions
			function isValidSection(sectionId){
				// Fields
				var title = $('#title').val();
				var description = $('#description').val();
				var type = $('#type').val();
				var category = $('#category').val();
				var location = $('.location-field').val();
				var min = $('#min').val();
				var category = $('#category').val();
				var skills = $('#skills').val();

				if(sectionId == 1){
					if(isEmpty(title) || isEmpty(description)){
						showError("The title and description fields are required!");
						return false;
					} else {
						return true;
					}
				} else if(sectionId == 2){

					if(isEmpty(type) || isEmpty(category) || isEmpty(location)){
						showError("The job type, category and location fields are required!");
						return false;
					} else {
						return true;
					}
				}else if(sectionId == 3){
					
					if(isEmpty(min) || isEmpty(max) || isEmpty(skills)){
						showError("The min, max and skills fields are required!");
						return false;
					} else {
						$('#submitBtn').removeClass('d-none');
						return true;
					}
				} else {
					return true;
				}
			}

			function isEmpty(val){
				return val.length == 0 ? true : false;
			}

			function showError(message){
				Snackbar.show({
					text: message,
					pos: 'bottom-center',
					showAction: false,
					actionText: "Dismiss",
					duration: 3000,
					textColor: '#fff',
					backgroundColor: '#383838'
				});
			}


		});
	</script>
@endpush