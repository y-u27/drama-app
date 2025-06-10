<?php

namespace App\Http\Controllers;

use App\Models\Drama;
use Illuminate\Http\Request;

class DramaController extends Controller
{
    // 一覧表示
    public function index()
    {
        // return Drama::all();
        $dramas = Drama::with('user')->latest()->get();
        return view('drama', compact('dramas'));
    }

    // データ保存
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'user_id',
            'body' => 'nullable|string',
            'image_path' => 'nullable|string'
        ]);

        Drama::create($validate);

        return redirect('/drama');
    }
}
