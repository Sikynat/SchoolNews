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

    public function store(Request $request) {
        date_default_timezone_set('America/Sao_paulo');
        
        $news = new News;

        $news->title = $request->title;
        $news->essay = $request->essay;

        $news->save();

        return redirect('/');
    }
}
