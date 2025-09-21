

@extends('layouts.backend')
@section('page_title',"Tag Add")
@section('content')  
 
<form action="{{route('tag.update',$tag->id)}}" method="post">
@csrf
@method('PATCH')
						<div class="form-group row">
							<label for ="name" class="col-sm-12 col-md-2 col-form-label">Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="name"  id="name", value="{{$tag->name}}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Slug</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="slug", value="{{$tag->slug}}"  >
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Color</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="color", value="{{$tag->color}}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Description</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="description", value="{{$tag->description}}">
							</div>
						</div>


						
            <div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

</form>
@endsection
						