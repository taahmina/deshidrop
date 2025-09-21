@extends('layouts.backend')
@section('page_title',"Item Tag Add")
@section('content')


<!-- Contextual classes Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">Item Tag</h4>
		</div>
		<div class="pull-right">
			<a href="{{route('item_tag.create')}}" class="btn btn-primary btn-sm scroll-click" > Add new</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table">
			<thead class="table-info">
				<tr>
					<th scope="col">#SL</th>
					<th scope="col">Item</th>
					<th scope="col">Tag</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($data as $i=>$d)
					<tr class="">
						<th scope="row">{{++$i}}</th>
						<td>{{$d->item_id}}</td>
						<td>{{$d->tag_id}}</td>
						<td>
							<ul class="d-flex ">
							
								<li class="mr-3"><a href="{{route('item_tag.edit',$d->id)}}" class="btn btn-link"><i class="fa fa-edit"></i></a></li>
								<li>
									<form method="post" action="{{route('item_tag.destroy',$d->id)}}">
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















