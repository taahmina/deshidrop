@extends('layouts.backend')
@section('page_title',"Rider Add")
@section('content')


<!-- Contextual classes Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Rider</h4>
		</div>
		<div class="pull-right">
			<a href="{{route('rider.create')}}" class="btn btn-primary btn-sm scroll-click" > Add new</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead class="table-info">
				<tr>
					<th scope="col">#SL</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Phone</th>
					<th scope="col">Password</th>
					<th scope="col">Address</th>
					<th scope="col">division </th>
					<th scope="col">district </th>
					
					<th scope="col">vehicle_type </th>
					<th scope="col">vehicle_number </th>
					<th scope="col">license_number</th>
					
					<th scope="col">Status</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($data as $i=>$d)
					<tr class="">
						<th scope="row">{{++$i}}</th>
						<td>{{$d->name}}</td>
						<td>{{$d->email }}</td>
						<td>{{$d->phone}}</td>
						<td>{{$d->password }}</td>
						<td>{{$d->address}}</td>
						<td>{{$d->division_id }}</td>
						<td>{{$d->district_id  }}</td>
						<td>{{$d->vehicle_type }}</td>
						<td>{{$d->vehicle_number}}</td>
						<td>{{$d->license_number }}</td>
						<td>{{$d->status}}</td>
						
						<td>
							<ul class="d-flex ">
							
								<li class="mr-3"><a href="{{route('rider.edit',$d->id)}}" class="btn btn-link"><i class="fa fa-edit"></i></a></li>
								<li>
									<form method="post" action="{{route('rider.destroy',$d->id)}}">
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















