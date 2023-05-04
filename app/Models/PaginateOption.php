<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaginateOption extends Model
{
    use HasFactory;
    protected $table='paginate_options';
    protected $fillable=[
        'home_n_articles',
        'view_category_n_articles',
        'n_category',
        'n_articles_admin',
        'n_category_admin',
        'logo_image',
        'head_logo_image'



    ];
}
