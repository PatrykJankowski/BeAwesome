<?php
/* Template Name: Szablon domyślny */
get_header();
?>

<?php get_template_part('partials/section-baner', null, ['bg' => '/wp-content/themes/beawesome/img/bg-hero.jpg']); ?>

<article class="container mx-auto my-10 px-4 single-page">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Post Meta Section -->
                <div>
                    <h2 class="text-4xl font-semibold"><?php the_title(); ?></h2>
                    <div class="text-sm mb-4">
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    </div>
                </div>
            </div>

            <!-- Post Content -->
            <div class="post-content text-lg">
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; ?>
</article>


<?php get_footer(); ?>