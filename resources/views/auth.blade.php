<!doctype html>
<html lang="en">
@include('layouts/head')
<body>
<div class="wrapper">
    @include('layouts/header')

    <main class="main">
        <h1>Добавить новость</h1>
        <form action="/auth" method="post">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </main>

    @include('layouts/footer')
</div>
</body>
</html>
