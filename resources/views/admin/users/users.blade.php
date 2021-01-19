@extends('layouts.main')

@section('content')
    <h1>Новости</h1>
    <div class="row">

        @foreach ($users as $user)
            <form method="post" action="{{ route("admin::users::update") }}"
                  class="col-sm-6 marginTop">
                <input type="hidden" name="id" value="{{ $user->id }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->email }} </p>
                        @if($user->is_admin == 0)
                            <input type="submit" name="operation" value="Удалить" class="btn btn-danger">
                            <input type="submit" name="operation" value="Сделать админом" class="btn btn-success">
                        @endif
                    </div>
                </div>
            </form>
        @endforeach
    </div>
@endsection
