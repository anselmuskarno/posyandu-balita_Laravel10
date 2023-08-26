<!DOCTYPE html>
<html lang="en">
<!-- login23:11-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="shortcut icon" type="image/x-icon" href="user/assets/img/favicon.ico">
  <title>Posyandu</title>
  <link rel="stylesheet" type="text/css" href="user/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="user/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="user/assets/css/style.css">
  <!--[if lt IE 9]>
		<script src="user/assets/js/html5shiv.min.js"></script>
		<script src="user/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <div class="main-wrapper account-wrapper">
    <div class="account-page">
      <div class="account-center">
        <div class="account-box">
          <form action="/masuk" method="post" class="form-signin">
            @csrf
            <div class="account-logo">
              <a href="/login"><img src="user/assets/img/logo-dark.png" alt=""></a>
            </div>
            <div class="form-group">
              <label>Nomor Hp</label>
              <input type="text" autofocus="" class="form-control" name="nomor_hp">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group text-center">
              <button type="submit" class="btn btn-sm btn-primary ">Login</button>
              <a href="/" class="btn btn-sm btn-secondary text-white ">Kembali ke halaman Utama</a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="user/assets/js/jquery-3.2.1.min.js"></script>
  <script src="user/assets/js/popper.min.js"></script>
  <script src="user/assets/js/bootstrap.min.js"></script>
  <script src="user/assets/js/app.js"></script>
</body>


<!-- login23:12-->

</html>