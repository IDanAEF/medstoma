<section class="home__contacts page__block pb100">
    <div class="container">
        <h2 class="page__title">
            Контакты
        </h2>
        <div class="home__contacts-info">
            <div class="home__contacts-info-item">
                <div class="home__contacts-info-row text_fz24">
                    <h3>Телефоны</h3>
                    <a href="tel:+78126761875">+7 (812) 676-18-75</a><br>
                    <a href="tel:+79650690142">+7 (965) 069-01-42</a><br>
                    <a href="tel:+79650461969">+7 (965) 046-19-69</a>
                </div>
                <div class="home__contacts-info-row text_fz24">
                    <a href="tel:88007751314">8 (800) 775-13-14</a>
                    <span class="ps text_fz16">Звонок по России бесплатный</span>
                </div>
                <div class="home__contacts-info-row">
                    <?=getBtn([
                        'text' => 'Обратный звонок',
                        'class' => 'red',
                        'image' => IMAGES.'icons/phone.svg'
                    ])?>
                </div>
            </div>
            <div class="home__contacts-info-item">
                <div class="home__contacts-info-row text_fz24">
                    <h3>Электронная почта</h3>
                    <a href="mailto:sale@medstoma.ru">sale@medstoma.ru</a>
                </div>
                <div class="home__contacts-info-row text_fz24">
                    <h3>Адрес</h3>
                    <span class="text_color">
                        г. Санкт - Петербург, <br>
                        ул. Решетникова 15, офис 344  
                    </span>
                    <span class="ps text_fz16">часы работы: пн-пт с 09-30 до 18-00</span>
                </div>
            </div>
        </div>
        <div class="home__contacts-map" id="contacts-map"></div>
    </div>
</section>
<script src="https://api-maps.yandex.ru/2.1/?apikey=5727f775-e56b-498e-bb2a-a48a1702a7f7&lang=ru_RU"></script>
<script>
    ymaps.ready(function () {
        var contactsMap = new ymaps.Map('contacts-map', {
            center: [59.878798, 30.329783],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        });

        contactsMapPlacemark = new ymaps.Placemark([59.878798, 30.329783], {
            hintContent: `г. Владимир, Коммунальный спуск, д.1`,
        });

        contactsMap.geoObjects.add(contactsMapPlacemark);
    });
</script>