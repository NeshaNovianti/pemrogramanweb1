<?php

include 'koneksi.php';

$data = $conn->prepare('SELECT * FROM companies');
$data->execute();
$companies = $data->fetchAll();

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <title>Halaman Menu Utama</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
<a class="navbar-brand" href="#">Samsung Store</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="colappse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#pricing">Promo</a>
              <a class="nav-item nav-link" href="#about">About</a>
      <div class="d-flex">
        <a href="halaman-login.php" class="btn btn-primary">Login</a>
      </div>
    </div>
  </nav>
  <!--  -->

  <!-- jumbotron -->
  <div id="background">
        <div class="jumbotron">
          <p> Samsung adalah satu-satunya, kalian akan tertarik dengan desainnya. Hemat $400-$500 di Samsung Galaxy S10</p>
          <h1>SAMSUNG</h1>
        </div>
      </div>
      <!-- jumbotron -->

  <!-- container atas -->
  <div id="home">
        <div class="isi">
          <div class="container atas">
            <h1>Pilihan Produk</h1>
            <p><strong> Dapatkan Berbagai Keuntungan Berbelanja Di Toko Nesha</strong></p>
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/hp.jpg" 
                width="300px">
                <h3>HANDPHONE</h3>
                <p class="text-justify"><strong>Handphone</strong>, Samsung terbaru selalu ditunggu-tunggu banyak kalangan
                  [...]</p>
                <a href="#" class="btn btn-primary" data-target="#info1"data-toggle="modal" >Selengkapnya</a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/laptop.jpg" 
                width="270px">
                <h3>LAPTOP</h3>
                <p class="text-justify"><strong>Laptop</strong>, samsung ini memiliki prosessor yang kuat dan tidak mudah
                  [...]</p>
                <a href="#" class="btn btn-primary" data-target="#info2"data-toggle="modal" >Selengkapnya</a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/tv.jpg" 
                width="170px">
                <h3>TV</h3>
                <p class="text-justify"><strong>Tv</strong>, Jelajahi berbagai TV yang menawarkan gambar, desain, dan
                  [...]</p>
                <a href="#" class="btn btn-primary" data-target="#info3"data-toggle="modal" >Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- container atas -->
      
    <!--modal-->
    <div class="modal fade" id="info1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-borderless">
                        <tr>
                        <p class="text-justify">Samsung terbaru selalu ditunggu-tunggu banyak kalangan.Informasi soal spek 
                          dan harga HP Samsung selalu langsung banyak diburuini tahan banting memiliki batrai yang kuat dan 
                          tahan lama. Samsung adalah seri perangkat telepon pintar berbasis Android yang dirancang, diproduksi
                           dan dipasarkan oleh Samsung Electronics. Lini produk seri galaxy ini meliputi Seri Galaxy S sebagai
                            smartphone high-end, Seri Galaxy Note sebagai tablet dan phablet dengan fungsionalitas tambahan 
                            stylus dan Seri Galaxy Tab sebagai tablet.
                        </p>
                        </tr>
                        <tr>
                          <th> Type </th>
                          <td>: 1. Samsung Galaxy A</td>
                          <td>  2. Samsung Galaxy S</td>
                          <td>  3. Samsung Galaxy C</td>
                        </tr>
                        <tr>
                          <th></th>
                          <td>  4. Samsung Galaxy Core</td>
                          <td>  5. Samsung Galaxy Grand</td>
                          <td>  6. Samsung Galaxy Note</td>
                       </tr> 
                       <tr>
                        <th></th>
                        <td>  7. Samsung Galaxy Series 2019</td>
                        <td>  8. Samsung Galaxy Mega 2018</td>
                        <td>  9. Samsung Galaxy On 2020</td>
                  </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
        </div>
    </div>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="info2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <div class="modal-content">
     <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Detail Informasi</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body">
         <div class="row">
             <div class="col-md-12">
                 <table class="table table-borderless">
                     <tr>
                     <p class="text-justify"> Jelajahi berbagai TV yang menawarkan gambar, desain, dan kualitas suara terbaik dengan harga terbaik di Indonesia Dengan Desain Yang Inovatif Dan Teknologi Terbaru Yang Canggih.

                     </p>
                     </tr>
                     <tr>
                       <th> Type </th>
                       <td>: 1. Samsung Tab A7 LTE (SM-T505)</td>
                       <td>  2. Samsung Galaxy S7 LTE</td>
                       <td>  3. Samsung Galaxy S6 Lite (SM-P615)</td>
                     </tr>
                     <tr>
                       <th></th>
                       <td>  4. Samsung Galaxy Tab A 2019</td>
                       <td>  5. Samsung Galaxy Tab S4 2018</td>
                       <td>  6. Samsung Galaxy Tab S3 2017</td>
                    </tr> 
                    <tr>
                     <th></th>
                     <td>  7. Samsung Galaxy Series 2019</td>
                     <td>  8. Samsung Galaxy Mega 2018</td>
                     <td>  9. Samsung Galaxy On 2020</td>
               </tr>
                 </table>
             </div>
         </div>
     </div>
     <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
     </div>
 </div>
 </div>
</div>
</div>
</div>

<div class="modal fade" id="info3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <div class="modal-content">
     <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Detail Informasi</h5>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
     </div>
     <div class="modal-body">
         <div class="row">
             <div class="col-md-12">
                 <table class="table table-borderless">
                     <tr>
                     <p class="text-justify">Samsung terbaru selalu ditunggu-tunggu banyak kalangan.Informasi soal spek dan harga HP Samsung selalu langsung banyak diburuini tahan banting memiliki batrai yang kuat dan tahan lama. Samsung adalah seri perangkat telepon pintar berbasis Android yang dirancang, diproduksi dan dipasarkan oleh Samsung Electronics. Lini produk seri galaxy ini meliputi Seri Galaxy S sebagai smartphone high-end, Seri Galaxy Note sebagai tablet dan phablet dengan fungsionalitas tambahan stylus dan Seri Galaxy Tab sebagai tablet.menawarkan kualitas warna yang tajam dengan Wide Colour Enhancer. Menonton TV serasa di bioskop juga makin dipermudah dengan adanya input HDMI dan fitur ConnectShare Movie dengan plug USB. Untuk hemat listrik, Samsung TV UA32J4303 ini juga 4 Ticks Energy Efficiency jadi listrik di rumah makin hemat!
                     </p>
                     </tr>
                     <tr>
                       <th> Type </th>
                       <td>: 1. 43" Crystal UHD 4K Smart TV TU6900 (2020)</td>
                       <td>  2. 70" TU7000 Crystal UHD 4K Smart TV (2020)</td>
                       <td>  3. 55" TU8500 Crystal UHD 4K Smart TV (2020)</td>
                     </tr>
                     <tr>
                       <th></th>
                       <td>  4. 82" Crystal UHD 4K Smart TV TU8000 (2020)</td>
                       <td>  5. Smart TV 4K UHD 65 inch RU7400</td>
                       <td>  6. 75” UHD 4K Smart TV RU7100 Series 7 (2019)</td>
                    </tr> 
                    <tr>
                     <th></th>
                     <td>  7. 50" TU500 Crystal UHD 4K Smart tv (2020)</td>
                     <td>  8. Smart TV 4K UHD 55 inch RU600</td>
                     <td>  9. Smart TV 4K UHD 75 inch RU800</td>
               </tr>
                 </table>
             </div>
         </div>
     </div>
     <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-dismiss="modal">KEMBALI</button>
     </div>
 </div>
 </div>
</div>
</div>
</div>

      <!-- container bawah -->
      <div id="pricing">
      <div class="container bawah">
        <h1>Promo Terbaru</h1>
        <p>Dapatkan info promo terbaru disini</p>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-14 col-xs-14"><img class="img-circle" src="assets/img/promo.jpg" 
            width="350px">
            <p class="text-center"><strong></strong></p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-14 col-xs-14"><img class="img-circle" src="assets/img/promo2.jpg" 
            width="350px">
            <p class="text-center"><strong></strong></p>
          </div><div class="col-lg-4 col-md-4 col-sm-14 col-xs-14"><img class="img-circle" src="assets/img/promo3.jpg" 
            width="350px">
            <p class="text-center"><strong></strong></p>
          </div>
          </div>
          </div>
        </div>
      <!-- container bawah -->

  </div>
  <div class="row ">
    <div class="col-md-12 text-center">
      <p class="font-weight-bold">
      @Copyright by 18111120_NeshaNovianti_TIFRP18CIDB_UASWEB1
      </p>
    </div>
  </div>

</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>