<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($menu as $item)
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route($item['alias'])}}">
                            {{$item['title']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
