<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ресторан Морская кухня");
?>

    <!-- gallery_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Самое вкусное</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="/local/templates/.default/assets/img/gallery/1.png"></a>
            <img src="/local/templates/.default/assets/img/gallery/1.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="/local/templates/.default/assets/img/gallery/2.png"></a>
            <img src="/local/templates/.default/assets/img/gallery/2.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="/local/templates/.default/assets/img/gallery/3.png"></a>
            <img src="/local/templates/.default/assets/img/gallery/3.png" alt="">
        </div>

        <div class="single_gallery small_img">
            <a class="popup-image" href="/local/templates/.default/assets/img/gallery/4.png"></a>
            <img src="/local/templates/.default/assets/img/gallery/4.png" alt="">
        </div>
        <div class="single_gallery small_img">
            <a class="popup-image" href="/local/templates/.default/assets/img/gallery/5.png"></a>
            <img src="/local/templates/.default/assets/img/gallery/5.png" alt="">
        </div>
        <div class="single_gallery big_img">
            <a class="popup-image" href="/local/templates/.default/assets/img/gallery/6.png"></a>
            <img src="/local/templates/.default/assets/img/gallery/6.png" alt="">
        </div>
    </div>

    <!-- gallery end -->

    <!-- Мероприятия -->
    <div class="event_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Мероприятия</h3>
                    </div>
                </div>
            </div>
            <div class="section-top-border">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Мероприятие 01</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by
                                making it illegal to
                                transfer money to them through any US bank or payment system. As a result of this law,
                                most of the popular
                                online casino networks</p>
                            <a href="events/events_detail.html" class="genric-btn default">Подробнее</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Мероприятие 02</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by
                                making it illegal to
                                transfer money to them through any US bank or payment system. As a result of this law,
                                most of the popular
                                online casino networks</p>
                            <a href="events/events_detail.html" class="genric-btn default">Подробнее</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-defination">
                            <h4 class="mb-20">Мероприятие 03</h4>
                            <p>Recently, the US Federal government banned online casinos from operating in America by
                                making it illegal to
                                transfer money to them through any US bank or payment system. As a result of this law,
                                most of the popular
                                online casino networks</p>
                            <a href="events/events_detail.html" class="genric-btn default">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Мероприятия -->
    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <p>Отзывы</p>
                        <h3>Наши клиенты говорят:</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <?$APPLICATION->IncludeComponent("bitrix:news", "reviews", Array(
                        "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
                        "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                        "AJAX_MODE" => "N",	// Включить режим AJAX
                        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                        "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                        "DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",	// Формат показа даты
                        "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                        "DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                        "DETAIL_FIELD_CODE" => array(	// Поля
                            0 => "NAME",
                            1 => "PREVIEW_PICTURE",
                            2 => "DETAIL_TEXT",
                            3 => "",
                        ),
                        "DETAIL_PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                        "DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
                        "DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
                        "DETAIL_PROPERTY_CODE" => array(	// Свойства
                            0 => "RATING",
                            1 => "",
                        ),
                        "DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
                        "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                        "DISPLAY_NAME" => "Y",	// Выводить название элемента
                        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                        "IBLOCK_ID" => "1",	// Инфоблок
                        "IBLOCK_TYPE" => "site_reviews",	// Тип инфоблока
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                        "LIST_ACTIVE_DATE_FORMAT" => "j F Y",	// Формат показа даты
                        "LIST_FIELD_CODE" => array(	// Поля
                            0 => "NAME",
                            1 => "PREVIEW_PICTURE",
                            2 => "DETAIL_TEXT",
                            3 => "",
                        ),
                        "LIST_PROPERTY_CODE" => array(	// Свойства
                            0 => "RATING",
                            1 => "",
                        ),
                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                        "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
                        "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
                        "NEWS_COUNT" => "20",	// Количество новостей на странице
                        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                        "PAGER_TITLE" => "Новости",	// Название категорий
                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                        "SEF_MODE" => "N",	// Включить поддержку ЧПУ
                        "SET_LAST_MODIFIED" => "Y",	// Устанавливать в заголовках ответа время модификации страницы
                        "SET_STATUS_404" => "Y",	// Устанавливать статус 404
                        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                        "SHOW_404" => "N",	// Показ специальной страницы
                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                        "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
                        "USE_CATEGORIES" => "N",	// Выводить материалы по теме
                        "USE_FILTER" => "N",	// Показывать фильтр
                        "USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
                        "USE_RATING" => "N",	// Разрешить голосование
                        "USE_REVIEW" => "N",	// Разрешить отзывы
                        "USE_RSS" => "N",	// Разрешить RSS
                        "USE_SEARCH" => "N",	// Разрешить поиск
                        "USE_SHARE" => "N",	// Отображать панель соц. закладок
                        "COMPONENT_TEMPLATE" => ".default",
                        "VARIABLE_ALIASES" => array(
                            "SECTION_ID" => "SECTION_ID",
                            "ELEMENT_ID" => "ELEMENT_ID",
                        )
                    ),
                        false
                    );?>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>