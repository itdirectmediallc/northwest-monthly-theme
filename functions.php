<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configure the minimal theme shell.
 */
function nwmt_setup_theme() {

    add_theme_support('title-tag');

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
}

add_action('after_setup_theme', 'nwmt_setup_theme');

/**
 * Load the single theme stylesheet.
 */
function nwmt_enqueue_assets() {

    $style_path = get_stylesheet_directory()
        . '/style.css';

    wp_enqueue_style(
        'nwmt-theme',
        get_stylesheet_uri(),
        [],
        is_readable($style_path)
            ? (string) filemtime($style_path)
            : '0.1.2'
    );
}

add_action('wp_enqueue_scripts', 'nwmt_enqueue_assets');
