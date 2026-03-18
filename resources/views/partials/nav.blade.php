<nav class="navbar navbar-expand-lg fixed-top">
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
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('qui-suis-je') ? 'active' : '' }}" href="{{ route('qui-suis-je') }}">Qui suis-je ?</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact.show') ? 'active' : '' }}" href="{{ route('contact.show') }}">Contact</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Thèmes
                    </a>
                    <ul class="dropdown-menu rounded-4">
                        <li><a class="dropdown-item" href="{{ route('themes.bases') }}">Bases nutritionnelles</a></li>
                        <li><a class="dropdown-item" href="{{ route('themes.cuisine') }}">Cuisine</a></li>
                        <li><a class="dropdown-item" href="{{ route('themes.dixHuiles') }}">Les 10 huiles de base</a></li>
                        <li><a class="dropdown-item" href="{{ route('themes.douleurs') }}">La douleur</a></li>
                        <li><a class="dropdown-item" href="{{ route('thmes.emotions') }}">Les émotions</a></li>
                        <li><a class="dropdown-item" href="{{ route('themes.enfants') }}">Les enfants</a></li>
                        <li><a class="dropdown-item" href="{{ route('themes.microbiome') }}">Le microbiome</a></li>
                        <li><a class="dropdown-item" href="{{ route('themes.peau') }}">La peau</a></li>
                        <li><a class="dropdown-item" href="{{ route('themes.sommeil') }}">Le sommeil</a></li>
                        <li><a class="dropdown-item" href="{{ route('themes.reiki') }}">Le Reiki</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('home') }}#commentBox">Votre avis compte</a></li>
                    </ul>
                </li>
            </ul>

                {{-- MENU DROITE AUTH --}}
            <ul class="navbar-nav ms-auto">

                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Connexion</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Inscription</a>
                    </li>
                @endguest


                @auth

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">

                        <form method="POST" action="{{ route('logout') }}" class="btn-logout">
                            @csrf
                            <button class="button" type="submit">
                                Déconnexion
                            </button>
                        </form>

                    </li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
