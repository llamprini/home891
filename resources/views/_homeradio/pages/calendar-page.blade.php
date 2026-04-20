@extends('_homeradio.master')
@section('content')
    <div class="calendar-page">
        <div class="calendar-hero dark-bg">
            <div class="hero-content">
                <div class="container">
                    <div class="position-relative">
                        <div class="calendar-page-swiper swiper">
                            <div class="swiper-wrapper">
                                @foreach (range(1, 4) as $i)
                                    <div class="swiper-slide">
                                        <a href="/single-calendar-event" title="" class="single-event zoom">
                                            <div class="image-wrapper">
                                                <img src="_homeradio/images/agenda/image{{ $i }}.png"
                                                    alt="event image {{ $i }}">
                                            </div>

                                            <div class="single-event-info">
                                                <div class="paragraph-title">
                                                    @include('_homeradio.partials.icons.extra.calendar-month')
                                                    13 Ιουνίου 2025
                                                </div>

                                                <div class="paragraph-title">
                                                    @include('_homeradio.partials.icons.extra.pin')
                                                    Bolivar
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-navigation justify-content-end">
                            <button class="left">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                            <button class="right">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="calendar-wrapper">
            <div class="container">
                <h1 class="section-title justify-content-lg-start justify-content-center">Agenda</h1>

                <div class="calendar mouse-hover-section">
                    <div class="mouse-hover">
                        <div class="content">
                            <div class="icon">
                                @include('_homeradio.partials.icons.extra.mouse-hover')
                            </div>
                            <div class="circle-button">
                                @include('_homeradio.partials.icons.arrows.button-arrow')
                            </div>
                        </div>
                    </div>


                    <div class="row movingSection position-relative">
                        @foreach (range(1, 12) as $i)
                            <div class="col-lg-4">
                                <a href="/single-calendar-event" class="calendar-event zoom">
                                    <span class="date">
                                        13
                                        ΙΟΥΝ
                                        2025
                                    </span>

                                    <div class="image-wrapper">
                                        <img src="_homeradio/images/agenda/image{{ $i }}.png"
                                            alt="event image {{ $i }}">
                                    </div>

                                    <div class="event-info">
                                        <div class="paragraph-title">Monolink | Maxi Meraki</div>
                                        <span>
                                            @include('_homeradio.partials.icons.extra.pin')
                                            Bolivar
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                        <div class="clear-circle moving-element first">
                            <div class="position-relative"></div>
                        </div>

                        <div class="clear-circle moving-element second">
                            <div class="position-relative"></div>
                        </div>

                        <div class="clear-circle moving-element third">
                            <div class="position-relative"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <a href="/contact-page" title="Επικοινωνία" class="button-1 me-auto ms-auto">
            <span>Ανακαλύψτε Περισσότερα</span>
            <div class="circle-button">
                @include('_homeradio.partials.icons.arrows.button-arrow')
            </div>
        </a>

        <section class="advertisement">
            <div class="container">
                <div class="ad">
                    <img src="_homeradio/images/add.png" alt="Ad Banner">
                </div>
            </div>
        </section>
    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (window.matchMedia("(min-width: 992px)").matches) {
                const sections = document.querySelectorAll('.mouse-hover-section');

                sections.forEach((section) => {
                    const mousehover = section.querySelector('.mouse-hover');
                    if (!mousehover) return;

                    section.addEventListener('mouseenter', () => {
                        mousehover.style.scale = '1';
                    });

                    section.addEventListener('mousemove', (e) => {
                        const halfSize = mousehover.offsetWidth / 2;
                        mousehover.style.left = `${e.pageX - halfSize}px`;
                        mousehover.style.top = `${e.pageY - halfSize}px`;
                    });

                    section.addEventListener('mouseleave', () => {
                        mousehover.style.scale = '0';
                    });
                });
            }

            const swiper = new Swiper(".calendar-page-swiper", {
                modules: [SwiperModules.Navigation],
                spaceBetween: 20,
                slidesPerView: 1,

                navigation: {
                    nextEl: ".swiper-navigation .right",
                    prevEl: ".swiper-navigation .left",
                },
            });
        });
    </script>
@endpush
