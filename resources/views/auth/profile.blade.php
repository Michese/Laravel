@extends('layouts.main')

@section('content')
    <h1>Профиль</h1>
    <form action="{{ route('auth::profile::update') }}" method="post">
        @csrf
        @if($errors->has('name'))
            <div class="alert alert-danger">
                @foreach($errors->get('name') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Имя</label>
            <div class="col-sm-10">
                <input name="name" type="text" class="form-control" value="{{ Auth::user()->name }}">
            </div>
        </div>

        @if($errors->has('email'))
            <div class="alert alert-danger">
                @foreach($errors->get('email') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" value="{{ Auth::user()->email }}">
            </div>
        </div>

        @if($errors->has('password'))
            <div class="alert alert-danger">
                @foreach($errors->get('password') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Новый пароль</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control">
            </div>
        </div>

        @if($errors->has('current_password'))
            <div class="alert alert-danger">
                @foreach($errors->get('current_password') as $error)
                    <p style="margin-bottom: 0;">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @if(request()->session()->has('errorMessage'))
            <div class="alert alert-danger">
                    <p style="margin-bottom: 0;">{{ request()->session()->get('errorMessage') }}</p>
            </div>
            @endif

        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Текущий пароль</label>
            <div class="col-sm-10">
                <input name="current_password" type="password" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
@endsection
