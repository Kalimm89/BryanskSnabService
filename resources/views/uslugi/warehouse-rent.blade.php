@extends('layouts.layouts')
@section('title', 'Аренда складов')
@section('main')
<section class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('serv') }}" class="text-dark">Услуги</a></li>
    <li class="breadcrumb-item active" aria-current="page">Аренда складов</li>
  </ol>
</nav>
</section>
<section class="container about_cros">
    <div class="row">
        <h2 class="col">Аренда склада</h2>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6 order-md-0 order-1">
            <p class="p_first_cros">Обратитесь к нам прямо сейчас, и мы подберём оптимальное решение для вашего бизнеса! 
                ОАО «Брянскснабсервис ОПР» гарантирует высокое качество услуг и надёжное хранение вашего товара. 
                Доверьте свою логистику профессионалам и достигайте новых вершин вместе с нами.</p>
            <h4>Преимущества аренды наших складов:</h4>
            <h5>Разнообразие площадей и технические возможности</h5>
            <p>Мы предлагаем разнообразные складские помещения с площадью от 70 м2 до 2 000 м2, что позволяет выбрать 
                оптимальное решение для вашего объёма грузов. Наши склады оснащены как автомобильными, так и железнодорожными 
                рампами, обеспечивая удобство и гибкость в планировании вашей логистики.</p>
            <h5>Отапливаемые и неотапливаемые помещения</h5>
            <p>Понимая разнообразные потребности клиентов, мы предлагаем как отапливаемые, так и неотапливаемые склады. 
                Таким образом, у вас будет возможность выбрать наилучшие условия хранения для вашего товара, независимо от его особенностей.</p>
        </div>
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/warh -1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0 mt-5">
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/warh -2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="col-12 col-md-6">
        <h5>Оперативная выгрузка и погрузка</h5>
            <p>В нашем распоряжении имеется собственный тепловоз, что позволяет оперативно подавать железнодорожные вагоны непосредственн
                 к месту выгрузки. Это существенно экономит ваше время и ресурсы, облегчая процесс логистики.</p>
            <h5>Гибкая ценовая политика</h5>
            <p>Мы понимаем, что каждый клиент уникален, и стараемся предложить гибкую ценовую политику, соответствующую вашим потребностям
                 и бюджету. Индивидуальный подход к каждому заказчику – наша основная задача.</p>
            <h5>Профессиональная команда</h5>
            <p>Наша команда состоит из опытных и ответственных специалистов, которые обеспечивают бесперебойную работу складов, а также
                 готовы оказать поддержку и помощь в решении ваших вопросов и задач.</p>
            <h5>Стратегическое расположение</h5>
            <p>Наши складские помещения расположены в стратегически важных местах, что обеспечивает удобство в обслуживании и распределении
                 товаров. Прекрасно развитая инфраструктура позволяет минимизировать время и затраты на транспортировку грузов.</p>
        </div>
    </div>
</section>
<section class="container-fluid quest_form">
            <div class="container questions">
                <div class="row flex-column flex-lg-row text-center text-lg-start us_form align-items-center align-items-lg-start">
                    <div class="col us_form_desc">
                        <h3>Оставьте заявку <br> на Аренду склада</h3>
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
                            <img src="{{ asset('img/uslugi/serv-3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body card-body-dif">
                                <p class="card-text">Аренда склада</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-6 col-xl-3 p-2" href="{{ route('cross-docking') }}">
                        <div class="card">
                            <img src="{{ asset('img/uslugi/serv-5.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
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