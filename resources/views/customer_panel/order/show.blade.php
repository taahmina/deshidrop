

@extends('layouts.customer_panel')
@section('page_title',"Invoice")
@section('content')

<style>
    /* ===== Card Container ===== */
.card {
    max-width: 900px;
    margin: 20px auto; /* center the card */
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.06);
    padding: 30px;
    font-family: 'Roboto', Arial, sans-serif;
    color: #333;
}

/* ===== Invoice Title ===== */
.card-body h2 {
    width: 100%;
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 30px;
    text-transform: uppercase;
    color: #222;
    border-bottom: 2px solid #007bff;
    display: inline-block;
    padding-bottom: 5px;
}

/* ===== Invoice Info Table ===== */
.invoice-info {
    width: 100%;
    margin-bottom: 25px;
    border-collapse: collapse;
    font-size: 14px;
}

.invoice-info td {
    padding: 8px 10px;
    vertical-align: top;
}

.invoice-info td:first-child {
    width: 180px;
    font-weight: 600;
    color: #444;
}

/* ===== Order Status ===== */
.card-body p {
    font-size: 15px;
    font-weight: 600;
    margin: 15px 0 20px 0;
    padding: 6px 12px;
    border-radius: 6px;
    display: inline-block;
    background: #e9f7ef;
    color: #1e7e34;
}

/* ===== Items Table ===== */
.table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    margin-top: 10px;
}

.table thead th {
    background: #9dc4ee;
    color: #131010;
    padding: 12px;
    text-align: left;
    font-weight: 600;
    border: 1px solid #ddd;
}

.table tbody td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

.table tbody tr td[colspan] {
    text-align: center;
    color: #999;
    font-style: italic;
}

/* ===== Totals ===== */
.table tfoot th {
    padding: 10px;
    text-align: right;
    font-weight: 600;
    border: 1px solid #ddd;
    background: #f9f9f9;
}

.table tfoot tr:last-child th {
    background: #7ca5d1;
    color: #050505;
    font-size: 16px;
    font-weight: 700;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
    .card {
        padding: 20px;
    }

    .table thead {
        display: none; /* hide table headers */
    }

    .table,
    .table tbody,
    .table tr,
    .table td {
        display: block;
        width: 100%;
    }

    .table tr {
        margin-bottom: 15px;
        border: 1px solid #eee;
        border-radius: 8px;
        background: #fafafa;
        padding: 10px;
    }

    .table td {
        text-align: right;
        padding: 8px;
        position: relative;
    }

    .table td::before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        font-weight: 600;
        color: #444;
        text-transform: capitalize;
    }

    .table tfoot {
        display: block;
        margin-top: 20px;
    }

    .table tfoot tr {
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }

    .table tfoot th {
        text-align: left !important;
        border: none;
    }
}


 </style>




<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2 >Invoice</h2>

                    <table class="invoice-info">
                        <tr>
                            <td><strong>Customer :</strong></td>
                            <td>{{ $order->customer?->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Invoice No. :</strong></td>
                            <td>{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <td><strong>Order Date :</strong></td>
                            <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                        <tr>
                            <td><strong>Shipping Address :</strong></td>
                            <td>
                                {{ $order->address }}<br>
                                {{ $order->district?->name }}<br>
                                {{ $order->division?->name }}
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

