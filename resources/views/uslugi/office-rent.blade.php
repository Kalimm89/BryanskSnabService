@extends('layouts.layouts')
@section('title', 'Аренда офисов')
@section('main')
<section class="container about_cros">
    <div class="row">
        <h2 class="col">Аренда офиса</h2>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6 order-md-0 order-1">
            <p class="p_first_cros">ОАО «Брянскснабсервис ОПР» рад предложить вам не только высококлассные услуги по складскому хранению грузов, но 
                и уникальные возможности аренды офисных помещений, спроектированных с учётом самых современных стандартов и требований бизнеса. 
                Мы представляем комфортабельные и функциональные офисы, которые станут вашей операционной базой для успешного развития бизнеса.</p>
            <h4>Преимущества аренды офисных помещений у нас:</h4>
            <h5>Разнообразие площадей и форматов</h5>
            <p>Независимо от размера вашей компании, мы предлагаем офисные помещения различной площади, чтобы полностью удовлетворить вашим потребностям. 
                От небольших кабинетов для стартапов и небольших предприятий до просторных open space для крупных команд — у нас вы найдёте идеальный вариант, 
                который позволит вашему бизнесу расти и развиваться..</p>
            <!-- <h5>Двухэтапный</h5>
            <p>Его применяют, когда груз необходимо дополнительно обработать, например, укомплектовать по партиям, переоформить, 
                промаркировать и т.д. В данном случае используется услуга временного хранения на складе.</p> -->
        </div>
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/office-1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/office-2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="col-12 col-md-6 mt-4">
        <h5>Охраняемые здания и безопасность</h5>
        <p>Мы понимаем, что безопасность вашего бизнеса - приоритет. Все наши офисные здания оборудованы современными системами безопасности, 
            включая видеонаблюдение, охрану и электронный контроль доступа, обеспечивая полную защиту вашего бизнеса и данных.</p>
        <h5>Удобное местоположение</h5>
        <p>Наши офисные помещения находятся в стратегически выгодных местах, обеспечивая удобный доступ как для сотрудников, так и для клиентов. Прекрасно развитая транспортная инфраструктура 
            позволит избежать лишних неудобств и сэкономить время на коммутировании.защиту вашего бизнеса и данных.</p>
        <h5>Инфраструктура для комфорта</h5>
        <p>Мы стремимся обеспечить наших арендаторов всем необходимым для успешной работы. В административном здании предоставлена столовая, 
            где сотрудники могут отдохнуть и восстановить силы. Кроме того, у нас вы найдёте современные переговорные комнаты для проведения важных встреч и совещаний.</p>
        </div>
    </div>
    <div class="row flex-column flex-md-row mb-4 mb-md-0">
        <div class="col-12 col-md-6 order-md-0 order-1 mt-4">
            <h5>Гибкие условия аренды</h5>
        <p>Мы ценим каждого клиента и понимаем, что каждый бизнес уникален. Поэтому предоставляем гибкие условия аренды, которые позволят вам выбрать наиболее подходящий вариант. 
            Вы можете адаптировать условия аренды под свои потребности, выбрать удобный срок аренды и форму оплаты.</p>
        <h5>Поддержка и забота</h5>
        <p>Наша команда всегда готова оказать вам полную поддержку и помощь в решении возникающих вопросов. Мы ценим долгосрочные взаимоотношения с нашими арендаторами и стремимся
             предоставить максимально комфортные условия для успешной работы вашего бизнеса.Не упустите возможность создать свою успешную базу операций в офисных 
             помещениях ОАО «Брянскснабсервис ОПР». Обратитесь к нам прямо сейчас, и наша команда поможет вам выбрать и адаптировать идеальное офисное пространство для вашего бизнеса!</p> 
        </div>
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/uslugi/office-3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
        </div>
    </div>
</section>
<section class="container-fluid quest_form">
            <div class="container questions">
                <div class="row flex-column flex-lg-row text-center text-lg-start us_form align-items-center align-items-lg-start">
                    <div class="col us_form_desc">
                        <h3>Оставьте заявку <br> на Аренду офиса</h3>
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
                            <img src="{{ asset('img/uslugi/serv-3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body card-body-dif">
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
                            <img src="{{ asset('img/uslugi/serv-4.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text">Ответственное хранение</p>
                            </div>
                        </div>
                    </a>
                </div>
        </section>
@endsection