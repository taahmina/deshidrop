@extends('layouts.backend')
@section('page_title',"Order Add")
@section('content')

<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Order Item</h4>
		</div>
		<div class="pull-right">
			<a href="{{route('order.create')}}" class="btn btn-primary btn-sm scroll-click" > Add new</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead class="table-info">
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Total Price</th>
                    <th>Discount</th>
                    <th>Final Price</th>
					<th>Rider</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
					 @forelse($data as $d)
				<tr>
                     <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $d->customer?->name}}</td>
                        <td>{{ $d->total_amount }}</td>
                        <td>{{ $d->discount_amount }}</td>
                        <td>{{ $d->final_price }}</td>
						<td>{{$d->rider}}</td>
                        <td>{{ $d->status }}</td>
					<td>

                            
							<ul class="d-flex ">
							
								<li class="mr-3"><a href="{{route('order.show',$d->id)}}" class="btn btn-link">Invoice</a></li>
								<li>
                                    <li class="mr-3"><a href="{{route('order.edit',$d->id)}}" class="btn btn-link"><i class="fa fa-edit"></i></a></li>
								<li>
									<form method="post" action="{{route('order.destroy',$d->id)}}">
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









