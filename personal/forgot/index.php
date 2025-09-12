<?php 
    require '../../header.php'; 
?>
<main class="personal">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <span>Забыли пароль?</span>
            </div>
        </div>
    </section>
    <section class="personal__login page__block pt0">
        <div class="container">
            <h1 class="page__title">Забыли пароль?</h1>
            <div class="personal__login-wrap">
                <form action="" class="form">
                    <div class="form-label">
                        Если вы забыли пароль, введите логин или E-Mail. <br>
                        Контрольная строка для смены пароля, а также ваши регистрационные данные, будут высланы вам по E-Mail.
                    </div>
                    <label class="form-label">
                        <span>Логин</span>
                        <input type="text" name="" placeholder="Введите логин" required>
                    </label>
                    <label class="form-label">
                        <span>E-Mail</span>
                        <input type="email" name="" placeholder="Введите E-Mail" required>
                    </label>
                    <div class="form-label">
                        <?=getBtn(['text' => 'Выслать'])?>
                    </div>
                    <div class="form-label">
                        <a href="/personal/" class="text_underline">
                            Авторизация
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php require '../../includes/home-brands.php' ?>
    <?php require '../../includes/home-contacts.php' ?>
</main>
<?php require '../../footer.php'; ?>