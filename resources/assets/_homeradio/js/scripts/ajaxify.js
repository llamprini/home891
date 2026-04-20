// new Ajaxify({
//     elements: "#main",
//     inline: true,
//     inlineskip: "radioplayer",
//     asyncdef: false,
//     scroll: false,
//     scrolltop: false, // βάλε false εδώ, θα το ελέγξουμε χειροκίνητα
//     cb: function () {
//         console.log("Ajax navigation complete - Reinitializing scripts.");

//         // Reset scroll όσο πιο νωρίς γίνεται
//         if (window.lenis) {
//             window.lenis.scrollTo(0, { immediate: true });
//             const now = performance.now();
//             window.lenis.raf(now);
//             window.lenis.raf(now + 16);
//         } else {
//             window.scrollTo(0, 0);
//         }

//         // Σβήσε αποθηκευμένο scroll state
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
//     },
// });

