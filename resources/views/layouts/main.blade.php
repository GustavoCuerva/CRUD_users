<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <title>CRUD Users - @yield('title')</title>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('index') }}">CRUD Users</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('user.create') }}">Cadastrar</a>
                    </li>
                    </ul>

                    <form class="form-inline" action="" method="GET">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" />
                        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form> 
                </div>
                
            </nav>
        </header>

        <main class="container pt-3 pb-3">
            <div class="text-center mt-5">
                <h1>@yield('title_page')</h1>
                @if(session('msg'))
                    <p>{{ session('msg') }}</p>
                @endif
            </div>
                @yield('content')
        </main>

        <footer class="d-flex flex-wrap justify-content-between align-items-center bg-dark  py-3 border-top text-light">
            <p class="col-md-4 mb-0 text-muted">&copy; 2022 Gustavo Cuerva</p>
        
            <ul class="nav col-md-4 m-auto">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cadastrar</a></li>
            </ul>
            <form class="form-inline mr-2" action="" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" />
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
            </form> 
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        @yield('scripts')
    </body>
</html>