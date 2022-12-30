
<nav class="navbar navbar-expand-lg navbar-light" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="me-3" src="{{ asset('logopoli.png') }}" alt="pnp" width="50px"/>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item px-2" data-anchor="data-anchor">
                <a class="nav-link  {{ $active === "home" ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item px-2" data-anchor="data-anchor">
                <a class="nav-link  {{ $active === "jurusan" ? 'active' : '' }}" aria-current="page" href="/jurusan">Jurusan</a>
            </li>
            <li class="nav-item px-2" data-anchor="data-anchor">
                <a class="nav-link  {{ $active === "prodi" ? 'active' : '' }}" aria-current="page" href="/prodi">Prodi</a>
            </li>
            </ul>
            
            <div class="text-end">
                <button type="button" class="btn btn-outline-dark order-0 me-2">Login</button>
                <button type="button" class="btn btn-dark">Sign-up</button>
            </div>
        </div>
    </div>
</nav>

