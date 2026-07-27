<?php

if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="nwmt-site-header">
    <div class="nwmt-container nwmt-site-header__inner">
        <a
            class="nwmt-site-brand"
            href="<?php echo esc_url(home_url('/')); ?>"
        >
            <?php echo esc_html(get_bloginfo('name')); ?>
        </a>

        <nav
            aria-label="<?php echo esc_attr__('Primary navigation', 'northwest-monthly'); ?>"
        >
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nwmt-primary-menu',
                    'fallback_cb' => 'nwmt_render_default_menu',
                ]
            );
            ?>
        </nav>
    </div>
</header>

<main class="nwmt-main" id="primary">