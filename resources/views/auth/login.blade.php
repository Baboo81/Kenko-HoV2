@extends('layouts.app')

@section('title', 'Kenko-Ho | Connexion')

@section('meta_description', 'Connexion à votre espace Kenko-Ho')

@section('content')

    <section class="login my-5">
        <div class="container">
            <div class="row">

                {{-- Messages flash --}}
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="row align-items-center justify-content-center g-5">
                    <div class="blocTitleHo">
                        <h1 class="text-center fontViolet fs-2 my-3">
                            Connexion à votre espace
                        </h1>
                        <div class="line my-2"><span></span></div>
                    </div>
                    {{-- Formulaire login --}}
                    <div class="col-8">

                        <form class="rounded-4 shadow-lg p-4 bg-light" method="POST" action="{{ route('login') }}">
                            <div class="text-center mb-4">

                                <img src="{{ asset('assets/img/logo/Tsukiboshimon.svg') }}" alt="Logo Kenko-Ho"
                                    class="img-fluid" style="max-height:180px;">

                            </div>

                            @csrf

                            {{-- Email --}}
                            <div class="mb-3">

                                <label for="email" class="form-label fw-semibold">
                                    Adresse email
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>

                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autofocus>

                                </div>

                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Password --}}
                            <div class="mb-3">

                                <label for="password" class="form-label fw-semibold">
                                    Mot de passe
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required>

                                </div>

                                @error('password')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            {{-- Remember --}}
                            <div class="form-check mb-3">

                                <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                <label class="form-check-label" for="remember">
                                    Se souvenir de moi
                                </label>

                            </div>

                            <div class="text-center my-4">

                                <button type="submit" class="button">
                                    Se connecter
                                </button>

                            </div>

                            @if (Route::has('password.request'))
                                <div class="text-center">

                                    <a href="{{ route('password.request') }}" class="text-decoration-none">
                                        Mot de passe oublié ?
                                    </a>

                                </div>
                            @endif

                        </form>

                        <div class="text-center mt-4">

                            <a href="{{ route('register') }}" class="text-decoration-none">

                                <button class="button" type="button">
                                    Créer un compte
                                </button>

                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
