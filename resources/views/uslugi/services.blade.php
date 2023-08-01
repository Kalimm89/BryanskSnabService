@extends('layouts.layouts')
@section('title', 'Услуги')
@section('main')
<section class="container about_cros services">
    <div class="row">
        <h2 class="col">Услуги</h2>
    </div>
    <div class="row card-group">
        <a href="{{ route('cross-docking') }}" class="col-12 col-md-6">
            <div class="card">
                <img src="{{ asset('img/uslugi/main-serv-1.png') }}" class="card-img-top w-100 h-100 object-fit-cover" alt="...">
                <div class="card-body">
                    <p class="card-text serv_cards">Кросс-докинг</p>
                 </div>
            </div>
        </a>
        <a href="{{ route('storage') }}" class="col-12 col-md-6">
            <div class="card">
                <img src="{{ asset('img/uslugi/main-serv-2.png') }}" class="card-img-top w-100 h-100 object-fit-cover" alt="...">
                <div class="card-body">
                    <p class="card-text serv_cards">Ответственное хранение</p>
                </div>
            </div>
        </a>
        <a href="{{ route('warehouse-rent') }}" class="col-12 col-md-6">
            <div class="card">
                <img src="{{ asset('img/uslugi/main-serv-3.png') }}" class="card-img-top w-100 h-100 object-fit-cover" alt="...">
                <div class="card-body">
                    <p class="card-text serv_cards">Аренда склада</p>
                </div>
            </div>
        </a>
        <a href="{{ route('office-rent') }}" class="col-12 col-md-6">
            <div class="card">
                <img src="{{ asset('img/uslugi/main-serv-4.png') }}" class="card-img-top w-100 h-100 object-fit-cover" alt="...">
                <div class="card-body">
                    <p class="card-text serv_cards">Аренда офиса</p>
                </div>
            </div>
        </a>
    </div>
</section>
@endsection