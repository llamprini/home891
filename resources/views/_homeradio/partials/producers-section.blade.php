<section class="producers-section overflow-x-hidden">
    <div class="container">
        <h2 class="section-title center">
            Producers
        </h2>

        <div class="producers  mouse-hover-section">
            <div class="mouse-hover">
                <div class="content">
                    <div class="icon">
                        @include('_homeradio.partials.icons.extra.mouse-hover-2')
                    </div>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </div>
            </div>

            <div class="swiper producers-swiper">
                <div class="swiper-wrapper">
                    @foreach (range(1, 4) as $i)
                        <div class="swiper-slide zoom">
                            <a href="/single-producer" title="Ευαγγελία Σαμαρτζή" class="producer">
                                <div class="image-wrapper">
                                    <img src="_homeradio/images/homecast.jpg" title="Ευαγγελία Σαμαρτζή" alt="">
                                </div>
                                <h3 class="producer-name">Ζωή Καραπαζβάντη</h3>
                            </a>
                        </div>
                    @endforeach

                    <div class="swiper-slide zoom">
                        <a href="/single-producer" title="Ζωή Καραπαζβάντη" class="producer">
                            <div class="image-wrapper">
                                <img src="_homeradio/images/homecast.jpg" title="Ευαγγελία Σαμαρτζή" alt="">
                            </div>
                            <h3 class="producer-name">Ζωή Καραπαζβάντη</h3>
                        </a>
                    </div>

                    <div class="swiper-slide zoom">
                        <a href="/single-producer" title="Ζωή Καραπαζβάντη" class="producer">
                            <div class="image-wrapper">
                                <img src="_homeradio/images/homecast.jpg" title="Ευαγγελία Σαμαρτζή" alt="">
                            </div>
                            <h3 class="producer-name">Ζωή Καραπαζβάντη</h3>
                        </a>
                    </div>

                    <div class="swiper-slide zoom">
                        <a href="/single-producer" title="Ζωή Καραπαζβάντη" class="producer">
                            <div class="image-wrapper">
                                <img src="_homeradio/images/homecast.jpg" title="Ευαγγελία Σαμαρτζή" alt="">
                            </div>
                            <h3 class="producer-name">Ζωή Καραπαζβάντη</h3>
                        </a>
                    </div>

                    <div class="swiper-slide zoom">
                        <a href="/single-producer" title="Ζωή Καραπαζβάντη" class="producer">
                            <div class="image-wrapper">
                                <img src="_homeradio/images/homecast.jpg" title="Ευαγγελία Σαμαρτζή" alt="">
                            </div>
                            <h3 class="producer-name">Ζωή Καραπαζβάντη</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="swiper-navigation d-lg-none justify-content-center">
                <button class="left">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                <button class="right">@include('_homeradio.partials.icons.extra.arrow-right')</button>
            </div>
        </div>
    </div>
</section>


@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // document.querySelectorAll('.producer-name').forEach(el => {
            //     const words = el.textContent.split(' ');
            //     el.innerHTML = words.map(word => `<span style="display:block">${word}</span>`).join('');
            // });

            new Swiper(".producers-swiper", {
                modules: [SwiperModules.Navigation],

                navigation: {
                    nextEl: ".producers .swiper-navigation .right",
                    prevEl: ".producers .swiper-navigation .left",
                },

                slidesPerView: 'auto',
                loop: true,
                centeredSlides: true,
            });
        });
    </script>
@endpush
