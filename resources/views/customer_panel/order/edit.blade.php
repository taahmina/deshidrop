

@extends('layouts.rider_panel')
@section('page_title',"Product Add")
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('customer_panel.order.update',$order->id)}}" method="post" class="update-form">
                    @csrf
                    @method('PATCH')
                    <h2>Update Order</h2>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">--Select Status--</option>
                            <option value="on_the_way" {{$order->status=='on_the_way'?'selected':''}}>on_the_way</option>
                            <option value="delivered" {{$order->status=='delivered'?'selected':''}}>delivered</option>
                            <option value="failed" {{$order->status=='completed'?'failed':''}}>failed</option>
                        </select>
                    </div>

                    <button type="submit">Update</button>
                </form>


            </div>
        </div>
    </div>
</div>

@endsection
