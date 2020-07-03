<section class="section services-title dark-blue-bg">
<div class="container  <?php if(get_field('services_show_logo') === 'yes'): ?> show-logo <?php endif; ?> ">
        <?php if(get_field('services_title')): ?>
            <h1 class="title is-1"><?php echo the_field('services_title'); ?></h1>
        <?php endif; ?>
    </div>
</section>

<section class="section services-summary">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-one-third">
                <?php
                $services_header_image = get_field('services_header_image');
                if( !empty( $services_header_image ) ): ?>
                    <img src="<?php echo esc_url($services_header_image['url']); ?>" alt="<?php echo esc_attr($services_header_image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="column is-two-thirds">
                <?php if(get_field('services_summary')): ?>
                    <p><?php echo the_field('services_summary'); ?></p>
                <?php endif; ?>
                <?php
                    $services_call_to_action = get_field('services_call_to_action');
                    $services_call_to_action_url = $services_call_to_action['url'];
                    $services_call_to_action_title = $services_call_to_action['title'];
                ?>
                <?php if($services_call_to_action): ?>
                    <a href="<?php echo $services_call_to_action_url ?>" class="button is-primary"><?php echo $services_call_to_action_title ?></a>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>