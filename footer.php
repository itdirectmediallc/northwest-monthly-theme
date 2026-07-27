<?php

if (!defined('ABSPATH')) {
    exit;
}
?>
</main>

<footer class="nwmt-site-footer">
    <div class="nwmt-container nwmt-site-footer__inner">
        <p>
            <?php
            echo esc_html(
                sprintf(
                    __('© %1$s %2$s', 'northwest-monthly'),
                    wp_date('Y'),
                    get_bloginfo('name')
                )
            );
            ?>
        </p>

        <a href="<?php echo esc_url(home_url('/manage-a-business/')); ?>">
            <?php echo esc_html__('Manage a Business', 'northwest-monthly'); ?>
        </a>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>