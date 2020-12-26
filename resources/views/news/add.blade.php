@extends('layouts.main')

@section('content')
    <h1>Добавить новость</h1>
    <form action="/addNews" method="post">
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">Название</label>
            <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp">
            <div id="titleHelp" class="form-text">Введите название новости.</div>
        </div>

        <div class="mb-3">
            <label for="inputDescription" class="form-label">Описание новости</label>
            <textarea class="form-control" aria-label="With textarea" id="inputDescription"></textarea>
        </div>

        <div class="mb-3">
            <label for="inputText" class="form-label">Текст новости</label>
            <textarea class="form-control" aria-label="With textarea" id="inputText"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
