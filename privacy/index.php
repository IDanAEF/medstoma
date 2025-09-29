<?php 
    /*
        Шаблон простой текстовой страницы
    */

    require '../header.php'; 
?>
<main class="page">
    <section class="page__block pb0">
        <div class="container">
            <h1 class="page__title">Список документов</h1>
            <div class="default-text">
                <ul>
                    <li><a href="" target="_blank">Пользовательское соглашение</a></li>
                    <li><a href="" target="_blank">Политика конфиденциальности</a></li>
                    <li><a href="" target="_blank">Согласие на обработку персональных данных</a></li>
                    <li><a href="" target="_blank">Согласие на получение рекламной информации (согласие на рекламу)</a></li>
                </ul>
            </div>
        </div>
    </section>
    <?php require '../includes/home-consult.php' ?>
</main>
<?php require '../footer.php'; ?>