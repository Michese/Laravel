@extends('layouts.main')

@section('content')
    <h1>Добавить новость</h1>
    <form action="{{ route('admin::news::create') }}" method="post">
        @csrf

        @if($errors->has('category'))
            <div class="alert alert-danger">
                @foreach($errors->get('category') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <select name="category" class="form-select" aria-label="Default select example" required>
            <option selected>Выберите категорию новости</option>
            @foreach($categories as $category)
                <option value="{{ $category->category_id }}">{{ $category->title }}</option>
            @endforeach
        </select>

        @if($errors->has('title'))
            <div class="alert alert-danger">
                @foreach($errors->get('title') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">Название</label>
            <input name="title" type="text" class="form-control" id="exampleInputTitle" aria-describedby="titleHelp">
            <div id="titleHelp" class="form-text">Введите название новости.</div>
        </div>

        @if($errors->has('description'))
            <div class="alert alert-danger">
                @foreach($errors->get('description') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="mb-3">
            <label for="inputDescription" class="form-label">Описание новости</label>
            <textarea name="description" class="form-control" aria-label="With textarea"
                      id="inputDescription"></textarea>
        </div>

        @if($errors->has('content'))
            <div class="alert alert-danger">
                @foreach($errors->get('content') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="mb-3">
            <label for="inputText" class="form-label">Текст новости</label>
            <textarea name="content" class="form-control" aria-label="With textarea" id="inputText"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
@endsection
