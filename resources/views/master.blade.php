<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News API Test</title>

        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/general">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/business">Business</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/technology">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/sports">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/entertainment">Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/science">Science</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

    </body>
</html>
