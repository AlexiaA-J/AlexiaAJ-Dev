<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexia A-J - Développeuse Web</title>
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <header class="header">
        <a class="header__logo" href="<?php echo home_url(); ?>">
            ALEXIA A-J | WEB DEV
        </a>
        <div class="header__navDesktop">
            <?php wp_nav_menu(array('theme_location' => 'main')); ?>
        </div>
        <div class="menuToggle">
            <span class="bar topBar"></span>
            <span class="bar middleBar"></span>
            <span class="bar bottomBar"></span>
        </div>
        <div class="header__navMobile">
            <?php wp_nav_menu(array('theme_location' => 'main')); ?>
        </div>
    </header>

    