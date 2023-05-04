<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Article extends Model
{
    use HasFactory;
    protected $table='articles';
    protected $fillable=[
        'cate_id',
        'name',
        'slug',
        'small_description',
        'description',
        'price',
        'percentage',
        'image',
        'qty',
        'tax',
        'new',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description',


    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'cate_id','id');
    }
    public function carts()
    {
        return $this->belongsTo(Cart::class,'id','prod_id');
    }


}
