<?php
$pageID = 105;
$certificates_subtitle = get_field('certificates_subtitle', $pageID);
$certificates_description = get_field('certificates_description', $pageID);
$certificates_logo = get_field('certificates_logo', $pageID);
$certificates_images = get_field('certificates_images', $pageID);
?>

<!-- Certificates -->
<section id="certificates">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-sm-8 col-lg-5 order-2 order-lg-1">
                <div class="certificates-item reveal-left">
                    <div class="section-description">
                        <div class="section-description__subtitle">
                            <?= $certificates_subtitle; ?>
                        </div>
                        <h2 class="section-description__title">
                            <?= get_the_title($pageID); ?>
                        </h2>
                    </div>
                    <div class="certificates-item__description">
                        <?= $certificates_description; ?>
                    </div>
                    <div class="certificates-item-logo">
                        <?php foreach ($certificates_logo as $item) : ?>
                            <div class="certificates-item-logo-col">
                                <img src="<?= $item['url']; ?>" alt="logo">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <figure class="decor-image"
                            style="background-image: url(<?= get_theme_file_uri('images/icons/certificates-decor.png') ?>);"></figure>
                </div>
            </div>
            <div class="col-sm-8 col-lg-5 order-1 order-lg-2">
                <div class="certificates-slider custom-slider reveal-right">
                    <?php foreach ($certificates_images as $item) : ?>
                        <div class="certificates-slider-item">
                            <img src="<?= $item['url']; ?>" alt="certificates image">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>