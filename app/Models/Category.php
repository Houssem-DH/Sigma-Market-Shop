<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Article;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=[
        'name',
        'slug',
        'descreption',
        'new',
        'popular',
        'image',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
    ];

    public function article()
    {
        return $this->hasMany(Article::class,'id','cate_id');
    }
}


