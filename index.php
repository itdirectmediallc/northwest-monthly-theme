<?php

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="nwmt-container nwmt-content">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>
            <?php echo esc_html__('No content was found.', 'northwest-monthly'); ?>
        </p>
    <?php endif; ?>
</div>

<?php
get_footer();