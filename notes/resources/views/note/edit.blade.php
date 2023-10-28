@extends('layouts.main')
@section('content')
<div>
        <h2>Обновление заметки</h2>
        <form action="{{route('notes.update', $note->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="my_date" class="form-label">Введите дату</label>
                <input type="date" class="form-control" id="my_date" name="my_date" value="{{$note->my_date}}">
            </div>
            <div class="mb-3">
                <label for="my_time" class="form-label">Введите время</label>
                <input type="time" class="form-control" id="my_time" name="my_time" value="{{$note->my_time}}">
            </div>
            <div class="mb-3">
                <label for="event" class="form-label">Введите событие</label>
                <input type="text" class="form-control" id="event" name="event" value="{{$note->event}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Введите описание</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$note->description}}">
            </div>
            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
</div>
@endsection