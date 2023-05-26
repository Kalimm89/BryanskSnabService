<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/bootstrap.min.css',
            'resources/css/main.css',
             'resources/css/fonts.css',
             'resources/css/footer.css',
             'resources/css/header.css',
             'resources/js/bootstrap.bundle.min.js',
             'resources/js/bootstrap.js',
             'resources/js/main.js'])
             <!-- {{ asset('/resources/img/header-logo.svg') }} -->
</head>
<body>
    <header>
        <div class="container header_cont mx-auto m-0">
            <div class="row header_top align-items-center d-flex flex-row flex-nowrap justify-content-end">
                <div class="col-sm-3 col-4">
                    <p class="head_ar d-none d-md-block">Россия, город Брянск, проезд Московский, д. 10а, офис 310</p>
                </div>
                
                <div class="col-md-6 col-6 d-flex justify-content-center flex-wrap align-items-sm-center header_logo">
                        <img src="{{ asset('public/img/header-logo.svg') }}" alt="">
                        <p class="fs-8">БрянскСнабСервисОПР</p>
                </div>
                <div class="col-6 d-md-none justify-content-end d-flex dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Меню
                     </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Главная</a></li>
                        <li><a class="dropdown-item" href="#">О нас</a></li>
                        <li><a class="dropdown-item" href="#">Наши услуги</a></li>
                        <li><a class="dropdown-item" href="#">Контакты</a></li>
                     </ul>
                </div>
                <div class="col-sm-3 col-4 justify-content-sm-end d-none d-md-flex">
                    <p class="header_phone">8 - 999 - 999 - 99 - 99</p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 d-none d-md-block">
            <ul class="row header_bot justify-content-center align-items-center mw-100 m-0">
                <li class="col-xxl-1 col-sm-3 col-md-2"><a href="">Главная</a></li>
                <li class="col-xxl-1 col-sm-3 col-md-2"><a href="">О нас</a></li>
                <li class="col-xxl-1 col-sm-3 col-md-2"><a href="">Наши услуги</a></li>
                <li class="col-xxl-1 col-sm-3 col-md-2"><a href="">Контакты</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="main_container container-fluid p-0 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h1 class="">КРОСС-ДОКИНГ</h1>
                    <h2 class="">И ОТВЕТСТВЕННОЕ ХРАНЕНИЕ ГРУЗОВ</h2>
                    <p class="">Быстрая выгрузка и своевременная отгрузка, гарантия сохранности продукции</p>
                    <a href="#!" class="text-white">Заказать</a>
                    <p>На складе в г. Брянск.</p>
                </div>
            </div>
        </div>
        <div class="main_descript container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col">
                    <img src="{{ asset('public/img/main-desc-1.svg') }}" alt="" class="desc_img">
                    <h4>Почти 18 лет</h4>
                    <p>Бесперебойной работы для клиентов</p>
                </div>
                <div class="col">
                    <img src="{{ asset('public/img/main-desc-2.svg') }}" alt="" class="desc_img">
                    <h4>Более 30 человек</h4>
                    <p>Опытных и квалифицированных сотрудников</p>
                </div>
                <div class="col">
                    <img src="{{ asset('public/img/main-desc-2.svg') }}" alt="" class="desc_img">
                    <h4>Более 13.000 м²</h4>
                    <p>Складская площадь для хранения грузов</p>
                </div>
                <div class="col">
                    <img src="{{ asset('public/img/main-desc-2.svg') }}" alt="" class="desc_img">
                    <h4>Своя ж/д ветка и маневровый тепловоз</h4>
                    <p>Бесперебойной работы для клиентов</p>
                </div>
            </div>
        </div>
        <div class="about_us container">
            <div class="row">
                <h2>О НАС</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 about_us_left">
                    <p class="au_top">АО «Брянскснабсервис ОПР» является одним из крупных складских комплексов в 
                        г.Брянске и Брянской области. Оно было создано в 1993 г. на базе госпредприятия 
                        «Брянскоблснабсбыт».</p>
                    <p class="au_bot">Основной деятельностью АО «Брянскснабсервис ОПР» является предоставление клиентам 
                        широкого спектра логистических услуг: складское (ответственное) хранение грузов 
                        (краткосрочное и долгосрочное) , прием ж/д вагонов, работа с железной дорогой, 
                        погрузо-разгрузочные операции, транспортные услуги, а также сдача 
                        в аренду складских и офисных помещений.</p>
                    <form class="main_form needs-validation" novalidate="">
                        <div class="row g-3">
                          <div class="col-12 mb-3">
                                <h4>Заполните форму ниже и получите индивидуальное 
                                    коммерческое предложение под ваши задачи</h4>
                          </div>
                          <div class="col-xl-6">
                            <label for="firstName" class="form-label">Ваше имя</label>
                            <input type="text" name="name" class="form-control" id="firstName" placeholder="Иван" value="" required="">
                            <div class="invalid-feedback">
                              Требуется действительное имя.
                            </div>
                          </div>
                          <div class="col-xl-6">
                            <label for="lastName" class="form-label">Ваш телефон</label>
                            <input type="tel" name="phone" class="form-control" id="lastName" placeholder="8 - (___) - ___ - __ - __ " value="" required="">
                            <div class="invalid-feedback">
                              Требуется действительная фамилия.
                            </div>
                          </div>
                          <div class="col-sm-6 mt-5">
                            <button type="submit" class="btn au_btn">Отправить</button>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 about_us_right">
                    <img src="{{ asset('public/img/about-us-pic.png') }}" alt="" class="w-100 mw-100">
                </div>
            </div>
        </div>
        <div class="services container">
            <div class="serv_h2 row">
                <h2>НАШИ УСЛУГИ</h2>
            </div>
            <div class="serv_cards row justify-content-center">
                <div class="serv_card col-4 pt-3">
                    <h3 class="col-12">АРЕНДА СКЛАДСКИХ ПОМЕЩЕНИЙ</h3>
                    <div class="serv_card_desc col-12 d-flex justify-content-between">
                        <p class="w-75">Складские отапливаемые  и неотапливаемые помещения</p>
                        <a href=""><img src="{{ asset('public/img/serv-ar-right.svg') }}" alt=""></a>
                    </div>
                    <img src="{{ asset('public/img/serv-img-1.png') }}" alt="" class="mw-100 col-12">
                </div>
                <div class="serv_card col-4 pt-3">
                    <h3 class="col-12">АРЕНДА ОФИСНЫХ ПОМЕЩЕНИЙ</h3>
                    <div class="serv_card_desc col-12 d-flex justify-content-between">
                        <p class="w-75">Предоставляем в аренду офисные помещения различной площади</p>
                        <a href=""><img src="{{ asset('public/img/serv-ar-right.svg') }}" alt=""></a>
                    </div>
                    <img src="{{ asset('public/img/serv-img-2.png') }}" alt="" class="mw-100 col-12">
                </div>
                <div class="serv_card col-4 pt-3">
                    <h3 class="col-12">ЛОГИСТИЧЕСКИЕ УСЛУГИ</h3>
                    <div class="serv_card_desc col-12 d-flex justify-content-between">
                        <p class="">Логистические услуги в сфере выполнения работ с железной дорогой</p>
                        <a href=""><img src="{{ asset('public/img/serv-ar-right.svg') }}" alt=""></a>
                    </div>
                        <img src="{{ asset('public/img/serv-img-3.png') }}" alt="" class="mw-100 col-12">
                </div>
            </div>
        </div>
        <div class="benefit container">
            <div class="ben_h2 row">
                <h2>КОМУ МЫ ПОЛЕЗНЫ</h2>
            </div>
            <div class="ben_desc row">
                <div class="col-12 col-md-6 ben_left">
                    <p class="ben_left_p1">Если вы ищете оптимальное решение для хранения и перевозки грузов, то наша компания 
                        готова предложить вам все необходимое. Мы подойдем тем, кому важен профессиональный 
                        сервис, экономия денежных средств и времени. </p>
                    <p class="ben_left_p2">Мы гарантируем безопасность и сохранность вашего груза.Обращайтесь к нам, и мы сделаем 
                        все возможное, чтобы удовлетворить ваши потребности и ожидания. </p>
                    <ul class="ul_desc d-flex flex-wrap flex-column">
                        <li>Дистрибьютеры</li>
                        <li>Оптовики</li>
                        <li>Транспортныекомпании</li>
                        <li>Производители продукции</li>
                        <li class="li_d">Региональные дилеры</li>
                        <li>Торговые сети</li>
                        <li>Импортеры/экспортеры</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 ben_right">
                    <img src="{{ asset('public/img/benefit-img.png') }}" alt="" class="w-100 mw-100">
                </div>
            </div>
        </div>
        <div class="work container">
            <div class="row">
                <h2>КАК МЫ РАБОТАЕМ</h2>
            </div>
            <div class="work_desc row d-flex flex-wrap gap-2 justify-content-center">
                <div class="work_card wc_1 col-4">
                    <h3>Звонок или заявка на сайте</h3>
                    <img src="{{ asset('public/img/work-ar-right.svg') }}" alt="">
                    <button class="btn work_btn">Связаться с нами</button>
                </div>
                <div class="work_card wc_2 col-4">
                    <h3>Переговоры и заключение договора</h3>
                    <img src="{{ asset('public/img/work-ar-right.svg') }}" alt="">
                </div>
                <div class="work_card wc_3 col-4">
                    <h3>Поставка продукции в наш терминал(авто/жд)</h3>
                    <img src="{{ asset('public/img/work-ar-right.svg') }}" alt="">
                </div>
                <div class="work_card wc_4 col-4">
                    <h3>Выгрузка на склад, кросс-докинг(авто/жд)</h3>
                    <img src="{{ asset('public/img/work-ar-right.svg') }}" alt="">
                </div>
                <div class="work_card wc_5 col-4">
                    <h3>Ответственное хранение</h3>
                    <img src="{{ asset('public/img/work-ar-right.svg') }}" alt="">
                </div>
                <div class="work_card wc_6 col-4">
                    <h3>Отгрузка со склада и оформление документов (авто/жд)</h3>
                </div>
            </div>
        </div>
        <div class="advant container">
            <div class="row">
                <h2>ЧТО МЫ ИМЕЕМ</h2>
            </div>
            <div class="adv_cards row d-flex gap-4 justify-content-center">
                <div class="adv_card col-6 col-xl-4">
                    <img src="{{ asset('public/img/adv-1.png') }}" alt="" class="mw-100">
                    <h3 class="col-12">АРЕНДА СКЛАДСКИХ ПОМЕЩЕНИЙ</h3>
                    <p class="serv_card_desc col-12">
                        Обработка в среднем 30 вагонов в день собственный маневренный тепловоз, 
                        подъездные пути
                    </p>
                </div>
                <div class="adv_card col-6 col-xl-4">
                    <img src="{{ asset('public/img/adv-2.png') }}" alt="" class="mw-100">
                    <h3 class="col-12">АРЕНДА СКЛАДСКИХ ПОМЕЩЕНИЙ</h3>
                    <p class="serv_card_desc col-12">
                        Обработка в среднем 30 вагонов в день собственный маневренный тепловоз, 
                        подъездные пути
                    </p>
                </div>
                <div class="adv_card col-6 col-xl-4">
                    <img src="{{ asset('public/img/adv-3.png') }}" alt="" class="mw-100">
                    <h3 class="col-12">АРЕНДА СКЛАДСКИХ ПОМЕЩЕНИЙ</h3>
                    <p class="serv_card_desc col-12">
                        Обработка в среднем 30 вагонов в день собственный маневренный тепловоз, 
                        подъездные пути
                    </p>
                </div>
                <div class="adv_card col-6 col-xl-4">
                    <img src="{{ asset('public/img/adv-4.png') }}" alt="" class="mw-100">
                    <h3 class="col-12">АРЕНДА СКЛАДСКИХ ПОМЕЩЕНИЙ</h3>
                    <p class="serv_card_desc col-12">
                        Перевалка грузов через свою ЖД справку, аттестованный РЖД персонал
                    </p>
                </div>
                <div class="adv_card col-6 col-xl-4">
                    <img src="{{ asset('public/img/adv-5.png') }}" alt="" class="mw-100">
                    <h3 class="col-12">АРЕНДА СКЛАДСКИХ ПОМЕЩЕНИЙ</h3>
                    <p class="serv_card_desc col-12">
                        Собственная ЖД ветка, маневровый тепловоз, оборот 30 вагонов в сутки
                    </p>
                </div>
                <div class="adv_card col-6 col-xl-4">
                    <img src="{{ asset('public/img/adv-6.png') }}" alt="" class="mw-100">
                    <h3 class="col-12">АРЕНДА СКЛАДСКИХ ПОМЕЩЕНИЙ</h3>
                    <p class="serv_card_desc col-12">
                        Современная погрузочно-разгрузочная и складская техника
                    </p>
                </div>
            </div>
            <div class="main_adv_top row">
                <div class="col-6">
                    <h3>Главное конкурентное преимущество— гибкий «резиновый» склад</h3>
                    <p>Вы получаете огромные возможности современноготерминала за О (Ноль) 
                        рублей постоянных затрат.Все затраты – переменные, то есть Вы платите 
                        только«за фактическое хранение/операции»В Ваш "высокий сезон" Вы можете 
                        нарастить объемы хранения/перевалки грузов, а в "низкий сезон" снизить 
                        их до минимума и не оплачивать лишние издержки.</p>
                </div>
                <div class="col-6">
                    <img src="{{ asset('public/img/main-adv.png') }}" alt="">
                </div>
            </div>
            <div class="main_adv_bot row">
                <h4 class="col-12">На территории комплекса имеются</h4>
                <div class="main_adv_card col-4 d-flex">
                    <img src="{{ asset('public/img/adv-picsvg-1.svg') }}" alt="" class="">
                    <p>2 административныхздания под офисы общей площадью 3300 м2</p>
                </div>
                <div class="main_adv_card col-4 d-flex">
                    <img src="{{ asset('public/img/adv-picsvg-2.svg') }}" alt="">
                    <p>Территория складского комплекса находится под круглосуточной охраной</p>
                </div>
                <div class="main_adv_card col-4 d-flex">
                    <img src="{{ asset('public/img/adv-picsvg-3.svg') }}" alt="">
                    <p>Столовая и продуктовый магазин</p>
                </div>
                <div class="main_adv_card col-4 d-flex">
                    <img src="{{ asset('public/img/adv-picsvg-4.svg') }}" alt="">
                    <p>Отслеживание движения ЖД вагонов с Вашими грузами в системе ЭТРАН</p>
                </div>
                <div class="main_adv_card col-4 d-flex">
                    <img src="{{ asset('public/img/adv-picsvg-5.svg') }}" alt="">
                    <p>Склады оснащены крытымиавтомобильными и ж/д рампами шириной по 6м.(вагоны входят прямо в склад)</p>
                </div>
                <div class="main_adv_card col-4 d-flex">
                    <img src="{{ asset('public/img/adv-picsvg-6.svg') }}" alt="">
                    <p>Асфальтированная дорога и площадка для стоянки</p>
                </div>
                <div class="main_adv_card col-4 d-flex">
                    <img src="{{ asset('public/img/adv-picsvg-7.svg') }}" alt="">
                    <p>Удобная дистанционная система управления складскими запасами, электронный документооборот</p>
                </div>
                <div class="main_adv_card col-4 d-flex">
                    <img src="{{ asset('public/img/adv-picsvg-8.svg') }}" alt="">
                    <p>Собственная котельная Мощностью 1гВат</p>
                </div>

            </div>
        </div>
        <div class="sertificat container">
            <div class="row">
                <h2>Наши сертификаты</h2>
            </div>
            <div class="row mx-auto text-center gap-3">
                    <img src="{{ asset('public/img/sert-1.png') }}" alt="" class="col p-0 serts">
                    <img src="{{ asset('public/img/sert-2.png') }}" alt="" class="col p-0 serts">
                    <img src="{{ asset('public/img/sert-3.png') }}" alt="" class="col p-0 serts">
                    <img src="{{ asset('public/img/sert-4.png') }}" alt="" class="col p-0 serts">
                    <img src="{{ asset('public/img/sert-5.png') }}" alt="" class="col p-0 serts">
                    <img src="{{ asset('public/img/sert-6.png') }}" alt="" class="col p-0 serts">
            </div>
        </div>
        <div class="contacts container-fluid p-0 m-0">
            <div class="row">
                    <h2>Контакты</h2>
                </div>
            <div class="contacts_wrap row p-0 m-0 d-flex align-items-center mw-auto">
                <div class="container my_cont">
                    <div class="row">
                        <div class="col-6 cont_wrap">
                            <h3>БрянскСнабСервис</h3>
                            <h4>Наш адрес:</h4>
                            <p>241020, Россия, город Брянск, проезд Московский, д. 10а, офис 310</p>
                            <h4>Контактные телефоны:</h4>
                            <p>офис: +7 (4832) 63-58-01, 63-66-00</p>
                            <p>моб.: +7 903 868-46-13</p>
                            <p>моб.: +7 915 800-51-91</p>
                            <h4>E-mail:</h4>
                            <p>info@bssopr.ru</p>
                            <button class="btn work_btn">Связаться с нами</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>
        

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div> -->
    </main>
    <footer>
        <div class="footer container">
            <div class="row foot_top align-items-center">
                <div class="col">
                    <img src="{{ asset('public/img/footer.png') }}" alt="">
                </div>
                <div class="col-2 text_left">
                    <a href="">Главная</a>
                </div>
                <div class="col-2 text_left">
                    <a href="">О нас</a>
                </div>
                <div class="col-2 text_left">
                    <a href="">Наши услуги</a>
                </div>
                <div class="col-2 text_left">
                    <a href="">Контакты</a>
                </div>
            </div>
            <div class="row foot_mid">
                <h3><span>Звоните прямо сейчас</span>  —  8 (4832) 63 66 00</h3>
            </div>
            <div class="row foot_bot">
                <h3>Россия, город Брянск, проезд Московский, д. 10а, офис 310</h3>
            </div>
        </div>
    </footer>
</body>
</html>