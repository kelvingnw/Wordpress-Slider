<section class="section-use-case">
    <div class="use-case-header">
        <h2>Use Case</h2>
        <a href="#" class="book-call-link">
            Book a Call <i class="fas fa-arrow-right"></i>
        </a>
    </div>
    <?php
    $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1, 
    );
    $portfolio_query = new WP_Query($args);

    if ($portfolio_query->have_posts()) :
        while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
            $use_case_image = get_field('use_case_image');
            $text_left = get_field('text_left');
            $text_center = get_field('text_center');
            $text_right = get_field('text_right');
    ?>
            <div class="use-case-palax" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/palax-bg.png');">
                <div class="use-case-content">
                    <div class="profile-pic">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/profpic.png" alt="Profile Picture">
                    </div>
                    <div class="use-case-details">
                        <?php if ($use_case_image) : ?>
                            <div class="use-case-image" style="background-image: url('<?php echo esc_url($use_case_image['url']); ?>');"></div>
                        <?php endif; ?>
                        <div class="use-case-texts">
                            <span class="text-left"><?php echo esc_html($text_left); ?></span>
                            <span class="text-center"><?php echo esc_html($text_center); ?></span>
                            <span class="text-right"><?php echo esc_html($text_right); ?></span>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No portfolio items found.</p>';
    endif;
    ?>

</section>