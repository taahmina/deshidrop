

@extends('layouts.backend')
@section('page_title',"Vendor Add")
@section('content')  
 

						<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Vendor Edit</h4>
							
						</div>
						
					</div>
						<form action="{{route('item.update',$item->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PATCH')
					<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="vendor_id" >vendor_id</label>
									<select name="vendor_id" id="vendor_id" class="form-control">
										<option value="">Select Vendor</option>
										@forelse ($ven as $v)
											<option {{old('vendor_id',$item->vendor_id)==$v->id?"selected":""}} value="{{$v->id}}">{{$v->name}}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="category_id" >category_id</label>
									<select name="category_id" id="category_id" class="form-control">
										<option value="">Select category</option>
										@forelse ($cat as $c)
											<option {{old('category_id',$item->category_id)==$c->id?"selected":""}} value="{{$c->id}}">{{$c->name}}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>

							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" class="form-control" value="{{$item->name}}">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="description">Description</label>
									<input type="text"  name="description" id="description" class="form-control" value="{{$item->description}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for ="weight">Weight</label>
									<input type="text"  name="weight" id="weight" class="form-control" value="{{$item->weight}}">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for ="price">Price</label>
									<input type="text" name="price" id="price"  class="form-control" value="{{$item->price}}">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for="stock">Stock</label>
									<input type="text" name="stock" id="stock" class="form-control" value="{{$item->stock}}">
								</div>
							</div>
							
							
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
								<label for="status">Status</label>
								<select class="custom-select"  name="status" id="status" , value="{{$item->status}}">
									<option selected="">Select Type...</option>
									<option value="approved">Approved</option>
									<option value="pending">Pending</option>
								
								</select>

								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="tag_id" >Tag</label>
									<select name="tag_id[]" id="tag_id" class="form-control" multiple>
										<option value="">Select Tag</option>
										@forelse ($ta as $t)
											<option value="{{$t->id}}" @if(in_array($t->id,$item->tags?->pluck('id')->toArray())) selected @endif>{{$t->name}}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>

							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for="image">Image</label>
									<input type="file" name="image" id="image" class="form-control" value="{{$item->image}}">
								</div>
							</div>
							
						</div>



            <div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

</form>
@endsection




						