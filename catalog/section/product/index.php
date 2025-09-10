<?php require '../../../header.php'; ?>
<main class="catalog">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <a href="/catalog/" class="text_color-dark">Каталог</a>
                <span class="text_fz14"> / </span>
                <a href="/catalog/section/" class="text_color-dark">Калоприемники</a>
                <span class="text_fz14"> / </span>
                <a href="/catalog/section/" class="text_color-dark">Однокомпонентные калоприемники</a>
                <span class="text_fz14"> / </span>
                <a href="/catalog/section/" class="text_color-dark">Однокомпонентные закрытые калоприемники</a>
                <span class="text_fz14"> / </span>
                <span>SenSura калоприемник послеоперационный прозрачный с окном 10–115 мм</span>
            </div>
        </div>
    </section>
    <section class="catalog__product page__block pt0">
        <div class="container">
            <div class="catalog__product-top page__title">
                <h1>SenSura калоприемник послеоперационный прозрачный с окном 10–115 мм</h1>
                <span class="article text_fz16 text_color-dark">артикул 123456</span>
            </div>
            <div class="catalog__product-info">
                <a href="<?=IMAGES?>product-image.png" class="catalog__product-image" data-fancybox>
                    <img src="<?=IMAGES?>product-image.png" alt="SenSura калоприемник послеоперационный прозрачный с окном 10–115 мм">
                </a>
                <div class="catalog__product-params">
                    <h3>Характеристики</h3>
                    <div class="params">
                        <div class="params-item">
                            <span>Вес товара, г</span>
                            <span>160</span>
                        </div>
                        <div class="params-item">
                            <span>Размеры, мм</span>
                            <span>50</span>
                        </div>
                        <div class="params-item">
                            <span>Количество в упаковке, шт.</span>
                            <span>5</span>
                        </div>
                        <div class="params-item">
                            <span>Цвет</span>
                            <span>Бежевый</span>
                        </div>
                    </div>
                    <span class="count">Цена указана за 1 шт.</span>
                </div>
                <div class="catalog__product-order">
                    <div class="price text_fz48">
                        <span class="text_red">860&nbsp;₽</span>
                        <span class="text_fz24 text_lt">946&nbsp;₽</span>
                        <span class="text_fz24 text_red">-10%</span>
                    </div>
                    <div class="btns">
                        <div class="counter">
                            <span class="decrease"></span>
                            <span class="num">1</span>
                            <span class="increase"></span>
                        </div>
                        <?=getBtn([
                            'text' => 'В корзину',
                            'image' => IMAGES.'icons/cart.svg'
                        ])?>
                    </div>
                    <?=getBtn([
                        'text' => 'Заказать в 1 клик',
                        'image' => IMAGES.'icons/phone-blue.svg',
                        'class' => 'light one-click'
                    ])?>
                    <div class="list text_fz16 text_color-dark">
                        <span>
                            <img src="<?=IMAGES?>icons/box.svg" alt="cамовывоз из Санкт-Петербурга">
                            cамовывоз из Санкт-Петербурга
                        </span>
                        <span>
                            <img src="<?=IMAGES?>icons/box-pack.svg" alt="доставка по всей России">
                            доставка по всей России
                        </span>
                        <span>
                            <img src="<?=IMAGES?>icons/cash.svg" alt="оплата любым способом">
                            оплата любым способом
                        </span>
                        <span>
                            <img src="<?=IMAGES?>icons/card.svg" alt="принимаем сертификаты ФСС">
                            принимаем сертификаты ФСС
                        </span>
                    </div>
                </div>
            </div>
            <div class="catalog__product-tabs">
                <div class="catalog__product-tabs-names text_fz24">
                    <span class="active">Описание</span>
                    <span>Доставка</span>
                    <span>Оплата</span>
                </div>
                <div class="catalog__product-tabs-content default-text active">
                    <p>Адгезивная пластина, конвексная SenSura Click применяется совместно со стомным мешком, в составе двухкомпонентной системы по сбору отделяемого кишечником у пациентов с втянутой или плоской стомой, размещающейся в складках кожи.</p>
                    <p>Диаметр вырезаемого отверстия: 15–33 мм, диаметр фланца: 50 мм. Пластина точно и надежно фиксируется на теле, при ношении подстраивается под рельеф кожи. После использования, абсолютно безболезненно и не оставляя следов на коже, удаляется.</p>
                    <p>Выполненный из высокопрочного пластика фланец пластины обеспечивает ее надежное сцепление с мешком, сохраняя полную герметичность системы. Благодаря современным адгезивным материалам, пластина уверенно фиксируется на коже, плотно прилегает к телу, не стесняет и не ограничивает движений.</p>
                    <p>Адгезивный слой пластины состоит из двух чередующихся слоев гидроколлоидных материалов. Темный, нижний слой абсорбирует отделяемое кишечником, обеспечивает нормальное состояние кожи под пластиной, предохраняет от раздражения и поддерживает естественный рН кожи, а так же позволяет безболезненно отклеивать пластину, не оставляя следов. Верхний, светлый слой устойчив к эрозии — он надежно защищает пластину и кожу от контакта с агрессивным кишечным отделяемым.</p>
                </div>
                <div class="catalog__product-tabs-content default-text">
                    <h3>по Москве</h3>
                    <ul class="ul-images">
                        <li>
                            <img src="<?=IMAGES?>icons/box-pack.svg" alt="">
                            <span>курьерская доставка от 300 рублей</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/box.svg" alt="">
                            <span>при покупке от 5000 рублей — бесплатно</span>
                        </li>
                    </ul>
                    <h3>по Санкт-Петербургу</h3>
                    <ul class="ul-images">
                        <li>
                            <img src="<?=IMAGES?>icons/box-pack.svg" alt="">
                            <span>курьерская доставка от 200 рублей</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/box.svg" alt="">
                            <span>при покупке от 5000 рублей — бесплатно</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/map.svg" alt="">
                            <span>cамовывоз — бесплатно, <br>адрес склада: Решетникова 15, офис 344</span>  
                        </li>
                    </ul>
                    <h3>Доставка по России осуществляется следующими службами</h3>
                    <p>EMS почта России, Почта России, транспортная компания ПЭК, транспортная компания Деловые Линии, PONY EXPRESS, DHL Express, СДЭК и др.</p>
                    <p>Для вашего удобства воспользуйтесь возможностью рассчитать и сравнить стоимость и сроки доставки различными службами при оформлении заказа. Вы также можете уточнить стоимость доставки по телефону.</p>
                    <h3>При заказе от 10 000 ₽ доставка почтой России бесплатно — только наземная посылка без наложенного платежа</h3>
                </div>
                <div class="catalog__product-tabs-content default-text">
                    <h3>Оплата происходит следующими способами:</h3>
                    <ul class="ul-images">
                        <li>
                            <img src="<?=IMAGES?>icons/cash.svg" alt="">
                            <span>наличными деньгами курьеру при получении заказа (только Санкт-Петербург и Москва). Взимается дополнительная комиссия 5%</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/cash.svg" alt="">
                            <span>наличными деньгами при доставке ЕMS Почта России (дополнительно взимается 0,1% - 0,4% от суммы заказа за почтовый перевод)</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/card.svg" alt="">
                            <span>пластиковыми картами платежных систем Мир, Visa, Mastercard</span>  
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/bank.svg" alt="">
                            <span>оплата полученного счета в любом банке, действующем на территории России по указанным в счете реквизитам. Срок зачисления денежных средств 2-3 рабочих дня</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/laptop.svg" alt="">
                            <span>
                                прочими способами:
                                <ul>
                                    <li>электронными деньгами;</li>
                                    <li>оплата по электронному счету — после выставления счета менеджером и отправки его на вашу электронную почту, средства зачисляются в течение 15 минут;</li>
                                    <li>через платежные терминалы (Элекснет, Дельта Телеком и пр.);</li>
                                    <li>с онлайн карты Мегафон, с мобильной карты Билайн;</li>
                                    <li>через систему Rapida</li>
                                </ul>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="home__products page__block">
        <div class="container">
            <h2 class="page__title">Похожие товары</h2>
            <div class="home__products-slider slider" data-tv-vis="4" data-lap-vis="3" data-tablet-big-vis="2" data-stablet-vis="1">
                <div class="slider-list">
                    <div class="slider-track">
                        <?php 
                            for($i = 0; $i < 2; $i++) {
                                getProductCard([
                                    'name' => 'Поставщик медицинских изделий, подтвержденных регистрационными удостоверениями',
                                    'image' => IMAGES.'product-preview1.png',
                                    'price' => 1999,
                                    'article' => '120205',
                                    'tag' => 'popular',
                                    'link' => '/catalog/section/product/',
                                    'class' => 'slide'
                                ]);
                                getProductCard([
                                    'name' => 'Sensura калоприемник послеоперационный прозрачный с окном 10–115 мм',
                                    'image' => IMAGES.'product-preview2.png',
                                    'price' => 860,
                                    'oldPrice' => 946,
                                    'article' => '190210',
                                    'tag' => 'popular',
                                    'link' => '/catalog/section/product/',
                                    'class' => 'slide'
                                ]);
                                getProductCard([
                                    'name' => 'Катетер для ЧПНС, J тип, однопетлевой',
                                    'image' => IMAGES.'product-preview3.png',
                                    'price' => 9500,
                                    'article' => 'RCJ114',
                                    'tag' => 'popular',
                                    'link' => '/catalog/section/product/',
                                    'order' => true,
                                    'class' => 'slide'
                                ]);
                                getProductCard([
                                    'name' => 'Подгузники для взрослых <br>SENI Super Plus XL',
                                    'image' => IMAGES.'product-preview4.png',
                                    'price' => 2950,
                                    'tag' => 'popular',
                                    'link' => '/catalog/section/product/',
                                    'class' => 'slide'
                                ]);
                            }
                        ?>
                    </div>
                </div>
                <span class="slider-arrows-item left">
                    <img src="<?=IMAGES?>icons/slider-arrow.svg" alt="Влево">
                </span>
                <span class="slider-arrows-item right">
                    <img src="<?=IMAGES?>icons/slider-arrow.svg" alt="Вправо">
                </span>
            </div>
        </div>
    </section>
</main>
<?php require '../../../footer.php'; ?>