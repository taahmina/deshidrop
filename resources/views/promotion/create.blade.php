
@extends('layouts.backend')
@section('page_title',"Promotion Add")
@section('content')


		
<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Promotion Add</h4>
							
						</div>
						
					</div>
						<form action="{{route('promotion.store')}}" method="post"> 
					       @csrf
						<div class="row">

							
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
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="type" >Promotion Type</label>
									<select name="type" id="type" class="form-control">
										<option value="">-- Select Type --</option>
										@forelse ($typ as $t)
										<option value="{{$t}}">{{ucfirst(str_replace('_','',$t)) }}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="promo_code">promo_code</label>
									<input type="text" name="promo_code" id="promo_code" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label  for="discount_type" >Discount Type</label>
									<select name="discount_type" id="discount_type" class="form-control">
										<option value="">-- Select Type --</option>
										@forelse ($des as $d)
										<option value="{{$d}}">{{ucfirst(str_replace('-','',$d)) }}</option>
										@empty

										@endforelse
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="discount_value">discount_value</label>
									<input type="text" name="discount_value" id="discount_value" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="min_order_amount">min_order_amount</label>
									<input type="text" name="min_order_amount" id="min_order_amount" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="max_discount_amount">max_discount_amount</label>
									<input type="text" name="max_discount_amount" id="max_discount_amount" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="start_date">start_date</label>
									<input type="text" name="start_date" id="start_date" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="end_date">end_date</label>
									<input type="text" name="end_date" id="end_date" class="form-control">
								</div>
							</div>


							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="usage_limit">usage_limit</label>
									<input type="text" name="usage_limit" id="usage_limit" class="form-control">
								</div>
							</div>


							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="per_user_limit">per_user_limit</label>
									<input type="text" name="per_user_limit" id="per_user_limit" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="target_user_id">target_user_id</label>
									<input type="text" name="target_user_id" id="target_user_id" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="referral_reward_user">referral_reward_user</label>
									<input type="text" name="referral_reward_user" id="referral_reward_user" class="form-control">
								</div>
							</div>

							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label for="referral_reward_friend">referral_reward_friend</label>
									<input type="text" name="referral_reward_friend" id="referral_reward_friend" class="form-control">
								</div>
							</div>



			<button type="submit" class="btn btn-primary">Save</button>
      </div>

</form>
@endsection
				
					
				
					








