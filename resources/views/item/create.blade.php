
@extends('layouts.backend')
@section('page_title',"Item Add")
@section('content')


		
<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Item Add</h4>
							
						</div>
						
					</div>
						<form action="{{route('item.store')}}" method="post" enctype="multipart/form-data"> 
					       @csrf
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="vendor_id" >Vendor</label>
									<select name="vendor_id" id="vendor_id" class="form-control">
										<option value="">Select Vendor</option>
										@forelse ($ven as $v)
											<option value="{{$v->id}}">{{$v->name}}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="category_id" >Category</label>
									<select name="category_id" id="category_id" class="form-control">
										<option value="">Select Category</option>
										@forelse ($cat as $c)
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
							<div class="col-sm-12">
								<div class="form-group">
									<label for="description">Description</label>
									<input type="text"  name="description" id="description" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for ="weight">Weight</label>
									<input type="text"  name="weight" id="weight" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for ="price">Price</label>
									<input type="text" name="price" id="price"  class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for="stock">Stock</label>
									<input type="text" name="stock" id="stock" class="form-control">
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
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="tag_id" >Tag</label>
									<select name="tag_id" id="tag_id" class="form-control">
										<option value="">Select Tag</option>
										@forelse ($ta as $t)
											<option value="{{$t->id}}">{{$t->name}}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for="image">Image</label>
									<input type="file" name="image" id="image" accept="image/*" class="form-control">
									  
								</div>
							</div>

							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for="is_featured">Is_Featured</label>
									<select name="is_featured" id="is_featured" class="form-control">
										<option value="0">No</option>
										<option value="1">Yes</option>
									</select>					
								</div>
							</div>
	                            <div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label for="is_active">Is_Active</label>
									<select name="is_active" id="is_active" class="form-control">
										<option value="0">No</option>
										<option value="1">Yes</option>
									</select>		
								</div>
							</div>

							
						</div>

			<button type="submit" class="btn btn-primary">Save</button>
      </div>

</form>
@endsection
				
					
				
					








