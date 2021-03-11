<?php

$angka1 = "";
$angka2 = "";
$hasil = "";
$jmlhderet = "";
$hasilderet = "";
if(isset($_POST['submit'])){
    $angka1=$_POST["angka1"];
    $angka2=$_POST["angka2"];
    $jmlhderet=$_POST["jmlhderet"];

    $x=$angka1;
    $y=$angka2;
    $n=$jmlhderet;

    $hasilderet = $x.",".$y;
    for ($i=0; $i<$n-2; $i++){
        $hasil=$x+$y;
        $x=$y;
        $y=$hasil;
        $hasilderet = $hasilderet.",".$hasil;
    }



}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- my CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Halaman Fibonacci</title>
  </head>
  <body>
  <section id="section">
   
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">Arista Dwijaya</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Pricing</a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item btn btn-primary tombol" href="#">Join Us</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir Navbar -->


  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
  <form method="POST" action="#" class="form-horizontal form form-container">
    <div class="container">
      <div class="form-group">
        <label class="control-label col-sm-3">Angka Pertama:</label>
            <div class="col-sm-9">
        <input type="text" class="form-control input" value="<?php echo $angka1;?>"
           name="angka1" required>
            </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3">Angka Kedua:</label>
            <div class="col-sm-9">
        <input type="text" class="form-control input" value="<?php echo $angka2;?>"
            name="angka2" required>
            </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3">Jumlah Deret:</label>
            <div class="col-sm-9">
        <input type="text" class="form-control input" value="<?php echo $jmlhderet;?>"
            name="jmlhderet" required>
            </div>
      </div>

<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
        <button type="submit" class="btn-primary btn btn-primary tombol"
            name="submit">Hitung</button>
    </div>
        <div class="form-group">
          <h5 color :"white">Hasil:</h5>
          <h4> <?php echo $hasilderet;?> </h4>
        </div>
</div>
    </div>
  </div>
   </section>
  <!-- akhir Jumbtron -->
  <!-- container -->
  <!-- akhir container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
