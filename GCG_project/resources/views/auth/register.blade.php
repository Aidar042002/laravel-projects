<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    @vite(['resources/js/app.js'])
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-secondary">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Регистрация</h5>
                        <form action="{{route('register.save')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">ФИО</label>
                                <input type="name" class="form-control" name="name" id="name" placeholder="Введите ваше ФИО">
                            </div>
                            <div class="form-group">
                                <label for="email">Электронная почта</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Введите вашу почту">
                            </div>
                            <div class="form-group">
                                <label for="password">Пароль</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Подтвердите пароль</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Повторите пароль">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>