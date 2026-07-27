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

<body <?php body_class('nwmt-inner-app'); ?>>
<?php wp_body_open(); ?>

<header class="nwmt-app-bar">
    <div class="nwmt-container nwmt-app-bar__inner">
        <a
            class="nwmt-app-bar__brand"
            href="<?php echo esc_url(home_url('/')); ?>"
        >
            <span
                class="nwmt-app-bar__mark"
                aria-hidden="true"
            >
                NW
            </span>

            <span class="nwmt-app-bar__name">
                <?php
                echo esc_html__(
                    'Northwest Monthly',
                    'northwest-monthly'
                );
                ?>
            </span>
        </a>

        <a
            class="nwmt-app-bar__home"
            href="<?php echo esc_url(home_url('/')); ?>"
        >
            <?php
            echo esc_html__(
                'Home',
                'northwest-monthly'
            );
            ?>
        </a>
    </div>
</header>

<main class="nwmt-main" id="primary">