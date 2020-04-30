<?php
$pageID = 92;
$contacts_subtitle = get_field('contacts_subtitle', $pageID);
?>
<!-- Contacts -->
<section id="contacts">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="section-title text-secondary">
                    <?= get_the_title($pageID); ?>
                </h2>
                <div class="section-subtitle">
                    <?= $contacts_subtitle; ?>
                </div>
            </div>
        </div>
    </div>
    <?= do_shortcode('[put_wpgm id=1]'); ?>
</section>


