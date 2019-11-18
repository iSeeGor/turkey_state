<main class="home">

<section class="test-slider"></section>

<!--== Advanced Search  -->
<section class="advanced-search home__advanced-search">
    <div class="container">
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
            </div>

            <div class="search-form__tabs-content">
                <div class="search-form__tab-content search-form__tab-content_current search-form__tab-content_sales">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <select name="object" class="select search-form__select">
                                <option selected="" value="Все объекты">Все объекты</option>
                                <option value="Квартиры">Квартиры</option>
                                <option value="Виллы/Таунхаусы">Виллы/Таунхаусы</option>
                                <option value="Пентхаусы">Пентхаусы</option>
                                <option value="Квартиры/Пентхаусы">Квартиры/Пентхаусы</option>
                                <option value="Коммерческая недвижимость ">Коммерческая недвижимость </option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <select name="сity" class="select search-form__select">
                                <option selected="" value="Город">Город</option>
                                <option value="Алания">Алания</option>
                                <option value="Газипаша">Газипаша</option>
                                <option value="Анталия">Анталия</option>
                                <option value="Стамбул">Стамбул</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-md-6">
                            <fieldset class="fieldset search-form__fieldset-price">
                                <input class="input search-form__input" type="text" name="price_from" placeholder="Цена от">
                                <input class="input search-form__input" type="text" name="price_to" placeholder="до">
                                <span class="search-form__currency">EUR</span>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <button class="button button_green search-form__button">Поиск<i class="button-icon button-icon__white"></i></button>
                        </div>
                    </div>
                </div>

                <div class="search-form__tab-content search-form__tab-content_rent">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <select name="object" class="select search-form__select">
                                <option selected="" value="Все объекты">Все объекты</option>
                                <option value="Квартиры">Квартиры</option>
                                <option value="Виллы/Таунхаусы">Виллы/Таунхаусы</option>
                                <option value="Пентхаусы">Пентхаусы</option>
                                <option value="Квартиры/Пентхаусы">Квартиры/Пентхаусы</option>
                                <option value="Коммерческая недвижимость ">Коммерческая недвижимость </option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <select name="сity" class="select search-form__select">
                                <option selected="" value="Город">Город</option>
                                <option value="Алания">Алания</option>
                                <option value="Газипаша">Газипаша</option>
                                <option value="Анталия">Анталия</option>
                                <option value="Стамбул">Стамбул</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-sm-6">
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
                        <div class="col-lg-4 col-md-6">
                            <fieldset class="fieldset search-form__fieldset-price">
                                <input class="input search-form__input" type="text" name="price_from" placeholder="Цена от">
                                <input class="input search-form__input" type="text" name="price_to" placeholder="до">
                                <span class="search-form__currency">EUR</span>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <button class="button button_green search-form__button">Поиск<i class="button-icon button-icon__white"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<!--== About Company Services  -->
<section class="about-section home__about-section">
    <div class="container about-section__container" data-scroll=''>
        <div class="row">
            <div class="col-lg-6">
                <div class="about-section__years-block years-block">
                    <div class="years-block__num">
                        <img src="../assets/images/general/home/about-years-num.png" alt="Years" >
                    </div>
                    <div class="years-block__body">
                        <div class="years-block__year-text">Лет</div>
                        <div class="years-block__desc">На рынке недвижимости в Турции</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-block service-block_square about-section__service-block">
                    <div class="service-block__inner">
                         <header class="service-block__header">
                            <div class="service-block__icon">
                                <svg class="service-icon service-icon__workon">
                                    <use xlink:href="/assets/images/symbol/sprite.svg#service-icon__workon"></use>
                                </svg>
                            </div>
                         </header>
                         <div class="service-block__body">
                             <h5 class="service-block__desc">Работаем в управлении продаваемых объектов</h5>
                         </div>   
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-block service-block_square about-section__service-block">
                    <div class="service-block__inner">
                         <header class="service-block__header">
                            <div class="service-block__icon">
                                <svg class="service-icon service-icon__partnership">
                                    <use xlink:href="/assets/images/symbol/sprite.svg#service-icon__partnership"></use>
                                </svg>
                            </div>
                         </header>
                         <div class="service-block__body">
                             <h5 class="service-block__desc">Помощь на всех этапах покупки</h5>
                         </div>   
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-section__company-info" data-scroll=''>
                    <h2 class="about-section__company-name">Turkey State</h2>
                    <div class="about-section__company-slogan">Путь к успеху.<br> Финансовый нетворкинг</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-block service-block_horizontal">
                    <div class="service-block__inner">
                         <header class="service-block__header">
                            <div class="service-block__icon">
                                <svg class="service-icon service-icon__building-size">
                                    <use xlink:href="/assets/images/symbol/sprite.svg#service-icon__building-size"></use>
                                </svg>
                            </div>
                         </header>
                         <div class="service-block__body">
                             <h5 class="service-block__desc">Более 1000 проверенных  объектов</h5>
                         </div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="button button_pure about-section__button">Получить помощь в подборе недвижимости <i class="button-icon button-icon__green"></i></button>
            </div>
        </div>
    </div>
</section>

<!--== Bestsellers Section  -->
<section class="bestseller-section home__bestseller-section">
    <div class="container">
        
        <h2 class="section-title">Горячие предложения</h2>

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

                    <div class="property-card property-slider__slide">
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

                                <button class="button button_pure property-card__button">подробнее</button>
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

                                <button class="button button_pure property-card__button">подробнее</button>
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

                                <button class="button button_pure property-card__button">подробнее</button>
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

                                <button class="button button_pure property-card__button">подробнее</button>
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

                                <button class="button button_pure property-card__button">подробнее</button>
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

                                <button class="button button_pure property-card__button">подробнее</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button class="button button_green property-slider__button">смотреть все <i class="button-icon button-icon__white"></i></button>
        </div>

    </div>
</section>

<!--== Catalogs Front Section  -->
<section class="catalog-grid home__catalog-grid">
    <div class="container">
        <header class="catalog-grid__header">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="catalog-grid__slogan">"Turkey State"</h5>
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Компания "Turkey State" предлагает Вам:</h2>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="catalog-grid__box">
                                    <a href="#" class="catalog-grid__box-inner" title="Виллы и дома">
                                        <figure class="catalog-grid__figure">
                                            <img src="../assets/images/content/cat-grid/cat-grid-image-01.jpg" class="catalog-grid__image" alt="Catalog Grid Image">
                                        </figure>
                                        <div class="catalog-grid__content">
                                            <h4 class="catalog-grid__title">Виллы и дома</h4>
                                            <div class="catalog-grid__descr">от 60 000 €</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="catalog-grid__box">
                                    <a href="#" class="catalog-grid__box-inner" title="От застройщика">
                                        <figure class="catalog-grid__figure">
                                            <img src="../assets/images/content/cat-grid/cat-grid-image-02.jpg" class="catalog-grid__image" alt="Catalog Grid Image">
                                        </figure>
                                        <div class="catalog-grid__content">
                                            <h4 class="catalog-grid__title">От застройщика</h4>
                                            <div class="catalog-grid__descr">от 605 000 €</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>              
                    </div>
                    <div class="col-lg-6">
                        <div class="catalog-grid__box catalog-grid__box_full catalog-grid__box_dark-bg">
                            <a href="#" class="catalog-grid__box-inner" title="Недвижимость у моря">
                                <figure class="catalog-grid__figure">
                                    <img src="../assets/images/content/cat-grid/cat-grid-image-03.jpg" class="catalog-grid__image" alt="Catalog Grid Image">
                                </figure>
                                <div class="catalog-grid__content">
                                    <h4 class="catalog-grid__title">Недвижимость у моря</h4>
                                    <div class="catalog-grid__descr">от 120 000 €</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="catalog-grid__box catalog-grid__box_dark-bg">
                            <a href="#" class="catalog-grid__box-inner" title="Недорогая недвижимость">
                                <figure class="catalog-grid__figure">
                                    <img src="../assets/images/content/cat-grid/cat-grid-image-04.jpg" class="catalog-grid__image" alt="Catalog Grid Image">
                                </figure>
                                <div class="catalog-grid__content">
                                    <h4 class="catalog-grid__title">Недорогая недвижимость</h4>
                                    <div class="catalog-grid__descr">от 26 000 €</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="catalog-grid__box">
                            <a href="#" class="catalog-grid__box-inner" title="Недорогая недвижимость">
                                <figure class="catalog-grid__figure">
                                    <img src="../assets/images/content/cat-grid/cat-grid-image-05.jpg" class="catalog-grid__image" alt="Catalog Grid Image">
                                </figure>
                                <div class="catalog-grid__content">
                                    <h4 class="catalog-grid__title">вторичная недвижимость</h4>
                                    <div class="catalog-grid__descr">от 75 000 €</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="catalog-grid__box catalog-grid__box_dark-bg">
                            <a href="#" class="catalog-grid__box-inner" title="Недорогая недвижимость">
                                <figure class="catalog-grid__figure">
                                    <img src="../assets/images/content/cat-grid/cat-grid-image-06.jpg" class="catalog-grid__image" alt="Catalog Grid Image">
                                </figure>
                                <div class="catalog-grid__content">
                                    <h4 class="catalog-grid__title">элитная недвижимость</h4>
                                    <div class="catalog-grid__descr">от 55 000 €</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--== Privilages Section  -->
<section class="privilages-section home__privilages-section">
    <div class="container privilages-section__container">
        <div class="privilages-section__container-inner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="privilages-section__title-area">
                        <h2 class="section-title section-title_white" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1500">Приумножте Ваш капитал с Turkey State</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="service-list  privilages-section__service-list">
                        <li class="service-list__item service-list__item_finance" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1500"><strong>Финансовые консультации</strong> от ведущих бизнес практиков на тему: "Сохранение и преумножение, финансовая защита капитала"</li>
                        <li class="service-list__item service-list__item_instruments" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1500">Инструменты для <strong>приобретения недвижимости каждые 3 года</strong>, без дополнительного финансирования</li>
                        <li class="service-list__item service-list__item_marketing" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1500"><strong>Современные расширенные маркетинговые технологии</strong> для получения максимально возможной прибыли от операций по недвижимости</li>
                        <li class="service-list__item service-list__item_rent" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1500"><strong>Проверенные и эффективные методы заработка на аренде.</strong> Ваша недвижимость работает за Вас</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <button class="button button_pure privilages-section__button">Узнать больше про инвестирование в Турции <i class="button-icon button-icon__green"></i></button>
            </div>
        </div>
    </div>
</section>

<!--== New Propertys Section  -->
<section class="newPropertys-section home__newPropertys-section">
    <div class="container">
        
        <h2 class="section-title">Новые объекты</h2>

        <div class="property-slider">
            
            <div class="property-slider__container property-slider__newPropertys">  
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

                    <div class="property-card property-card_blue property-slider__slide">
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

                                <button class="button button_blue property-card__button">подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="property-card property-card_blue property-slider__slide">
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

                                <button class="button button_blue property-card__button">подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="property-card property-card_blue property-slider__slide">
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

                                <button class="button button_blue property-card__button">подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="property-card property-card_blue property-slider__slide">
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

                                <button class="button button_blue property-card__button">подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="property-card property-card_blue property-slider__slide">
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

                                <button class="button button_blue property-card__button">подробнее</button>
                            </div>
                        </div>
                    </div>

                    <div class="property-card property-card_blue property-slider__slide">
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

                                <button class="button button_blue property-card__button">подробнее</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button class="button button_green property-slider__button">смотреть все <i class="button-icon button-icon__white"></i></button>
        </div>

    </div>
</section>

<!--== Tour Info Section  -->
<section class="tour-section home__tour-section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tour-section__block tour-section__block_left" data-scroll=''>
                    <h2 class="section-title tour-section__section-title">Ознакомительный тур от компании "Turkey State"</h2>
                    <div class="tour-section__text-content typography">
                        <p>Если Вам не терпится поехать в Турцию и выбрать для себя второй дом у моря, нужно просто позвонить 
                            нам и сообщить удобную для Вас дату вылета.</p>
                        <p><strong>Сотрудники нашей компании возьмут на себя все организационные вопросы,</strong> касающиеся ознакомительного тура. 
                            Обычно, для окончательного выбора достаточно 3-4 дней. Этого времени хватит для знакомства с городом и 
                            понравившимися Вам объектами турецкой недвижимости. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="tour-section__quote">
                    <blockquote class="tour-section__quote-text">
                        Превратим просмотр понравишихся Вам объектов недвижимости в незабываемый мини-отпуск!
                    </blockquote>
                </div>
                <div class="tour-section__block tour-section__block_right" data-scroll=''>
                    <div class="tour-section__block_right-image" data-aos="zoom-out" data-aos-duration="1500" data-aos-delay="400">
                        
                    </div>

                    <div class="tour-section__text-content typography">
                        <h4>Проживание</h4>
                        <p>Для проживания Вы можете выбрать для себя отель самостоятельно, либо воспользоваться апартаментами, 
                            которые мы предоставляем нашим потенциальным клиентам на период ознакомительной поездки совершенно 
                            бесплатно.</p>
                        <p>В этом случае у Вас появится <strong>прекрасная возможность ощутить совершенно другой опыт пребывания в курортном регионе,</strong> 
                            вне гостиничных режимов и обстановки, от которых уже начали уставать многие российские туристы. Побывав в 
                            неформальных условиях, Вы увидите все преимущества такого отдыха и, несомненно, укрепитесь в желании иметь свой 
                            собственный кусочек рая в теплых, южных краях.</p>
                    </div>

                    <button class="button button_green">Заказать ознакомительный тур<i class="button-icon button-icon__white"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!--== Latest News  -->
<section class="related-posts home__latestNews-section">
    <div class="container">
        <div class="row">
            <div class="col-12"><h2 class="section-title related-posts__title">Последние новости в Турции</h2></div>
        </div>
        <div class="news-posts-row" data-aos="fade-up" data-aos-delay="400">
            <div class="news-posts-row__inner">
                <article class="news-post" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1200">
                    <div class="news-post__content">
                        <a href="#" title="News Post Title" class="news-post__expert link">
                            Длинное название новостей, состоящее из нескольких строк
                        </a>
                        <div class="news-post__meta">
                            <div class="news-post__meta-item news-post__meta-category"><a href="#" title="Category Name" class="link">Название категории</a></div>
                            <div class="news-post__meta-item news-post__meta-date">дд.мм.гггг</div>
                        </div>
                    </div>
                    <figure class="news-post__figure">
                        <a href="#" title="Post News Title"><img src="../assets/images/content/news/news-post-annonce-image-01.jpg" alt="News Post Annonce Image" class="news-post__image"></a>
                    </figure>
                </article>
                <article class="news-post" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1200">
                    <div class="news-post__content">
                        <a href="#" title="News Post Title" class="news-post__expert link">
                            Длинное название новостей, состоящее из нескольких строк
                        </a>
                        <div class="news-post__meta">
                            <div class="news-post__meta-item news-post__meta-category"><a href="#" title="Category Name" class="link">Название категории</a></div>
                            <div class="news-post__meta-item news-post__meta-date">дд.мм.гггг</div>
                        </div>
                    </div>
                    <figure class="news-post__figure">
                    <a href="#" title="Post News Title"><img src="../assets/images/content/news/news-post-annonce-image-02.jpg" alt="News Post Annonce Image" class="news-post__image"></a>
                    </figure>
                </article>
                <article class="news-post" data-aos="fade-up" data-aos-delay="1300" data-aos-duration="1200">
                    <div class="news-post__content">
                        <a href="#" title="News Post Title" class="news-post__expert link">
                            Длинное название новостей, состоящее из нескольких строк, состоящее из нескольких строк
                        </a>
                        <div class="news-post__meta">
                            <div class="news-post__meta-item news-post__meta-category"><a href="#" title="Category Name" class="link">Название категории</a></div>
                            <div class="news-post__meta-item news-post__meta-date">дд.мм.гггг</div>
                        </div>
                    </div>
                    <figure class="news-post__figure">
                        <a href="#" title="Post News Title"><img src="../assets/images/content/news/news-post-annonce-image-03.jpg" alt="News Post Annonce Image" class="news-post__image"></a>
                    </figure>
                </article>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <button class="button button_green">Смотреть все<i class="button-icon button-icon__white"></i></button>
            </div>
        </div>
    </div>
</section>

<!--== Testimonial Slider  -->
<section class="testimonialSlider home__testimonialSlider">
    <div class="container">
        <div class="testimonialSlider__container swiper-container">
            <div class="testimonialSlider__wrapper swiper-wrapper">
                <!-- slide 01 -->
                <div class="testimonialSlider__slide swiper-slide">
                    <header class="testimonialSlider__header">
                                                <figure class="testimonialSlider__figure">
                            <div class="testimonialSlider__figure-inner">
                                <img class="testimonialSlider__user-image" src="../assets/images/content/testimonial/testimonial-user-image.jpg" alt="Testimonial User Image">
                            </div>
                        </figure>
                        <div class="testimonialSlider-meta">
                            <div class="testimonialSlider-meta__user-name">Ирина Степановна</div>
                            <div class="testimonialSlider-meta__address">Алания</div>
                        </div>
                        <div class="testimonialSlider__date">14.04.2017</div>
                    </header>
                    <div class="testimonialSlider__body">
                        <div class="testimonialSlider__message">
                            <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев 
                                более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык 
                                публичных выступлений в домашних условиях. При создании генератора мы использовали 
                                небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от 
                                двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и 
                                живым для визуально-слухового восприятия.</p>
                        </div>
                    </div>
                </div>
                <!-- slide 02 -->
                <div class="testimonialSlider__slide swiper-slide">
                    <header class="testimonialSlider__header">
                        <figure class="testimonialSlider__figure">
                            <div class="testimonialSlider__figure-inner">
                                <img class="testimonialSlider__user-image" src="../assets/images/content/testimonial/testimonial-user-image-02.jpg" alt="Testimonial User Image">
                            </div>
                        </figure>
                        <div class="testimonialSlider-meta">
                            <div class="testimonialSlider-meta__user-name">Виктор Иванов</div>
                            <div class="testimonialSlider-meta__address">Стамбул</div>
                        </div>
                        <div class="testimonialSlider__date">16.04.2019</div>
                    </header>
                    <div class="testimonialSlider__body">
                        <div class="testimonialSlider__message">
                            <p>Уже по прибытию в Тбилиси мы "галопом по Европам" начали составлять план, 
                                а что же именно нам нужно посетить. Вариантов было масса. Но посоветовавшись с нашим гостом, 
                                у которого мы снимали жилье, решили, что нужно будет непременно заглянуть и в первую столицу Грузии - 
                                городок Мцхета. На третий день в Тбилиси мы взяли в аренду машину и направились в два небольших 
                                приключения. Первым из них и стала Мцхета.</p>
                        </div>
                    </div>
                </div>
                <!-- slide 03 -->
                <div class="testimonialSlider__slide swiper-slide">
                    <header class="testimonialSlider__header">
                        <figure class="testimonialSlider__figure">
                            <div class="testimonialSlider__figure-inner">
                                <img class="testimonialSlider__user-image" src="../assets/images/content/testimonial/testimonial-user-image-03.jpg" alt="Testimonial User Image">
                            </div>
                        </figure>
                        <div class="testimonialSlider-meta">
                            <div class="testimonialSlider-meta__user-name">Светлана Юрьевна</div>
                            <div class="testimonialSlider-meta__address">Милан</div>
                        </div>
                        <div class="testimonialSlider__date">10.12.2018</div>
                    </header>
                    <div class="testimonialSlider__body">
                        <div class="testimonialSlider__message">
                            <p>Понравился отель сразу тем что напоминает корабль да ещё на воде(6000м2 бассейны) 
                                очень хорошее обслуживание Питание очень вкусно и на каждом шагу можешь кушать весь день. 
                                Красивая ухоженная территория Хотелось бы ещё одну точку поближе к морю для выдачи полотенец. 
                                Спасибо всему обслуживающему персоналу за хорошую работу.Удачи вашему отелю так держать.Семья Лукьянченко</p>
                        </div>
                    </div>
                </div>

                <!-- slide 04 -->
                <div class="testimonialSlider__slide swiper-slide">
                    <header class="testimonialSlider__header">
                        <figure class="testimonialSlider__figure">
                            <div class="testimonialSlider__figure-inner">
                                <img class="testimonialSlider__user-image" src="../assets/images/content/testimonial/testimonial-user-image-04.jpg" alt="Testimonial User Image">
                            </div>
                        </figure>
                        <div class="testimonialSlider-meta">
                            <div class="testimonialSlider-meta__user-name">Светлана Юрьевна</div>
                            <div class="testimonialSlider-meta__address">Милан</div>
                        </div>
                        <div class="testimonialSlider__date">10.12.2018</div>
                    </header>
                    <div class="testimonialSlider__body">
                        <div class="testimonialSlider__video">
                        <iframe width="200" height="200" src="https://www.youtube.com/embed/FT0odx2LoyQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonialSlider__thumbs">
                <ul class="testimonialSlider__thumbs-list">
                    <li class="testimonialSlider__thumbs-items"><h2>1</h2></li>
                    <li class="testimonialSlider__thumbs-items"><h2>2</h2></li>
                    <li class="testimonialSlider__thumbs-items"><h2>3</h2></li>
                    <li class="testimonialSlider__thumbs-items"><h2>4</h2></li>
                </ul>
            </div>
        </div>
    </div>
</section>
</main>