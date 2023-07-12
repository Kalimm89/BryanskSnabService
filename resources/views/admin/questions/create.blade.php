@extends('admin.layouts.layout')
@section('Admin-main')
    <section class="content">
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Введите вопрос/ответ</h3>
</div>

<form role="form" method="post" action="{{ route('questions.store') }}">
    @csrf
<div class="card-body">
    <div class="form-group">
        <label for="title">Вопрос</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Вопрос">
    </div>
    <div class="form-group">
        <label for="title">Ответ</label>
        <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" id="content" placeholder="Ответ">
    </div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>
</div>
</section>

@endsection