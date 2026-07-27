<?php

if (!defined('ABSPATH')) {
    exit;
}

$splash_image_url =
    'https://nwmonthly.com/wp-content/uploads/2026/07/download.jpg';

$rankings_url = function_exists(
    'nwmd_directory_get_public_rankings_url'
)
    ? nwmd_directory_get_public_rankings_url()
    : home_url('/top-businesses/');

$directory_url = get_post_type_archive_link(
    'nwmd_business'
);

if (!$directory_url) {
    $directory_url = home_url('/business/');
}

$manage_url = function_exists(
    'nwmd_directory_get_business_request_url'
)
    ? nwmd_directory_get_business_request_url()
    : home_url('/manage-a-business/');

$splash_style = sprintf(
    "--nwmt-splash-image: url('%s');",
    esc_url_raw($splash_image_url)
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <link
        rel="preload"
        href="<?php echo esc_url($splash_image_url); ?>"
        as="image"
    >

    <?php wp_head(); ?>
</head>

<body <?php body_class('nwmt-app-home'); ?>>
<?php wp_body_open(); ?>

<div
    class="nwmt-splash"
    id="nwmt-splash"
    style="<?php echo esc_attr($splash_style); ?>"
>
    <div class="nwmt-splash__overlay"></div>

    <div class="nwmt-splash__content">
        <p class="nwmt-splash__eyebrow">
            <?php
            echo esc_html__(
                'Seattle · Portland · Northwest',
                'northwest-monthly'
            );
            ?>
        </p>

        <h1>
            <?php
            echo esc_html__(
                'Northwest Monthly',
                'northwest-monthly'
            );
            ?>
        </h1>

        <p class="nwmt-splash__subtitle">
            <?php
            echo esc_html__(
                'Discover trusted local businesses.',
                'northwest-monthly'
            );
            ?>
        </p>

        <button
            class="nwmt-splash__button"
            id="nwmt-enter-app"
            type="button"
        >
            <?php
            echo esc_html__(
                'Enter',
                'northwest-monthly'
            );
            ?>
        </button>
    </div>
</div>

<main
    class="nwmt-app"
    id="nwmt-app-menu"
    tabindex="-1"
>
    <section class="nwmt-app__panel">
        <header class="nwmt-app__header">
            <span class="nwmt-app__mark" aria-hidden="true">
                NW
            </span>

            <div>
                <p class="nwmt-app__name">
                    <?php
                    echo esc_html__(
                        'Northwest Monthly',
                        'northwest-monthly'
                    );
                    ?>
                </p>

                <p class="nwmt-app__tagline">
                    <?php
                    echo esc_html__(
                        'Where would you like to start?',
                        'northwest-monthly'
                    );
                    ?>
                </p>
            </div>
        </header>

        <nav
            class="nwmt-app-menu"
            aria-label="<?php
                echo esc_attr__(
                    'Northwest Monthly menu',
                    'northwest-monthly'
                );
            ?>"
        >
            <a
                class="nwmt-app-card"
                href="<?php echo esc_url($rankings_url); ?>"
            >
                <span
                    class="nwmt-app-card__icon"
                    aria-hidden="true"
                >
                    <svg
                        viewBox="0 0 24 24"
                        role="img"
                    >
                        <path
                            d="M4 20V10m8 10V4m8 16v-7M2 20h20"
                        />
                    </svg>
                </span>

                <span class="nwmt-app-card__text">
                    <strong>
                        <?php
                        echo esc_html__(
                            'Top Businesses',
                            'northwest-monthly'
                        );
                        ?>
                    </strong>

                    <small>
                        <?php
                        echo esc_html__(
                            'Explore monthly local rankings',
                            'northwest-monthly'
                        );
                        ?>
                    </small>
                </span>

                <span
                    class="nwmt-app-card__arrow"
                    aria-hidden="true"
                >
                    →
                </span>
            </a>

            <a
                class="nwmt-app-card"
                href="<?php echo esc_url($directory_url); ?>"
            >
                <span
                    class="nwmt-app-card__icon"
                    aria-hidden="true"
                >
                    <svg
                        viewBox="0 0 24 24"
                        role="img"
                    >
                        <circle cx="11" cy="11" r="7" />
                        <path d="m20 20-4-4" />
                    </svg>
                </span>

                <span class="nwmt-app-card__text">
                    <strong>
                        <?php
                        echo esc_html__(
                            'Browse Businesses',
                            'northwest-monthly'
                        );
                        ?>
                    </strong>

                    <small>
                        <?php
                        echo esc_html__(
                            'Search by city and category',
                            'northwest-monthly'
                        );
                        ?>
                    </small>
                </span>

                <span
                    class="nwmt-app-card__arrow"
                    aria-hidden="true"
                >
                    →
                </span>
            </a>

            <a
                class="nwmt-app-card"
                href="<?php echo esc_url($manage_url); ?>"
            >
                <span
                    class="nwmt-app-card__icon"
                    aria-hidden="true"
                >
                    <svg
                        viewBox="0 0 24 24"
                        role="img"
                    >
                        <path
                            d="M4 20h16M6 20V8l6-4 6 4v12"
                        />
                        <path d="M9 20v-6h6v6" />
                    </svg>
                </span>

                <span class="nwmt-app-card__text">
                    <strong>
                        <?php
                        echo esc_html__(
                            'Manage a Business',
                            'northwest-monthly'
                        );
                        ?>
                    </strong>

                    <small>
                        <?php
                        echo esc_html__(
                            'Add, claim, update, or remove a listing',
                            'northwest-monthly'
                        );
                        ?>
                    </small>
                </span>

                <span
                    class="nwmt-app-card__arrow"
                    aria-hidden="true"
                >
                    →
                </span>
            </a>
        </nav>

        <p class="nwmt-app__footer">
            <?php
            echo esc_html__(
                'Trusted local discovery across the Northwest.',
                'northwest-monthly'
            );
            ?>
        </p>
    </section>
</main>

<noscript>
    <style>
        .nwmt-splash {
            display: none;
        }

        .nwmt-app {
            opacity: 1;
        }
    </style>
</noscript>

<?php wp_footer(); ?>
</body>
</html>