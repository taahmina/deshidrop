<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Rider extends Authenticatable
{
    use HasFactory;
     protected $fillable = ['name','email','phone','address','password','division_id','district_id','vehicle_type','vehicle_number','license_number','status'];
}
