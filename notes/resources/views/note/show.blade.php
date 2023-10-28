@extends('layouts.main')
@section('content')
<div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Заметка</th>
            </tr>
        </thead>
        <tbody>  
            <tr><td><b>Дата</b></td></tr>
            <tr><td>{{$note->my_date}}</td></tr><br>
            <tr><td><b>Время</b></td></tr>
            <tr><td>{{ substr($note->my_time, 0, 5) }}</td></tr>
            <tr><td><b>Событие</b></td></tr>
            <tr><td>{{$note->event}}</td></tr>
            <tr><td><b>Описание</b></td></tr>
            <tr><td>{{$note->description}}</td></tr>
        </tbody>
    </table>
    <div>
        <form action="{{route('notes.destroy', $note->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    </div>
</div>
@endsection

