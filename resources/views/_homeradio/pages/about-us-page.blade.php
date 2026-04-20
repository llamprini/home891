@extends('_homeradio.master')
@section('content')
    <div class="about-us-page movingSection">
        <div class="container">
            <div class="text center">
                <h1 class="section-title">About Us</h1>

                <div class="html-content">
                    <p>
                        O Home Radio 89.1 είναι ένα ζωντανό, διαδραστικό ραδιόφωνο με σκοπό να συνοδεύει, να συντροφεύει, να
                        ψυχαγωγεί και να ενημερώνει τους ακροατές, αλλά και να προωθεί νέα μουσική καθώς και ακούσματα από
                        όλες τις τελευταίες δεκαετίες, προσεχτικά επιλεγμένα από τους ραδιοφωνικούς παραγωγούς του σταθμού
                        οωθεί νέα μουσική καθώς και ακούσματα από όλες τις τελευταίες δεκαετίες, προσεχτικά επιλεγμένα από
                        τους ραδιοφωνικούς παραγωγούς του σταθμού
                    </p>
                </div>
            </div>

            <div class="about">
                @foreach (range(1, 2) as $i)
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="golden-img position-relative">
                                <div class="clear-circle moving-element">
                                    <div class="position-relative"></div>
                                </div>
                                <div class="image-wrapper">
                                    <img src="_homeradio/images/about.jpg" title="" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="text">
                                <h2 class="section-title"> Title </h2>

                                <div class="html-content">
                                    <p>
                                        O Home Radio 89.1 είναι ένα ζωντανό, διαδραστικό ραδιόφωνο με σκοπό να συνοδεύει, να
                                        συντροφεύει, να ψυχαγωγεί και να ενημερώνει τους ακροατές, αλλά και να προωθεί νέα
                                        μουσική
                                        καθώς
                                        και ακούσματα από όλες τις τελευταίες δεκαετίες, προσεχτικά επιλεγμένα από τους
                                        ραδιοφωνικούς
                                        παραγωγούς του σταθμού O Home Radio 89.1 είναι ένα ζωντανό, διαδραστικό ραδιόφωνο με
                                        σκοπό
                                        να
                                        συνοδεύει, να συντροφεύει, να ψυχαγωγεί και να ενημερώνει τους ακροατές, αλλά και να
                                        προωθεί
                                        νέα
                                        μουσική καθώς και ακούσματα από όλες τις τελευταίες δεκαετίες, προσεχτικά επιλεγμένα
                                        από
                                        τους
                                        ραδιοφωνικούς παραγωγούς του σταθμού O Home Radio 89.1 είναι ένα ζωντανό,
                                        διαδραστικό
                                        ραδιόφωνο
                                        με σκοπό να συνοδεύει, να συντροφεύει, να ψυχαγωγεί και να ενημερώνει τους ακροατές,
                                        αλλά
                                        και να
                                        προωθεί νέα.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection




{{-- @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            gsap.fromTo(".ok .image-wrapper img", {
                y: 100,
            }, {
                y: 0,
                opacity: 1,
                duration: 1.5,
                ease: "power3.out",
                stagger: 0.3,
                scrollTrigger: {
                    trigger: ".about-us-page", // όλο το section
                    start: "top 80%", // όταν το section φτάσει στο 80% του viewport
                    markers: true,
                }
            });
        });
    </script>
@endpush --}}
