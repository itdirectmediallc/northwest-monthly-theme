<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <article <?php post_class('nwmt-content'); ?>>
            <?php if (is_singular()) : ?>
                <h1 class="nwmt-entry-title">
                    <?php the_title(); ?>
                </h1>
            <?php else : ?>
                <h2 class="nwmt-entry-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            <?php endif; ?>

            <div class="nwmt-entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>

    <?php if (!is_singular()) : ?>
        <?php the_posts_navigation(); ?>
    <?php endif; ?>
<?php else : ?>
    <div class="nwmt-content nwmt-empty">
        <p>
            <?php
            echo esc_html__(
                'No content was found.',
                'northwest-monthly'
            );
            ?>
        </p>
    </div>
<?php endif; ?>

<?php
get_footer();
