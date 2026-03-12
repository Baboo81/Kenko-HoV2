@extends('layouts.app')

@section('title', 'Kenko-Ho | Le Reiki')

@section('meta_description', 'Conseils bien-être, huiles essentielles et santé naturelle.')

@section('content')
    <section class="mainSection">
        <div class="container">
            {{-- Titre principal --}}
            <div class="row">
                <div class="text-center">
                    <div class="mainTitleContent blocTitleHo my-5">
                        <h2 class="text-muted text-center mb-4">{{ $reikiData['title'] }}</h2>
                        <div class="line"><span></span></div>
                    </div>
                </div>
            </div>

            {{-- Première partie : Qu'est-ce que le Reiki ? --}}
            <div class="row">
                <div class="col-md-12 my-5">
                    <div class="box rounded-5 p-5 my-5">
                        <div class="row align-items-center">
                            {{-- IMAGE EN PREMIER SUR MOBILE/TABLETTE --}}
                            <div class="col-md-6 order-1 order-lg-2 text-center">
                                <img class="img-fluid rounded-0 shadow-none reikiImg"
                                     src="{{ $reikiData['images']['intro'] }}"
                                     alt="{{ $reikiData['images']['alt_intro'] }}"
                                     style="object-fit: cover;">
                            </div>

                            {{-- TEXTE EN DEUXIÈME SUR MOBILE/TABLETTE, PREMIER SUR DESKTOP --}}
                            <article class="col-md-6 order-2 order-lg-1">
                                <h3 class="text-center my-4">{{ $reikiData['intro']['title'] }}</h3>

                                @foreach ($reikiData['intro']['paragraphs'] as $paragraph)
                                    <article class="my-3">
                                        <p class="text-muted text-center mb-3">{{ $paragraph }}</p>
                                    </article>
                                @endforeach

                                <ul class="my-5">
                                    @foreach ($reikiData['intro']['precepts'] as $precept)
                                        <li class="my-2">{{ $precept }}</li>
                                    @endforeach
                                </ul>

                                <div class="text-center my-4">
                                    <h3>{{ $reikiData['history']['title'] }}</h3>
                                </div>

                                @foreach ($reikiData['history']['paragraphs'] as $paragraph)
                                    <p class="text-muted mb-3">{{ $paragraph }}</p>
                                @endforeach
                            </article>
                        </div>

                        {{-- Deuxième partie : Séance de soin --}}
                        <div class="row mt-5 align-items-center">
                            {{-- IMAGE EN PREMIER SUR MOBILE/TABLETTE --}}
                            <div class="col-md-6 order-1 order-lg-2 text-center">
                                <img class="img-fluid rounded-4"
                                     src="{{ $reikiData['images']['session'] }}"
                                     alt="{{ $reikiData['images']['alt_session'] }}">
                            </div>

                            {{-- TEXTE EN DEUXIÈME SUR MOBILE/TABLETTE, PREMIER SUR DESKTOP --}}
                            <article class="col-md-6 order-2 order-lg-1 text-center">
                                <h3 class="text-center my-4">{{ $reikiData['session']['title'] }}</h3>

                                @foreach ($reikiData['session']['paragraphs'] as $paragraph)
                                    <p class="text-muted text-center">{{ $paragraph }}</p>
                                @endforeach

                                <p class="fw-bold my-2">{{ $reikiData['session']['warning'] }}</p>

                                <div class="text-center my-4">
                                    <h3>{{ $reikiData['session']['price_title'] }}</h3>
                                </div>

                                <p class="text-muted text-center mb-3">{{ $reikiData['session']['price'] }}</p>
                            </article>
                        </div>
                    </div>

                    {{-- Bouton retour --}}
                    <div class="text-center mt-auto">
                        <button onclick="window.location.href='/';" class="button">
                            Retourner vers Kenko-Ho
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
