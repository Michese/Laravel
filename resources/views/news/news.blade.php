@extends('layouts.main')

@section('content')
    <h1>Новости</h1>
    <div class="row">

        @foreach ($news as $new)
            <div class="col-sm-6 marginTop">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $new['title'] }}</h5>
                        <p class="card-text">{{ $new['description'] }} </p>
                        <a href="{{ route('news::item', ['id' => $new['news_id']]) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
