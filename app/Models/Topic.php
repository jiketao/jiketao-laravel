<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    static function getProductTopics($id, $limit = 20) {
        return Topic::where('product_id', $id)
                    ->orderBy('created_at', 'desc')
                    ->paginate($limit);
    }


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



    // relationship
    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag', 'topic_tag_relationships', 'topic_id', 'tag_id');
    }
}
