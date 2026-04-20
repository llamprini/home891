<header class="fixed-top">
    <div class="container">
        <div class="content">
            <div>
                <a href="/" title="Πίσω στην αρχική σελίδα" class="header-logo">
                    @include('_homeradio.partials.icons.header.logo')
                </a>
            </div>

            <div class="navigation-wrapper" data-lenis-prevent>
                <div class="container ps-xl-0 pe-xl-0">
                    <div class="navigation">
                        {{-- <div class="row"> --}}
                        {{-- <div class="col-lg-5"> --}}
                        <nav>
                            <a href="/" title="" class="nav-item">Home</a>
                            <a href="/calendar-page" title="" class="nav-item">Agenda</a>
                            <div class="select d-none d-xl-block">
                                <button class="nav-item">On Air
                                    @include('_homeradio.partials.icons.extra.dropdown')
                                </button>
                                <div class="dropdown">
                                    <a href="/hometrack-page" title="Home Tracks" class="nav-item">Home Tracks</a>
                                    <a href="/programme-page" title="" class="nav-item">Programme</a>
                                    <a href="/producers-page" title="" class="nav-item">Producers</a>
                                    <a href="/homecast-page" title="Homecast" class="nav-item">Homecast</a>
                                </div>
                            </div>
                            <a href="/hometrack-page" title="Home Tracks" class="nav-item d-xl-none">Home Tracks</a>
                            <a href="/programme-page" title="" class="nav-item d-xl-none">Programme</a>
                            <a href="/producers-page" title="" class="nav-item d-xl-none">Producers</a>
                            <a href="/about-us-page" title="" class="nav-item">About</a>
                            <a href="/contact-page" title="" class="nav-item">Contact</a>
                            <a href="/homecast-page" title="Homecast" class="nav-item d-xl-none">Homecast</a>
                            <a href="/contests-page" title="Competitions" class="nav-item">Competitions</a>
                        </nav>
                        {{-- </div> --}}
                        {{-- <div class="col-lg-5"> --}}
                        <div class="contact-us-header d-xl-none">
                            @include('_homeradio.partials.contact-us-info')
                        </div>


                        <a href="/contact-page" title="Live Message" class="button-1 ms-auto me-auto d-lg-none mt-auto">
                            <span>Live Message</span>
                            <div class="circle-button">
                                @include('_homeradio.partials.icons.arrows.button-arrow')
                            </div>
                        </a>
                        {{-- </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>

            <div class="buttons">
                <button class="theme-button">@include('_homeradio.partials.icons.theme')</button>

                <a href="/contact-page" title="Επικοινωνία" class="button-1 d-none d-lg-inline-flex">
                    <span>
                        Live Message
                    </span>
                    <div class="circle-button">
                        @include('_homeradio.partials.icons.arrows.button-arrow')
                    </div>
                </a>

                <button class="menu-button d-xl-none">
                    @include('_homeradio.partials.icons.header.menu-button')
                </button>
            </div>
        </div>
    </div>
</header>
