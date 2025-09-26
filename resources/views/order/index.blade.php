@extends('layouts.backend')
@section('page_title',"Order Add")
@section('content')



<div class="col-lg-12">
    <div class="card">
    <div class="card-body">
        {{-- <h5 class="card-title">Basic Table</h5> --}}
        <a href="{{route('order.create')}}">Add new</a>
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Total Price</th>
                    <th>Discount</th>
                    <th>Final Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $d)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $d->customer?->name}}</td>
                        <td>{{ $d->total_price }}</td>
                        <td>{{ $d->discount_amount }}</td>
                        <td>{{ $d->final_price }}</td>
                        <td>{{ $d->status }}</td>
                        <td>
                            <a href="{{route('order.show',$d->id)}}">
                                Invoice
                            </a>
                            <a href="{{route('order.edit',$d->id)}}">Update</a>

                            <form method="post" action="{{route('order.destroy',$d->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            No data found
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>

@endsection
