@extends('layouts.rider_panel')
@section('page_title',"Order Add")
@section('content')

<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Order Item</h4>
		</div>
		<div class="pull-right">
			<a href="" class="btn btn-primary btn-sm scroll-click" > Add new</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead class="table-info">
                <tr>
                    <th scope="col">#SL</th>
					<th scope="col">Order_id</th>
					<th scope="col">Customer_id</th>
					<th scope="col">Customer_Address</th>
                    <th scope="col">Status</th>
					<th scope="col">Total Price</th>	
					<th scope="col">Action</th>
                 
                </tr>
            </thead>
            <tbody>
					 @forelse($data as $d)
				<tr>
                     <td scope="row">{{ $loop->iteration }}</td>
                      <td>{{$d->order_id}}</td>
                        <td>{{$d->customer?->name}}</td>
						<td>{{$d->customer?->address}}</td>
						<td>{{$d->status}}</td>
						<td>{{$d->total_price}}</td>
					<td>

                            
							<ul class="d-flex ">
							
								<li class="mr-3"><a href="{{route('rider_panel.order.show',$d->id)}}" class="btn btn-link">View</a></li>
								<li>
                                    <li class="mr-3"><a href="{{route('rider_panel.order.edit',$d->id)}}" class="btn btn-link"><i class="fa fa-edit"></i></a></li>
								<li>
									<form method="post" action="{{route('rider_panel.order.destroy',$d->id)}}">
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









