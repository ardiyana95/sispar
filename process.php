<?php 
  require_once('userDb.php');
  $UserDb     = new User();

  if (isset($_POST['submit'])) {
    $UserDb->Id    = $_POST['id'];
    $UserDb->Name  = $_POST['name'];
    $UserDb->Email = $_POST['email'];
    $Posted        = $UserDb->Save();
    if($Posted) {
      echo "<script type='text/javascript'>alert('Submitted successfully!');</script>";

      $age = $_POST['age'];
      $valueAge = 5; // dewasa
      if ($age < 13) { // anak-anak
        $valueAge = 7;
      } else if ($age < 20) { // remaja
        $valueAge = 6;
      }      

      $merokok = $_POST['rdRokok'];
      $valueMerokok = 3; // bukan perokok
      $valueLamaRokok = 0;
      $valueBanyakRokok = 0;
      if ($merokok == "ya") { 
        $valueMerokok = 30; // perokok

        $lamaRokok = $_POST['lamaRokok'];
        $valueLamaRokok = 8; // perokok > 10 thn
        if ($lamaRokok < 1) { // < 1 thn
          $valueLamaRokok = 3;
        } else if ($lamaRokok < 2) { // < 2 thn
          $valueLamaRokok = 4;
        } else if ($lamaRokok < 5) { // < 5 thn
          $valueLamaRokok = 5;
        } else if ($lamaRokok <= 10) { // <= 10 thn
          $valueLamaRokok = 7;
        }

        $banyakRokok = $_POST['banyakRokok'];
        $valueBanyakRokok = 10; // >= 20 batang
        if ($banyakRokok < 5) { // < 5 batang
          $valueBanyakRokok = 4;
        } else if ($banyakRokok < 10) { // < 10
          $valueBanyakRokok = 5;
        } else if ($banyakRokok < 20) { // < 20
          $valueBanyakRokok = 8;
        }
      }

      $terpapar = $_POST['rdTerpapar'];
      $valueTerpapar = 3; // lingkungan tidak Terpapar
      $valueLamaTerpapar = 0;
      if ($terpapar == "ya") { // terpapar
        $valueTerpapar = 7;

        $lamaTerpapar = $_POST['lamaTerpapar'];
        $valueLamaTerpapar = 8; // terpapar asap rokok > 10 thn
        if ($lamaTerpapar < 1) {
          $valueLamaTerpapar = 3; // < 1 thn
        } else if ($lamaTerpapar < 2) {
          $valueLamaTerpapar = 4; // < 2 thn
        } else if ($lamaTerpapar < 5) {
          $valueLamaTerpapar = 5; // < 5 thn
        } else if ($lamaTerpapar <= 10) {
          $valueLamaTerpapar = 7;
        }
      }

      $keluargaMerokok = $_POST['rdKeluargaMerokok'];
      $valueKeluargaMerokok = 2; //anggota keluarga tidak ada yang merokok
      $valueBanyakKeluargaMerokok = 0;
      if ($keluargaMerokok == "ya") {
        $valueKeluargaMerokok = 10; // ada anggota keluarga yang merokok

        $banyakKeluargaMerokok = $_POST['banyakKeluargaMerokok'];
        $valueBanyakKeluargaMerokok = 5; // ada 5 anggota keluarga yang merokok
        if ($banyakKeluargaMerokok < 2) {
          $valueBanyakKeluargaMerokok = 2; // ada 2
        } else if ($banyakKeluargaMerokok < 3) {
          $valueBanyakKeluargaMerokok = 3; // ada 3
        }
      }

      $olahraga = $_POST['rdOlahraga'];
      $valueOlahraga = 10; // tidak berolahraga
      if ($olahraga == "ya") {
        $valueOlahraga = 2; // berolahraga
      }

      $minum = $_POST['minum'];
      $valueMinum = 2; // minum air > 2 liter
      if ($minum < 1) {
        $valueMinum = 7; // minum < 1 liter
      } else if ($minum <= 2) {
        $valueMinum = 4; // minum < 2
      }

      $summary = $valueAge + $valueMerokok + $valueLamaRokok + $valueBanyakRokok + $valueTerpapar + $valueLamaTerpapar + $valueKeluargaMerokok + $valueBanyakKeluargaMerokok + $valueOlahraga + $valueMinum;

      var_dump($summary);
    }
    else {
      echo "
      <script type='text/javascript'>alert('Failed!');
        window.open('app.html', '_self');
      </script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
  
</body>
</html>