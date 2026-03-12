<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        // カレンダー表示
        return view('calendar');
    }

    public function calenderRegister()
    {
        // カレンダー登録フォーム表示
        return view('calendarRegister');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'body' => 'nullable|string',
            // 'update' => 'nullable|string'
        ]);

        Calendar::create([
            'title' => $validate['title'],
            'country' => $validate['country'],
            'body' => $validate['body'] ?? null,
            // 'update' => $validate['update'] ?? null
        ]);

        return redirect('/calendar')->with('message', '登録しました');
    }
}
