@extends('layouts.main')
@section('content')
    <div>
        <h2>Создание новой заметки</h2>
        <form action="{{route('notes.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="my_date" class="form-label">Введите дату</label>
                <input type="date" class="form-control" id="my_date" name="my_date">
            </div>
            <div class="mb-3">
                <label for="my_time" class="form-label">Введите время</label>
                <input type="time" class="form-control" id="my_time" name="my_time">
            </div>
            <div class="mb-3">
                <label for="event" class="form-label">Введите событие</label>
                <input type="text" class="form-control" id="event" name="event">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Введите описание</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
@endsection