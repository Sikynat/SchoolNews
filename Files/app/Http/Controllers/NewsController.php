<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use App\Models\User;

class NewsController extends Controller
{

    public function boot(){
        \Blade::setEchoFormat('nl2br(e(%s))');
    }

    public function index() {
        $search = request('search');

        if($search) {
            $news = News::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $news = News::all();
        }

        return view('welcome', ['news' => $news, 'search' => $search]);
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

        $user = auth()->user();
        $news->user_id = $user->id;

        $news->save();

        return redirect('/');

    }

    public function show($id){
        $news = News::findOrFail( $id );

        $newsOwner = User::Where('id', $news->user_id)->first()->toArray();

        return view('news.show', ['news' => $news, 'newsOwner' => $newsOwner]);
    }


    public function dashboard() {
        $user = auth()->user();
        $news = $user->news;
        return view('news.dashboard', ['news' => $news]);
    }

    public function destroy($id){
        News::findOrFail($id)->delete();
        return redirect('/dashboard');
    }
}
