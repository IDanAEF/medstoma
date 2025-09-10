<?php
    require 'functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Медстома</title>

    <link rel="stylesheet" href="/assets/css/fancybox.css">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <link rel="stylesheet" href="/custom.css">

    <link rel="icon" href="<?=IMAGES?>favicon.png">
    <link rel="apple-touch-icon" href="<?=IMAGES?>favicon.png">
    <meta name="msapplication-TileImage" content="<?=IMAGES?>favicon.png">
</head>
<body>
    <div class="page-wrap">
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <nav class="header__top-nav text_fz16">
                        <ul>
                            <li><a href="/about/">О магазине</a></li>
                            <li><a href="/stocks/">Акции</a></li>
                            <li><a href="/contacts/">Контакты</a></li>
                            <li><a href="/delivery/">Доставка</a></li>
                            <li><a href="/payment/">Оплата</a></li>
                            <li><a href="/certificate/">Принимаем электронные сертификаты ФСС</a></li>
                            <li><a href="/useful/">Полезная информация</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="container">
                <div class="header__bottom">
                    <div class="header__burger">
                        <img src="<?=IMAGES?>icons/close.svg" alt="Закрыть" class="close">
                        <img src="<?=IMAGES?>icons/burger.svg" alt="Меню" class="open">
                    </div>
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
                        <div class="header__bottom-info-item">
                            <span>
                                <img src="<?=IMAGES?>icons/phone.svg" alt="Телефон">
                                <span>
                                    <a href="tel:+79650690142">+7 965 069-01-42</a> <br>
                                    <a href="tel:+79650461969">+7 965 046-19-69</a>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="header__bottom-btns">
                        <?=getBtn([
                            'text' => 'Написать нам письмо',
                            'image' => IMAGES.'icons/mail.svg',
                            'class' => 'white'
                        ])?>
                        <?=getBtn([
                            'text' => 'Заказать звонок',
                            'image' => IMAGES.'icons/phone-blue.svg',
                            'class' => 'light',
                            'attr' => 'data-call-modal="callback"'
                        ])?>
                    </div>
                </div>
                <div class="header__banner text_fz24">
                    <div class="header__banner-text">
                        <img src="<?=IMAGES?>header-banner-image.svg" alt="Электронные сертификаты">
                        <span>
                            Принимаем к оплате <span class="text_red">электронные сертификаты</span> — обратитесь к менеджеру
                        </span>
                    </div>
                    <a href="/certificate/" class="simple-link text_fz18">
                        <span>Подробнее</span>
                        <img src="<?=IMAGES?>icons/arrow-right.svg" alt="Подробнее">
                    </a>
                </div>
                <div class="header__bar">
                    <?=getBtn([
                        'text' => 'Каталог',
                        'image' => IMAGES.'icons/catalog.svg',
                        'class' => 'red header-bar-btn body-click-target global-hide',
                        'attr' => 'data-content="header-bar-cats"'
                    ])?>
                    <form action="/search/" method="GET" class="header__bar-search">
                        <button class="loop">
                            <img src="<?=IMAGES?>icons/loop.svg" alt="Поиск">
                        </button>
                        <input class="text_fz18" type="text" name="q" placeholder="Введите текст для поиска" required>
                        <?=getBtn([
                            'text' => 'Искать'
                        ])?>
                    </form>
                    <div class="header__bar-menu">
                        <a href="/cart/">
                            <img src="<?=IMAGES?>icons/cart.svg" alt="Корзина">
                        </a>
                        <a href="/personal/">
                            <img src="<?=IMAGES?>icons/person.svg" alt="Личный кабинет">
                        </a>
                    </div>
                    <div class="header__bar-cats body-click-content global-hide" data-content="header-bar-cats">
                        <div class="header__bar-cats-close">
                            <img src="<?=IMAGES?>icons/small-arrow.svg" alt="Назад">
                            <span>Назад</span>
                        </div>
                        <div class="header__bar-cats-list">
                            <div class="header__bar-cats-item">
                                <span>Калоприемники</span>
                            </div>
                            <div class="header__bar-cats-item">
                                <span>Уроприемники</span>
                            </div>
                            <div class="header__bar-cats-item">
                                <span>Уход за кожей вокруг стомы</span>
                            </div>
                            <div class="header__bar-cats-item">
                                <span>Уропродукция</span>
                            </div>
                            <div class="header__bar-cats-item">
                                <span>Энтеральное питание</span>
                            </div>
                            <div class="header__bar-cats-item">
                                <span>Эндоурология</span>
                            </div>
                            <div class="header__bar-cats-item">
                                <span>Подгузники для взрослых</span>
                            </div>
                        </div>
                        <div class="header__bar-cats-links">
                            <div class="header__bar-cats-subs">
                                <a href="/catalog/section/">Однокомпонентные калоприемники</a>
                                <a href="/catalog/section/">Двухкомпонентные калоприемники</a>
                                <a href="/catalog/section/">Детские калоприемники</a>
                                <a href="/catalog/section/">Средства при недержании кала</a>
                                <a href="/catalog/section/">Аксессуары</a>
                            </div>
                            <div class="header__bar-cats-subs">
                                <a href="/catalog/section/">Однокомпонентные уроприемники</a>
                                <a href="/catalog/section/">Двухкомпонентные уроприемники</a>
                                <a href="/catalog/section/">Детские уроприемники</a>
                                <a href="/catalog/section/">Пластины</a>
                                <a href="/catalog/section/">Аксессуары</a>
                            </div>
                            <div class="header__bar-cats-subs">
                                <a href="/catalog/section/">Средства для ухода за кожей вокруг стомы</a>
                                <a href="/catalog/section/">Средства для ухода за ранами</a>
                            </div>
                            <div class="header__bar-cats-subs">
                                <a href="/catalog/section/">Однокомпонентные калоприемники</a>
                                <a href="/catalog/section/">Двухкомпонентные калоприемники</a>
                                <a href="/catalog/section/">Детские калоприемники</a>
                                <a href="/catalog/section/">Средства при недержании кала</a>
                                <a href="/catalog/section/">Аксессуары</a>
                            </div>
                            <div class="header__bar-cats-subs">
                                <a href="/catalog/section/">Уропрезервативы</a>
                                <a href="/catalog/section/">Катетеры лубрицированные</a>
                                <a href="/catalog/section/">Мешки для сбора мочи</a>
                            </div>
                            <div class="header__bar-cats-subs">
                                <a href="/catalog/section/">Elefant Устройство для аспирации/ирригации</a>
                                <a href="/catalog/section/">PIC катетеры</a>
                                <a href="/catalog/section/">Биопсийный пистолет</a>
                                <a href="/catalog/section/">Катетеры Фолея уретральные</a>
                                <a href="/catalog/section/">Литоэкстракторы</a>
                            </div>
                            <div class="header__bar-cats-subs">
                                <a href="/catalog/section/">Подгузники Tena</a>
                                <a href="/catalog/section/">Прокладки урологические</a>
                                <a href="/catalog/section/">Гигиена и защита</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__cats text_fz24">
                    <a href="/catalog/section/" class="header__cats-item">
                        <img src="<?=IMAGES?>header-cat1.svg" alt="Калоприемники">
                        <span>Калоприемники</span>
                    </a>
                    <a href="/catalog/section/" class="header__cats-item">
                        <img src="<?=IMAGES?>header-cat2.svg" alt="Уроприемники">
                        <span>Уроприемники</span>
                    </a>
                    <a href="/catalog/section/" class="header__cats-item">
                        <img src="<?=IMAGES?>header-cat3.svg" alt="Уход за кожей вокруг стомы">
                        <span>Уход за кожей вокруг стомы</span>
                    </a>
                    <a href="/catalog/section/" class="header__cats-item">
                        <img src="<?=IMAGES?>header-cat4.svg" alt="Уропродукция">
                        <span>Уропродукция</span>
                    </a>
                    <a href="/catalog/section/" class="header__cats-item">
                        <img src="<?=IMAGES?>header-cat5.svg" alt="Подгузники для взрослых">
                        <span>Подгузники для взрослых</span>
                    </a>
                    <a href="/catalog/section/" class="header__cats-item">
                        <img src="<?=IMAGES?>header-cat6.svg" alt="Эндоурология">
                        <span>Эндоурология</span>
                    </a>
                    <a href="/catalog/section/" class="header__cats-item">
                        <img src="<?=IMAGES?>header-cat7.svg" alt="Энтеральное питание">
                        <span>Энтеральное питание</span>
                    </a>
                </div>
            </div>
            <div class="header__mobile">
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
                    <div class="header__bottom-info-item">
                        <span>
                            <img src="<?=IMAGES?>icons/phone.svg" alt="Телефон">
                            <span>
                                <a href="tel:+79650690142">+7 965 069-01-42</a> <br>
                                <a href="tel:+79650461969">+7 965 046-19-69</a>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="header__bottom-btns">
                    <?=getBtn([
                        'text' => 'Написать нам письмо',
                        'image' => IMAGES.'icons/mail.svg',
                        'class' => 'white'
                    ])?>
                    <?=getBtn([
                        'text' => 'Заказать звонок',
                        'image' => IMAGES.'icons/phone-blue.svg',
                        'class' => 'light',
                        'attr' => 'data-call-modal="callback"'
                    ])?>
                </div>
                <nav class="header__top-nav text_fz16">
                    <ul>
                        <li><a href="/about/">О магазине</a></li>
                        <li><a href="/stocks/">Акции</a></li>
                        <li><a href="/contacts/">Контакты</a></li>
                        <li><a href="/delivery/">Доставка</a></li>
                        <li><a href="/payment/">Оплата</a></li>
                        <li><a href="/certificate/">Принимаем электронные сертификаты ФСС</a></li>
                        <li><a href="/useful/">Полезная информация</a></li>
                    </ul>
                </nav>
            </div>
        </header>