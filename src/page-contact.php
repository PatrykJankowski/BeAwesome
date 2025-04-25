<?php
/* Template Name: Kontakt */
get_header();
?>

<?php
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$content = apply_filters('the_content', get_the_content());

get_template_part('partials/section-baner', null, [
    'bg' => $featured_image_url,
    'content' => $content,
]);
?>

<section class="py-24 text-gray-2">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Left column - contact info -->
            <div>
                <p class="text-lg mb-2"><?php the_field('subheader'); ?></p>
                <h2 class="text-3xl xl:text-5xl text-dark mb-6"><?php the_field('header'); ?></h2>
                <p class="mb-12"><?php the_field('description'); ?></p>

                <div class="space-y-10">
                    <div class="flex items-center gap-6">
                        <svg class="w-14 h-14" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60.923" height="60.923"
                            viewBox="0 0 60.923 60.923">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_17879" data-name="Rectangle 17879" width="60.923"
                                        height="60.923" fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Group_42707" data-name="Group 42707" transform="translate(0 0)">
                                <g id="Group_42706" data-name="Group 42706" transform="translate(0 0)">
                                    <g id="Group_42705" data-name="Group 42705" transform="translate(0 0)"
                                        clip-path="url(#clip-path)">
                                        <path id="Path_43445" data-name="Path 43445"
                                            d="M60.923,30.462A30.462,30.462,0,1,1,30.462,0,30.462,30.462,0,0,1,60.923,30.462"
                                            transform="translate(0 0)" fill="#d1a95f" fill-rule="evenodd" />
                                        <path id="Path_43446" data-name="Path 43446"
                                            d="M35.514,29.1c-1.017-.814-2.035-1.424-2.846-2.035-2.035-1.422-3.866-1.422-5.491.61a2.125,2.125,0,0,1-3.052.814A13.627,13.627,0,0,1,16.6,21.368a4.766,4.766,0,0,1-.407-1.626A2.054,2.054,0,0,1,17.412,17.5c.814-.61,1.628-1.221,1.628-2.439,0-1.628-4.067-6.916-5.491-7.526a3.449,3.449,0,0,0-2.035,0c-3.66,1.221-5.085,4.271-3.66,7.73A43.929,43.929,0,0,0,10.7,20.555,39.04,39.04,0,0,0,30.226,37.031c.61.407,1.221.407,1.424.61,2.439,0,5.288-2.238,6.1-4.476.61-2.236-1.017-3.05-2.238-4.067"
                                            transform="translate(7.866 7.949)" fill="#0d1e2e" fill-rule="evenodd" />
                                    </g>
                                </g>
                            </g>
                        </svg>

                        <div>
                            <p class="mb-1">Numer telefonu</p>
                            <p class="my-0"><a
                                    href="tel:+48<?php echo preg_replace('/\D/', '', get_field('phone')); ?>"><?php the_field('phone'); ?></a>
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-6">
                        <svg class="w-14 h-14" xmlns="http://www.w3.org/2000/svg" width="60.923" height="60.923"
                            viewBox="0 0 60.923 60.923">
                            <g id="Group_42756" data-name="Group 42756" transform="translate(-139.439 -928.077)">
                                <path id="Path_43452" data-name="Path 43452"
                                    d="M60.923,30.462A30.462,30.462,0,1,1,30.462,0,30.462,30.462,0,0,1,60.923,30.462"
                                    transform="translate(139.439 928.077)" fill="#d1a95f" fill-rule="evenodd" />
                                <g id="icon" transform="translate(154.758 946.983)">
                                    <rect id="Rectangle_511" data-name="Rectangle 511" width="28.793" height="21.595"
                                        transform="translate(0 0)" fill="none" stroke="#0d1e2e" stroke-linecap="square"
                                        stroke-miterlimit="10" stroke-width="1.5" />
                                    <path id="Path_852" data-name="Path 852"
                                        d="M142.59,167.781l13.393,11.3,13.811-11.491"
                                        transform="translate(-141.602 -167.044)" fill="none" stroke="#0d1e2e"
                                        stroke-linecap="square" stroke-miterlimit="10" stroke-width="1.5" />
                                    <line id="Line_76" data-name="Line 76" x1="7.783" y2="7.125"
                                        transform="translate(0.988 13.621)" fill="none" stroke="#0d1e2e"
                                        stroke-linecap="square" stroke-miterlimit="10" stroke-width="1.5" />
                                    <line id="Line_77" data-name="Line 77" x1="7.792" y1="7.125"
                                        transform="translate(20.018 13.621)" fill="none" stroke="#0d1e2e"
                                        stroke-linecap="square" stroke-miterlimit="10" stroke-width="1.5" />
                                </g>
                            </g>
                        </svg>

                        <div>
                            <p class="mb-1">Adres e-mail</p>
                            <p class="my-0"><a
                                    href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                        </div>
                    </div>

                    <div class="flex items-center gap-6">
                        <svg class="w-14 h-14" data-name="Group 42713" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60.983" height="60.983"
                            viewBox="0 0 60.983 60.983">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect id="Rectangle_17881" data-name="Rectangle 17881" width="60.983"
                                        height="60.983" fill="none" />
                                </clipPath>
                            </defs>
                            <g id="Group_42712" data-name="Group 42712" transform="translate(0 0)">
                                <g id="Group_42711" data-name="Group 42711" transform="translate(0 0)"
                                    clip-path="url(#clip-path)">
                                    <path id="Path_43449" data-name="Path 43449"
                                        d="M60.983,30.493A30.492,30.492,0,1,1,30.491,0,30.494,30.494,0,0,1,60.983,30.493"
                                        transform="translate(0 -0.001)" fill="#d1a95f" fill-rule="evenodd" />
                                    <path id="Path_43450" data-name="Path 43450"
                                        d="M20.249,6.185A10.782,10.782,0,0,0,9.467,16.967c0,7.7,10.782,20.023,10.782,20.023S31.03,24.667,31.03,16.967A10.782,10.782,0,0,0,20.249,6.185m.077,16.456a5.353,5.353,0,1,1,5.354-5.354,5.361,5.361,0,0,1-5.354,5.354"
                                        transform="translate(10.188 6.655)" fill="#0d1e2e" />
                                    <path id="Path_43451" data-name="Path 43451"
                                        d="M22.669,29.024c-7.653,0-15.4-1.956-15.4-5.695,0-3.415,6.455-5.13,11.984-5.564l.139,1.777c-7.055.55-10.341,2.585-10.341,3.787,0,1.6,5.3,3.914,13.618,3.914s13.618-2.317,13.618-3.914c0-1.412-3.889-3.255-10.173-3.774l.145-1.775c5.448.451,11.809,2.174,11.809,5.55,0,3.739-7.746,5.695-15.4,5.695"
                                        transform="translate(7.824 19.117)" fill="#0d1e2e" />
                                </g>
                            </g>
                        </svg>

                        <div>
                            <p class="mb-1">Adres</p>
                            <p class="my-0">
                                <?php the_field('street'); ?><br />
                                <?php the_field('postal_code'); ?> <?php the_field('city'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right column - Contact Form 7 -->
            <div>
                <?php echo do_shortcode('[contact-form-7 id="123" title="Formularz kontaktowy"]'); ?>
            </div>
        </div>
    </div>
</section>


<section class="pt-24 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl lg:text-5xl font-bold mb-4">
            <?php the_field('map_header'); ?>
        </h2>
        <p class="mb-12">
            <?php the_field('map_description'); ?>
        </p>
        <iframe title="Mapa" src="<?php the_field('map') ?>" width="100%" height="600"
            style="border:0; filter: grayscale(.9);" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


<?php get_footer(); ?>