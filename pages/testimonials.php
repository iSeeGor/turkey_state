<?php include '../layouts/header.php'; ?>

<main class="testimonials">
    <!--== Page Header -->
    <header class="page-header ">
        <div class="container page-header__container">

            <!--== breadcrumbs  -->
            <div class="breadcrumbs">
            </div>

            <!--== page-header content  -->
            <div class="page-header__content">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="page-header__title">
                            <h1 class="page-title">Отзывы</h1>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="page-header__thumb" data-aos="fade-up" data-aos-duration="900" data-aos-anchor-placement="top-bottom">
                            <img class="page-header__image" src="/assets/images/general/page-header/testimonila-thumb-image.png" alt="Page Header Image">
                        </div>
                    </div>
                </div>
                <div class="page-header__deco-block"></div>
            </div>
        </div>
    </header>

    <!--== Testimonial item's Grid  -->
    <div class="testimonials__list-view">
        <div class="container">
            <!-- testimonial list  -->
            <div class="testimonials__list">
                <!-- item 01 -->
                <div class="testimonials__item" data-aos="fade-down" data-aos-offset='200'>
                    <div class="testimonials__media">
                        <div class="testimonials__user-ava">
                            <img  src="/assets/images/content/testimonial/testimonial-user-image-04.jpg" alt="User Avatar" title="User Avatar" class="testimonials__image">
                        </div>
                        <div class="testimonials__user-info">
                            <div class="testimonials__name">Имя Фамилия</div>
                            <div class="testimonials__city">Город</div>
                            <div class="testimonials__date">12.12.2009</div>
                        </div>
                    </div>
                    <div class="testimonials__message">
                        <div class="testimonials__text js-readMore-text">
                            Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев 
                            более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык 
                            публичных выступлений в домашних условиях. При создании генератора мы использовали 
                            небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух 
                            до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым 
                            для визуально-слухового восприятия.
                        </div>
                    </div>
                </div>

                <!-- item 02 -->
                <div class="testimonials__item" data-aos="fade-down" data-aos-offset='200'>
                    <div class="testimonials__media">
                        <div class="testimonials__user-ava">
                            <img src="/assets/images/content/testimonial/testimonial-user-image-02.jpg" alt="User Avatar" title="User Avatar" class="testimonials__image">
                        </div>
                        <div class="testimonials__user-info">
                            <div class="testimonials__name">Имя Фамилия</div>
                            <div class="testimonials__city">Город</div>
                            <div class="testimonials__date">12.12.19</div>
                        </div>
                    </div>
                    <div class="testimonials__message">
                        <div class="testimonials__text js-readMore-text">
                            Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более 
                            менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных 
                            выступлений в домашних условиях. При создании генератора мы использовали небезизвестный 
                            универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти 
                            предложений в абзаце, что позволяет сделать текст более привлекательным и живым для 
                            визуально-слухового восприятия. Текст генерируется абзацами 
                            Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более 
                            менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных 
                            выступлений в домашних условиях. При создании генератора мы использовали небезизвестный 
                            универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти 
                            предложений в абзаце, что позволяет сделать текст более привлекательным и живым для 
                            визуально-слухового восприятия. Текст генерируется абзацами 
                        </div>
                    </div>
                </div>

                <!-- item 03 -->
                <div class="testimonials__item" data-aos="fade-down" data-aos-offset='200'>
                    <div class="testimonials__media">
                        <div class="testimonials__user-ava">
                            <img src="/assets/images/content/testimonial/testimonial-user-image-02.jpg" alt="User Avatar" title="User Avatar" class="testimonials__image">
                        </div>
                        <div class="testimonials__user-info">
                            <div class="testimonials__name">Имя Фамилия</div>
                            <div class="testimonials__city">Город</div>
                            <div class="testimonials__date">12.12.19</div>
                        </div>
                    </div>
                    <div class="testimonials__message">
                        <div class="testimonials__video">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/EFB33r7u4tY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- paggination -->
            <div class="testimonials__pagination">
                <div class="pagination">
                    <ul class="pagination__list" role="navigation" aria-labelledby="paginglabel">
                        <li class="pagination__prev">
                            <a href="#" rel="prev">
                                <svg class="pagination__icon pagination__icon_prev">
                                    <use xlink:href="/assets/images/symbol/sprite.svg#icon__double-arrow"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="pagination__item">
                            <strong class="current">1</strong>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                        </li>
                        <li class="pagination__next">
                            <a href="#" rel="next">
                                <svg class="pagination__icon pagination__icon_next">
                                    <use xlink:href="/assets/images/symbol/sprite.svg#icon__double-arrow"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include '../layouts/popup.php'; ?>
<?php include '../layouts/footer.php'; ?>