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
    $all_news = News::with('category:id,name')->get();
    return response()->json($all_news);
    }

    public function view($id)
    {
        $new = News::with('category:id,name')->find($id);
        return response()->json($new);
    }

    public function settings($id)
    {
        $new = News::with('category:id,name')->with('settings')->find($id);
        return response()->json($new);
    }

    public function related($id)
    {
        $new = News::where('category_id', $id)->with('category:id,name')->take(3)->get();
        return response()->json($new);
        
    }

    public function random()
    {
        $new = News::take(3)->get();
        return response()->json($new);
    }
    
    public function updateFontColor(Request $request, $id)
    {
        $request->validate([
            'font_color' => 'required|string|max:32',
        ]);

        $settings = NewsSettings::where('news_id', $id)->first();
        if (!$settings) {
            return response()->json(['error' => 'Configuración no encontrada'], 404);
        }
        $settings->font_color = $request->font_color;
        $settings->save();
        return response()->json(['message' => 'Color actualizado', 'settings' => $settings]);
    }
}
