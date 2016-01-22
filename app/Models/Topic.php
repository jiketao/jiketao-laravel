<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function getTopicsWithFilter($filter, $limit = 20) {
        return $this->applyFilter($filter)
                    ->paginate($limit);
    }

    public function applyFilter($filter) {
        switch ($filter) {
            default:
                return $this->orderBy('created_at', 'desc');
                break;
        }
    }

    public function  getProductTopic($product_id, $limit = 20) {
        return Topic::where('product_id', $product_id)
                    ->orderBy('created_at', 'desc')
                    ->paginate($limit);
    }
}
