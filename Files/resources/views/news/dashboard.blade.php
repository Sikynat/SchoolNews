@extends('layouts.main')

@section('title', 'home')

@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Minhas Publicações</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-news-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Ultima atualização</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

        
        <tbody>
        @forelse ($news as $news)
            <tr>
                <td scropt="row">{{ $loop->index + 1 }}</td>
               
                <td><a href="/news/{{ $news->id }}">{{ $news->title }}</a></td>
                <td>{{ date('d/m/Y', strtotime($news->updated_at)) }}</td>
                <td>
                    <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>  Editar</a> 
                    <form action="/news/{{ $news->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                    </form>
                </td>

                @empty
                <td>0</td>
                <td>Nenhum Titulo encontrado</td>
                <td>Nenhuma Data econtrada</td>
                <td><a href="/news/create">Publicar</a></td>

            </tr>
            
            <!--
              <div class="">
                   <p>Nenhuma Publicação encontrada</p>
              </div>
              -->

        @endforelse
        </tbody>
        </table>
    </div>

@endsection