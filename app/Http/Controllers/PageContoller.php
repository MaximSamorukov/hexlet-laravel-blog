<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContoller extends Controller
{
    public function about()
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];
        return view('about', ['tags' => $tags]);
    }

    public function articles()
    {
        return view('articles');
    }

    public function news()
    {
        return view('news');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
