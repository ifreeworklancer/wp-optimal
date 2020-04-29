<?php
$pageID = 7;
$intro_description = get_field('intro_description', $pageID);
$intro_stocks = get_field('intro_stocks', $pageID);
$intro_items = get_field('intro_items', $pageID);
?>

<!-- Intro -->
<section id="intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-7">
                <div class="intro-description">
                    <img src="<?= get_theme_file_uri('images/icons/logo.png') ?>" alt="logo"
                         class="intro-description__logo">
                    <div class="intro-description__text">
                        <?= $intro_description; ?>
                    </div>
                </div>
                <div class="intro-stocks custom-slider reveal-left">
                    <?php foreach ($intro_stocks as $stock_item) : ?>
                        <?php foreach ($stock_item as $item) : ?>
                            <div class="intro-stocks-item">
                                <div class="custom-badges">
                                    <div class="custom-badges-item">
                                        <?= __('[:ru]акция[:uk]акція[:]'); ?>
                                    </div>
                                    <div class="custom-badges-subtitle">
                                        <?= $item['intro_stocks_subtitle']; ?>
                                    </div>
                                </div>
                                <div class="intro-stocks-prev">
                                    <img src="<?= $item['intro_stocks_image']['url']; ?>" alt="image">
                                </div>
                                <div class="intro-stocks-body">
                                    <h2 class="intro-stocks__title">
                                        <?= $item['intro_stocks_title']; ?>
                                    </h2>
                                    <div class="intro-stocks__description">
                                        <?= $item['intro_stocks_description']; ?>
                                    </div>
                                    <div class="intro-stocks-price">
                                        <div class="intro-stocks-price-value intro-stocks-price-value--old">
                                            <span><?= $item['intro_stocks_old_price']; ?></span>
                                            грн
                                        </div>
                                        <div class="intro-stocks-price-text">
                                            цена
                                        </div>
                                        <div class="intro-stocks-price-value">
                                            <span><?= $item['intro_stocks_new_price']; ?></span>
                                            грн
                                        </div>
                                    </div>
                                    <a href="<?= $item['intro_stocks_link'] ?>" class="btn btn-light">
                                        В каталог
                                        <svg width="8" height="14">
                                            <use xlink:href="#arrow-next"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-sm-10 col-lg-5">
                <?php foreach ($intro_items as $intro_item) : ?>
                    <?php foreach ($intro_item as $item) : ?>
                        <a href="#" class="intro-item reveal-right"
                           style="background-image: url(<?= $item['intro_item_image']['url']; ?>);">
                            <div class="intro-item-body">
                                <?php if ($item['intro_item_title'] != '') : ?>
                                    <h4 class="intro-item__title">
                                        <?= $item['intro_item_title']; ?>
                                    </h4>
                                <?php endif; ?>
                                <?php if ($item['intro_item_title'] != '') : ?>
                                    <div class="intro-item__description">
                                        <?= $item['intro_item_description']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>