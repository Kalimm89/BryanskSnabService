@extends('layouts.layouts')
@section('title', 'Кросс-докинг')
@section('main')
<section class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('serv') }}" class="text-dark">Услуги</a></li>
    <li class="breadcrumb-item active" aria-current="page">Кросс-докинг</li>
  </ol>
</nav>
</section>
<section class="container about_cros">
    <div class="row">
        <h2 class="col">Кросс-докинг</h2>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6 order-md-0 order-1">
            <p class="p_first_cros">Сегодня среди услуг складов становится все более популярным кросс-докинг (от англ. cross – «напрямую пересекать», 
                docking – «стыковка, причаливание»). Данный метод означает «сквозное» складирование, т. е. осуществляется приёмка 
                товара и его быстрая дальнейшая отправка. Такой логистический приём может позволить снизить расходы на длительное 
                размещение и хранение грузов, а также значительно сэкономить время доставки продукции к потребителю. 
                Складской комплекс АО «Брянскснабсервис ОПР» предлагает услугу кросс-докинга в Брянске и области.</p>
            <h4>Выделяют два типа кросс-докинга</h4>
            <h5>Одноэтапный</h5>
            <p>Без аренды места для хранения. В данном случае груз принимается на складе и там же расформировывается и 
                перемещается в несколько автомобилей, после чего происходит дальнейшая отгрузка напрямую к покупателю 
                или на другой склад.</p>
            <h5>Двухэтапный</h5>
            <p>Его применяют, когда груз необходимо дополнительно обработать, например, укомплектовать по партиям, переоформить, 
                промаркировать и т.д. В данном случае используется услуга временного хранения на складе.</p>
        </div>
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/ab-cros-1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/ab-cros-2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="col-12 col-md-6">
            <h4 class="pt-md-5 pt-0">Сфера применения кросс-докинга</h4>
            <p>Данную технологию используют для различных категорий груза, например:</p>
            <ol>
                <li>продукты питания с небольшим сроком годности, которые нежелательно долго хранить;</li>
                <li>срочные поставки товаров;</li>
                <li>продукция с высоким спросом;</li>
                <li>грузы негабаритного размера;</li>
                <li>сезонные товары;</li>
                <li>заказы с экспресс-доставкой.</li>
            </ol>
        </div>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6 order-md-0 order-1">
            <h4 class="pt-md-5 pt-0">Услуги кросс-докинга</h4>
            <p>Кросс-докинг в комплексе АО «Брянскснабсервис ОПР» может включать в себя несколько различных услуг:</p>
            <ol>
                <li>ручная или механизированная погрузка и разгрузка;</li>
                <li>переборка, расформирование на меньшие партии или, наоборот, сборка в одну большую;</li>
                <li>перемещение товара на складе (ручное или с помощью специальной техники);</li>
                <li>временное хранение;</li>
                <li>обработка грузов, например упаковка, маркировка, палетирование и др.</li>
            </ol>
        </div>
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/ab-cros-3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
    </div>
</section>
<section class="container-fluid quest_form">
            <div class="container questions">
                <div class="row flex-column flex-lg-row text-center text-lg-start us_form align-items-center align-items-lg-start">
                    <div class="col us_form_desc">
                        <h3>Оставьте заявку <br> на Кросс-докинг</h3>
                        <p class="mx-auto mx-xl-0">В бизнесе очень важно качество и скорость предоставляемых услуг, поэтому мы оперативно свяжемся с вами и расскажем об интересующих вас деталях</p>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <form class="mx-auto mx-md-0" method="post" action="{{ route('сonsultation') }}">
                            @csrf
                            <div class="mb-2">
                                <input type="text" class="form-control inp_m" placeholder="Ваше имя*" name="name" aria-label="Имя пользователя" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="mb-2">
                                <input type="tel" class="form-control inp_m" placeholder="Контактный телефон*" name="tel" aria-label="Телефон" aria-describedby="basic-addon2" required>
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control inp_m" placeholder="Название организации" name="organ" aria-label="Организация" aria-describedby="basic-addon3">
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
                            <button type="submit" class="btn">Оставить заявку</button>
                          </form>
                    </div>
                </div>
            </div>
</section>
<section class="container params uslugi_params">
            <div class="row">
                <div class="col">
                    <h2>Другие услуги</h2>
                </div>
            </div>
                <div class="card-group row">
                    <a class="col-6 col-xl-3 p-2" href="{{ route('office-rent') }}">
                        <div class="card">
                            <img src="{{ asset('img/uslugi/serv-1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Аренда офиса</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-6 col-xl-3 p-2" href="{{ route('warehouse-rent') }}">
                        <div class="card">
                            <img src="{{ asset('img/uslugi/serv-2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Аренда склада</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-6 col-xl-3 p-2" href="{{ route('cross-docking') }}">
                        <div class="card">
                            <img src="{{ asset('img/uslugi/serv-3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body card-body-dif">
                                <p class="card-text">Кросс-докинг</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-6 col-xl-3 p-2" href="{{ route('storage') }}">
                        <div class="card">
                            <img src="{{ asset('img/uslugi/serv-4.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text">Ответственное хранение</p>
                            </div>
                        </div>
                    </a>
                </div>
        </section>
@endsection