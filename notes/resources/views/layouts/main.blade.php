<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Записки</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <header>
    <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{route('notes.index')}}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{route('notes.create')}}">Создание</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mt-5">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>