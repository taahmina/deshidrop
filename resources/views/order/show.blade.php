



{{-- <style>
    body {
        font-family: 'Poppins', sans-serif;
        background: #f4f6f9;
        margin: 20px;
    }

    .card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        padding: 25px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
        font-size: 24px;
        font-weight: bold;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 25px;
    }

    table th, table td {
        border: 1px solid #816060;
        padding: 10px 12px;
        font-size: 14px;
    }

    table th {
        background: #46b8d5;
        color: #fefefe;
        text-align: left;
    }

    table td {
        background: #c92020;
    }

    .table thead th {
        background: #2980b9;
        color: #fff;
        text-align: center;
    }

    .table tbody td {
        text-align: center;
    }

    .table tfoot th {
        background: #ecf0f1;
        text-align: right;
        font-weight: bold;
        font-size: 15px;
    }

    p {
        font-size: 15px;
        margin: 10px 0;
        font-weight: 500;
    }

    .status {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 6px;
        font-weight: bold;
    }

    .status.pending {
        background: #f39c12;
        color: #fff;
    }

    .status.completed {
        background: #27ae60;
        color: #fff;
    }

    .status.cancelled {
        background: #e74c3c;
        color: #fff;
    }
</style> --}}


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

