<?php
$pageID = 86;
$work_subtitle = get_field('work_subtitle', $pageID);
$work_video_link = get_field('work_video_link', $pageID);
?>

<!-- Work -->
<section id="work">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-11 col-lg-10">
                <div class="section-description mb-4 reveal-left">
                    <div class="section-description__subtitle">
                        <?= $work_subtitle; ?>
                    </div>
                    <h2 class="section-description__title">
                        <?= get_the_title($pageID); ?>
                    </h2>
                </div>
            </div>
            <div class="col-sm-9 col-lg-8">
                <div class="video-play reveal-bottom"
                     style="background-image: url(<?= getVideoImageLinkAttribute($work_video_link) ?>);"
                     data-youtube="<?= getVideoLinkAttribute($work_video_link) ?>">
                    <svg width="48" height="48">
                        <use xlink:href="#play-icon"></use>
                    </svg>
                </div>
                <figure class="decor-image"
                        style="background-image: url(<?= get_theme_file_uri('images/icons/video-icon.png') ?>);"></figure>
            </div>
        </div>
    </div>
</section>