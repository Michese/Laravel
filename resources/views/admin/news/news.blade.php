@extends('layouts.main')

@section('content')
    <h1>Новости</h1>
    <div class="row">

        @foreach ($news as $new)
            <form method="post" action="{{ route("admin::news::delete", ['category_id' => $new->category_id]) }}" class="col-sm-6 marginTop">
                <input type="hidden" name="id" value="{{ $new->news_id }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $new->title }}</h5>
                        <p class="card-text">{{ $new->description }} </p>
                        <a href="{{ route('news::item', ['id' => $new->news_id]) }}" class="btn btn-primary">Подробнее</a>
                        @if(\Auth::user()->hasRole('admin'))
                        <input type="submit" value="Удалить" class="btn btn-danger">
                        @endif
                    </div>
                </div>
            </form>
        @endforeach

    </div>
@endsection
