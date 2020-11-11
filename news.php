<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
    <link rel="stylesheet" rel="preload" onload="this.rel='stylesheet'" as="style"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,700;1,800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Votkinsk</title>
</head>
<body>

<?php
include "include/modals/header.php"

?>

<div class="headL d-flex align-items-center position-relative">
    <div class="container d-flex justify-content-between align-items-center position-relative">
        <div class="cityParent map col-xl-3 col-lg-3 col-md-4">
            <h2 class="title titleCity">Воткинск</h2>
            <a class="cityLink" href="">Выбрать другой город</a>
        </div>
        <nav class="nav col-xl-6 col-lg-6 col-md-8">
            <ul class="menu">
                <li><a class="link" href="/">Новости</a></li>
                <li><a class="link" href="/">Объявления</a></li>
                <li><a class="link" href="/">Афиша</a></li>
                <li><a class="link" href="/">Люди</a></li>
                <li><a class="link" href="/">ВТВ</a></li>
                <li><a class="link" href="/">Вакансии</a></li>
                <li><a class="link" href="/">Гороскоп</a></li>
                <li><a class="link" href="/">Еще</a></li>
            </ul>
            <div class="menu-btn">
                <div class="menu-btn__burger"></div>
            </div>
        </nav>
        <div class="curseParent col-xl-3 col-lg-3">
            <p class="curseValue doll arrowDown">64.37</p>
            <p class="curseValue eu arrowDown">68.37</p>
            <p class="curseValue neft arrowTop">47.37</p>
        </div>

    </div>

    <div class="hidden">
        <div class="container">
            <div class="hiddenHeader d-flex col-xl-6 align-items-center">
                <a class="hiddenLink" href="/">Размещение рекламы КРУГЛОСУТОЧНО</a>
                <div class="hiddenTel">
                    <a class="hiddenLink" href="/">+7 (912) 441-01-25</a>
                    <a class="hiddenLink" href="/">+7 (34145) 5-99-75</a>
                </div>
                <a class="hiddenLink" href="/">Меню сайта</a>

            </div>

            <div class="blocks d-flex">
                <div class="left col-xl-3">

                    <div class="Opros">
                        <h3 class="title">Опрос</h3>
                        <p class="hiddenText">Считаете ли вы, что Девятова
                            Мария Елифериевна достойна
                            быть занесенной на Доску
                            Почета:</p>
                        <div class="hiddenIn">
                            <input type="checkbox" id="hidden1"><label for="hidden1">Да</label>
                            <input type="checkbox" id="hidden2"><label for="hidden2">Нет</label>
                            <input type="checkbox" id="hidden3"><label for="hidden3">Мне все равно</label>
                            <input type="checkbox" id="hidden4"><label for="hidden4">Свой вариант (в
                                комментариях)</label>
                        </div>
                        <div class="btnHidden d-flex">
                            <button type="button" class="presentBtn">Голосовать</button>
                            <button type="button" class="presentBtn">все опросы</button>
                        </div>
                        <img class="hiddenImg" src="/assets/img/teamH.png" alt="">
                    </div>
                </div>
                <div class="middle col-xl-6 p-0 d-flex flex-wrap">
                    <div class="progHiddenParent d-flex flex-wrap">
                        <div class="progHidden">
                            <h4 class="title smallCircle smallCircleNews">Новости</h4>
                            <a class="hiddenLink" href="/">Сегодня</a>
                            <a class="hiddenLink" href="/">Воткинска</a>
                            <a class="hiddenLink" href="/">Видеоновости</a>
                            <a class="hiddenLink" href="/">Статьи</a>
                            <a class="hiddenLink" href="/">Вебкамеры Воткинска</a>
                            <a class="hiddenLink" href="/">Народный контроль</a>
                            <a class="hiddenLink" href="/">Все</a>
                            <a class="hiddenLink" href="/">Разместить новость</a>

                        </div>
                        <div class="progHidden">
                            <h4 class="title smallCircle smallCircleAf">Афиша</h4>
                            <a class="hiddenLink" href="/">Сегодня</a>
                            <a class="hiddenLink" href="/">Выставки</a>
                            <a class="hiddenLink" href="/">Конценрты</a>
                            <a class="hiddenLink" href="/">Отдых</a>
                            <a class="hiddenLink" href="/">Спорт</a>
                            <a class="hiddenLink" href="/">Бизнес</a>
                            <a class="hiddenLink" href="/">Все</a>
                            <a class="hiddenLink" href="/">Добавить мероприятие</a>

                        </div>
                        <div class="progHidden">
                            <h4 class="title smallCircle smallCircleVtv">ВТВ</h4>
                            <a class="hiddenLink" href="/">Прямая трансляция</a>
                            <a class="hiddenLink" href="/">Передачи</a>
                            <a class="hiddenLink" href="/">Программа</a>
                            <a class="hiddenLink" href="/">Заказать видео</a>

                        </div>
                        <div class="progHidden">
                            <h4 class="title smallCircle smallCircleVak">Гороскоп</h4>
                            <a class="hiddenLink" href="/">Овен</a>
                            <a class="hiddenLink" href="/">Телец</a>
                            <a class="hiddenLink" href="/">Близнецы</a>
                            <a class="hiddenLink" href="/">Рак</a>
                            <a class="hiddenLink" href="/">Лев</a>
                            <a class="hiddenLink" href="/">Дева</a>
                            <a class="hiddenLink" href="/">Весы</a>
                            <a class="hiddenLink" href="/">Скорпион</a>
                            <a class="hiddenLink" href="/">Стрелец</a>
                            <a class="hiddenLink" href="/">Козерог</a>
                            <a class="hiddenLink" href="/">Водолей</a>
                            <a class="hiddenLink" href="/">Рыбы</a>

                        </div>
                        <div class="progHidden">
                            <h4 class="title smallCircle smallCircleOB">Объявления</h4>
                            <a class="hiddenLink" href="/">Сегодня</a>
                            <a class="hiddenLink" href="/">Все</a>
                            <a class="hiddenLink" href="/">Подать объявление</a>

                        </div>
                        <div class="progHidden">
                            <h4 class="title smallCircle smallCircleVtv">Люди</h4>
                            <a class="hiddenLink" href="/">Блоги</a>
                            <a class="hiddenLink" href="/">Прямой эфир</a>
                            <a class="hiddenLink" href="/">Слухи</a>
                            <a class="hiddenLink" href="/">Пользователи</a>
                            <a class="hiddenLink" href="/">Зарегистрироваться</a>

                        </div>
                        <div class="progHidden">
                            <h4 class="title smallCircle smallCircleVak">Вакансии</h4>
                            <a class="hiddenLink" href="/">Горячие</a>
                            <a class="hiddenLink" href="/">Новые</a>
                            <a class="hiddenLink" href="/">Все</a>
                            <a class="hiddenLink" href="/">Разместить</a>

                        </div>
                    </div>

                </div>
                <div class="right col-xl-3">
                    <div class="Opros">
                        <h3 class="title">Опрос</h3>
                        <p class="hiddenText">Считаете ли вы, что Девятова
                            Мария Елифериевна достойна
                            быть занесенной на Доску
                            Почета:</p>
                        <div class="hiddenIn">
                            <input type="checkbox" id="hidden5"><label for="hidden5">Да</label>
                            <input type="checkbox" id="hidden6"><label for="hidden6">Нет</label>
                            <input type="checkbox" id="hidden7"><label for="hidden7">Мне все равно</label>
                            <input type="checkbox" id="hidden8"><label for="hidden8">Свой вариант (в
                                комментариях)</label>
                        </div>
                        <div class="d-flex">
                            <button type="button" class="presentBtn">Голосовать</button>
                            <button type="button" class="presentBtn">все опросы</button>
                        </div>

                        <div class="HiddenOpPres presentBox">
                            <p class="hiddenText">Получай баллы за ответы на опросы</p>
                            <button type="button" class="presentBtn">хочу получить баллы</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="record d-flex">
    <div class="container">
        <div class="blocks d-flex">
            <div class="left col-xl-3">

                <div class="rightTitle">
                    <h2 class="title">Новые записи в блогах</h2>
                </div>
                <div class="blockParent">
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                </div>
                <div class="recording pl-0">
                    <a class="recordingAlllink" href="/">все записи в блогах</a>
                </div>
                <img class="advImg" src="/assets/img/term.jpg" alt="">

                <div class="rightTitle">
                    <h2 class="title">Выбор редакции</h2>
                </div>
                <div class="blockParent">
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <time>12:35</time>
                        <p class="recordingLink">США госсекретарь Джон
                            Керри заявил во вторник,
                            что Йемен Хути группы 's
                            и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                </div>
                <div class="recording pl-0">
                    <a class="recordingAlllink" href="/">все новости редакции</a>
                </div>
                <img class="advImg" src="/assets/img/wms.jpg" alt="">

                <div class="hearing">
                    <div class="hearingImg">
                        <img src="/assets/img/ear.png" alt="">
                    </div>
                    <div class="hearingContent">
                        <a class="close" href="/"></a>
                        <h4 class="yanTitle">Я слышал, что...</h4>
                        <p>Подросткам продают пиво!</p>
                        <p>В магазине "БАСКО" ул.1 Мая 83</p>
                        <p>подросткам продают пиво, сегодня</p>
                        <p>19.11.2016 в 17.45.</p>
                        <a class="recordingAlllink" href="/">Разместить слух</a>
                        <a class="recordingAlllink" href="/">Все слухи</a>
                    </div>
                </div>

                <div class="rightTitle">
                    <h2 class="title">Новости партнеров</h2>
                </div>
                <div class="blockParent">
                    <div class="recording">
                        <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                        <p class="recordingLink">Керри объявляет Йемен
                            о прекращении огня
                            на возражения</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                        <p class="recordingLink">Керри объявляет Йемен
                            о прекращении огня
                            на возражения</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                        <p class="recordingLink">Керри объявляет Йемен
                            о прекращении огня
                            на возражения</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                        <p class="recordingLink">Керри объявляет Йемен
                            о прекращении огня
                            на возражения</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording">
                        <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                        <p class="recordingLink">Керри объявляет Йемен
                            о прекращении огня
                            на возражения</p>
                        <a class="transLink" href="/"></a>
                    </div>
                </div>
                <div class="recording pl-0">
                    <a class="recordingAlllink" href="/">еще новости партнеров</a>
                </div>

            </div>
            <div class="middle col-xl-6">

                <div class="cal calNews d-flex">
                    <a class="calText horLine" href="/">Главная</a>
                    <a class="calText horLine" href="/">Новости</a>
                    <a class="calText" href="/">Сегодня</a>


                </div>
                <div class="newsBlock  newsBlockParent w-100">
                    <h2 class="title">Конкурс декоративно-прикладного искусства
                        «Подарок Дроссельмейера» объявили
                        в Воткинске</h2>
                    <div class="newsImg">
                        <img class="newsImgImg" src="/assets/img/rocket.jpg" alt="">
                        <div class="newsImgStats">
                            <div class="newsStatEye">
                                <span class="ImgIcon eye">93</span>
                            </div>
                            <div class="newsStatComm">
                                <span class="ImgIcon comm">26</span>
                            </div>
                            <p class="newsTextStats">11:42, 23 ноября 2016</p>
                        </div>
                    </div>
                </div>
                <div class="autor d-flex">
                    <img src="/assets/img/autor.png" alt="">
                    <div class="autorText">
                        <p class="autorT">Автор</p>
                        <h6 class="title">Наталья Куделич</h6>
                    </div>
                </div>

                <div class="rad">
                    <h4 class="title">Подпишись на новости</h4>
                    <input class="inputText" type="text">
                    <button class="newsBtn" type="button">подписаться</button>
                </div>
                <div class="newsText">
                    <p>Работы принимаются в Музее-усадьбе П.И. Чайковского.<br>
                        Музей-усадьба П.И. Чайковского объявляет конкурс декоративно-прикладного искусства «Подарок
                        Дроссельмейера». По условиям конкурса, готовая работа должна представлять собой куклу-персонаж
                        одного из балетов П.И. Чайковского:
                        Балет «Лебединое озеро»: Одетта - белый лебедь, Одиллия - черный лебедь, принц Зигфрид, Ротбарт
                        - злой волшебник, король и королева. Балет «Щелкунчик»: девочка Мари, Дроссельмейер, Мышиный<br>
                        король, Фея Драже, гусары, паяц, господин Шоколад, господин Чай, Фея Ночи.
                        Балет «Спящая красавица»: Аврора, принц Дезире, добрые феи и злая Фея Карабос, гости на свадьбе:<br>
                        Синяя борода, Кот в сапогах, Золушка, красная шапочка и др. Для участия в конкурсе принимаются
                        только индивидуальные работы. Допускается использование любых материалов. Размер работы должен
                        быть не менее 20 см в высоту (необходимо предусмотреть возможность установки куклы на выставке).
                        Работы принимаются с 1 по 15 декабря по адресу: ул. Чайковского, 117.
                        Справки по телефону: 8-919-919-40-71. </p>
                </div>

                <div class="tags d-flex align-items-center">
                    <h5 class="title tagTitle">Теги:</h5>
                    <p class="tagText">#Воткинск</p>
                    <p class="tagText">#Новости</p>
                    <p class="tagText">#Исскуство</p>
                </div>
                <div class="tags d-flex align-items-baseline">
                    <h5 class="title tagTitle">Расскажите друзьям:</h5>
                    <a class="footerIcons" href="/">
                        <img src="/assets/img/facebook.png" alt="">
                    </a>
                    <a class="footerIcons" href="/">
                        <img src="/assets/img/twitter.png" alt="">
                    </a>
                    <a class="footerIcons" href="/">
                        <img src="/assets/img/vk.png" alt="">
                    </a>
                    <a class="footerIcons" href="/">
                        <img src="/assets/img/od.png" alt="">
                    </a>
                    <a class="footerIcons" href="/">
                        <img src="/assets/img/youtube.png" alt="">
                    </a>
                    <a class="footerIcons" href="/">
                        <img src="/assets/img/inst.png" alt="">
                    </a>
                    <a class="footerIcons" href="/">
                        <img src="/assets/img/chell.png" alt="">
                    </a>
                    <a class="footerIcons" href="/">
                        <img src="/assets/img/google+.png" alt="">
                    </a>
                </div>

                <div class="tags pb-0">
                    <h5 class="title tagTitle">Похожие материалы:</h5>

                    <div class="tagsContent d-flex flex-wrap">
                        <div class="recording tagRecording">
                            <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="recordingLink">Керри объявляет Йемен
                                о прекращении огня</p>
                        </div>
                        <div class="recording tagRecording">
                            <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="recordingLink">Керри объявляет Йемен
                                о прекращении огня</p>
                        </div>
                        <div class="recording tagRecording">
                            <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="recordingLink">Керри объявляет Йемен
                                о прекращении огня</p>
                        </div>
                        <div class="recording tagRecording">
                            <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="recordingLink">Керри объявляет Йемен
                                о прекращении огня</p>
                        </div>
                    </div>

                </div>

                <div class="rad d-block">
                    <h4 class="title">Комментарии:</h4>
                    <img class="commImg" src="/assets/img/comments.png" alt="">
                </div>

                <div class="rightTitle">
                    <h2 class="title">Интересное</h2>
                </div>
                <div class="blockParent">
                    <div class="recording">
                        <img class="IntImg" src="/assets/img/chorus.jpg" alt="">
                        <div class="blockParentInt">
                            <p class="recordingLink intLink">Керри объявляет Йемен о прекращении огня на возражения
                                правительства США госсекретарь Джон Керри заявил во вторник,
                                что Йемен Хути группы 's</p>
                            <div class="newsImgStats">
                                <div class="newsStatEye">
                                    <span class="IntIcon eye">93</span>
                                </div>
                                <div class="newsStatComm">
                                    <span class="IntIcon comm">26</span>
                                </div>
                                <p class="newsTextStats IntTextStats">сегодня 2 часа назад</p>
                            </div>
                        </div>
                        <a class="transLink" href=""></a>
                    </div>
                    <div class="recording">
                        <img class="IntImg" src="/assets/img/chorus.jpg" alt="">
                        <div class="blockParentInt">
                            <p class="recordingLink intLink">Керри объявляет Йемен о прекращении огня на возражения
                                правительства США госсекретарь Джон Керри заявил во вторник,
                                что Йемен Хути группы 's</p>
                            <div class="newsImgStats">
                                <div class="newsStatEye">
                                    <span class="IntIcon eye">93</span>
                                </div>
                                <div class="newsStatComm">
                                    <span class="IntIcon comm">26</span>
                                </div>
                                <p class="newsTextStats IntTextStats">сегодня 2 часа назад</p>
                            </div>
                            <a class="transLink" href=""></a>
                        </div>
                    </div>
                    <div class="recording">
                        <img class="IntImg" src="/assets/img/chorus.jpg" alt="">
                        <div class="blockParentInt">
                            <p class="recordingLink intLink">Керри объявляет Йемен о прекращении огня на возражения
                                правительства США госсекретарь Джон Керри заявил во вторник,
                                что Йемен Хути группы 's</p>
                            <div class="newsImgStats">
                                <div class="newsStatEye">
                                    <span class="IntIcon eye">93</span>
                                </div>
                                <div class="newsStatComm">
                                    <span class="IntIcon comm">26</span>
                                </div>
                                <p class="newsTextStats IntTextStats">сегодня 2 часа назад</p>
                            </div>
                        </div>
                        <a class="transLink" href=""></a>
                    </div>
                </div>
                <div class="recordingInt d-flex line">
                    <button type="button">загрузить еще</button>
                </div>
            </div>
            <div class="right col-xl-3">

                <div class="rightTitle">
                    <h2 class="title rightT">Прямой эфир</h2>
                    <button type="button" class="videoLink chillLink  camera">заказать видео</button>
                </div>
                <div class="blockParent">
                    <div class="recording lineLeft flex-wrap">
                        <p class="userName">Вадим Исаков</p>
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <p class="advLink">Реклама</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording lineLeft">
                        <p class="userName">Вадим Исаков</p>
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <p class="advLink">Реклама</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording lineLeft">
                        <p class="userName">Вадим Исаков</p>
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <a class="transLink" href="/"></a>

                    </div>
                    <div class="recording lineLeft">
                        <p class="userName">Вадим Исаков</p>
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <p class="advLink">Реклама</p>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording lineLeft">
                        <p class="userName">Вадим Исаков</p>
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <a class="transLink" href="/"></a>
                    </div>
                </div>
                <div class="recording pl-0">
                    <a class="recordingAlllink" href="/">все сообщения</a>
                </div>
                <div class="busImg">
                    <img class="busImgImg" src="/assets/img/bus.png" alt="">
                    <img class="busImgImg bus2" src="/assets/img/bus.png" alt="">
                </div>

                <div class="rightTitle">
                    <h2 class="title">Комментируемое</h2>
                </div>
                <div class="blockParent">
                    <div class="recording lineLeft">
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <div class="newsImgStats">
                            <div class="newsStatEye">
                                <span class="eye">93</span>
                            </div>
                            <div class="newsStatComm">
                                <span class="comm">26</span>
                            </div>
                        </div>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording lineLeft">

                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <div class="newsImgStats">
                            <div class="newsStatEye">
                                <span class="eye">93</span>
                            </div>
                            <div class="newsStatComm">
                                <span class="comm">26</span>
                            </div>
                        </div>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording lineLeft">
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <div class="newsImgStats">
                            <div class="newsStatEye">
                                <span class="eye">93</span>
                            </div>
                            <div class="newsStatComm">
                                <span class="comm">26</span>
                            </div>
                        </div>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording lineLeft">
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <div class="newsImgStats">
                            <div class="newsStatEye">
                                <span class="eye">93</span>
                            </div>
                            <div class="newsStatComm">
                                <span class="comm">26</span>
                            </div>
                        </div>
                        <a class="transLink" href="/"></a>
                    </div>
                    <div class="recording lineLeft">
                        <p class="recordingLink advText">США госсекретарь Джон Керри
                            заявил во вторник, что Йемен
                            Хути группы 's и саудовский...</p>
                        <div class="newsImgStats">
                            <div class="newsStatEye">
                                <span class="eye">93</span>
                            </div>
                            <div class="newsStatComm">
                                <span class="comm">26</span>
                            </div>
                        </div>
                        <a class="transLink" href="/"></a>
                    </div>
                </div>
                <div class="recording pl-0">
                    <a class="recordingAlllink" href="/">все сообщения</a>
                </div>
                <div class="present float-left">
                    <div class="presentParent">
                        <p class="presentText">получай</p>
                        <img class="presentImg" src="/assets/img/present.jpg" alt="">
                    </div>
                    <h2 class="presentTitle">Бонусы</h2>
                    <p class="presentText textReg">за регистрацию</p>
                    <button type="button" class="presentBtn">Узнать как</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="yan">
    <div class="container">
        <div class="blocks d-flex">
            <div class="left col-xl-3"></div>

            <div class="yanContent partParent col-xl-9 d-flex">
                <h4 class="title">Новости партнеров</h4>

                <div class="newsConParent d-flex flex-wrap pb-0">
                    <div class="yanText newsCon">
                        <img class="newsImg1" src="/assets/img/rocket.jpg" alt="">
                        <p class="newsConText">Руководитель пресс-службы
                            санкт-петербургского
                            «Зенита» Дмитрий
                            Циммерман опроверг
                            информацию СМИ о драке
                            игроков после поражения
                            от «Краснодара».</p>
                    </div>
                    <div class="yanText newsCon">
                        <img class="newsImg1" src="/assets/img/chorus.jpg" alt="">
                        <p class="newsConText">3 октября Вашингтон объявил
                            о приостановке переговоров
                            с Россией по достижению
                            перемирия в Сирии.
                            Как объяснил официальный
                            представитель Госдепа Джон
                            Кирби.</p>
                    </div>
                    <div class="yanText newsCon">
                        <img class="newsImg1" src="/assets/img/rocket.jpg" alt="">
                        <p class="newsConText">Ситуацию вокруг своей
                            премии Страшнов
                            охарактеризовал как
                            "несколько перегретую".
                            Ранее Страшнов заявил,
                            что не видит причин для
                            отказа от премии.</p>
                    </div>
                    <div class="yanText newsCon">
                        <img class="newsImg1" src="/assets/img/rocket.jpg" alt="">
                        <p class="newsConText">Руководитель пресс-службы
                            санкт-петербургского
                            «Зенита» Дмитрий
                            Циммерман опроверг
                            информацию СМИ о драке
                            игроков после поражения
                            от «Краснодара».</p>
                    </div>
                    <div class="yanText newsCon">
                        <img class="newsImg1" src="/assets/img/rocket.jpg" alt="">
                        <p>3 октября Вашингтон объявил
                            о приостановке переговоров
                            с Россией по достижению
                            перемирия в Сирии.
                            Как объяснил официальный
                            представитель Госдепа Джон
                            Кирби.</p>
                    </div>
                </div>
                <div class="recordingInt line longLine">
                    <button type="button">загрузить еще</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="yan">
    <div class="container">
        <div class="blocks d-flex">
            <div class="left col-xl-3"></div>

            <div class="yanContent col-xl-9 d-flex">
                <h4 class="yanTitle">Яндекс.Директ</h4>
                <a class="close" href="/"></a>

                <div class="yanText">
                    <p>Горячие столы!</p>
                    <p>Столы оптом и в розницу.</p>
                    <p>Бесплатная доставка.</p>
                    <p class="rec">реклама</p>
                </div>
                <div class="yanText">
                    <p>Горячие столы!</p>
                    <p>Столы оптом и в розницу.</p>
                    <p>Бесплатная доставка.</p>
                    <p class="rec">реклама</p>
                </div>
                <div class="yanText">
                    <p>Горячие столы!</p>
                    <p>Столы оптом и в розницу.</p>
                    <p>Бесплатная доставка.</p>
                    <p class="rec">реклама</p>
                </div>
                <div class="yanText">
                    <p>Горячие столы!</p>
                    <p>Столы оптом и в розницу.</p>
                    <p>Бесплатная доставка.</p>
                    <p class="rec">реклама</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "include/modals/footer.php";
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
