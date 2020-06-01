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

                <?php $videos = get_field('work_video_slider', $pageID); ?>

                <div class="video-slider custom-slider">

                    <?php foreach ($videos as $video) : ?>
                        <div class="video-slider__item">
                            <div class="video-play" style="background-image: url(<?= getVideoImageLinkAttribute($video['work_video_link']) ?>);" data-youtube="<?= getVideoLinkAttribute($video['work_video_link']) ?>">
                                <svg width="48" height="48">
                                    <use xlink:href="#play-icon"></use>
                                </svg>
                            </div>
                            <figure class="decor-image" style="background-image: url(<?= get_theme_file_uri('images/icons/video-icon.png') ?>);"></figure>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>