@extends('layouts.customer_panel')
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
					<th scope="col">Item</th>
					<th scope="col">Quantity</th>
					<th scope="col"> Price</th>
					<th scope="col">Total Price</th>
					 <th scope="col">Status</th>	
					<th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

				 @forelse($order as $i)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $i->orderItems?->pluck() }}</td>
                                <td>{{ $i->quantity }}</td>
                                <td>{{ $i->unit_price }}</td>
                                <td>{{ $i->line_total }}</td>
                            
					 
					<td>
						  
                            
							<ul class="d-flex ">
							
								<li class="mr-3"><a href="{{route('rider_panel.order.show',$i->id)}}" class="btn btn-link">View</a></li>
								<li>
                                    <li class="mr-3"><a href="{{route('rider_panel.order.edit',$i->id)}}" class="btn btn-link"><i class="fa fa-edit"></i></a></li>
								<li>
									<form method="post" action="{{route('rider_panel.order.destroy',$i->id)}}">
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









