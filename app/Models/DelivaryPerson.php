<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelivaryPerson extends Model
{
    use HasFactory;
    protected $fillable =['name','phone','email','password','vehicle_type','vehicle_number','status']
}
