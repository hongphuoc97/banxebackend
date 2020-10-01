<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'title','company_name', 'role', 'admin_name','video_ytb', 'address', 'phonenumber', 'email', 'website', 'hotline'
    ];
}
