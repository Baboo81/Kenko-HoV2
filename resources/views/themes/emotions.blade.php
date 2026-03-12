@extends('layouts.app')

@section('title', 'Kenko-Ho | Les émotions & les HE')

@section('meta_description', 'Conseils bien-être, huiles essentielles et santé naturelle.')

@section('content')
<section class="emotions py-5">
    <div class="container">
        <div class="text-center mb-5">
            <div class="blocTitleEmotions my-5">
                <h2 class="text-muted">{{ $emotionsData['title'] }}</h2>
                <div class="line my-2"><span></span></div>
            </div>
        </div>

        <div class="box rounded-5 p-5 my-5">
            <div class="row align-items-center">

                {{-- IMAGE : en premier sur mobile & tablette, en second sur desktop --}}
                <div class="col-md-6 my-3 text-center order-1 order-md-1 order-lg-2">
                    <img class="img-fluid rounded-4"
                         src="{{ $emotionsData['image']['src'] }}"
                         alt="{{ $emotionsData['image']['alt'] }}">
                </div>

                {{-- TEXTE : après l'image sur mobile & tablette, avant l'image sur desktop --}}
                <article class="col-md-6 text-center order-2 order-md-2 order-lg-1">
                    @foreach ($emotionsData['intro'] as $paragraph)
                        <p class="text-muted">{{ $paragraph }}</p>
                    @endforeach

                    <div class="text-center my-4">
                        <h3>{{ $emotionsData['guide_title'] }}</h3>
                    </div>

                    <p class="text-muted">{{ $emotionsData['guide_text'] }}</p>
                </article>

            </div>

            <div class="text-center my-5">
                <a href="{{ $emotionsData['pdf']['path'] }}"
                   download="{{ $emotionsData['pdf']['filename'] }}">
                    <button class="button">Télécharger le PDF</button>
                </a>
            </div>
        </div>

        <div class="text-center mt-5">
            <button onclick="window.location.href='/';" class="button">
                Retourner vers Kenko-Ho
            </button>
        </div>
    </div>
</section>
@endsection
