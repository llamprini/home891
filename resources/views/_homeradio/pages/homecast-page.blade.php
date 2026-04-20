@extends('_homeradio.master')
@section('content')
    <div class="homecast-page">
        <div class="container">
            <div class="text center">
                <h1 class="section-title">Homecast</h1>
                <div class="html-content">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>
            </div>

            <div class="popular-podcasts">
                <h2 class="paragraph-title popular">Popular Podcasts</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="/single-homecast" title="" class="homecast zoom">
                            <div class="info d-lg-none">
                                <span>Episode 21</span>
                                <span class="d-lg-none episode">|</span>
                                <span class="smallest-line">20 Ιουνίου, 2025</span>
                            </div>

                            <div class="content">
                                <div class="image-wrapper">
                                    <img src="_homeradio/images/homecast.jpg" alt="">
                                </div>

                                <div class="text">
                                    <div class="info d-none d-lg-flex">
                                        <span class="small-title">Ep. 21</span>
                                        <span class="smallest-line">20 Ιουνίου, 2025</span>
                                    </div>

                                    <div class="paragraph-title">Can We Really Ever Write Our Own Stories?</div>

                                    <button class="listen">
                                        @include('_homeradio.partials.icons.extra.mic')
                                        Ακούστε
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6">
                        <a href="/single-homecast" title="" class="homecast zoom">
                            <div class="info d-lg-none">
                                <span>Episode 21</span>
                                <span class="d-lg-none episode">|</span>
                                <span class="smallest-line">20 Ιουνίου, 2025</span>
                            </div>

                            <div class="content">
                                <div class="image-wrapper">
                                    <img src="_homeradio/images/homecast.jpg" alt="">
                                </div>

                                <div class="text">
                                    <div class="info d-none d-lg-flex">
                                        <span class="small-title">Ep. 21</span>
                                        <span class="smallest-line">20 Ιουνίου, 2025</span>
                                    </div>

                                    <div class="paragraph-title">Can We Really Ever Write Our Own Stories?</div>

                                    <button class="listen">
                                        @include('_homeradio.partials.icons.extra.mic')
                                        Ακούστε
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <div class="all-homecasts diff-tabs">
                <div class="section-navigation">
                    <div class="dropdown">
                        <button class="active"><span>Μουσική</span></button>
                        <button><span>Κοινωνικά</span></button>
                        <button><span>Celebrities</span></button>
                        <button><span>Μουσική</span></button>
                    </div>
                </div>

                <div class="tabs">
                    <div class="tab active" data-tab="0">
                        @include('_homeradio.partials.components.homecast-swiper')
                    </div>

                    <div class="tab" data-tab="1">
                        @include('_homeradio.partials.components.homecast-swiper')
                    </div>

                    <div class="tab" data-tab="2">
                        @include('_homeradio.partials.components.homecast-swiper')
                    </div>

                    <div class="tab" data-tab="3">
                        @include('_homeradio.partials.components.homecast-swiper')
                    </div>

                    <div class="tab" data-tab="4">
                        @include('_homeradio.partials.components.homecast-swiper')
                    </div>
                </div>

                <button class="button-1 ms-auto me-auto">
                    <span>Περισσότερα</span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </button>
            </div>
        </div>
    </div>
@endsection



@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.diff-tabs').forEach(container => {
                const navButtons = container.querySelectorAll('.dropdown button');
                const contents = container.querySelectorAll('.tab');

                navButtons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        navButtons.forEach(btn => btn.classList.remove('active'));
                        contents.forEach(content => content.classList.remove('active'));

                        button.classList.add('active');
                        const targetContent = container.querySelector(
                            `.tab[data-tab="${index}"]`);
                        if (targetContent) {
                            targetContent.classList.add('active');
                        }
                    });
                });
            });
        });
    </script>
@endpush
