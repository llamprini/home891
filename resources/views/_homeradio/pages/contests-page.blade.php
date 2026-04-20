@extends('_homeradio.master')
@section('content')
    <div class="contests-page">
        <div class="container">
            <div class="text center">
                <h1 class="section-title">Competitions</h1>
            </div>

            <div class="all-contests">
                <div class="row">
                @foreach (range(1, 6) as $i)
                    <div class="col-lg-4">
                        @include('_homeradio.partials.components.contest')
                    </div>
                @endforeach
                </div>
            </div>

            {{-- <div class="all-contests">
                @foreach (range(1, 6) as $i)
                    <div class="col-lg-4">
                        <a href="single-contest" title="" class="contest">
                            <div class="expired">Έχει λήξει</div>
                            <div class="top">
                                <div class="image-wrapper">
                                    <img src="_homeradio/images/contest.png" title="" alt="">
                                </div>

                                <h2 class="small-title text-start">Κέρδισε Διπλή Πρόσκληση
                                    για Cinema</h2>
                            </div>

                            <span class="date">23 July 2025 - 20 August 2025</span>
                        </a>
                    </div>
                @endforeach

                @foreach (range(1, 6) as $i)
                    <div class="col-lg-4">
                        @include('_homeradio.partials.components.contest')
                    </div>
                @endforeach
            </div> --}}

            {{-- <section class="contests">
                <div class="active-contests">
                    <h2 class="small-title">Διαγωνισμοί που Τρέχουν Τώρα</h2>

                    <div class="row">
                    </div>
                </div>

                <div class="not-active-contests">
                    <h2 class="small-title">Πρόσφατοι Διαγωνισμοί</h2>

                    <div class="row">
                    </div>
                </div>
            </section> --}}

            <a href="/contests-page" title="Περισσότερα" class="button-1 ms-auto me-auto">
                <span>Περισσότερα</span>
                <div class="circle-button">
                    @include('_homeradio.partials.icons.arrows.button-arrow')
                </div>
            </a>
        </div>
    </div>
@endsection

{{-- @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const now = new Date();

            document.querySelectorAll('.contest').forEach(contest => {
                const dateEl = contest.querySelector('.date');
                if (!dateEl) return;

                const dateText = dateEl.textContent.trim(); // π.χ. "23 July 2025 - 29 July 2025"
                const [startStr, endStr] = dateText.split(' - ');
                const endDate = new Date(endStr);

                // Βρες τον wrapper col-lg-4 (τον γονέα)
                const column = contest.closest('.col-lg-4');

                if (now > endDate) {
                    contest.classList.add('not-active');
                    document.querySelector('.not-active-contests .row').appendChild(column);
                } else {
                    document.querySelector('.active-contests .row').appendChild(column);
                }
            });
        });
    </script>
@endpush --}}
