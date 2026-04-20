@extends('_homeradio.master')
@section('content')
    <div class="homepage overflow-x-hidden">
        <div class="background-gradient">
            <section class="hero">
                <div class="container">
                    <div class="image-wrapper">
                        <img src="_homeradio/images/hero.jpg" title="" alt="">
                        <div class="text">
                            @include('_homeradio.partials.icons.extra.hero-text')
                            <div class="html-content">
                                <p>
                                    Ακου αγαπημένες μουσικές επιλογές και εκπομπές live </br> από όπου και αν είσαι.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="advertisement">
                <div class="container">
                    <div class="ad">
                        <img src="_homeradio/images/add.png" alt="Ad Banner">
                    </div>
                </div>
            </section>

            <section class="on-air-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="single-producer" title="Ζωή Καραπαζβάντη" class="on-air zoom left">
                                <div class="position-relative">
                                    <div class="image-wrapper circle">
                                        <img src="{{ asset('_homeradio/images/on-air/photo-1.png') }}" title=""
                                            alt="">
                                    </div>

                                    <div class="text">
                                        <span class="section-title">On Air Now</span>
                                        <div class="paragraph-title">Ζωή Καραπαζβάντη</div>
                                        <span class="time">20:00-22:00</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-6">
                            <a href="single-producer" title="Ειρήνη Λουκά" class="on-air zoom right">
                                <div class="image-wrapper circle overflow-visible">
                                    <div class="element roundandround"></div>
                                </div>
                                <div class="text">
                                    <div class="content d-flex flex-column justify-content-between h-100">
                                        <div class="image-wrapper">
                                            <img src="_homeradio/images/on-air/photo-2.png" title="" alt="">
                                        </div>


                                        <div class="text-content">
                                            <div class="section-title">Coming Up Next</div>
                                            <span class="paragraph-title">Ειρήνη Λουκά</span>
                                            <span class="time">20:00-22:00</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <a href="/programme-page" title="Δες το Πρόγραμμα" class="button-1 ms-auto me-auto">
                        <span>Δες το Πρόγραμμα</span>
                        <div class="circle-button">
                            @include('_homeradio.partials.icons.arrows.button-arrow')
                        </div>
                    </a>
                </div>
            </section>
        </div>

        <section class="advertisement">
            <div class="container">
                <div class="ad">
                    <img src="_homeradio/images/add.png" alt="Ad Banner">
                </div>
            </div>
        </section>

        <section class="hometracks-section zoom-element">
            <div class="container">
                <div class="text nav">
                    <h2 class="section-title">
                        @include('_homeradio.partials.icons.header.small-logo')
                        Home Tracks
                    </h2>
                    <div class="swiper-navigation">
                        <button class="left">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                        <button class="right">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                    </div>
                </div>

                <div class="hometracks-swiper">
                    <div class="hometracks-cards">
                        <div class="hometrack">
                            <a class="image-wrapper">
                                <img src="{{ asset('_homeradio/images/hometrack.png') }}" alt="">
                            </a>

                            <div class="details">
                                <a href="/single-hometrack" title="" class="text">
                                    <h3 class="section-title">Delirious
                                        <span class="paragraph-title">(I Break Horse Edit)</span>
                                    </h3>
                                    <span>Susanne Sundford - Ten Love Songs</span>
                                </a>

                                <div class="social-media-wrapper">
                                    Share Track
                                    @include('_homeradio.partials.social-media')
                                </div>
                            </div>
                        </div>

                        <div class="hometrack">
                            <a class="image-wrapper">
                                <img src="{{ asset('_homeradio/images/hometrack.png') }}" alt="">
                            </a>

                            <div class="details">
                                <a href="/single-hometrack" title="" class="text">
                                    <h3 class="section-title">Delirious
                                        <span class="paragraph-title">(I Break Horse Edit)</span>
                                    </h3>
                                    <span>Susanne Sundford - Ten Love Songs</span>
                                </a>

                                <div class="social-media-wrapper">
                                    Share Track
                                    @include('_homeradio.partials.social-media')
                                </div>
                            </div>
                        </div>

                        <div class="hometrack">
                            <a class="image-wrapper">
                                <img src="{{ asset('_homeradio/images/hometrack.png') }}" alt="">
                            </a>

                            <div class="details">
                                <a href="/single-hometrack" title="" class="text">
                                    <h3 class="section-title">Delirious
                                        <span class="paragraph-title">(I Break Horse Edit)</span>
                                    </h3>
                                    <span>Susanne Sundford - Ten Love Songs</span>
                                </a>

                                <div class="social-media-wrapper">
                                    Share Track
                                    @include('_homeradio.partials.social-media')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/hometrack-page" title="Όλα τα Home Tracks" class="button-1 ms-auto me-auto">
                    <span>Όλα τα Home Tracks</span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </a>
            </div>
        </section>

        <section class="calendar-section zoom-element">
            <div class="container">
                <h2 class="section-title justify-content-center">
                    @include('_homeradio.partials.icons.header.small-logo')
                    Agenda
                </h2>

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

                    <div class="row">
                        <div class="col-lg-4">
                            <a href="/single-calendar-event" title="" class="image-wrapper">
                                <img src="_homeradio/images/calendar/photo-1.png" title="" alt="">
                            </a>
                        </div>

                        <div class="col-lg-4">
                            <a href="/single-calendar-event" title="" class="image-wrapper">
                                <img src="_homeradio/images/calendar/photo-2.png" title="" alt="">
                            </a>
                        </div>

                        <div class="col-lg-4">
                            <a href="/single-calendar-event" title="" class="image-wrapper">
                                <img src="_homeradio/images/calendar/photo-3.png" title="" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <a href="/calendar-page" title="Δείτε το Πρόγραμμα" class="button-1 ms-auto me-auto">
                    <span>Ανακαλύψτε Περισσότερα</span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </a>
            </div>
        </section>

        @include('_homeradio.partials.components.programme')


        <section class="contests-section">
            <div class="container">
                <div class="contests">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="few-words">
                                <div class="text">
                                    <h2 class="section-title">
                                        @include('_homeradio.partials.icons.header.small-logo')
                                        Competitions
                                    </h2>
                                    <div class="pin-wrapper">
                                        @include('_homeradio.partials.icons.extra.pin')

                                        <div class="html-content">
                                            <p>
                                                Ανακάλυψε τους τρέχοντες διαγωνισμούς μας εδώ και μείνε συντονισμένος για
                                                ό,τι πιο
                                                ξεχωριστό
                                                έρχεται...
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-navigation d-xl-flex d-none">
                                    <button class="left">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                                    <button class="right">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8">
                            <div class="swiper contests-swiper">
                                <div class="swiper-wrapper">
                                    @foreach (range(1, 4) as $i)
                                        <div class="swiper-slide zoom">
                                            @include('_homeradio.partials.components.contest')
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a href="/contests-page" title="Όλοι οι Διαγωνισμοί" class="button-1 ms-auto">
                    <span>Όλοι οι Διαγωνισμοί</span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </a>
            </div>
        </section>

        <section class="homecast-section">
            <div class="container">
                <div class="text nav">
                    <h2 class="section-title me-lg-auto ms-lg-auto">
                        @include('_homeradio.partials.icons.header.small-logo')
                        Homecast
                    </h2>
                    <div class="swiper-navigation d-lg-none">
                        <button class="left">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                        <button class="right">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                    </div>
                </div>

                @include('_homeradio.partials.components.homecast-swiper')

                <a href="/homecast-page" title="Ακούστε τα Homecast" class="button-1 ms-auto">
                    <span>Ακούστε τα Homecast</span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </a>
            </div>
        </section>

        <section class="about-us-section">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <h2 class="section-title">
                    @include('_homeradio.partials.icons.header.small-logo')
                    About Us
                </h2>

                <div class="html-content text-center">
                    <p>
                        O Home Radio 89.1 είναι ένα ζωντανό, διαδραστικό ραδιόφωνο με σκοπό να συνοδεύει, να συντροφεύει, να
                        ψυχαγωγεί και να ενημερώνει τους ακροατές, αλλά και να προωθεί νέα μουσική καθώς και ακούσματα από
                        όλες τις τελευταίες δεκαετίες, προσεχτικά επιλεγμένα από τους ραδιοφωνικούς παραγωγούς του σταθμού
                    </p>

                    <p>
                        O Home Radio 89.1 είναι ένα ζωντανό, διαδραστικό ραδιόφωνο με σκοπό να συνοδεύει, να συντροφεύει, να
                        ψυχαγωγεί και να ενημερώνει τους ακροατές, αλλά και να προωθεί νέα μουσική καθώς και ακούσματα από
                        όλες τις τελευταίες δεκαετίες, προσεχτικά επιλεγμένα από τους ραδιοφωνικούς παραγωγούς του σταθμού
                    </p>
                </div>

                <a href="/about-us-page" title="Διαβάστε για Εμάς" class="button-1">
                    <span>Διαβάστε για Εμάς</span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </a>
            </div>
        </section>

        @include('_homeradio.partials.producers-section')
    </div>
@endsection



@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const isDesktop = window.matchMedia("(min-width: 992px)").matches;

            const swiper = new Swiper(".contests-swiper", {
                modules: [SwiperModules.Navigation],
                spaceBetween: 20,

                navigation: {
                    nextEl: ".contests .swiper-navigation .right",
                    prevEl: ".contests .swiper-navigation .left",
                },


                breakpoints: {
                    200: {
                        slidesPerView: 1,
                    },

                    700: {
                        slidesPerView: 2,
                    },
                },
            });



            //mousehover
            if (isDesktop) {
                const msections = document.querySelectorAll('.mouse-hover-section');

                msections.forEach((section) => {
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

            //homecast
            if (isDesktop) {
                $(".homecast-section .content").removeClass("swiper");
                $(".mb-wrapper").removeClass("swiper-wrapper");
                $(".homecast").removeClass("swiper-slide");
            } else {

                $(".homecast-section .content").addClass("swiper");
                $(".mb-wrapper").addClass("swiper-wrapper");
                $(".homecast").addClass("swiper-slide");

                new Swiper(".homecast-swiper", {
                    modules: [SwiperModules.Navigation],

                    navigation: {
                        nextEl: ".homecast-section .swiper-navigation .right",
                        prevEl: ".homecast-section .swiper-navigation .left",
                    },
                    slidesPerView: 1,
                    spaceBetween: 15,
                });
            }

            if (isDesktop) {
                $(".hometracks-swiper").removeClass("swiper");
                $(".hometracks-cards").removeClass("swiper-wrapper");
                $(".hometrack").removeClass("swiper-slide");

                const cards = document.querySelectorAll(".hometracks-section .hometrack");
                const btnRight = document.querySelector(".hometracks-section .swiper-navigation .right");
                const btnLeft = document.querySelector(".hometracks-section .swiper-navigation .left");

                let current = 0;

                function updateClasses() {
                    cards.forEach(card => card.classList.remove("active", "prev", "next"));

                    let prevIndex = current - 1 < 0 ? cards.length - 1 : current - 1;
                    let nextIndex = current + 1 >= cards.length ? 0 : current + 1;

                    cards[current].classList.add("active");
                    cards[prevIndex].classList.add("prev");
                    cards[nextIndex].classList.add("next");

                    // φρόντισε η active να είναι πάντα μπροστά
                    cards.forEach(card => card.style.zIndex = 1);
                    cards[current].style.zIndex = 2;
                }


                btnRight.addEventListener("click", () => {
                    current = (current + 1) % cards.length;
                    updateClasses();
                });

                btnLeft.addEventListener("click", () => {
                    current = (current - 1 + cards.length) % cards.length;
                    updateClasses();
                });

                // αρχικό setup
                updateClasses();
            } else {
                $(".hometracks-swiper").addClass("swiper");
                $(".hometracks-cards").addClass("swiper-wrapper");
                $(".hometracks-section .hometrack").addClass("swiper-slide");

                new Swiper(".hometracks-swiper", {
                    modules: [SwiperModules.Navigation],

                    navigation: {
                        nextEl: ".hometracks-section .swiper-navigation .right",
                        prevEl: ".hometracks-section .swiper-navigation .left",
                    },

                    slidesPerView: 1,
                    spaceBetween: 20,
                });
            }
        });
    </script>
@endpush
