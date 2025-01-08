<?php
/**
 * Template Name: Home Template
 */

get_header(); ?>

<div class="homepage font-sans md:-mt-[calc(6rem)]">
    <?php if( have_rows('content_info') ): ?>
        <?php while ( have_rows('content_info') ) : the_row(); ?>

            <?php if( get_row_layout() == 'hero' ): ?>
                <?php 
                    $hero_items = get_sub_field('hero_item');
                    $hero_schedule = get_sub_field('hero_schedule');
                ?>
                <?php if( $hero_items || $hero_schedule ): ?>
                    <div class="hero-section bg-white pb-6 sm:pb-8 lg:pb-12 relative h-[90%] lg:h-screen">

                        <div class="mx-auto max-w-screen-xl px-4 md:px-8 md:h-full">
                            <section class="flex flex-col-reverse justify-between gap-6 mb-4 md:mb-0 sm:gap-10 md:gap-10 md:flex-row md:items-center md:h-full">
                            
                                <?php if( $hero_items ): ?>
                                    <?php foreach( $hero_items as $hero_item ): ?>
                                        <!-- Hero Item Content - start -->
                                        <div class="flex flex-col justify-center sm:text-center lg:py-12 md:text-left xl:w-4/6 xl:py-24">
                                            <?php if( $hero_item['hero_heading'] ): ?>
                                                <h1 class="mb-8 text-4xl font-bold text-primary sm:text-5xl md:mb-12 md:text-6xl"><?php echo esc_html($hero_item['hero_heading']); ?></h1>
                                            <?php endif; ?>
                                            <?php if( $hero_item['hero_description'] ): ?>
                                                <p class="mb-8 leading-relaxed text-primary md:mb-12 lg:w-4/5 xl:text-lg"><?php echo esc_html($hero_item['hero_description']); ?></p>
                                            <?php endif; ?>
                                            
                                            <?php if( $hero_item['hero_link'] ): 
                                                    $link = $hero_item['hero_link'];
                                                    ?>
                                            <div class="flex flex-col gap-2.5 sm:flex-row justify-start">
                                                <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>" class="inline-block rounded-full bg-orange px-8 py-3 text-center text-sm font-medium text-white outline-none transition duration-100  md:text-base"><?php echo esc_html($link['title']); ?></a>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <!-- Hero Item Content - end -->

                                        <!-- Hero Item Image - start -->
                                        <div class="flex justify-end h-auto overflow-hidden xl:w-5/6">
                                            <?php if( $hero_item['hero_image'] ): ?>
                                                <img src="<?php echo esc_url($hero_item['hero_image']); ?>" alt="Hero Image" width="450" height="508" class="h-full object-cover object-center" />
                                            <?php endif; ?>
                                        </div>
                                        <!-- Hero Item Image - end -->
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </section>
                        </div>

                        <?php if( $hero_schedule ): ?>
                            <div class="bg-[#27AAE1] bg-opacity-70 w-full schedule">
                                <div class="mx-auto max-w-screen-xl px-4 md:px-8 py-8">
                                    <div class="flex flex-col md:flex-row md:justify-between gap-6">

                                        <?php foreach( $hero_schedule as $schedule ): ?>
                                            <div class="flex items-start gap-4 md:w-1/3">
                                                <?php if( $schedule['sch_image'] ): ?>
                                                    <img src="<?php echo esc_url($schedule['sch_image']); ?>" alt="Schedule Image" class="w-7 md:w-[46px] h-7 md:h-[46px] object-cover">
                                                <?php endif; ?>
                                                <div>
                                                    <?php if( $schedule['sch_title'] ): ?>
                                                        <h3 class="text-lg font-semibold text-white"><?php echo esc_html($schedule['sch_title']); ?></h3>
                                                    <?php endif; ?>
                                                    <?php if( $schedule['sch_excerpt'] ): ?>
                                                        <p class="text-sm text-gray-200"><?php echo esc_html($schedule['sch_excerpt']); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if( get_row_layout() == 'aboutus' ): ?>
                <?php 
                $about_heading_title = get_sub_field('about_heading_title');
                $about_content = get_sub_field('about_content');
                if( $about_heading_title || $about_content ): ?>
                    <div class="aboutus-section bg-white py-6 sm:py-8 lg:py-20">
                        <div class="mx-auto max-w-screen-lg px-4 md:px-8">
                            <div class="mb-8 lg:mb-12">
                                <?php if( $about_heading_title ): ?>
                                    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                                        <?php echo esc_html($about_heading_title); ?>
                                    </h2>
                                <?php endif; ?>
                                <?php if( $about_content ): ?>
                                    <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">
                                        <?php echo esc_html($about_content); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if( get_row_layout() == 'services' ): ?>
                <?php 
                $service_main_image = get_sub_field('service_main_image');
                $service_items = get_sub_field('service_item');
                $service_link_page = get_sub_field('service_link_page');
                $service_section_title = get_sub_field('service_section_title');
                if( $service_main_image || $service_items ): ?>
                    <div class="services-section bg-white py-6 sm:py-8 lg:py-20">
                        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                            <h2 class="mb-8 text-center text-2xl font-bold text-gray-800 md:mb-12 lg:text-3xl">
                                <?php echo esc_html($service_section_title); ?>
                            </h2>
                            <div class="grid gap-8 lg:grid-cols-2 lg:gap-12">
                                <div>
                                    <div class="h-64 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-auto">
                                        <?php if( $service_main_image ): ?>
                                            <img src="<?php echo esc_url($service_main_image); ?>" alt="Service Main Image" class="h-full w-full object-cover object-center" />
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if( $service_items ): ?>
                                <div>
                                    <?php foreach( $service_items as $service_item ): ?>
                                        <div class="flex gap-4 md:gap-6 mb-6">
                                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-orange text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
                                                <?php if( $service_item['service_item_image'] ): ?>
                                                    <img src="<?php echo esc_url($service_item['service_item_image']); ?>" alt="<?php echo esc_url($service_item['service_item_title']); ?>" class="w-8 h-8" />
                                                <?php endif; ?>
                                            </div>

                                            <div>
                                                <?php if( $service_item['service_title_item'] ): ?>
                                                    <h3 class="mb-2 text-lg font-semibold md:text-xl"><?php echo esc_html($service_item['service_title_item']); ?></h3>
                                                <?php endif; ?>
                                                <?php if( $service_item['service_item_description'] ): ?>
                                                    <p class="mb-2 text-gray-500"><?php echo esc_html($service_item['service_item_description']); ?></p>
                                                <?php endif; ?>
                                                <a href="#" class="hidden font-bold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            
                            <?php if( $service_link_page ): ?>
                                <div class="mt-8">
                                    <a href="<?php echo esc_url($service_link_page['url']); ?>" class="flex items-center mx-auto max-w-fit rounded-full bg-transparent border border-blue-light text-blue-light px-8 py-3 text-center text-sm font-medium outline-none hover:bg-blue-light hover:text-white transition duration-100 md:text-base"><?php echo esc_html($service_link_page['title']); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if( get_row_layout() == 'pricing' ): ?>
                <?php 
                $variants = get_sub_field('variant');
                $variants_link_page = get_sub_field('variant_link_page');
                $pricing_section_title = get_sub_field('pricing_section_title');
                if( $variants ): ?>
                    <div class="pricing-section bg-white py-6 sm:py-8 lg:py-20">
                        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                            <h2 class="mb-8 text-center text-2xl font-bold text-gray-800 md:mb-16 lg:text-3xl">
                                <?php echo esc_html($pricing_section_title); ?>
                            </h2>
                            <div class="grid gap-6 md:grid-cols-3 lg:gap-6">                                
                                <?php foreach( $variants as $index => $variant ): ?>
                                    <div class="pricing-variant mx-auto max-w-screen-xl w-full text-center">
                                        <div class="shadow-md">
                                            <?php if( $variant['pricing_type'] ): ?>
                                                <h4 class="py-8 text-center font-medium text-lg"><?php echo esc_html($variant['pricing_type']); ?></h4>
                                            <?php endif; ?>
                                            <?php if( $variant['pricing_number'] ): ?>
                                                <p class="text-3xl font-normal p-4 md:p-8">Rp. <?php echo esc_html($variant['pricing_number']); ?></p>
                                            <?php endif; ?>
                                            <?php if( $variant['pricing_excerpt'] ): ?>
                                                <div class="pb-10 px-4 md:px-10 content-info"><?php echo $variant['pricing_excerpt']; ?></div>
                                            <?php endif; ?>
                                            <?php if( $variant['pricing_description'] ): ?>
                                                <!-- Add Fancybox Trigger -->
                                                <div class="pb-10 px-4 md:px-8">
                                                    <a href="#modal-description-<?php echo $index; ?>" data-fancybox class="inline-block text-blue-light px-6 py-2 text-center text-sm font-medium transition duration-100 md:text-base">
                                                        Selengkapnya
                                                    </a>
                                                    <!-- Fancybox Modal Content -->
                                                    <div style="display: none;" id="modal-description-<?php echo $index; ?>">
                                                        <div class="p-4">
                                                            <h3 class="mb-4 text-xl font-bold"><?php echo esc_html($variant['pricing_type']); ?></h3>
                                                            <p><?php echo $variant['pricing_description']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>                                
                            </div>
                            <?php if( $variants_link_page ): ?>
                                <div class="mt-8">
                                    <a href="<?php echo esc_url($variants_link_page['url']); ?>" class="flex items-center mx-auto max-w-fit rounded-full bg-transparent border border-blue-light text-blue-light px-8 py-3 text-center text-sm font-medium outline-none hover:bg-blue-light hover:text-white transition duration-100 md:text-base">
                                        <?php echo esc_html($variants_link_page['title']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if( get_row_layout() == 'product' ): ?>
                <?php 
                $products = get_sub_field('products');
                $products_link_page = get_sub_field('product_link_page');
                $products_section_title = get_sub_field('product_section_title');
                if( $products ): ?>
                    <div class="product-section bg-white py-6 sm:py-8 lg:py-20">
                        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                            <h2 class="mb-8 text-center text-2xl font-bold text-gray-800 md:mb-16 lg:text-3xl">
                                <?php echo esc_html($products_section_title); ?>
                            </h2>
                            <div class="grid gap-6 md:grid-cols-3 lg:gap-6">                                                                
                                <?php foreach( $products as $product ): ?>
                                    <a href="<?php echo esc_url($product['product_link']); ?>">
                                        <div class="">
                                            <div class="flex shrink-0 items-center justify-center rounded-lg bg-orange text-white shadow-lg md:rounded-xl">
                                                <?php if( $product['product_image'] ): ?>
                                                    <img src="<?php echo esc_url($product['product_image']); ?>" alt="<?php echo esc_url($product['product_image']); ?>" class="w-full" />
                                                <?php endif; ?>
                                            </div>

                                            <?php if( $product['product_type'] ): ?>
                                                <h3 class="my-4 text-lg font-semibold md:text-xl"><?php echo esc_html($product['product_type']); ?></h3>
                                            <?php endif; ?>
                                            <?php if( $product['product_price'] ): ?>
                                                <p class="mb-2 text-lg font-semibold md:text-lg">Rp. <?php echo esc_html($product['product_price']); ?></p>
                                            <?php endif; ?>
                                            <?php if( $product['pricing_excerpt'] ): ?>
                                                <p class="mb-2 text-gray-500"><?php echo esc_html($product['pricing_excerpt']); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                <?php endforeach; ?>                             
                            </div>
                            <?php if( $products_link_page ): ?>
                                <div class="mt-8">
                                    <a href="<?php echo esc_url($products_link_page['url']); ?>" class="flex items-center mx-auto max-w-fit rounded-full bg-transparent border border-blue-light text-blue-light px-8 py-3 text-center text-sm font-medium outline-none hover:bg-blue-light hover:text-white transition duration-100 md:text-base">
                                        <?php echo esc_html($products_link_page['title']); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if( get_row_layout() == 'testimonial' ): ?>
                <?php 
                $testimonials = get_sub_field('testimonials');
                $testimonial_section_title = get_sub_field('testimonial_section_title');
                if( $testimonials ): ?>
                    <div class="testimonial-section bg-white py-6 sm:py-8 lg:py-20">
                        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                            <h2 class="mb-8 text-center text-2xl font-bold text-gray-800 md:mb-12 lg:text-3xl">
                                <?php echo esc_html($testimonial_section_title); ?>
                            </h2>
                            <div class="grid gap-y-10 sm:grid-cols-2 sm:gap-y-12 lg:grid-cols-3 lg:divide-x">
                                <?php foreach( $testimonials as $testimonial ): ?>
                                    <div class="flex flex-col items-center gap-4 sm:px-4 md:gap-6 lg:px-8">
                                        <?php if( $testimonial['testimonial_content'] ): ?>
                                            <div class="text-center text-gray-600"><p><?php echo esc_html($testimonial['testimonial_content']); ?></p></div>
                                        <?php endif; ?>

                                        <div class="flex flex-col items-center gap-2 sm:flex-row md:gap-3">
                                            <?php if( $testimonial['testimonial_image'] ): ?>
                                                <div class="h-12 w-12 overflow-hidden rounded-full bg-gray-100 shadow-lg md:h-14 md:w-14">
                                                    <img src="<?php echo esc_url($testimonial['testimonial_image']); ?>"alt="Photo by Radu Florin" class="h-full w-full object-cover object-center" />
                                                </div>
                                            <?php endif; ?>

                                            <div>
                                                <?php if( $testimonial['testimonial_name'] ): ?>
                                                    <h5 class="text-center text-sm font-bold text-primary sm:text-left md:text-base"><?php echo esc_html($testimonial['testimonial_name']); ?></h5>
                                                <?php endif; ?>
                                                <?php if( $testimonial['testimonial_position'] ): ?>
                                                    <p class="text-center text-sm text-gray-500 sm:text-left md:text-sm"><?php echo esc_html($testimonial['testimonial_position']); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
