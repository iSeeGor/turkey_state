<?php include '../layouts/header.php'; ?>

<!--== Wishlist -->
<main class="wishlist">
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
                            <h1 class="page-title">Избранное</h1>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="page-header__thumb" data-aos="fade-up" data-aos-duration="900" data-aos-anchor-placement="top-bottom">
                            <img class="page-header__image" src="../assets/images/general/page-header/wishlist-thumb-image.png" alt="Page Header Image">
                        </div>
                    </div>
                </div>
                <div class="page-header__deco-block"></div>
            </div>
        </div>
    </header>

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

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
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

                    <div class="col-lg-4 col-md-6">
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
</main>

<?php include '../layouts/footer.php'; ?>