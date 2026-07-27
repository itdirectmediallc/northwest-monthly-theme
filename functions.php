<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configure theme features.
 */
function nwmt_setup_theme() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    register_nav_menus(
        [
            'primary' => __(
                'Primary Navigation',
                'northwest-monthly'
            ),
        ]
    );
}

add_action('after_setup_theme', 'nwmt_setup_theme');

/**
 * Load theme assets.
 */
function nwmt_enqueue_assets() {

    $theme_directory = get_stylesheet_directory();

    $style_path = $theme_directory . '/style.css';

    wp_enqueue_style(
        'northwest-monthly',
        get_stylesheet_uri(),
        [],
        is_readable($style_path)
            ? (string) filemtime($style_path)
            : '0.1.0'
    );

    if (!is_front_page()) {
        return;
    }

    $app_style_path = $theme_directory
        . '/assets/css/home-app.css';

    $app_script_path = $theme_directory
        . '/assets/js/home-app.js';

    wp_enqueue_style(
        'northwest-monthly-home-app',
        get_stylesheet_directory_uri()
            . '/assets/css/home-app.css',
        ['northwest-monthly'],
        is_readable($app_style_path)
            ? (string) filemtime($app_style_path)
            : '0.1.0'
    );

    wp_enqueue_script(
        'northwest-monthly-home-app',
        get_stylesheet_directory_uri()
            . '/assets/js/home-app.js',
        [],
        is_readable($app_script_path)
            ? (string) filemtime($app_script_path)
            : '0.1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'nwmt_enqueue_assets');

/**
 * Render a safe default navigation menu.
 */
function nwmt_render_default_menu() {

    $items = [
        [
            'label' => __('Home', 'northwest-monthly'),
            'url' => home_url('/'),
        ],
        [
            'label' => __('Top Businesses', 'northwest-monthly'),
            'url' => home_url('/top-businesses/'),
        ],
        [
            'label' => __('Business Directory', 'northwest-monthly'),
            'url' => home_url('/business/'),
        ],
        [
            'label' => __('Manage a Business', 'northwest-monthly'),
            'url' => home_url('/manage-a-business/'),
        ],
    ];

    echo '<ul class="nwmt-primary-menu">';

    foreach ($items as $item) {
        echo '<li><a href="'
            . esc_url($item['url'])
            . '">'
            . esc_html($item['label'])
            . '</a></li>';
    }

    echo '</ul>';
}