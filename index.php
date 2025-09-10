<?php require 'header.php'; ?>
<main class="home">
    <section class="home__promo page__block">
        <div class="home__promo-wrap page__block">
            <div class="container">
                <div class="home__promo-logo">
                    <h1 class="text_fz100 text_fw700 text_color-dark">MEDSTOMA</h1>
                    <span>интернет-магазин медицинского оборудования и средств реабилитации</span>
                </div>
                <div class="home__promo-text">
                    <ul class="text_fz16">
                        <li>
                            <img src="<?=IMAGES?>icons/laptop.svg" alt="Первый шаг">
                            <span>Вы зашли на наш сайт — значит один шаг на пути решения проблемы уже сделан</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/headset.svg" alt="Отзывчивость">
                            <span>Мы всегда готовы помочь вам и ответить на все ваши вопросы</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/medkit.svg" alt="Помощь">
                            <span>Наша задача: максимально помочь людям с деликатными медицинскими потребностями</span>
                        </li>
                        <li>
                            <img src="<?=IMAGES?>icons/card.svg" alt="Электронные сертификаты">
                            <span>Принимаем к оплате электронные сертификаты — обратитесь к менеджеру</span>
                        </li> 
                    </ul>
                    <?=getBtn([
                        'text' => 'В каталог продукции',
                        'image' => IMAGES.'icons/catalog.svg',
                        'class' => 'red',
                        'link' => '/catalog/'
                    ])?>
                </div>
            </div>
        </div>
    </section>
    <section class="home__adv page__block">
        <div class="container">
            <h2 class="page__title">
                Преимущества нашего интернет-магазина
            </h2>
            <div class="home__adv-list">
                <div class="home__adv-list-item plane plane1">
                    <div class="plane__row">
                        <img src="<?=IMAGES?>bag.svg" alt="15 000+ выполненных заказов">
                        <div class="plane__row-text">
                            <strong class="text_fz90 text_red">15 000+</strong>
                            выполненных заказов
                        </div>
                    </div>
                </div>
                <div class="home__adv-list-item">
                    <div class="image">
                        <img src="<?=IMAGES?>adv-image1.png" alt="Консультация">
                    </div>
                    <div class="text">
                        Консультация квалифицированных специалистов по применению продукции
                    </div>
                </div>
                <div class="home__adv-list-item">
                    <div class="image">
                        <img src="<?=IMAGES?>adv-image2.png" alt="Поставщик медицинских изделий">
                    </div>
                    <div class="text">
                        Поставщик медицинских изделий, подтвержденных регистрационными удостоверениями
                    </div>
                </div>
                <div class="home__adv-list-item plane plane2">
                    <div class="plane__row">
                        <img src="<?=IMAGES?>heart.svg" alt="с 2012 года на медицинском рынке">
                        <div class="plane__row-text">
                            <strong class="text_fz100 text_color-light">с 2012</strong>
                            года на медицинском рынке
                        </div>
                    </div>
                </div>
                <div class="home__adv-list-item">
                    <div class="image">
                        <img src="<?=IMAGES?>adv-image3.png" alt="Короткие сроки обработки">
                    </div>
                    <div class="text">
                        Короткие сроки обработки, сборки, отправки и доставки заказов
                    </div>
                </div>
                <div class="home__adv-list-item">
                    <div class="image">
                        <img src="<?=IMAGES?>adv-image4.png" alt="Скидки постоянным клиентам">
                    </div>
                    <div class="text">
                        Скидки постоянным клиентам и образцы товаров в подарок
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__products page__block">
        <div class="container">
            <h2 class="page__title">Популярное</h2>
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
    <section class="home__products page__block">
        <div class="container">
            <h2 class="page__title">Новинки</h2>
            <div class="home__products-slider slider" data-tv-vis="4" data-lap-vis="3" data-tablet-big-vis="2" data-stablet-vis="1">
                <div class="slider-list">
                    <div class="slider-track">
                        <?php 
                            for($i = 0; $i < 2; $i++) {
                                getProductCard([
                                    'name' => 'Защитная пленка Спрей Brava, 50 мл',
                                    'image' => IMAGES.'product-preview1.png',
                                    'price' => 1999,
                                    'article' => '120205',
                                    'tag' => 'new',
                                    'link' => '/catalog/section/product/',
                                    'class' => 'slide'
                                ]);
                                getProductCard([
                                    'name' => 'Sensura калоприемник послеоперационный прозрачный с окном 10–115 мм',
                                    'image' => IMAGES.'product-preview2.png',
                                    'price' => 860,
                                    'oldPrice' => 946,
                                    'article' => '190210',
                                    'tag' => 'new',
                                    'link' => '/catalog/section/product/',
                                    'class' => 'slide'
                                ]);
                                getProductCard([
                                    'name' => 'Катетер для ЧПНС, J тип, однопетлевой',
                                    'image' => IMAGES.'product-preview3.png',
                                    'price' => 9500,
                                    'article' => 'RCJ114',
                                    'tag' => 'new',
                                    'link' => '/catalog/section/product/',
                                    'class' => 'slide'
                                ]);
                                getProductCard([
                                    'name' => 'Подгузники для взрослых <br>SENI Super Plus XL',
                                    'image' => IMAGES.'product-preview4.png',
                                    'price' => 2950,
                                    'tag' => 'new',
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
    <?php require 'includes/home-assort.php' ?>
    <section class="home__accord page__block">
        <div class="container">
            <div class="home__accord-item">
                <div class="name body-click-target">
                    <h2>Современные средства ухода и реабилитации</h2>
                    <span class="plus"></span>
                </div>
                <div class="content body-click-content">
                    <div class="content__grid">
                        <div class="content__grid-item default-text">
                            <h3>Активная жизнь со стомой — это реально</h3>
                            <p>Стомированные пациенты во всем мире ведут полноценный, активный образ жизни, правильно подобрав средства ухода за стомой</p>
                        </div>
                        <div class="content__grid-item default-text">
                            <h3>Современные решения для деликатных состояний</h3>
                            <p>К сожалению многие стомированные пациенты и пациенты с нарушением функции мочеиспускания не всегда владеют информацией о возможностях реабилитации и улучшения их качества жизни. Между тем ряд мировых производителей, таких как Колопласт, ББраун, Конватек, постоянно разрабатывают и предлагают различные средства ухода за стомой, оборудование для облегчения жизни и ускорения реабилитации</p>
                        </div>
                        <div class="content__grid-item default-text">
                            <h3>Уход и комфорт — в одном месте</h3>
                            <p>Интернет-магазин MedStoma предлагает данные товары по доступным ценам, с доставкой по Санкт-Петербургу и в другие регионы России. У нас вы найдете обширный каталог средств по уходу за лежачими больными — мочеприемники, кремы для защиты стомы и кожи вокруг нее, бандажи, повязки, памперсы для взрослых и многое другое</p>
                        </div>
                        <div class="content__grid-item default-text">
                            <h3>Мы поможем с выбором средств реабилитации</h3>
                            <p>Мы готовы помочь в решении деликатных проблем, с которым может столкнуться пациент, подобрать удобные, надежные и современные средства технической реабилитации. По любым вопросам звоните нам по телефонам, указанным на сайте</p>
                        </div>
                        <div class="content__grid-item default-text">
                            <h3>Продукция ведущих мировых брендов</h3>
                            <p>Мы предлагаем широкий спектр технических средств реабилитации для пациентов с недержанием или задержкой мочеиспускания, представленных ведущими мировыми производителями и экспертами в этой области: Coloplast, Convatec, BBraun</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home__accord-item">
                <div class="name body-click-target">
                    <h2>Все необходимое — от ухода до профессиональной помощи</h2>
                    <span class="plus"></span>
                </div>
                <div class="content body-click-content">
                    <div class="content__grid">
                        <div class="content__grid-item default-text">
                            <h3>Полезная информация и поддержка</h3>
                            <p>На сайте вы найдете много полезной информации и всегда можете получить профессиональную консультацию наших специалистов</p>
                        </div>
                        <div class="content__grid-item default-text">
                            <h3>Эндоурология</h3>
                            <p>На сайте представлена также продукция для эндоурологии торговой марки Porge Coloplast (Франция). Ассортимент урологических инструментов очень широк, на сайте представлена небольшая его часть, полную информацию о продукции можно получить у менеджеров</p>
                        </div>
                        <div class="content__grid-item default-text">
                            <h3>Средства инфузионной терапии и ухода за лежачими пациентами</h3>
                            <p>В нашем магазине предлагаются венозные системы — системы венозного доступа (пик катетеры), помпы для инфузий (с болюсом, с регулятором скорости потока).</p>
                            <p>Мы предлагаем большой выбор средств для ухода за лежачими больными, купить которые можно по доступным ценам. В наш ассортимент ходят: памперсы для взрослых и урологические прокладки, мочеприемники, реабилитационная техника</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home__accord-item">
                <div class="name body-click-target">
                    <h2>Гарантии и сертификаты</h2>
                    <span class="plus"></span>
                </div>
                <div class="content body-click-content">
                    <div class="content__grid">
                        <div class="content__grid-item default-text">
                            <h3>Гарантия качества и соответствие медицинским стандартам</h3>
                            <p>Интернет-магазин MedStoma предлагает вам только качественную и сертифицированную продукцию, полностью соответствующую требованиям международных стандартов, предъявляемым к медицинскому оборудованию и средствам для ухода за лежачими больными. Мы гарантируем, что все товары хранятся в надлежащих условиях. Обращаем ваше внимание на то, что товары данной категории по законам не подлежат возврату и обмену, поэтому перед совершением покупки проконсультируйтесь с нашим менеджером</p>
                        </div>
                        <!-- <div class="content__slider slider" data-tv-vis="4">
                            <div class="slider-list">
                                <div class="slider-track">

                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__delivery home__consult page__block">
        <div class="container">
            <div class="home__consult-wrap">
                <img src="<?=IMAGES?>home-delivery-image.svg" alt="Доставка">
                <div class="text">
                    <span class="text_fz24">
                        Бесплатная доставка при заказе от 5 000 рублей по Москве и Санкт-Петербургу, при заказе от 10 000 рублей — почтой по всей России
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="home__reviews page__block">
        <div class="container">
            <div class="home__reviews-title page__title">
                <h2>Нам доверяют</h2>
                <span>
                    Мы работаем с коммерческими организациями такими как: сеть магазинов Кладовая Здоровья, медтехника Европа, аптечная сеть Фиалка, Лекоптторг, а также с фондами Социального страхования Волгограда, Бреста, Сыктывкара
                    <img src="<?=IMAGES?>home-reviews-image.png" alt="Организации">
                </span>
            </div>
            <div class="home__reviews-slider text_fz16 slider" data-tv-vis="4" data-lap-vis="3" data-tablet-vis="2" data-stablet-vis="1">
                <div class="slider-list">
                    <div class="slider-track">
                        <?php
                            for($i = 0; $i < 2; $i++) {
                                ?>
                                <article class="home__reviews-item slide">
                                    <div class="review-top">
                                        <div class="review-person">
                                            <span class="date text_fz12 text_color-dark">6 февраля 2024</span>
                                            <span class="name">Дмитрий Иванов</span>
                                        </div>
                                        <div class="review-rating">
                                            <img src="<?=IMAGES?>rating-temp.svg" alt="Рейтинг">
                                            <img src="<?=IMAGES?>rating.svg" alt="Рейтинг" class="active" style="width: calc(5% / 0.05);">
                                        </div>
                                    </div>
                                    <div class="review-text text_fw400">
                                        Всегда радуюсь, когда обращаюсь к вам.
                                    </div>
                                </article>
                                <article class="home__reviews-item slide">
                                    <div class="review-top">
                                        <div class="review-person">
                                            <span class="date text_fz12 text_color-dark">6 февраля 2024</span>
                                            <span class="name">Дмитрий Иванов</span>
                                        </div>
                                        <div class="review-rating">
                                            <img src="<?=IMAGES?>rating-temp.svg" alt="Рейтинг">
                                            <img src="<?=IMAGES?>rating.svg" alt="Рейтинг" class="active" style="width: calc(4% / 0.05);">
                                        </div>
                                    </div>
                                    <div class="review-text text_fw400">
                                        Качество продукции на высшем уровне.
                                    </div>
                                </article>
                                <article class="home__reviews-item slide">
                                    <div class="review-top">
                                        <div class="review-person">
                                            <span class="date text_fz12 text_color-dark">7 февраля 2024</span>
                                            <span class="name">Елена Петрова</span>
                                        </div>
                                        <div class="review-rating">
                                            <img src="<?=IMAGES?>rating-temp.svg" alt="Рейтинг">
                                            <img src="<?=IMAGES?>rating.svg" alt="Рейтинг" class="active" style="width: calc(3% / 0.05);">
                                        </div>
                                    </div>
                                    <div class="review-text text_fw400">
                                        Удобный интерфейс и быстрая доставка.
                                    </div>
                                </article>
                                <article class="home__reviews-item slide">
                                    <div class="review-top">
                                        <div class="review-person">
                                            <span class="date text_fz12 text_color-dark">5 февраля 2024</span>
                                            <span class="name">Анна Смирнова</span>
                                        </div>
                                        <div class="review-rating">
                                            <img src="<?=IMAGES?>rating-temp.svg" alt="Рейтинг">
                                            <img src="<?=IMAGES?>rating.svg" alt="Рейтинг" class="active" style="width: calc(2.5% / 0.05);">
                                        </div>
                                    </div>
                                    <div class="review-text text_fw400">
                                        Отличный сервис, рекомендую!
                                    </div>
                                </article>
                                <?php
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
    <section class="home__how page__block">
        <div class="container">
            <h2 class="page__title">
                Как заказать на нашем сайте
            </h2>
            <div class="home__how-wrap">
                <div class="home__how-line">
                    <div class="home__how-line-item"><span></span></div>
                    <div class="home__how-line-item"><span></span></div>
                    <div class="home__how-line-item"><span></span></div>
                    <div class="home__how-line-item"><span></span></div>
                </div>
                <div class="home__how-list">
                    <div class="home__how-list-item">
                        <span class="num">1</span>
                        <span class="text_color-dark">
                            Оформите заказ в нашем интернет-магазине через форму обратной связи или оставьте заявку по телефону: <br>8 (800) 775-13-14
                        </span>
                    </div>
                    <div class="home__how-list-item">
                        <span class="num">2</span>
                        <span class="text_color-dark">
                            Наш сотрудник свяжется с вами для подтверждения или уточнения заказа
                        </span>
                    </div>
                    <div class="home__how-list-item">
                        <span class="num">3</span>
                        <span class="text_color-dark">
                            Курьерская доставка по Санкт-Петербургу и Москве, самовывоз со склада, доставка СДЭК, почта или ТК по всей России
                        </span>
                    </div>
                    <div class="home__how-list-item">
                        <span class="num">4</span>
                        <span class="text_color-dark">
                            Оплата заказа любым удобным для вас способом при получении
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require 'includes/home-consult.php' ?>
    <?php require 'includes/home-brands.php' ?>
    <?php require 'includes/home-contacts.php' ?>
</main>
<?php require 'footer.php'; ?>