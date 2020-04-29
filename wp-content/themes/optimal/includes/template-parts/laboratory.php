<?php
$pageID = 75;
$laboratory_first_description = get_field('laboratory_first_description', $pageID);
$laboratory_second_description = get_field('laboratory_second_description', $pageID);
$laboratory_hidden_description = get_field('laboratory_hidden_description', $pageID);
$laboratory_image = get_field('laboratory_image', $pageID);
?>

<!-- Laboratory -->
<section id="laboratory">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="laboratory-item">
                    <div class="laboratory-item-prev reveal-left">
                        <figure style="background-image: url(<?= $laboratory_image['url']; ?>);"></figure>
                    </div>
                    <div class="laboratory-item-body reveal-right">
                        <h2 class="laboratory-item__title text-secondary">
                            <?= get_the_title($pageID); ?>
                        </h2>
                        <div class="content-description">
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="content-description__text">
                                    <?= $laboratory_first_description; ?>
                                </div>
                                <div class="content-description__text">
                                    <?= $laboratory_second_description; ?>
                                </div>
                            </div>
                            <div class="content-description-hidden">
                                <?= $laboratory_hidden_description; ?>
                            </div>
                            <?php if ($laboratory_hidden_description != '') : ?>
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
                </div>
            </div>
        </div>
    </div>
</section>