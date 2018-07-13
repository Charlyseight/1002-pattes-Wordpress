<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Accueil | La maison du 1002 pattes</title>
    <meta name="description" content="Le site de l'asbl 'La maison du 1002 pattes'">
    <meta name="keywords" content="jeunesse, aide, asbl, bastogne, famille, jeunes, adolescentes, enfants">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=assets("assets/css/bundle.css"); ?>">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<header class="blocheader">
    <h1 class="hidden">
        Le site de l'asbl "La maison du 1002 pattes"
    </h1>
    <div class="blocheader__flex">
        <div class="blocheader__flex__logo logo" itemscope itemtype="http://schema.org/Corporation">
            <a href="#" class="logo__link">
                <img src="<?=assets("assets/images/logo-2.jpg"); ?>" alt="Logo 1002 pattes" width="105" height="128" itemprop="logo" class="logo__img">
            </a>
        </div>
        <input id="burger" type="checkbox" />
        <label for="burger" class="burgercss">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav class="blocheader__nav">
            <h2 class="hidden">Ma navigation principale</h2>
            <?php foreach(pattes_get_menu('main')->getItems() as $item): ?>
                <a href="<?= $item->url;?> class=“<?= $item->getBemClasses('menu__item'); ?>"><?= $item->label;?></a>
            <?php endforeach;?>
        </nav>
    </div>
    <div class="blocheader__desc__img">
        <div itemscope itemtype="http://schema.org/Corporation" class="blocheader__desc">
            <p itemprop="description" class=" blocheader__desc__text">
                Nous sommes une asbl qui aide les enfants, adolescents et familles en difficultées.
            </p>
        </div>
    </div>
</header>