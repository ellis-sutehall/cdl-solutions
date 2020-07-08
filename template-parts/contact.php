<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php require get_template_directory() . '/inc/heading-bar.php'; ?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half info">
            <?php while(have_posts()) : the_post(); ?>
                <div class="content">
                    <?php the_content();?>
                </div>
            <?php endwhile; ?>

            <div class="columns">
                <div class="column is-full contact-details">
                    
                <?php if( get_field('address_line_1') ): ?>
                    <div class="address">
                        <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                        <p>
                            <?php if( get_field('address_line_1') ): ?>
                                <?php the_field('address_line_1'); ?>
                                <br />
                            <?php endif; ?>
                            <?php if( get_field('address_line_2') ): ?>
                                <?php the_field('address_line_2'); ?>
                                <br />
                            <?php endif; ?>
                            <?php if( get_field('address_line_3') ): ?>
                                <?php the_field('address_line_3'); ?>
                                <br />
                            <?php endif; ?>
                            <?php if( get_field('post_code') ): ?>
                                <?php the_field('post_code'); ?>
                            <?php endif; ?>
                        </p>
                    </div>
                    
                    <?php endif; ?>

                    <div class="phone">
                        <span class="icon"><i class="fas fa-phone-alt"></i></span>
                        <p>012345678</p>
                    </div>

                    <div class="email">
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>

                    <div class="social-icons">
                        <a href="#" target="_blank" rel="norefferer">
                            <img src="<?php echo get_template_directory_uri() . '/dist/img/icons/facebook-icon.svg' ?>" alt="Facebook Icon" width="30">
                        </a>
                        <a href="#" target="_blank" rel="norefferer">
                            <img src="<?php echo get_template_directory_uri() . '/dist/img/icons/twitter-icon.svg' ?>" alt="Twitter Icon" width="30">
                        </a>
                        <a href="#" target="_blank" rel="norefferer">
                            <img src="<?php echo get_template_directory_uri() . '/dist/img/icons/linkedin-icon.svg' ?>" alt="LinkedIn Icon" width="30">
                        </a>
                    </div>
                </div>
            </div>

            </div>
            <div class="column is-half contact-form">
                <?php echo do_shortcode('[contact-form-7 id="161" title="Contact Form"]') ?>
            </div>
                
        </div>

        
    
    </div>
</section>

<?php if(get_field('map')): ?>
<section class="map">
    <?php the_field('map'); ?>
</section>
<?php endif; ?>

<?php get_footer(); ?>
