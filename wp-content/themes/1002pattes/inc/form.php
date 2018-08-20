<div class="bloccontact__flex">
    <section class="bloccontact">
        <h2 class="bloccontact__title1">
            <?= get_sub_field('title'); ?>
        </h2>
        <?php if(have_rows('info')): while (have_rows('info')): the_row(); ?>
            <p class="bloccontact__text">
                <?= get_sub_field('text'); ?>
            </p>
        <?php endwhile; endif; ?>
    </section>
    <section class="bloccontact__form">
        <h2 class="hidden">
            <?= get_sub_field('title_2'); ?>
        </h2>
        <p class="info_send">
            Pour pouvoir envoyer votre message, veuillez remplir les champs obligatoires.
        </p>
        <?= get_sub_field('text'); ?>
    </section>
</div>