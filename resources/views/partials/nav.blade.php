<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Código Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="row w-100">
                <div class="col-3 d-flex justify-content-center">
                    <div class="{{ request()->routeIs('home') ? 'activo' : '' }}">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Inicio</a>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="{{ request()->routeIs('nosotros') ? 'activo' : '' }}">
                        <a class="nav-link text-white" href="{{ route('nosotros') }}">Nosotros</a>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="{{ request()->routeIs('servicios*') ? 'activo' : '' }}">
                        <a class="nav-link text-white" href="{{ route('servicios') }}">Servicios</a>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center">
                    <div class="{{ request()->routeIs('contacto') ? 'activo' : '' }}">
                        <a class="nav-link text-white" href="{{ route('contacto') }}">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>