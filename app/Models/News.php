<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    protected $appends = [
        'short_description',
        'category_name',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function settings()
    {
        return $this->hasOne(NewsSettings::class);
    }

    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->description, 200, '...');
    }

    public function getCategoryNameAttribute()
    {
        return  '';
    }
}
