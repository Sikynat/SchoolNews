@extends('layouts.main')

@section('title', 'home')

@section('content')

@foreach($news as $news)
    <p>{{  $news->title  }} -- {{ $news->essay }} </p>
@endforeach

@endsection