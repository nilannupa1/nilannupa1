<!DOCTYPE html>
<html lang="en">
  <body style="background-color:rgba(100, 148, 237, 0.611)">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      color: D1E9F6;
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color:rgb(141, 175, 239)">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color: black">Beranda</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="background-color:rgb(142, 175, 237); color:black">Product</a></li>
        <li><a href="#" style="color: black">About</a></li>
        <li><a href="#" style="color:black">Gallery</a></li>
        <li><a href="#" style="color: black">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron" style="background-color: cornflowerblue">
  <div class="container text-center">
    <h1 style="color:white">Beby Shop</h1>      
  </div>
</div>

{{-- <div class="row-2 text-center" style="padding-left: 2% "> --}}
  <div class="container">

    <div class="row" style="">
      @foreach ($produk as $item)
    <div class="col-sm-3 mt-5" style="margin-top: 40px">
        <div class="thumbnaii">
          <img src="{{ asset('/storage/foto/'.$item->foto) }}" alt="paris" width="270" >
          <br><br>
          <p style="margin-left: 40%"><strong>{{ $item->name }}</strong></p>
          <p style="margin-left: 40%">Rp.{{ $item->harga }}</p>
           <form action="/user/show/{{ $item ->id }}" method="get">
          @csrf
            <button type="submit" class="btn btn-primary" style="margin-left: 30%">Beli Sekarang</button>
            {{-- <button type="submit" class="btn btn-succes">Beli Sekarang</button> --}}
           </form>
        </div>
    </div>      
    @endforeach
    {{-- </div> --}}
   <div class="row" style="padding-bottom: 4%">
   <br>
   </div>
   <footer class="container-fluid text-center" style="font-weight: bold; background-color:rgb(124, 165, 242)">
     <p>Tentang Kami</p>
     <p>perusahaan yang bergerak di bidang distributor Perlengkapan Bayi,sebuah perusahaan yang menjadi distributor dalam pendistribusian produk perlengkapan untuk bayi maupun anak-anak.</p>
   </footer> 
  </div>

</body>
</html>