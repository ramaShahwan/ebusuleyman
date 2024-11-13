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
        return $this->belongsTo(Category::class, 'category_id');

    }



    // public function tags()
    // {
    //     return $this->belongsTo(Tag::class, 'tag_id');
    // }
    public function tags()
    {
        return $this->hasMany(Tag::class, 'id', 'tag_id');
    }
    public function getTagsAttribute()
    {
        $tagIds = explode(',', $this->tag_id);
        return Tag::whereIn('id', $tagIds)->get();
    }

    // public function getTagsAttribute()
    // {
    //     $tagIds = explode(',', $this->tag_id);
    //     return Tag::whereIn('id', $tagIds)->get();
    // }
}
