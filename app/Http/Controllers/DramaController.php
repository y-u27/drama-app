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
        $dramas = Drama::all();
        return view('drama', ['dramas' => $dramas]);
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

    public function create()
    {
        return view('create');
    }

    public function destroy($id)
    {
        // Dramaテーブルから特定のデータ取得
        $dramas = Drama::find($id);
        // 取得したデータの削除
        $dramas->delete();

        return redirect('/drama');
    }
}
