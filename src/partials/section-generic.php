<section class="py-24">
    <div class="container mx-auto px-6 flex flex-col gap-12">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <?php
            $header = get_field("rows_section_header_{$i}");
            $desc = get_field("rows_section_description_{$i}");
            $image = get_field("rows_section_image_{$i}");
            $is_even = $i % 2 === 0;
            ?>

            <?php if ($header && $desc && $image): ?>
                <!-- RENDER MAIN ROW -->
                <div class="grid grid-cols-1 md:grid-cols-12 items-center gap-8">
                    <?php if ($is_even): ?>
                        <div class="md:col-span-7 order-2 md:order-1">
                            <div class="xl:mr-24 relative">
                                <svg class="relative top-3 left-[-29px]" xmlns="http://www.w3.org/2000/svg" width="139.999"
                                    height="49.202" viewBox="0 0 139.999 49.202">
                                    <g id="Group_42677" data-name="Group 42677" transform="translate(0)">
                                        <g id="Group_42678" data-name="Group 42678" transform="translate(0 0)">
                                            <path id="Path_43407" data-name="Path 43407"
                                                d="M139.818,46.149A76.852,76.852,0,0,0,111.2,12.261,75.887,75.887,0,0,0,47.042,3.5,75.248,75.248,0,0,0,0,46.99,74.668,74.668,0,0,1,27.819,14.076,73.7,73.7,0,0,1,90.132,5.592,73.064,73.064,0,0,1,135.791,47.83a2.182,2.182,0,1,0,4.051-1.624l-.017-.041Z"
                                                transform="translate(0 0.001)" fill="#0d1e2e" />
                                        </g>
                                    </g>
                                </svg>
                                <div class="text-primary text-7xl mb-6">0<?php echo $i; ?></div>
                                <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($header); ?></h2>
                                <div class="w-6 border-b border-text-color"></div>
                                <p><?php echo $desc; ?></p>
                            </div>
                        </div>
                        <div class="md:col-span-5 flex flex-col items-center relative p-2 md:p-5 order-1 md:order-2">
                            <svg class="absolute top-0 w-full max-w-[524px] h-auto" xmlns="http://www.w3.org/2000/svg"
                                width="523.894" height="184.119" viewBox="0 0 523.894 184.119">
                                <path id="Path_43407" data-name="Path 43407"
                                    d="M.679,172.7a287.59,287.59,0,0,1,107.1-126.813A283.977,283.977,0,0,1,347.86,13.111,281.588,281.588,0,0,1,523.894,175.844a279.417,279.417,0,0,0-104.1-123.169A275.807,275.807,0,0,0,186.61,20.927,273.414,273.414,0,0,0,15.747,178.99,8.166,8.166,0,1,1,.589,172.912c.021-.05.041-.1.063-.152Z"
                                    transform="translate(0 0.001)" fill="#d1a95f" />
                            </svg>

                            <div class="rounded-full overflow-hidden w-full max-w-[508px]">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                    class="w-full h-full object-cover my-4">
                            </div>

                            <svg class="absolute bottom-0 w-full max-w-[524px] h-auto" xmlns="http://www.w3.org/2000/svg"
                                width="501.341" height="160.362" viewBox="0 0 501.341 160.362">
                                <path id="Path_43406" data-name="Path 43406"
                                    d="M24.19,320.419A273.286,273.286,0,0,0,190.31,457.184a275.672,275.672,0,0,0,215.935-26.543A279.593,279.593,0,0,0,510.1,324.262,281.45,281.45,0,0,1,338.957,465.053a283.854,283.854,0,0,1-222.32-27.416A287.8,287.8,0,0,1,9.783,328.1l-.009-.017a8.165,8.165,0,1,1,14.312-7.865c.03.054.076.141.1.2"
                                    transform="translate(-8.763 -315.988)" fill="#d1a95f" />
                            </svg>
                        </div>
                    <?php else: ?>
                        <div class="md:col-span-5 flex flex-col items-center relative p-2 md:p-5">
                            <svg class="absolute top-0 w-full max-w-[524px] h-auto" xmlns="http://www.w3.org/2000/svg"
                                width="523.894" height="184.119" viewBox="0 0 523.894 184.119">
                                <path id="Path_43407" data-name="Path 43407"
                                    d="M.679,172.7a287.59,287.59,0,0,1,107.1-126.813A283.977,283.977,0,0,1,347.86,13.111,281.588,281.588,0,0,1,523.894,175.844a279.417,279.417,0,0,0-104.1-123.169A275.807,275.807,0,0,0,186.61,20.927,273.414,273.414,0,0,0,15.747,178.99,8.166,8.166,0,1,1,.589,172.912c.021-.05.041-.1.063-.152Z"
                                    transform="translate(0 0.001)" fill="#d1a95f" />
                            </svg>

                            <div class="rounded-full overflow-hidden w-full max-w-[508px]">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                                    class="w-full h-full object-cover my-4">
                            </div>

                            <svg class="absolute bottom-0 w-full max-w-[524px] h-auto" xmlns="http://www.w3.org/2000/svg"
                                width="501.341" height="160.362" viewBox="0 0 501.341 160.362">
                                <path id="Path_43406" data-name="Path 43406"
                                    d="M24.19,320.419A273.286,273.286,0,0,0,190.31,457.184a275.672,275.672,0,0,0,215.935-26.543A279.593,279.593,0,0,0,510.1,324.262,281.45,281.45,0,0,1,338.957,465.053a283.854,283.854,0,0,1-222.32-27.416A287.8,287.8,0,0,1,9.783,328.1l-.009-.017a8.165,8.165,0,1,1,14.312-7.865c.03.054.076.141.1.2"
                                    transform="translate(-8.763 -315.988)" fill="#d1a95f" />
                            </svg>
                        </div>
                        <div class="md:col-span-7">
                            <div class="xl:ml-24 relative">
                                <svg class="relative top-3 left-[-29px]" xmlns="http://www.w3.org/2000/svg" width="139.999"
                                    height="49.202" viewBox="0 0 139.999 49.202">
                                    <g id="Group_42677" data-name="Group 42677" transform="translate(0)">
                                        <g id="Group_42678" data-name="Group 42678" transform="translate(0 0)">
                                            <path id="Path_43407" data-name="Path 43407"
                                                d="M139.818,46.149A76.852,76.852,0,0,0,111.2,12.261,75.887,75.887,0,0,0,47.042,3.5,75.248,75.248,0,0,0,0,46.99,74.668,74.668,0,0,1,27.819,14.076,73.7,73.7,0,0,1,90.132,5.592,73.064,73.064,0,0,1,135.791,47.83a2.182,2.182,0,1,0,4.051-1.624l-.017-.041Z"
                                                transform="translate(0 0.001)" fill="#0d1e2e" />
                                        </g>
                                    </g>
                                </svg>
                                <div class="text-primary text-7xl mb-6">0<?php echo $i; ?></div>
                                <h2 class="text-3xl font-bold mb-4"><?php echo esc_html($header); ?></h2>
                                <div class="w-6 border-b border-text-color"></div>
                                <p><?php echo $desc; ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            <?php endif; ?>

            <?php
            if ($i < 4) {
                $extra_section = get_field("rows_extra_section_{$i}");
                if ($extra_section): ?>
                    <div class="w-full">
                        <?php echo $extra_section; ?>
                    </div>
                <?php endif;
            }
            ?>
        <?php endfor; ?>
    </div>
</section>