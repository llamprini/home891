@extends('_homeradio.master')
@section('content')
    <div class="producers-page">
        <div class="container">
            <h1 class="section-title center">Producers</h1>

            <div class="producers">
                <div class="row">
                    @foreach (range(1, 12) as $i)
                        <div class="col-lg-4">
                            <a href="/single-producer" title="producer" class="producer zoom">
                                <div class="image-wrapper">
                                    <img src="_homeradio/images/producers/photo-1.png" alt="">
                                </div>

                                <div class="text">
                                    <div class="top">
                                        <h2 class="section-title">Ειρήνη Λουκά</h2>
                                        <span class="smallest-line">Παραγωγός</span>
                                    </div>

                                    <div class="html-content">
                                        <p>
                                            Σπούδασε μάρκετινγκ και διαφήμιση και δούλεψε για δέκα χρόνια στο λογιστικό
                                            κομμάτι.
                                            Από μικρή της
                                        </p>
                                    </div>

                                    <div class="button-2">Περισσότερα</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const isDesktop = window.matchMedia("(min-width: 992px)").matches;
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
        });
    </script>
@endpush


{{-- <button title="Περισσότεροι Παραγωγοί" class="button-1 me-lg-auto ms-auto">
    <span>Περισσότεροι Παραγωγοί</span>
    <div class="circle-button">
        @include('_homeradio.partials.icons.arrows.button-arrow')
    </div>
</button> --}}
