<?php 
    /* Шаблон страницы "Контакты" */

    require '../header.php'; 
?>
<main class="contacts">
    <section class="page__breadcrumbs page__block pt0">
        <div class="container">
            <div class="page__breadcrumbs-wrap text_fz16">
                <a href="/" class="text_color-dark">Главная</a>
                <span class="text_fz14"> / </span>
                <span>Контакты</span>
            </div>
        </div>
    </section>
    <section class="contacts__block page__block pt0">
        <div class="container">
            <h1 class="page__title">Контактные данные</h1>
            <div class="default-text">
                <p>
                    Основной телефон <a href="tel:88126761875"><strong>8 (812) 676-18-75</strong></a> <br>
                    Сотовый: <br>
                    <a href="tel:89650690142">8 (965) 069-01-42</a> <br>
                    <a href="tel:89650461969">8 (965) 046-19-69</a> <br>
                    e-mail: <a href="mailto:sale@medstoma.ru">sale@medstoma.ru</a>
                </p>
                <p>ВНИМАНИЕ ИЗМЕНИЛСЯ АДРЕС ОФИСА</p>
                <p>адрес: г. Санкт - Петербург, ул. Решетникова д.15, 3 этаж 344 кабинет, вход с ул. Свеаборгская (здание 58 проектного института), метро Электросила, на проходной можно уточнить как к нам пройти, если вам тяжело подниматься на 3 этаж, звоните, менеджер спуститься к вам</p>
                <p>Мы работаем с понедельника по пятницу с <strong>09-30 до 18-00</strong></p>
                <p>Вы можете сформировать заказ на нашем сайте, или позвонив нам по телефону, или написав письмо. Ваш заказ будет принят и обработан в рабочие часы. Вы можете получить консультацию по применению продукции и ответы на другие вопросы в рабочие часы.</p>
                <p>Вся продукция нашего интернет-магазина сертифицирована.</p>
                <p>Если интересующей вас продукции нет в наличии в данный момент, вы можете заказать, нажав на пиктограмму "Заказать" в карточке товара, и мы доставим для вас эту продукцию,  наш менеджер свяжется с вами и уточнит сроки поставки.</p>
                <p>Интернет-магазин Medstoma.ru создан для помощи людям с деликатными медицинскими потребностями. Для улучшения качества жизни пациентов со стомой и урологических пациентов, а также лежачих больных, наш магазин предлагает современные средства реабилитации от ведущих экспертов  -компаний  Coloplast (Колопласт), ConvaTec (Конватек), Hollister (Холлистер). В нашем ассортименте калоприемники, мочеприемники, уропрезервативы, уроприемники, средства ухода за кожей вокруг стомы, катетеры лубрицированные для самокатетеризации (интермиттирующей катетеризации), продукция для эндоурологии. Вы можете также получить полную, своевременную и так необходимую консультацию по вопросам применения продукции.</p>
                <p>Юридические лица также могут приобрести весь ассортимент продукции нашего интернет-магазина и получить все необходимые сопроводительные документы. Просьба заявки отправлять на нашу электронную почту или звонить по телефону.</p>
            </div>
        </div>
    </section>
    <section class="states__gallery">
        <div class="container">
            <div class="states__gallery-wrap">
                <a href="https://medstoma.ru/img/contacts/1.JPG" data-fancybox="state-gallery">
                    <img src="https://medstoma.ru/img/contacts/1.JPG" alt="state-gallery" class="img_bg">
                </a>
                <a href="https://medstoma.ru/img/contacts/2.jpg" data-fancybox="state-gallery">
                    <img src="https://medstoma.ru/img/contacts/2.jpg" alt="state-gallery" class="img_bg">
                </a>
                <a href="https://medstoma.ru/img/contacts/3.jpg" data-fancybox="state-gallery">
                    <img src="https://medstoma.ru/img/contacts/3.jpg" alt="state-gallery" class="img_bg">
                </a>
            </div>
        </div>
    </section>
    <?php require '../includes/states-cities.php' ?>
    <?php require '../includes/home-brands.php' ?>
    <?php require '../includes/home-contacts.php' ?>
</main>
<?php require '../footer.php'; ?>