<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsSettings;

class NewsController extends Controller
{
    //
    public function index()
    {
        $all_news = News::get();
        return response()->json($all_news);
    }

    public function view($id)
    {
        $new = News::find($id);
        return response()->json($new);
    }

    public function settings($id)
    {
        $new = News::with('settings')->find($id);
        return response()->json($new);
    }

    public function related($id)
    {
        $new = News::where('category_id', $id)->take(3)->get();
        return response()->json($new);
    }

    public function random()
    {
        $new = News::take(3)->get();
        return response()->json($new);
    }
    
}
