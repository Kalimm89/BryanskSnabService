@extends('layouts.layouts')
@section('title', '404 страница не найдена')
@section('main')
<section class="container-fluid error px-0">
    <!-- <img src="{{ asset('img/404.png') }}" alt="" class="h-100 object-fit-cover d-block"> -->
    <section class="container">
        <div class="col d-flex flex-column align-items-center justify-content-center text-center">
            <h1 class="my-0">404</h1>
            <p class="mb-5">Извините, страница не найдена</p>
            <button class="error_btn btn" onclick="location.href='{{ route('home') }}';">Вернуться на главную</button>
        </div>
    </section>
</section>
@endsection