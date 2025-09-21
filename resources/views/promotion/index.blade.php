@extends('layouts.backend')
@section('page_title',"Promotion Add")
@section('content')


<!-- Contextual classes Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Promotion</h4>
		</div>
		<div class="pull-right">
			<a href="{{route('promotion.create')}}" class="btn btn-primary btn-sm scroll-click" > Add new</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead class="table-info">
				<tr>
					<th scope="col">#SL</th>
					<th scope="col">Name</th>
					<th scope="col">type</th>
					<th scope="col">promo_code</th>
					<th scope="col">Description</th>
					<th scope="col">discount_type</th>
					<th scope="col">discount_value</th>
					<th scope="col">min_order_amount</th>
					<th scope="col">max_discount_amount</th>
					<th scope="col">start_date</th>
					<th scope="col">end_date</th>
					<th scope="col">usage_limit</th>
					<th scope="col">per_user_limit</th>
					<th scope="col">target_user_id</th>
					<th scope="col">referral_reward_user</th>
					<th scope="col">referral_reward_friend</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($data as $i=>$d)
					<tr class="">
						<th scope="row">{{++$i}}</th>
						<td>{{$d->name}}</td>
						<td>{{$d->description}}</td>
						<td>{{$d->type}}</td>
						<td>{{$d->promo_code}}</td>
						<td>{{$d->discount_type}}</td>
						<td>{{$d->discount_value}}</td>
						<td>{{$d->min_order_amount}}</td>
						<td>{{$d->max_discount_amount}}</td>
						<td>{{$d->start_date}}</td>
						<td>{{$d->end_date}}</td>
						<td>{{$d->usage_limit}}</td>
						<td>{{$d->per_user_limit}}</td>
						<td>{{$d->target_user_id}}</td>
						<td>{{$d->referral_reward_user}}</td>
						<td>{{$d->referral_reward_friend}}</td>
						
						
						<td>
							<ul class="d-flex ">
							
								<li class="mr-3"><a href="{{route('promotion.edit',$d->id)}}" class="btn btn-link"><i class="fa fa-edit"></i></a></li>
								<li>
									<form method="post" action="{{route('promotion.destroy',$d->id)}}">
										@csrf
										@method('delete')
										<button type="submit" class="btn btn-link"><i class="ti-trash"></i></button>
									</form>
								</li>
							</ul>
						</td>
					</tr>
				@empty
					<tr>
						<td>No Data Found</td>
					</tr>
				@endforelse
			</tbody>
		</table>
	</div>
</div>
		<!-- Contextual classes End -->
@endsection















