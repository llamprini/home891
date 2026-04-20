<div class="player-wrapper">
    <div class="container">
        <div class="player">
            <span class="playing-now overflow-hidden">
                <span class="pause-icon">
                    <a class="play-pause" href="javascript:void(0)">
                        <div class="circle-button">
                            <img src="_homeradio/images/play.svg" class="smallplaypause" title="" alt="">
                        </div>
                    </a>
                </span>

                <span class="air">ON AIR</span>

                <span class="song-title overflow-hidden">
                    {{-- <script type="text/javascript"
                        src="https://cdn.voscast.com/stats/display.js?key=ecae57dc430fe1faa21168b1fcc70fc7&amp;stats=songtitle"></script> --}}
                    <span>home 89.1 Το ραδιόφωνο είναι παρέα</span>
                </span>
            </span>

            <div class="song-progress">
                @include('_homeradio.partials.icons.extra.song-progress')
            </div>

            @include('_homeradio.partials.volume')
        </div>
    </div>
</div>


@push('scripts')
    <script id="radioplayer">
        document.addEventListener("DOMContentLoaded", () => {

            // ---- Utility functions (global) ----
            window.stopRadio = function() {
                if (window.$radioPlayer && !window.$radioPlayer[0].paused) {
                    window.$radioPlayer[0].pause();
                    window.$playPauseIcon.attr('src', '_homeradio/images/play.svg');
                    window.$listenLiveIcons.eq(0).show();
                    window.$listenLiveIcons.eq(1).hide();
                }
            }

            window.stopTracks = function() {
                if (window.current) {
                    try {
                        window.current.stop();
                        window.current.unload(); // <-- καθαρίζει τον Howl τελείως
                    } catch (e) {
                        console.warn("Error stopping track:", e);
                    }
                    document.querySelector(".hometrack-smallplaypause").src = "/_homeradio/images/play.svg";
                    window.current = null;
                    window.currentIndex = null;
                }
            }

            window.bars = document.querySelectorAll("#visualizer-bars path");
            window.startVisualizer = function() {
                bars.forEach(bar => {
                    const delay = (Math.random() * 0.8).toFixed(2);
                    const duration = (0.9 + Math.random() * 0.6).toFixed(2);
                    bar.style.animation = `smoothWave ${duration}s infinite ease-in-out`;
                    bar.style.animationDelay = `${delay}s`;
                    bar.style.animationPlayState = "running";
                });
            }

            window.stopVisualizer = function() {
                bars.forEach(bar => {
                    bar.style.animationPlayState = "paused";
                });
            }

            // ---- Radio player setup ----
            if (!window.$radioPlayer) {
                window.$radioPlayer = $('<audio>', {
                    id: 'radio-player',
                    preload: 'none',
                    src: 'https://streaming.home891.gr/stream?type=http&nocache=808'
                }).appendTo('body');
            }

            // Only define selectors if they haven't been defined already
            window.$playPauseBtn = window.$playPauseBtn || $('.play-pause .circle-button');
            window.$playPauseIcon = window.$playPauseIcon || $('.smallplaypause');
            window.$listenLiveBtn = window.$listenLiveBtn || $('.listen-live-main-btn');
            window.$listenLiveIcons = window.$listenLiveIcons || window.$listenLiveBtn.find('img');
            window.$muteBtn = window.$muteBtn || $('#mute');
            window.$volumeBar = window.$volumeBar || $('#volume-bar');


            // Function to toggle play/pause
            function togglePlayPause() {
                if (window.$radioPlayer[0].paused) {
                    stopTracks();
                    window.$radioPlayer[0].play();
                    window.$playPauseIcon.attr('src', '_homeradio/images/pause.svg');
                    window.$listenLiveIcons.eq(0).hide();
                    window.$listenLiveIcons.eq(1).show();

                    startVisualizer();
                } else {
                    window.$radioPlayer[0].pause();
                    window.$playPauseIcon.attr('src', '_homeradio/images/play.svg');
                    window.$listenLiveIcons.eq(0).show();
                    window.$listenLiveIcons.eq(1).hide();

                    stopVisualizer();
                }
            }

            // Attach event listeners only if they haven't been attached before
            if (!window.$playPauseBtn.data('eventsAttached')) {
                window.$playPauseBtn.on('click', togglePlayPause);
                window.$listenLiveBtn.on('click', togglePlayPause);
                window.$playPauseBtn.data('eventsAttached', true);
            }

            // Ensure correct initial state
            window.$listenLiveIcons.eq(1).hide(); // Hide pause icon by default

            // Mute/Unmute
            if (!window.$muteBtn.data('eventsAttached')) {
                window.$muteBtn.on('click', function() {
                    const isMuted = !window.$radioPlayer[0].muted;
                    window.$radioPlayer[0].muted = isMuted;
                    $(this).find('img').attr('src', isMuted ?
                        'https://www.zooradio.gr/theme/assets/img/mute.svg' :
                        'https://www.zooradio.gr/theme/assets/img/speaker.svg'
                    );
                });
                window.$muteBtn.data('eventsAttached', true);
            }

            // Volume Control
            if (!window.$volumeBar.data('eventsAttached')) {
                window.$volumeBar.on('input', function() {
                    window.$radioPlayer[0].volume = $(this).val();
                });
                window.$volumeBar.data('eventsAttached', true);
            }



            const songContainer = document.querySelector(".song-title");
            const thisSong = document.querySelector(".song-title > span"); ///na to kaw div an βαλω τιτλο ξανα

            // const text = thisSong.textContent.trim();

            // Δημιούργησε 3 spans με κενό 40px ανάμεσά τους
            // thisSong.innerHTML = Array(3)
            //     .fill(`<span style="margin-right:40px">${text}</span>`)
            //     .join("");

            if (thisSong.scrollWidth > songContainer.clientWidth) {
                thisSong.classList.add("scrolling");
            }
        });
    </script>
@endpush
