<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    static function getProductInCategory($id, $limit = 20) {
        return Product::where('category_id', $id)
                ->orderBy('created_at', 'desc')
                ->paginate($limit);
    }

    function detailTopic() {
        return $this->belongsTo('App\Models\Topic', 'detail_topic_id');
    }
}
