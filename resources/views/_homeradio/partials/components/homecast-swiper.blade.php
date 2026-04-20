<div class="homecast-swiper">
    <div class="mb-wrapper">
        @foreach (range(1, 4) as $i)
            @include('_homeradio.partials.components.homecast')
        @endforeach
    </div>
</div>
