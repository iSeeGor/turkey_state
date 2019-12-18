<?php include '../layouts/header.php'; ?>

<!--== Catalog Page Content -->
<main class="catalog">
    <!--== Page Header -->
    <header class="page-header catalog__page-header">
        <div class="container page-header__container">

            <!--== breadcrumbs  -->
            <div class="breadcrumbs">
            </div>

            <!--== page-header content  -->
            <div class="page-header__content">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="page-header__title">
                            <h1 class="page-title">Предложения по продаже недвижимости в Турции</h1>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="page-header__thumb" data-aos="fade-up" data-aos-duration="900" data-aos-anchor-placement="top-bottom">
                            <img class="page-header__image" src="../assets/images/general/page-header/catalog-thumb-image.png" alt="Page Header Image">
                        </div>
                    </div>
                </div>
                <div class="page-header__deco-block"></div>
            </div>
        </div>
    </header>

    <!--== Advanced Search  -->
    <section class="advanced-search catalog__advanced-search">
        <div class="container advanced-search__container">
            <form class="search-form advanced-search__form" action="#">
                <div class="search-form__tabs">
                    <div class="search-form__tab search-form__tab_sale search-form__tab_current" data-tab="sales">            
                        <svg class="search-form__tab-icon">
                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__tab-icon_sale"></use>
                        </svg>   
                        <div class="search-form__tab-name">Продажа</div>
                    </div>
                    <div class="search-form__tab search-form__tab_rent" data-tab="rent">                    
                        <svg class="search-form__tab-icon">
                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__tab-icon_rent"></use>
                        </svg>
                        <div class="search-form__tab-name">Аренда</div>
                    </div>
                    <div class="search-form__tab search-form__tab_commercial" data-tab="commercial">                    
                        <svg class="search-form__tab-icon search-form__tab-icon_commercial">
                            <use xlink:href="/assets/images/symbol/sprite.svg#icon__tab-icon_commercial"></use>
                        </svg>
                        <div class="search-form__tab-name">Коммерческая <br>недвижимость</div>
                    </div>
                </div>

                <div class="search-form__tabs-content">
                    <div class="search-form__tab-content">
                        <div class="search-form__tab-item">
                            <select name="сity" class="select search-form__select">
                                <option selected="" value="Город">Город</option>
                                <option value="Алания">Алания</option>
                                <option value="Газипаша">Газипаша</option>
                                <option value="Анталия">Анталия</option>
                                <option value="Стамбул">Стамбул</option>
                            </select>
                        </div>
                        <div class="search-form__tab-item">
                            <select name="area" class="select search-form__select">
                                <option value="Район ">Район </option>
                                <option value="Авсаллар ">Авсаллар </option>
                                <option value="Махмутлар ">Махмутлар </option>
                                <option value="Кестель ">Кестель </option>
                                <option value="Газипаша">Газипаша</option>
                                <option value="Оба">Оба</option>
                                <option value="Тосмур ">Тосмур </option>
                                <option value="Конаклы">Конаклы</option>
                                <option value="Джикджилли">Джикджилли</option>
                                <option value="Каргыджак">Каргыджак</option>
                                <option value="Демирташ">Демирташ</option>
                                <option value="Окурджалар ">Окурджалар </option>
                                <option value="Алания центр">Алания центр</option>
                                <option value="Бекташ">Бекташ</option>
                                <option value="Тепе">Тепе</option>
                                <option value="Белек">Белек</option>
                                <option value="Коньялты">Коньялты</option>
                                <option value="Лара">Лара</option>
                                <option value="Кемер ">Кемер </option>
                                <option value="Османгази">Османгази</option>
                                <option value="Хисароню">Хисароню</option>
                                <option value="Оваджик">Оваджик</option>
                                <option value="Сейдикемер">Сейдикемер</option>
                                <option value="Фетхие центр">Фетхие центр</option>
                                <option value="Каргипинари">Каргипинари</option>
                                <option value="Чешмели ">Чешмели </option>
                                <option value="Искеле ">Искеле </option>
                                <option value="Фамагуста">Фамагуста</option>
                                <option value="Искеле/Боаз">Искеле/Боаз</option>
                                <option value="Эсентепе">Эсентепе</option>
                                <option value="Кирения">Кирения</option>
                                <option value="Эсуньюр ">Эсуньюр </option>
                                <option value="Сарыер">Сарыер</option>
                                <option value="Атакент">Атакент</option>
                                <option value="Бахчешехир ">Бахчешехир </option>
                                <option value="Бейликдюзю">Бейликдюзю</option>
                                <option value="Газиосманпаша ">Газиосманпаша </option>
                                <option value="Башакшехир">Башакшехир</option>
                                <option value="Кадыкёй">Кадыкёй</option>
                                <option value="Маслак">Маслак</option>
                                <option value="Крючюкчекмедже">Крючюкчекмедже</option>
                                <option value="Шишли">Шишли</option>
                            </select>
                        </div>
                        <div class="search-form__tab-item">
                            <select name="layout" class="select search-form__select">
                                <option selected="" value="Все планировки ">Все планировки </option>
                                <option value="0+1">0+1</option>
                                <option value="1+1">1+1</option>
                                <option value="2+1">2+1</option>
                                <option value="3+1">3+1</option>
                                <option value="4+1">4+1</option>
                                <option value="5+1">5+1</option>
                                <option value="6+1">6+1</option>
                                <option value="7+1">7+1</option>
                            </select>
                        </div>
                        <div class="search-form__tab-item search-form__tab-item_price">
                            <fieldset class="fieldset search-form__fieldset-price">
                                <input class="input search-form__input search-form__input_price" type="text" name="price_from" placeholder="Цена от">
                                    <span class="dash"></span>
                                <input class="input search-form__input search-form__input_price" type="text" name="price_to" placeholder="до">
                                <span class="search-form__currency">EUR</span>
                            </fieldset>
                        </div>
                        <div class="search-form__tab-item search-form__tab-item_id">
                            <input class="input search-form__input search-form__input_id" type="text" name="object_id" placeholder="ID объекта">
                        </div>
                        <div class="search-form__tab-item">
                            <button class="button button_orange search-form__button">Поиск<i class="button-icon button-icon__white"></i></button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <!--== Filter Bar  -->
    <section class="filter-bar">
        <div class="container">
            <div class="filter-bar__inner">
                <div class="filter-bar__view-show">
                    Найдено: <span class="filter-bar__view-count">9</span>
                </div>
                <div class="filter-bar__view-sort">
                    <span>Сортировать:</span>
                    <select class="select filter-bar__select">
                        <option selected="" value="От новых к старым">От новых к старым</option>
                        <option value="От старых к новым">От старых к новым</option>
                        <option value="По возрастанию цены">По возрастанию цены</option>
                        <option value="По убыванию цены">По убыванию цены</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!--== Product View/Grid  -->
    <section class="property-view">

        <div class="property-view__grid">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card property-card__special-price">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
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
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_02.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">25 000</div>
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

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_03.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">440 000</div>
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

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card property-card__special-price">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
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
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_02.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">25 000</div>
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

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_03.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">440 000</div>
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

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card property-card__special-price">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
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
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_02.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">25 000</div>
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

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_03.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">440 000</div>
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

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card property-card__special-price">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
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
                                            <li class="property-card__meta-item property-card__meta-item_rooms">2+1, 3+1, 3+1</li>
                                            <li class="property-card__meta-item property-card__meta-item_square">160-368 м2</li>
                                        </ul>
                                    </div>

                                    <a href="/pages/object.php" class="button button_pure property-card__button" title="Подробнее">подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_02.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">25 000</div>
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

                    <div class="col-xl-4 col-md-6">
                        <div class="property-card">
                            <div class="property-card__inner">
                                <header class="property-card__header">
                                    <figure class="property-card__figure">
                                        <a href="#" class="property-card__figure-link" title="Property Image Link">
                                            <img class="property-card__image" src="../assets/images/content/property/property-card-image_03.jpg" alt="Property Card Image">
                                        </a>
                                    </figure>

                                    <div class="property-card__header-meta">
                                        <div class="property-card__price">440 000</div>
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

        <div class="property-view__pagination">
            <div class="container">

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
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <strong class="current">3</strong>
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
    </section>

    <!--== Catalog Text Block  -->
    <section class="catalog-text">
        <div class="container catalog-text__container">
            <div class="catalog-text__deco"></div>
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12">
                    <div class="catalog-text__typography typography">
                        <h3>Heading 3</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. 
                            Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur 
                            ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus 
                            pronin sapien nunc accuan eget.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin 
                            gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. 
                            Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, 
                            nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. 
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin 
                            gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. 
                            Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, 
                            nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>
                        
                        <h4>Heading 4</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida 
                            dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque 
                            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, 
                            felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.</p>

                        <p><img src="../assets/images/content/content-image.jpg" alt="content image"></p>

                        <ul>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                        </ul>

                        <ol>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../layouts/footer.php'; ?>