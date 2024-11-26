<?php
/* Template Name: Contacts */

get_header();
?>

<section class="section section--page">
    <div class="container">
        <h1 class="title"><?php the_title(); ?></h1>
</section>
<section>
    <h2 class="u-margin-bottom-medium u-text-center">Свържете се с нас</h2>
    <div class="contact__info-box u-margin-bottom-huge">
        <?php
        $email_text = get_post_meta(get_the_ID(), 'email', true);
        if (!empty($email_text)):
            ?>
            <div class="contact__info u-text-center">
                <i class="fa-regular fa-envelope contact__icon u-margin-bottom-tiny"></i>
                <h3 class="text-colored">Имейл</h3>
                <div class="contact__info-text-box">
                    <p class="paragraph"><?php the_field('email'); ?></p>
                    <!-- <p class="paragraph"><?php the_field('email'); ?></p> -->
                </div>
            </div>
        <?php endif; ?>
        <?php
        $phone_text = get_post_meta(get_the_ID(), 'phone', true);
        if (!empty($phone_text)):
            ?>
            <div class="contact__info">
                <i class="fa-solid fa-mobile contact__icon u-margin-bottom-tiny"></i>
                <h3 class="text-colored">Телефон</h3>
                <div class="contact__info-text-box">
                    <p class="paragraph"><?php the_field('phone'); ?></p>
                    <!-- <p class="paragraph"><?php the_field('phone'); ?></p> -->
                </div>
            </div>
        <?php endif; ?>
        <?php
        $address_text = get_post_meta(get_the_ID(), 'address', true);
        if (!empty($address_text)):
            ?>
            <div class="contact__info">
                <i class="fa-solid fa-location-dot contact__icon u-margin-bottom-tiny"></i>
                <h3 class="text-colored">Адрес</h3>
                <div class="contact__info-text-box">
                    <p class="paragraph u-text-center"><?php the_field('address'); ?></p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <h3 class="u-text-center u-margin-bottom-medium"><?php the_field('paragraph'); ?></h3>

    <form action="https://formsubmit.co/<?php the_field('email'); ?>" method="POST"
        class="contact__form u-margin-bottom-huge">
        <input type="hidden" name="<?php the_title(); ?>">
        <input name="Име" type="text" class="input" placeholder="Име" required>
        <input name="Фамилия" type="text" class="input" placeholder="Фамилия" required>
        <input name="Телефон" type="tel" class="input" placeholder="Телефон" required>
        <input name="Имейл" type="email" class="input" placeholder="Имейл" required>
        <textarea name="Съобщение" id="" cols="30" rows="10" class="input" placeholder="Съобщение" required></textarea>
        <input type="submit" value="<?php the_field('button'); ?>" class="btn btn--color btn--submit"></input>
    </form>
    </div>
</section>

<?php
get_footer();
?>