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
    <div class="container con d-flex justify-content-between align-items-center position-relative">
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
        <div class="rightTitle col-xl-3 col-md-3">
            <button type="button" class="videoLink chillLink  camera">заказать видео</button>
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

<div class="cal calNews d-flex">
    <div class="container">
        <a class="calText horLine" href="/">Главная</a>
        <a class="calText horLine" href="/">ВТВ</a>
        <a class="calText horLine" href="/">Новости Воткинска</a>
        <a class="calText" href="/">Поздравления для ВТВ с 20-летием. Часть 3</a>
    </div>
</div>

<div class="videoVtv ">
    <iframe class="videoIframe" width="100%" height="539" src="https://www.youtube.com/embed/bB8yC7hVkcI"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen=""></iframe>
</div>

<div class="record d-flex">
    <div class="container">
        <div class="blocks d-flex">
            <div class="leftMiddle col-xl-9 col-lg-9 col-md-12">
                <div class="autor partParent d-flex">
                    <div class="container">
                        <div class="vtvContent d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="/assets/img/autor.png" alt="">
                                <div class="autorText">
                                    <p>Автор</p>
                                    <h6 class="title">Наталья Куделич</h6>
                                </div>
                            </div>
                            <div class="newsImgStats vtvStats">
                                <p class="vtvText">18 ноября в 11:45</p>
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                </div>
                                <div class="newsStatComm">
                                    <span class="comm">26</span>
                                </div>
                            </div>
                        </div>
                        <div class="vtvContent d-flex justify-content-between">
                            <h2 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h2>
                        </div>
                    </div>
                </div>
                <div class="newsText">
                    <p class="storyText">Работы принимаются в Музее-усадьбе П.И. Чайковского.<br>
                        Музей-усадьба П.И. Чайковского объявляет конкурс декоративно-прикладного искусства «Подарок
                        Дроссельмейера». По условиям конкурса, готовая работа должна представлять собой куклу-персонаж
                        одного из балетов П.И. Чайковского:<br>
                        Балет «Лебединое озеро»: Одетта - белый лебедь, Одиллия - черный лебедь, принц Зигфрид, Ротбарт
                        - злой волшебник, король и королева. Балет «Щелкунчик»: девочка Мари, Дроссельмейер, Мышиный<br>
                        король, Фея Драже, гусары, паяц, господин Шоколад, господин Чай, Фея Ночи.<br>
                        Балет «Спящая красавица»: Аврора, принц Дезире, добрые феи и злая Фея Карабос, гости на свадьбе:<br>
                        Синяя борода, Кот в сапогах, Золушка, красная шапочка и др. Для участия в конкурсе принимаются
                        только индивидуальные работы. Допускается использование любых материалов. Размер работы должен
                        быть не менее 20 см в высоту (необходимо предусмотреть возможность установки куклы на выставке).<br>
                        Работы принимаются с 1 по 15 декабря по адресу: ул. Чайковского, 117.<br>
                        Справки по телефону: 8-919-919-40-71. </p>
                </div>
                <div class="rad">
                    <h4 class="title">ПОДПИШИСЬ НА НОВЫЕ ВИДЕОРОЛИКИ!</h4>
                    <input class="inputText inVideo" type="text">
                    <button class="newsBtn" type="button">подписаться</button>
                </div>

                <div class="tags d-flex align-items-center">
                    <h5 class="title tagTitle">Теги:</h5>
                    <p class="tagText">#Воткинск</p>
                    <p class="tagText">#Новости</p>
                    <p class="tagText">#Исскуство</p>
                </div>
                <div class="tags d-flex align-items-baseline">
                    <h5 class="title tagTitle">Расскажите друзьям:</h5>
                    <div class="footerIconsParent">
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/fc.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/tw.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/vk.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/od.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/yt.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/inst.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/mail.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/gl.svg" alt="">
                        </a>
                    </div>
                </div>

                <div class="rad d-block">
                    <h4 class="title">Комментарии:</h4>
                    <img class="commImg" src="/assets/img/comments.png" alt="">
                </div>
                <div class="video">
                    <h3 class="title videoTitle">Комментрируемое</h3>
                    <div class="videoToday test w-100 d-flex flex-wrap border-bottom-0">
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/9.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/8.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/4.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/3.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/6.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/7.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="recordingInt line d-flex">
                            <button type="button">загрузить еще</button>
                        </div>
                    </div>

                </div>
                <div class="tags pb-0">
                    <h5 class="title tagTitle">Новости партнеров</h5>

                    <div class="tagsContent d-flex flex-wrap">
                        <div class="recording tagRecording align-items-center">
                            <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="recordingLink">Керри объявляет Йемен
                                о прекращении огня на возражения</p>
                        </div>
                        <div class="recording tagRecording align-items-center">
                            <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="recordingLink">Керри объявляет Йемен
                                о прекращении огня на возражения</p>
                        </div>
                        <div class="recording tagRecording align-items-center">
                            <img class="partImg" src="/assets/img/chorus.jpg" alt="">
                            <p class="recordingLink">Керри объявляет Йемен
                                о прекращении огня на возражения</p>
                        </div>
                    </div>

                </div>

                <div class="video">
                    <h3 class="title videoTitle">Вы смотрели</h3>
                    <div class="videoToday w-100 d-flex flex-wrap">
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/9.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/8.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/4.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="recordingInt line d-flex">
                            <button type="button">загрузить еще</button>
                        </div>
                    </div>
                </div>


            </div>
            <div class="right col-xl-3 col-lg-3">
                <div class="rightTitle">
                    <h2 class="title">Популярное видео</h2>
                </div>
                <div class="busImg busVtv strLink">
                    <img class="busImgImg" src="/assets/img/bus.png" alt="">
                </div>

                <div class="hearing vkGroup">
                    <div class="hearingContent">
                        <a class="close hearingClose" href="/"></a>
                        <h4 class="yanTitle">Спасибо, что выбрали телеканал ВТВ!</h4>
                        <p class="hearingText">Следите за новостями в нашей группе VK.</p>
                        <button class="newsBtn vkIcon" type="button">Вступить в группу</button>

                    </div>
                </div>

                <div class="video">
                    <div class="videoToday w-100 d-flex flex-wrap border-bottom-0">
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/2.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/8.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/4.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/5.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                        <div class="videoContent">
                            <img class="videoImg" src="/assets/img/musicImg/1.png" alt="">
                            <h4 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h4>
                            <p class="name">Наталья Гуревич</p>
                            <div class="newsImgStats vtvStats">
                                <div class="newsStatEye">
                                    <span class="eye">93</span>
                                    <span class="comm">26</span>
                                </div>
                                <p class="vtvText">18 ноября в 11:45</p>
                            </div>
                        </div>
                    </div>
                    <div class="recordingInt d-flex line smallLine border-top-0">
                        <button type="button">загрузить еще</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<footer class="vtvFooter">
    <div class="container">
        <div class="blocks d-flex">
            <div class="left col-xl-3">
                <div class="footerContent">
                    <div class="footerText w-100">
                        <p>Первый Коммерческий ТВ канал
                            в Воткинске. Контакты:</p>
                        <p>8 (912) 441-01-25 | 8 (912) 752-79-02</p>
                    </div>
                    <div class="footerLinksParent d-block">
                        <p>Мы в соц. сетях:</p>
                        <div class="footerIconsParent footerLeftIcon">
                            <a class="footerIcons" href="/">
                                <img src="/assets/img/social/footer/vk.svg" alt="">
                            </a>
                            <a class="footerIcons" href="/">
                                <img src="/assets/img/social/footer/yt.svg" alt="">
                            </a>
                        </div>
                        <div class="footerLinks w-100 d-flex">
                            <a class="footerLink" href="/">О ВТВ</a>
                            <a class="footerLink" href="/">Заказать видео</a>
                            <a class="footerLink" href="/">Вакансии</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerContent col-xl-9 d-flex">
                <div class="footerLinksParent pt-0">
                    <div class="footerText">
                        <p>Воткинск.NET - информационно-развлекательный портал
                            Размещение рекламы круглосуточно: +7 (912) 441-01-25 | +7 (34145) 5-99-75
                            Портал не несет ответственности за достоверность информации,
                            содержащейся в рекламных объявлениях.
                            Портал не предоставляет справочной информации.
                        </p>
                    </div>
                    <div class="footerImgParent">

                        <img class="footerImg" src="/assets/img/footerImg.png" alt="">
                    </div>
                </div>


                <div class="footerLinksParent">

                    <div class="footerIconsParent">
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/footer/fc.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/footer/tw.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/footer/vk.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/footer/od.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/footer/yt.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/footer/inst.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/footer/mail.svg" alt="">
                        </a>
                        <a class="footerIcons" href="/">
                            <img src="/assets/img/social/footer/google.svg" alt="">
                        </a>
                    </div>

                    <div class="footerText footerRight">
                        <p>2010-2016. Воткинск.NET - информационно-развлекательный портал
                            Разработано в студии <a class="recordingAlllink" href="/">Web. Master. Studio.</a>
                            Агенство креативных профессионалов</p>
                    </div>
                    <div class="footerLinks">
                        <a class="footerLink" href="/">О портале</a>
                        <a class="footerLink" href="/">Реклама</a>
                        <a class="footerLink" href="/">Вакансии</a>
                        <a class="footerLink mobIcon" href="/">Мобильная версия</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

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