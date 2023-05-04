<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table='points';
    protected $fillable=[
        'user_id',
        'paypal_email',
        'points_count',
        'state',
        'p',
        'total_widthraw',
        'widthraw'


    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
