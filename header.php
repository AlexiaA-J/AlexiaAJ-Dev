<!DOCTYPE html>
<?php $current_url = $_SERVER['REQUEST_URI']; ?>
<html <?php echo (strpos($current_url, 'eng') !== false) ? 'lang="en"' : 'lang="fr"'; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            // Check if the current URL contains 'eng'
            if (strpos($current_url, 'eng') !== false) {
                // If 'eng' is found in the URL, set the English title
                echo "Alexia A-J - Web Developer";
            } else {
                // Otherwise, set the French title
                echo "Alexia A-J - Développeuse Web";
            }
        ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_body_open(); ?>
    <header class="header">
        <div>
            <a class="header__logo" href="<?php echo (strpos($_SERVER['REQUEST_URI'], 'eng') !== false) 
            ? home_url('eng') : home_url(); ?>">
                ALEXIA A-J | WEB DEV
            </a>
            <a class="header__language" href="<?php echo (strpos($_SERVER['REQUEST_URI'], 'eng') !== false) 
            ? home_url() : home_url('eng'); ?>">
                <?php echo (strpos($_SERVER['REQUEST_URI'], 'eng') !== false) ? 'Français' : 'English'; ?>
            </a>
        </div>
        <div class="header__navDesktop">
            <?php
            // Check if the current URL contains 'eng'
            if (strpos($current_url, 'eng') !== false) {
                // If 'eng' is found in the URL, use the English menu
                wp_nav_menu(array('theme_location' => 'main-english'));
            } else {
                // Otherwise, use the default menu
                wp_nav_menu(array('theme_location' => 'main'));
            }
            ?>

        </div>
        <div class="menuToggle">
            <span class="bar topBar"></span>
            <span class="bar middleBar"></span>
            <span class="bar bottomBar"></span>
        </div>
        <div class="header__navMobile">
            <?php
            // Check if the current URL contains 'eng'
            if (strpos($current_url, 'eng') !== false) {
                // If 'eng' is found in the URL, use the English menu
                wp_nav_menu(array('theme_location' => 'main-english'));
            } else {
                // Otherwise, use the default menu
                wp_nav_menu(array('theme_location' => 'main'));
            }
            ?>

        </div>
    </header>

    