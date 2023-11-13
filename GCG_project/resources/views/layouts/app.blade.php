<!DOCTYPE html>
<html>
<head>
    <title>App</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="container-fluid">
        <div class="row">
            @include('layouts.sidebar')
            <div class="col-10 d-flex flex-column">
                @include('layouts.navbar')
                <div class="content bg-light flex-grow-1">
                    Content
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
