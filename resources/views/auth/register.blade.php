@extends('layouts.app')

@section('title', 'Kenko-Ho | Inscription')

@section('meta_description', 'Créer un compte Kenko-Ho')

@section('content')

    <section class="contact my-5">

        <div class="container">

            <h1 class="text-center text-muted mb-5 titleH1 fs-2">
                Créer votre compte
            </h1>

            <div class="row align-items-center g-5">

                {{-- Formulaire --}}

                <div class="col-md-6 col-12">

                    <form class="rounded-4 shadow-lg p-4 bg-light" method="POST" action="{{ route('register') }}">

                        @csrf

                        {{-- Logo --}}

                        <div class="text-center mb-4">

                            <img src="{{ asset('assets/img/logo/Tsukiboshimon.svg') }}" alt="Logo Kenko-Ho"
                                style="max-height:180px;">

                            <p class="text-muted mt-2">
                                Rejoignez l'univers Kenko-Ho
                            </p>

                        </div>

                        {{-- Nom --}}

                        <div class="mb-3">

                            <label for="name" class="form-label fw-semibold">
                                Nom
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>

                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autofocus>

                            </div>

                            @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

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
                                    value="{{ old('email') }}" required>

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
                                    class="form-control @error('password') is-invalid @enderror" name="password" required>

                            </div>

                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- Confirmation password --}}

                        <div class="mb-3">

                            <label for="password-confirm" class="form-label fw-semibold">
                                Confirmer le mot de passe
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-shield-lock"></i>
                                </span>

                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>

                            </div>

                        </div>

                        <div class="text-center my-4">

                            <button type="submit" class="button">
                                Créer mon compte
                            </button>

                        </div>

                    </form>

                    <div class="text-center mt-4">

                        <a href="{{ route('login') }}" class="text-decoration-none">

                            <button class="button" type="button">
                                J'ai déjà un compte
                            </button>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
