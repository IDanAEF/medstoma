<?php 
    /* Шаблон список статей|новостей */

    require '../header.php'; 
?>
<main class="states">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <span>Статьи</span>
            </div>
        </div>
    </section>
    <section class="states__list page__block pt0">
        <div class="container">
            <h1 class="page__title">Статьи</h1>
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
            <?php require '../includes/page-nav.php' ?>
        </div>
    </section>
    <?php require '../includes/home-brands.php' ?>
    <?php require '../includes/home-contacts.php' ?>
</main>
<?php require '../footer.php'; ?>