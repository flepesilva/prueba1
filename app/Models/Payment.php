<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'total', 
        'payed_at',
        'order_id',
    ];

    protected $dates = [
        'payed_at',
    ];

    public function order()
    {
        //belongTo = pertenece a 
        return $this->belongsTo(Order::class);
    }
}
