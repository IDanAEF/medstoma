<?php 
    require '../header.php'; 
?>
<main class="search">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <span>Поиск</span>
            </div>
        </div>
    </section>
    <section class="search__list page__block pt0">
        <div class="container">
            <h1 class="page__title">Результаты поиска</h1>
            <form action="/search/" method="GET" class="header__bar-search page__title">
                <button class="loop">
                    <img src="<?=IMAGES?>icons/loop.svg" alt="Поиск">
                </button>
                <input class="text_fz18" type="text" name="q" placeholder="Введите текст для поиска" required>
                <?=getBtn([
                    'text' => 'Искать'
                ])?>
            </form>
            <div class="catalog__list-items">
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
            <?php require '../includes/page-nav.php'; ?>
        </div>
    </section>
    <?php require '../includes/home-brands.php' ?>
    <?php require '../includes/home-contacts.php' ?>
</main>
<?php require '../footer.php'; ?>