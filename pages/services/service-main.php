<?php include '../../layouts/header.php'; ?>

<!--== Services Main Page  -->
<main class="services services-main">
    <!--== Page Header -->
    <header class="page-header">
        <div class="container page-header__container">

            <!--== breadcrumbs  -->
            <div class="breadcrumbs">
            </div>

            <!--== page-header content  -->
            <div class="page-header__content">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="page-header__title">
                            <h1 class="page-title">Наши услуги</h1>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="page-header__thumb" data-aos="fade-up" data-aos-duration="900" data-aos-anchor-placement="top-bottom">
                            <img class="page-header__image" src="/assets/images/general/page-header/services-page-thumb-image.png" alt="Page Header Image">
                        </div>
                    </div>
                </div>
                <div class="page-header__deco-block"></div>
            </div>
        </div>
    </header>

    <!--== Service Main Conetnt -->
    <div class="services-main__content">
        <div class="container services-main__container">
            <div class="services-main__inner">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="services-main__text typography" data-aos="fade-left" data-aos-offset="300" data-aos-duration="700">
                            <p>Приобретая недвижимость, Вы делаете очень важный и ответственный для себя шаг. </p>
                            <p>И если объект находится в другой стране, особенно важно, чтобы рядом с Вами были 
                                профессионалы, прекрасно знающие державу и её законы, особенности покупки и 
                                продажи собственности. </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="services-main__subtitle typography" data-aos="fade-left" data-aos-offset="300" data-aos-duration="700">
                            <div class="h3">Компания TurkeyState предлагает Вам весь спектр услуг</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== Service Main Categories -->
    <div class="services-main__categories services-cat">
        <div class="container">
            <div class="services-cat__items">
                <div class="services-cat__item" data-aos="fade-up" data-aos-offset="200">
                    <a href="/pages/services/service-tour.php" class="services-cat__item-link" title="Service Category Title" >
                        <div class="services-cat__item-media">
                            <img class="services-cat__item-image" src="/assets/images/general/services/services-cat_tour.jpg" alt="Service Category Title" ></div>
                        <div class="services-cat__item-icon">
                            <svg class="icon__roadmap services-cat__icon">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__roadmap"></use>
                            </svg>
                        </div>
                        <div class="services-cat__item-title">Ознакомительный <br>тур</div>
                    </a>
                </div>

                <div class="services-cat__item"  data-aos="fade-up" data-aos-delay="200" data-aos-offset="200">
                    <a href="/pages/services/service-consulting.php" class="services-cat__item-link" title="Service Category Title" >
                        <div class="services-cat__item-media">
                            <img class="services-cat__item-image" src="/assets/images/general/services/services-cat_consulting.jpg" alt="Service Category Title" ></div>
                        <div class="services-cat__item-icon">
                            <svg class="icon__comment services-cat__icon">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__comment"></use>
                            </svg>
                        </div>
                        <div class="services-cat__item-title">Консалтинг</div>
                    </a>
                </div>

                <div class="services-cat__item"  data-aos="fade-up" data-aos-delay="400" data-aos-offset="200">
                    <a href="/pages/services/service-hypotec.php" class="services-cat__item-link" title="Service Category Title" >
                        <div class="services-cat__item-media">
                            <img class="services-cat__item-image" src="/assets/images/general/services/services-cat_hypotec.jpg" alt="Service Category Title" ></div>
                        <div class="services-cat__item-icon">
                            <svg class="icon__chart-pie services-cat__icon">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__chart-pie"></use>
                            </svg>
                        </div>
                        <div class="services-cat__item-title">Ипотека и рассрочка</div>
                    </a>
                </div>

                <div class="services-cat__item"  data-aos="fade-up" data-aos-delay="200" data-aos-offset="200">
                    <a href="/pages/services/service-afterservice.php" class="services-cat__item-link" title="Service Category Title" >
                        <div class="services-cat__item-media">
                            <img class="services-cat__item-image" src="/assets/images/general/services/services-cat_afterservice.jpg" alt="Service Category Title" ></div>
                        <div class="services-cat__item-icon">
                            <svg class="icon__handshake-alt services-cat__icon">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__handshake-alt"></use>
                            </svg>
                        </div>
                        <div class="services-cat__item-title">послепродажный <br> сервис</div>
                    </a>
                </div>

                <div class="services-cat__item"  data-aos="fade-up" data-aos-delay="400" data-aos-offset="200">
                    <a href="/pages/services/service-investment.php" class="services-cat__item-link" title="Service Category Title" >
                        <div class="services-cat__item-media">
                            <img class="services-cat__item-image" src="/assets/images/general/services/services-cat_investment.jpg" alt="Service Category Title" ></div>
                        <div class="services-cat__item-icon">
                            <svg class="icon__hand-holding-seedling services-cat__icon">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__hand-holding-seedling"></use>
                            </svg>
                        </div>
                        <div class="services-cat__item-title">инвестиционная деятельность</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../../layouts/popup.php'; ?>
<?php include '../../layouts/footer.php'; ?>