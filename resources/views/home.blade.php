@extends('layouts.app')

@section('content')

<body style="background: url(img/1.jpg) no-repeat center center fixed;
  -webkit-background-size:-cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
<div class="jumbotron" style="background: transparent;">
        <font color="blue"><h1><center>Selamat Datang Diweb</h1></center>
        <p class="lead">Biodata.</p>
        <p><a class="btn btn-lg btn-success" href="6" role="button">Biodata</a></p>
      </div>
 
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-3">
          <h2>Gallery</h2>
          <img src="img/3.jpg" class="img-thumbnail " alt="a1" style="max-height: 240px;max-width: 180px;">
          <p>Gallery Foto. </p>
          <p><a class="btn btn-primary" href="2" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-3">
          <h2>Data Table</h2>
          <img src="img/4.jpg" class="img-thumbnail " alt="a1" style="max-height: 150px;max-width: 150px;">
          <p>Data Table. </p>
          <p><a class="btn btn-primary" href="3" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-3">
          <h2>Paragraph</h2>
          <img src="img/7.jpg" class="img-thumbnail " alt="a1" style="max-height: 240px;max-width: 180px;">
          <p>Paragraph.</p>
          <p><a class="btn btn-primary" href="4" role="button">View details &raquo;</a></p>
        </div>
		<div class="col-lg-3">
          <h2>Beranda</h2>
          <img src="img/download.jpg" class="img-thumbnail " alt="a1" style="max-height: 240px;max-width: 180px;">
          <p>Beranda Saya.</p>
          <p><a class="btn btn-primary" href="5" role="button">View details &raquo;</a></p>
        </div>
      </div>
      </font>
</body>

@endsection
