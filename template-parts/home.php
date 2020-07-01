<?php
/*
    Template Name: Home Page
*/
get_header();

?>

<section class="section acf-hero">
    <!-- <div class="columns">
        <div class="column is-half light-blue-bg"></div>
        <div class="column is-half dark-blue-bg"></div>    
    </div> -->

<div class="container">
        <div class="columns">
            <div class="column is-half mid-blue-bg">
            <?php 
                $image = get_field('hero_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="column is-half dark-blue-bg">
            <?php if( get_field('page_title') ): ?>
                    <h1 class="title is-1"><?php the_field('page_title') ?></h1>
                <?php endif;?>
                <?php if( get_field('page_subtitle') ): ?>
                    <h4 class="title is-4 mid-blue-text"><?php the_field('page_subtitle') ?></h4>
                <?php endif;?>
                <?php if( get_field('page_intro') ): ?>
                    <p><?php the_field('page_intro') ?></p>
                <?php endif;?>
                <?php
                    $link = get_field('call_to_action');
                    $link_url = $link['url'];
                    $link_title = $link['title'];

                ?>
                <div>
                <?php if( $link ): ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" class="button is-secondary"><?php echo $link_title; ?></a>
                <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section light-blue-bg">
    <div class="container">
        <div class="columns">
        <?php 
            if(have_rows('three_col_with_icons')):
                while(have_rows('three_col_with_icons')) : the_row();
                $title = get_sub_field('title');
                $summary = get_sub_field('summary');
        ?>
            <div class="column is-one-third">
                <h3 class="title is-3"><?php echo $title ?></h3>
                <p><?php echo $summary; ?></p>
            </div>
        <?php
                endwhile;
            endif;
        ?>
        </div>
    </div>

</section>

<section class="section who">
    <div class="container has-text-centered">
        <?php if(get_field('single_col_title')): ?>
        <h2 class="title is-2"><?php echo the_field('single_col_title') ?></h2>
        <?php endif; ?>
        <?php if(get_field('single_col_body')): ?>
            <p><?php echo the_field('single_col_body') ?></p>
        <?php endif; ?>
        <?php
            $sc_link = get_field('single_col_call_to_action');
            $sc_link_url = $sc_link['url'];
            $sc_link_title = $sc_link['title'];
        ?>
        <?php if($sc_link): ?>
            <a href="<?php echo $sc_link_url ?>" class="button is-primary"><?php echo $sc_link_title ?></a>
        <?php endif; ?>
    </div>
</section>

<?php
    $bg_colour = get_field('background_colour');
    $bg_colour = strtolower($bg_colour);
    $bg_colour = str_replace(' ', '-', $bg_colour);
?>
<section class="section heading-bar <?php echo $bg_colour ?>-bg">
    <div class="container">
    <?php if(get_field('heading_bar_title')): ?>
        <h2 class="title is-2"><?php echo the_field('heading_bar_title') ?></h2>
        <?php endif; ?>
    </div>
</section>

<section class="section what-we-do">
    <div class="container">
    <div class="columns is-multiline">
        <?php 
            if(have_rows('two_columns')):
                while(have_rows('two_columns')) : the_row();
                $home_two_col_title = get_sub_field('home_two_col_title');
                $home_two_col_summary = get_sub_field('home_two_col_summary');
                $home_two_col_image = get_sub_field('home_two_col_image');
                $home_two_col_logo_pos = get_sub_field('home_two_col_logo_position');

        ?>
            <div class="column is-half">
                <h3 class="title is-3"><?php echo $home_two_col_title ?></h3>
                <p><?php echo $home_two_col_summary; ?></p>
            </div>
        <?php
                endwhile;
            endif;
        ?>
        </div>
    </div>
</section>

<?php
get_footer();











?>