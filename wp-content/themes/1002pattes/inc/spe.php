<a href="../pages/equipe.html" class="blocteamitem__back" title="Retourner sur la page 'Equipe' de l'asbl 'La maison du 1002 pattes'">Retour</a>
<section class="blocteamitem" itemscope itemtype="http://schema.org/Organization">
    <h2 class="blocteamitem__title1">
        <?= get_sub_field('title'); ?>
    </h2>
    <div class="blocteamitem__flex">
        <?php if (have_rows('image')): while (have_rows('image')): the_row(); ?>
            <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('alt'); ?>" class="blocteamitem__img" width="318" height="200">
        <?php endwhile; endif; ?>
        <div class="blocteam__divcontent">
            <h3 itemprop="member" class="blocteamitem__title2">
                <?php the_sub_field('titre'); ?>
            </h3>
            <h4 class="blocteamitem__title3">
                <?php the_sub_field('titre_2'); ?>
            </h4>
        </div>
    </div>
    <?php if (have_rows('paragraphe')): while (have_rows('paragraphe')): the_row(); ?>
    <p class="blocteamitem__text">
        <?php the_sub_field('texte'); ?>.</p>
    <?php endwhile; endif; ?>
</section>