<?php
$bg_image = !empty($args['bg']) ? esc_url($args['bg']) : '/wp-content/themes/beawesome/img/bg-hero.webp';
$content = !empty($args['content']) ? $args['content'] : '';
?>

<section class="relative z-10 flex items-center justify-center h-[378px] mb-24 bg-cover bg-top"
    style="background-image: url('<?php echo $bg_image; ?>');" role="banner">
    <div class="container mx-auto px-6">
        <h2 class="max-w-3xl text-white text-4xl">
            <?php echo $content; ?>
        </h2>
    </div>
</section>