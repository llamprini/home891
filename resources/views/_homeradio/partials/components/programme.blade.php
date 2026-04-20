<section class="programme-section overflow-hidden movingSection">
    <div class="golden-circle moving-element first"></div>
    <div class="golden-circle moving-element second"></div>
    <div class="container diff-tabs">
        <div class="text center">
            <h2 class="section-title">Programme</h2>

            <div class="section-navigation">
                <div class="dropdown">
                    <button class="active"><span>Δευτέρα</span></button>
                    <button><span>Τρίτη</span></button>
                    <button><span>Τετάρτη</span></button>
                    <button><span>Πέμπτη</span></button>
                    <button><span>Παρασκευή</span></button>
                    <button><span>Σάββατο</span></button>
                    <button><span>Κυριακή</span></button>
                </div>
            </div>
        </div>

        <div class="tabs">
            <div class="programme tab active" data-tab="0">
                <div class="hours active">
                    <span class="small-title">06:00 - 09:00</span>
                    <div class="paragraph-title">Home Essentials</div>
                    <div class="image-wrapper">
                        <img src="_homeradio/images/programme.jpg" alt="">
                    </div>
                </div>

                @foreach (range(1, 10) as $i)
                    <div class="hours">
                        <span class="small-title">06:00 - 09:00</span>
                        <div class="paragraph-title">New Day at Home</div>
                    </div>
                @endforeach
            </div>

            <div class="programme tab" data-tab="1">
                <div class="hours active">
                    <span class="small-title">06:00 - 09:00</span>
                    <div class="paragraph-title">Home Essentials</div>
                    <div class="image-wrapper">
                        <img src="_homeradio/images/programme.jpg" alt="">
                    </div>
                </div>

                @foreach (range(1, 10) as $i)
                    <div class="hours">
                        <span class="small-title">06:00 - 09:00</span>
                        <div class="paragraph-title">Ευαγγελία Σαμαρτζή</div>
                    </div>
                @endforeach
            </div>

            <div class="programme tab" data-tab="2">
                <div class="hours active">
                    <span class="small-title">06:00 - 09:00</span>
                    <div class="paragraph-title">Home Essentials</div>
                    <div class="image-wrapper">
                        <img src="_homeradio/images/programme.jpg" alt="">
                    </div>
                </div>

                @foreach (range(1, 10) as $i)
                    <div class="hours">
                        <span class="small-title">06:00 - 09:00</span>
                        <div class="paragraph-title">Ειρήνη Λουκά</div>
                    </div>
                @endforeach
            </div>

            <div class="programme tab" data-tab="3">
                <div class="hours active">
                    <span class="small-title">06:00 - 09:00</span>
                    <div class="paragraph-title">Home Essentials</div>
                    <div class="image-wrapper">
                        <img src="_homeradio/images/programme.jpg" alt="">
                    </div>
                </div>

                @foreach (range(1, 10) as $i)
                    <div class="hours">
                        <span class="small-title">06:00 - 09:00</span>
                        <div class="paragraph-title">Ειρήνη Λουκά</div>
                    </div>
                @endforeach
            </div>

            <div class="programme tab" data-tab="4">
                <div class="hours active">
                    <span class="small-title">06:00 - 09:00</span>
                    <div class="paragraph-title">Home Essentials</div>
                    <div class="image-wrapper">
                        <img src="_homeradio/images/programme.jpg" alt="">
                    </div>
                </div>

                @foreach (range(1, 10) as $i)
                    <div class="hours">
                        <span class="small-title">06:00 - 09:00</span>
                        <div class="paragraph-title">Ευαγγελία Σαμαρτζή</div>
                    </div>
                @endforeach
            </div>

            <div class="programme tab" data-tab="5">
                <div class="hours active">
                    <span class="small-title">06:00 - 09:00</span>
                    <div class="paragraph-title">Home Essentials</div>
                    <div class="image-wrapper">
                        <img src="_homeradio/images/programme.jpg" alt="">
                    </div>
                </div>

                @foreach (range(1, 10) as $i)
                    <div class="hours">
                        <span class="small-title">06:00 - 09:00</span>
                        <div class="paragraph-title">Ειρήνη Λουκά</div>
                    </div>
                @endforeach
            </div>

            <div class="programme tab" data-tab="6">
                <div class="hours active">
                    <span class="small-title">06:00 - 09:00</span>
                    <div class="paragraph-title">Home Essentials</div>
                    <div class="image-wrapper">
                        <img src="_homeradio/images/programme.jpg" alt="">
                    </div>
                </div>

                @foreach (range(1, 10) as $i)
                    <div class="hours">
                        <span class="small-title">06:00 - 09:00</span>
                        <div class="paragraph-title">New Day at Home</div>
                    </div>
                @endforeach
            </div>
        </div>


        <a href="/programme-page" title="Δείτε το Πρόγραμμα" class="button-1 ms-auto me-auto">
            <span>Δείτε το Πρόγραμμα</span>
            <div class="circle-button">
                @include('_homeradio.partials.icons.arrows.button-arrow')
            </div>
        </a>
    </div>
</section>


@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.diff-tabs').forEach(container => {
                const navButtons = container.querySelectorAll('.dropdown button');
                const contents = container.querySelectorAll('.tab');

                navButtons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        navButtons.forEach(btn => btn.classList.remove('active'));
                        contents.forEach(content => content.classList.remove('active'));

                        button.classList.add('active');
                        const targetContent = container.querySelector(
                            `.tab[data-tab="${index}"]`);
                        if (targetContent) {
                            targetContent.classList.add('active');
                        }
                    });
                });
            });


//αμα θελω να τρακαρουν μεταξυ τους
            // const pSection = document.querySelector(".programme-section");
            // const circles = document.querySelectorAll(".programme-section .golden-circle");

            // function getBounds() {
            //     const rect = pSection.getBoundingClientRect();
            //     return {
            //         width: rect.width,
            //         height: rect.height
            //     };
            // }

            // let {
            //     width: containerWidth,
            //     height: containerHeight
            // } = getBounds();

            // // αποθηκεύουμε δεδομένα για κάθε circle
            // const balls = [];

            // circles.forEach((circle, i) => {
            //     const circleRect = circle.getBoundingClientRect();
            //     const circleSize = circleRect.width;

            //     let x, y;
            //     if (i === 0) {
            //         // πρώτο: πάνω δεξιά
            //         x = containerWidth - circleSize;
            //         y = 0;
            //     } else {
            //         // δεύτερο: αριστερά στη μέση
            //         x = 0;
            //         y = (containerHeight - circleSize) / 2;
            //     }

            //     const speed = {
            //         x: i === 0 ? -2 : 2,
            //         y: i === 0 ? 2 : -2
            //     };

            //     gsap.set(circle, {
            //         x,
            //         y
            //     });

            //     balls.push({
            //         circle,
            //         x,
            //         y,
            //         size: circleSize,
            //         speed
            //     });
            // });

            // function move() {
            //     // ενημερώνουμε κάθε ball
            //     balls.forEach(ball => {
            //         ball.x += ball.speed.x;
            //         ball.y += ball.speed.y;

            //         // borders collisions
            //         if (ball.x <= 0 || ball.x + ball.size >= containerWidth) {
            //             ball.speed.x *= -1;
            //             ball.x = Math.max(0, Math.min(ball.x, containerWidth - ball.size));
            //         }
            //         if (ball.y <= 0 || ball.y + ball.size >= containerHeight) {
            //             ball.speed.y *= -1;
            //             ball.y = Math.max(0, Math.min(ball.y, containerHeight - ball.size));
            //         }
            //     });

            //     // έλεγχος collisions μεταξύ τους
            //     for (let i = 0; i < balls.length; i++) {
            //         for (let j = i + 1; j < balls.length; j++) {
            //             const b1 = balls[i];
            //             const b2 = balls[j];

            //             const dx = (b1.x + b1.size / 2) - (b2.x + b2.size / 2);
            //             const dy = (b1.y + b1.size / 2) - (b2.y + b2.size / 2);
            //             const distance = Math.sqrt(dx * dx + dy * dy);

            //             if (distance < b1.size / 2 + b2.size / 2) {
            //                 // απλή elastic collision → αντιστρέφουμε κατευθύνσεις
            //                 b1.speed.x *= -1;
            //                 b1.speed.y *= -1;
            //                 b2.speed.x *= -1;
            //                 b2.speed.y *= -1;

            //                 // "ξεκολλάμε" ελάχιστα
            //                 const overlap = (b1.size / 2 + b2.size / 2) - distance;
            //                 const pushX = (dx / distance) * (overlap / 2);
            //                 const pushY = (dy / distance) * (overlap / 2);

            //                 b1.x += pushX;
            //                 b1.y += pushY;
            //                 b2.x -= pushX;
            //                 b2.y -= pushY;
            //             }
            //         }
            //     }

            //     // κάνουμε render τις νέες θέσεις
            //     balls.forEach(ball => {
            //         gsap.set(ball.circle, {
            //             x: ball.x,
            //             y: ball.y
            //         });
            //     });

            //     requestAnimationFrame(move);
            // }

            // move();

            // // responsive update
            // window.addEventListener("resize", () => {
            //     const {
            //         width,
            //         height
            //     } = getBounds();
            //     containerWidth = width;
            //     containerHeight = height;
            // });
        });
    </script>
@endpush
