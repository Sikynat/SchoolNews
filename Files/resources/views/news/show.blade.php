@extends('layouts.main')

@section('title', $news->title)

@section('content')

<div class="container">
    <h1>{{ $news->title }}</h1>
        <figure class="figure">
             <img src="/img/news/{{ $news->image }}"  width="400"  class="figure-img img-fluid rounded" alt="...">
         <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
    </figure>

    <div>
      <p class="lead" > {!! nl2br(e($news->essay)) !!}</p>
    </div>
   
</div>



@endsection