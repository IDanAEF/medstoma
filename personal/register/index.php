<?php 
    require '../../header.php'; 
?>
<main class="personal">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <span>Зарегистрироваться</span>
            </div>
        </div>
    </section>
    <section class="personal__login page__block pt0">
        <div class="container">
            <h1 class="page__title">Зарегистрироваться</h1>
            <div class="personal__login-wrap">
                <form action="" class="form">
                    <label class="form-label">
                        <span>Имя</span>
                        <input type="text" name="" placeholder="Введите имя" required>
                    </label>
                    <label class="form-label">
                        <span>Фамилия</span>
                        <input type="text" name="" placeholder="Введите фамилию" required>
                    </label>
                    <label class="form-label">
                        <span>
                            Логин <br>
                            <span class="text_fz14 text_color-dark">— Логин должен быть не менее 3 символов.</span>
                        </span>
                        <input type="text" name="" placeholder="Введите логин" required>
                    </label>
                    <label class="form-label">
                        <span>
                            Пароль <br>
                            <span class="text_fz14 text_color-dark">— Пароль должен быть не менее 6 символов длиной.</span>
                        </span>
                        <input type="password" name="" placeholder="Введите пароль" required>
                    </label>
                    <label class="form-label">
                        <span>Подтверждение пароля</span>
                        <input type="password" name="" placeholder="Подтвердите пароль" required>
                    </label>
                    <label class="form-label">
                        <span>E-Mail</span>
                        <input type="email" name="" placeholder="Введите E-Mail" required>
                    </label>
                    <div class="form-label">
                        <?=getBtn(['text' => 'Зарегистрироваться'])?>
                    </div>
                    <div class="form-block checkboxes text_color-dark text_fz14">
                        <label class="checkboxes-item">
                            <input type="checkbox" name="" required>
                            <div class="box"></div>
                            <span>Принимаю <a href="/privacy/" class="text_color-light">соглашение о конфиденциальности</a> и соглашаюсь с обработкой персональных данных</span>
                        </label>
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