<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'image',
        'author',
        'category_id'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function settings()
    {
        return $this->hasOne(NewsSettings::class);
    }
}
