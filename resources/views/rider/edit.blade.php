

@extends('layouts.backend')
@section('page_title',"Vendor Add")
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{route('rider.update',$rider->id)}}" method="post">
@csrf
@method('PATCH')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">rider Edit</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$rider->name}}" >
                    </div>
                </div>
                 <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{$rider->email}}" >
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for ="phone">Phone</label>
                        <input type="text" name="phone" id="phone"  class="form-control" value="{{$rider->phone}}">
                    </div>
                </div>
                   <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text"  name="password" id="password"  class="form-control" value="{{$rider->password}}">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                        <label for ="address">Address</label>
                        <input type="text"  name="address" id="address" class="form-control" value="{{$rider->address}}">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                      <label for="division_id">Division</label>
                            <select name="division_id" id="division_id" class="form-control" required>
                                <option value="">-- Select Division --</option>
                                @foreach($divisions as $division)
                                    <option value="{{ $division->id }}"
                                        {{ old('division_id', $rider->division_id) == $division->id ? 'selected' : '' }}>
                                        {{ $division->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('division_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="form-group">
                             <label for="district_id">District</label>
                                <select name="district_id" id="district_id" class="form-control" required>
                                    <option value="">-- Select District --</option>
                                    @foreach($districts as $district)
                                        <option value="{{ $district->id }}"
                                            {{ old('district_id', $rider->district_id) == $district->id ? 'selected' : '' }}>
                                            {{ $district->name }}
                                        </option>
                                    @endforeach
                                </select>
                      @error('district_id') <small class="text-danger">{{ $message }}</small> @enderror 
                                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
								<div class="form-group">
								<label for="vehicle_type ">Vehicle Type</label>
								<select class="custom-select"  name="vehicle_type " id="vehicle_type " class="form-control" value="{{$rider->vehicle_type }}">
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
                        <input type="text"  name="vehicle_number" id="vehicle_number "  class="form-control" value="{{$rider->vehicle_number}}">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="license_number">license_number</label>
                        <input type="text"  name="license_number" id="license_number"  class="form-control" value="{{$rider->license_number}}">
                    </div>
                </div>
            </div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
								<label for="status">Status</label>
								<select class="custom-select"  name="status" id="status" class="form-control" value="{{$rider->status}}">
									<option selected="">Select Type...</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>
                                    <option value="pending">Rejected</option>
                                    <option value="pending">Block</option>

								</select>

								</div>
							</div>

						</div>

			<button type="submit" class="btn btn-primary">update</button>
      </div>

</form>
@endsection














           



