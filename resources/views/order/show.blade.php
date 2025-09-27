

@extends('layouts.backend')
@section('page_title',"Order Add")
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2>Order Invoice</h2>
                <table>
                    <tr>
                        <th>Customer<br> {{$order->customer?->name}}</td>
                    </tr>
                    <tr>
                        <th>Invoice No. <br>{{$order->id}}</td>
                    </tr>
                    <tr>
                        <th>Order Date<br> {{$order->created_at->format('d-m-Y H:i')}}</td>
                    </tr>
                    <tr>
                        <th>Shipping Address:<br>
                            {{$order->address}}<br>
                            {{$order->district?->name}}<br>
                            {{$order->division?->name}}
                        </td>
                    </tr>
                </table>

                <p>Status: {{$order->status}}</p>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($order->orderItems as $i)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $i->item?->name }}</td>
                                <td>{{ $i->quantity }}</td>
                                <td>{{ $i->unit_price }}</td>
                                <td>{{ $i->line_total }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No items found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4" style="text-align:right">Total Price:</th>
                            <th>{{ $order->total_price }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align:right">Discount Amount:</th>
                            <th>{{ $order->discount_amount }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align:right">Final Price:</th>
                            <th>{{ $order->final_price }}</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>

</div>

@endsection

