@extends('layouts.layouts')
@section('main')
        <section class="intro container-fluid px-0 position-relative">
            <div id="myCarousel" class="carousel slide position-absolute z-n1" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/main-screen-1.png') }}" alt="" class="d-block w-100 h-auto">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/main-screen-2.png') }}" alt="" class="d-block w-100 h-auto">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/main-screen-3.png') }}" alt="" class="d-block w-100 h-auto">
                </div>
                </div>
            </div>
            <div class="container intro">
                <div class="row">
                    <div class="col d-flex flex-column align-items-center justify-content-center intro_desc text-center">
                        <h1>КРОСС-ДОКИНГ <br> И <span>ОТВЕТСТВЕННОЕ</span> ХРАНЕНИЕ ГРУЗОВ</h1>
                        <p>Быстрая выгрузка и своевременная отгрузка, гарантия сохранности продукции</p>
                        <button class="intro_btn btn">Подробнее</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container garant">
            <div class="row">
                <h2 class="col">Гарантии вашего успеха</h2>
            </div>
            <div class="row flex-column flex-md-row">
                <div class="col-md-4 col-12 d-flex flex-md-column flex-row gar_list justify-content-between  gap-2">
                    <p class="col gar_desc">Работаем с</p>
                    <p class="col gar_num d-flex align-items-center justify-content-start justify-content-md-center ">1993 <span class="ps-1">года</span></p>
                </div>
                <div class="col-md-4 col-12 d-flex flex-md-column flex-row gar_list gap-2">
                    <p class="col gar_desc">Складская площадь для хранения грузов</p>
                    <p class="col gar_num d-flex align-items-center justify-content-start justify-content-md-center ">13 000 <span class="ps-1">м2</span></p>
                </div>
                <div class="col-md-4 col-12 d-flex flex-md-column flex-row gar_list gap-2">
                    <p class="col gar_desc">Собственный тепловоз, подъездные пути</p>
                    <p class="col gar_num d-flex align-items-center justify-content-start justify-content-md-center ">30 <span class="ps-1">вагонов в день</span></p>
                </div>
            </div>
        </section>
        <section class="container about_us">
            <div class="row justify-content-between">
                <div class="col-12 col-md-6 col-xl-5">
                    <h2>О нас</h2>
                    <p>АО «Брянскснабсервис ОПР» является одним из крупных складских комплексов в г. Брянске
                         и Брянской области.</p>
                    <p>Было создано в 1993 г. на базе госпредприятия «Брянскоблснабсбыт». Благодаря выгодному
                         географическому расположению и развитой структуре транспортных путей, включающих в 
                         себя собственную железнодорожную ветку с тремя разветвлениями, позволяющую 
                         одновременно размещать до 30 вагонов, асфальтированную автомобильную дорогу и 
                         площадку для стоянки автотранспорта, дают возможность принимать большие потоки 
                         грузов как автомобильным, так и железнодорожным транспортом.</p>
                </div>
                <div class="col-12 col-md-6 col-xl-7">
                    <img src="{{ asset('img/about-us.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                </div>
            </div>
        </section>
        <section class="container params">
            <div class="row">
                <div class="col">
                    <h2>Характеристики терминала</h2>
                </div>
            </div>
                <div class="card-group row">
                    <div class="col-6 col-xl-3 p-2">
                        <div class="card">
                            <img src="{{ asset('img/param-1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Площадка для открытого хранения грузов 5000 кв.м</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 p-2">
                        <div class="card">
                            <img src="{{ asset('img/param-2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Собственная ЖД ветка, маневровый тепловоз</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 p-2">
                        <div class="card">
                            <img src="{{ asset('img/param-3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body card-body-dif">
                                <p class="card-text">Перевалка грузов <br> 
                                    через свою ЖД справку</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-3 p-2">
                        <div class="card">
                            <img src="{{ asset('img/param-4.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text">Козловой кран (г/п 10 тонн) для ЖД/Авто перевалки грузов</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="container serv">
            <div class="row">
                <h2>Наши услуги</h2>
            </div>
            <div class="row flex-column flex-md-row gap-3 gap-md-0">
                <a class="col" href="#">
                    <div class="card h-100">
                        <img src="{{ asset('img/serv-1.png') }}" class="card-img-top ct_img h-100" alt="...">
                          <p class="card-text position-absolute ct_one">Кросс-докинг</p>
                      </div>
                    </a>
                <div class="col d-flex card_right_serv flex-column">
                    <a class="card" href="#">
                        <img src="{{ asset('img/serv-2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-text">Аренда складов</h5>
                        </div>
                    </a>
                    <a class="card" href="#">
                        <img src="{{ asset('img/serv-3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-text">Аренда офисов</h5>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="container-fluid quest_form">
            <div class="container questions">
                <div class="row flex-column flex-md-row text-center text-md-start">
                    <div class="col">
                        <h3>Остались вопросы?</h3>
                        <p>Заполните форму и получите индивидуальную консультацию <br> по вашему вопросу.</p>
                    </div>
                    <div class="col">
                        <form class="mx-auto mx-md-0">
                            <div class="mb-2">
                                <input type="text" class="form-control inp_m" placeholder="Ваше имя*" aria-label="Имя пользователя" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="mb-2">
                                <input type="tel" class="form-control inp_m" placeholder="Контактный телефон*" aria-label="Телефон" aria-describedby="basic-addon2" required>
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control inp_m" placeholder="Название организации" aria-label="Организация" aria-describedby="basic-addon3">
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Я соглашаюсь с Политикой конфеденциальности и даю согласие на обработку моих персональных данных
                                </label>
                                <div class="invalid-feedback">
                                     Вы должны принять перед отправкой.
                                </div>
                            </div>
                            <button type="submit" class="btn">Получить консультацию</button>
                          </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="container pertners">
            <div class="row">
                <h2>Наши партнеры</h2>
            </div>
            <div class="row">
                <div class="card-group row mx-auto mx-md-0">
                    <div class="col-6 col-md-3 p-2">
                        <div class="card">
                            <img src="{{ asset('img/partner-1.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-6 col-md-3 p-2">
                        <div class="card">
                            <img src="{{ asset('img/partner-2.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-6 col-md-3 p-2">
                        <div class="card">
                            <img src="{{ asset('img/partner-3.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-6 col-md-3 p-2">
                        <div class="card">
                            <img src="{{ asset('img/partner-4.png') }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="container info">
            <div class="row">
                <h3>Больше информации</h3>
            </div>
            <div class="row">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach($questions as $quest)
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$quest->id}}" aria-expanded="false" aria-controls="flush-collapse{{$quest->id}}">
                        {{$quest->title}}
                        </button>
                      </h2>
                      <div id="flush-collapse{{$quest->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{$quest->content}}</div>
                      </div>
                    </div>
                @endforeach
                    <!-- <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            География поставок
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Зона доставки</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Документооборот
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Заполняемые документы</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThour" aria-expanded="false" aria-controls="flush-collapseThour">
                            Отслеживание поставки
                          </button>
                        </h2>
                        <div id="flush-collapseThour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">Отслеживание доставки грузов</div>
                        </div>
                      </div>
                  </div> -->
            </div>
        </section>
@endsection