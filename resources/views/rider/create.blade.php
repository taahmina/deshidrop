
@extends('layouts.backend')
@section('page_title',"Rider Add")
@section('content')



<!-- Form grid Start -->
	<div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Rider Add</h4>

            </div>
        </div>
        <form action="{{route('rider.store')}}" method="post">
			@csrf
            <div class="row">
                
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                 <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for ="phone">Phone</label>
                        <input type="text" name="phone" id="phone"  class="form-control">
                    </div>
                </div>
                   <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text"  name="password" id="password"  class="form-control">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for ="address">Address</label>
                        <input type="text"  name="address" id="address" class="form-control">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for ="division_id ">division </label>
                        <input type="text"  name="division_id " id="division_id " class="form-control">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for ="district_id">district</label>
                        <input type="text"  name="district_id" id="district_id" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
								<div class="form-group">
								<label for="status">Vehicle Type</label>
								<select class="custom-select"  name="status" id="status" class="form-control">
									<option selected="">Select Type...</option>
									<option value="approved">Bicycle</option>
									<option value="pending">Motorbike</option>
                                    <option value="pending">Scooter</option>
                                    <option value="pending">Electric Bike</option>
                                    <option value="pending">On Foot</option>
								</select>

								</div>
							</div>
                
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="vehicle_number "> vehicle_number </label>
                        <input type="text"  name="vehicle_number " id="vehicle_number "  class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="license_number">license_number</label>
                        <input type="text"  name="license_number" id="license_number"  class="form-control">
                    </div>
                </div>
            </div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
								<label for="status">Status</label>
								<select class="custom-select"  name="status" id="status" class="form-control">
									<option selected="">Select Type...</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>
                                    <option value="pending">Rejected</option>
                                    <option value="pending">Block</option>

								</select>

								</div>
							</div>

						</div>

			<button type="submit" class="btn btn-primary">Save</button>
      </div>

</form>
@endsection












