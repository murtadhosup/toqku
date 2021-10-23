<!doctype html>
<html lang="en">
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
  <body>
    
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
                <a class="nav-link active" aria-current="page"href="/santri">Santri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pengurus">Pengurus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/buku">Buku</a>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar end -->

    <!-- header -->
        <div class="row">
          <hr>
          <h2 style="text-align: center">Data Santri</h2>
        </div>
    <!-- header end -->
    <div class="row">
      @foreach($data as $row)
        <div class="col-lg-4 mb-2">
          <div class="card">
          <div class="card-body">
            <p>Nama santri   :  {{$row['nama_santri']}}</p>
            <p>Jenis kelamin   :  {{$row['gender']}}</p>
            <p>Tanggal lahir      :  {{$row['tgl_lahir']}}</p>
            <p>Kota lahir :  {{$row['kota_lahir']}}</p>
            <p>Nama orangtua :  {{$row['nama_ortu']}}</p>
            <p>Alamat ortu      :  {{$row['alamat_ortu']}}</p>
            <p>No HP :  {{$row['HP']}}</p>
            <p>Email :  {{$row['email']}}</p>
            <p>Tanggal masuk :  {{$row['tgl_masuk']}}</p>
            <p>Status   :  {{$row['aktif']}}</p>
          </div>
          </div>
        </div>
        @endforeach
    </div>
    <!-- footer  -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12 mt-5 text-center">
                <h5><span class="circle-trafalgar text-center">T</span> Digital</h5>
                <p class="mt-3">TPQ Digital by alisa dan febry</p>
                <p>TPQ Digital 2021. All rights reserved</p>
              </div>
            </div>
          </div>
        </footer>
    <!-- footer ends -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>