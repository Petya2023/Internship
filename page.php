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

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <h1><?php the_title(); ?></h1>

        <?php
        $page = get_page_by_path('конституция');  // Replace 'your-page-slug' with the actual slug of the page
        if ($page) {
            $page_id = $page->ID;
        }
        ?>
        <!-- <?php
        if (wp_get_post_parent_id(get_the_ID())) { ?>
            hi
        <?php }
        ?> -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();