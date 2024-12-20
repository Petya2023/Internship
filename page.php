<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

<section class="section section--page">
    <div class="container">
        <h1 class="title"><?php the_title(); ?></h1>
</section>
<section>
    <div class="container">
        <div class="content-wrap">
            <p class="u-margin-bottom-medium"><?php the_field('paragraph'); ?></p>
            <div class="center">
                <?php
                $button_text = get_post_meta(get_the_ID(), 'button', true);
                if (!empty($button_text)):
                    ?>
                    <a href="<?php the_field('pdf'); ?>" target="blank_"
                        class="btn btn--color"><?php the_field('button'); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- <iframe src="<?php echo get_theme_file_uri('test.pdf'); ?>" width="100%" height="1200px"></iframe> -->

</section>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();