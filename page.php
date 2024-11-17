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


<section>
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p>Конституцията на Република България е основният закон на държавата, който регламентира правата, задълженията
            и свободите на гражданите, както и структурата на държавната власт. Приета е на 12 юли 1991 г. от VII Велико
            Народно събрание и отразява основните принципи на демократичното управление в страната. Тук можете да
            намерите актуалния текст на Конституцията и да се запознаете с основните й положения.</p>
        <a href="" class="btn btn--color">Конституция</a>
    </div>
</section>

<!-- <iframe src="<?php echo get_theme_file_uri('test.pdf'); ?>" width="100%" height="1200px"></iframe> -->

</section>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();