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
        <div class="rightTitle col-xl-3 col-md-3">
            <button type="button" class="videoLink chillLink  camera">заказать видео</button>
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

<div class="cal calNews d-flex">
    <div class="container">
        <a class="calText horLine" href="/">Главная</a>
        <a class="calText horLine" href="/">Новости</a>
        <a class="calText" href="/">Сегодня</a>
    </div>
</div>

<div class="videoVtv">
    <iframe class="videoIframe" width="100%" height="539" src="https://www.youtube.com/embed/bB8yC7hVkcI" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</div>

<div class="partParent d-flex">
    <div class="container">
        <div class="vtvContent vtvContentAutor d-flex justify-content-between">
            <div class="autor d-flex align-items-center">
                <img src="/assets/img/autor.png" alt="">
                <div class="autorText">
                    <p class="autorT">Автор</p>
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
        <div class="vtvContent d-flex justify-content-between pt-0">
            <h2 class="title">Поздравления для ВТВ с 20-летием. Часть 3</h2>
            <h2 class="title redCircle">ВТВ</h2>
        </div>
    </div>
</div>

<div class="video">
    <div class="container position-relative">
        <div class="hearing vkGroup">
            <div class="hearingContent">
                <a class="close hearingClose" href="/"></a>
                <h4 class="yanTitle">Спасибо, что выбрали телеканал ВТВ!</h4>
                <p class="hearingText">Следите за новостями в нашей группе VK.</p>
                <button class="newsBtn vkIcon" type="button">Вступить в группу</button>

            </div>
        </div>
        <h3 class="title videoTitle">Видео сегодня</h3>
        <div class="videoToday w-100 d-flex flex-wrap linewidth">
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
                <h4 class="title">Поздравления для ВТВ с 20-летием. Ча</h4>
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
            <div class="recordingInt line longLine">
                <button type="button">загрузить еще</button>
            </div>
        </div>
    </div>
</div>

<div class="video">
    <div class="container videoCon">
        <h3 class="title videoTitle">Популярное видео</h3>
        <div class="videoToday w-100 d-flex flex-wrap">
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
            <div class="recordingInt line longLine">
                <button type="button">загрузить еще</button>
            </div>
        </div>
        <div class="yan">
            <div class="blocks d-flex">

                <div class="yanContent w-100 d-flex border-0">
                    <h4 class="yanTitle">Яндекс.Директ</h4>
                    <a class="close" href="/"></a>

                    <div class="yanText yanVtv">
                        <p>Горячие столы!</p>
                        <p>Столы оптом и в розницу.</p>
                        <p>Бесплатная доставка.</p>
                        <p class="rec">реклама</p>
                    </div>
                    <div class="yanText yanVtv">
                        <p>Горячие столы!</p>
                        <p>Столы оптом и в розницу.</p>
                        <p>Бесплатная доставка.</p>
                        <p class="rec">реклама</p>
                    </div>
                    <div class="yanText yanVtv">
                        <p>Горячие столы!</p>
                        <p>Столы оптом и в розницу.</p>
                        <p>Бесплатная доставка.</p>
                        <p class="rec">реклама</p>
                    </div>
                    <div class="yanText yanVtv">
                        <p>Горячие столы!</p>
                        <p>Столы оптом и в розницу.</p>
                        <p>Бесплатная доставка.</p>
                        <p class="rec">реклама</p>
                    </div>
                    <div class="yanText yanVtv">
                        <p>Горячие столы!</p>
                        <p>Столы оптом и в розницу.</p>
                        <p>Бесплатная доставка.</p>
                        <p class="rec">реклама</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="video">
    <div class="container videoCon">
        <h3 class="title videoTitle">Вы смотрели</h3>
        <div class="videoToday w-100 d-flex flex-wrap">

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
            <div class="recordingInt line longLine">
                <button type="button">загрузить еще</button>
            </div>
        </div>
    </div>
</div>

<div class="video">
    <div class="container videoCon">
        <h3 class="title videoTitle">Комментрируемое</h3>
        <div class="videoToday w-100 d-flex flex-wrap border-bottom-0">
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
            <div class="recordingInt line longLine">
                <button type="button">загрузить еще</button>
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
                                <img src="/assets/img/vk.png" alt="">
                            </a>
                            <a class="footerIcons" href="/">
                                <img src="/assets/img/youtube.png" alt="">
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
                    <div class="footerImg">

                        <img src="/assets/img/footerImg.png" alt="">
                    </div>
                </div>


                <div class="footerLinksParent">
                    <div class="footerIconsParent">
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