
import { Howler } from "howler";

const stream = new Howl({
    src: ['https://streaming.home891.gr/stream?type=http&nocache=808'],
    html5: true,
    autoplay: true
});

// Προαιρετικά: κουμπί για start/stop
$('.play-button').on('click', () => {
    if (stream.playing()) {
        stream.pause();
    } else {
        stream.play();
    }
});
