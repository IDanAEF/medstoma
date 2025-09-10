<?php require '../../header.php'; ?>
<main class="catalog">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <a href="/catalog/" class="text_color-dark">Каталог</a>
                <span class="text_fz14"> / </span>
                <span>Калоприемники</span>
            </div>
        </div>
    </section>
    <section class="page__block pt0">
        <div class="container">
            <div class="home__reviews-title page__title">
                <h1>Калоприемники</h1>
                <span>
                    Калоприемники предназначены для сбора кишечных выделений у стомированных пациентов. В нашем каталоге представлены одноразовые и многоразовые модели, а также двухкомпонентные системы. Все изделия сертифицированы, герметичны и удобны в использовании. Широкий выбор размеров и креплений позволяет подобрать оптимальный вариант под индивидуальные особенности.
                </span>
            </div>
        </div>
    </section>
    <section class="catalog__sub page__block pt0">
        <div class="container">
            <div class="catalog__sub-list text_fz24">
                <a href="/catalog/section/">Однокомпонентные калоприемники</a>
                <a href="/catalog/section/">Двухкомпонентные калоприемники</a>
                <a href="/catalog/section/">Детские калоприемники</a>
                <a href="/catalog/section/">Средства при недержании кала</a>
                <a href="/catalog/section/">Аксессуары</a>
            </div>
        </div>
    </section>
    <section class="catalog__list page__block pt0">
        <div class="container">
            <div class="catalog__list-sort text_fz16 select-field">
                <div class="name select-field-name body-click-target" data-default="Сортировка">
                    <span class="text_color-dark">В наличии</span>
                    <img src="<?=IMAGES?>icons/small-arrow.svg" alt="">
                </div>
                <div class="list select-field-list body-click-content">
                    <span>Сначала дешевые товары</span>
                    <span>Сначала дорогие товары</span>
                    <span>Сначала популярные товары</span>
                    <span>Сначала новые товары</span>
                    <span class="active">В наличии</span>
                    <span>По алфавиту: от А до Я</span>
                    <span>По алфавиту: от Я до А</span>
                </div>
            </div>
            <div class="catalog__list-items">
                <?php 
                    for($i = 0; $i < 9; $i++) {
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
                            'tag' => 'new',
                            'link' => '/catalog/section/product/',
                            'order' => true,
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
            <?php require '../../includes/page-nav.php'; ?>
        </div>
    </section>
    <section class="page__block">
        <div class="container">
            <div class="home__reviews-title page__title">
                <h2>Надежность и комфорт каждый день</h2>
                <span>
                    Калоприемники обеспечивают гигиену и уверенность людям с кишечной стомой. Современные материалы снижают риск раздражений и протеканий. Подходят для чувствительной кожи и ежедневного использования. Широкий выбор моделей позволяет подобрать решение под любые потребности.
                </span>
            </div>
            <div class="home__reviews-title page__title">
                <h2>Калоприемники — удобное решение для дома и ухода</h2>
                <span>
                    Для лежачих больных и послеоперационных пациентов калоприемники становятся незаменимым элементом ухода. Они просты в использовании и помогают поддерживать чистоту. Выбирайте подходящий тип — однокомпонентный или двухкомпонентный. Консультация специалиста поможет определиться.
                </span>
            </div>
        </div>
    </section>
</main>
<?php require '../../footer.php'; ?>