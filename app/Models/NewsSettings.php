<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsSettings extends Model
{
    //
    protected $fillable = [
        'news_id',
        'font_size',
        'font_color',
        'icon',
    ];

}
