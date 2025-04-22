<?php
$pricing_page_id = $args['pricing_page_id'] ?? get_the_ID();
?>


<div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl lg:text-5xl font-bold mb-4">
        <?php the_field('pricelist_header', $pricing_page_id); ?>
    </h2>
    <p class="mb-12">
        <?php the_field('pricelist_description', $pricing_page_id); ?>
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="rounded-2xl p-12 bg-dark text-white flex flex-col justify-between">
            <div>
                <h3 class="text-3xl font-bold mb-6"><?php the_field('pricelist_header_1', $pricing_page_id); ?></h3>
                <p class="text-primary mb-6">
                    <?php the_field('pricelist_package_1_description', $pricing_page_id); ?>
                </p>
                <p class="text-5xl font-bold mb-6">
                    <?php the_field('pricelist_package_1_price', $pricing_page_id); ?> <span
                        class="text-xl font-normal">zł/mies.</span>
                </p>
                <p class="text-sm mb-6">
                    <?php the_field('pricelist_package_1_price_description', $pricing_page_id); ?>
                </p>
                <a href="#" class="button button--primary mb-6">
                    ROZPOCZNIJ
                </a>
                <p class="text-primary mb-6 text-sm">
                    <?php the_field('pricelist_package_1_button_description', $pricing_page_id); ?>
                </p>
            </div>
            <ul class="text-sm space-y-4 mb-auto">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <?php if (get_field("pricelist_package_1_feature_$i", $pricing_page_id)): ?>
                        <li>✔ <?php the_field("pricelist_package_1_feature_$i", $pricing_page_id); ?></li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </div>

        <div class="rounded-2xl p-12 bg-gray-3 text-dark flex flex-col justify-between">
            <div>
                <h3 class="text-3xl font-bold mb-6"><?php the_field('pricelist_header_2', $pricing_page_id); ?></h3>
                <p class="text-primary mb-6">
                    <?php the_field('pricelist_package_2_description', $pricing_page_id); ?>
                </p>
                <p class="text-4xl font-bold mb-6">
                    <?php the_field('pricelist_package_2_price', $pricing_page_id); ?> <span
                        class="text-xl font-normal">zł/mies.</span>
                </p>
                <p class="text-sm mb-6">
                    <?php the_field('pricelist_package_2_price_description', $pricing_page_id); ?>
                </p>
                <a href="#" class="button button--primary mb-6">
                    ROZPOCZNIJ
                </a>
                <p class="text-primary mb-6 text-sm">
                    <?php the_field('pricelist_package_2_button_description', $pricing_page_id); ?>
                </p>
            </div>
            <ul class="text-sm space-y-4 mb-auto">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <?php if (get_field("pricelist_package_2_feature_$i", $pricing_page_id)): ?>
                        <li>✔ <?php the_field("pricelist_package_2_feature_$i", $pricing_page_id); ?></li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </div>

        <div class="rounded-2xl p-12 bg-primary text-dark flex flex-col justify-between">
            <div>
                <h3 class="text-3xl font-bold mb-6"><?php the_field('pricelist_header_3', $pricing_page_id); ?></h3>
                <p class="mb-6"><?php the_field('pricelist_package_3_description', $pricing_page_id); ?></p>
                <p class="text-white text-4xl font-bold mb-6">
                    <?php the_field('pricelist_package_3_price', $pricing_page_id); ?> <span
                        class="text-xl font-normal">zł/mies.</span>
                </p>
                <p class="text-sm text-white mb-6">
                    <?php the_field('pricelist_package_3_price_description', $pricing_page_id); ?>
                </p>
                <a href="#" class="button mb-6">
                    ROZPOCZNIJ
                </a>
                <p class="mb-6 text-sm">
                    <?php the_field('pricelist_package_3_button_description', $pricing_page_id); ?>
                </p>
            </div>
            <ul class="text-sm space-y-4 mb-auto">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <?php if (get_field("pricelist_package_3_feature_$i", $pricing_page_id)): ?>
                        <li>✔ <?php the_field("pricelist_package_3_feature_$i", $pricing_page_id); ?></li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>