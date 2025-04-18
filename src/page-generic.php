<?php
/* Template Name: Podstrona generyczna */
get_header();
?>

<?php get_template_part('partials/section-baner', null, ['bg' => '/wp-content/themes/beawesome/img/bg-small-1.png']); ?>

<!-- Section -->
<section class="pb-16 single-page">
    <div class="container mx-auto px-6">
        <?php for ($i = 1; $i <= 8; $i++): ?>
            <?php
            $title = get_field("row_{$i}_title");
            $text = get_field("row_{$i}_text");
            $image = get_field("row_{$i}_image");
            ?>
            <?php if ($title && $text && $image): ?>
                <div class="grid grid-cols-12 gap-8 items-center pb-16">
                    <?php if ($i % 2 === 1): ?>
                        <div class="col-span-12 md:col-span-6">
                            <h2 class="font-bold text-4xl mb-6"><?php echo esc_html($title); ?></h2>
                            <p><?php echo $text; ?></p>
                        </div>
                        <div class="col-span-12 md:col-span-6 h-full">
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>"
                                class="w-full h-full object-cover rounded-lg">
                        </div>
                    <?php else: ?>
                        <div class="col-span-12 md:col-span-6 h-full">
                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>"
                                class="w-full h-full object-cover rounded-lg">
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <h2 class="font-bold text-4xl mb-6"><?php echo esc_html($title); ?></h2>
                            <p><?php echo $text; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</section>

<!-- Section -->
<section class="pb-16">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-12">
            <div class="col-span-12 gap-8 flex flex-col items-center">
                <h2 class="font-bold text-4xl mb-6"><?php echo get_field("one_column_section_title"); ?></h2>
                <?php echo get_field("one_column_section_description"); ?>
            </div>
        </div>
    </div>
</section>

<!-- Cards Section -->
<section class="single-page">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-12 gap-8 text-center">
            <div class="col-span-12 flex flex-col items-center">
                <h2 class="font-bold text-5xl md:text-6xl mb-6"><?php echo esc_attr(get_field("section_title")); ?></h2>
                <div class="max-w-2xl"><?php echo get_field("section_description"); ?></div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 pt-16 grid grid-cols-1 md:grid-cols-2 gap-10">
        <?php for ($j = 1; $j <= 8; $j++): ?>
            <?php
            $card_title = get_field("card_{$j}_title");
            $card_desc = get_field("card_{$j}_description");
            ?>
            <?php if ($card_title && $card_desc): ?>
                <div class="flex flex-col">
                    <span
                        class="text-6xl md:text-7xl xl:text-8xl font-Montserrat font-bold text-outline"><?php echo sprintf('%02d', $j); ?></span>
                    <div>
                        <h3 class="text-3xl font-bold"><?php echo esc_html($card_title); ?></h3>
                        <p class="mt-2"><?php echo $card_desc; ?></p>
                    </div>
                </div>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
</section>

<?php get_footer(); ?>