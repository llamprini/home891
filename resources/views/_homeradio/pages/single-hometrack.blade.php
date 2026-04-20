@extends('_homeradio.master')
@section('content')
    @php
        $musicFiles = File::files(public_path('_homeradio/music'));
        $imageFiles = File::files(public_path('_homeradio/images/images-for-music'));

        $imagesMap = [];
        foreach ($imageFiles as $image) {
            $name = pathinfo($image->getFilename(), PATHINFO_FILENAME);
            $imagesMap[$name] = asset('_homeradio/images/images-for-music/' . $image->getFilename());
        }

        $defaultImage = asset('_homeradio/images/images-for-music/homeradio.png');

        $tracks = [];
        foreach ($musicFiles as $file) {
            $title = pathinfo($file->getFilename(), PATHINFO_FILENAME);
            $tracks[] = [
                'title' => $title,
                'artist' => 'Unknown',
                'url' => asset('_homeradio/music/' . $file->getFilename()),
                'image' => $imagesMap[$title] ?? $defaultImage, // το magic εδώ
            ];
        }
    @endphp

    <div class="single-hometrack">
        <div class="hometrack">
            <div class="current-bg change">
                <div class="image-wrapper">
                    <img src="_homeradio/images/images-for-music/Aquamarine.jpg" title="" alt="">
                </div>
            </div>

            <div class="container d-flex flex-column">
                <div class="up">
                    <div class="text center">
                        <h1 class="section-title">
                            Fabruary Home Tracks
                        </h1>
                    </div>

                    <div class="row justify-content-lg-center">
                        <div class="col-lg-5">
                            <div class="image-wrapper change">
                                <img src="_homeradio/images/images-for-music/Aquamarine.jpg" title="" alt="">
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-6 d-flex flex-column justify-content-lg-between row-gap-4">
                            <div class="playlist-wrapper">
                                @foreach (array_chunk(File::files(public_path('_homeradio/music')), 7) as $chunkIndex => $chunk)
                                    <div class="playlist-group {{ $chunkIndex === 0 ? 'active' : '' }}">
                                        <div class="playlist">
                                            @foreach ($chunk as $i => $file)
                                                @php $filename = $file->getFilename(); @endphp
                                                <button onclick="playTrack({{ $i + $chunkIndex * 7 }})">
                                                    <div class="song-title">
                                                        <span class="current-number">{{ $i + 1 + $chunkIndex * 7 }}</span>
                                                        {{ pathinfo($filename, PATHINFO_FILENAME) }}
                                                    </div>
                                                    <div class="minutes">--:--</div>
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="swiper-navigation justify-content-end">
                                <button class="left">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                                <button class="right">@include('_homeradio.partials.icons.extra.arrow-right')</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom hometrack-player">
                    <div class="navigation">
                        <button class="previus-song">
                            @include('_homeradio.partials.icons.hometrack-page.left')
                        </button>

                        <button class="hometrack-play-pause" href="javascript:void(0)">
                            <div class="circle-button">
                                <img src="/_homeradio/images/play.svg" class="hometrack-smallplaypause" title=""
                                    alt="">
                            </div>
                        </button>

                        <button class="next-song">
                            @include('_homeradio.partials.icons.hometrack-page.left')
                        </button>
                    </div>

                    <div class="current-playing">
                        <div class="song">
                            <span class="song-title">
                                <div id="current-title">Aquamarine</div>
                            </span>

                            <div class="song-progress line">
                                <div id="song-progress"></div>
                            </div>

                            <div class="song-info">
                                <span class="artist" id="current-artist">---</span>
                                <span class="minutes" id="current-duration">--:--</span>
                            </div>
                        </div>

                        @include('_homeradio.partials.volume')
                    </div>
                </div>
            </div>
        </div>

        <div class="related-tracks d-lg-block d-none">
            <div class="container">
                <div class="section-title center">More Tracks</div>
                <div class="swiper related-tracks-swiper">
                    <div class="swiper-wrapper">
                        @foreach (range(1, 4) as $i)
                            <div class="swiper-slide">
                                <a href="/single-hometrack" title="" class="hometrack-box zoom">
                                    <div class="image-wrapper">
                                        <img src="_homeradio/images/images-for-music/Aquamarine.jpg" title=""
                                            alt="">
                                    </div>

                                    <div class="bottom">
                                        <div class="song-info d-flex flex-column">
                                            <span>Haze</span>
                                            <span>Anifisa Letyago</span>
                                        </div>

                                        <div class="circle-button">
                                            @include('_homeradio.partials.icons.arrows.button-arrow')
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <a href="/hometrack-page" title="Όλα τα Home Tracks" class="button-1 ms-auto me-lg-0 me-auto">
                    <span>Όλα τα Home Tracks</span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tracks = @json($tracks);

            const playButton = document.querySelector(".hometrack-play-pause");

            // Όταν ο χρήστης κάνει κλικ στο play για πρώτη φορά
            playButton.addEventListener("click", function initPlay() {
                playTrack(0); // παίζει πρώτο track
                playButton.removeEventListener("click", initPlay);
            });

            // Φτιάχνουμε το tracklist δυναμικά
            // const tracks = [
            //     @foreach (File::files(public_path('_homeradio/music')) as $i => $file)
            //         {
            //             title: "{{ pathinfo($file->getFilename(), PATHINFO_FILENAME) }}",
            //             artist: "Unknown",
            //             url: "{{ asset('_homeradio/music/' . $file->getFilename()) }}"
            //         }
            //         @if (!$loop->last)
            //             ,
            //         @endif
            //     @endforeach
            // ];

            let current = null;
            let currentIndex = null;
            let progressInterval = null;

            window.playTrack = function(index) {
                if (current) {
                    current.unload();
                }

                stopRadio();
                         stopVisualizer();

                currentIndex = index;
                current = new Howl({
                    src: [tracks[index].url],
                    html5: true,
                    onplay: updatePlayerUI,
                    onload: function() {
                        const duration = current.duration();
                        document.querySelector("#current-duration").innerText = formatTime(
                            duration);
                    }
                });

                current.play();

                // Κατευθείαν ανανέωση UI
                updatePlayerUI();

                // Start updating progress bar
                clearInterval(progressInterval);
                progressInterval = setInterval(updateProgressBar, 500);
            }

            function togglePlayPausee() {
                if (!current) return;
                const icon = document.querySelector(".hometrack-smallplaypause");
                const playlistSvgs = document.querySelectorAll('.playlist .current-number svg');

                if (current.playing()) {
                    current.pause();
                    icon.src = "/_homeradio/images/play.svg";

                    playlistSvgs.forEach(svg => {
                        if (svg.pauseAnimations) svg.pauseAnimations();
                    });
                } else {
                    stopRadio(); // safety – αν έπαιζε ράδιο
                    stopVisualizer();
                    current.play();
                    icon.src = "/_homeradio/images/pause.svg";

                    // Ξαναρχίζουν όλα τα SVG animations
                    playlistSvgs.forEach(svg => {
                        if (svg.unpauseAnimations) svg.unpauseAnimations();
                    });
                }
            }

            function updatePlayerUI() {
                const track = tracks[currentIndex];

                document.querySelector("#current-title").innerText = tracks[currentIndex].title;
                document.querySelector("#current-artist").innerText = tracks[currentIndex].artist;
                document.querySelector(".hometrack-smallplaypause").src = "/_homeradio/images/pause.svg";

                // Αλλαγή εικόνων
                document.querySelectorAll('.single-hometrack .change img').forEach(img => {
                    img.src = track.image;
                });

                // Ενημέρωση εικονιδίου στα κουμπιά playlist
                document.querySelectorAll('.playlist button').forEach((btn, i) => {
                    const numberSpan = btn.querySelector('.current-number');
                    if (i === currentIndex) {
                        numberSpan.innerHTML = `
<svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="paint0_linear_3278_13532" x1="16.6823" y1="2.39512e-06" x2="-1.16975" y2="5.15692" gradientUnits="userSpaceOnUse">
      <stop stop-color="#DFBD69" />
      <stop offset="1" stop-color="#926F34" />
    </linearGradient>
  </defs>

  <!-- 1η μπάρα (ύψος 12, αρχική θέση 4-16) -->
  <path d="M4 16V4H6V16H4Z" fill="url(#paint0_linear_3278_13532)">
    <animate attributeName="d" dur="1s" repeatCount="indefinite"
      values="
        M4 16V4H6V16H4Z;
        M4 20V0H6V20H4Z;
        M4 16V4H6V16H4Z" />
  </path>

  <!-- 2η μπάρα (ολόκληρη, ύψος 20) -->
  <path d="M8 20V0H10V20H8Z" fill="url(#paint0_linear_3278_13532)">
    <animate attributeName="d" dur="1.3s" repeatCount="indefinite"
      values="
        M8 20V0H10V20H8Z;
        M8 12V8H10V12H8Z;
        M8 20V0H10V20H8Z" />
  </path>

  <!-- 3η μπάρα (ύψος 4, αρχική θέση 8-12) -->
  <path d="M0 12V8H2V12H0Z" fill="url(#paint0_linear_3278_13532)">
    <animate attributeName="d" dur="0.8s" repeatCount="indefinite"
      values="
        M0 12V8H2V12H0Z;
        M0 20V0H2V20H0Z;
        M0 12V8H2V12H0Z" />
  </path>

  <!-- 4η μπάρα (ύψος 12, αρχική θέση 4-16) -->
  <path d="M12 16V4H14V16H12Z" fill="url(#paint0_linear_3278_13532)">
    <animate attributeName="d" dur="1.1s" repeatCount="indefinite"
      values="
        M12 16V4H14V16H12Z;
        M12 20V0H14V20H12Z;
        M12 16V4H14V16H12Z" />
  </path>

  <!-- 5η μπάρα (ύψος 4, αρχική θέση 8-12) -->
  <path d="M16 12V8H18V12H16Z" fill="url(#paint0_linear_3278_13532)">
    <animate attributeName="d" dur="0.9s" repeatCount="indefinite"
      values="
        M16 12V8H18V12H16Z;
        M16 20V0H18V20H16Z;
        M16 12V8H18V12H16Z" />
  </path>
</svg>
                        `;
                    } else {
                        numberSpan.innerText = i + 1;
                    }
                });
            }

            function formatTime(secs) {
                let minutes = Math.floor(secs / 60) || 0;
                let seconds = Math.floor(secs - minutes * 60) || 0;
                return minutes + ":" + (seconds < 7 ? "0" : "") + seconds;
            }

            function updateProgressBar() {
                if (!current) return;
                const progress = (current.seek() / current.duration()) * 100;
                document.querySelector("#song-progress").style.width = progress + "%";
            }

            // Bind μόνο στο hometrack play/pause
            document.querySelector(".hometrack-play-pause").addEventListener("click", togglePlayPausee);

            // Φόρτωση διάρκειας σε playlist
            document.querySelectorAll('.playlist button').forEach((btn, i) => {
                const sound = new Howl({
                    src: [tracks[i].url],
                    html5: true,
                    onload: function() {
                        const duration = sound.duration();
                        btn.querySelector('.minutes').innerText = formatTime(duration);
                    }
                });
            });

            // Πατάω next track
            document.querySelector(".next-song").addEventListener("click", function() {
                if (currentIndex === null) return;
                currentIndex++;
                if (currentIndex >= tracks.length) currentIndex = 0; // loop στο πρώτο
                playTrack(currentIndex);
            });

            // Πατάω previous track
            document.querySelector(".previus-song").addEventListener("click", function() {
                if (currentIndex === null) return;
                currentIndex--;
                if (currentIndex < 0) currentIndex = tracks.length - 1; // loop στο τελευταίο
                playTrack(currentIndex);
            });







            const swiper = new Swiper(".related-tracks-swiper", {
                modules: [SwiperModules.Navigation],
                spaceBetween: 20,
                slidesPerView: 3,

                breakpoints: {
                    200: {
                        slidesPerView: 1,
                    },

                    600: {
                        slidesPerView: 2,
                    },

                    900: {
                        slidesPerView: 3,
                    },

                    1200: {
                        slidesPerView: 4,
                    },
                },
            });



            const groups = document.querySelectorAll(".playlist-group");
            let currentGroup = 0;

            function showGroup(index) {
                groups[currentGroup].classList.remove("active");
                currentGroup = index;
                groups[currentGroup].classList.add("active");
            }

            // Δεξί (επόμενη σελίδα)
            document.querySelector(".swiper-navigation .right").addEventListener("click", function() {
                let next = currentGroup + 1;
                if (next >= groups.length) next = 0; // loop στο πρώτο
                showGroup(next);
            });

            // Αριστερό (προηγούμενη σελίδα)
            document.querySelector(".swiper-navigation .left").addEventListener("click", function() {
                let prev = currentGroup - 1;
                if (prev < 0) prev = groups.length - 1; // loop στο τελευταίο
                showGroup(prev);
            });
        });
    </script>
@endpush
