@extends('_homeradio.master')
@section('content')
    <div class="single-calendar-event">
        <div class="calendar-hero dark-bg">
            <div class="hero-content">
                <div class="container">
                    <div class="single-event">
                        <div class="image-wrapper">
                            <img src="_homeradio/images/agenda/image2.png" title=""
                                alt="">
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
                    </div>
                </div>
            </div>
        </div>

        <div class="text">
            <div class="container">
                <h2 class="paragraph-title">Details</h2>
                <div class="html-content">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown Lorem Ipsum is simply
                        dummy text of the priLorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown
                    </p>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown Lorem Ipsum is simply dummy text
                    </p>

                    <p>
                        of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.
                    </p>
                </div>
            </div>
        </div>


        <div class="related-tracks">
            <div class="container">
                <div class="section-title center">More Tracks</div>
                <div class="related-tracks-swiper swiper">
                    <div class="swiper-wrapper">
                        @foreach (range(1, 5) as $i)
                            <div class="swiper-slide zoom">
                                <a href="/single-calendar-event" class="calendar-event">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const isDesktop = window.matchMedia("(min-width: 992px)").matches;

            if (isDesktop) {
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


            const swiper = new Swiper(".related-tracks-swiper", {
                modules: [SwiperModules.Navigation],
                spaceBetween: 20,
                slidesPerView: 3,


                breakpoints: {
                    200: {
                        slidesPerView: 1,
                    },

                    800: {
                        slidesPerView: 2,
                    },

                    1000: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>
@endpush
