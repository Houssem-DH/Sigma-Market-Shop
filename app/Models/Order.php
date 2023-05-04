<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable = [
        'user_id',
        'tracknumber',
        'state',
        'total_price'


    ];
    public function user()
    {
        return $this->belongsTo(User::class,'id','user_id');
    }
    public function orderitems()
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }
}
