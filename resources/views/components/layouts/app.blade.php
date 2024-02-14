<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Tech Youtubers' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body style="font-family: 'Ubuntu', sans-serif !important; letter-spacing: 1px">
    <nav class="navbar navbar-dark  navbar-expand-lg bg-dark">
        <div class="container">
            <a wire:navigate class="navbar-brand fs-2 d-flex align-content-center flex-wrap gap-2" href="/">
                <i class="bi bi-youtube"></i> <span>Youtubers</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active fs-5" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active fs-5" aria-current="page"
                            href="/youtubers">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active fs-5" aria-current="page" href="/youtubers/store">Add
                            New</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active fs-5" aria-current="page" href="/logout">Logout</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-3 mb-3">
        {{ $slot }}
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
