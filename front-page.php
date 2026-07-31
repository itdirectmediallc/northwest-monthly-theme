<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$hero_image = get_theme_file_uri(
    '/assets/images/nw-monthly-hero.webp'
);
?>

<section
    class="nwmt-home-hero"
    aria-labelledby="nwmt-home-title"
>
    <div class="nwmt-home-hero__visual">
        <figure class="nwmt-home-hero__figure">
            <img
                src="<?php echo esc_url($hero_image); ?>"
                alt="<?php
                    echo esc_attr__(
                        'Northwest Monthly local business directory preview',
                        'northwest-monthly'
                    );
                ?>"
                loading="eager"
                fetchpriority="high"
            >
        </figure>
    </div>

    <div class="nwmt-home-hero__content">
        <div class="nwmt-home-hero__content-inner">
            <div class="nwmt-home-hero__copy">
                <h1 id="nwmt-home-title">
                    <?php
                    echo esc_html__(
                        'Discover trusted local businesses, services, deals, and coupons.',
                        'northwest-monthly'
                    );
                    ?>
                </h1>

                <p class="nwmt-home-intro">
                    <?php
                    echo esc_html__(
                        'Choose your state to begin exploring the Northwest.',
                        'northwest-monthly'
                    );
                    ?>
                </p>
            </div>

            <div class="nwmt-home-selector">
                <h2>
                    <?php
                    echo esc_html__(
                        'Choose your state',
                        'northwest-monthly'
                    );
                    ?>
                </h2>

                <div class="nwmt-state-list">
                    <a
                        class="nwmt-state-button"
                        href="<?php echo esc_url(home_url('/oregon/')); ?>"
                    >
                        <span>Oregon</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>

                    <a
                        class="nwmt-state-button"
                        href="<?php echo esc_url(home_url('/washington/')); ?>"
                    >
                        <span>Washington</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>

                <p class="nwmt-home-note">
                    <?php
                    echo esc_html__(
                        'Cities, trades, services, businesses, advertisements, and coupons.',
                        'northwest-monthly'
                    );
                    ?>
                </p>
            </div>

            <?php
            if (
                function_exists(
                    'nwmd_directory_render_app_footer'
                )
            ) {
                nwmd_directory_render_app_footer(true);
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
