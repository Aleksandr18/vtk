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

    <link rel="stylesheet" rel="preload"
          href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,700;1,800&display=swap"
          onload="this.rel='stylesheet'" as="style">

    <link rel="stylesheet" rel="preload"
          href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
          onload="this.rel='stylesheet'" as="style">
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
                <li><a class="link" href="news.php">Новости</a></li>
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
        <div class="container hiddCon">
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
                            <input type="checkbox" id="hidden1"><label for="hidden1"><span>Да</span></label>
                            <input type="checkbox" id="hidden2"><label for="hidden2"><span>Нет</span></label>
                            <input type="checkbox" id="hidden3"><label for="hidden3"><span>Мне все равно</span></label>
                            <input type="checkbox" id="hidden4"><label for="hidden4"><span>Свой вариант (в
                                комментариях)</span></label>
                        </div>
                        <div class="btnHidden d-flex flex-wrap">
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

                    </div>
                    <div class="recHidden">
                        <img class="recHiddenImg" src="/assets/img/shop.jpg" alt="">
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
                            <input type="checkbox" id="hidden5"><label for="hidden5"><span>Да</span></label>
                            <input type="checkbox" id="hidden6"><label for="hidden6"><span>Нет</span></label>
                            <input type="checkbox" id="hidden7"><label for="hidden7"><span>Мне все равно</span></label>
                            <input type="checkbox" id="hidden8"><label for="hidden8"><span>Свой вариант (в
                                комментариях)</span></label>
                        </div>
                        <div class="btnHidden d-flex flex-wrap">
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
                <div class="newsImg">
                    <img class="rybbuImg" src="/assets/img/term.jpg" alt="">
                </div>
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
                <div class="newsImg">
                    <img class="rybbuImg" src="/assets/img/wms.jpg" alt="">
                </div>

                <div class="hearing">
                    <div class="hearingImg">
                        <img src="/assets/img/svg/ear.svg" alt="">
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
                <div class="cal d-flex justify-content-between flex-wrap align-items-baseline">
                    <p class="calText calToday">Сегодня 11:42 <a class="calLink" href="/">Вчера</a></p>

                    <button type="button" class="chillLink pal">хочу отдохнуть</button>
                </div>
                <div class="rad">
                    <input type="checkbox" id="1"><label for="1"><span>все</span></label>
                    <input type="checkbox" id="2"><label for="2"><span>новости</span></label>
                    <input type="checkbox" id="3"><label for="3"><span>афиша</span></label>
                    <input type="checkbox" id="4"><label for="4"><span>втв</span></label>
                    <input type="checkbox" id="5"><label for="5"><span>кино</span></label>
                    <input type="checkbox" id="6"><label for="6"><span>концерты</span></label>
                    <input type="checkbox" id="7"><label for="7"><span>выставки</span></label>
                    <input type="checkbox" id="8"><label for="8"><span>кафе</span></label>
                </div>

                <div class="news">
                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/rocket.jpg" alt="">
                            <div class="newsImgStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">сегодня 2 часа назад</p>
                            </div>
                            <a class="transLink" href=""></a>
                            <p class="newsImgBlock newsImgBlockNews">новости</p>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил</p>
                    </div>
                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="newsImgBlock newsImgBlockPoster">афиша</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил</p>
                    </div>

                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/rocket.jpg" alt="">
                            <div class="newsImgStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">сегодня 2 часа назад</p>
                            </div>
                            <p class="newsImgBlock newsImgBlockVtv">втв</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил во вторник, что Йемен Хути
                            группы
                            's</p>
                    </div>
                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="newsImgBlock newsImgBlockNews">новости</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил во вторник, что Йемен Хути
                            группы
                            's</p>
                    </div>

                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/rocket.jpg" alt="">
                            <p class="newsImgBlock newsImgBlockPoster">афиша</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил</p>
                    </div>
                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="newsImgBlock newsImgBlockPoster">афиша</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил</p>
                    </div>

                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/rocket.jpg" alt="">
                            <div class="newsImgStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">сегодня 2 часа назад</p>
                            </div>
                            <p class="newsImgBlock newsImgBlockNews">новости</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил</p>
                    </div>
                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="newsImgBlock newsImgBlockVtv">втв</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил</p>
                    </div>

                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/rocket.jpg" alt="">
                            <p class="newsImgBlock newsImgBlockNews">новости</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил во вторник, что Йемен Хути
                            группы
                            's</p>
                    </div>
                    <div class="newsBlock">
                        <div class="newsImg">
                            <img class="newsImgImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="newsImgBlock newsImgBlockNews">новости</p>
                            <a class="transLink" href=""></a>
                        </div>
                        <h2 class="title newsBlockTitle">Керри объявляет Йемен о прекращении огня на возражения
                            правительства</h2>
                        <p class="newsBlockText">США госсекретарь Джон Керри заявил</p>
                    </div>

                    <div class="recordingInt d-flex line recordBtn">
                        <button type="button" class="load">загрузить еще</button>
                    </div>
                </div>
                <img class="advBanner" src="/assets/img/banner1.png" alt="">
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
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">сегодня 2 часа назад</p>
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
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">сегодня 2 часа назад</p>
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
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">сегодня 2 часа назад</p>
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
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">сегодня 2 часа назад</p>
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
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">сегодня 2 часа назад</p>
                            </div>
                            <a class="transLink" href=""></a>
                        </div>
                    </div>
                </div>
                <div class="recordingInt d-flex line">
                    <button type="button">загрузить еще</button>
                </div>
                <div class="owlParent">
                    <div class="owl-people owl-carousel">
                        <div class="peopleStruct">
                            <div class="peopleInfo">
                                <h2 class="title">Наши люди</h2>
                                <img class="peopleImg" src="assets/img/chell1.png" alt="">
                                <div class="owlBlock">
                                    <h6 class="title">Юрий Бычков</h6>
                                    <p class="peopleText">Депутат ГосСовета Юрий Бычков отвечает
                                        на вопросы горожан в программе</p>
                                    <p class="peopleText">«Юрий Бычков отвечает».</p>
                                    <a class="peopleLink" href="/">узнать больше</a>
                                    <a class="peopleLink" href="/">узнать о других</a>
                                </div>
                            </div>
                        </div>
                    </div>
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

            <div class="yanContent col-xl-9 col-lg-9 col-md-9 col-sm-12 d-flex">
                <h4 class="yanTitle">Яндекс.Директ</h4>
                <a class="close" href="/"></a>

                <div class="yanText">
                    <p class="textYan">Горячие столы!</p>
                    <p class="textYan">Столы оптом и в розницу.</p>
                    <p class="textYan">Бесплатная доставка.</p>
                    <p class="rec">реклама</p>
                    <a href="/" class="transLink"></a>
                </div>
                <div class="yanText">
                    <p class="textYan">Горячие столы!</p>
                    <p class="textYan">Столы оптом и в розницу.</p>
                    <p>Бесплатная доставка.</p>
                    <p class="rec">реклама</p>
                    <a href="/" class="transLink"></a>
                </div>
                <div class="yanText">
                    <p class="textYan">Горячие столы!</p>
                    <p class="textYan">Столы оптом и в розницу.</p>
                    <p class="textYan">Бесплатная доставка.</p>
                    <p class="rec">реклама</p>
                    <a href="/" class="transLink"></a>
                </div>
                <div class="yanText">
                    <p class="textYan">Горячие столы!</p>
                    <p class="textYan">Столы оптом и в розницу.</p>
                    <p class="textYan">Бесплатная доставка.</p>
                    <p class="rec">реклама</p>
                    <a href="/" class="transLink"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "include/modals/footer.php"
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