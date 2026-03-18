@extends('layouts.app')

@section('title', 'Kenko-Ho | Réinitialisation du mot de passe')

@section('content')

<section class="register my-5">
    <div class="container">
        <div class="row align-items-center justify-content-center g-5">

            {{-- Title --}}
            <div class="blocTitleHo my-5">
                <h1 class="text-center fontViolet fs-2">
                    Réinitialisation du mot de passe
                </h1>
                <div class="line my-2"><span></span></div>
            </div>

            <div class="col-md-6 col-12">

                <form class="rounded-4 shadow-lg p-4 bg-light" method="POST" action="{{ route('password.store') }}">
                    @csrf

                    {{-- Token --}}
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email', $request->email) }}" required autofocus>
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
                            Nouveau mot de passe
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password" required>
                        </div>

                        @error('password')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-semibold">
                            Confirmer le mot de passe
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-shield-lock"></i>
                            </span>

                            <input id="password_confirmation" type="password"
                                class="form-control"
                                name="password_confirmation" required>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <div class="text-center my-4">
                        <button type="submit" class="button">
                            Réinitialiser le mot de passe
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</section>

@endsection
