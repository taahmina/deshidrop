@extends('layouts.backend')
@section('page_title',"Item Add")
@section('content')


<!-- Contextual classes Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Item</h4>
		</div>
		<div class="pull-right">
			<a href="{{route('item.create')}}" class="btn btn-primary btn-sm scroll-click" > Add new</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead class="table-info">
				<tr>
					<th scope="col">#SL</th>
					<th scope="col">Vendor</th>
					<th scope="col">Category</th>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col">Weight</th>
					<th scope="col">Price</th>
					<th scope="col">Stock</th>
					<th scope="col">Status</th>
					<th scope="col">Tags</th>
					<th scope="col">Image</th>
					<th scope="col">Is_Featured</th>
					<th scope="col">Is_Active</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($data as $i=>$d)
					<tr class="">
						<th scope="row">{{++$i}}</th>
						<td>{{$d->vendor?->name}}</td>
						<td>{{$d->category?->name}}</td>
						<td>{{$d->name}}</td>
						<td>{{$d->description}}</td>
						<td>{{$d->weight}}</td>
						<td>{{$d->price}}</td>
						<td>{{$d->stock}}</td>
						<td>{{$d->status}}</td>
						<td>{{$d->tags->count()>0?implode(',',$d->tags->pluck('name')->toArray()) : ""}}</td>
						<td><img width="80px" src="{{asset('uploads/'.$d->image)}}" alt=""></td>
						<td>{{$d->is_featured}}</td>
						<td>{{$d->is_active}}</td>

						<td>
							<ul class="d-flex ">

								<li class="mr-3"><a href="{{route('item.edit',$d->id)}}" class="btn btn-link"><i class="fa fa-edit"></i></a></li>
								<li>
									<form method="post" action="{{route('item.destroy',$d->id)}}">
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















