<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelivaryRule extends Model
{
    use HasFactory;
    protected $fillable =['zone_id','min_weight','max_weight','additional_charge',]
}
