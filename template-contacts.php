<?php
/* Template Name: Contacts */

get_header();
?>

<section class="section contact">
    <div class="container">
        <h2 class="u-margin-bottom-medium u-text-center">Свържете се с нас</h2>
        <div class="contact__info-box u-margin-bottom-huge">
            <div class="contact__info u-text-center">
                <i class="fa-regular fa-envelope contact__icon u-margin-bottom-tiny"></i>
                <h3 class="text-colored">Имейл</h3>
                <div class="contact__info-text-box">
                    <p class="paragraph"><?php the_field('email'); ?></p>
                    <p class="paragraph"><?php the_field('email'); ?></p>
                </div>
            </div>
            <div class="contact__info">
                <i class="fa-solid fa-mobile contact__icon u-margin-bottom-tiny"></i>
                <h3 class="text-colored">Телефон</h3>
                <div class="contact__info-text-box">
                    <p class="paragraph"><?php the_field('phone'); ?></p>
                    <p class="paragraph"><?php the_field('phone'); ?></p>
                </div>
            </div>
            <div class="contact__info">
                <i class="fa-solid fa-location-dot contact__icon u-margin-bottom-tiny"></i>
                <h3 class="text-colored">Адрес</h3>
                <div class="contact__info-text-box">
                    <p class="paragraph u-text-center"><?php the_field('address'); ?></p>
                </div>
            </div>
        </div>

        <h3 class="u-text-center u-margin-bottom-medium"><?php the_field('paragraph'); ?></h3>

        <form action="https://formsubmit.co/9a9274b8804fb31f31fa316e3e002ac7" method="POST"
            class="contact__form u-margin-bottom-huge">
            <input type="hidden" name="<?php the_title(); ?>">
            <input type="text" class="input" placeholder="Име" required>
            <input type="text" class="input" placeholder="Фамилия" required>
            <input type="tel" class="input" placeholder="Телефон" required>
            <input type="email" class="input" placeholder="Имейл" required>
            <textarea name="" id="" cols="30" rows="10" class="input" placeholder="Съобщение" required></textarea>
            <button type="submit" class="btn btn--color"><?php the_field('button'); ?></button>
        </form>
    </div>
</section>

<?php
get_footer();
?>