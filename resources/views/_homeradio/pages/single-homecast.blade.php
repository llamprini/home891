@extends('_homeradio.master')
@section('content')
    <div class="single-homecast">
        <div class="container">
            <div class="text">
                <h1 class="section-title">
                    Can we Really Ever <br> Write Our Own Stories?
                </h1>
                <div class="html-content">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown Lorem Ipsum is simply dummy
                        text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown
                    </p>
                </div>
            </div>

            <div class="popular-podcasts">
                <div class="homecast">
                    <div class="content">
                        <div class="image-wrapper">
                            <img src="_homeradio/images/homecast.jpg" alt="">
                        </div>

                        <div class="text mb-0">
                            <div class="info d-lg-flex flex-lg-column">
                                <span>Episode 21</span>
                                <span class="d-lg-none episode">|</span>
                                <span class="smallest-line">20 Ιουνίου, 2025</span>
                            </div>

                            <div class="paragraph-title">Can We Really Ever Write Our Own Stories?</div>

                            <button class="listen">
                                @include('_homeradio.partials.icons.extra.mic')
                                Ακούστε
                            </button>

                            <div class="social-media-wrapper mt-auto">
                                Share Track
                                @include('_homeradio.partials.social-media')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="paragraph-title all-episodes">All Episodes</div>

            @include('_homeradio.partials.components.homecast-swiper')

            <button class="button-1 ms-auto me-auto">
                <span>Περισσότερα</span>
                <div class="circle-button">
                    @include('_homeradio.partials.icons.arrows.button-arrow')
                </div>
            </button>
        </div>
    </div>
@endsection
