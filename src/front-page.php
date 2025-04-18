<?php
/**
 * Template Name: Strona główna
 * Description: Szablon strony głównej
 */
?>

<?php get_header(); ?>


<!-- Section hero -->
<section class="relative flex items-center justify-center h-[600px] xl:h-[855px] overflow-hidden" role="banner">

    <!-- Złote tło - lewa strona 50%, prawa 100% -->
    <div class="absolute top-1/2 left-0 w-[50%] h-[50%] bg-primary z-[-1]"></div>
    <div class="absolute top-0 right-0 w-[50%] h-full bg-primary z-[-1]"></div>

    <!-- Obrazek jako element, wyśrodkowany i zaokrąglony -->
    <img src="/wp-content/themes/beawesome/img/bg-hero.webp" alt="Twoja przestrzeń do świadomego ruchu i harmonii"
        class="absolute inset-0 m-auto h-full w-full max-w-[1825px] max-h-[855px] object-cover rounded-tl-[30px] z-0"
        aria-hidden="true" />

    <!-- Treść na obrazku -->
    <div class="container relative z-10 px-6 text-white">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-6">
                <span class="tracking-widest text-md mb-6 block"><?php the_field('banner_upper_header'); ?></span>
                <h2 class="font-extrabold text-4xl md:text-5xl text-primary drop-shadow">
                    <?php the_field('banner_header'); ?>
                </h2>

                <div class="mt-12 text-lg md:text-xl">
                    <?php the_field('banner_description'); ?>
                </div>
                <?php
                $button = get_field('banner_button');
                if ($button):
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>"
                        class="button button--primary mt-12 inline-flex items-center gap-2"
                        target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.874" height="24.592">
                            <defs>
                                <clipPath id="a">
                                    <path fill="#0d1e2e" d="M0 0h20.874v24.592H0z" />
                                </clipPath>
                            </defs>
                            <g>
                                <path fill="#0d1e2e" fill-rule="evenodd"
                                    d="m14.572 10.8-4.477 7.755a2.3 2.3 0 0 0-.3 1.015l-.155 2.574a2.306 2.306 0 0 0 3.573 2.063l2.152-1.421a2.3 2.3 0 0 0 .727-.772l4.477-7.755a2.306 2.306 0 0 0-.844-3.151l-2-1.153a2.306 2.306 0 0 0-3.151.844m3.882-3.9V3.46A3.46 3.46 0 0 0 14.994 0H3.46A3.461 3.461 0 0 0 0 3.46v16.147a3.46 3.46 0 0 0 3.46 3.46h3.391a1.153 1.153 0 1 0 0-2.307H3.46a1.154 1.154 0 0 1-1.153-1.153V3.46A1.154 1.154 0 0 1 3.46 2.307h11.534a1.154 1.154 0 0 1 1.153 1.153V6.9a1.153 1.153 0 1 0 2.307 0m-1.884 5.056 2 1.153-4.48 7.756-2.152 1.421.155-2.574ZM5.767 17.3h2.509a1.153 1.153 0 0 0 0-2.307H5.767a1.153 1.153 0 0 0 0 2.307m0-4.614h5.017a1.153 1.153 0 1 0 0-2.307H5.767a1.153 1.153 0 1 0 0 2.307m0-4.614h6.92a1.153 1.153 0 0 0 0-2.307h-6.92a1.153 1.153 0 0 0 0 2.307" />
                            </g>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<!-- Section 2 -->
<section class="py-24 text-center bg-[linear-gradient(to_bottom,white_0%,#E1E1E1_50%,white_100%)]">
    <div class="container mx-auto px-6 relative">
        <img class="hidden 2xl:block absolute top-8 -left-12" src="/wp-content/themes/beawesome/img/man.png">
        <img class="hidden 2xl:block absolute -top-4 -right-12" src="/wp-content/themes/beawesome/img/girl.png">
        <div class="grid grid-cols-12">
            <div class="col-span-12 flex flex-col items-center max-w-3xl mx-auto">
                <h2 class="text-5xl text-gray-2 font-bold">
                    <?php the_field('s1_header'); ?>
                </h2>

                <svg class="my-12" xmlns="http://www.w3.org/2000/svg" width="110" height="50" viewBox="0 0 110 50">
                    <g id="Group_42756" data-name="Group 42756" transform="translate(-905 -1194)">
                        <rect id="Rectangle_2" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(905 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-2" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(917 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-3" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(929 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-4" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(941 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-5" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(953 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-6" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(965 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-7" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(977 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-8" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(989 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-9" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1001 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-10" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1013 1194)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-11" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(905 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-12" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(917 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-13" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(929 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-14" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(941 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-15" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(953 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-16" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(965 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-17" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(977 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-18" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(989 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-19" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1001 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-20" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1013 1206)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-21" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(905 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-22" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(917 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-23" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(929 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-24" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(941 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-25" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(953 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-26" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(965 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-27" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(977 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-28" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(989 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-29" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1001 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-30" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1013 1218)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-31" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(905 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-32" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(917 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-33" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(929 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-34" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(941 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-35" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(953 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-36" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(965 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-37" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(977 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-38" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(989 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-39" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1001 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-40" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1013 1230)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-41" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(905 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-42" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(917 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-43" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(929 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-44" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(941 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-45" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(953 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-46" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(965 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-47" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(977 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-48" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(989 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-49" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1001 1242)" fill="#d1aa5f" />
                        <rect id="Rectangle_2-50" data-name="Rectangle 2" width="2" height="2"
                            transform="translate(1013 1242)" fill="#d1aa5f" />
                    </g>
                </svg>

                <div class="text-lg text-gray-2">
                    <?php the_field('s1_description'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section end -->


<section class="my-24">
    <div class="grid grid-cols-1 md:grid-cols-3">
        <div class="relative bg-cover bg-top text-white"
            style="background-image: url('/wp-content/themes/beawesome/img/bg-1.png')">
            <div class="h-full w-full px-12 py-10 flex flex-col items-center justify-between text-center">
                <div class="flex flex-col items-center gap-8">
                    <svg class="h-16" xmlns="http://www.w3.org/2000/svg" width="56.641" height="55.807"
                        data-name="Group 42667">
                        <defs>
                            <clipPath id="a">
                                <path fill="#fff" d="M0 0h56.641v55.807H0z" data-name="Rectangle 17835" />
                            </clipPath>
                        </defs>
                        <g fill="#fff" clip-path="url(#a)" data-name="Group 42666">
                            <path
                                d="M36.457 6.593a1.14 1.14 0 0 1-1.115-.4c-.169-.273-1.22-4.469-1.326-5.046-.1-.536-.063-.822.452-1.1a1.079 1.079 0 0 1 1.018.18 33.007 33.007 0 0 1 1.512 5.607 1.242 1.242 0 0 1-.54.761"
                                data-name="Path 43408" />
                            <path
                                d="M41.613 6.593c-2.061.1-.389-3.117-.057-4.131.261-.8.358-2.152 1.266-2.416 2.02-.119.516 2.726.237 3.611s-.444 2.618-1.446 2.937"
                                data-name="Path 43409" />
                            <path
                                d="M35.724 53.125c-7.406 1.388-18.807.39-25.986-1.177-3.066-.669-5.448-1.062-6.977-4.046C1.429 45.302.5 40.088.186 36.949a37.3 37.3 0 0 1 2.25-17.011c1.6-4.174 2.718-5.716 3.218-10.569.369-3.58.3-4.936 4.248-6.311l5.387-1.862a12.657 12.657 0 0 1 2.947-.844c3.8-.423 4.56 4.655 5.48 7.251a9.871 9.871 0 0 1 .864 2.067 3.875 3.875 0 0 1-1.815 3.649 16.74 16.74 0 0 1-4.428 1.663 4.541 4.541 0 0 1-3.4-1.2c-.242 3.285-.781 7 1.266 9.926 2.131 3.046 2.6 3.585 3.345 7.584a13.837 13.837 0 0 1 11.252 2.12 15.134 15.134 0 0 1 5.661-4.3c4.252-1.862 7.732-1.273 11.792.316a544.266 544.266 0 0 1-9.041-12.569c-.443-.632-1.8-1.932-.872-2.692 1.085-.893 2.114 1.358 2.645 2.1l3.559 5.014c3.139 4.378 6.379 8.689 9.457 13.109 1.076 1.543 2.766 3.006 2.633 5.034a61.05 61.05 0 0 1-1.377 8.205 11.968 11.968 0 0 1-8.7 7.871c-3.882.941-7.552-.383-10.83-2.372M18.236 2.197a16.11 16.11 0 0 0-2.174.692l-5.424 1.875c-2.888.985-2.862 1.599-3.174 4.68a27.2 27.2 0 0 1-1.874 7.84c-.521 1.254-1.129 2.46-1.6 3.737a36.52 36.52 0 0 0-1.275 20.363c.461 2.32 1.13 6.113 3.19 7.509a14.334 14.334 0 0 0 4.18 1.225 82.329 82.329 0 0 0 19.363 1.79c1.49-.008 3-.249 4.462-.228-.667-.753-3.669-4.307-2.414-5.387 1.165-1 1.459.665 1.663 1.279 1.025 3.091 5.889 5.666 8.818 6.265 5.1 1.044 10.714-2.44 11.729-7.6.3-1.5.519-3.027.76-4.54.2-1.225.72-2.576-.033-3.7a31.759 31.759 0 0 0-3.3-4.167 12.238 12.238 0 0 0-7.689-3.945A12.812 12.812 0 0 0 32.8 33.831c1.3-.282 7.8-.659 8.17 1.13.359 1.751-2.206.678-2.74.571-3.338-.668-6.288.275-9.258 1.7a12.359 12.359 0 0 1-2.275 1.04.887.887 0 0 1-.809-1.49 24.213 24.213 0 0 1 3.9-1.92c-3.549-2.014-6.153-2.686-10.245-1.708-.1 1.123-.923 6.615-2.663 6.4-1.371-.172-.395-1.765-.147-2.319a11.7 11.7 0 0 0-.773-10.791c-.471-.725-1.067-1.344-1.5-2.1-2.374-4.12-1.376-7.458-1.316-11.636-.639.005-1.812.161-2.282-.313a.982.982 0 0 1 .034-1.348c.641-.537 2.446 0 2.963-.246.862-.419-1.1-2.793-.133-3.589 1.521-1.247 1.858 2.005 2.261 2.7a1.169 1.169 0 0 0 1.821-.7c-.126-.832-.769-2.1-.7-2.819a.934.934 0 0 1 1.5-.513c.833.7.27 2.9 1.819 2.822a1.192 1.192 0 0 0 1.158-1.274 37.619 37.619 0 0 0-1.22-4.045 2.023 2.023 0 0 0-2.123-1.179m4.315 7.34a3.5 3.5 0 0 1-3.276.9c-.864 1.383-2.125 1.6-3.617 1.4a5.577 5.577 0 0 0 .721.863 2.691 2.691 0 0 0 2.715.208c1.5-.577 3.3-.957 3.735-2.727a1.47 1.47 0 0 0-.278-.645"
                                data-name="Path 43410" />
                            <path
                                d="M45.762 10.186c-.836-.025-1.457-.91-.817-1.6a41.753 41.753 0 0 1 4.564-3.867.887.887 0 0 1 .731 1.577 49.1 49.1 0 0 1-4.478 3.892"
                                data-name="Path 43411" />
                            <path
                                d="M47.482 14.669c-.771-.386-.932-1.389-.029-1.748a12.241 12.241 0 0 1 1.8-.455l3.423-.763c.717-.1 1.524.394 1.141 1.22-.364.784-4.694 1.365-5.767 1.746Z"
                                data-name="Path 43412" />
                        </g>
                    </svg>
                    <h3 class="text-3xl text-primary font-bold uppercase">
                        <?php the_field('s2_card1_header'); ?>
                        <?php if (get_field('s2_card1_subheader')): ?>
                            <br><span class="text-lg"><?php the_field('s2_card1_subheader'); ?></span>
                        <?php endif; ?>
                    </h3>
                    <p class="text-sm font-bold">
                        <?php the_field('s2_card1_description'); ?>
                    </p>
                </div>
                <?php
                $button = get_field('s2_card1_button');
                if ($button):
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>" class="mt-6 button button--primary"
                        target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
                <?php $button = null; ?>
            </div>
        </div>

        <div class="relative bg-cover bg-top text-dark"
            style="background-image: url('/wp-content/themes/beawesome/img/bg-2.png')">
            <div class="h-full w-full px-12 py-10 flex flex-col items-center justify-between text-center">
                <div class="flex flex-col items-center gap-8">
                    <svg class="h-16" xmlns="http://www.w3.org/2000/svg" width="67.424" height="64.287">
                        <defs>
                            <clipPath id="a">
                                <path fill="#0d1e2e" d="M0 0h67.424v64.287H0z" data-name="Rectangle 17836" />
                            </clipPath>
                        </defs>
                        <g fill="#0d1e2e" clip-path="url(#a)" data-name="Group 42668">
                            <path
                                d="M1.09 52.91C-.4 52.865.049 50.738.107 49.771a16.957 16.957 0 0 1 1.978-7.3c2.146-3.867 4.008-6.369 2.433-11.233-.24-.742-.587-1.444-.843-2.18-1.159-3.327-.21-7.88 1.292-10.972C7.7 12.449 16.046 9.676 21.863 7.748c2.684-.889 3.993-.734 4.365-4.156l.214-1.9c.086-.74.028-1.423.843-1.685 1.9-.135.878 4.033.657 5.173-.628 3.246-3.381 3.7-6.088 4.574-4.339 1.4-11.253 3.96-14 7.285a13.977 13.977 0 0 0-2.628 10.548 17.1 17.1 0 0 0 .921 2.624 12.5 12.5 0 0 1-.984 10.759c-2.02 3.614-3.019 5.081-3.222 9.294-.05 1.043.341 2.2-.852 2.646"
                                data-name="Path 43413" />
                            <path
                                d="M66.677 52.911c-1.562.223-1.158-2.338-1.21-3.226-.22-3.716-1.218-5.061-3.118-8.125-3.231-5.209-1.669-8.44-.424-13.414a12.953 12.953 0 0 0-6.686-14.5 96.174 96.174 0 0 0-11.983-4.542c-3.742-1.223-3.823-3.408-4.111-6.833-.073-.864-.459-1.8.544-2.264 2.5-.276.145 5.478 3.277 6.953a13.784 13.784 0 0 0 1.594.567 87.621 87.621 0 0 1 11.524 4.436 14.818 14.818 0 0 1 7.693 16.582c-.25 1.041-.682 2-1 3.019a11.342 11.342 0 0 0 1.149 9.012c.579.985 1.312 1.856 1.84 2.875.723 1.395 2.744 8.536.913 9.459"
                                data-name="Path 43414" />
                            <path
                                d="M30.771 20.516c-.86-.023-.915-.645-1.069-1.359-.438-2.028-2.638-1.62-4.2-1.613h-5.218c-.78 0-3.849.427-4.026-.742a.965.965 0 0 1 .9-1.128c2.141-.066 4.307 0 6.451 0h2.723c2.124 0 4.158.2 5.036 2.558.339.911.5 1.944-.6 2.288"
                                data-name="Path 43415" />
                            <path
                                d="m44.304 17.544-3.144-.007c-4.526-.009-2.408.806-3.782 2.657a.962.962 0 0 1-1.649-.567 3.924 3.924 0 0 1 3.958-3.956h6.93c1.141 0 2.379-.086 3.506.028s1.117 1.3.329 1.845c-.646.065-1.338 0-1.989 0Z"
                                data-name="Path 43416" />
                            <path
                                d="M43.641 24.802c-.026-.862-.173-1.6.814-1.874 1.065.056.981 1.052 1 1.874a3.14 3.14 0 0 1-.763 6.086c-3.924-.142-4.468-4.952-1.047-6.086m.664 1.776c-1.495.6-1.318 2.5.384 2.427a1.23 1.23 0 0 0-.384-2.427"
                                data-name="Path 43417" />
                            <path
                                d="M14.498 63.323c.678-3.489 1.547-5.574 1.385-9.492-.232-5.635-1.911-11.836-3.237-17.34l-.777-3.2c-.447-1.821-1.472-8.033.784-9.051 1.526-.11 1.048 1.216.74 2.144a7.262 7.262 0 0 0 5.333 9.138 32.469 32.469 0 0 0 5.242.155c1.83 0 5.216.63 5.766-1.836.127-.568.131-1.421.858-1.546 1.858-.32.952 2.541.269 3.457-1.608 2.157-4.037 1.734-6.388 1.735-4.511 0-6.531.569-10.287-2.23a118.195 118.195 0 0 1 2.244 9.283c1.2 5.434 1.808 11.016.56 16.5-.186.818-.531 3.873-2.018 3.039a1.13 1.13 0 0 1-.473-.751"
                                data-name="Path 43418" />
                            <path
                                d="M37.56 32.913a5.56 5.56 0 0 0 .164 1.442c.639 1.853 3.759 1.312 5.261 1.314 2.226 0 4.485.238 6.6-.616 3.316-1.342 5.387-4.587 4.239-8.14-.29-.9-1.051-1.954.218-2.436 1.729-.119 2.011 3.654 1.946 4.81-.094 1.657-.725 2.27-.941 3.477-.586 3.285-1.055 6.576-1.731 9.848-1.558 7.534-2.946 11.026-1.086 18.881a9.35 9.35 0 0 1 .457 1.99.926.926 0 0 1-1.653.433 12.553 12.553 0 0 1-.72-2.644c-1.259-5.818-.885-9.738.416-15.454.648-3.452 1.512-6.842 1.969-10.335-3.534 2.275-5.754 2.009-9.682 2.008a21.677 21.677 0 0 1-4.3-.156c-3.921-.922-3.463-6.68-1.2-4.469Z"
                                data-name="Path 43419" />
                        </g>
                    </svg>
                    <h3 class="text-3xl text-dark font-bold uppercase">
                        <?php the_field('s2_card2_header'); ?>
                        <?php if (get_field('s2_card2_subheader')): ?>
                            <br><span class="text-lg"><?php the_field('s2_card2_subheader'); ?></span>
                        <?php endif; ?>
                    </h3>
                    <p class="text-sm font-bold">
                        <?php the_field('s2_card2_description'); ?>
                    </p>
                </div>
                <?php
                $button = get_field('s2_card1_button');
                if ($button):
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>" class="mt-6 button button--primary"
                        target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
                <?php $button = null; ?>
            </div>
        </div>

        <div class="relative bg-cover bg-top text-white"
            style="background-image: url('/wp-content/themes/beawesome/img/bg-3.png')">
            <div class="h-full w-full px-12 py-10 flex flex-col items-center justify-between text-center">
                <div class="flex flex-col items-center gap-8">
                    <svg class="h-16" xmlns="http://www.w3.org/2000/svg" width="90.645" height="46.74">
                        <defs>
                            <clipPath id="a">
                                <path fill="#fff" d="M0 0h90.645v46.74H0z" data-name="Rectangle 17837" />
                            </clipPath>
                        </defs>
                        <g data-name="Group 42671">
                            <g fill="#fff" clip-path="url(#a)" data-name="Group 42670">
                                <path
                                    d="M44.949 8.449c-1.2-1.13-2.3-2.36-3.477-3.517C40.724 4.193 35.98.555 39.31 0c1.212.116 2.2 1.69 3.006 2.492L52.859 13c3.587 3.586 7.149 7.2 10.8 10.716a17.264 17.264 0 0 0 2.487.267l9.737.892a24.59 24.59 0 0 0 4.253.243c.334-1.813.606-3.639.91-5.457.358-2.142.46-4.373 3.231-4.561 4.761-.323 5.819.851 4.967 5.461l-1.687 9.1c-.326 1.78-.285 3.751-2.468 4.18a24.953 24.953 0 0 1-4.618.143h-7.793a21.211 21.211 0 0 1 3 2.558c.91.047 1.844 0 2.756 0l5.374-.005a15.721 15.721 0 0 1 3.739.179c3.93 1 4.231 7.012.229 8.114a14.186 14.186 0 0 1-3.648.19h-4.223c.021 2.186-2.325 2.393-2.425 0H16.314c-.241 2.316-2.43 2.251-2.425 0-1.855.128-3.661.269-5.129-1.138a4.249 4.249 0 0 1-.047-6.048c1.7-1.7 4.1-1.3 6.286-1.3a93.688 93.688 0 0 0-4.6-8.337 19.48 19.48 0 0 1-1.294-2.275 6.276 6.276 0 0 1 3.6-7.93c2.91-1.143 4.726.259 7.294 1.486l8 3.838c.974.463 1.922.984 2.91 1.414a21.453 21.453 0 0 0 2.361-1l3.625-1.6c2.621-1.145 2.921-.752 4.771-2.793a11.216 11.216 0 0 1 4.109-3.125 8.2 8.2 0 0 1-.823-7.768m1.79 1.852c-.131.926-.092 4.388 1.1 4.585l.116-.2a6.885 6.885 0 0 0 .4-2.786 11.257 11.257 0 0 0-1.619-1.6m3.756 3.727a9.356 9.356 0 0 1-.955 2.531c.667.571 2.844 2.411 2.891 3.187a1.2 1.2 0 0 1-1.158 1.174c-1.09.04-2.347-2.2-3.959-2.864a9.457 9.457 0 0 0-4.152 3.052c-1.717 2.006-1.838 1.743-4.3 2.783-1.738.734-3.471 1.472-5.231 2.152 1.363.8 2.536 1.567 4.155 1.122 4.307-1.2 8.875-2.351 13.231-3.409 3.7-.9 5.5-.672 9.124-.281-1.681-1.624-3.392-3.206-5.029-4.876l-2.932-2.969a12.494 12.494 0 0 0-1.683-1.6m33.726 3.464c-.877.56-1.32 5.474-1.5 6.649-.676 4.333-.384 3.717-4.783 3.289l-17.438-1.565c-3.973-.319-5.083-.729-9.207.3l-9.29 2.352c-4.444 1.149-4.424 2.14-8.5.114l-3.525-1.734c-2.119-1.046-12.958-6.662-14.881-6.957-1.668-.256-3.47 1.442-3.895 2.919a4.368 4.368 0 0 0 .856 3.627c1.934 3.329 3.785 6.7 5.674 10.057h27.112c4.618 0 6.065.037 9.836-3.321 2.207-1.965 1.529-1.574 4.526-1.569H84.73c.592-2 2.538-13.049 2.451-13.838-.573-.564-2.164-.4-2.954-.325m-26.91 16.496a23.369 23.369 0 0 1-3.246 2.558H69.08c1.059 0 2.171.078 3.223 0-.977-.872-2.01-1.678-2.98-2.558Zm20.169 4.928H14.448c-1.156 0-3.083-.3-4 .572a1.839 1.839 0 0 0-.013 2.753c.789.793 2.412.619 3.453.44 0-.551-.114-1.25.3-1.678 1.393-1.442 1.972.688 2.125 1.678h61.172c.033-2.911 2.417-2.955 2.425 0l4.5.005a13.453 13.453 0 0 0 2.417-.055 1.865 1.865 0 0 0-.133-3.678 18.524 18.524 0 0 0-3.041-.038Z"
                                    data-name="Path 43420" />
                                <path
                                    d="M8.743 18.433a7.779 7.779 0 0 1-5.694-1.64A7.908 7.908 0 0 1 7.022 2.716c10.137-1.2 12.278 14.325 1.721 15.717m-.986-13.43c-7.145.685-7.508 10.53.355 11.214 7.988-1.289 6.217-11.5-.355-11.214"
                                    data-name="Path 43421" />
                            </g>
                        </g>
                    </svg>
                    <h3 class="text-3xl text-primary font-bold uppercase">
                        <?php the_field('s2_card3_header'); ?>
                        <?php if (get_field('s2_card3_subheader')): ?>
                            <br><span class="text-lg"><?php the_field('s2_card3_subheader'); ?></span>
                        <?php endif; ?>
                    </h3>
                    <p class="text-sm font-bold">
                        <?php the_field('s2_card3_description'); ?>
                    </p>
                </div>
                <?php
                $button = get_field('s2_card1_button');
                if ($button):
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url($link_url); ?>" class="mt-6 button button--primary"
                        target="<?php echo esc_attr($link_target); ?>">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
                <?php $button = null; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>