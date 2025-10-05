<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Vendor extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['vendor_type_id','name','description','address','phone','email','password','latitude','longitude','opening_time','closing_time','status'];
    public function vendor_type(){
        return $this->belongsTo(VendorType::class);
    }
    public function items(){
        return $this->hasMany(Item::class);
    }
}
