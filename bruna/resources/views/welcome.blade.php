@extends('layouts.main')

@section('title', 'home')

@section('content')

@foreach($news as $news)
   
    <div class="container py-5">
    <h1>Veja as principais noticias</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
           <div class="col">
            <div class="card">
                    <img src="https://picsum.photos/200/200?random=1" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">card-title</h5>
                        <h6 class="card-subtile">subtitle</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda natus delectus dolorem earum numquam exercitationem illum. Laudantium voluptas veniam natus eveniet optio tempora dicta nam, rerum, sint ad earum!
                        </p>
                        <a href="#" class="card-button"><button type="button" class="btn btn-primary">Saiba mais</button></a>
                  </div>

             </div>

            
        </div>

        <div class="col">
            <div class="card">
                    <img src="https://picsum.photos/200/200?random=2" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">card-title</h5>
                        <h6 class="card-subtile">subtitle</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda natus delectus dolorem earum numquam exercitationem illum. Laudantium voluptas veniam natus eveniet optio tempora dicta nam, rerum, sint ad earum!
                        </p>
                        <a href="#" class="card-button"><button type="button" class="btn btn-primary">Saiba mais</button></a>
                  </div>

             </div>

            
        </div>

        <div class="col">
            <div class="card">
                    <img src="https://picsum.photos/200/200?random=3" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">card-title</h5>
                        <h6 class="card-subtile">subtitle</h6>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda natus delectus dolorem earum numquam exercitationem illum. Laudantium voluptas veniam natus eveniet optio tempora dicta nam, rerum, sint ad earum!
                        </p>
                        <a href="#" class="card-button"><button type="button" class="btn btn-primary">Saiba mais</button></a>
                  </div>

             </div>

            
        </div>
        
    </div>
    </div>
   
      
@endforeach

@endsection