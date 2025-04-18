<?php
/**
 * Template Name: O nas
 * Description: Szablon podstrony o nas
 */
?>

<?php get_header(); ?>


<!-- Sekcja Hero -->
<section
    class="relative z-10 flex items-center justify-center h-[390px] bg-cover bg-bottom bg-[url(/wp-content/themes/beawesome/img/bg-small-2.png)]"
    role="banner">
    <div class="container mx-auto px-6">
        <h2 class="max-w-xl text-4xl text-white font-extrabold">
            Bierzemy odpowiedzialność <span class="font-medium">za nasze działania.</span>
        </h2>
    </div>
</section>


<!-- Sekcja  -->
<section
    class="pt-36 pb-0 xl:pb-16 mb-16 -mt-20 relative bg-cover bg-[url(/wp-content/themes/beawesome/img/bg-1.jpg)]">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6 flex justify-center order-2 xl:order-1">
                <img src="/wp-content/themes/beawesome/img/ludzie.png" alt="" class="xl:absolute bottom-0 -ml-12">
            </div>
            <div class="col-span-12 xl:col-span-6 order-1 xl:order-2">
                <h2 class="font-bold text-4xl mb-6"><?php the_field('business_title'); ?></h2>
                <?php the_field('business_description'); ?>
                <a href="/kontakt" class="button button--primary mt-8">
                    Zamów ofertę
                </a>
            </div>
        </div>
    </div>
</section>



<section class="mt-24">
    <div class="container mx-auto px-6 pb-24 grid grid-cols-1 md:grid-cols-2 gap-10 items-center border-b">

        <!-- Left Column: Text Content -->
        <div>
            <h2 class="font-bold text-4xl mb-6">
                <?php the_field('business_2_title'); ?>
            </h2>
            
            <?php the_field('business_2_description'); ?>
           
            <h3 class="mt-6 mb-6 font-bold text-4xl">
                <?php the_field('business_2_title_2'); ?>
            </h3>

            <ul class="mb-6">
                <li class="flex items-center mb-6">
                    <svg class="w-48 mr-3" xmlns="http://www.w3.org/2000/svg" width="53.613" height="33.11">
                        <path fill="#093363"
                            d="m1.016 16.707 4.273 1.686a1.6 1.6 0 0 0 1.621-.264l3.384 2.134.58.408a2.86 2.86 0 0 0 2.733 4.367 2.859 2.859 0 0 0 3.167 2.686 2.859 2.859 0 0 0 3.168 2.685 2.859 2.859 0 0 0 5.036 1.69l.679-.8 1.144.844a3.15 3.15 0 0 0 5.032-2.163 3.128 3.128 0 0 0 4.237-2.881 3.133 3.133 0 0 0 3.736-2.887 3.128 3.128 0 0 0 3.648-4.318l3.058-1.964a1.6 1.6 0 0 0 1.814.459l4.273-1.686a1.605 1.605 0 0 0 .9-2.08l-1.953-4.95a.785.785 0 0 0-1.461.576l1.953 4.95a.033.033 0 0 1-.018.043l-4.273 1.686a.033.033 0 0 1-.043-.018L42.336 3.299a.03.03 0 0 1 0-.025.031.031 0 0 1 .018-.017l4.273-1.686a.03.03 0 0 1 .025 0 .031.031 0 0 1 .017.018l2.07 5.248a.785.785 0 0 0 1.461-.576l-2.07-5.247a1.605 1.605 0 0 0-2.08-.9l-4.271 1.685a1.6 1.6 0 0 0-.962 1.9l-2.291.845a4.459 4.459 0 0 1-2.238.22l-2.315-.367a.785.785 0 0 0-.246 1.551l2.315.367a6.034 6.034 0 0 0 3.027-.3l2.311-.853 4.47 11.33-3.37 2.165-.057-.042-6.5-4.794a.788.788 0 0 0-.618-.139A9.135 9.135 0 0 1 27 10.837a1.775 1.775 0 0 0-2.479-.085c-2.08 1.868-4.987 3.69-7.022 1.757a.467.467 0 0 1 .1-.745 46.416 46.416 0 0 0 7.435-6.192 2.388 2.388 0 0 1 2.07-.677l2.981.473a.785.785 0 0 0 .246-1.551l-2.981-.473a3.964 3.964 0 0 0-3.432 1.124c-.25.253-.545.546-.879.868a11.21 11.21 0 0 0-3.12-.629 36.17 36.17 0 0 0-4.1-.163 3.659 3.659 0 0 1-1.637-.274l-1.384-.579a1.605 1.605 0 0 0-.963-1.892L7.562.112a1.605 1.605 0 0 0-2.08.9L.112 14.627a1.6 1.6 0 0 0 .9 2.08Zm13.264 6.322a1.291 1.291 0 0 1-1.97-1.668l1.943-2.28a1.291 1.291 0 1 1 1.969 1.669Zm3.167 2.685a1.291 1.291 0 0 1-1.97-1.668l1.943-2.28a1.3 1.3 0 0 1 1.915-.06l.01.012a1.292 1.292 0 0 1 .044 1.718Zm3.167 2.685a1.291 1.291 0 0 1-1.97-1.668l1.943-2.28a1.291 1.291 0 1 1 1.969 1.67Zm5.119.393-.009.012-1.943 2.28a1.291 1.291 0 0 1-1.97-1.668l1.943-2.28a1.29 1.29 0 0 1 1.98 1.656Zm-13.5-23.636 1.342.562a5.234 5.234 0 0 0 2.344.393 36.223 36.223 0 0 1 3.911.164 9.64 9.64 0 0 1 1.887.3 39.661 39.661 0 0 1-4.991 3.889 2.037 2.037 0 0 0-.312 3.189c1.312 1.247 4.246 2.68 9.153-1.727a.211.211 0 0 1 .295 0 10.818 10.818 0 0 0 9.385 3.356c.412.29-.386-.3 6.244 4.6a1.608 1.608 0 0 1 .352 2.264 1.563 1.563 0 0 1-2.17.3c-.931-.687-.244-.164-3.515-2.685a.785.785 0 1 0-.958 1.238l2.714 2.092a1.579 1.579 0 0 1-.142 2.059 1.613 1.613 0 0 1-2.084.119c-.623-.459-.105-.066-2.96-2.264a.785.785 0 0 0-.958 1.245l2.406 1.849a1.576 1.576 0 0 1-.064 2 1.612 1.612 0 0 1-2.154.192c-1.083-.8-.54-.387-2.626-2a.785.785 0 1 0-.961 1.242l1.669 1.291a1.568 1.568 0 0 1-.194 1.917 1.606 1.606 0 0 1-2.112.147l-1.056-.779.243-.285a2.861 2.861 0 0 0-2.494-4.7 2.859 2.859 0 0 0-3.09-2.693l-.076.007v-.076a2.84 2.84 0 0 0-.676-1.623l-.007-.008a2.862 2.862 0 0 0-2.479-.977 2.861 2.861 0 0 0-5.038-1.694l-1.184 1.389-.692-.486-.033-.022-3.485-2.2 4.572-11.59ZM1.573 15.199l5.37-13.611a.033.033 0 0 1 .031-.021h.012l4.273 1.686a.033.033 0 0 1 .019.043l-5.37 13.611a.032.032 0 0 1-.043.018l-4.273-1.686a.033.033 0 0 1-.019-.043Z"
                            data-name="Path 42920" />
                    </svg>
                    Sprzedaż i świadczenie usług B2B, kontakt z klientami, pozyskiwanie leadów czy organizacja kampanii
                    marketingowych w social mediach lub w Internecie,
                    zarządzanie kadrami, współpraca z dużymi Partnerami, itd.?
                </li>
                <li class="flex items-center mb-6">
                    <svg class="w-24 ml-1 mr-2" xmlns="http://www.w3.org/2000/svg" width="34.644" height="41.573">
                        <g data-name="Group 40960">
                            <g data-name="Group 40959">
                                <path fill="#093363"
                                    d="M10.394 29.794H9.008a.693.693 0 1 0 0 1.386h1.386a.693.693 0 1 0 0-1.386Z"
                                    data-name="Path 42921" />
                            </g>
                        </g>
                        <g data-name="Group 40962">
                            <g data-name="Group 40961">
                                <path fill="#093363"
                                    d="M29.794 29.794H13.165a.693.693 0 1 0 0 1.386h16.629a.693.693 0 1 0 0-1.386Z"
                                    data-name="Path 42922" />
                            </g>
                        </g>
                        <g data-name="Group 40964">
                            <g data-name="Group 40963">
                                <path fill="#093363"
                                    d="M10.394 25.637H9.008a.693.693 0 1 0 0 1.386h1.386a.693.693 0 1 0 0-1.386Z"
                                    data-name="Path 42923" />
                            </g>
                        </g>
                        <g data-name="Group 40966">
                            <g data-name="Group 40965">
                                <path fill="#093363"
                                    d="M29.794 25.637H13.165a.693.693 0 1 0 0 1.386h16.629a.693.693 0 1 0 0-1.386Z"
                                    data-name="Path 42924" />
                            </g>
                        </g>
                        <g data-name="Group 40968">
                            <g data-name="Group 40967">
                                <path fill="#093363"
                                    d="M10.394 21.479H9.008a.693.693 0 0 0 0 1.386h1.386a.693.693 0 0 0 0-1.386Z"
                                    data-name="Path 42925" />
                            </g>
                        </g>
                        <g data-name="Group 40970">
                            <g data-name="Group 40969">
                                <path fill="#093363"
                                    d="M29.794 21.479H13.165a.693.693 0 0 0 0 1.386h16.629a.693.693 0 1 0 0-1.386Z"
                                    data-name="Path 42926" />
                            </g>
                        </g>
                        <g data-name="Group 40972">
                            <g data-name="Group 40971">
                                <path fill="#093363"
                                    d="M10.394 17.322H9.008a.693.693 0 0 0 0 1.386h1.386a.693.693 0 0 0 0-1.386Z"
                                    data-name="Path 42927" />
                            </g>
                        </g>
                        <g data-name="Group 40974">
                            <g data-name="Group 40973">
                                <path fill="#093363"
                                    d="M29.794 17.322H13.165a.693.693 0 0 0 0 1.386h16.629a.693.693 0 0 0 0-1.386Z"
                                    data-name="Path 42928" />
                            </g>
                        </g>
                        <g data-name="Group 40976">
                            <g data-name="Group 40975">
                                <path fill="#093363"
                                    d="M10.394 13.165H9.008a.693.693 0 1 0 0 1.386h1.386a.693.693 0 1 0 0-1.386Z"
                                    data-name="Path 42929" />
                            </g>
                        </g>
                        <g data-name="Group 40978">
                            <g data-name="Group 40977">
                                <path fill="#093363"
                                    d="M29.794 13.165H13.165a.693.693 0 1 0 0 1.386h16.629a.693.693 0 1 0 0-1.386Z"
                                    data-name="Path 42930" />
                            </g>
                        </g>
                        <g data-name="Group 40980">
                            <g data-name="Group 40979">
                                <path fill="#093363"
                                    d="M34.635 10.35a.655.655 0 0 0-.035-.178c-.008-.022-.013-.044-.023-.065a.693.693 0 0 0-.139-.2L24.738.2a.692.692 0 0 0-.2-.139c-.021-.01-.043-.015-.064-.023a.69.69 0 0 0-.179-.036c-.012 0-.025-.006-.04-.006H4.85a.693.693 0 0 0-.693.693v2.083H.693A.693.693 0 0 0 0 3.464V40.88a.693.693 0 0 0 .693.693h29.1a.693.693 0 0 0 .693-.693v-3.464h3.464a.693.693 0 0 0 .693-.693v-26.33c.001-.015-.006-.028-.008-.043Zm-9.691-7.984L32.279 9.7h-7.335ZM29.1 40.187H1.386V4.157h2.772v32.566a.693.693 0 0 0 .693.693H29.1Zm4.157-4.157H5.543V1.386h18.015v9.008a.693.693 0 0 0 .693.693h9.008Z"
                                    data-name="Path 42931" />
                            </g>
                        </g>
                        <g data-name="Group 40982">
                            <g data-name="Group 40981">
                                <path fill="#093363"
                                    d="M13.165 6.236H9.008a.693.693 0 0 0-.693.693v4.157a.693.693 0 0 0 .693.693h4.157a.693.693 0 0 0 .693-.693V6.929a.693.693 0 0 0-.693-.693Zm-.693 4.157H9.7V7.622h2.772Z"
                                    data-name="Path 42932" />
                            </g>
                        </g>
                    </svg>
                    Obsługa pracowników, podpisywanie umów z klientami,
                    kontrahentami i współpracownikami w modelu B2B?
                </li>
                <li class="flex items-center">
                    <svg class="w-32 mr-3" xmlns="http://www.w3.org/2000/svg" width="42.624" height="42.035">
                        <path fill="#093363"
                            d="M40.1 0H2.521A2.524 2.524 0 0 0 0 2.521v29.228a2.524 2.524 0 0 0 2.521 2.521h15.105l-.977 3.051H14.28a2.656 2.656 0 0 0-2.653 2.653v.817a1.246 1.246 0 0 0 1.245 1.245h16.88A1.246 1.246 0 0 0 31 40.791v-.817a2.656 2.656 0 0 0-2.653-2.653h-2.372L25 34.27h15.1a2.524 2.524 0 0 0 2.521-2.521V2.521A2.524 2.524 0 0 0 40.1 0ZM28.343 38.57a1.406 1.406 0 0 1 1.4 1.4v.812H12.867v-.817a1.406 1.406 0 0 1 1.4-1.4ZM17.96 37.321l.977-3.051h4.75l.977 3.051Zm23.415-5.572a1.274 1.274 0 0 1-1.275 1.272H2.521a1.274 1.274 0 0 1-1.272-1.272v-2.07h40.126Zm0-3.319H1.248V2.521a1.274 1.274 0 0 1 1.273-1.272H40.1a1.274 1.274 0 0 1 1.272 1.272Zm0 0"
                            data-name="Path 42933" />
                    </svg>
                    Zarządzanie stroną internetową, korzystanie z systemu CRM, prowadzenie fanpage'a na Facebooku lub
                    innych narzędzi online wspierających działalność?
                </li>
            </ul>
            <p>Wszystkie te działania wymagają zgodności z przepisami dotyczącymi ochrony danych osobowych oraz
                odpowiedniego uregulowania i udokumentowania (zgody, polityki, klauzule, analizy ryzyka).</p>
        </div>

        <!-- Right Column: Image -->
        <div class="h-full">
            <img class="h-full" src="/wp-content/themes/beawesome/img/praca.png" alt="Bezpieczny rozwój biznesu"
                class="w-full h-full object-cover rounded-lg">
        </div>

    </div>
</section>


<section class="my-24">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Left Column: Text Content -->
        <div class="mb-6">
            <h2 class="font-bold text-4xl mb-6">
                <?php the_field('how_we_work_title'); ?>
            </h2>
            <p>
                <?php the_field('how_we_work_text'); ?>
            </p>
        </div>

        <!-- Right Column: Image -->
        <div>
            <img src="/wp-content/themes/beawesome/img/tarcza.png" alt="Security process"
                class="w-full max-w-80 mx-auto">
        </div>
    </div>

    <!-- Steps Section -->
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="mt-6">
            <span class="text-white text-sm font-bold bg-secondary px-4 py-1 rounded-md inline-block uppercase">
                Faza 1
            </span>
            <div class="mt-4 pl-4 border-l">
                <h3 class="mt-2 font-bold text-xl text-primary uppercase"><?php the_field('phase_1_title'); ?></h3>
                <p class="font-semibold">
                    <?php the_field('phase_1_text'); ?>
                </p>
            </div>

        </div>

        <div class="mt-6">
            <span class="text-white text-sm font-bold bg-secondary px-4 py-1 rounded-md inline-block uppercase">
                Faza 2
            </span>
            <div class="mt-4 pl-4 border-l">
                <h3 class="mt-2 font-bold text-xl text-primary uppercase"><?php the_field('phase_2_title'); ?></h3>
                <p class="font-semibold">
                    <?php the_field('phase_2_text'); ?>
                </p>
            </div>
        </div>

        <div class="mt-6">
            <span class="text-white text-sm font-bold bg-secondary px-4 py-1 rounded-md inline-block uppercase">
                Faza 3
            </span>
            <div class="mt-4 pl-4 border-l">
                <h3 class="mt-2 font-bold text-xl text-primary uppercase"><?php the_field('phase_3_title'); ?></h3>
                <p class="font-semibold">
                    <?php the_field('phase_3_text'); ?>
                </p>
            </div>

        </div>

        <div class="mt-6">
            <span class="text-white text-sm font-bold bg-secondary px-4 py-1 rounded-md inline-block uppercase">
                Faza 4
            </span>
            <div class="mt-4 pl-4 border-l">
                <h3 class="mt-2 font-bold text-xl text-primary uppercase"><?php the_field('phase_4_title'); ?></h3>
                <p class="font-semibold">
                    <?php the_field('phase_4_text'); ?>
                </p>
            </div>
        </div>

        <div class="md:col-span-2 mt-6">
            <span class="text-white text-sm font-bold bg-secondary px-4 py-1 rounded-md inline-block uppercase">
                Faza 5
            </span>
            <div class="mt-4 pl-4 border-l">
                <h3 class="mt-2 font-bold text-xl text-primary uppercase"><?php the_field('phase_5_title'); ?></h3>
                <p class="font-semibold">
                    <?php the_field('phase_5_text'); ?>
                </p>
            </div>
        </div>

    </div>
</section>


<section class="relative py-24 bg-cover bg-[url(/wp-content/themes/beawesome/img/bg-1.jpg)]">
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-5xl md:text-6xl font-bold mb-6"><?php the_field('about_title'); ?></h2>
        <p class="max-w-3xl mx-auto">
            <?php the_field('about_description'); ?>
        </p>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 place-items-center relative">
            <!-- Box 1 -->
            <div class="flex flex-col items-center text-center max-w-md h-full">
                <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                    <div
                        class="w-[162px] h-[162px] p-2 border bg-secondary border-primary rounded-full flex flex-col justify-center items-center">
                        <span class="text-4xl font-bold text-primary"><?php the_field('history_1_date'); ?></span>
                    </div>
                </div>
                <p><?php the_field('history_1_description'); ?></p>
            </div>

            <!-- Arrow 1 -->
            <div class="hidden lg:block absolute left-[30%] top-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="87.004" height="86.951">
                    <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                        d="m71.32 30.914-4.733 34.221-7.575-13.12C27.646 70.124 9.366 46.818 2.174 32.349c5.385 6.285 12.533 17.255 44.718-1.327l-7.575-13.12Z"
                        data-name="Icon akar-arrow-back-thick" />
                </svg>
            </div>

            <!-- Box 2 -->
            <div class="flex flex-col items-center text-center max-w-md h-full">
                <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                    <div
                        class="w-[162px] h-[162px] p-2 border bg-primary border-primary rounded-full flex flex-col justify-center items-center">
                        <span class="text-4xl font-bold text-white"><?php the_field('history_2_date'); ?></span>
                    </div>
                </div>
                <p><?php the_field('history_2_description'); ?></p>
            </div>

            <!-- Arrow 2 -->
            <div class="hidden lg:block absolute left-[64%] top-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="87.004" height="86.951">
                    <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                        d="m71.32 56.038-4.733-34.222-7.575 13.12C27.646 16.827 9.366 40.134 2.174 54.602c5.385-6.284 12.533-17.255 44.718 1.327l-7.575 13.12Z"
                        data-name="Icon akar-arrow-back-thick" />
                </svg>
            </div>

            <!-- Box 3 -->
            <div class="flex flex-col items-center text-center max-w-md h-full">
                <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                    <div
                        class="w-[162px] h-[162px] p-2 border bg-secondary border-primary rounded-full flex flex-col justify-center items-center">
                        <span class="text-4xl font-bold text-primary"><?php the_field('history_3_date'); ?></span>
                    </div>
                </div>
                <p><?php the_field('history_3_description'); ?></p>
            </div>

            <!-- Box 4 -->
            <div class="flex flex-col items-center text-center max-w-md h-full">
                <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                    <div
                        class="w-[162px] h-[162px] p-2 border bg-secondary border-primary rounded-full flex flex-col justify-center items-center">
                        <span class="text-4xl font-bold text-primary"><?php the_field('history_4_date'); ?></span>
                    </div>
                </div>
                <p><?php the_field('history_4_description'); ?></p>
            </div>

            <!-- Arrow 3 -->
            <div class="hidden lg:block absolute left-[30%] top-[61%]">
                <svg xmlns="http://www.w3.org/2000/svg" width="87.004" height="86.951">
                    <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                        d="m71.32 30.914-4.733 34.221-7.575-13.12C27.646 70.124 9.366 46.818 2.174 32.349c5.385 6.285 12.533 17.255 44.718-1.327l-7.575-13.12Z"
                        data-name="Icon akar-arrow-back-thick" />
                </svg>
            </div>

            <!-- Box 5 -->
            <div class="flex flex-col items-center text-center max-w-md h-full">
                <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                    <div
                        class="w-[162px] h-[162px] p-2 border bg-primary border-primary rounded-full flex flex-col justify-center items-center">
                        <span class="text-4xl font-bold text-white"><?php the_field('history_5_date'); ?></span>
                    </div>
                </div>
                <p><?php the_field('history_5_description'); ?></p>
            </div>

            <!-- Arrow 4 -->
            <div class="hidden lg:block absolute left-[64%] top-[61%]">
                <svg xmlns="http://www.w3.org/2000/svg" width="87.004" height="86.951">
                    <path fill="none" stroke="#4ec3e0" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                        d="m71.32 56.038-4.733-34.222-7.575 13.12C27.646 16.827 9.366 40.134 2.174 54.602c5.385-6.284 12.533-17.255 44.718 1.327l-7.575 13.12Z"
                        data-name="Icon akar-arrow-back-thick" />
                </svg>
            </div>

            <!-- Box 6 -->
            <div class="flex flex-col items-center text-center max-w-md h-full">
                <div class="p-2 mb-4 border border-primary/30 rounded-full relative">
                    <div
                        class="w-[162px] h-[162px] p-2 border bg-secondary border-primary rounded-full flex flex-col justify-center items-center">
                        <span class="text-4xl font-bold text-primary"><?php the_field('history_6_date'); ?></span>
                    </div>
                </div>
                <p><?php the_field('history_6_description'); ?></p>
            </div>
        </div>
    </div>
</section>


<section class="my-24 bg-white">
    <div class="container mx-auto px-6 text-center mb-12">
        <h2 class="font-bold text-5xl md:text-6xl mb-6">
            Dlaczego warto wybrać beawesome?
        </h2>
        <p class="max-w-3xl mx-auto">
            Rozumiemy, że każda firma jest inna i ma swoje unikalne potrzeby. Dlatego nasze podejście jest indywidualne
            – dostosowujemy rozwiązania do specyfiki działalności, zapewniając zgodność z RODO i bezpieczeństwo IT w
            sposób, który wspiera codzienne operacje biznesowe.

            Dzięki naszej wiedzy i doświadczeniu, pomagamy firmom i organizacjom
            z administracji publicznej bezpiecznie i skutecznie zarządzać danymi,
            nie obciążając budżetu.

        </p>
    </div>

    <div class="container mx-auto px-6 pb-24 grid grid-cols-1 md:grid-cols-2 gap-10 border-b">
        <div class="flex flex-col">
            <span class="text-6xl md:text-7xl xl:text-8xl font-Montserrat font-bold text-outline">01</span>
            <div>
                <h3 class="text-3xl font-bold">Działamy błyskawicznie i skrupulatnie!</h3>
                <p class="mt-2">
                    Nasza średnia reakcja na powierzone zadanie to zaledwie 3 godziny! Gwarantujemy, że podejmiemy
                    działania w ciągu maksymalnie 10 godzin roboczych.
                </p>
            </div>
        </div>

        <div class="flex flex-col">
            <span class="text-6xl md:text-7xl xl:text-8xl font-Montserrat font-bold text-outline">02</span>
            <div>
                <h3 class="text-3xl font-bold">Jesteśmy responsywni i proaktywni!</h3>
                <p class="mt-2">
                    Naszym celem jest wspieranie Państwa, a nie opóźnianie działań. Dzięki naszemu podejściu możecie
                    Państwo mieć pewność, że wszystkie nasze działania są realizowane sprawnie.
                </p>
            </div>
        </div>

        <div class="flex flex-col">
            <span class="text-6xl md:text-7xl xl:text-8xl font-Montserrat font-bold text-outline">03</span>
            <div>
                <h3 class="text-3xl font-bold">Zaawansowane narzędzia do monitorowania postępów!</h3>
                <p class="mt-2">
                    Zarządzamy zadaniami przy użyciu nowoczesnych narzędzi, takich jak Monday.com, Slack, Google
                    Workspace, Zapier, co zapewnia pełną kontrolę nad realizacją.
                </p>
            </div>
        </div>

        <div class="flex flex-col">
            <span class="text-6xl md:text-7xl xl:text-8xl font-Montserrat font-bold text-outline">04</span>
            <div>
                <h3 class="text-3xl font-bold">Szerokie kompetencje!</h3>
                <p class="mt-2">
                    Nasza firma to nie tylko prawnicy – jesteśmy zespołem ekspertów z wielu dziedzin, od ochrony danych
                    po cyberbezpieczeństwo.
                </p>
            </div>
        </div>

        <div class="flex flex-col">
            <span class="text-6xl md:text-7xl xl:text-8xl font-Montserrat font-bold text-outline">05</span>
            <div>
                <h3 class="text-3xl font-bold">Kompleksowa obsługa "od A do Z"</h3>
                <p class="mt-2">
                    Oferujemy pełne wsparcie – audytujemy, wdrażamy, utrzymujemy system RODO, dbamy o dokumentację i
                    szkolenia.
                </p>
            </div>
        </div>

        <div class="flex flex-col">
            <span class="text-6xl md:text-7xl xl:text-8xl font-Montserrat font-bold text-outline">06</span>
            <div>
                <h3 class="text-3xl font-bold">Realne doświadczenie z UODO!</h3>
                <p class="mt-2">
                    Mamy na swoim koncie ponad 60 zakończonych postępowań wyjaśniających z UODO. Nasza praktyka w
                    komunikacji z organami nadzorczymi to realna wartość dla naszych klientów.
                </p>
            </div>
        </div>

        <div class="flex flex-col">
            <span class="text-6xl md:text-7xl xl:text-8xl font-Montserrat font-bold text-outline">07</span>
            <div>
                <h3 class="text-3xl font-bold">Bezpieczeństwo i poufność to nasza specjalność</h3>
                <p class="mt-2">
                    Działamy na rynku od 2010 roku, oferując profesjonalną obsługę
                    w zakresie ochrony danych osobowych.

                    Jesteśmy gwarantem poufności i bezpieczeństwa informacji, dlatego warto zaufać nam, jako
                    sprawdzonemu partnerowi.

                    W szczególności, jeśli chodzi o zbieranie i przetwarzanie poufnych
                    danych stanowiących tajemnicę przedsiębiorstwa, jesteśmy najlepszym wyborem.
                </p>
            </div>
        </div>
    </div>
</section>



<section class="my-24">
    <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mt-16 relative">
        <!-- Tekst -->
        <div class="max-w-2xl">
            <h2 class="font-bold text-2xl md:text-3xl mb-4">Case Study:<span class="font-medium"> Obrona Postępowań
                    UODO</span></h2>
            <p class="mb-2">
                Współpracując z różnymi interdyscyplinarnymi organizacjami, mieliśmy przyjemność wielokrotnie wspierać
                je w procesach związanych z postępowaniami UODO.
            </p>
            <p class="mb-2">
                Nasze doświadczenie i zaangażowanie pozwoliły na skuteczną obronę interesów naszych klientów,
                zapewniając im nie tylko zgodność z przepisami, ale także ochronę dobrego imienia.
            </p>
            <p>
                Dzięki naszej pracy klienci uniknęli wysokich kar finansowych i mogli dalej rozwijać swoje działalności
                bez obawy o konsekwencje prawne.
            </p>

            <hr class="border-gray-dark w-24 my-10">

            <blockquote class="italic border-l-4 pl-4">
                "W obliczu kontroli UODO nasza firma stanęła przed ogromnym wyzwaniem. Groziły nam wysokie kary
                finansowe, a brak odpowiedniej dokumentacji mógł negatywnie wpłynąć na naszą reputację. Zespół
                beawesome przeprowadził dokładny audyt, zidentyfikował potencjalne zagrożenia i przygotował
                skuteczną
                strategię obrony. Dzięki ich profesjonalizmowi uniknęliśmy sankcji, a nasze procedury zostały
                dostosowane do wymagań prawa. To partner, na którym można polegać!"
            </blockquote>
            <p class="mt-4 text-sm">
                <strong>Branża:</strong> E-commerce <br>
                <strong>Rezultat:</strong> Uniknięcie kary w wysokości 500 000 zł i pełna zgodność z RODO
            </p>
            <p class="mt-4 font-semibold">Anna Kowalska</p>
            <p class="text-sm">CEO, XYZ Sp. z o.o.</p>

            <!-- Nawigacja -->
            <!-- <div class="mt-6 flex">
                <button
                    class="w-10 h-10 flex items-center justify-center bg-secondary text-white rounded-full hover:bg-primary transition">
                    ←
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center bg-secondary text-white rounded-full hover:bg-primary transition">
                    →
                </button>
            </div> -->
        </div>

        <!-- Grafika -->
        <div class="max-w-md lg:max-w-lg mx-auto">
            <img src="/wp-content/themes/beawesome/img/tarcza2.svg" alt="Tarcza bezpieczeństwa"
                class="hidden lg:block absolute top-0 -right-10 top w-[700px]">
        </div>
    </div>
</section>


<?php get_footer(); ?>