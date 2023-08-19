<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://chl-heli.ru/wp-content/themes/technic/assets/style.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container-my">
        <?php
        function carbon_get_theme_option($variable)
        {
            return $variable;
        }
        ?>


        <?php
        $wa = carbon_get_theme_option('technic_whatsapp');
        $tg = carbon_get_theme_option('technic_telegram');
        $email = carbon_get_theme_option('technic_email');
        ?>
        <section class="director-speech section">
            <div class="director-speech__body">
                <p class="h1">Лично отвечаю за каждый этап сделки и послепродажное обслуживание</p>

                <p>
                    Меня зовут Алексей Фролов, я — руководитель компании "Центр складской техники", которая специализируется на продаже погрузчиков и складской техники брендов CHL и HELI, тягачей Dongfeng. Наш центральный офис и <strong>склад находятся в Москве</strong>, но мы организовываем поставки реализуемой продукции <strong>во все регионы России</strong>.
                </p>
                <p>
                    Ассортимент нашей компании включает интеллектуальное транспортное и складское оборудование последнего поколения от Anhui Forklift Truck Group — ведущего китайского производителя в сегменте вилочных погрузчиков. Компания владеет брендами CHL и HELI, и является лидером отрасли, предлагая потребителям комплексные коммерческие решения, обеспечивающие максимальную эффективность и экономическую выгоду.
                </p>
                <p>
                    В линейке реализуемой нашей компанией представлена погрузочно-разгрузочная техника CHL, HELI <strong>грузоподъемностью до 48 тонн</strong> и тягачей Dongfeng:
                </p>
                <ul>
                    <li>вилочные погрузчики, оснащенные двигателем внутреннего сгорания на бензине, газе и дизеле, среди которых есть и оборудование для работы на пересеченной местности</li>
                    <li>электрические модели погрузчиков с литиевыми и свинцово-кислотными батареями</li>
                    <li>штабелеры</li>
                    <li>фронтальные и боковые погрузчики</li>
                    <li>ричтраки</li>
                    <li>платформенные тележки</li>
                    <li>тягачи повышенной грузоподъемности</li>
                </ul>
                <p>
                    По техническим и эксплуатационным характеристикам техника CHL и HELI не уступает продукции таких известных марок, как JAC и Hangcha. При производстве оборудования CHL используются высокотехнологичные <strong>японские и немецкие двигатели</strong> (Mitsubishi, VOLVO) .
                    А ко всем погрузчикам торговой марки CHL <strong>в комплекте идет ящик с инструментами для ремонта и ТО</strong>, который у других брендов приходится приобретать отдельно.
                </p>
            </div>
            <!-- [director] -->
            <div class="director-speech__aside">
                <div class="director-speech__img-wrapper">
                    <div class="director-speech__img">
                        <img src="./img/5_2.png" alt="">
                    </div>
                    <div class="director-speech__img-name">
                        <span class="director-speech__img-name-label">Алексей Фролов</span>
                        <span class="director-speech__img-name-text">Руководитель компании "ЦСТ"</span>
                    </div>
                </div>
                <div class="director-speech__contact">
                    <div class="director-speech__contact-label">
                        Звоните на мой личный номер, проконсультирую и помогу выбрать технику под ваши задачи
                    </div>
                    <div class="director-speech__contact-tel">
                        <span class="director-speech__contact-tel-item"><a href="tel:+7 (937) 336 00 01">+7 (937) 336 00 01</a></span>
                        <span class="director-speech__contact-tel-item"><a href="tel:+7 (952) 363 83 07">+7 (952) 363 83 07</a></span>
                    </div>
                    <div class="director-speech__contact-social">
                        <?php
                        if ($tg || $wa || $email) { ?>
                            <ul class="social__items">
                                <?php
                                if ($tg) { ?>
                                    <li class="social__item">
                                        <a href="<?php echo $tg; ?>" target="_blank">
                                            <!-- <?php // echo esc_url(home_url('/')); 
                                                    ?> -->
                                            <img src="https://chl-heli.ru/wp-content/themes/technic/img/icons/tg.svg" alt="" class="social__img">
                                        </a>
                                    </li>
                                <?php
                                } ?>
                                <?php
                                if ($wa) { ?>
                                    <li class="social__item">
                                        <a href="<?php echo $wa; ?>" target="_blank">
                                            <img src="https://chl-heli.ru/wp-content/themes/technic/img/icons/wa.svg" alt="" class="social__img">
                                        </a>
                                    </li>
                                <?php
                                } ?>
                                <?php
                                if ($email) { ?>
                                    <li class="social__item">
                                        <a href="mailto:<?php echo $email; ?>">
                                            <img src="https://chl-heli.ru/wp-content/themes/technic/img/icons/email.svg" alt="" class="social__img">
                                        </a>
                                    </li>
                                <?php
                                } ?>
                            </ul>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="cards">
            <p class="h3">Оборудование для погрузки-разгрузки в наличии и под заказ</p>

            <div class="cards__items">

                <div class="cards__item-small">
                    <div class="cards__item">
                        <div class="cards__title h3">Более 137 единиц техники в наличии на складе</div>
                        <div class="cards__desc">Модели, которых нет в наличии, мы привезем под заказ</div>
                    </div>

                    <div class="cards__item">
                        <div class="cards__title h3">Тест-драйв</div>
                        <div class="cards__desc">Перед покупкой у клиентов есть возможность проверить технику в деле, записавшись на тест-драйв</div>
                    </div>
                </div>

                <div class="cards__item-big">
                    <div class="cards__item">
                        <div class="cards__item-text">
                            <div class="cards__title h3">50 дополнительных опций</div>
                            <div class="cards__desc">По желанию заказчика мы можем опционально установить на любой погрузчик CHL или HELI кабину с отоплением, сдвоенные колеса для устойчивости во время подъема больших грузов или сайдшифт для перемещения вил влево и вправо относительно мачты. Всего нашим покупателям доступно порядка 50 дополнительных опций, а согласовать добавление необходимых функций можно при обсуждении условий покупки</div>
                        </div>
                        <div class="cards__img">
                            <img src="./img/2_25.png" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="complex section">
            <p class="h3">Полный комплекс дополнительных услуг</p>
            <p class="subheader">Наша компания является официальным представителем Anhui Forklift Truck Group в РФ, и предлагает не только оригинальную продукцию компании с доставкой покупателю, но и широкий комплекс сопутствующих услуг, включая:</p>

            <div class="grid-2-3-col">
                <div class="grid-2-3-col__first-row">
                    <div class="grid-2-3-col__item">
                        <div class="grid-2-3-col__item-title">Обслуживание и ремонт</div>
                        <div class="grid-2-3-col__item-desc">Сервисное обслуживание и ремонт погрузочно-разгрузочной техники на всей территории России</div>
                    </div>
                    <div class="grid-2-3-col__item">
                        <div class="grid-2-3-col__item-title">Обучение персонала</div>
                        <div class="grid-2-3-col__item-desc">Обучение персонала компании-покупателя работе на разных моделях погрузчиков</div>
                    </div>
                </div>

                <div class="grid-2-3-col__second-row">
                    <div class="grid-2-3-col__item">
                        <div class="grid-2-3-col__item-title">Эксплуатация</div>
                        <div class="grid-2-3-col__item-desc">Введение складской техники в эксплуатацию</div>
                    </div>
                    <div class="grid-2-3-col__item">
                        <div class="grid-2-3-col__item-title">Трейд-ин</div>
                        <div class="grid-2-3-col__item-desc">Обмен старых погрузчиков на новые на максимально выгодных условиях</div>
                    </div>
                    <div class="grid-2-3-col__item">
                        <div class="grid-2-3-col__item-title">Лизинг</div>
                        <div class="grid-2-3-col__item-desc">Аренду погрузочного оборудования с последующим выкупом</div>
                    </div>
                </div>
            </div>

            <!-- [director_2] -->
            <div class="director_2-speech">
                <div class="director_2-speech__label">
                    <div class="director_2-speech__title">Выбирайте технику, оформляйте заказ, а все остальное сделаем мы</div>
                    <div class="director_2-speech__subtitle">Мы поможем оснастить ваш логистический комплекс всем необходимым оборудованием, и обеспечим сервисное обслуживание и ремонт погрузчиков</div>
                </div>
                <div class="director_2-speech__contact">
                    <div class="director_2-speech__contact-btn">
                        <button class="button" data-modal="modal-kp">Получить консультацию <svg width="30" height="16" viewBox="0 0 30 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM29.7071 8.70711C30.0976 8.31658 30.0976 7.68342 29.7071 7.29289L23.3431 0.928932C22.9526 0.538408 22.3195 0.538408 21.9289 0.928932C21.5384 1.31946 21.5384 1.95262 21.9289 2.34315L27.5858 8L21.9289 13.6569C21.5384 14.0474 21.5384 14.6805 21.9289 15.0711C22.3195 15.4616 22.9526 15.4616 23.3431 15.0711L29.7071 8.70711ZM1 9H29V7H1V9Z" fill="white"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="director_2-speech__contact-soc-tel">
                        <div class="director_2-speech__contact-social">
                            <?php
                            if ($tg || $wa || $email) { ?>
                                <ul class="social__items">
                                    <?php
                                    if ($tg) { ?>
                                        <li class="social__item">
                                            <a href="<?php echo $tg; ?>" target="_blank">
                                                <!-- <?php // echo esc_url(home_url('/')); 
                                                        ?> -->
                                                <img src="https://chl-heli.ru/wp-content/themes/technic/img/icons/tg.svg" alt="" class="social__img">
                                            </a>
                                        </li>
                                    <?php
                                    } ?>
                                    <?php
                                    if ($wa) { ?>
                                        <li class="social__item">
                                            <a href="<?php echo $wa; ?>" target="_blank">
                                                <img src="https://chl-heli.ru/wp-content/themes/technic/img/icons/wa.svg" alt="" class="social__img">
                                            </a>
                                        </li>
                                    <?php
                                    } ?>
                                    <?php
                                    if ($email) { ?>
                                        <li class="social__item">
                                            <a href="mailto:<?php echo $email; ?>">
                                                <img src="https://chl-heli.ru/wp-content/themes/technic/img/icons/email.svg" alt="" class="social__img">
                                            </a>
                                        </li>
                                    <?php
                                    } ?>
                                </ul>
                            <?php
                            } ?>
                        </div>
                        <div class="director_2-speech__contact-tel">
                            <span class="director-speech__contact-tel-item"><a href="tel:+7 (937) 336 00 01">+7 (937) 336 00 01</a></span>
                            <span class="director-speech__contact-tel-item"><a href="tel:+7 (952) 363 83 07">+7 (952) 363 83 07</a></span>
                        </div>
                    </div>
                </div>
                <div class="director_2-speech__img-wrapper">
                    <div class="director_2-speech__img">
                        <img src="./img/Rectangle_1164.png" alt="">
                    </div>
                    <div class="director_2-speech__img-name">
                        <span class="director_2-speech__img-name-label">Алексей</span>
                        <span class="director_2-speech__img-name-text">Генеральный директор</span>
                    </div>
                </div>
            </div>
        </section>

        [faq]
    </div>
</body>

</html>