

@extends('layouts.backend')
@section('page_title',"Product Add")
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('order.update',$order->id)}}" method="post" class="update-form">
                    @csrf
                    @method('PATCH')
                    <h2>Update Order</h2>

                    <div class="form-group">
                        <label>Customer</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">--Select Customer--</option>
                            @foreach($customer as $c)
                            <option value="{{$c->id}}" {{$order->user_id==$c->id?'selected':''}}>{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">--Select Status--</option>
                            <option value="pending" {{$order->status=='pending'?'selected':''}}>Pending</option>
                            <option value="processing" {{$order->status=='processing'?'selected':''}}>Processing</option>
                            <option value="completed" {{$order->status=='completed'?'selected':''}}>Completed</option>
                            <option value="cancelled" {{$order->status=='cancelled'?'selected':''}}>Cancelled</option>
                        </select>
                    </div>

                    <button type="submit">Update</button>
                </form>


            </div>
        </div>
    </div>
</div>

@endsection
