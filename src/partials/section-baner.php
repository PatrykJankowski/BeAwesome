<?php
    // Default background image (change as needed)
    $bg_image = '/wp-content/themes/beawesome/img/bg-small-1.webp';

    // Allow passing custom background via arguments
    if (!empty($args['bg'])) {
        $bg_image = esc_url($args['bg']);
    }
?>

<section class="relative z-10 flex items-center justify-center h-[390px] mb-24 bg-cover bg-bottom"
    style="background-image: url('<?php echo $bg_image; ?>');" role="banner">
    <div class="container mx-auto px-6">
        <h2 class="max-w-xl text-4xl text-white font-extrabold">
            Bierzemy odpowiedzialność <span class="font-medium">za nasze działania.</span>
        </h2>
    </div>
</section>