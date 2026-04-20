<a href="/single-contest" title="Κέρδισε Διπλή Πρόσκληση για Cinema" class="contest zoom">
    {{-- <div class="expired">Έχει λήξει</div> --}}
    <div class="top">
        <div class="image-wrapper">
            <img src="_homeradio/images/contest.png" title="" alt="">
        </div>

        <h2 class="small-title text-start">Κέρδισε Διπλή Πρόσκληση
            για Cinema</h2>
    </div>

    <span class="smallest-line">23 July 2025 - 29 July 2025</span>
</a>

{{-- @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.contest').forEach(contest => {
                const dateText = contest.querySelector('.date').textContent.trim();

                const [startStr, endStr] = dateText.split(' - ');
                const startDate = new Date(startStr);
                const endDate = new Date(endStr);

                const now = new Date();

                if (now > endDate) {
                    contest.classList.add('not-active');
                }
            });
        });
    </script>
@endpush --}}
