<?php
/*
Template Name: Спасибо
Template Post Type: page
*/
get_header('secondary');
?>


    <!-- Thanks -->
    <section id="page-thanks" style="background-image: url(<?= get_the_post_thumbnail_url(); ?>);">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="page-secondary-item">
                        <h1 class="page-secondary-item__title">
                            <?= get_the_title(); ?>
                        </h1>
                        <div class="page-secondary-item__subtitle">
                            <?= get_field('thanks_subtitle'); ?>
                        </div>
                        <a href="<?= get_site_url(); ?>" class="btn btn-light">
                            <?= __('[:ru]На главную[:uk]На головну[:]'); ?>
                            <svg width="8" height="14">
                                <use xlink:href="#arrow-next"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer('secondary'); ?>