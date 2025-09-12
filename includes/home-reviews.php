<section class="home__reviews page__block">
    <div class="container">
        <div class="home__reviews-title page__title">
            <h2>Нам доверяют</h2>
            <span>
                Мы работаем с коммерческими организациями такими как: сеть магазинов Кладовая Здоровья, медтехника Европа, аптечная сеть Фиалка, Лекоптторг, а также с фондами Социального страхования Волгограда, Бреста, Сыктывкара
                <img src="<?=IMAGES?>home-reviews-image.png" alt="Организации">
            </span>
        </div>
        <div class="home__reviews-slider text_fz16 slider" data-tv-vis="4" data-lap-vis="3" data-tablet-vis="2" data-stablet-vis="1">
            <div class="slider-list">
                <div class="slider-track">
                    <?php
                        for($i = 0; $i < 2; $i++) {
                            ?>
                            <article class="home__reviews-item slide">
                                <div class="review-top">
                                    <div class="review-person">
                                        <span class="date text_fz12 text_color-dark">6 февраля 2024</span>
                                        <span class="name">Дмитрий Иванов</span>
                                    </div>
                                    <div class="review-rating">
                                        <img src="<?=IMAGES?>rating-temp.svg" alt="Рейтинг">
                                        <img src="<?=IMAGES?>rating.svg" alt="Рейтинг" class="active" style="width: calc(5% / 0.05);">
                                    </div>
                                </div>
                                <div class="review-text text_fw400">
                                    Всегда радуюсь, когда обращаюсь к вам.
                                </div>
                            </article>
                            <article class="home__reviews-item slide">
                                <div class="review-top">
                                    <div class="review-person">
                                        <span class="date text_fz12 text_color-dark">6 февраля 2024</span>
                                        <span class="name">Дмитрий Иванов</span>
                                    </div>
                                    <div class="review-rating">
                                        <img src="<?=IMAGES?>rating-temp.svg" alt="Рейтинг">
                                        <img src="<?=IMAGES?>rating.svg" alt="Рейтинг" class="active" style="width: calc(4% / 0.05);">
                                    </div>
                                </div>
                                <div class="review-text text_fw400">
                                    Качество продукции на высшем уровне.
                                </div>
                            </article>
                            <article class="home__reviews-item slide">
                                <div class="review-top">
                                    <div class="review-person">
                                        <span class="date text_fz12 text_color-dark">7 февраля 2024</span>
                                        <span class="name">Елена Петрова</span>
                                    </div>
                                    <div class="review-rating">
                                        <img src="<?=IMAGES?>rating-temp.svg" alt="Рейтинг">
                                        <img src="<?=IMAGES?>rating.svg" alt="Рейтинг" class="active" style="width: calc(3% / 0.05);">
                                    </div>
                                </div>
                                <div class="review-text text_fw400">
                                    Удобный интерфейс и быстрая доставка.
                                </div>
                            </article>
                            <article class="home__reviews-item slide">
                                <div class="review-top">
                                    <div class="review-person">
                                        <span class="date text_fz12 text_color-dark">5 февраля 2024</span>
                                        <span class="name">Анна Смирнова</span>
                                    </div>
                                    <div class="review-rating">
                                        <img src="<?=IMAGES?>rating-temp.svg" alt="Рейтинг">
                                        <img src="<?=IMAGES?>rating.svg" alt="Рейтинг" class="active" style="width: calc(2.5% / 0.05);">
                                    </div>
                                </div>
                                <div class="review-text text_fw400">
                                    Отличный сервис, рекомендую!
                                </div>
                            </article>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <span class="slider-arrows-item left">
                <img src="<?=IMAGES?>icons/slider-arrow.svg" alt="Влево">
            </span>
            <span class="slider-arrows-item right">
                <img src="<?=IMAGES?>icons/slider-arrow.svg" alt="Вправо">
            </span>
        </div>
    </div>
</section>