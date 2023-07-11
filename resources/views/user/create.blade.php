<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Регистрация</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  @vite(['public/assets/admin/plugins/fontawesome-free/css/all.min.css',
             'public/assets/admin/dist/css/adminlte.min.css',
             'public/assets/admin/plugins/jquery/jquery.min.js',
             'public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
             'public/assets/admin/dist/js/adminlte.min.js'])
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <b>Кросс Докинг</b>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Регистрация нового пользователя</p>
      <div class="card">
            <div class="body">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
      <form action="{{ route('register.store') }}" method="post">
      @csrf
        <div class="input-group mb-3">
        <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Ваше имя" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" minlength="6" placeholder="Придумайте пароль" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-4" style="max-width: 100%;">
            <button type="submit" class="btn btn-primary btn-block">Регистрация</button>
          </div>
        </div>
      </form>
      
      <!-- <a href="#!" class="text-center">У вас уже есть аккаунт?</a> -->
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  <div>
      <a href="/login" class="text-center">У вас уже есть аккаунт?</a>
      </div>
</div>
</body>
</html>