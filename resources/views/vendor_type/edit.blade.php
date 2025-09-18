

@extends('layouts.backend')
@section('page_title',"Vendor_type Add")
@section('content')  
 
<form action="{{route('vendor_type.update',$vendorType->id)}}" method="post">
@csrf
@method('PATCH')
						<div class="form-group row">
							<label for ="name" class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="name"  id="name", value="{{$vendorType->name}}">
							</div>
						</div>

						
            <div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

</form>
@endsection
						