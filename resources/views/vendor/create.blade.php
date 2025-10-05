
@extends('layouts.backend')
@section('page_title',"Vendor Add")
@section('content')



<!-- Form grid Start -->
	<div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Vendor Add</h4>

            </div>
        </div>
        <form action="{{route('vendor.store')}}" method="post">
			@csrf
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label  for="vendor_type_id" >Vendor Type</label>
                        <select name="vendor_type_id" id="vendor_type_id" class="form-control">
                            <option value="">Select Vendor Type</option>
                            @forelse ($v_type as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @empty

                            @endforelse
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text"  name="description" id="description" class="form-control">
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
                        <label for ="phone">Phone</label>
                        <input type="text" name="phone" id="phone"  class="form-control">
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
                        <label for="password">Password</label>
                        <input type="text"  name="password" id="password"  class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input type="text"  name="latitude" id="latitude"  class="form-control">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input type="text"  name="longitude" id="longitude"  class="form-control">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="opening_time">Opening_time</label>
                        <input type="text"  name="opening_time" id="opening_time"  class="form-control">
                    </div>
                </div>
            </div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label for="closing_time">Closing_time</label>
									<input type="text"  name="closing_time" id="closing_time"  class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
								<label for="status">Status</label>
								<select class="custom-select"  name="status" id="status" class="form-control">
									<option selected="">Select Type...</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>

								</select>

								</div>
							</div>

						</div>

			<button type="submit" class="btn btn-primary">Save</button>
      </div>

</form>
@endsection












