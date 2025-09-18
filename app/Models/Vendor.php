<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = ['vendor_type_id','name','description','address','phone','email','latitude','longitude','opening_time','closing_time','status'];
    public function vendor_type(){
        return $this->belongsTo(VendorType::class);
    }
}
