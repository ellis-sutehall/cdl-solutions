<?php
/*
    Template Name: About
*/
?>

<?php get_header(); ?>

<?php require get_template_directory() . '/inc/heading-bar.php'; ?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third has-text-centered has-text-right-desktop">
                <?php if( get_the_post_thumbnail_url(get_the_ID()) ): ?>
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large'); ?>" alt="">
                <?php endif; ?>
            </div>    
            <div class="column is-two-thirds info">
                <?php while(have_posts()) : the_post(); ?>
                    <div class="content">
                        <?php the_content();?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>