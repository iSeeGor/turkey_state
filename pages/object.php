<?php include '../layouts/header.php'; ?>

<main class="property-page">
    <!--== Page Header -->
    <header class="page-header property-header">
        <div class="container page-header__container">

            <!--== breadcrumbs  -->
            <div class="breadcrumbs">
                <nav class="breadcrumbs__nav">
                    <ol class="breadcrumbs__list">
                        <li class="breadcrumbs__item">
                            <a href="/" class="breadcrumbs__link" title="Главная">Главная</a></li>
                        <li class="breadcrumbs__item">
                            <a href="/pages/catalog.php" class="breadcrumbs__link" title="Продажа">Продажа</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item_current">
                            Название обьекта</li>
                    </ol>
                </nav>
            </div>

            <!--== page-header content  -->
            <div class="page-header__content">
                <div class="page-header__item page-header__item_title">
                    <h1 class="property-header__title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, dolore.</h1>
                </div>
                <div class="page-header__item page-header__item_currency">
                    <div class="property-header__price-box">
                        <span class="property-header__price">120 000 000</span>
                        <div class="meta-dropdown property-header__dropdown">
                            <button class="meta-dropdown__button">EUR</button>
                            <div class="meta-dropdown__body">
                                <ul class="meta-dropdown__list">
                                    <li class="meta-dropdown__list-item meta-dropdown__list-item_current">EUR</li>
                                    <li class="meta-dropdown__list-item">USD</li>
                                    <li class="meta-dropdown__list-item">RUB</li>
                                    <li class="meta-dropdown__list-item">KZT</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--== Property Detail -->
    <div class="p-detail">
        <div class="container p-detail__container">
        
            <!-- top content -->
            <div class="p-detail__top">
                <div class="p-detail__sidebar p-sidebar">
                    <div class="p-sidebar__item p-sidebar__control">
                        <button class="to-favorit__button">
                            <svg class="to-favorit__icon-heart icon-heart">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__heart"></use>
                            </svg>
                        </button>

                        <button class="print__button">
                            <svg class="print__icon icon-print">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__print"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="p-sidebar__item p-sidebar__item_sticky">
                        <div class="p-sidebar__anchors">
                            <a href="#typography" class="button button_pure button__anchor">Описание объекта</a>
                            <a href="#google-map" class="button button_pure button__anchor">Показать на карте</a>
                            <a href="#related" class="button button_pure button__anchor">Похожие объекты</a>
                            <button class="button button_pure button__anchor button__anchor_active">Онлайн просмотр</button>
                        </div>
                        <div class="p-sidebar__callback">
                            <div class="callback__block">
                                <div class="callback__title">Понравился объект?</div>
                                <div class="callback__text">Оставьте заявку и получите детальную консультацию от нашего менеджера.</div>
                                <button class="button button_orange">Оставить заявку</button>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="p-detail__content">
                    <div class="p-detail__slider">
                        <div class="image-slider">
                            <div class="slider-container">
                                <div class="slider-wrapper">
                                    <div class="slider-item">
                                        <a href="/assets/images/content/slider/slide-01.jpg"><img src="/assets/images/content/slider/slide-01.jpg" alt="Slide Image"></a> 
                                    </div>
                                    <div class="slider-item">
                                        <a href="/assets/images/content/slider/slide-02.jpg"><img src="/assets/images/content/slider/slide-02.jpg" alt="Slide Image"></a> 
                                    </div>
                                    <div class="slider-item">
                                        <a href="/assets/images/content/slider/slide-03.jpg"><img src="/assets/images/content/slider/slide-03.jpg" alt="Slide Image"></a> 
                                    </div>
                                    <div class="slider-item">
                                        <a href="/assets/images/content/slider/slide-04.jpg"><img src="/assets/images/content/slider/slide-04.jpg" alt="Slide Image"></a> 
                                    </div>
                                    <div class="slider-item">
                                        <a href="/assets/images/content/slider/slide-05.jpg"><img src="/assets/images/content/slider/slide-05.jpg" alt="Slide Image"></a> 
                                    </div>
                                    <div class="slider-item">
                                        <a href="/assets/images/content/cat-grid/cat-grid-image-01.jpg"><img src="/assets/images/content/cat-grid/cat-grid-image-01.jpg" alt="Slide Image"></a> 
                                    </div>
                                </div>
                                <div class="slider-btn__next">
                                    <svg class="icon-arrow">
                                        <use xlink:href="/assets/images/symbol/sprite.svg#icon__arrow"></use>
                                    </svg>
                                </div>
                                <div class="slider-btn__prev">
                                    <svg class="icon-arrow">
                                        <use xlink:href="/assets/images/symbol/sprite.svg#icon__arrow"></use>
                                    </svg>
                                </div>
                            </div>

                            <div class="thumb-container">
                                <div class="thumb-wrapper">
                                    <div class="thumb-item">
                                        <img src="/assets/images/content/slider/slide-01.jpg" alt="Slide Image">
                                    </div>
                                    <div class="thumb-item">
                                        <img src="/assets/images/content/slider/slide-02.jpg" alt="Slide Image">
                                    </div>
                                    <div class="thumb-item">
                                        <img src="/assets/images/content/slider/slide-03.jpg" alt="Slide Image">
                                    </div>
                                    <div class="thumb-item">
                                        <img src="/assets/images/content/slider/slide-04.jpg" alt="Slide Image">
                                    </div>
                                    <div class="thumb-item">
                                        <img src="/assets/images/content/slider/slide-05.jpg" alt="Slide Image">
                                    </div>
                                    <div class="thumb-item">
                                        <img src="/assets/images/content/cat-grid/cat-grid-image-01.jpg" alt="Slide Image">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="p-detail__options p-options">
                        <div class="p-options__list">
                            <div class="p-options__item p-options__item_type">
                                <div class="p-options__name">Тип недвижимости:</div>
                                <div class="p-options__desc">квартира</div>
                            </div>
                            <div class="p-options__item p-options__item_location">
                                <div class="p-options__name">Расположение:</div>
                                <div class="p-options__desc">Алания/Алания Центр</div>
                            </div>
                            <div class="p-options__item p-options__item_room">
                                <div class="p-options__name">Комнат:</div>
                                <div class="p-options__desc">2</div>
                            </div>
                            <div class="p-options__item p-options__item_square">
                                <div class="p-options__name">Площадь:</div>
                                <div class="p-options__desc">80m<sup>2<sup></div>
                            </div>
                            <div class="p-options__item p-options__item_floor">
                                <div class="p-options__name">Этаж:</div>
                                <div class="p-options__desc">5</div>
                            </div>
                            <div class="p-options__item p-options__item_furniture">
                                <div class="p-options__name">Мебель:</div>
                                <div class="p-options__desc">есть</div>
                            </div>
                        </div>
                        <div class="p-options__list">
                            <div class="p-options__item p-options__item_pool">
                                <div class="p-options__name">Наличие бассейна:</div>
                                <div class="p-options__desc">есть</div>
                            </div>
                            <div class="p-options__item p-options__item_sea">
                                <div class="p-options__name">До моря:</div>
                                <div class="p-options__desc">100-200m</div>
                            </div>
                            <div class="p-options__item p-options__item_air">
                                <div class="p-options__name">До аэропорта:</div>
                                <div class="p-options__desc">10km</div>
                            </div>
                            <div class="p-options__item p-options__item_city">
                                <div class="p-options__name">До центра:</div>
                                <div class="p-options__desc">10km</div>
                            </div>
                            <div class="p-options__item p-options__item_id">
                                <div class="p-options__name">ID объекта:</div>
                                <div class="p-options__desc">1155</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- main content -->
            <div class="p-detail__main">
                <div class="p-detail__content">
                    <section id="typography" class="p-detail__typography typography">
                        <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>
                        <p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. </p>
                        <p>При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке</p>
                    </section>
                    <section  class="p-detail__checklist">
                        <div class="page-section__title">Инфраструктура:</div>
                        <div class="p-detail__checklist-block typography">
                            <ul>
                                <li>Пргулочные дорожки</li>
                                <li>Крытые парковки</li>
                                <li>Детские игровые площадки</li>
                                <li>Фитнес</li>
                                <li>Сауна</li>
                                <li>Спа-центры</li>
                                <li>Декоративный бассейн</li>
                                <li>Торговые центры</li>
                                <li>Супермаркеты</li>
                                <li>Кафе</li>
                                <li>Рестораны</li>
                                <li>7/24 камеры наблюдения</li>
                                <li>Открытые плавательные бассейны с детскими секциями</li>
                            </ul>
                        </div>
                    </section>
                    <section class="p-detail__video typography">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kIrhC8UUQmQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </section>
                    <section id="google-map" class="p-detail__map">
                        <div class="page-section__title">Рассположение объекта на карте</div>
                        <div class="p-detail__map-holder map-holder">
                            
                        </div>
                    </section>
                </div>
                <div class="p-detail__sidebar">
                    <div class="sidebar__team">
                        <div class="team-card team-card_simple">
                            <div class="team-card__inner">
                                <div class="team-card__body">
                                    <header class="team-card__header">
                                        <div class="team-card__name">Фамилия Имя <br>Отчество</div>
                                        <div class="team-card__profession">Должность сотрудника компании в г. Москва</div>
                                    </header>
                                    <div class="team-card__middle">
                                        <ul class="team-card__list">
                                            <li class="team-card__item team-card__item_phone">
                                                <a href="tel:+90555222111" class="team-card__link link">+39 000 000 000</a>
                                            </li>
                                            <li class="team-card__item">
                                                <div class="messengers team-card__messengers">
                                                    <span class="messenger messenger__viber">
                                                        <a href="tel:" title="vider call">
                                                            <svg class="icon__viber messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__viber"></use>
                                                            </svg>
                                                        </a>
                                                    </span>

                                                    <span class="messenger messenger__whatsapp">
                                                        <a href="tel:" title="WhatsApp Call">
                                                            <svg class="icon__whatsapp messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__whatsApp"></use>
                                                            </svg>
                                                        </a>
                                                    </span>

                                                    <span class="messenger messenger__telegram">
                                                        <a href="tel:" title="vider call">
                                                            <svg class="icon__telegram messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__telegram"></use>
                                                            </svg>
                                                        </a>    
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-card__contacts">
                                        <ul class="team-card__list">
                                            <li class="team-card__item team-card__item_skype">
                                                <a href="skype:echo123?call" class="team-card__link link">skype</a>
                                            </li>
                                            <li class="team-card__item team-card__item_mail">
                                                <a href="mailto:semple@email.com" class="team-card__link link">office@turkestate.ru</a>
                                            </li>
                                            <li class="team-card__item team-card__item_lang">
                                                русский, английский, турецкий
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <figure class="team-card__figure">
                                    <img class="team-card__image" src="../assets/images/content/about-us/card-manager-image-03.jpg" alt="Manager Card Image">
                                </figure>
                            </div>
                        </div>

                        <div class="team-card team-card_simple">
                            <div class="team-card__inner">
                                <div class="team-card__body">
                                    <header class="team-card__header">
                                        <div class="team-card__name">Фамилия Имя <br>Отчество</div>
                                        <div class="team-card__profession">Должность сотрудника компании в г. Москва</div>
                                    </header>
                                    <div class="team-card__middle">
                                        <ul class="team-card__list">
                                            <li class="team-card__item team-card__item_phone">
                                                <a href="tel:+90555222111" class="team-card__link link">+39 000 000 000</a>
                                            </li>
                                            <li class="team-card__item">
                                                <div class="messengers team-card__messengers">
                                                    <span class="messenger messenger__viber">
                                                        <a href="tel:" title="vider call">
                                                            <svg class="icon__viber messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__viber"></use>
                                                            </svg>
                                                        </a>
                                                    </span>

                                                    <span class="messenger messenger__whatsapp">
                                                        <a href="tel:" title="WhatsApp Call">
                                                            <svg class="icon__whatsapp messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__whatsApp"></use>
                                                            </svg>
                                                        </a>
                                                    </span>

                                                    <span class="messenger messenger__telegram">
                                                        <a href="tel:" title="vider call">
                                                            <svg class="icon__telegram messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__telegram"></use>
                                                            </svg>
                                                        </a>    
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-card__contacts">
                                        <ul class="team-card__list">
                                            <li class="team-card__item team-card__item_skype">
                                                <a href="skype:echo123?call" class="team-card__link link">skype</a>
                                            </li>
                                            <li class="team-card__item team-card__item_mail">
                                                <a href="mailto:semple@email.com" class="team-card__link link">office@turkestate.ru</a>
                                            </li>
                                            <li class="team-card__item team-card__item_lang">
                                                русский, английский, турецкий
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <figure class="team-card__figure">
                                    <img class="team-card__image" src="../assets/images/content/about-us/card-manager-image-02.jpg" alt="Manager Card Image">
                                </figure>
                            </div>
                        </div>

                        <div class="team-card team-card_simple">
                            <div class="team-card__inner">
                                <div class="team-card__body">
                                    <header class="team-card__header">
                                        <div class="team-card__name">Фамилия Имя <br>Отчество</div>
                                        <div class="team-card__profession">Должность сотрудника компании в г. Москва</div>
                                    </header>
                                    <div class="team-card__middle">
                                        <ul class="team-card__list">
                                            <li class="team-card__item team-card__item_phone">
                                                <a href="tel:+90555222111" class="team-card__link link">+39 000 000 000</a>
                                            </li>
                                            <li class="team-card__item">
                                                <div class="messengers team-card__messengers">
                                                    <span class="messenger messenger__viber">
                                                        <a href="tel:" title="vider call">
                                                            <svg class="icon__viber messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__viber"></use>
                                                            </svg>
                                                        </a>
                                                    </span>

                                                    <span class="messenger messenger__whatsapp">
                                                        <a href="tel:" title="WhatsApp Call">
                                                            <svg class="icon__whatsapp messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__whatsApp"></use>
                                                            </svg>
                                                        </a>
                                                    </span>

                                                    <span class="messenger messenger__telegram">
                                                        <a href="tel:" title="vider call">
                                                            <svg class="icon__telegram messenger__icon">
                                                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__telegram"></use>
                                                            </svg>
                                                        </a>    
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-card__contacts">
                                        <ul class="team-card__list">
                                            <li class="team-card__item team-card__item_skype">
                                                <a href="skype:echo123?call" class="team-card__link link">skype</a>
                                            </li>
                                            <li class="team-card__item team-card__item_mail">
                                                <a href="mailto:semple@email.com" class="team-card__link link">office@turkestate.ru</a>
                                            </li>
                                            <li class="team-card__item team-card__item_lang">
                                                русский, английский, турецкий
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <figure class="team-card__figure">
                                    <img class="team-card__image" src="../assets/images/content/about-us/card-manager-image-01.jpg" alt="Manager Card Image">
                                </figure>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== Page Main Form  -->
    <section class="cb-form property-page__cb-form" id="online-form">
        <div class="container">
            <div class="cb-form__inner">
                <div class="cb-form__main">
                    <div class="page-section__title">Заполните форму и мы предоставим<br> Вам всю необходимую информацию</div>
                    <form class="cb-form__body form" autocomplete="off">
                        <div class="cb-form__info-block">
                            <div class="cb-form__row">
                                <input class="input" type="text" name="name" placeholder="Имя*">
                            </div>
                            <div class="cb-form__row">
                                <input class="input phone-mask" type="text" name="phone" placeholder="Номер телефона*">
                            </div>
                            <div class="cb-form__row">
                                <input class="input" type="email" name="email" placeholder="Email*">
                            </div>
                            <div class="cb-form__row">
                                <textarea class="textarea" name="message" placeholder="Напишите Ваш комментарий"></textarea>
                            </div>
                            <button class="button button_orange" type="submit">Отправить<i class="button-icon button-icon__white"></i></button>
                        </div>
                        <div class="cb-form__options">
                            <label class="label">
                                <input type="checkbox" class="checkbox" checked />
                                <span class="label-txt">Полная информация о данном объекте и прайс-лист</span>
                            </label>
                            <label class="label">
                                <input type="checkbox" class="checkbox" />
                                <span class="label-txt">Онлайн просмотр объекта</span>
                            </label>
                            <label class="label">
                                <input type="checkbox" class="checkbox" />
                                <span class="label-txt">Информацию об ознакомительном туре</span>
                            </label>
                            <label class="label">
                                <input type="checkbox" class="checkbox" />
                                <span class="label-txt">Этапы процедуры приобретения недвижимостие</span>
                            </label>
                            <label class="label">
                                <input type="checkbox" class="checkbox" />
                                <span class="label-txt">Новейшие предложения и скидки</span>
                            </label>
                        </div>
                    </form>
                </div>
                <div class="cb-form__banner">
                    <img src='/assets/images/content/post-featured-image.jpg' alt="form banner image">
                </div>
            </div>
        </div>
    </section>

    <!--== Related Block  -->
    <section class="related-block" id="related">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-section__title">Похожие объекты</div>
                </div>
            </div>

            <div class="property-slider">
                <div class="property-slider__container property-slider__bestseller">
                    <header class="property-slider__navigation">
                        <div class="property-slider__button-prev">
                            <svg class="property-slider__icon-arrow icon-arrow">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__arrow"></use>
                            </svg> 
                        </div>
                        <div class="property-slider__button-next">
                            <svg class="property-slider__icon-arrow icon-arrow">
                                <use xlink:href="/assets/images/symbol/sprite.svg#icon__arrow"></use>
                            </svg>
                        </div>

                        <div class="property-slider__scrollbar"></div>

                    </header>              
                    <div class="property-slider__body">

                        <div class="property-card property-card__special-price property-slider__slide">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="/pages/object.php" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_01.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">120 000 000</div>
                                        <div class="meta-dropdown property-card__meta-dropdown">
                                            <button class="meta-dropdown__button">EUR</button>
                                            <div class="meta-dropdown__body">
                                                <ul class="meta-dropdown__list">
                                                    <li class="meta-dropdown__list-item meta-dropdown__list-item_current">EUR</li>
                                                    <li class="meta-dropdown__list-item">USD</li>
                                                    <li class="meta-dropdown__list-item">RUB</li>
                                                    <li class="meta-dropdown__list-item">KZT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="property-card__to-favorit to-favorit__button ">
                                        <svg class="to-favorit__icon-heart icon-heart">
                                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__heart"></use>
                                        </svg>
                                    </button>
                                </header>

                                <div class="property-card__content">
                                    <div class="property-card__description">
                                        Квартира на берегу Средиземного моря в комплексе с собственным пляжем с собственным пляжем
                                    </div>

                                    <div class="property-card__meta">
                                        <ul class="property-card__meta-list">
                                            <li class="property-card__meta-item property-card__meta-item_location">Алания / Алания Центр Алания / Центр Алания</li>
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1, 2+1, 3+1, 3+1 , 2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="property-card property-slider__slide">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_02.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">875 000</div>
                                        <div class="meta-dropdown property-card__meta-dropdown">
                                            <button class="meta-dropdown__button">EUR</button>
                                            <div class="meta-dropdown__body">
                                                <ul class="meta-dropdown__list">
                                                    <li class="meta-dropdown__list-item meta-dropdown__list-item_current">EUR</li>
                                                    <li class="meta-dropdown__list-item">USD</li>
                                                    <li class="meta-dropdown__list-item">RUB</li>
                                                    <li class="meta-dropdown__list-item">KZT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="property-card__to-favorit to-favorit__button ">
                                        <svg class="to-favorit__icon-heart icon-heart">
                                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__heart"></use>
                                        </svg>
                                    </button>
                                </header>

                                <div class="property-card__content">
                                    <div class="property-card__description">
                                        Квартира на берегу Средиземного моря в комплексе 
                                    </div>

                                    <div class="property-card__meta">
                                        <ul class="property-card__meta-list">
                                            <li class="property-card__meta-item property-card__meta-item_location">Алания / Алания Центр Алания / Центр Алания</li>
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="property-card property-slider__slide">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_03.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">80 000 000</div>
                                        <div class="meta-dropdown property-card__meta-dropdown">
                                            <button class="meta-dropdown__button">EUR</button>
                                            <div class="meta-dropdown__body">
                                                <ul class="meta-dropdown__list">
                                                    <li class="meta-dropdown__list-item meta-dropdown__list-item_current">EUR</li>
                                                    <li class="meta-dropdown__list-item">USD</li>
                                                    <li class="meta-dropdown__list-item">RUB</li>
                                                    <li class="meta-dropdown__list-item">KZT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="property-card__to-favorit to-favorit__button ">
                                        <svg class="to-favorit__icon-heart icon-heart">
                                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__heart"></use>
                                        </svg>
                                    </button>
                                </header>

                                <div class="property-card__content">
                                    <div class="property-card__description">
                                        Квартира на берегу Средиземного моря в комплексе с собственным пляжем с собственным пляжем
                                    </div>

                                    <div class="property-card__meta">
                                        <ul class="property-card__meta-list">
                                            <li class="property-card__meta-item property-card__meta-item_location">Алания / Алания Центр Алания / Центр Алания</li>
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="property-card property-slider__slide">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_03.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">80 000 000</div>
                                        <div class="meta-dropdown property-card__meta-dropdown">
                                            <button class="meta-dropdown__button">EUR</button>
                                            <div class="meta-dropdown__body">
                                                <ul class="meta-dropdown__list">
                                                    <li class="meta-dropdown__list-item meta-dropdown__list-item_current">EUR</li>
                                                    <li class="meta-dropdown__list-item">USD</li>
                                                    <li class="meta-dropdown__list-item">RUB</li>
                                                    <li class="meta-dropdown__list-item">KZT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="property-card__to-favorit to-favorit__button ">
                                        <svg class="to-favorit__icon-heart icon-heart">
                                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__heart"></use>
                                        </svg>
                                    </button>
                                </header>

                                <div class="property-card__content">
                                    <div class="property-card__description">
                                        Квартира на берегу Средиземного моря в комплексе с собственным пляжем с собственным пляжем
                                    </div>

                                    <div class="property-card__meta">
                                        <ul class="property-card__meta-list">
                                            <li class="property-card__meta-item property-card__meta-item_location">Алания / Алания Центр Алания / Центр Алания</li>
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="property-card property-slider__slide">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_03.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">80 000 000</div>
                                        <div class="meta-dropdown property-card__meta-dropdown">
                                            <button class="meta-dropdown__button">EUR</button>
                                            <div class="meta-dropdown__body">
                                                <ul class="meta-dropdown__list">
                                                    <li class="meta-dropdown__list-item meta-dropdown__list-item_current">EUR</li>
                                                    <li class="meta-dropdown__list-item">USD</li>
                                                    <li class="meta-dropdown__list-item">RUB</li>
                                                    <li class="meta-dropdown__list-item">KZT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="property-card__to-favorit to-favorit__button ">
                                        <svg class="to-favorit__icon-heart icon-heart">
                                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__heart"></use>
                                        </svg>
                                    </button>
                                </header>

                                <div class="property-card__content">
                                    <div class="property-card__description">
                                        Квартира на берегу Средиземного моря в комплексе с собственным пляжем с собственным пляжем
                                    </div>

                                    <div class="property-card__meta">
                                        <ul class="property-card__meta-list">
                                            <li class="property-card__meta-item property-card__meta-item_location">Алания / Алания Центр Алания / Центр Алания</li>
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="property-card property-slider__slide">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_03.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">80 000 000</div>
                                        <div class="meta-dropdown property-card__meta-dropdown">
                                            <button class="meta-dropdown__button">EUR</button>
                                            <div class="meta-dropdown__body">
                                                <ul class="meta-dropdown__list">
                                                    <li class="meta-dropdown__list-item meta-dropdown__list-item_current">EUR</li>
                                                    <li class="meta-dropdown__list-item">USD</li>
                                                    <li class="meta-dropdown__list-item">RUB</li>
                                                    <li class="meta-dropdown__list-item">KZT</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="property-card__to-favorit to-favorit__button ">
                                        <svg class="to-favorit__icon-heart icon-heart">
                                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__heart"></use>
                                        </svg>
                                    </button>
                                </header>

                                <div class="property-card__content">
                                    <div class="property-card__description">
                                        Квартира на берегу Средиземного моря в комплексе с собственным пляжем с собственным пляжем
                                    </div>

                                    <div class="property-card__meta">
                                        <ul class="property-card__meta-list">
                                            <li class="property-card__meta-item property-card__meta-item_location">Алания / Алания Центр Алания / Центр Алания</li>
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../layouts/popup.php'; ?>
<?php include '../layouts/footer.php'; ?>