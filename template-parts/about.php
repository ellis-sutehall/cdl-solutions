<?php
/*
    Template Name: About
*/
?>

<?php get_header(); ?>

<?php require get_template_directory() . '/inc/heading-bar.php'; ?>

<section class="section">
    <div class="container">
    <?php while(have_posts()) : the_post(); ?>
            <?php the_content();?>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>