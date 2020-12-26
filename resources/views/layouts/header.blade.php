<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        @isset ($isHome)
                            <a class="nav-link active" aria-current="page" href="/">Главная</a>
                        @else
                            <a class="nav-link" aria-current="page" href="/">Главная</a>
                        @endisset

                    </li>
                    <li class="nav-item">
                        @isset ($isAbout)
                            <a class="nav-link active" href="/about">О нас</a>
                        @else
                            <a class="nav-link" href="/about">О нас</a>
                        @endisset
                    </li>
                    <li class="nav-item">
                        @isset ($isNews)
                            <a class="nav-link active" href="/news">Новости</a>
                        @else
                            <a class="nav-link" href="/news">Новости</a>
                        @endisset
                    </li>
                    <li class="nav-item">
                        @isset ($isAddNews)
                            <a class="nav-link active" href="/news/add">Добавить новость</a>
                        @else
                            <a class="nav-link" href="/news/add">Добавить новость</a>
                        @endisset
                    </li>
                    <li class="nav-item">
                        @isset ($isAuth)
                            <a class="nav-link active" href="/auth">Войти</a>
                        @else
                            <a class="nav-link" href="/auth">Войти</a>
                        @endisset
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
