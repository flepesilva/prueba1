<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'status',
        'user_id',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
    
    public function user(){
        //belongsTo = pertenece a
        return $this->belongsTo(User::class, 'user_id');//user_id es opcional ya que fuimos consistentes 
    }

    public function products()
    {   //belongsToMany = pertenece a muchos
        return $this->morphedToMany(Product::class, 'productable' )->withPivot('quantity');
    }
}
