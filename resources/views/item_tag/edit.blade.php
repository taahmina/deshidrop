

@extends('layouts.backend')
@section('page_title',"Item-_Tag Add")
@section('content')  
 
<form action="{{route('item_tag.update',$ItemTag->id)}}" method="post">
@csrf
@method('PATCH')

<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="item_id" >Item</label>
									<select name="item_id" id="item_id" class="form-control">
										<option value="">Select Vendor</option>
										@forelse ($ite as $i)
											<option {{old('item_id',$itemTag->item_id)==$i->id?"selected":""}} value="{{$i->id}}">{{$i->name}}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="tag_id" >Tag</label>
									<select name="tag_id" id="tag_id" class="form-control">
										<option value="">Select tag</option>
										@forelse ($ta as $t)
											<option {{old('tag_id',$itemTag->tag_id)==$t->id?"selected":""}} value="{{$t->id}}">{{$t->name}}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>






						

						
            <div>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

</form>
@endsection
						