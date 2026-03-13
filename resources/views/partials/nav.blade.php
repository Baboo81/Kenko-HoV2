<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo/Tsukiboshimon.svg') }}" alt="Logo du site Kenko-Ho, ce symbole s'appel : Tsukiboshimon" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Qui suis-je ?</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Thèmes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Bases nutritionnelles</a></li>
                        <li><a class="dropdown-item" href="#">Cuisine</a></li>
                        <li><a class="dropdown-item" href="#">Les 10 huiles de base</a></li>
                        <li><a class="dropdown-item" href="#">La douleur</a></li>
                        <li><a class="dropdown-item" href="#">Les émotions</a></li>
                        <li><a class="dropdown-item" href="#">Les enfants</a></li>
                        <li><a class="dropdown-item" href="#">Le microbiome</a></li>
                        <li><a class="dropdown-item" href="#">La peau</a></li>
                        <li><a class="dropdown-item" href="#">Le sommeil</a></li>
                        <li><a class="dropdown-item" href="#">Le Reiki</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Votre avis compte</a></li>
                    </ul>
                </li>
            </ul>

                {{-- MENU DROITE AUTH --}}
            <ul class="navbar-nav ms-auto">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                    </li>
                @endguest


                @auth

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="nav-link btn btn-link" type="submit">
                                Déconnexion
                            </button>
                        </form>

                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
