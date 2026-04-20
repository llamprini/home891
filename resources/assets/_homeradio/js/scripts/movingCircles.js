// function initMoveSection(pSection) {
//     const circles = pSection.querySelectorAll(".moving-element");

//     function getBounds() {
//         const rect = pSection.getBoundingClientRect();
//         return {
//             width: rect.width,
//             height: rect.height
//         };
//     }

//     let { width: containerWidth, height: containerHeight } = getBounds();

//     circles.forEach((circle, i) => {
//         const circleRect = circle.getBoundingClientRect();
//         const circleSize = circleRect.width;

//         // custom αρχικές θέσεις
//         let x, y;

//         if (i === 0) {
//             // πρώτο: δεξιά - πάνω
//             x = containerWidth - circleSize;
//             y = 0;
//         } else if (i === 1) {
//             // δεύτερο: αριστερά - στη μέση
//             x = 0;
//             y = (containerHeight - circleSize) / 2;

//         } else {
//             // δεύτερο: αριστερά - στη μέση
//             x = 0;
//             y = containerHeight - circleSize;
//         }

//         // ταχύτητες
//         const speed = {
//             x: i === 0 ? -2 : 2,
//             y: i === 0 ? 2 : -2
//         };

//         function move() {
//             x += speed.x;
//             y += speed.y;

//             // borders collisions
//             if (x <= 0 || x + circleSize >= containerWidth) {
//                 speed.x *= -1;
//                 x = Math.max(0, Math.min(x, containerWidth - circleSize));
//             }

//             if (y <= 0 || y + circleSize >= containerHeight) {
//                 speed.y *= -1;
//                 y = Math.max(0, Math.min(y, containerHeight - circleSize));
//             }

//             gsap.set(circle, { x, y });

//             requestAnimationFrame(move);
//         }

//         // βάλε το circle στην αρχική του θέση
//         gsap.set(circle, { x, y });

//         move();
//     });

//     // responsive update
//     window.addEventListener("resize", () => {
//         const { width, height } = getBounds();
//         containerWidth = width;
//         containerHeight = height;
//     });
// }

// // τρέχεις για όλα τα move sections
// document.querySelectorAll(".move").forEach(initMoveSection);

// const observer = new MutationObserver((mutations) => {
//     mutations.forEach((mutation) => {
//         mutation.addedNodes.forEach((node) => {
//             if (node.nodeType === 1) { // μόνο elements
//                 if (node.matches(".move")) {
//                     initMoveSection(node);
//                 } else {
//                     node.querySelectorAll?.(".move").forEach(initMoveSection);
//                 }
//             }
//         });
//     });
// });

// observer.observe(document.body, { childList: true, subtree: true });






function initMoveSection(movingSection) {
    const elements = movingSection.querySelectorAll(".moving-element");

    gsap.to(elements, {
        yPercent: -200,
        ease: "none",
        scrollTrigger: {
            trigger: movingSection,
            start: "top bottom",
            end: "bottom top",
            scrub: true,
            // markers: true
        }
    });
}

function initAllMovingSections() {
    // 1. Σκότωσε παλιά triggers μόνο για movingSection
    ScrollTrigger.getAll().forEach(trigger => {
        if (trigger.trigger && trigger.trigger.classList.contains("movingSection")) {
            trigger.kill();
        }
    });

    // 2. Ξαναστήσε όλα
    document.querySelectorAll(".movingSection").forEach(initMoveSection);

    // 3. Refresh στο τέλος
    ScrollTrigger.refresh();
}


document.addEventListener("DOMContentLoaded", () => {
    initAllMovingSections();
});


const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
        mutation.addedNodes.forEach((node) => {
            if (node.nodeType === 1) {
                if (node.matches(".movingSection")) {
                    initAllMovingSections();
                } else {
                    const sections = node.querySelectorAll?.(".movingSection");
                    if (sections && sections.length) {
                        initAllMovingSections();
                    }
                }
            }
        });
    });
});
observer.observe(document.body, { childList: true, subtree: true });




















//roundandround


function initRoundAndRound() {
    document.querySelectorAll(".roundandround").forEach(el => {
        gsap.to(el, {
            duration: 8,
            repeat: -1,
            ease: "linear",
            onUpdate: function () {
                const t = (performance.now() % 8000) / 8000;
                const x = 50 + 30 * Math.sin(t * Math.PI * 2);
                const y = 50 + 30 * Math.cos(t * Math.PI * 2);
                el.style.background = `radial-gradient(circle at ${x}% ${y}%, #DFBD69 20%, rgba(146,111,52,0.5) 70%)`;
            }
        });
    });
}

const observerr = new MutationObserver(() => {
    initRoundAndRound();
});

observerr.observe(document.body, { childList: true, subtree: true });
