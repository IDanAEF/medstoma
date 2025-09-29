<?php 
    require '../../header.php'; 
?>
<main class="order">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <a href="/cart/" class="text_color-dark">Корзина</a>
                <span class="text_fz14"> / </span>
                <span>Оформление заказа</span>
            </div>
        </div>
    </section>
    <section class="order__form page__block pt0">
        <div class="container">
            <h1 class="page__title">Оформление заказа</h1>
            <form action="">
                <h2 class="page__title">Тип плательщика</h2>
                <div class="order__form-types tabs-field page__title">
                    <div class="order__form-types-names page__title">
                        <span class="tabs-name active">Физическое лицо</span>
                        <span class="tabs-name">Юридическое лицо</span>
                    </div>
                    <div class="order__form-types-content tabs-content active">
                        <div class="form-block">
                            <div class="form-label">
                                <span>Выберите информацию, указанную вами ранее:</span>
                                <div class="select-field text_fz16">
                                    <div class="select-field-name body-click-target" data-default="Профиль">
                                        <span class="text_color-dark">Профиль 1</span>
                                        <img src="<?=IMAGES?>icons/small-arrow.svg" alt="">
                                    </div>
                                    <div class="select-field-list body-click-content">
                                        <span>Новый профиль</span>
                                        <span class="active">Профиль 1</span>
                                        <span>Профиль 2</span>
                                        <span>Профиль 3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-block">
                            <div class="form-block">
                                <h3>Время получения</h3>
                            </div>
                            <div class="form-block form-row">
                                <div class="form-label">
                                    <span>Удобное время получения (начало):</span>
                                    <div class="select-field text_fz16">
                                        <div class="select-field-name body-click-target" data-default="00:00">
                                            <span class="text_color-dark">00:00</span>
                                            <img src="<?=IMAGES?>icons/small-arrow.svg" alt="">
                                        </div>
                                        <div class="select-field-list body-click-content">
                                            <?php
                                                for($i = 0; $i <= 24; $i++) {
                                                    ?>
                                                    <span><?=($i == 24 ? '23:59' : ($i < 10 ? '0'.$i.':00' : $i.':00'))?></span>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-label">
                                    <span>Удобное время получения (конец):</span>
                                    <div class="select-field text_fz16">
                                        <div class="select-field-name body-click-target" data-default="00:00">
                                            <span class="text_color-dark">00:00</span>
                                            <img src="<?=IMAGES?>icons/small-arrow.svg" alt="">
                                        </div>
                                        <div class="select-field-list body-click-content">
                                            <?php
                                                for($i = 0; $i <= 24; $i++) {
                                                    ?>
                                                    <span><?=($i == 24 ? '23:59' : ($i < 10 ? '0'.$i.':00' : $i.':00'))?></span>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">
                                    <span>Терминал:</span>
                                    <input type="text" name="" required class="text_fz18">
                                </label>
                            </div>
                            <div class="form-block">
                                <h3>Личные данные</h3>
                            </div>
                            <div class="form-block form-row">
                                <label class="form-label">
                                    <span>Ф.И.О.:</span>
                                    <input type="text" name="" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>E-Mail:</span>
                                    <input type="text" name="" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>Телефон:</span>
                                    <input type="text" name="" required class="text_fz18">
                                </label>
                            </div>
                            <div class="form-block">
                                <h3>Данные для доставки</h3>
                            </div>
                            <div class="form-block form-row">
                                <label class="form-label">
                                    <span>Индекс:</span>
                                    <input type="text" name="" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>Город:</span>
                                    <input type="text" name="" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>Адрес доставки:</span>
                                    <input type="text" name="" required class="text_fz18">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="order__form-types-content tabs-content">
                        <div class="form-block">
                            <h3>Данные компании</h3>
                        </div>
                        <div class="form-block form-row">
                            <label class="form-label">
                                <span>Название компании:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>Юридический адрес:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>ИНН:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>КПП:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                        </div>
                        <div class="form-block">
                            <h3>Контактная информация</h3>
                        </div>
                        <div class="form-block form-row">
                            <label class="form-label">
                                <span>Контактное лицо:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>E-Mail:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>Телефон:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>Факс:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>Индекс:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>Город:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                            <label class="form-label">
                                <span>Адрес доставки:</span>
                                <input type="text" name="" required class="text_fz18">
                            </label>
                        </div>
                    </div>
                </div>
                <h2 class="page__title">Службы доставки</h2>
                <div class="order__form-delivery page__title order-radio-field">
                    <label class="order__form-delivery-item active">
                        <input type="radio" name="order-delivery" checked>
                        <img src="https://medstoma.ru/bitrix/components/bitrix/sale.order.ajax/templates/visual/images/logo-default-d.gif" alt="Самовывоз">
                        <div class="text">
                            <strong class="text_fz24 text_color-dark">Самовывоз - 0,00 руб.</strong>
                            <span>Вы можете самостоятельно забрать заказ из нашего магазина.</span>
                        </div>
                    </label>
                    <label class="order__form-delivery-item">
                        <input type="radio" name="order-delivery">
                        <img src="https://medstoma.ru/upload/sale/delivery/logotip/c7b/c7b079c4bc42e650797e9cb4aeafbee9.gif" alt="Доставка курьером СДЭК - 300,00 руб.">
                        <div class="text">
                            <strong class="text_fz24 text_color-dark">Доставка курьером СДЭК - 300,00 руб.</strong>
                        </div>
                    </label>
                    <label class="order__form-delivery-item">
                        <input type="radio" name="order-delivery">
                        <img src="https://medstoma.ru/upload/sale/delivery/logotip/c7b/c7b079c4bc42e650797e9cb4aeafbee9.gif" alt="Доставка курьером СДЭК - 200,00 руб.">
                        <div class="text">
                            <strong class="text_fz24 text_color-dark">Доставка курьером СДЭК - 200,00 руб.</strong>
                            <span>Служба доставки с настраиваемой ценой и сроком доставки</span>
                        </div>
                    </label>
                    <label class="order__form-delivery-item">
                        <input type="radio" name="order-delivery">
                        <img src="https://medstoma.ru/upload/sale/delivery/logotip/c7b/c7b079c4bc42e650797e9cb4aeafbee9.gif" alt="Доставка курьером СДЭК - 250,00 руб.">
                        <div class="text">
                            <strong class="text_fz24 text_color-dark">Доставка курьером СДЭК - 250,00 руб.</strong>
                            <span>Служба доставки с настраиваемой ценой и сроком доставки</span>
                        </div>
                    </label>
                    <label class="order__form-delivery-item">
                        <input type="radio" name="order-delivery">
                        <img src="https://medstoma.ru/upload/sale/delivery/logotip/cd2/buqlq6m3t65wy8j0jxntg3396vg2wz2d.png" alt="Почта России (EMS)">
                        <div class="text">
                            <strong class="text_fz24 text_color-dark">Почта России (EMS)</strong>
                            <span>Экспресс-отправления EMS — это самый быстрый и удобный способ доставить письмо или посылку по России. Курьер заберет отправление в удобном для вас месте и доставит его адресату домой или в офис. Экспресс-отправление является регистрируемым, его доставку и вручение можно отследить с помощью трек-номера. В городах, где нет курьерской службы EMS, отправить и получить экспресс-отправление можно через отделение Почты России</span>
                        </div>
                    </label>
                    <label class="order__form-delivery-item">
                        <input type="radio" name="order-delivery">
                        <img src="https://medstoma.ru/upload/sale/delivery/logotip/cd2/buqlq6m3t65wy8j0jxntg3396vg2wz2d.png" alt="Почта России (EMS зарубеж)">
                        <div class="text">
                            <strong class="text_fz24 text_color-dark">Почта России (EMS зарубеж)</strong>
                            <span>Экспресс-отправления EMS — это самый быстрый и удобный способ доставить письмо или посылку за границу.</span>
                        </div>
                    </label>
                    <label class="order__form-delivery-item">
                        <input type="radio" name="order-delivery">
                        <img src="https://medstoma.ru/upload/sale/delivery/logotip/cd2/buqlq6m3t65wy8j0jxntg3396vg2wz2d.png" alt="Почта России (Посылка стандарт)">
                        <div class="text">
                            <strong class="text_fz24 text_color-dark">Почта России (Посылка стандарт)</strong>
                            <span>Посылкой можно отправить вещи по России. У каждой посылки есть трек-номер для отслеживания. С его помощью вы всегда можете узнать местонахождение и статус посылки</span>
                        </div>
                    </label>
                </div>
                <h2 class="page__title">Способы оплаты</h2>
                <div class="order__form-payment page__title order-radio-field">
                    <label class="order__form-payment-item active">
                        <input type="radio" name="order-payment" checked>
                        <img src="https://medstoma.ru/upload/sale/paysystem/logotip/5c8/dmrtrtra7mrzf4oogd2l6qcybxl4rx7t.png" alt="Интернет-эквайринг Банк Санкт-Петербург">
                        <div class="text">
                            <strong class="text_fz24 text_color-dark">Интернет-эквайринг Банк Санкт-Петербург</strong>
                        </div>
                    </label>
                </div>
                <h2 class="page__title">Состав заказа</h2>
                <div class="order__cart-table page__title">
                    <article class="home__products-item">
                        <a href="/catalog/section/product/" class="preview">
                            <img src="<?=IMAGES?>product-preview1.png" alt="Поставщик медицинских изделий, подтвержденных регистрационными удостоверениями">
                        </a>
                        <div class="text-block">
                            <div class="article text_fz16">Артикул 120205</div>
                            <h3>
                                <a href="/catalog/section/product/">Поставщик медицинских изделий, подтвержденных регистрационными удостоверениями</a>
                            </h3>
                        </div>
                        <div class="price text_fz24">
                            <span class="text_red">860&nbsp;₽</span>
                            <span class="text_fz18 text_lt">946&nbsp;₽</span>
                            <span class="text_fz16 text_color">-10%</span>
                        </div>
                        <div class="bottom">
                            <div class="counter">
                                <span class="decrease"></span>
                                <span class="num">1</span>
                                <span class="increase"></span>
                            </div>
                        </div>
                    </article>
                    <article class="home__products-item">
                        <a href="/catalog/section/product/" class="preview">
                            <img src="<?=IMAGES?>product-preview1.png" alt="Поставщик медицинских изделий, подтвержденных регистрационными удостоверениями">
                        </a>
                        <div class="text-block">
                            <div class="article text_fz16">Артикул 120205</div>
                            <h3>
                                <a href="/catalog/section/product/">Поставщик медицинских изделий, подтвержденных регистрационными удостоверениями</a>
                            </h3>
                        </div>
                        <div class="price text_fz24">
                            <span class="text_color">860&nbsp;₽</span>
                        </div>
                        <div class="bottom">
                            <div class="counter">
                                <span class="decrease"></span>
                                <span class="num">1</span>
                                <span class="increase"></span>
                            </div>
                        </div>
                    </article>
                    <div class="order__cart-result text_fz24 text_fw400">
                        <strong>Итого:</strong>
                        <span>2 шт.</span>
                        <strong class="text_color">1920&nbsp;₽</strong>
                    </div>
                </div>
                <h2 class="page__title">Дополнительная информация</h2>
                <div class="form-block">
                    <label class="form-label">
                        <span>Комментарии к заказу:</span>
                        <textarea name="" class="text_fz18"></textarea>
                    </label>
                    <div class="form-label">
                        <?=getBtn([
                            'text' => 'Оформить заказ',
                            'class' => 'order__form-btn'
                        ])?>
                    </div>
                    <div class="form-block checkboxes text_color-dark text_fz14">
                        <label class="checkboxes-item">
                            <input type="checkbox" name="" required>
                            <div class="box"></div>
                            <span>Принимаю <a href="/privacy/" class="text_color-light">соглашение о конфиденциальности</a> и соглашаюсь с <a href="/privacy/" class="text_color-light">обработкой персональных данных</a></span>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php require '../../includes/home-brands.php' ?>
    <?php require '../../includes/home-contacts.php' ?>
</main>
<?php require '../../footer.php'; ?>