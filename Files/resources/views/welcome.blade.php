@extends('layouts.main')

@section('title', 'home')

@section('content')


   
    <div class="container py-5">
    <h1>Veja as principais noticias</h1>
      
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
        @foreach($news as $news)
           <div class="col">
           
            <div class="card">
            
                    <img src="/img/news/{{ $news->image }}" width="200" height="200" alt="" class="card-img-top">
                    <div class="card-body text-hidden">
                        <h5 class="card-title ">{{ $news->title }}</h5>
                        <h6 class="card-date">{{ date('d/m/Y', strtotime($news->created_at)) }}</h6>
                        <p class="card-text">
                            {{ $news->essay }}
                        </p>
                        <a href="#" class="card-button"><button type="button" class="btn btn-primary">Saiba mais</button></a>
                  </div>

             </div>
          
            
        </div>
        @endforeach

        </div>
        
    </div>
  
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>

    </script>
      


@endsection