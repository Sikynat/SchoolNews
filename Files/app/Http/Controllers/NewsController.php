<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{

    public function boot(){
        \Blade::setEchoFormat('nl2br(e(%s))');
    }

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
        // Image Upload

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));
            $request->image->move(public_path('img/news'), $imageName);
            $news->image = $imageName;
        }

        $news->save();

        return redirect('/');

    }

    public function show($id){
        $news = News::findOrFail( $id );
        return view('news.show', ['news' => $news]);
    }


}
