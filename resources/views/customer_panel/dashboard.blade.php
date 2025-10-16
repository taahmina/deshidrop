@extends('layouts.customer_panel')

@section('content')

    
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<!--<h4 class="text-blue h4">Order Item</h4>-->
		</div>
		<div class="pull-right">
			<a href="" class="btn btn-primary btn-sm scroll-click" > Add new</a>
		</div>
		<div class="pull-left">
			<a href="{{route('customer_panel.order.index')}}" class="btn btn-primary btn-sm scroll-click" > Order Item</a>
		</div>
	</div>
	
		<!-- Contextual classes End -->
@endsection