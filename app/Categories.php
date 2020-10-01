<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [
         'name', 'order_value'
    ];

    public function product()
    {
        return $this->hasMany('App\Product', 'categories_id');
    }
}
