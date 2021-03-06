@extends('backEnd.master')
@section('mainContent')
<div class="card">

	{{ Form::open(['class' => 'form-horizontal', 'files' => true, 'url' => 'vendors/'.$vendor->id, 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off']) }}

	    <div class="card-header">
			<h5>Edit Vendor</h5>
		</div>
		<div class="card-block">
			<div class="row">
	        	<div class="form-group col-md-6">
	            	<label for="vendor_name">Vendor Name:</label>
	            	<input type="text" class="form-control {{ $errors->has('vendor_name') ? ' is-invalid' : '' }}" name="vendor_name" value="{{ $vendor->vendor_name }}" />
	            	@if ($errors->has('vendor_name'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('vendor_name') }}</strong></span>
						</span>
					@endif
	          	</div>

                <div class="form-group col-md-3">
                    <label for="unique_id">ID Number </label>
                    <input type="text" class="form-control {{ $errors->has('unique_id') ? ' is-invalid' : '' }}" value="{{ $vendor->unique_id }}" name="unique_id"/>
                    @if ($errors->has('unique_id'))
                        <span class="invalid-feedback" role="alert" >
						<span class="messages"><strong>{{ $errors->first('unique_id') }}</strong></span>
					</span>
                    @endif
                </div>

                <div class="form-group col-md-3">
	            	<label for="trade_licence_no">Trade Licence Number:</label>
	            	<input type="text" class="form-control {{ $errors->has('trade_licence_no') ? ' is-invalid' : '' }}" name="trade_licence_no" value="{{ $vendor->trade_licence_no }}" />
	            	@if ($errors->has('trade_licence_no'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('trade_licence_no') }}</strong></span>
						</span>
					@endif
	          	</div>

	        	<div class="form-group col-md-6">
	            	<label for="phone_number"><span class="important">*</span> Phone Number:</label>
	            	<input type="text" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ $vendor->phone_number }}" />
	            	@if ($errors->has('phone_number'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('phone_number') }}</strong></span>
						</span>
					@endif
	          	</div>

	          	<div class="form-group col-md-6">
	            	<label for="email">Email:</label>
	            	<input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $vendor->email }}" />
	            	@if ($errors->has('email'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('email') }}</strong></span>
						</span>
					@endif
	          	</div>

	          	<div class="form-group col-md-6">
	            	<label for="contact_person_name">Contact Person Name:</label>
	            	<input type="text" class="form-control {{ $errors->has('contact_person_name') ? ' is-invalid' : '' }}" name="contact_person_name" value="{{ $vendor->contact_person_name }}" />
	            	@if ($errors->has('contact_person_name'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('contact_person_name') }}</strong></span>
						</span>
					@endif
	          	</div>

	          	<div class="form-group col-md-6">
	            	<label for="designation">Designation:</label>
	            	<input type="text" class="form-control {{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" value="{{ $vendor->designation }}" />
	            	@if ($errors->has('designation'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('designation') }}</strong></span>
						</span>
					@endif
	          	</div>

	          	<div class="form-group col-md-6">
	            	<label for="contact_person_phone">Contact Person Phone:</label>
	            	<input type="text" class="form-control {{ $errors->has('contact_person_phone') ? ' is-invalid' : '' }}" name="contact_person_phone" value="{{ $vendor->contact_person_phone }}" />
	            	@if ($errors->has('contact_person_phone'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('contact_person_phone') }}</strong></span>
						</span>
					@endif
	          	</div>

	          	<div class="form-group col-md-6">
	            	<label for="contact_person_email">Contact Person Email:</label>
	            	<input type="text" class="form-control {{ $errors->has('contact_person_email') ? ' is-invalid' : '' }}" name="contact_person_email" value="{{ $vendor->contact_person_email }}" />
	            	@if ($errors->has('contact_person_email'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('contact_person_email') }}</strong></span>
						</span>
					@endif
	          	</div>

                <div class="form-group col-md-6">
                    <label for="service_type">Type of Service </label>
                    <input type="text" class="form-control" value="{{ $vendor->service_type }}" name="service_type"/>
                    @if ($errors->has('service_type'))
                        <span class="invalid-feedback" role="alert" >
							<span class="messages"><strong>{{ $errors->first('service_type') }}</strong></span>
						</span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="service_acc_no">Service Account Number:</label>
                    <input type="text" class="form-control  {{ $errors->has('service_acc_no') ? ' is-invalid' : '' }}" value="{{ $vendor->service_acc_no }}" name="service_acc_no" />
                    @if ( $errors->has('service_acc_no') )
                        <span class="invalid-feedback" role="alert" >
                        <span class="messages"><strong>{{ $errors->first('service_acc_no') }}</strong></span>
                    </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="service_meter_no">Service Meter Number:</label>
                    <input type="text" class="form-control  {{ $errors->has('service_meter_no') ? ' is-invalid' : '' }}" value="{{ $vendor->service_meter_no }}" name="service_meter_no" />
                    @if ( $errors->has('service_meter_no') )
                        <span class="invalid-feedback" role="alert" >
                        <span class="messages"><strong>{{ $errors->first('service_meter_no') }}</strong></span>
                    </span>
                    @endif
                </div>

          		<div class="form-group col-md-6">
	            	<label for="office_address">Office Address:</label>
	            	<textarea class="form-control" value="" name="office_address">{{  $vendor->office_address }}</textarea>
	            	<!-- <input type="text" class="form-control {{ $errors->has('office_address') ? ' is-invalid' : '' }}" name="office_address" value="{{ $vendor->office_address }}" /> -->
	            	@if ($errors->has('office_address'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('office_address') }}</strong></span>
						</span>
					@endif
	          	</div>
          	</div>
      	</div>

	  	<div class="card-header">
			<h5>Edit Bank Details</h5>
		</div>

		<div class="card-block">
          	<div class="row">
	          	<div class="form-group col-md-6">
	            	<label for="bank_name">Bank Name:</label>
	            	<input type="text" class="form-control {{ $errors->has('bank_name') ? ' is-invalid' : '' }}" name="bank_name" value="{{ $vendor->bank->bank_name }}" />
	            	@if ($errors->has('bank_name'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('bank_name') }}</strong></span>
						</span>
					@endif
	          	</div>

	          	<div class="form-group col-md-6">
	            	<label for="account_number">Account Number:</label>
	            	<input type="text" class="form-control {{ $errors->has('account_number') ? ' is-invalid' : '' }}" name="account_number" value="{{ $vendor->bank->account_number }}" />
	            	@if ($errors->has('account_number'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('account_number') }}</strong></span>
						</span>
					@endif
	          	</div>
          	</div>

          	<div class="row">
	          	<div class="form-group col-md-6">
	            	<label for="bank_branch">Bank Branch:</label>
	            	<input type="text" class="form-control {{ $errors->has('bank_branch') ? ' is-invalid' : '' }}" name="bank_branch" value="{{ $vendor->bank->bank_branch }}" />
	            	@if ($errors->has('bank_branch'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('bank_branch') }}</strong></span>
						</span>
					@endif
	          	</div>

	          	<div class="form-group col-md-6">
	            	<label for="bank_address">Bank Address:</label>
	            	<textarea class="form-control" value="" name="bank_address">{{  $vendor->bank->bank_address }}</textarea>
	            	@if ($errors->has('bank_address'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('bank_address') }}</strong></span>
						</span>
					@endif
	          	</div>
          	</div>

          	<div class="row">
	          	<div class="form-group col-md-6">
	            	<label for="routing_number">Routing Number:</label>
	            	<input type="text" class="form-control {{ $errors->has('routing_number') ? ' is-invalid' : '' }}" name="routing_number" value="{{ $vendor->bank->routing_number }}" />
	            	@if ($errors->has('routing_number'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('routing_number') }}</strong></span>
						</span>
					@endif
	          	</div>

	          	<div class="form-group col-md-6">
	            	<label for="swift_code">Swift Code:</label>
	            	<input type="text" class="form-control {{ $errors->has('swift_code') ? ' is-invalid' : '' }}" name="swift_code" value="{{ $vendor->bank->swift_code }}" />
	            	@if ($errors->has('swift_code'))
					    <span class="invalid-feedback" role="alert">
							<span class="messages"><strong>{{ $errors->first('swift_code') }}</strong></span>
						</span>
					@endif
	          	</div>
          	</div>

	        <div class="form-group row mt-4">
				<div class="col-sm-6 text-center" style="margin-bottom: 1em;">
					<a class="" title="Back" href="{{url('/vendors')}}">
						<button type="button" class="btn btn-primary m-b-0">Cancel</button>
					</a>
				</div>

				<div class="col-sm-6 text-center">
					<button type="submit" class="btn btn-primary m-b-0">Update</button>
				</div>
			</div>
		{{ Form::close()}}
	</div>
</div>

@endSection
