
@extends('layouts.backend')
@section('page_title',"Vendor_type Add")
@section('content')




<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Vendor Type Add</h4>
					
						</div>
					</div>


					<form action="{{route('vendor_type.store')}}" method="post"> 
           @csrf
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="name"  placeholder="Restaurant">
							</div>
						</div>

						
            <div>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

</form>
@endsection
						
				
					








