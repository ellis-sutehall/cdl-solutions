<?php
/*
    Template Name: Services
*/
?>

<?php get_header(); ?>

<?php require get_template_directory() . '/inc/services-header.php'; ?>
<?php require get_template_directory() . '/inc/heading-bar.php'; ?>

<section class="section services-two-col">
    <div class="container">
        <div class="columns is-multiline is-vcentered is-8-desktop is-variable">
        <?php
            $services_page_two_column = get_field('services_page_two_column');
            if( $services_page_two_column ): ?>
        <?php foreach( $services_page_two_column as $post ):
        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        <div data-scroll class="column is-half">
            <?php if(get_the_post_thumbnail_url(get_the_ID(),'large')): ?>
                <div class="img-wrapper">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
            <?php endif; ?>
            <h2 class="title is-2">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <?php if(get_field('services_summary')): ?>
                <p><?php the_field( 'services_summary' ); ?></p>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
    <?php endif; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>