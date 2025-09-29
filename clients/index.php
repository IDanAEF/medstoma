<?php 
    require '../header.php'; 
?>
<main class="clients">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <span>Информация для клиентов</span>
            </div>
        </div>
    </section>
    <section class="clients__block page__block pt0">
        <div class="container">
            <h1 class="page__title">Информация для клиентов</h1>
            <div class="default-text">
                <p><a href="/clients/guaranty/">Гарантии</a></p>
                <p><a href="/clients/indemnity/">Компенсации</a></p>
                <p><a href="/clients/opt/">Оптовым покупателям</a></p>
                <p><a href="/articles/">Статьи</a></p>
            </div>
        </div>
    </section>
    <section class="clients__video page__block">
        <div class="container">
            <h2 class="page__title">Обучающее видео</h2>
            <div class="clients__video-list">
                <video src="https://medstoma.ru/img/Паста в полосках (convert-video-online.com).mp4" controls></video>
                <video src="https://medstoma.ru/img/Двухкомпонентная система.mp4" controls></video>
                <video src="https://medstoma.ru/img/Как измерить вырезаемое отверстие.mp4" controls></video>
            </div>
        </div>
    </section>
    <?php require '../includes/home-brands.php' ?>
    <?php require '../includes/home-contacts.php' ?>
</main>
<?php require '../footer.php'; ?>