<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php require get_template_directory() . '/inc/heading-bar.php'; ?>

<?php if(get_field('map')): ?>
<section class="map">
    <?php the_field('map'); ?>
</section>
<?php endif; ?>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half">
            <?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; ?>
            </div>
            <div class="column is-half contact-form">
                <?php echo do_shortcode('[contact-form-7 id="161" title="Contact Form"]') ?>
            </div>
        </div>
    
    </div>
</section>

<?php get_footer(); ?>