<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- <link rel="icon" href=​img/favicon.ico type="image/x-icon" /> -->
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" /> -->
    <link rel="stylesheet" href="css/style.css"  type="text/css">
    <link rel="stylesheet" href="css/mobile.css" type="text/css">
    <link rel="stylesheet" href="data-ajax/data_css.css" type="text/css">
    <!-- <link rel="stylesheet" href="lib/jquery-ui-1.12.1.custom/jquery-ui.css" type="text/css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"> </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <script src="lib/jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script> -->
    <!-- <script src="lib/jquery-ui-1.12.1.custom/jquery-ui.js"></script> -->
    <script src="js/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="js/feedback.js"></script>
    <script src="js/jquery.js"></script>
    
    <title>youtale</title>
</head>
<body>
    <!-- Блок меню -->
    <div class="background-block"></div>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="menu-img">
                        <img src="img/yt_logo.svg">
                    </div>
                    <div class="menu">
                        <nav class="menu-links">
                            <div class="menu-item"><a href="#" class="menu-links-item">One</a></div>
                            <div class="menu-item"><a href="#" class="menu-links-item">Two</a></div>
                            <div class="menu-item"><a href="#" class="menu-links-item">Free</a></div>
                            <div class="menu-item"><a href="#" class="menu-links-item">Four</a></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Первый блок с картинкой -->
    <div class="content-first">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="in-content-first">
                        <h1>Решение для эффективности ведения бизнеса от профессионалов в сфере IT</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="in-content-second">
                        <h2>Простой и понятный сайт - правильный курс развития Вашего бизнеса</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="in-content-button">
                        <a href="#feedback">
                            <div class="start-button">
                                ОТПРАВИТЬ ЗАЯВКУ
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="in-content-third">
                        <p>Готовы начать работу по улучшению Вашего бизнеса уже сейчас</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Второй блок на сером фоне -->
    <div class="content-second">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="cs-1">
                        <h1>Хотите получать максимум от своего бизнеса? Вам нужен сайт</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-0">
                    <div class="block-lending">
                        <img src='img/lending.svg' class="svg-img">
                        <div class="shadow-lending" id="landing"><p class="txt-lending">Лендинг</p></div>
                    </div>
                    <div class="block-lending">
                        <img src='img/multi.svg' class="svg-img">
                        <div class="shadow-lending" id="site"><p class="txt-multi">Многостраничный сайт</p></div>
                    </div>
                    <div class="block-lending">
                        <img src='img/intmagazin.svg' class="svg-img">
                        <div class="shadow-lending" id="store"><p class="txt-im">Интернет-магазин</p></div>
                    </div>
                    <div class="block-lending">
                        <img src='img/integration.svg' class="svg-img">
                        <div class="shadow-lending" id="integration"><p class="txt-im">Интеграции</p></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-9">
                    <div class="cs-3">
                        <h2>Индивидуальный подход для Вашего бизнеса</h2>
                        <div class="cs-list">
                            <ul>
                                <li>
                                    поможем подобрать тип сайта, который будет наиболее
                                    эффективен для привлечения целевой аудитории
                                </li>
                                <li>
                                    подготовим дизайн сайта с учетом Ваших пожеланий
                                </li>
                                <li>
                                    разработаем сайт, который будет адаптивен, что позволит
                                    Вашим клиентам просматривать информацию, оставлять заявки и
                                    совершать заказы с любых устройств
                                </li>
                                <li>
                                    разместим сайт на хостинге и сдадим проект, который будет
                                    готов помогать Вам зарабатывать
                                </li>
                            </ul>
                        </div>
                        <div class="button-consultation">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Третий блок на фоне с кодом -->
    <div class="background-block2">

    </div>
    <div class="content-third">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="ct-1">
                        <h1>Этапы работы</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6">
                    <div class="ct-block" id="tech_task">
                        <div class="for-img"><img src="img/ico_tz.svg"></div>
                        <div class="block-name">Создание ТЗ</div>
                        <div class="block-txt" id="bt-1">Здесь будет описание этапа, которое будет открываться по нажатию на ссылку</div>
                        <p class="block-but" id="bb-11">Подробнее</p>
                        <p class="block-but" id="bb-12">Свернуть</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6">
                    <div class="ct-block" id="design">
                        <div class="for-img"><img src="img/design.svg"></div>
                        <div class="block-name">Дизайн</div>
                        <div class="block-txt" id="bt-2">Здесь будет описание этапа, которое будет открываться по нажатию на ссылку</div>
                        <p class="block-but" id="bb-21">Подробнее</p>
                        <p class="block-but" id="bb-22">Свернуть</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6">
                    <div class="ct-block" id="programming">
                        <div class="for-img"><img src="img/program.svg"></div>
                        <div class="block-name">Программирование</div>
                        <div class="block-txt" id="bt-3">Здесь будет описание этапа, которое будет открываться по нажатию на ссылку</div>
                        <p class="block-but" id="bb-31">Подробнее</p>
                        <p class="block-but" id="bb-32">Свернуть</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6">
                    <div class="ct-block" id="ready_project">
                        <div class="for-img"><img src="img/datapick.svg"></div>
                        <div class="block-name">Сдача проекта</div>
                        <div class="block-txt" id="bt-4">Здесь будет описание этапа, которое будет открываться по нажатию на ссылку</div>
                        <p class="block-but" id="bb-41">Подробнее</p>
                        <p class="block-but" id="bb-42">Свернуть</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="output">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="cs-1">
                        <a name="feedback"></a>
                        <h1>Оставьте нам заявку!</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <form class="form" action="feedback.php" method="POST">
                        <h2>Ваше имя</h2>
                        <input type="text" name="name" class="item">
                        <h2>Номер телефона</h2>
                        <input type="tel" name="number" class="item">
                        <h2>Email</h2>
                        <input type="email" name="email" class="item">
                        <h2>Комментарий</h2>
                        <input type="text" name="comment" class="item">
                        <br>
                        <input type="submit" class="smart-button">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clients">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="cs-1">
                        <a name="clients"></a>
                        <h1> Отзывы клиентов</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            

                                    <div class="carousel-item active">
                                    <!-- <img class="d-block w-100" src="img/adaptiv.jpg" alt="First slide"> -->
                                        <div class="clients-form">
                                            <div class="clients-avatar">

                                            </div>
                                            <div class="clients-text">
                                                    Прежде всего хочу сказать что проект был запущен вовремя. 
                                                    Были соблюдены все сроки, что приятно удивило, учитывая низкую стоимость.
                                                    С ребятами хорошо работать, будем продолжать сотрудничество в плане поддержки сайта.
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                            <!-- </div> -->
                            <!-- </div> -->

                            <div class="carousel-item">
                            <!-- <img class="d-block w-100" src="img/adaptiv.jpg" alt="Second slide"> -->
                                <div class="clients-form">
                                    <div class="clients-avatar">

                                    </div>
                                    <div class="clients-text">
                                        Работой доволен! По началу не совсем понятно было что нужно, но после консультации, она кстати бесплатная,
                                        разобрались и сделал выбор на лендинге. Сайт сделали так как я хотел, а в некоторых местах посоветовали как будет лучше.
                                        Очень рекомендую.
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <!-- <img class="d-block w-100" src="img/adaptiv.jpg" alt="Third slide"> -->
                            <div class="clients-form">
                                    <div class="clients-avatar">

                                    </div>
                                    <div class="clients-text">
                                        Самый низкий ценник в рунете! Нигде не видел такой цены и за такое качество, были некоторы моменты с недопониманием, но
                                        это быстро решилось. Запускал сразу несколько лендингов для рекламы интернет-магазина, конверсия заметно повысилась, однозначно
                                        лучший способ рекламы, чем реклама "по старинке".
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!-- <img class="d-block w-100" src="img/adaptiv.jpg" alt="Third slide"> -->
                                <div class="clients-form">
                                        <div class="clients-avatar">
    
                                        </div>
                                        <div class="clients-text">
                                            Стояла задача интегрировать наш рабочий портал с CRM-системой. Так как своего отдела разработки нет, то решили взять кого-нибудь удаленно.
                                            Результат не заставил себя долго ждать, давно стоило обратиться к профессионалам. Сделали все по Тех.заданию + прикрутили пару интересных фич.
                                            Остался доволен.
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                </div>
            </div>
        </div>
    </div>

<script>

</script>

</body>
</html>

