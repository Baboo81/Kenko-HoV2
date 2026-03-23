@extends('layouts.app')

@section('title', 'Kenko-Ho | Bien-être au naturel')

@section('meta_description', 'FAQ')

@section('content')
    {{-- Div animation : progression de la page --}}
    <div id="scroll-indicator">
        <div class="inner-circle">
            <div class="scroll-arrow"></div>
        </div>
    </div>
    {{-- Div animation : progression de la page END --}}

    <section class="text-center faq">
        <div class="row">
            <div class="faq-container mx-auto mb-5">
                <img src="/assets/img/FAQ/faq.svg" alt="Illustration de personnages absorbés par leurs écrans"
                    class="img-fluid">
            </div>
            <!-- SVG WAVE -->
            <svg class="waveKenkoHoFaq" viewBox="0 0 1440 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" role="img">
                <path d="M0,32 C200,120 400,0 720,48 C1040,96 1240,0 1440,48 L1440 120 L0 120 Z" fill="#bfc1c2"></path>
            </svg>
        </div>


        <div class="container">

            <div class="text-center">
                <div class="blocTitleHo my-5">
                    <h2 class="text-center titleH1 mb-4">
                        {{ $faqData['titles']['main_Title'] }}
                    </h2>
                    <div class="line"><span></span></div>
                </div>
            </div>

            {{-- SECTION KENKO HO --}}
            <div class="faqContent my-5">
                <h2 class="text-center my-5 fs-1 titleH1 fontViolet">
                    {{ $faqData['titles']['sub_Title2'] ?? '' }}
                </h2>
                <div class="accordion" id="accordionKenkoHo">
                    @foreach ($faqData['kenkoHo'] as $index => $item)
                        @php
                            $headingId = 'headingHo' . $index;
                            $collapseId = 'collapseHo' . $index;
                        @endphp
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{ $headingId }}">
                                <button class="accordion-button collapsed accordion-title" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}" aria-expanded="false"
                                    aria-controls="{{ $collapseId }}">
                                    {!! $item['question'] !!}
                                </button>
                            </h2>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse"
                                aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionKenkoHo">
                                <div class="accordion-body">
                                    {!! $item['answer'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- SECTION CONTACT --}}
            <div class="my-5 p-5">
                <h2 class="text-center my-5 fs-1 titleH1 fontViolet">
                    {{ $faqData['contact']['title'] ?? '' }}
                </h2>

                <section class="rounded-5 p-5 d-flex flex-wrap justify-content-center align-items-center contactUs">
                    {{-- Illustration --}}
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="{{ $faqData['contact']['illustration']['src'] }}"
                            alt="{{ $faqData['contact']['illustration']['alt'] }}" class="img-fluid">
                    </div>

                    {{-- Méthodes de contact --}}
                    <div class="col-md-6 text-center">
                        @foreach ($faqData['contact']['methods'] as $method)
                            <p>
                                {{ $method['label'] }}
                            </p>

                            @if ($method['type'] === 'button')
                                <button onclick="window.location.href='{{ $method['action'] }}';"
                                    class="button my-4">{{ $method['text'] }}</button>
                            @elseif ($method['type'] === 'email')
                                <a href="mailto:{{ $method['value'] }}">
                                    <img class="icons my-1" src="{{ $method['icon']['src'] }}"
                                        alt="{{ $method['icon']['alt'] }}"
                                        style="height: {{ $method['icon']['height'] }};">
                                </a>
                            @elseif ($method['type'] === 'phone')
                                <div class="d-flex justify-content-center align-items-center gap-3 my-3">
                                    <img class="icons" src="{{ $method['icon']['src'] }}"
                                        alt="{{ $method['icon']['alt'] }}"
                                        style="height: {{ $method['icon']['height'] }};">
                                    <p class="m-0 fs-5">{{ $method['value'] }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
