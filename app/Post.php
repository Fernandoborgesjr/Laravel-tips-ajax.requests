<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function author(){
        return $this->belongsTo(User::class,'author','id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'posts_categories', 'post','category');
    }
}
