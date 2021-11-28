<!DOCTYPE html>
<html>
    <head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./images/logo.svg" type="image/gif" sizes="16x16">

    <!-- css -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <title>TPQ Digital</title>
  </head>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#">
              <h3>TPQ Digital</h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/santri">Santri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pengurus">Pengurus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/buku">Buku</a>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar end -->
    <style>
        form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }

}
body{
    height: 100vh;
    background-image: url(https://dosenit.com/wp-content/uploads/2020/10/Gunung-Fuji-Jepang-1024x640-1.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
    </style>
</head>
<body>

<h2 style="text-align: center">Registrasi Form</h2>

<form method="POST" action="/dashboard/login/authenticate">
@csrf
<div class="container">
    <h1>Register</h1>
      <form>
          <label>Username</label>
          <br>
          <input type="text">
          <br>
          <label>Email</label>
          <br>
          <input type="text">
          <br>
          <label>Password</label>
          <br>
          <input type="password">
          <br>
          <button>Register</button>
          <p> Sudah punya akun?
            <a  href="/login">Login di sini</a>
          </p>
      </form>
  </div>


</body>
</html>
