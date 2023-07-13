@extends('admin.layouts.layout')
@section('Admin-main')
    <section class="content">
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Введите вопрос/ответ</h3>
</div>

<form role="form" method="post" action="{{ route('questions.update', ['question' => $question->id]) }}">
    @csrf
    @method('PUT')
<div class="card-body">
    <div class="form-group">
        <label for="title">Вопрос</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Вопрос">
    </div>
    <div class="form-group">
        <label for="editor">Ответ</label>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="editor" rows="5"></textarea>
    </div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Сохранить</button>
</div>
</form>
</div>
</section>
@endsection