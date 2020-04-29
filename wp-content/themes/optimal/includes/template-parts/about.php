<?php
$pageID = 48;
$about_subtitle = get_field('about_subtitle', $pageID);
$about_prev_description = get_field('about_prev_description', $pageID);
$about_hidden_description = get_field('about_hidden_description', $pageID);
$about_image = get_field('about_image', $pageID);
?>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-item">
                    <div class="about-item-body reveal-left">
                        <div class="section-description">
                            <div class="section-description__subtitle">
                                <?= $about_subtitle; ?>
                            </div>
                            <h3 class="section-description__title">
                                <?= get_the_title($pageID); ?>
                            </h3>
                        </div>
                        <div class="content-description">
                            <p>
                                <?= $about_prev_description; ?>
                            </p>
                            <div class="content-description-hidden">
                                <?= $about_hidden_description; ?>
                            </div>
                            <?php if ($about_hidden_description != '') : ?>
                                <a href="#" class="link-more" data-hidden-text="<?= __('[:ru]Скрыть информацию[:uk]Приховати інформацію[:]'); ?>"
                                   data-show-text="<?= __('[:ru]Больше информации[:uk]Більше інформації[:]'); ?>">
                                    <span><?= __('[:ru]Больше информации[:uk]Більше інформації[:]'); ?></span>
                                    <svg width="8" height="14">
                                        <use xlink:href="#arrow-next"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="about-item-prev reveal-right">
                        <figure style="background-image: url(<?= $about_image['url']; ?>);"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>