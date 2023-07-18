@extends('admin.layouts.layout')
@section('title', 'Редактировать пользователя')
@section('Admin-main')
    <section class="content">
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Редактировать пользователя</h3>
</div>

<form role="form" method="post" action="{{ route('userlist.update', ['userlist' => $question->id]) }}">
    @csrf
    @method('PUT')
<div class="card-body">
<div class="form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="{{$question->name}}">
    </div>
    <div class="form-group">
        <label for="email">Почта</label>
        <input type="text" name="email" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="{{$question->email}}">
    </div>
    <div class="form-group">
        <label for="password">Пароль</label>
        <input type="text" name="password" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="{{$question->password}}">
    </div>
    <div class="form-group">
        <label for="is_admin">Введите 1 если роль - админ</label>
        <input type="text" name="is_admin" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="{{$question->is_admin}}">
    </div>
    <!-- <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_admin">
            <label class="form-check-label">1</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_admin" checked="">
            <label class="form-check-label">0</label>
        </div>
    </div> -->
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>
</div>
</section>
@endsection
