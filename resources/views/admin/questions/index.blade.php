@extends('admin.layouts.layout')
@section('Admin-main')
<!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Список вопросов</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <!-- <a href="" class="btn btn-primary mb-5">Добавить категорию</a> -->
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
<thead>
<tr>
<th style="width: 30px">#</th>
<th>Вопрос</th>
<th>Ответ</th>
<th>Редактировать</th>
</tr>
</thead>
<tbody>
@foreach($questions as $quest)
<tr>
<td>{{$quest->id}}</td>
<td>{{$quest->title}}</td>
<td >{{$quest->content}}</td>
<td>
  <a href="{{ route('questions.edit', $quest->id) }}" class="btn btn-info btn-sm float-left mr-1">
    <i class="fas fa-pencil-alt"></i>
  </a>
  <form action="{{ route('questions.destroy', $quest->id) }}" method="post" class="float-left">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
    <i class="fas fa-trash-alt"></i>
  </button>
  </form>
</td>
@endforeach
</tbody>
</table>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        {{ $questions->links() }}
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
@endsection