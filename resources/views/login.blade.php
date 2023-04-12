<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Kolese De Britto</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
  <div class="container" id="container" style="background-image: url(assets/image/image.gif)">
    <div class="form-container register-container">
      <form method="POST" action="">
        <h1>Register</h1>
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Username/NIS">
        <input type="password" placeholder="Password">
        <button>Register</button>
        
      </form>
    </div>

    <main class="form-container login-container">
      @if (Session::has('status'))
      <div class="alert alert-danger" role="alert">
        {{Session::get('message')}}
      </div>
      @endif
      <form method= "POST" action="">
        @csrf
        <h1>Login</h1>
        <input type="text" placeholder="Username/NIS">
        <input type="password" placeholder="Password">
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <label>Remember me</label>
          </div>
          <div class="pass-link">
            <a href="#">Forgot password?</a>
          </div>
        </div>
        <button type="submit">Login</button>
      </form>
    </main>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="title">Selamat Datang </h1>
          <h3 class="title"> Di Sistem Peminjaman Alat dan Ruangan</h3>
          <p>Jika anda sudah memiliki akun silahkan login disini</p>
          <button class="ghost" id="login">Login
            <i class="lni lni-arrow-left login"></i>
          </button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 class="title">Selamat Datang </h1>
          <h3 class="title"> Di Sistem Peminjaman Alat dan Ruangan</h3>
          <p>Jika anda belum memiliki akun, silahkan daftar terlebih dahulu.</p>
          <button class="ghost" id="register">Register
            <i class="lni lni-arrow-right register"></i>
          </button>
        </div>
      </div>
    </div>

  </div>

  <script src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>