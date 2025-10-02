<?php 
    require '../header.php'; 
?>
<main class="order">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <span>Корзина</span>
            </div>
        </div>
    </section>
    <section class="order__cart page__block pt0">
        <div class="container">
            <h1 class="page__title">Моя корзина</h1>
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
                            <input type="text" name="" class="num" value="1">
                            <span class="increase"></span>
                        </div>
                    </div>
                    <div class="delete">
                        <img src="<?=IMAGES?>icons/close.svg" alt="Удалить">
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
                            <input type="text" name="" class="num" value="1">
                            <span class="increase"></span>
                        </div>
                    </div>
                    <div class="delete">
                        <img src="<?=IMAGES?>icons/close.svg" alt="Удалить">
                    </div>
                </article>
                <div class="order__cart-result text_fz24 text_fw400">
                    <strong>Итого:</strong>
                    <span>2 шт.</span>
                    <strong class="text_color">1920&nbsp;₽</strong>
                </div>
            </div>
            <div class="order__cart-btns">
                <?=getBtn([
                    'text' => 'Оформить заказ',
                    'link' => '/cart/order/'
                ])?>
                <?=getBtn([
                    'text' => 'Пересчитать',
                    'class' => 'light'
                ])?>
            </div>
            <div class="default-text order__cart-empty">
                <p>В вашей корзине ещё нет товаров.</p>
                <p><a href="/">Начать покупки</a></p>
            </div>
        </div>
    </section>
    <?php require '../includes/home-brands.php' ?>
    <?php require '../includes/home-contacts.php' ?>
</main>
<?php require '../footer.php'; ?>