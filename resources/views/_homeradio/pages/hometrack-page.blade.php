@extends('_homeradio.master')
@section('content')
    <div class="hometrack-page">
        <div class="container">
            <h1 class="section-title center">Home Tracks</h1>

            <div class="all-hometracks">
                <div class="row">
                    @foreach (range(1, 12) as $i)
                        <div class="col-lg-3">
                            <a href="/single-hometrack" title="" class="hometrack-box zoom">
                                <div class="image-wrapper">
                                    <img src="_homeradio/images/hometrack-page.png" title="" alt="">
                                </div>

                                <div class="bottom">
                                    <span>August ‘25 Favourites</span>
                                    <div class="circle-button">
                                        @include('_homeradio.partials.icons.arrows.button-arrow')
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
