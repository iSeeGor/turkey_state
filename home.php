<main class="home">

<!--== Advanced Search  -->
<section class="home__advanced-search advanced-search">
    <div class="container">
        <form class="search-form advanced-search__form" action="#">
            <div class="search-form__tabs">
                <div class="search-form__tab search-form__tab_current">            
                    <svg class="search-form__tab-icon">
                        <use xlink:href="/assets/images/symbol/sprite.svg#icon__tab-icon_sale"></use>
                    </svg>   
                    <div class="search-form__tab-name">Продажа</div>
                </div>
                <div class="search-form__tab">                    
                    <svg class="search-form__tab-icon">
                        <use xlink:href="/assets/images/symbol/sprite.svg#icon__tab-icon_rent"></use>
                    </svg>
                    <div class="search-form__tab-name">Аренда</div>
                </div>
            </div>

            <div class="search-form__tab-content search-form__tab-content_current search-form__tab-content_sales">
                <div class="row">
                    <div class="col-lg-4">
                        <select name="object" class="select search-form__select">
                            <option selected="" value="Все объекты">Все объекты</option>
                            <option value="Квартиры">Квартиры</option>
                            <option value="Виллы/Таунхаусы">Виллы/Таунхаусы</option>
                            <option value="Пентхаусы">Пентхаусы</option>
                            <option value="Квартиры/Пентхаусы">Квартиры/Пентхаусы</option>
                            <option value="Коммерческая недвижимость ">Коммерческая недвижимость </option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <select name="сity" class="select search-form__select">
                            <option selected="" value="Город">Город</option>
                            <option value="Алания">Алания</option>
                            <option value="Газипаша">Газипаша</option>
                            <option value="Анталия">Анталия</option>
                            <option value="Стамбул">Стамбул</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
                        <fieldset class="search-form__prise-field">
                            <input class="input search-form__input" type="number" name="price_from" placeholder="Цена от">
                            <input class="input search-form__input" type="number" name="price_to" placeholder="до">
                            <span class="search-form__currency">EUR</span>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <button class="button">Поиск<i class="button-icon button-icon__white"></i></button>
                    </div>
                </div>
            </div>

            <div class="search-form__tab-content search-form__tab-content_rent">
                <div class="row">
                    <div class="col-lg-4">
                        <select name="object" class="select search-form__select">
                            <option selected="" value="Все объекты">Все объекты</option>
                            <option value="Квартиры">Квартиры</option>
                            <option value="Виллы/Таунхаусы">Виллы/Таунхаусы</option>
                            <option value="Пентхаусы">Пентхаусы</option>
                            <option value="Квартиры/Пентхаусы">Квартиры/Пентхаусы</option>
                            <option value="Коммерческая недвижимость ">Коммерческая недвижимость </option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <select name="сity" class="select search-form__select">
                            <option selected="" value="Город">Город</option>
                            <option value="Алания">Алания</option>
                            <option value="Газипаша">Газипаша</option>
                            <option value="Анталия">Анталия</option>
                            <option value="Стамбул">Стамбул</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
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
                    <div class="col-lg-4">
                        <fieldset class="search-form__prise-field">
                            <input class="input search-form__input" type="number" name="price_from" placeholder="Цена от">
                            <input class="input search-form__input" type="number" name="price_to" placeholder="до">
                            <span class="search-form__currency">EUR</span>
                        </fieldset>
                    </div>
                    <div class="col-lg-4">
                        <button class="button">Поиск<i class="button-icon button-icon__white"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="svg">
    <div class="container">
        <svg class="iconf">
            <use xlink:href="/assets/images/sprite.svg#5_youtube"></use>
            <!-- C:\Users\User\Desktop\turkestate\app\assets\images\sprite.svg -->
        </svg>
    </div>
</section>
</main>