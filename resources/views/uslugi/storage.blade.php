@extends('layouts.layouts')
@section('title', 'Ответственное хранение')
@section('main')
<section class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('serv') }}" class="text-dark">Услуги</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ответственное хранение</li>
  </ol>
</nav>
</section>
<section class="container about_cros">
    <div class="row">
        <h2 class="col">Ответственное хранение</h2>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6 order-md-0 order-1">
            <p class="p_first_cros">Производителям и компаниям, которые занимаются оптовой и розничной торговлей, 
                важно сосредоточиться на реализации качественной и конкурентоспособной продукции. 
                Однако поиск удобных способов временного хранения сырья и готовых товаров отнимает драгоценное время.</p>
            <p>Многие торговые и промышленные организации, индивидуальные предприниматели не имеют собственных складов, 
                но испытывают необходимость в размещении различных грузов (реализуемой продукции, расходных материалов, 
                оборудования и т.п.). Это затрудняет ведение бизнеса, тормозит производственные и коммерческие процессы.</p>
            <p>Складской комплекс АО «Брянскснабсервис ОПР» оказывает услуги ответственного хранения грузов в Брянске. 
                В нашем лице вы обретёте надёжного партнёра, который предоставит не только место для размещения товаров, 
                продукции или других вещей, но и гарантии полной сохранности вашего имущества, удобные логистические 
                инструменты, что облегчит ведение бизнеса в любой сфере деятельности.</p>
        </div>
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/storage-1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/storage-2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="col-12 col-md-6">
            <h4 class="pt-md-5 pt-0">Кому подойдет услуга ответственного хранения</h4>
            <p>Услуга ответственного хранения грузов позволит вам существенно сэкономить, поскольку при таком 
                подходе вы не переплачиваете за аренду неиспользованной площади. Вы оплачиваете по факту, 
                то есть платите только за то место, которое ваш груз занимает на складе. Когда вам не нужен 
                склад, вы не используете эту услугу и, соответственно, не оплачиваете её. Ответственное 
                хранение подойдёт для размещения негабаритных и крупногабаритных грузов:</p>
            <ol>
                <li>компаниям, которым не хватает собственных ресурсов и им необходимо дополнительное место для хранения грузов;</li>
                <li>организациям, которым не нужен постоянный склад, поскольку   они предлагают сезонные товары или услуги;</li>
                <li>организациям с ограниченным бюджетом, у которых нет возможности строить и обслуживать свой собственный склад;</li>
                <li>компаниям, которые пока не хотят строить собственное хранилище.</li>
            </ol>
        </div>
    </div>
</section>
<section class="container-fluid quest_form">
            <div class="container questions">
                <div class="row flex-column flex-lg-row text-center text-lg-start us_form align-items-center align-items-lg-start">
                    <div class="col us_form_desc">
                        <h3>Оставьте заявку <br> на Ответственное хранение</h3>
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
                            <img src="{{ asset('img/uslugi/serv-5.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Кросс-докинг</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-6 col-xl-3 p-2" href="{{ route('storage') }}">
                        <div class="card">
                            <img src="{{ asset('img/uslugi/serv-3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body card-body-dif">
                            <p class="card-text">Ответственное хранение</p>
                            </div>
                        </div>
                    </a>
                </div>
        </section>
@endsection