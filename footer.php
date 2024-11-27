<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action('storefront_before_footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-box">
        <!-- <div class="footer-box__up">
            <i class="fa-regular fa-envelope u-margin-bottom-tiny"></i>
            <p><?php the_field('email'); ?></p>
            <i class="fa-solid fa-mobile u-margin-bottom-tiny"></i>
            <p><?php the_field(''); ?></p>
            <i class="fa-solid fa-location-dot u-margin-bottom-tiny"></i> -->

    </div>
    <div class="footer-box__down">
        <p class="footer-box__down__copyrights u-margin-bottom-tiny u-margin-top-small">&copy;
            <?php echo date(format: 'Y'); ?>
            <?php echo get_bloginfo('name'); ?>
        </p>
        <a href="https://www.linkedin.com/in/petya-naydenova/" target="_blank"
            class="footer-box__down__developed-by">Уеб
            разработка
            от Петя Найденова</a>
    </div>
    </div>
</footer><!-- #colophon -->

<?php do_action('storefront_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>