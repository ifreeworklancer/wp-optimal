<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>

<?php require_once('includes/partials/svgs.php'); ?>

<?php
$phone1 = get_theme_mod('phone1');
$phone2 = get_theme_mod('phone2');
$link_catalog = get_theme_mod('link_catalog');
?>

<!-- App-header -->
<header id="app-header">
    <div class="header-bar header-bar--top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto d-flex align-items-center">
                    <a href="<?= get_site_url(); ?>" class="logo d-lg-none">
                        <img src="<?= get_theme_file_uri('images/icons/logo-small.png') ?>" alt="logo">
                    </a>
                    <div class="d-none d-lg-block">
                        <?php
                        if (function_exists('wpm_language_switcher'))
                            wpm_language_switcher('dropdown', 'name');
                        ?>
                    </div>
                    <div class="d-flex flex-column flex-md-row align-items-md-center position-relative">
                        <div class="place-select-text">
                            <svg width="11" height="15">
                                <use xlink:href="#placeholder-icon"></use>
                            </svg>
                            <?= __('[:ru]Ваш город[:uk]Ваше місто[:]'); ?>
                        </div>
                        <div class="place-select">
                            <div class="place-select-input">
                                <div class="place-select-input__value">
                                    Запорожье
                                </div>
                                <div class="place-select-input__icon"></div>
                            </div>
                            <ul class="place-select-list">
                                <li>
                                    <span>Киев</span>
                                </li>
                                <li>
                                    <span>Харьков</span>
                                </li>
                                <li>
                                    <span>Львов</span>
                                </li>
                                <li>
                                    <span>Днепр</span>
                                </li>
                                <li>
                                    <span>Мелитополь</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-auto d-flex align-items-center">
                    <ul class="contacts-list d-none d-lg-flex">
                        <li class="contacts-list-item">
                            <?php if ($phone1 != '') : ?>
                            <a href="tel:<?= phone_link($phone1); ?>">
                                <svg width="11" height="15">
                                    <use xlink:href="#phone-icon"></use>
                                </svg>
                                <?= $phone1; ?>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if ($phone2 != '') : ?>
                            <li class="contacts-list-item">
                                <a href="tel:<?= phone_link($phone2); ?>">
                                    <svg width="11" height="15">
                                        <use xlink:href="#phone-icon"></use>
                                    </svg>
                                    <?= $phone2; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <div class="d-lg-none">
                        <?php
                        if (function_exists('wpm_language_switcher'))
                            wpm_language_switcher('dropdown', 'name');
                        ?>
                    </div>
                    <div class="burger-menu d-lg-none">
                        <div class="line line--top"></div>
                        <div class="line line--middle"></div>
                        <div class="line line--bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bar header-bar--bottom d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <ul class="header-nav">
                        <li class="header-nav-item header-nav-item--output">
                            <a href="<?= $link_catalog; ?>">
                                <div class="header-nav-item__icon">
                                    <div class="row justify-content-between mx-0">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="row justify-content-between mx-0">
                                        <div class="line"></div>
                                        <div class="line"></div>
                                    </div>
                                </div>
                                Каталог
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#about" class="anchor-link">
                                <?= __('[:ru]О нас[:uk]Про нас[:]'); ?>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#laboratory" class="anchor-link">
                                <?= __('[:ru]Лаборатория[:uk]Лабораторія[:]'); ?>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#contacts" class="anchor-link">
                                <?= __('[:ru]Карта наших аптек[:uk]Карта наших аптек[:]'); ?>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#certificates" class="anchor-link">
                                <?= __('[:ru]Сертификаты и награды[:uk]Сертифікати та нагороди[:]'); ?>
                            </a>
                        </li>
                        <li class="header-nav-item">
                            <a href="#app-footer" class="anchor-link">
                                <?= __('[:ru]Контакты[:uk]Контакти[:]'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-light open-contact">
                        <?= __('[:ru]Связаться[:uk]Зв\'язатися[:]'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="menu d-lg-none">
        <ul class="header-nav">
            <li class="header-nav-item header-nav-item--output">
                <a href="<?= $link_catalog; ?>">
                    <div class="header-nav-item__icon">
                        <div class="row justify-content-between mx-0">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                        <div class="row justify-content-between mx-0">
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                    </div>
                    Каталог
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#about" class="anchor-link">
                    <?= __('[:ru]О нас[:uk]Про нас[:]'); ?>
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#laboratory" class="anchor-link">
                    <?= __('[:ru]Лаборатория[:uk]Лабораторія[:]'); ?>
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#contacts" class="anchor-link">
                    <?= __('[:ru]Карта наших аптек[:uk]Карта наших аптек[:]'); ?>
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#certificates" class="anchor-link">
                    <?= __('[:ru]Сертификаты и награды[:uk]Сертифікати та нагороди[:]'); ?>
                </a>
            </li>
            <li class="header-nav-item">
                <a href="#app-footer" class="anchor-link">
                    <?= __('[:ru]Контакты[:uk]Контакти[:]'); ?>
                </a>
            </li>
        </ul>
        <ul class="contacts-list">
            <li class="contacts-list-item">
                <a href="tel:<?= phone_link($phone1); ?>">
                    <svg width="11" height="15">
                        <use xlink:href="#phone-icon"></use>
                    </svg>
                    <?= $phone1; ?>
                </a>
            </li>
            <li class="contacts-list-item">
                <a href="tel:<?= phone_link($phone2); ?>">
                    <svg width="11" height="15">
                        <use xlink:href="#phone-icon"></use>
                    </svg>
                    <?= $phone2; ?>
                </a>
            </li>
        </ul>
    </div>
</header>


<!-- Modal -->
<?php require_once('includes/partials/modal.php'); ?>

<!-- Main -->
<main>
