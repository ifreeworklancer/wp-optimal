<?php
$pageID = 97;
$sale_description = get_field('sale_description', $pageID);
$sale_link = get_field('sale_link', $pageID);
$sale_image = get_field('sale_image', $pageID);
?>

<!-- Sale -->
<section id="sale">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sale-item"
                     style="background-image: url(<?= get_theme_file_uri('images/bg/sale-bg.jpg') ?>);">
                    <div class="custom-badges">
                        <div class="custom-badges-item">
                            <?= __('[:ru]акция[:uk]акція[:]'); ?>
                        </div>
                    </div>
                    <div class="sale-item-body mr-lg-4">
                        <h2 class="sale-item__title">
                            <?= get_the_title($pageID); ?>
                        </h2>
                        <div class="sale-item__description">
                            <?= $sale_description; ?>
                        </div>
                        <a href="<?= $sale_link; ?>" class="btn btn-light">
                            <?= __('[:ru]Купить[:uk]Купити[:]'); ?>
                        </a>
                    </div>
                    <img src="<?= $sale_image['url']; ?>" alt="sale"
                         class="sale-item-image d-none d-lg-block">
                </div>
            </div>
        </div>
    </div>
</section>