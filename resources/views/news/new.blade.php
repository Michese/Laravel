@extends('layouts.main')

@section('content')
    <h1>{{ $new['title'] }}</h1>
    <p class="content">
        {{ $new['content_long'] }}
    </p>
@endsection
