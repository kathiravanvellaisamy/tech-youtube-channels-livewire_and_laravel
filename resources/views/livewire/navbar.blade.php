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
                    <a wire:navigate class="nav-link active fs-6" aria-current="page" href="/">Home</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active fs-6" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active fs-6" aria-current="page" href="/register">Register</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active fs-6" aria-current="page" href="/youtubers">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link active fs-6" aria-current="page" href="/youtubers/store">Add
                            New</a>
                    </li>
                    <li class="nav-item">
                        <a wire:click="logout" type="button" class="nav-link active fs-6" aria-current="page">Logout</a>
                    </li>
                @endauth
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
