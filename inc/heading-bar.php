<?php
    $bg_colour = get_field('background_colour');
    $bg_colour = strtolower($bg_colour);
    $bg_colour = str_replace(' ', '-', $bg_colour);
?>
<section class="section heading-bar <?php echo $bg_colour ?>-bg">
    <div class="container">
    <?php if(get_field('heading_bar_title')): ?>
        <?php if(is_page('about') || is_page('contact')): ?>
            <h1 class="title is-1"><?php echo the_field('heading_bar_title') ?></h1>
        <?php else: ?>
            <h2 class="title is-2"><?php echo the_field('heading_bar_title') ?></h2>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>