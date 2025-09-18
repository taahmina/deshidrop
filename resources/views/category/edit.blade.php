

@extends('layouts.backend')
@section('page_title',"Category Add")
@section('content')  
 
<form action="{{route('category.update',$category->id)}}" method="post">
@csrf
@method('PATCH')
						<div class="form-group row">
							<label for ="name" class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="name"  id="name", value="{{$category->name}}">
							</div>
						</div>

						<div class="form-group row">
							<label for="type" class="col-sm-12 col-md-2 col-form-label">Select</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12"  name="type" id="type" , value="{{$category->type}}">
									<option selected="">Select Type...</option>
									<option value="restaurant">Restaurant</option>
									<option value="shop">shop</option>
								
								</select>
							</div>
						</div>
            <div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

</form>
@endsection
						