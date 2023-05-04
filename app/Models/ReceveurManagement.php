<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceveurManagement extends Model
{
    use HasFactory;
    protected $table='receveur_management';
    protected $fillable=[
        'time',
        'points_on_visite',
        'minimum_amount',
        'points_to_dinar',
        'home_n_articles',
        'view_category_n_articles'

    ];
}
