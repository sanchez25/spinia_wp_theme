<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotocondensedlight.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotocondensed.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotocondensedbold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>
    <section class="main">
        <header class="header">
            <div class="header-content">
                <div class="header-top">
                    <a href="/" aria-label="Spina Logo">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="120" height="60" alt="Spina Logo">
                    </a>
                </div>
                <div class="header-buttons">
                    <a href="/play" class="header-content-logo-link in">Sign In</a>
                    <a href="/play" class="header-content-logo-link up">Sign Up</a>
                </div>
                <div class="header-menu">
                    <div class="header-menu-item">
                        <a href="/play" class="header-content-list-link">
                            <div class="header-content-list-icon lobby" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/dice.svg);"></div>
                            <span class="header-content-list-text">Lobby</span>
                        </a>
                    </div>
                    <div class="header-menu-item">
                        <a href="/play" class="header-content-list-link">
                            <div class="header-content-list-icon action" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/promo.svg);"></div>
                            <span class="header-content-list-text">Promotions</span>
                        </a>
                    </div>
                    <div class="header-menu-item">
                        <a href="/play" class="header-content-list-link">
                            <div class="header-content-list-icon vip" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/vip.svg);"></div>
                            <span class="header-content-list-text">VIP</span>
                        </a>
                    </div>
                    <div class="header-menu-item">
                        <a href="/play" class="header-content-list-link">
                            <div class="header-content-list-icon cash" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/pay.svg);"></div>
                            <span class="header-content-list-text">Payments</span>
                        </a>
                    </div>
                    <div class="header-menu-item">
                        <a href="/play" class="header-content-list-link">
                            <div class="header-content-list-icon tournir" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/cup.svg);"></div>
                            <span class="header-content-list-text">Tournaments</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <!--<div class="head-languages">
                    <div class="language-block">
                        <a class="language-link" href="#languages" aria-label="Languages">
                            <div class="language-link-left">
                                <div class="language-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/en.svg);"></div>
                                <span class="lang-content-item-text">English</span>
                            </div>
                            <div class="language-icon-dowm" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/down.svg);"></div>
                        </a>
                    </div>
                    <div id="languages">
                        <div class="lang-content">
                            <div class="lang-content-item">
                                <a href="/play" class="lang-content-item-link">
                                    <div class="language-icon pl" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/pl.svg);"></div>
                                    <span class="lang-content-item-text">POLSki</span>
                                </a>
                            </div>
                            <div class="lang-content-item">
                                <a href="/play" class="lang-content-item-link">
                                    <div class="language-icon pl" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/pl.svg);"></div>
                                    <span class="lang-content-item-text">Deutsch</span>
                                </a>
                            </div>
                            <div class="lang-content-item">
                                <a href="/play" class="lang-content-item-link">
                                    <div class="language-icon pl" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/pl.svg);"></div>
                                    <span class="lang-content-item-text">Norsk</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>-->
                <a href="/play" class="header-bottom-chat">
                    <div class="header-bottom-chat-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/live-chat.png);"></div>
                    <span>Live Chat</span>
                </a>
            </div>
        </header>
        <header class="mobile-header">
            <div class="mobile-container">
                <div class="menu-mobile-button">
                    <span class="menu-mobile-button-icon"></span>
                    <span class="menu-mobile-button-icon"></span>
                    <span class="menu-mobile-button-icon"></span>
                </div>
                <a href="/" aria-label="Spina Logo">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="120" height="60" alt="Spina Logo">
                </a>
                <a href="/play" class="header-content-logo-link up mobile">Sign Up</a>
            </div>
        </header>

