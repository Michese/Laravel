<!doctype html>
<html lang="en">
@include('layouts/head')
<body>
<div class="wrapper">
    @include('layouts/header')

    <main class="main">
        <h1>Новости</h1>
        <div class="row">

            @foreach ($news as $id => $new)
                <div class="col-sm-6 marginTop">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $new['title'] }}</h5>
                            <p class="card-text">{{ $new['content_short'] }} </p>
                            <a href="/news/item/{{ $id }}" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </main>

    @include('layouts/footer')
</div>
</body>
</html>
