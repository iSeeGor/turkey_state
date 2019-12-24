<?php include '../../layouts/header.php'; ?>

<!--== Services Single Consulting Page  -->
<main class="services services-consulting">

    <!--== Service Header  -->
    <header class="services-header">
        <div class="container">

            <!--== breadcrumbs  -->
            <div class="breadcrumbs">
                <nav class="breadcrumbs__nav">
                    <ol class="breadcrumbs__list">
                        <li class="breadcrumbs__item">
                            <a href="/" class="breadcrumbs__link" title="Главная">Главная</a></li>
                        <li class="breadcrumbs__item">
                            <a href="/pages/services/service-main.php" class="breadcrumbs__link" title="Услуги">Услуги</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item_current">
                        Консалтинг</li>
                    </ol>
                </nav>
            </div>

            <!--== header content  -->
            <div class="services-header__content">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="services-header__title">Консалтинг</h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-header__media" style="background-image: url('/assets/images/general/services/service-header-image-consulting.jpg');" data-aos="zoom-out-left">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!--== Centered Text Bclock  -->
    <section class="centered-text-block" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12">
                    <div class="centered-text-block__typography typography">
                        <p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает 
                            у некторых людей недоумение при попытках прочитать рыбу текст.</p>
                        <p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает 
                            у некторых людей недоумение при попытках прочитать рыбу текст.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--== Block CheckList  -->
    <section class="checklist-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 offset-lg-0 col-lg-6">
                    <div class="checklist-block__image-box" data-aos="zoom-out" data-aos-duration="900">
                        <!-- Картинка ця має кропитись завжди в квадратну мінімальне розрішення  540 х 540 -->
                        <img src="/assets/images/general/services/service-chechlist-block-image-02.jpg" class="checklist-block__image" alt="Image">
                    </div>
                </div>
                <div class="col-md-8 offset-md-2 offset-lg-0 col-lg-6">
                    <div class="checklist-block__content">
                        <div class="checklist-block__title">Компания TurkeyState предоставляет <br>консалтинговые услуги:</div>
                        <div class="checklist-block__text-content typography">
                            <ul>
                                <li data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">Профессиональные качественные консультации в выборе Вашего объекта недвижимости;</li>
                                <li data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="200">Консультации юриста;</li>
                                <li data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out" data-aos-delay="300">Услуги переводчика;</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--== Subscribe Section  -->
    <section class="subscribe-section">
        <div class="container">
            <div class="subscribe">
                <div class="subscribe__media" data-aos="fade-right">
                    <img src="/assets/images/general/subscribe-avatar-image.jpg" alt="Subscribe Image" class="subscribe__image">
                </div>
                <div class="subscribe__body" data-aos="fade-left">
                    <div class="subscribe__title">Вам нужны<br> консалтинговые услуги?</div>
                    <div class="subscribe__text">Оставьте заявку чтобы узнать подробности</div>
                    <a href="#popup__tour" class="js-open-popup button button_orange "
                        data-popup-title='Вам нужны консалтинговые услуги?'
                        data-popup-image='/assets/images/general/popup/popup-side-image-02.jpg'
                    >Отправить запрос<i class="button-icon button-icon__white"></i></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../../layouts/popup.php'; ?>
<?php include '../../layouts/footer.php'; ?>