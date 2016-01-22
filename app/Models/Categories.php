<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    function subs() {
        return $this->hasMany('App\Models\Categories', 'parent_id');
    }

}
