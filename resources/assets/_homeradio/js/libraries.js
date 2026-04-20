new Ajaxify({
    elements: "#main",
    inline: true,
    inlineskip: "radioplayer",
    asyncdef: false,
    scroll: false,
    scrolltop: false,
    cb: function () {
        console.log("Ajax navigation complete - Reinitializing scripts.");

        if (window.lenis) {
            window.lenis.scrollTo(0, { immediate: true });
            const now = performance.now();
            window.lenis.raf(now);
            window.lenis.raf(now + 16);
        } else {
            window.scrollTo(0, 0);
        }

        if (window.Ajaxify && Ajaxify.state) {
            Ajaxify.state.scrollY = 0;
            Ajaxify.state.scrollX = 0;
        }
        if (history.state && typeof history.state === "object") {
            history.replaceState(
                { ...history.state, scrollY: 0, scrollX: 0 },
                "",
                location.href
            );
        }

        if (!window.$radioPlayer) {
            window.$radioPlayer = new RadioPlayer();
        }

        // ✅ Re-init μόνο για movingSection
        reInitMovingSections();
    },
});






import $ from "jquery";

import * as SwiperModules from "swiper/modules";
import Swiper from "swiper";

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollSmoother } from "gsap/ScrollSmoother";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);

Object.assign(window, {
    // jQuery
    $,
    jQuery: $,

    // Swiper
    Swiper,
    SwiperModules,

    // Gsap
    gsap,
    ScrollTrigger,
    ScrollSmoother,
    ScrollToPlugin,
});








// new Ajaxify({
//     elements: "#main",
//     inline: true,
//     inlineskip: "radioplayer",
//     asyncdef: false,
//     scroll: false,
//     scrolltop: false,
//     cb: function () {
//         console.log("Ajax navigation complete - Reinitializing scripts.");

//         if (window.lenis) {
//             window.lenis.scrollTo(0, { immediate: true });
//             const now = performance.now();
//             window.lenis.raf(now);
//             window.lenis.raf(now + 16);
//         } else {
//             window.scrollTo(0, 0);
//         }

//         if (window.Ajaxify && Ajaxify.state) {
//             Ajaxify.state.scrollY = 0;
//             Ajaxify.state.scrollX = 0;
//         }
//         if (history.state && typeof history.state === "object") {
//             history.replaceState(
//                 { ...history.state, scrollY: 0, scrollX: 0 },
//                 "",
//                 location.href
//             );
//         }

//         if (!window.$radioPlayer) {
//             window.$radioPlayer = new RadioPlayer();
//         }



//         if (window.ScrollTrigger) {
//             ScrollTrigger.getAll().forEach(trigger => {
//                 if (trigger.trigger && trigger.trigger.classList.contains("movingSection")) {
//                     trigger.kill();
//                 }
//             });
//         }

//         // ξανατρέχει για όλα
//         document.querySelectorAll(".move").forEach(initMoveSection);

//         ScrollTrigger.refresh();
//     },
// });
