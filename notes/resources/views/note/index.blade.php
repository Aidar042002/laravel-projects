@extends('layouts.main')
@section('content')
<div>
    <h2>Список заметок</h2>
    <div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Время</th>
                <th>Событие</th>
                <th>Описание</th>
                <th>Переход</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->my_date}}</td>
                    <td>{{ substr($note->my_time, 0, 5) }}</td>
                    <td>{{ $note->event}}</td>
                    <td>{{ $note->description}}</td>
                    <td><a href="{{route('notes.show', $note->id)}}">Перейти</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection
