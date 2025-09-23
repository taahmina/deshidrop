<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
      protected $fillable = ['vendor_id','category_id','name','description','weight','price','stock','status','tag_id','image'];

      public function vendor(){
        return $this->belongsTo(Vendor::class);
         }
         
        public function category(){
            return $this->belongsTo(Category::class);
        }
     public function tags(){
            return $this->belongsToMany(Tag::class);
        }
}
 