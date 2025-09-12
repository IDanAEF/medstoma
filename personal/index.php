<?php 
    require '../header.php'; 
?>
<main class="personal">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <span>Авторизация</span>
            </div>
        </div>
    </section>
    <section class="personal__login page__block pt0">
        <div class="container">
            <h1 class="page__title">Авторизация</h1>
            <div class="personal__login-wrap">
                <form action="" class="form">
                    <label class="form-label">
                        <span>Логин</span>
                        <input type="text" name="" placeholder="Введите логин" required>
                    </label>
                    <label class="form-label">
                        <span>Пароль</span>
                        <input type="password" name="" placeholder="Введите пароль" required>
                    </label>
                    <div class="form-block checkboxes text_color-dark text_fz14">
                        <label class="checkboxes-item">
                            <input type="checkbox" name="" required>
                            <div class="box"></div>
                            <span>Запомнить меня</span>
                        </label>
                    </div>
                    <div class="form-label">
                        <?=getBtn(['text' => 'Войти'])?>
                    </div>
                    <div class="form-label">
                        <a href="/personal/forgot/" class="text_underline">
                            Забыли пароль?
                        </a>
                    </div>
                </form>
                <div class="personal__login-text">
                    <p>Регистрация на сайте позволит быстро оформлять заказы, управлять заказами через личный кабинет, в полном объеме использовать возможности нашего интернет магазина</p>
                    <?=getBtn([
                        'text' => 'Регистрация',
                        'link' => '/personal/register/'
                    ])?>
                </div>
            </div>
        </div>
    </section>
    <?php require '../includes/home-brands.php' ?>
    <?php require '../includes/home-contacts.php' ?>
</main>
<?php require '../footer.php'; ?>