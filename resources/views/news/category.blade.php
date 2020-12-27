@extends('layouts.main')

@section('content')
    <h1>Новости</h1>
    <div class="row">
        <div class="list-group">
        @foreach ($newsCategory as $item)
                <a href="{{ route('news::index', ['category_id' => $item['category_id']]) }}" class="list-group-item list-group-item-active">{{ $item['title'] }}</a>
        @endforeach
        </div>
    </div>
@endsection
