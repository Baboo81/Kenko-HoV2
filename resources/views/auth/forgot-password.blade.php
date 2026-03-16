@extends('layouts.app')

@section('title', 'Réinitialiser le mot de passe | Kenko-Ho')

@section('content')
<section class="forgot-password my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                {{-- Titre --}}
                <h2 class="text-center mb-4">Réinitialiser le mot de passe</h2>
                <div class="card shadow-lg rounded-4 p-4">
                    {{-- Logo --}}
                    <div class="text-center my-4">
                        <img src="{{ asset('assets/img/logo/Tsukiboshimon.svg') }}"
                             alt="Logo du site Kenko-Ho, symbole Tsukiboshimon"
                             height="180">
                    </div>

                    {{-- Description --}}
                    <p class="text-center text-muted mb-4">
                        Si vous avez oublié votre mot de passe, entrez votre email et nous vous enverrons un lien pour en choisir un nouveau.
                    </p>

                    {{-- Messages flash --}}
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                        </div>
                    @endif

                    {{-- Formulaire --}}
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-grid my-4">
                            <button type="submit" class="btn btn-primary">
                                Envoyer le lien de réinitialisation
                            </button>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                <button type="button" class="btn btn-outline-secondary">
                                    Retour à la connexion
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
