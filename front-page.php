<?php
get_header();
?>

<section class="section section--frontpage">
    <div class="text-box">
        <h1 class="title-main"><?php the_field('title'); ?></h1>
        <h3 class="sub-title"><?php the_field('subtitle'); ?></h3>
        <?php
        $button_text = get_post_meta(get_the_ID(), 'button', true);
        if (!empty($button_text)):
            ?>
            <a href="<?php echo site_url('/membership'); ?>"
                class="btn btn--color u-margin-top-small"><?php the_field('button'); ?></a>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
