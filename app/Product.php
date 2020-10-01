<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 'file_path', "categories_id", "description"
    ];

    public function specifications()
    {
        return $this->hasMany('App\Specifications');
    }

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }
}
