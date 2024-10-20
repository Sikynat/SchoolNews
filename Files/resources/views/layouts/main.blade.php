

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">

    </head>
    <main >
      
           </main>
    <body>

    <header>
        
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Bru Project</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/">Home</a>
                        </li>

                        @auth
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/news/create">Publicar</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/dashboard">Meus Posts</a>
                        </li>

                        <li class="nav-item">
                        <form action="/logout" method="post">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                        </form>
                        @endauth
                       

                        @guest
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="register">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/login">Login</a>
                        </li>
                        @endguest
                    </ul>
                    <form action="/" method="GET" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="search" id="search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                    </div>
                </div>
                </nav>
    </header>

            @yield('content')

           
        <footer class="container-fluid bg-dark text-light py-4">
            <div class="container px-4">
                <div class="row">
                   <div class="col col-lg-4">
                        <h3>Jornal Escolar</h3>
                        <p>Site desenvolvido por: Bruna Dadonas</p>
                        <p>Envolvidos no projeto: Ana Julia, Rafaela, Andriene e Leticia</p>
                       
                   </div>

                 

                   <div class="col col-lg-3">
                    <h3>Curso</h3>
                        <p>Técnico Em Administração</p>
                   </div>
                </div>

                <hr>
                        <div>
                            <p>Progect No Name &copy 2024</p>
                        </div>

             
            </div>
          
        </footer>
                    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
                     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
