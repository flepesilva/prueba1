<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'price', 
        'stock', 
        'status',
    ];

    public function carts()
    {   //belongsToMany = pertenece a muchos
        //moreByMany = relacion polimorfica de muchos a muchos
        return $this->morphedByMany(Cart::class, 'productable')->withPivot('quantity');
    }

    public function orders()
    {   //belongsToMany = pertenece a muchos
        //moreByMany = relacion polimorfica de muchos a muchos
        return $this->morphedByMany(Order::class, 'productable')->withPivot('quantity');
    }

    public function image(){
        //belongsTo = pertenece a
        return $this->belongsTo(Product::class, 'image_id');//user_id es opcional ya que fuimos consistentes 
    }

    
}
