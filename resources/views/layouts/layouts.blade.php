<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/bootstrap.min.css',
            'resources/css/main.css',
             'resources/css/fonts.css',
             'resources/css/footer.css',
             'resources/css/header.css',
             'resources/css/services.css',
             'resources/js/bootstrap.bundle.min.js',
             'resources/js/main.js'])
</head>
<body>
    <header>
        <div class="container header_cont mx-auto m-0">
            <div class="row head_top align-items-center">
                <div class="col-xl-5 col-2 d-flex align-items-center justify-content-center">
                    <a class="col d-flex align-items-center logo_header" href="/">
                        <img src="{{ asset('img/header-logo.svg') }}" alt="">
                    </a>
                    <div class="col head_menu_ab d-none d-xl-block">
                        <a href="{{ route('home') }}" class="dropdown-toggle" aria-expanded="false">О КОМПАНИИ</a>
                        <div class="dd_1">
                            <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Наша команда</a></li>
                                    <li><a class="dropdown-item" href="#">Реквизиты</a></li>
                                    <li><div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed headbut" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenew" aria-expanded="false" aria-controls="flush-collapsenew">
                                        Полезная <br> информация <img src="../img/11.svg" alt="">
                                        </button>
                                        </h2>
                                        <div id="flush-collapsenew" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"><a class="dropdown-item dif-col" href="#">Политика <br> конфиденциальности</a></div>
                                            <div class="accordion-body"><a class="dropdown-item dif-col" href="#">Cогласие на обработку <br> данных</a></div>
                                            <div class="accordion-body"><a class="dropdown-item dif-col" href="#">Карта сайта</a></div>
                                            <div class="accordion-body"><a class="dropdown-item dif-col" href="#">Вопросы и ответы</a></div>
                                        </div>
                                        </div>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Документы <br> для акционеров</a></li>
                                    
                            </ul>
                        </div>
                    </div>
                    <div class="col head_menu_ser text-center d-none d-xl-block">
                        <a href="{{ route('serv') }}" class="dropdown-toggle" id="dropdownMenu2" aria-expanded="false">УСЛУГИ</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a class="dropdown-item" href="{{ route('cross-docking') }}">Кросс-Докинг</a></li>
                                <li><a class="dropdown-item" href="{{ route('storage') }}">Ответственное хранение</a></li>
                                <li><a class="dropdown-item" href="{{ route('office-rent') }}">Аренда Офисов</a></li>
                                <li><a class="dropdown-item" href="{{ route('warehouse-rent') }}">Аренда Складов</a></li>
                            </ul>
                    </div>
                    <!-- <div class="col head_menu ps-2 d-none d-xl-block links_head">
                        <a href="" class="links_header">ТАРИФЫ</a>
                    </div> -->
                    <div class="col head_menu d-none d-xl-block text-center links_head">
                        <a href="#!" class="links_header">КОНТАКТЫ</a>
                    </div>
                </div>
                <!-- ---Адаптивный телефон -->
                <div class="col header_ad_phone d-xl-none text-center">
                    <a href="tel:+74832636600" class="mb-0">8 (4832) 63 66 00</a>
                </div>
                <!-- ---Адаптивный телефон -->
                <div class="col-1 col-xl d-flex align-items-center justify-content-end ">
                    <!-- ---Модальное окно вызов -->
                    <!-- Кнопка-триггер модального окна -->
                    <a href="#!" class="d-xl-none" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{ asset('img/burger.svg') }}" alt=""></a>
                    <!-- Модальное окно -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body modal-body_head">
                                <section class="container">
                                    <div class="row">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item mx-auto">
                                              <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    О компании
                                                </button>
                                              </h2>
                                              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <a class="accordion-body body_ac d-block" href="#">Наша команда</a>
                                                <a class="accordion-body body_ac d-block" href="#">Реквизиты</a>
                                                <a class="accordion-body body_ac d-block" href="#">Полезная информация</a>
                                                <a class="accordion-body body_ac d-block" href="#">Наши клиенты</a>
                                                <a class="accordion-body body_ac d-block" href="#">Документы для акционеров</a>
                                                <a class="accordion-body body_ac d-block" href="#">Политика конфиденциальности</a>
                                                <a class="accordion-body body_ac d-block" href="#">Согласие на обработку данных</a>
                                              </div>
                                            </div>
                                            <div class="accordion-item mx-auto">
                                              <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    Услуги
                                                </button>
                                              </h2>
                                              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <a class="accordion-body body_ac d-block" href="{{ route('cross-docking') }}">Кросс-Докинг</a>
                                                <a class="accordion-body body_ac d-block" href="{{ route('storage') }}">Ответственное хранение</a>
                                                <a class="accordion-body body_ac d-block" href="{{ route('office-rent') }}">Аренда Офисов</a>
                                                <a class="accordion-body body_ac d-block" href="{{ route('warehouse-rent') }}">Аренда Складов</a>
                                              </div>
                                            </div>
                                            <div class="accordion-item mx-auto d-none">
                                              <a class="accordion-body d-block" href="#">Тарифы</a>
                                            </div>
                                            <div class="accordion-item mx-auto">
                                                <a class="accordion-body d-block" href="#">Контакты</a>
                                              </div>
                                          </div>
                                    </div>
                                </section>
                            </div>
                            <div class="modal-footer">
                                <div class="mf_wrapper">
                                    <div class="mf_soc text-center d-flex align-items-center">
                                        @if (auth()->check())
                                        <a href="{{ route('logout') }}"><img src="{{ asset('img/mf-auth.svg') }}" alt=""></a>
                                        @else
                                        <a href="{{ route('login') }}"><img src="{{ asset('img/mf-auth.svg') }}" alt=""></a>
                                        @endif
                                        <a href="#!"><img src="{{ asset('img/mf-phone.svg') }}" alt=""></a>
                                        <a href="#!"><img src="{{ asset('img/mf-mail.svg') }}" alt=""></a>
                                    </div>
                                    <div class="mf_cont text-center">
                                        <p class="mf_phone my-0">8 (4832) 63 66 00</p>
                                        <p class="mf_ardess my-0">с 8:00 до 17:00 Мск,  пн-пт</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                <!-- ---Модальное окно вызов-->
                    <div class="col-4 d-flex justify-content-between d-none d-xl-flex">
                        <div class="header_desc">
                            <p class="header_phone">8 (4832) 63 66 00</p>
                            <p class="header_time">с 8:00 до 17:00 Мск,  пн-пт</p>
                        </div>
                        <div class="header_icons d-flex align-items-center justify-content-end">
                            <a href="" class="a_phone"><img src="{{ asset('img/header-phone.svg') }}" alt=""></a>
                            <a href="" class="a_mail d-flex align-items-center"><img src="{{ asset('img/header-mail.svg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-1 d-flex align-items-center justify-content-end d-none d-xl-flex">
                    @if (auth()->check())
                        <a href="{{ route('logout') }}" class="auth"><img src="{{ asset('img/header-auth.svg') }}" alt=""></a>
                    @else
                        <a href="{{ route('login') }}" class="auth"><img src="{{ asset('img/header-auth.svg') }}" alt=""></a>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
    <section class="container flashes">
        <div class="row">
            <div class="col-12 text-center">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </div>
        </div>
    </section>
    @yield('main')
    </main>
    <footer>
       <section class="container-fluid footer_fluid">
        <section class="container footer">
            <div class="row d-none d-md-flex">
                <div class="col-lg-5 col-6 px-0">
                    <div class="row ft_l_p">
                        <div class="col px-0">
                            <a href="{{ route('home') }}"><img src="{{ asset('img/footer-logo.png') }}" alt=""></a>
                        </div>
                        <div class="col-7">
                            <h4 class="footh4">О нас</h4>
                            <ul class="px-0">
                                <li><a href="#!">Политика конфиденциальности</a></li>
                                <li><a href="#!">Карта сайта</a></li>
                                <li><a href="#!">Помощь</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <p class="px-0 my-0 copy_right">© 2010–2023 АО Брянскснабсервис</p>
                    </div>
                </div>
                <div class="col-lg-2 col-3 text-center">
                    <div class="row f_part">
                        <h4>Партнерам</h4>
                        <ul class="text-start">
                            <li class=""><a href="{{ route('serv') }}">Услуги</a></li>
                            <li class=""><a href="#!">Тарифы</a></li>
                            <li class=""><a href="#!">Реквизиты</a></li>
                        </ul>
                    </div>
                    <div class="row d-none d-xl-flex">
                        <div class="col col_soc">
                            <a href="#!"><img src="{{ asset('img/wa-ico.svg') }}" alt=""></a>
                            <a href="#!"><img src="{{ asset('img/tg-ico.svg') }}" alt=""></a>
                            <a href="#!"><img src="{{ asset('img/viber-ico.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-3">
                    <div class="row ft_r_t">
                        <p class="f_phone">8 (4832) 63 66 00</p>
                        <p class="f_mail">info@bssopr.ru</p>
                        <p class="f_adress">241020, Россия, г. Брянск, проезд Московский, д. 10а, оф. 310</p>
                    </div>
                    <form class="row g-2 justify-content-end d-none d-xl-flex" method="post" action="{{ route('mailing') }}">
                        @csrf
                        <div class="col-auto">
                            <input type="email" name="email" class="form-control" id="inputPassword2" placeholder="Ваш e-mail">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Подписаться</button>
                        </div>
                    </form>
                    <div class="row d-flex d-xl-none soc_mobile_on">
                        <div class="col col_soc">
                            <a href="#!"><img src="{{ asset('img/wa-ico.svg') }}" alt=""></a>
                            <a href="#!"><img src="{{ asset('img/tg-ico.svg') }}" alt=""></a>
                            <a href="#!"><img src="{{ asset('img/viber-ico.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex d-md-none footer_mobile">
                <div class="row justify-content-between footer_mobile_top">
                    <div class="col-4">
                        <a href="#!"><img src="{{ asset('img/footer-logo.png') }}" alt="" class="mw-100"></a>
                    </div>
                    <div class="col-8 d-flex flex-column footer_mobile_about">
                        <div class="row">
                            <h4 class="px-0">О нас</h4>
                            <ul class="px-0">
                                <li><a href="#!">Политика <br> конфиденциальности</a></li>
                                <li><a href="#!">Карта сайта</a></li>
                                <li><a href="#!">Помощь</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <h4 class="px-0">Партнерам</h4>
                            <ul class="px-0">
                                <li class=""><a href="{{ route('cross-docking') }}">Услуги</a></li>
                                <li class=""><a href="#!">Тарифы</a></li>
                                <li class=""><a href="#!">Реквизиты</a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <p class="f_phone px-0 my-0">8 (4832) 63 66 00</p>
                            <p class="f_mail px-0 my-0">info@bssopr.ru</p>
                            <p class="f_adress px-0 my-0">241020, Россия, г. Брянск, проезд Московский, д. 10а, оф. 310</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p class="firm">© 2010–2023 <br> АО Брянскснабсервис</p>
                    </div>
                    <div class="col-6 footer_mobile_soc justify-content-end d-flex px-0">
                        <a href="#!"><img src="{{ asset('img/footer-soc-wa.svg') }}" alt=""></a>
                        <a href="#!"><img src="{{ asset('img/footer-soc-tg.svg') }}" alt=""></a>
                        <a href="#!"><img src="{{ asset('img/footer-soc-vb.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
       </section>
    </footer>
</body>
</html>
</html>