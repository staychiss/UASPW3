<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location:login.php");
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>E-Learning USU</title>
        <link rel="icon" href="usu.png">
    </head>
    
    <body>
        <!--header start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="#"><img src="usu.png" style="max-height: 44px"></a>
            <a class="navbar-brand" href="#"><h3>E-Learning</h3></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Utama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#data">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Keluar</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Layanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#fasilitas">Fasilitas</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#peta">Lokasi</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#ipk">Hitung IPK</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#hak">Hak Cipta</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Jurusan Ilmu Komputer</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
          </div>
        </nav>
        <!--header end-->
        
        
        
        
        <!--landing page start-->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="bg2.jpg" class="d-block w-100">
              <div class="carousel-caption">
                <h1>Rumahmu dibalik gunung?</h1>
                <p>Tak perlu datang ke kampus. Pakai E-Learning saja.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="bg4.jpg" class="d-block w-100">
              <div class="carousel-caption">
                <h1>Harus melewati badai untuk pergi ke kampus?</h1>
                <p>Tak perlu bersusah payah. Pakai E-Learning saja.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="bg3.jpg" class="d-block w-100">
              <div class="carousel-caption">
                <h1>Gunung meletus?</h1>
                <p>Tak perlu khawatir. Pakai E-Learning saja.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!--landing page end-->
        
        
        <!--schedule start-->
        <div class="jumbotron" id="data">
            <div class="container">
            <div class="col-lg-12 text-center mt-5 mb-5">
                <h3 class="display-4">Daftar Mahasiswa</h3>
                <a href="tambah.php"><h4>Tambah Mahasiswa</h4></a>
            </div>
            <table class="table table-striped" style="text-align: center">
            <thead class="table-dark">
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </thead>
            
<!--            menampilkan data mahasiswa    -->
            
            <?php
              include_once 'koneksi.php';
                $no=1;
                $data=mysqli_query($koneksi, "select * from mahasiswa");
                while ($d=mysqli_fetch_array($data)){
            ?>
            
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['gender']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="edit.php ?nim=<?php echo $d['nim'];?>">edit</a>
                        <a href="hapus.php ?nim=<?php echo $d['nim'];?>">hapus</a>
                    </td>
                </tr>
                
            <?php
            }
            ?>
                
<!--            menampilkan data mahasiswa    -->
                
        </table>
        </div>      
        <!--schedule start-->
 
        <div id="ipk"></div>
        
        <div class="jumbotron mt-5">
            <p>Masukkan ipk Anda:</p>
                <input id="angka">
                <button type="button" onclick="valiDasi()">Hitung</button>
            <p id="hasil"></p>
        </div>
        <script>
            function valiDasi() {
                var x, text;
                x = document.getElementById("angka").value;
                if ( x < 0 || x > 4 || isNaN(x)) {
                    text = "Input tidak sesuai";
                }
                    else if (x>=3.5){
                    text = "Selamat Anda mendapatkan cumlaude"
                }
                    else if (x>=3){
                    text = "Anda lulus dengan nilai A"
                }
                    else if (x>=2){
                    text = "Anda lulus dengan nilai B"
                }
                    else if (x>=1){
                    text = "Anda lulus dengan nilai C"
                }
                    else if (x>=0){
                    text = "Anda tidak lulus"
                }
              document.getElementById("hasil").innerHTML = text;
        }
        </script>
        
        <!--bacot start-->
        
        <div class="container-fluid" id="fasilitas">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="display-3">Fasilitas</h3>
            </div>
        </div>
        <div class="row mt-5">
        <div class="col-lg-3 col-md-6">
            <div class="card" >
              <img src="Rumah-Sakit-USU-Medan.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Rumah Sakit USU</h5>
                <p class="card-text">Rampung pada tahun 2016, berlokasi tepat didepan USU. Menjadi objek vital bagi mahasiswa kedokteran USU.</p>
                <a href="http://rumahsakit.usu.ac.id/index.php/id/contact" class="btn btn-primary stretched-link">Kunjungi</a>
              </div>
            </div>
        </div>        
        <div class="col-lg-3 col-md-6">
            <div class="card" >
              <img src="bg1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card with stretched link</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card" >
              <img src="bg1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card with stretched link</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
              </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
              <img src="bg1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card with stretched link</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
              </div>
            </div>
        </div>
        </div>
        </div>
        <!--bacot end-->
        
        
        
        <!--peta start-->
        <div class="embed-responsive embed-responsive-16by9 mt-5" id="peta">
            <div class="container-fluid">
                <div id="map-container-google-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1119810132755!2d98.65415361414566!3d3.561681351472768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fe03ed8450b%3A0xe84941c195268efc!2sUniversitas%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1586388191614!5m2!1sid!2sid"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <!--peta akhir-->
        
        <!---footer awal-->
          <footer class="footer text-center mt-5 mb-5" id="hak">
              <img src="usu.png" width=55px class="mr-5">E-Learning USU<hr>&copy;2022 All Rights Reserved</footer>
        <!---footer akhir-->
        </div>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>