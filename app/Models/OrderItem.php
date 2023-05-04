<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table='order_items';
    protected $fillable = [
        'user_id',
        'order_id',
        'prod_id',
        'cart_id',
        'prod_price',
        'prod_qty'



    ];
    public function articles()
    {
        return $this->belongsTo(Article::class,'prod_id','id');
    }
    public function orders()
    {
        return $this->hasOne(Order::class,'id','order_id');
    }
}
