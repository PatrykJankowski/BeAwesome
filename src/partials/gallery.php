<?php
$images = get_field('gallery');
if ($images): ?>
    <div class="relative overflow-hidden w-full">
        <div class="flex transition-transform duration-500" id="slider">
            <?php foreach ($images as $image): ?>
                <div class="flex-shrink-0 w-72 h-72 flex items-center justify-center p-4">
                    <div class="relative w-60 h-60 rounded-full border-4 border-[#D4A658] border-t-transparent p-1">
                        <a href="<?php echo esc_url($image['url']); ?>" data-lightbox="gallery"
                            data-title="<?php echo esc_attr($image['alt']); ?>">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                class="rounded-full object-cover w-full h-full">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Left Arrow -->
        <button onclick="moveSlide(-1)" class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-4 rounded-full shadow"
            id="prevBtn">
            &lt;
        </button>
        <!-- Right Arrow -->
        <button onclick="moveSlide(1)" class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-4 rounded-full shadow"
            id="nextBtn">
            &gt;
        </button>
    </div>

    <script>
        let currentIndex = 0;
        const slider = document.getElementById('slider');
        const totalItems = slider.children.length;

        let sliderWidth = slider.offsetWidth;
        let itemWidth = slider.children[0].offsetWidth;

        function moveSlide(direction) {
            const maxItems = Math.floor(sliderWidth / itemWidth);

            // Sprawdzamy, czy wszystkie zdjęcia mieszczą się na ekranie
            if (totalItems <= maxItems) {
                // Jeśli wszystkie zdjęcia mieszczą się na ekranie, nie wykonujemy przewijania
                return;
            }

            // Zwiększamy lub zmniejszamy currentIndex, aby przesunąć slider
            currentIndex += direction;

            // Zapobiegamy przewinięciu poza dostępne obrazy
            if (currentIndex < 0) {
                currentIndex = 0;  // Nie pozwalamy na przewinięcie do ujemnego indeksu
            }

            if (currentIndex >= totalItems - maxItems) {
                currentIndex = totalItems - maxItems;  // Zapobiegamy przewinięciu poza ostatni obraz
            }

            const shift = currentIndex * -100;
            slider.style.transform = `translateX(${shift}%)`;
        }

        // Disable arrows if not needed
        function checkArrows() {
            const maxItems = Math.floor(sliderWidth / itemWidth);

            if (totalItems <= maxItems) {
                document.getElementById('prevBtn').disabled = true;
                document.getElementById('nextBtn').disabled = true;
            } else {
                document.getElementById('prevBtn').disabled = false;
                document.getElementById('nextBtn').disabled = false;
            }
        }

        // Recalculate on resize and reset to first slide
        window.addEventListener('resize', function () {
            sliderWidth = slider.offsetWidth;
            itemWidth = slider.children[0].offsetWidth;
            currentIndex = 0;  // Reset to the first slide
            slider.style.transform = `translateX(0%)`;  // Reset slider position
            checkArrows();
        });

        checkArrows();

    </script>

    <!-- Lightbox Script (using a simple library) -->
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
    <script>
        // Ustawienie opcji lightboxa dla języka polskiego
        lightbox.option({
            'albumLabel': "Obrazek %1 z %2",
            'wrapAround': true
        });
    </script>
<?php endif; ?>