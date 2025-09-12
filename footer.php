        <footer class="footer">
            <div class="container">
                <div class="footer__top">
                    <a href="/" class="header__logo">
                        <img src="<?=IMAGES?>logo.svg" alt="MEDSTOMA">
                        <span class="text_fz14 text_upper text_color-light text_fw500">
                            Средства для реабилитации и ухода за больными
                        </span>
                    </a>
                    <div class="header__bottom-info">
                        <div class="header__bottom-info-item">
                            <span>
                                <img src="<?=IMAGES?>icons/map-point.svg" alt="Адрес">
                                <span>
                                    г. Санкт-Петербург <br>
                                    ул. Решетникова, 15, офис 344
                                </span>
                            </span>
                            <span class="text_fz16 text_color-dark">
                                <img src="<?=IMAGES?>icons/time.svg" alt="Рабочие часы">
                                <span>пн–пт: 09–30 до 18–00</span>
                            </span>
                        </div>
                        <div class="header__bottom-info-item">
                            <span>
                                <img src="<?=IMAGES?>icons/phone.svg" alt="Телефон">
                                <span>
                                    <a href="tel:+78126761875">+7 812 676-18-75</a> <br>
                                    <a href="tel:88007751314">8 800 775-13-14</a> <br>
                                    <span class="text_fz16 text_color-dark">
                                        Звонок по России бесплатный
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <nav class="footer__nav">
                    <ul>
                        <li>
                            <a href="/catalog/">Каталог</a>
                            <ul class="text_color-dark">
                                <li><a href="/catalog/section/">Калоприемники</a></li>
                                <li><a href="/catalog/section/">Уроприемники</a></li>
                                <li><a href="/catalog/section/">Уход за кожей вокруг стомы</a></li>
                                <li><a href="/catalog/section/">Уропродукция</a></li>
                                <li><a href="/catalog/section/">Энтеральное питание</a></li>
                                <li><a href="/catalog/section/">Эндоурология</a></li>
                                <li><a href="/catalog/section/">Подгузники для взрослых</a></li>
                            </ul>
                        </li>
                        <li><a href="/about/">О магазине</a></li>
                        <li><a href="/stocks/">Акции</a></li>
                        <li><a href="/delivery/">Доставка</a></li>
                        <li><a href="/contacts/">Контакты</a></li>
                        <li><a href="/payment/">Оплата</a></li>
                        <li><a href="/certificate/">Принимаем электронные сертификаты ФСС</a></li>
                        <li><a href="/clients/">Полезная информация</a></li>
                    </ul>
                </nav>
                <div class="footer__bott text_fz16 text_color-dark">
                    ©<?=date('Y')?>. Медстома
                </div>
            </div>
        </footer>
    </div>

    <div class="modal">
        <div class="modal__item" data-modal="order">
            <div class="modal__close"></div>
            <div class="modal__wrap">
                <form action="" class="form">
                    <div class="form-head text_fz24">Оставьте заявку или задайте вопрос</div>
                    <div class="form-body">
                        <div class="form-block">
                            <div class="form-row">
                                <label class="form-label">
                                    <span>Название товара</span>
                                    <input type="text" name="" placeholder="Введите товар" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>Номер телефона*</span>
                                    <input type="tel" name="" placeholder="Введите номер" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>Ваше имя</span>
                                    <input type="text" name="" placeholder="Введите имя" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>Ваш E-mail</span>
                                    <input type="email" name="" placeholder="Введите E-mail" required class="text_fz18">
                                </label>
                            </div>
                            <label class="form-label">
                                <span>Введите ваш вопрос или комментарий</span>
                                <textarea name=""></textarea>
                            </label>
                        </div>
                        <div class="form-block checkboxes text_color-dark text_fz14">
                            <label class="checkboxes-item">
                                <input type="checkbox" name="" required>
                                <div class="box"></div>
                                <span>Я согласен на получение рекламной информации в соответствии c <a href="/privacy/" class="text_color-light">Согласием на рекламу</a></span>
                            </label>
                            <label class="checkboxes-item">
                                <input type="checkbox" name="" required>
                                <div class="box"></div>
                                <span>Я согласен на обработку персональных данных в соответствии с <a href="/privacy/" class="text_color-light">Политикой конфиденциальности</a> и <a href="/privacy/" class="text_color-light">Согласием на обработку</a></span>
                            </label>
                        </div>
                        <div class="form-block">
                            <div class="form-label">
                                <?=getBtn(['text' => 'Отправить'])?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal__item" data-modal="callback">
            <div class="modal__close"></div>
            <div class="modal__wrap">
                <form action="" class="form">
                    <div class="form-head text_fz24">Заказать звонок</div>
                    <div class="form-body">
                        <div class="form-block">
                            <div class="form-row">
                                <label class="form-label">
                                    <span>Ваше имя</span>
                                    <input type="text" name="" placeholder="Введите имя" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>Номер вашего телефона</span>
                                    <input type="tel" name="" placeholder="+7 (___) ___-__-__" required class="text_fz18">
                                </label>
                            </div>
                        </div>
                        <div class="form-block checkboxes text_color-dark text_fz14">
                            <label class="checkboxes-item">
                                <input type="checkbox" name="" required>
                                <div class="box"></div>
                                <span>Я согласен на получение рекламной информации в соответствии c <a href="/privacy/" class="text_color-light">Согласием на рекламу</a></span>
                            </label>
                            <label class="checkboxes-item">
                                <input type="checkbox" name="" required>
                                <div class="box"></div>
                                <span>Я согласен на обработку персональных данных в соответствии с <a href="/privacy/" class="text_color-light">Политикой конфиденциальности</a> и <a href="/privacy/" class="text_color-light">Согласием на обработку</a></span>
                            </label>
                        </div>
                        <div class="form-block">
                            <div class="form-label">
                                <?=getBtn(['text' => 'Отправить'])?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal__item" data-modal="mailus">
            <div class="modal__close"></div>
            <div class="modal__wrap">
                <form action="" class="form">
                    <div class="form-head text_fz24">Написать нам письмо</div>
                    <div class="form-body">
                        <div class="form-block">
                            <div class="form-row">
                                <label class="form-label">
                                    <span>Ваше имя</span>
                                    <input type="text" name="" placeholder="Введите имя" required class="text_fz18">
                                </label>
                                <label class="form-label">
                                    <span>Ваш E-mail</span>
                                    <input type="email" name="" placeholder="Введите E-mail" required class="text_fz18">
                                </label>
                            </div>
                            <label class="form-label">
                                <span>Сообщение</span>
                                <textarea name=""></textarea>
                            </label>
                        </div>
                        <div class="form-block checkboxes text_color-dark text_fz14">
                            <label class="checkboxes-item">
                                <input type="checkbox" name="" required>
                                <div class="box"></div>
                                <span>Я согласен на получение рекламной информации в соответствии c <a href="/privacy/" class="text_color-light">Согласием на рекламу</a></span>
                            </label>
                            <label class="checkboxes-item">
                                <input type="checkbox" name="" required>
                                <div class="box"></div>
                                <span>Я согласен на обработку персональных данных в соответствии с <a href="/privacy/" class="text_color-light">Политикой конфиденциальности</a> и <a href="/privacy/" class="text_color-light">Согласием на обработку</a></span>
                            </label>
                        </div>
                        <div class="form-block">
                            <div class="form-label">
                                <?=getBtn(['text' => 'Отправить'])?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal__item modal__success">
            <div class="modal__close"></div>
            <div class="modal__wrap">
                <div class="form text_center">
                    <div class="form-head text_fz24">Спасибо за заявку!</div>
                    <div class="form-body">
                        Мы свяжемся с вами в ближайшее время
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/fancybox.umd.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/custom.js"></script>
</body>
</html>