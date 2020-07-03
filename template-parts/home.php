<?php
/*
    Template Name: Home Page
*/
get_header(); ?>
<section class="hero-wrap">

    <div class="acf-hero">
        
        <div class="columns hero-bg">
            <div class="column is-half dark-blue-bg"></div>
            <div class="column is-half mid-blue-bg"></div>
            <img data-scroll class="partial-logo" src="<?php echo get_template_directory_uri() . '/dist/img/partial-logo.svg' ?>" alt="Partial Logo" width="220" height="250">
        </div>

        <div class="container hero-bg-overlay">
            <div class="columns">
                <div data-scroll class="column is-half mid-blue-bg-m has-text-centered has-text-right-desktop">
                    <?php 
                        $image = get_field('hero_image');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                
                <div data-scroll class="column is-half dark-blue-bg-m">
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
    </div>

    <section data-scroll class="section three-col light-blue-bg">
        <div class="container">
            <div class="columns">
            <?php 
                if(have_rows('three_col_with_icons')):
                    while(have_rows('three_col_with_icons')) : the_row();
                    $title = get_sub_field('title');
                    $summary = get_sub_field('summary');
                    $icon = get_sub_field('icon');
            ?>
                <div class="column is-one-third">
                    <h3 class="title is-3"><?php echo $title ?></h3>
                    <div class="icon-summary-wrap">
                        <?php
                        if( !empty( $icon ) ): ?>
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" width="75" height="75" />
                        <?php endif; ?>
                        <p><?php echo $summary; ?></p>
                    </div>
                </div>
            <?php
                    endwhile;
                endif;
            ?>
            </div>
        </div>

    </section>
</section>

<section class="section single-col">
    <div class="container has-text-centered">
        <?php if(get_field('single_col_title')): ?>
        <h2 class="title is-2" data-scroll><?php echo the_field('single_col_title') ?></h2>
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

<?php require get_template_directory() . '/inc/heading-bar.php'; ?>

<section class="section two-col">
    <div class="container">
    <div data-scroll class="dashed-line"></div>
    <div class="columns is-multiline flex-m is-vcentered is-8-desktop is-variable">
        <?php 
            if(have_rows('two_columns')):
                while(have_rows('two_columns')) : the_row();
                $home_two_col_title = get_sub_field('home_two_col_title');
                $home_two_col_summary = get_sub_field('home_two_col_summary');
                $home_two_col_image = get_sub_field('home_two_col_image');
                $home_two_col_logo_pos = get_sub_field('home_two_col_logo_position');
                $home_two_col_show_logo = get_sub_field('home_two_col_show_logo');
                $home_two_col_mobile_column_order = get_sub_field('home_two_col_mobile_column_order');
        ?>
            <div class="column is-half <?php if($home_two_col_show_logo === 'yes'): ?> show-logo <?php endif; ?> <?php echo strtolower($home_two_col_logo_pos); ?> <?php echo 'order' . ' ' . $home_two_col_mobile_column_order ?>">
                <?php 
                    if($home_two_col_title):
                ?>
                    <h2 class="title is-2"><?php echo $home_two_col_title ?></h2>
                <?php endif; ?>
                <?php 
                    if($home_two_col_summary):
                ?>
                    <p><?php echo $home_two_col_summary; ?></p>
                <?php endif; ?>
                <?php
                if( !empty( $home_two_col_image ) ): ?>
                    <img data-scroll src="<?php echo esc_url($home_two_col_image['url']); ?>" alt="<?php echo esc_attr($home_two_col_image['alt']); ?>" />
                <?php endif; ?>
            </div>
        <?php
                endwhile;
            endif;
        ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>