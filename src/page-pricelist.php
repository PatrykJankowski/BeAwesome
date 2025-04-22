<?php
/**
 * Template Name: Cennik
 * Description: Szablon podstrony z cennikiem
 */
?>

<?php get_header(); ?>


<?php
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$content = apply_filters('the_content', get_the_content());

get_template_part('partials/section-baner', null, [
    'bg' => $featured_image_url,
    'content' => $content,
]);
?>
<section class="mt-24">
    <?php get_template_part('partials/section-pricelist'); ?>
</section>

<?php get_footer(); ?>