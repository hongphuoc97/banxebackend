<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
  protected $fillable = [
      'name','value', 'unit', 'product_id'
  ];

  protected $table = 'specifications';
    public function product() {
        return $this->belongsTo('App\Product');
    }
}
