<?php
$pageID = 32;
$advantages = get_field('advantages', $pageID);
?>

<!-- Advantages -->
<section id="advantages">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $count = 0;
            foreach ($advantages as $item) : $count++; ?>
                <?php
                foreach ($item as $val) : ?>
                    <div class="col-sm-8 col-lg-4">
                        <div class="advantages-item reveal-bottom-interval">
                            <div class="advantages-item-prev">
                                <img src="<?= $val['advantages_item_image']['url']; ?>" alt="advantages image">
                            </div>
                            <div class="advantages-item-body">
                                <div class="advantages-item-count">
                                    <?= $count; ?>
                                </div>
                                <div class="advantages-item__description">
                                    <?= $val['advantages_item_description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>