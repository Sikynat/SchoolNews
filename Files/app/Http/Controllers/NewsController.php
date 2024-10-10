<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        $news = News::all();
        return view('welcome', ['news' => $news]);
    }

    public function create() {
        return view('news.create');
    }
}
