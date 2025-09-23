<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GpsLog extends Model
{
    use HasFactory;
     protected $fillable = ['order_id','delivery_person_id','latitude','longitude','recorded_at'];
}
