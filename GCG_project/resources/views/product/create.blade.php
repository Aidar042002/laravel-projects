<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="bg-dark text-white h-100">
    <div class="container">
        <h2>Добавление продукта</h2>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label for="article">Article:</label>
                <input type="text" class="form-control" id="article" name="article">
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="available">Доступен</option>
                    <option value="unavailable">Недоступен</option>
                </select>
            </div>

            <span>Атрибуты:</span>
            <div id="metaForm">
            <div id="properties-container"></div>

                <button type="button" id="add-property">+Добавить</button>
            </div>

            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>

    <a href="{{route('products.index')}}" class="btn btn-link position-absolute top-0 end-0 m-3"
        style="color: white; text-decoration: none;">
        <i class="fas fa-times" style="font-size: 24px;"></i>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        let container = document.getElementById('properties-container');
        let addButton = document.getElementById('add-property');

        addButton.addEventListener('click', function () {
            let newRow = document.createElement('div');
            newRow.className = 'row';

            newRow.innerHTML = `
                <div class="col-md-2">
                    <input type="text" name="data[${container.children.length}][key]" class="form-control" value="">
                </div>
                <div class="col-md-4">
                    <input type="text" name="data[${container.children.length}][value]" class="form-control" value="">
                </div>
            `;

            container.appendChild(newRow);
        });
    });
    </script>

</body>

</html>
