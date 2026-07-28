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

<a class="nwmt-skip-link" href="#primary">
    <?php
    echo esc_html__(
        'Skip to content',
        'northwest-monthly'
    );
    ?>
</a>

<header class="nwmt-site-header">
    <div class="nwmt-shell nwmt-site-header__inner">
        <a
            class="nwmt-site-brand"
            href="<?php echo esc_url(home_url('/')); ?>"
        >
            <span
                class="nwmt-site-mark"
                aria-hidden="true"
            >
                NW
            </span>

            <span>
                <?php
                echo esc_html__(
                    'NW Monthly',
                    'northwest-monthly'
                );
                ?>
            </span>
        </a>
    </div>
</header>

<main class="nwmt-main" id="primary">
    <div class="nwmt-shell">
