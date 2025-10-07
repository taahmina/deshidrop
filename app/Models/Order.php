<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $fillable = ['user_id','vendor_id','rider_id','total_amount','vat','discount_price','delivery_charge','status','tracking_status','delivery_zone_id',];

     public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class,'user_id');
    }
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
