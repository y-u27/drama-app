<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //メインページ表示
    public function index()
    {
        return view('main');
    }
}
