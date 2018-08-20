<div itemscope itemtype="http://schema.org/Organization">
    <section class="blocteam__spe">
        <h2 class="blocteam__spe__title1">
            <?= get_sub_field('title'); ?>
        </h2>
        <p class="blocteam__spe__text">
            <?= get_sub_field('text'); ?>
        </p>
        <ul class="blocteam__spe__list spe-list">
            <?php if(have_rows('image')): while(have_rows('image')): the_row(); ?>
                <li class="list.item spe-item">
                    <a href="<?= get_sub_field('lien'); ?>" class="spe-item__link" title="<?= get_sub_field('text'); ?>">
                        <div class="spe-item__div">
                            <img src="<?php the_sub_field('img'); ?>" class="spe-item__img" width="318" height="200">
                            <p class="spe-item__text" itemprop="member"><?php the_sub_field('nom'); ?></p>
                        </div>
                    </a>
                </li>
            <?php endwhile; endif; ?>
        </ul>
    </section>
</div>