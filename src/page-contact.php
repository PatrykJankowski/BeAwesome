<?php
/* Template Name: Kontakt */
get_header();
?>

<?php get_template_part('partials/section-baner', null, ['bg' => '/wp-content/themes/beawesome/img/bg-hero.jpg']); ?>

<section class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10">
    <!-- Left Section: Image & Contact Form -->
    <div>
        <!-- Image Section -->
        <img src="/wp-content/themes/beawesome/img/kontakt.webp" alt="Kontakt" class="rounded-lg w-full">


        <!-- Contact Form Section -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold mb-6">Formularz kontaktowy</h2>
            <?php echo do_shortcode('[contact-form-7 id="24df9c3" title="Formularz kontaktowy"]'); ?>
        </div>
    </div>

    <!-- Right Section: Contact Information -->
    <div>
        <h2 class="mb-4 text-3xl font-bold">Skontaktuj się z nami</h2>
        <p class="mb-4">Masz pytania? Potrzebujesz wsparcia w zakresie ochrony danych osobowych, bezpieczeństwa
            informacji lub ochrony sygnalistów?
            Skontaktuj się z nami – chętnie pomożemy!</p>
        <p>Zajmujemy się ochroną danych osobowych, bezpieczeństwem informacji oraz wdrożeniem procedur dotyczących
            ochrony sygnalistów. Jeśli masz jakiekolwiek wątpliwości dotyczące zgodności z przepisami, chcesz
            zabezpieczyć swoją firmę przed ryzykiem prawnym lub potrzebujesz indywidualnego doradztwa – jesteśmy tutaj,
            aby Ci pomóc!</p>
        <div class="mt-6">
            <h3 class="text-xl font-semibold mb-2">Infolinia</h3>
            <p>Czynna w godzinach: 8:30 - 17:00</p>
        </div>

        <div class="mt-6">
            <h3 class="text-xl font-semibold mb-2">Dane kontaktowe</h3>

            <?php if (get_field('company')): ?>
                <p><strong><?php the_field('company'); ?></strong></p>
            <?php endif; ?>

            <?php if (get_field('address') || get_field('postal_code')): ?>
                <p>
                    <?php the_field('address'); ?>
                    <?php if (get_field('postal_code')): ?>, <?php the_field('postal_code'); ?><?php endif; ?>
                </p>
            <?php endif; ?>

            <div class="mt-2">
                <?php if (get_field('phone')): ?>
                    <p>telefon: <a
                            href="tel:+48<?php echo preg_replace('/\D/', '', get_field('phone')); ?>"><?php the_field('phone'); ?></a>
                    </p>
                <?php endif; ?>

                <?php if (get_field('phone')): ?>
                    <p>telefon komórkowy: <a
                            href="tel:+48<?php echo preg_replace('/\D/', '', get_field('phone')); ?>"><?php the_field('mobile_phone'); ?></a>
                    </p>
                <?php endif; ?>

                <?php if (get_field('fax')): ?>
                    <p>fax: <a
                            href="tel:+48<?php echo preg_replace('/\D/', '', get_field('phone')); ?>"><?php the_field('fax'); ?></a>
                    </p>
                <?php endif; ?>

                <?php if (get_field('email')): ?>
                    <p>e-mail: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>