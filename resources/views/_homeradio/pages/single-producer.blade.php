@extends('_homeradio.master')
@section('content')
    <div class="single-producer">
        <div class="producer">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-4 col-8">
                        <div class="image-wrapper">
                            <img src="_homeradio/images/producers/photo-1.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="text">
                            <h1 class="section-title">Ειρήνη Λουκά</h1>
                            <span class="smallest-line">Παραγωγός</span>

                            <div class="html-content">
                                <p>
                                    Σπούδασε μάρκετινγκ και διαφήμιση και δούλεψε για δέκα χρόνια στο λογιστικό κομμάτι. Από
                                    μικρή της
                                    άρεσε η
                                    μαγεία του ραδιοφώνου και το θεωρεί το πιο αγαπημένο μέσο έκφρασης των ανθρώπων,
                                    γιατί μιλάει κατευθείαν στην ψυχή.
                                    Αυτή η αγάπη της για τη μουσική, την οδήγησε στο να συνδημιουργήσει το δικό της μουσικό
                                    σπίτι στους
                                    89.1.
                                </p>

                                <p>
                                    Σπούδασε μάρκετινγκ και διαφήμιση και δούλεψε για δέκα χρόνια στο λογιστικό κομμάτι. Από
                                    μικρή της
                                    άρεσε η
                                    μαγεία του ραδιοφώνου και το θεωρεί το πιο αγαπημένο μέσο έκφρασης των ανθρώπων,
                                    γιατί μιλάει κατευθείαν στην ψυχή.
                                    Αυτή η αγάπη της για τη μουσική, την οδήγησε στο να συνδημιουργήσει το δικό της μουσικό
                                    σπίτι στους
                                    89.1.
                                </p>

                                <p>
                                    Σπούδασε μάρκετινγκ και διαφήμιση και δούλεψε για δέκα χρόνια στο λογιστικό κομμάτι. Από
                                    μικρή της
                                    άρεσε η
                                    μαγεία του ραδιοφώνου και το θεωρεί το πιο αγαπημένο μέσο έκφρασης των ανθρώπων,
                                    γιατί μιλάει κατευθείαν στην ψυχή.
                                    Αυτή η αγάπη της για τη μουσική, την οδήγησε στο να συνδημιουργήσει το δικό της μουσικό
                                    σπίτι στους
                                    89.1.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/producers-page" title="Όλοι οι Παραγωγοί" class="button-1 ms-auto d-lg-none">
                    <span>Όλοι οι Παραγωγοί</span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </a>
            </div>
        </div>

        @include('_homeradio.partials.producers-section')
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
