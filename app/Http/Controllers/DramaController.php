<?php

namespace App\Http\Controllers;

use App\Models\Drama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'body' => 'nullable|string',
            'image' => 'nullable|image|max:2048'
        ]);
        
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('drama', 'public');
        }
        
        Drama::create([
            'title' => $validate['title'],
            'country' => $validate['country'],
            'body' => $validate['body'] ?? null,
            'image_path' => $path,
            'user_id' => Auth::id(),
        ]);
        
        return redirect('/drama')->with('message', '投稿しました');
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function edit($id) {
        $drama = Drama::find($id);
        return view('edit', ['drama' => $drama]);
    }
    
    public function update(Request $request, $id) {
        $drama = Drama::findOrFail($id);
        
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'body' => 'nullable|string',
            'image' => 'nullable|image|max:2048'
        ]);

        $path = $drama->image_path;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('drama', 'public');
        }

        $drama->update([
            'title' => $validate['title'],
            'country' => $validate['country'],
            'body' => $validate['body'] ?? null,
            'image_path' => $path,
        ]);

        return redirect()->route('drama.index')->with('message', '編集が完了');
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
