<?php 
    /*
        Шаблон страницы города в контактах
    */

    require '../../header.php'; 
?>
<main class="contacts">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <a href="/contacts/" class="text_color-dark">Контакты</a>
                <span class="text_fz14"> / </span>
                <span>Средства реабилитации и медицинское оборудование в Москве</span>
            </div>
        </div>
    </section>
    <section class="page__block pt0">
        <div class="container">
            <h1 class="page__title">Средства реабилитации и медицинское оборудование в Москве</h1>
            <div class="default-text">
                <p>Стомированные пациенты во всем мире ведут полноценный, активный образ жизни, правильно подобрав средства ухода за стомой. Интернет-магазин MedStoma предлагает большой выбор средств реабилитации по доступным ценам, с доставкой по Москве и в другие регионы России. У нас вы найдете обширный каталог средств по уходу за лежачими больными – мочеприемники, крема для защиты стомы и кожи вокруг нее, бандажи, повязки, памперсы для взрослых и многое другое.</p>
            </div>
        </div>
    </section>
    <?php require '../../includes/home-assort.php' ?>
    <?php require '../../includes/home-adv.php' ?>
    <section class="clients__docs page__block">
        <div class="container">
            <h2 class="page__title">Наши сертификаты</h2>
            <div class="clients__docs-list">
                <a href="https://medstoma.ru/img/sert1.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert1.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert2.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert2.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert3.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert3.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert4.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert4.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert5.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert5.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert6.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert6.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert7.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert7.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert8.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert8.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert9.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert9.jpg">
                </a>
                <a href="https://medstoma.ru/img/sert10.jpg" data-fancybox="docs">
                    <img src="https://medstoma.ru/img/sert10.jpg">
                </a>
            </div>
        </div>
    </section>
    <?php require '../../includes/home-reviews.php' ?>
    <section class="states__list page__block pt0">
        <div class="container">
            <h1 class="page__title">Полезные статьи</h1>
            <div class="states__list-wrap">
                <?php
                    for($i = 1; $i <= 6; $i++) {
                        ?>
                        <article class="states__list-item">
                            <a href="/articles/state/" class="image">
                                <img src="<?=IMAGES?>states-image<?=$i?>.jpg" alt="Заголовок статьи" class="img_bg">
                            </a>
                            <div class="text">
                                <div class="default-text">
                                    <h2 class="text_fz24 text_color-dark">Заголовок статьи</h2>
                                    <p>Правильное питание, умеренные физические нагрузки и отказ от вредных привычек помогают поддерживать организм в тонусе</p>
                                </div>
                                <?=getBtn([
                                    'class' => 'light',
                                    'image' => IMAGES.'icons/arrow-right.svg',
                                    'link' => '/articles/state/'
                                ])?>
                            </div>
                        </article>
                        <?php
                    }
                ?>
            </div>
            <?=getBtn([
                'text' => 'Смотреть все статьи',
                'link' => '/articles/',
                'class' => 'on-bottom'
            ])?>
        </div>
    </section>
    <?php require '../../includes/home-brands.php' ?>
    <?php require '../../includes/home-contacts.php' ?>
</main>
<?php require '../../footer.php'; ?>