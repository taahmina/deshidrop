<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $fillable = ['user_id','vendor_id','total_amount','vat','discount_price','delivery_charge','status','tracking_status','delivery_zone_id','delivery_person_id'];
}
