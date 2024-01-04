<header>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"><img src="/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px;">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Feed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Formar Banda</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Contrate Musicos
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Banda</a></li>
                                    <li><a class="dropdown-item" href="#">Artista Solo</a></li>
                                    <li><a class="dropdown-item" href="#">Ambos</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <form class="pesquisar" role="search">
                            <div class="input-group" id="pesquisar">
                                <input type="text" class="form-control  btn-outline-secondary" placeholder="" aria-label="" aria-describedby="">
                                <span class="input-group-text " id="basic-addon2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                    </svg>
                                </span>
                            </div>
                        </form>

                        <button type="button" class="btn btn-outline-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                        </button>

                        <div class="linha"></div>

                        @if (auth()->check())
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Meu Anúncio</a></li>
                                <li><a class="dropdown-item" href="#">Configurações e Privacidade</a></li>
                                <li><a class="dropdown-item" href="#">Meu Plano</a></li>
                                <li><a class="dropdown-item" href="#">Ajuda e Suporte</a></li>
                                <li><a class="dropdown-item" href="{{route('login.destroy')}}">Sair</a></li>
                            </ul>
                        </div>
                        @else
                        <a class="btn btn-outline-dark" id="btn-login" href="/login">Login</a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>