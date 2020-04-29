</main>

<?php
$phone1 = get_theme_mod('phone1');
$phone2 = get_theme_mod('phone2');
$address_link = get_theme_mod('address_link');
$address = get_theme_mod('address');
$email = get_theme_mod('email');
$footer_info = get_theme_mod('footer_info');
?>

<!-- App-footer -->
<footer id="app-footer">
    <div class="footer-contacts" style="background-image: url(<?= get_theme_file_uri('images/bg/footer-bg.jpg'); ?>);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-4 mb-4 mb-lg-0">
                    <a href="<?= get_site_url(); ?>" class="logo">
                        <img src="<?= get_theme_file_uri('images/icons/logo-footer.png'); ?>" alt="logo">
                    </a>
                </div>
                <div class="col-sm-8 col-lg-5 mb-4 mb-lg-0">
                    <ul class="contacts-list">
                        <?php if ($address != '' && $address_link != '') : ?>
                            <li class="contacts-list-item contacts-list-item--address">
                                <a href="<?= $address_link; ?>">
                                    <svg width="11" height="15">
                                        <use xlink:href="#placeholder-icon"></use>
                                    </svg>
                                    <span><?= $address; ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="contacts-list-item contacts-list-item--phone text-md-center">
                            <?php if ($phone1 != '') : ?>
                                <a href="tel:<?= phone_link($phone1); ?>">
                                    <svg width="11" height="15">
                                        <use xlink:href="#phone-icon"></use>
                                    </svg>
                                    <span><?= $phone1; ?></span>
                                </a>
                            <?php endif; ?>
                            <?php if ($phone2 != '') : ?>
                                <a href="tel:<?= phone_link($phone2); ?>">
                                    <svg width="11" height="15">
                                        <use xlink:href="#phone-icon"></use>
                                    </svg>
                                    <span><?= $phone2; ?></span>
                                </a>
                            <?php endif; ?>
                        </li>
                        <?php if ($email != '') : ?>
                            <li class="contacts-list-item contacts-list-item--email">
                                <a href="mailto:<?= $email; ?>">
                                    <svg width="20" height="14">
                                        <use xlink:href="#mail-icon"></use>
                                    </svg>
                                    <span><?= $email; ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="col-sm-8 col-lg-3">
                    <div class="contacts-col">
                        <div class="contacts-col__text">
                            <?= __('[:ru]Возникли вопросы или есть замечания? Свяжитесь с нами[:uk]Виникли питання або є зауваження? Зв\'язатися з нами[:]'); ?>
                        </div>
                        <a href="#" class="btn btn-light open-contact">
                            <?= __('[:ru]Связаться[:uk]Зв\'язатися[:]'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg text-center text-lg-left mb-2 mb-lg-0">
                    <div class="footer-copyright-item">
                        <?= $footer_info; ?>
                    </div>
                </div>
                <div class="col-lg text-center text-lg-center mb-2 mb-lg-0">
                    <div class="footer-copyright-item">
                        <?= date('Y'); ?>
                        &copy;<?= __('[:ru]Все права защищены[:uk]Всі права захищені[:]'); ?>
                    </div>
                </div>
                <div class="col-lg text-center text-lg-right">
                    <div class="footer-copyright-item">
                        <?= __('[:ru]Дизайн и вебразработка[:uk]Дизайн і вебразработка[:]'); ?>
                        <a href="https://impressionbureau.pro/" target="_blank">Impression
                            Bureau</a> 2020
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<?php wp_footer(); ?>
</body>

</html>