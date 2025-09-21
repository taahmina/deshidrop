<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
     protected $fillable = ['name','description','type','description','promo_code','discount_type','discount_value','min_order_amount','max_discount_amount','start_date','end_date','usage_limit','per_user_limit','target_user_id','referral_reward_user','referral_reward_friend'];

}
