<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelivaryZone extends Model
{
    use HasFactory;
    protected $fillable=['name','base_charge'];
}
