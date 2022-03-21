<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form nilai mahasisiwa</title>
</head>
<body>
<?php
class nilaimahasiswa {
    var $matkul;
    var $nilai;
    var $nim;

    function __construct($nim,$matkul,$nilai) {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        
        
    }
    function grade() {
        if ($this->nilai >= 56){
            return 'LULUS';
        }else {
            return 'TIDAK LULUS';
        }
    }
    function hasil() {
        if ($this->nilai <= 35){
            return 'E';
        }elseif ($this->nilai <= 55){
            return 'D';
        }elseif ($this->nilai <= 69){
            return 'C';
        }elseif ($this->nilai <= 84){
            return 'B';
        }elseif ($this->nilai <= 100){
            return 'A';
        }
    }
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light container mt-4 shadow-sm p-3 mb-5 rounded">
  <a class="navbar-brand" href="#">WEB02</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Review PHP
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          PHP5 OOP
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container mt-4">
    <h5>Form Nilai Siswa</h5>
    <div class="border-top border-dark mt-4"></div>
</div>
<form class="container mt-4" method="POST" autocomplete="off" action="nilai_mahasiswa.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nim</label> 
    <div class="col-8">
      <input id="text" name="nim" placeholder="Masukan Nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="#">Pilih Mata Kuliah</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Statistik Probilitas">Statistik dan Probilitas</option>
        <option value="Pemrograman Web2">Pemrograman Web 2</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" placeholder="Masukan Nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
  <div class="border-top border-dark mt-4"></div>
  <br>
  <?php

    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $nim = $_POST['nim'];
    $data = new nilaimahasiswa($nim,$matkul,$nilai);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["proses"])){
        echo 'NIM : '.$data->nim;
        echo '<br/>MATA KULIAH : '.$data->matkul;
        echo '<br/>NILAI : '.$data->nilai;
        echo '<br/>Hasil : '.$data->hasil();
        echo '<br/>Grade : '.$data->grade();
        }
    }else{
        echo '*Format belum terisi';
    }
  ?>
<footer>
  <div class="border-top border-dark mt-4"></div>
  <div class="mt-4">
    <p><b>Lab Pemograman Web lanjutan</b></p>
    <p>Dosen Sirojul Munir S.SI,M.Kom</p>
    <p>STT-NF-Kampus B</p>
    </div>
</footer>
</form>

</body>
</html>