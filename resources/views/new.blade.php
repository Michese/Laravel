<!doctype html>
<html lang="en">
@include('layouts/head')
<body>
<div class="wrapper">
    @include('layouts/header')

    <main class="main">
        <h1>{{ $new['title'] }}</h1>
        <p class="content">
            {{ $new['content_long'] }}
        </p>
    </main>

    @include('layouts/footer')
</div>
</body>
</html>
