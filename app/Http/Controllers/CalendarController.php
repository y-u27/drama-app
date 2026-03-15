<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        // カレンダー表示
        $events = Calendar::all(['title', 'start', 'country', 'body']);

        return view('calendar', compact('events'));
    }

    public function calendarRegister()
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
            'start' => 'required|date'
        ]);

        Calendar::create([
            'title' => $validate['title'],
            'country' => $validate['country'],
            'body' => $validate['body'] ?? null,
            'start' => $validate['start'],
        ]);

        return redirect()->route('calendar.index')->with('message', '登録しました');
    }
}
