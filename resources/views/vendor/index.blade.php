@extends('layouts.backend')
@section('page_title',"Vendor Add")
@section('content')


<!-- Contextual classes Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Vendor</h4>
		</div>
		<div class="pull-right">
			<a href="{{route('vendor.create')}}" class="btn btn-primary btn-sm scroll-click" > Add new</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead class="table-info">
				<tr>
					<th scope="col">#SL</th>
					<th scope="col">Vendor_type</th>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col">Address</th>
					<th scope="col">Phone</th>
					<th scope="col">Email</th>
					<th scope="col">Latitude</th>
					<th scope="col">Longitude</th>
					<th scope="col">Opening_time</th>
					<th scope="col">Closing_time</th>
					<th scope="col">Status</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($data as $i=>$d)
					<tr class="">
						<th scope="row">{{++$i}}</th>
						<td>{{$d->vendor_type?->name}}</td>
						<td>{{$d->name}}</td>
						<td>{{$d->description}}</td>
						<td>{{$d->address}}</td>
						<td>{{$d->phone}}</td>
						<td>{{$d->email}}</td>
						<td>{{$d->latitude}}</td>
						<td>{{$d->longitude}}</td>
						<td>{{$d->opening_time}}</td>
						<td>{{$d->closing_time}}</td>
						<td>{{$d->status}}</td>
						
						<td>
							<ul class="d-flex ">
							
								<li class="mr-3"><a href="{{route('vendor.edit',$d->id)}}" class="btn btn-link"><i class="fa fa-edit"></i></a></li>
								<li>
									<form method="post" action="{{route('vendor.destroy',$d->id)}}">
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















