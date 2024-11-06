<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];



    // Product.php
    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'catgory_id');
    }
}
