
@extends('layouts.backend')
@section('page_title',"Item_tag Add")
@section('content')




<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Item Tag Add</h4>
					
						</div>
					</div>


					<form action="{{route('item_tag.store')}}" method="post"> 
           @csrf

						<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="item_id" >Item</label>
									<select name="item_id" id="item_id" class="form-control">
										<option value="">Select Item</option>
										@forelse ($ite as $i)
											<option value="{{$i->id}}">{{$i->name}}</option>
										@empty

										@endforelse
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










						
						
            <div>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

</form>
@endsection
						
				
					








