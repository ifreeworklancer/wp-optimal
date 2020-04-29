<?php
$user_name = generateRandomString(5);
$user_phone = generateRandomString(5);
$user_email = generateRandomString(5);
$user_message = generateRandomString(5);
?>

<div class="custom-modal custom-modal--contact">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-header">
        <h3 class="custom-modal__title">
            Заголовок формы
        </h3>
        <div class="custom-modal__subtitle">
            Подзаголовок формы
        </div>
    </div>
    <div class="custom-modal-body">
        <form>
            <div class="row mx-sm-0">
                <div class="col-sm mb-3 pl-sm-0 pr-sm-2">
                    <div class="form-group">
                        <label for="<?= $user_name; ?>-contact">
                            Ваше имя
                        </label>
                        <input type="text" name="name-contact" id="<?= $user_name; ?>-contact" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="<?= $user_phone; ?>-contact">
                            Номер телефона
                        </label>
                        <input type="tel" name="phone-contact" id="<?= $user_phone; ?>-contact" class="form-control">
                    </div>
                    <div class="form-group mb-0">
                        <label for="<?= $user_email; ?>-contact">
                            Email
                        </label>
                        <input type="email" name="email-contact" id="<?= $user_email; ?>-contact" class="form-control">
                    </div>
                </div>
                <div class="col-sm mb-3 pr-sm-0 pl-sm-2">
                    <div class="form-group form-group--textarea d-flex flex-column h-100 mb-0">
                        <label for="<?= $user_message; ?>-contact">
                            Сообщение / <span>не обязательно</span>
                        </label>
                        <textarea name="message-contact" id="<?= $user_message; ?>-contact"
                                  class="form-control flex-grow-1"></textarea>
                    </div>
                </div>
                <div class="col-12 px-sm-0">
                    <button class="btn btn-light w-100">
                        Связаться
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="modal-mask"></div>