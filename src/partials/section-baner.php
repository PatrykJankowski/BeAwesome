<?php
$bg_image = !empty($args['bg']) ? esc_url($args['bg']) : '/wp-content/themes/beawesome/img/bg-hero.webp';
$content = !empty($args['content']) ? $args['content'] : '';
?>

<section class="relative z-10 flex items-center justify-center h-[378px] bg-cover bg-top"
    style="background-image: url('<?php echo $bg_image; ?>');" role="banner">
    <div class="hidden xl:block absolute left-0 top-0 w-[94px] h-[130px] bg-primary"></div>
    <div class="container mx-auto px-6">
        <h2 class="max-w-3xl text-white text-4xl">
            <?php echo $content; ?>
        </h2>
    </div>
    <div class="hidden xl:block absolute right-0 top-0 w-[94px] h-[476px] bg-primary"></div>
</section>