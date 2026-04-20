@extends('_homeradio.master')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="text center">
                <div class="section-title">Let’s Get in Touch</div>
                <div class="html-content">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>
            </div>

            <form action="" method="POST" id="">
                <div class="form-floating">
                    <input type="text" name="name" id="c-name" class="form-control" placeholder="Όνομα" required>
                    <label for="name">Name</label>
                    <small class="invalid-feedback"></small>
                </div>

                <div class="form-floating">
                    <input type="text" name="surname" id="c-surname" class="form-control" placeholder="Surname" required>
                    <label for="surname">Surname</label>
                    <small class="invalid-feedback"></small>
                </div>

                {{-- <div class="form-floating">
                    <input type="text" name="company-name" id="c-company-name" class="form-control"
                        placeholder="Company Name" required>
                    <label for="company-name">Company Name</label>
                    <small class="invalid-feedback"></small>
                </div>

                <div class="form-floating">
                    <input type="text" name="website" id="c-website" class="form-control" placeholder="Website" required>
                    <label for="website">Website</label>
                    <small class="invalid-feedback"></small>
                </div> --}}

                <div class="form-floating">
                    <input type="text" name="email" id="c-email" class="form-control" placeholder="Email" required>
                    <label for="email">Email</label>
                    <small class="invalid-feedback"></small>
                </div>

                <div class="form-floating">
                    <input type="text" name="phone" id="c-phone" class="form-control" placeholder="Phone" required>
                    <label for="name">Phone</label>
                    <small class="invalid-feedback"></small>
                </div>

                <div class="form-floating message">
                    <textarea class="form-control" name="c-message" id="c-message" placeholder="Message"></textarea>
                    <label for="c-message">Message</label>
                </div>

                <div class="contact-terms">
                    <label class="checkbox">
                        <input type="checkbox" required />

                        <span>Συμφωνώ με τους <a href="/terms-page" title="Όρους Χρήσης">Όρους Χρήσης</a></span>
                    </label>

                    <button type="submit" class="button-1">
                        <span>Send</span>
                        <div class="circle-button">
                            @include('_homeradio.partials.icons.arrows.button-arrow')
                        </div>
                    </button>
                </div>
            </form>

            <section class="map-section">
                <div class="position-relative">
                    <div class="map">
                        <div id="google-map"></div>
                    </div>
                    @include('_homeradio.partials.contact-us-info')
                </div>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?v=beta&key=AIzaSyBRc1QTdw4p42OVAnxVHtEcofHtTmUAA5I&loading=async&callback=initMap">
    </script>

    <script>
        let map; // κάνουμε global reference για να το αλλάζουμε μετά

        async function initMap() {
            const centerCords = {
                lat: 38.46250,
                lng: 23.61253
            };

            const locations = [{
                cords: centerCords,
                name: "Our Office"
            }];

            const {
                Map,
                InfoWindow
            } = await google.maps.importLibrary("maps");
            const infoWindow = new InfoWindow();

            // DARK THEME
            const darkMapStyles = [{
                    elementType: "geometry",
                    stylers: [{
                        color: "#212121"
                    }]
                },
                {
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                },
                {
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#757575"
                    }]
                },
                {
                    elementType: "labels.text.stroke",
                    stylers: [{
                        color: "#212121"
                    }]
                },
                {
                    featureType: "administrative",
                    elementType: "geometry",
                    stylers: [{
                        color: "#757575"
                    }]
                },
                {
                    featureType: "administrative.country",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#9e9e9e"
                    }]
                },
                {
                    featureType: "administrative.land_parcel",
                    stylers: [{
                        visibility: "off"
                    }]
                },
                {
                    featureType: "administrative.locality",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#bdbdbd"
                    }]
                },
                {
                    featureType: "poi",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#757575"
                    }]
                },
                {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{
                        color: "#181818"
                    }]
                },
                {
                    featureType: "poi.park",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#616161"
                    }]
                },
                {
                    featureType: "poi.park",
                    elementType: "labels.text.stroke",
                    stylers: [{
                        color: "#1b1b1b"
                    }]
                },
                {
                    featureType: "road",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#2c2c2c"
                    }]
                },
                {
                    featureType: "road",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#8a8a8a"
                    }]
                },
                {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [{
                        color: "#373737"
                    }]
                },
                {
                    featureType: "road.highway",
                    elementType: "geometry",
                    stylers: [{
                        color: "#3c3c3c"
                    }]
                },
                {
                    featureType: "road.highway.controlled_access",
                    elementType: "geometry",
                    stylers: [{
                        color: "#4e4e4e"
                    }]
                },
                {
                    featureType: "road.local",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#616161"
                    }]
                },
                {
                    featureType: "transit",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#757575"
                    }]
                },
                {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{
                        color: "#000000"
                    }]
                },
                {
                    featureType: "water",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#3d3d3d"
                    }]
                }
            ];

            // LIGHT THEME
            const lightMapStyles = [{
                    elementType: "geometry",
                    stylers: [{
                        color: "#e0e0e0"
                    }]
                }, // πιο σκούρο γκρι bg
                {
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                },
                {
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#555555"
                    }]
                },
                {
                    elementType: "labels.text.stroke",
                    stylers: [{
                        color: "#e0e0e0"
                    }]
                },
                {
                    featureType: "administrative.land_parcel",
                    stylers: [{
                        visibility: "off"
                    }]
                },
                {
                    featureType: "poi",
                    elementType: "geometry",
                    stylers: [{
                        color: "#d6d6d6"
                    }]
                },
                {
                    featureType: "poi",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#666666"
                    }]
                },
                {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{
                        color: "#cfcfcf"
                    }]
                },
                {
                    featureType: "poi.park",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#7a7a7a"
                    }]
                },
                {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [{
                        color: "#f0f0f0"
                    }]
                }, // όχι καθαρό άσπρο
                {
                    featureType: "road.arterial",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#666666"
                    }]
                },
                {
                    featureType: "road.highway",
                    elementType: "geometry",
                    stylers: [{
                        color: "#c7c7c7"
                    }]
                },
                {
                    featureType: "road.highway",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#555555"
                    }]
                },
                {
                    featureType: "road.local",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#777777"
                    }]
                },
                {
                    featureType: "transit.line",
                    elementType: "geometry",
                    stylers: [{
                        color: "#d0d0d0"
                    }]
                },
                {
                    featureType: "transit.station",
                    elementType: "geometry",
                    stylers: [{
                        color: "#d8d8d8"
                    }]
                },
                {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{
                        color: "#b5b5b5"
                    }]
                }, // πιο γκρι νερό
                {
                    featureType: "water",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#777777"
                    }]
                }
            ];


            const html = document.documentElement;
            const currentTheme = html.getAttribute("data-theme");

            const mapOptions = {
                disableDefaultUI: true,
                zoomControl: true,
                streetViewControl: true,
                zoom: 17,
                center: centerCords,
                styles: currentTheme === "light" ? lightMapStyles : darkMapStyles,
            };

            map = new Map(document.getElementById('google-map'), mapOptions);

            // markers
            for (let location of locations) {
                new google.maps.Marker({
                    map: map,
                    position: location.cords,
                    title: location.name
                });
            }

            // === Theme watcher ===
            const observer = new MutationObserver(() => {
                const theme = html.getAttribute("data-theme");
                map.setOptions({
                    styles: theme === "light" ? lightMapStyles : darkMapStyles
                });
            });

            observer.observe(html, {
                attributes: true,
                attributeFilter: ["data-theme"]
            });
        }
    </script>
@endpush
