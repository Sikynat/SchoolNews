@extends('layouts.main')

@section('title', 'Publicar Noticia')

@section('content')



    <div id="news-create-container" class="col-md-6 offset-md-3">
        <h1>Publique Sua Matéria</h1>
      
        <form action="/news" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group p-1">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo Da Matéria">
            </div>
            <div class="form-group p-1">
                <label for="title">Redação</label>
                <textarea class="form-control" name="essay" id="essay" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group p-1">
                <label for="image">Imagem da matéria</label>
              <input type="file" id="image"  name="image" class="from-control-file">
            </div>
            
            <input type="submit" class="btn btn-primary " value="Publicar">
        </form>
        <div>
        <hr>

                <p class="lead">O jornalismo desempenha um papel fundamental na sociedade, funcionando como um pilar da democracia e um canal de informação essencial. A seriedade desse trabalho vai além da simples coleta de dados; trata-se de uma responsabilidade ética e moral em relação ao público. Os jornalistas têm o dever de investigar, apurar e reportar fatos com precisão, assegurando que a verdade prevaleça sobre a desinformação.</br></br>

                Em um mundo repleto de ruídos e opiniões, o compromisso com a verdade é o que distingue o jornalismo de qualidade. A busca incessante por informações fidedignas e imparciais fortalece a confiança da sociedade na mídia, promovendo um ambiente de diálogo e reflexão. Assim, reafirmamos nosso compromisso em entregar notícias que informem, esclareçam e respeitem a integridade da informação.</p>
        </div>
 

    </div>

@endsection