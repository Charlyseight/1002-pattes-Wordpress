<?php get_header(); ?>

<main>
    <?php
    if (have_posts()) : while (have_posts()) : the_post();?>
    <h1 class="hidden">
        <?php the_field('description'); ?>
    </h1>
        <?php
        if( have_rows('accueil')): while ( have_rows('accueil') ) : the_row();?>
        <section class="blocabout">
            <?php if( get_row_layout() == 'first_section'): ?>
                <h2 class="blocabout__title1">
                    <?= get_sub_field('title'); ?>
                </h2>
                <p class="blocabout__text">
                    <?= get_sub_field('content'); ?>
                </p>
                <?php
                if( have_rows('button')): while ( have_rows('button') ) : the_row();?>
                <?php if( get_row_layout() == 'link_page' ): ?>
                <a href="<?= get_sub_field('url'); ?>" class="blocabout__link" title="<?= get_sub_field('text'); ?>"><?= get_sub_field('label'); ?> <span class="hidden"><?= get_sub_field('text'); ?></span></a>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
        </section>
        <div class="activites">
    <?php if(get_row_layout() == 'third_section'): ?>
            <section class="blocactiv">
                <h2 class="hidden">
                    Les activités de l'asbl "La maison du 1002 pattes"
                </h2>
                <div class="blocactiv__divimg">
                    <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
                    <?php if(get_row_layout() == 'image_act'): ?>
                        <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('texte_desc'); ?>">
                    <?php endif; ?>
                    <?php endwhile; endif; ?>
                </div>
                <div itemscope itemtype="http://schema.org/Event" class="blocactiv__info">
                    <section>
                        <h3 class="blocactiv__content__title1">
                            <?= get_sub_field('main_title'); ?>
                        </h3>
                        <p class="blocactiv__info__title2">
                            <span itemprop="name"><?= get_sub_field('second_title'); ?></span>
                        </p>
                        <p class="blocactiv__info__text"><?= get_sub_field('content'); ?></p>
                        <p class="hidden">Organisée ce <meta itemprop="startDate" content="05/05/2018"> 05 mai 2018 à la salle des coccinelles de Morhet. Début de la journée vers 14h : Spectacle de magie, karaoké pour enfant, grimage, ateliers cupcakes, repas (sous réservation via <span class="hidden" itemprop="organizer">Gwénaëlle Melchior</span>Gwénaëlle Melchior : 0496/40.36.13 ou <span class="hidden" itemprop="organizer">Yoland Melchior</span>Yoland Melchior: 0496/40.36.53) et soirée dansante seront au programme.</p>
                        <div itemscope itemtype="http://schema.org/place" itemprop="location">
                            <meta itemprop="name" content="salle des coccinelles de Morhet">
                            <meta itemprop="address" content="Chaussée de Neufchâteau 25, 6640 Vaux-sur-Sûre, Belgique">
                        </div>
                        <meta itemprop="description" content="Début de la journée vers 14h : Spectacle de magie, karaoké pour enfant, grimage, ateliers cupcakes, repas (sous réservation via Gwénaëlle Melchior : 0496/40.36.13 ou Yoland Melchior: 0496/40.36.53) et soirée dansante seront au programme.">
                    </section>
                </div>
            </section>
            <?php endif; ?>
            <?php if(get_row_layout() == 'fourth_section'): ?>
            <section class="blocsponsor" itemscope itemtype="http://schema.org/Organization">
                <h2 class="blocsponsor__title1">
                    <?= get_sub_field('title'); ?>
                </h2>
                <ul class="blocsponsor__list">
                <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
                    <?php if(get_row_layout() == 'image_sp'): ?>
                    <li class="blocsponsor__list__item sitem">
                        <img src="<?php the_sub_field('img') ; ?>" alt="<?php the_sub_field('alt') ; ?>" width="200" height="200" class="sitem__img">
                    </li>
                    <?php endif; ?>
                    <?php endwhile; endif; ?>
                    <?php if(have_rows('image_2')): while (have_rows('image_2')): the_row(); ?>
                        <?php if(get_row_layout() == 'image_sp_2'): ?>
                        <li class="blocsponsor__list__item">
                            <img src="<?php the_sub_field('img') ; ?>" alt="<?php the_sub_field('alt') ; ?>" width="200" height="200" class="sitem__img">
                        </li>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
                <?php if(have_rows('image_3')): while (have_rows('image_3')): the_row(); ?>
                    <?php if(get_row_layout() == 'image_sp_3'): ?>
                    <li class="blocsponsor__list__item">
                        <img src="<?php the_sub_field('img') ; ?>" alt="<?php the_sub_field('alt') ; ?>" width="200" height="200" class="sitem__img">
                    </li>
                    <?php endif; ?>
                <?php endwhile; endif; ?>
                <?php if(have_rows('image_4')): while (have_rows('image_4')): the_row(); ?>
                    <?php if(get_row_layout() == 'image_sp_4'): ?>
                    <li class="blocsponsor__list__item">
                        <img src="<?php the_sub_field('img') ; ?>" alt="<?php the_sub_field('alt') ; ?>" width="200" height="200" class="sitem__img">
                    </li>
                    <?php endif; ?>
                <?php endwhile; endif; ?>
                </ul>
            </section>
            <?php endif; ?>
            <?php if(get_row_layout() == 'fifth_section'): ?>
            <section class="blochelp-space">
                <div class="blochelp-space__divimg">
                <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
                    <?php if(get_row_layout() == 'image_help'): ?>
                    <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('alt'); ?>" class="blochelp_img">
                    <?php endif; ?>
                <?php endwhile; endif; ?>
                </div>
                <h2 class="blochelp-space__title1">
                    <?= get_sub_field('title'); ?>
                </h2>
                <p class="blochelp-space__text">
                    <?= get_sub_field('text'); ?>
                </p>
                <?php
                if( have_rows('button')): while ( have_rows('button') ) : the_row();?>
                    <?php if( get_row_layout() == 'button_help' ): ?>
                        <a href="<?= get_sub_field('url'); ?>" class="blochelp-space__link" title="<?= get_sub_field('text'); ?>"><?= get_sub_field('label'); ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </section>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
</main>

            <!--
            <section class="blocteamI-space">
                <div class="blocteamI-space__divimg">
                    <h2 class="hidden">
                        Encart notre équipe
                    </h2>
                </div>
                <div class="blocteamI-space__animation">
                    <div class="blocteamI-space__animation__content ">
                        <p class="blocteamI-space__text">Nous sommes</p>
                        <ul class="blocteamI-space__list">
                            <li class="blocteamI-space__text--word">psychothérapeutes</li>
                            <li class="blocteamI-space__text--word">logopèdes</li>
                            <li class="blocteamI-space__text--word">psychologues</li>
                            <li class="blocteamI-space__text--word">psychomotriciens</li>
                            <li class="blocteamI-space__text--word">neuropsychologues</li>
                        </ul>
                    </div>
                </div>
                <a href="./pages/equipe.html" class="blocteamI-space__link" title="Découvrir l'équipe de l'asbl 'La maison du 1002 pattes'">Découvrir notre équipe</a>
            </section>
            <div class="activites">
                <section class="blocactiv">
                    <h2 class="hidden">
                        Les activités de l'asbl "La maison du 1002 pattes"
                    </h2>
                    <div class="blocactiv__divimg">
                        &nbsp;
                    </div>
                    <div itemscope itemtype="http://schema.org/Event" class="blocactiv__info">
                        <section>
                            <h3 class="blocactiv__content__title1">
    Activités
                            </h3>
                            <p class="blocactiv__info__title2">
                                <span itemprop="name">Journée famille annuelle</span>
                            </p>
                            <p class="blocactiv__info__text" >
    Organisée ce <meta itemprop="startDate" content="05/05/2018"> 05 mai 2018 à la salle des coccinelles de Morhet. Début de la journée vers 14h : Spectacle de magie, karaoké pour enfant, grimage, ateliers cupcakes, repas (sous réservation via <span class="hidden" itemprop="organizer">Gwénaëlle Melchior</span>Gwénaëlle Melchior : 0496/40.36.13 ou <span class="hidden" itemprop="organizer">Yoland Melchior</span>Yoland Melchior: 0496/40.36.53) et soirée dansante seront au programme.  </p>
                            <div itemscope itemtype="http://schema.org/place" itemprop="location">
                            <meta itemprop="name" content="salle des coccinelles de Morhet">
                            <meta itemprop="address" content="Chaussée de Neufchâteau 25, 6640 Vaux-sur-Sûre, Belgique">
                            </div>
                            <meta itemprop="description" content="Début de la journée vers 14h : Spectacle de magie, karaoké pour enfant, grimage, ateliers cupcakes, repas (sous réservation via Gwénaëlle Melchior : 0496/40.36.13 ou Yoland Melchior: 0496/40.36.53) et soirée dansante seront au programme.">
                        </section>
                    </div>
                </section>
            </div>
            <section class="blocsponsor" itemscope itemtype="http://schema.org/Organization">
                <h2 class="blocsponsor__title1">
    Merci à nos sponsors
    </h2>
                <ul class="blocsponsor__list">
                    <li class="blocsponsor__list__item sitem">
                        <p itemprop="sponsor" class="hidden">
    Euromillion
                        </p>
                        <img src="./assets/images/euro.png" alt="Logo Euromillion partenaire" width="200" height="200" class="sitem__img">
                    </li>
                    <li class="blocsponsor__list__item">
                        <p itemprop="sponsor" class="hidden">
    Lotto
                        </p>
                        <img src="./assets/images/lotto.png" alt="Logo Lotto partenaire" width="200" height="200" class="sitem__img">
                    </li>
                    <li class="blocsponsor__list__item">
                        <p itemprop="sponsor" class="hidden">
    Joker
                        </p>
                        <img src="./assets/images/joker.png" alt="Logo Joker partenaire" width="500" height="200" class="sitem__img">
                    </li>
                    <li class="blocsponsor__list__item">
                        <p itemprop="sponsor" class="hidden">
    Win
                        </p>
                        <img src="./assets/images/win.png" alt="Logo win partenaire" width="200" height="200" class="sitem__img">
                    </li>
                </ul>
            </section>
            <section class="blochelp-space">
                <div class="blochelp-space__divimg">
                    &nbsp;
                </div>
                <h2 class="blochelp-space__title1">
    On peut vous aider&nbsp;!
                </h2>
                <p class="blochelp-space__text">
    L’importance des relations précoces entre les parents et leur bébé, la compréhension réciproque parents-enfants n’est plus à                  démontrer. De même pour le dépistage le plus précoce possible des troubles de l’apprentissage.
                </p>
                <a href="./pages/aide.html" class="blochelp-space__link" title="En savoir plus sur l'aide que propose l'asbl 'La maison du 1002 pattes'">En savoir plus <span class="hidden">sur notre aide</span></a>
            </section>
        </main>-->
    <?php endwhile; endif; ?>
<?php get_footer(); ?>