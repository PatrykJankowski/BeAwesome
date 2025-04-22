<?php
/* Template Name: Podstrona generyczna */
get_header();
?>

<?php get_template_part('partials/section-baner', null, ['bg' => '/wp-content/themes/beawesome/img/bg-hero.webp']); ?>

<!-- Section -->
<section class="py-24">
  <div class="container mx-auto px-6">
    <?php for ($i = 1; $i <= 4; $i++): ?>
      <?php
        $header = get_field("rows_section_header_{$i}");
        $desc = get_field("rows_section_description_{$i}");
        $image = get_field("rows_section_image_{$i}");
        $is_even = $i % 2 === 0; // Aby naprzemiennie ustawić obrazek
      ?>

      <!-- Optional Extra Section Between 1 and 2 -->
      <?php if ($i === 2 && get_field('rows_extra_section')): ?>
        <div class="w-full">
          <?php echo get_field('rows_extra_section'); ?>
        </div>
      <?php endif; ?>

      <!-- Każdy wiersz to już siatka z dwiema kolumnami -->
      <?php if ($header && $desc && $image): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
          <?php if ($is_even): ?>
            <!-- Obrazek po lewej, tekst po prawej -->
            <div>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-auto rounded shadow">
            </div>
            <div>
              <h2 class="text-2xl font-bold mb-4"><?php echo esc_html($header); ?></h2>
              <p class="text-gray-700"><?php echo esc_html($desc); ?></p>
            </div>
          <?php else: ?>
            <!-- Tekst po lewej, obrazek po prawej -->
            <div>
              <h2 class="text-2xl font-bold mb-4"><?php echo esc_html($header); ?></h2>
              <p class="text-gray-700"><?php echo esc_html($desc); ?></p>
            </div>
            <div>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-auto rounded shadow">
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    <?php endfor; ?>
  </div>
</section>


<!-- End Section -->


<?php get_footer(); ?>