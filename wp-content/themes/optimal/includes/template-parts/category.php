<?php
$pageID = 60;
$category = get_field('category', $pageID);
?>

<!-- Category -->
<section id="category">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-4">
                    <?= get_the_title($pageID); ?>
                </h2>
            </div>
            <?php $count = 0;
            foreach ($category as $item) : $count++; ?>
                <?php
                foreach ($item as $val) : ?>
                    <div class="col-sm-6 col-lg-4">
                        <a href="<?= $val['category_link']; ?>" class="category-item reveal-bottom-interval">
                            <img src="<?= $val['category_image']['url']; ?>" alt="category image">
                            <?= $val['category_title']; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
            <div class="col-12 text-center mt-4">
                <a href="<?= get_theme_mod('link_catalog'); ?>" class="btn btn-light">
                    В каталог
                    <svg width="8" height="14">
                        <use xlink:href="#arrow-next"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>