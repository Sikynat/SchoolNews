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
                    <div class="card-body text-hidden">
                        <h5 class="card-title ">card-title</h5>
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
                    <div class="card-body text-hidden">
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
                    <div class="card-body text-hidden">
                        <h5 class="card-title">card-title</h5>
                        <h6 class="card-subtile">subtitle</h6>
                        <p class="card-text ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda natus delectus dolorem earum numquam exercitationem illum. Laudantium voluptas veniam natus eveniet optio tempora dicta nam, rerum, sint ad earum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, est deleniti eius perspiciatis commodi voluptatem numquam ea laborum doloribus sit perferendis architecto nobis eum corrupti unde, explicabo quisquam similique quibusdam!  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat expedita cumque laboriosam quasi illum illo similique natus atque. Aliquam blanditiis facere sit itaque fugiat omnis laboriosam maiores natus enim velit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa amet ab tempore odio labore consequatur iste aut architecto? Et libero iusto ipsum commodi, doloremque illo eligendi a facilis quibusdam nesciunt. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga voluptas delectus dolore aspernatur doloribus assumenda incidunt illum officiis dolores aliquid reprehenderit temporibus alias, recusandae tempore optio qui quo, voluptatem necessitatibus.
                        </p>
                        <a href="javascript:void();" class="card-button"><button type="button" class="btn btn-primary">Saiba mais</button></a>
                  </div>

             </div>

            
        </div>
        
    </div>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>

    </script>
      
@endforeach

@endsection