<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideImage extends Model
{
    use HasFactory;
    protected $table='slide_images';
    protected $fillable=[

        'image',
        'title',
        'descreption',
        'position'



    ];
}
