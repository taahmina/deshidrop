@extends('layouts.backend')
@section('page_title',"Coupon Add")
@section('content')


<form action="{{route('coupon.update',$coupon->id)}}" method="post" class="update-form">
    @csrf
    @method('PATCH')
    <h2>Update Coupon</h2>

        <div class="form-group">
            <label for="code">Code</label>
            <input type="text"  name="code"  class="form-control form-control-rounded" id="code" value="{{$coupon->code}}">
        </div>

        <div class="form-group">
            <label for="discount_type">Discount Type</label>
            <input type="text" name="discount_type"  class="form-control form-control-rounded" id="discount_type"  value="{{$coupon->discount_type}}">
        </div>
        <div class="form-group">
             <label for="discount_value">Discount Value</label>
            <input type="text" name="discount_value" class="form-control form-control-rounded" id="discount_value"  value="{{$coupon->discount_value}}">
        </div>
        <div class="form-group">
           <label for="usage_limit">Usage Limit</label>
            <input type="text"  name="usage_limit"  class="form-control form-control-rounded" id="usage_limit" value="{{$coupon->usage_limit}}">
        </div>
        <div class="form-group">
            <label for="used_count">Used Count</label>
            <input type="text"  name="used_count"  class="form-control form-control-rounded" id="used_count" value="{{$coupon->used_count}}">
        </div>
        <div class="form-group">
            <label for="min_order_amount">Min Order Amount</label>
            <input type="text"  name="min_order_amount"  class="form-control form-control-rounded" id="min_order_amount"  value="{{$coupon->min_order_amount}}">
        </div>
        <div class="form-group">
             <label for="start_date">Start Date</label>
            <input type="text"  name="start_date"  class="form-control form-control-rounded" id="start_date" value="{{$coupon->start_date}}">
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="text"  name="end_date"  class="form-control form-control-rounded" id="end_date" value="{{$coupon->end_date}}">
        </div>
        <div class="form-group">
            <label for="is_active">Is Active</label>
            <input type="text"  name="is_active"  class="form-control form-control-rounded" id="is_active" value="{{$coupon->is_active}}">
        </div>

    <button type="submit">Update</button>
</form>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #00695c, #0d47a1, #4a148c); /* match form colors */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .update-form {
        background: rgba(255,255,255,0.05); /* slightly translucent to show background gradient */
        padding: 35px 40px;
        border-radius: 18px;
        box-shadow: 0 12px 30px rgba(0,0,0,0.5);
        width: 420px;
        color: #fff;
        backdrop-filter: blur(10px); /* subtle blur for glass effect */
        border: 1px solid rgba(255,255,255,0.2);
    }

    .update-form h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 26px;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #c5cae9;
    }

    .form-group input {
        width: 100%;
        padding: 14px 16px;
        border: 1.5px solid rgba(255,255,255,0.3);
        border-radius: 12px;
        font-size: 15px;
        background: rgba(255,255,255,0.1);
        color: #fff;
        transition: 0.3s;
    }

    .form-group input::placeholder {
        color: rgba(255,255,255,0.6);
    }

    .form-group input:focus {
        border-color: #80cbc4;
        box-shadow: 0 0 10px rgba(128,203,196,0.5);
        outline: none;
        background: rgba(255,255,255,0.15);
    }

    button {
        width: 100%;
        padding: 14px;
        background: #4a148c;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #311b92;
    }
</style>




{{-- <form action="{{route('category.update',$category->id)}}"  method="post">
    @csrf
    @method('PATCH')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$category->name}}">
    </div>
    <div>
        <label for="description">Description </label>
        <input type="text" name="description" id="description" value="{{$category->description}}">
    </div>
    <div>
        <label for="created_by">Created_by</label>
        <input type="text" name="created_by" id="created_by" value="{{$category->created_by}}">
    </div>

    <div>
        <button type="submit">Update</button>
    </div>
</form> --}}




