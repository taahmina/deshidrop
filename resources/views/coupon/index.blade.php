
@extends('layouts.backend')
@section('page_title',"Coupon Add")
@section('content')



<div class="col-lg-12">
    <div class="card">
    <div class="card-body">
        {{-- <h5 class="card-title">Basic Table</h5> --}}
        <a href="{{route('coupon.create')}}">Add new</a>
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Code</th>
                    <th scope="col">Discount Type</th>
                    <th scope="col">Discount Value</th>
                    <th scope="col">Usage Limit</th>
                    <th scope="col">Used Count</th>
                    <th scope="col">Min Order Amount</th>
                    <th scope="col">Start Date<</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Is Active</th>

                    <th scope="col">Action </th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $d)

                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{$d->code}}</td>
                        <td>{{$d->discount_type==1?"Percentage":"Fixed Amount"}}</td>
                        <td>{{$d->discount_value}}</td>
                        <td>{{$d->usage_limit}}</td>
                        <td>{{$d->used_count}}</td>
                        <td>{{$d->min_order_amount}}</td>
                        <td>{{$d->start_date}}</td>
                        <td>{{$d->end_date}}</td>
                        <td>{{$d->is_active?"Active":"Inactive"}}</td>

                        <td>
                            <a href="{{route('coupon.edit',$d->id)}}">Update</a>

                            <form method="post" action="{{route('coupon.destroy',$d->id)}}">
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
