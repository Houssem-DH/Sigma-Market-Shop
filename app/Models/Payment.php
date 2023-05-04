<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table='payments';
    protected $fillable = [
        'user_id',
        'cname',
        'cnumber',
        'mm',
        'yy',
        'cvv',

    ];
}
