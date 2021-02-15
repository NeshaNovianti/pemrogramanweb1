<?php

include 'koneksi.php';

if (isset($_SESSION['id']) == 0) { /* Halaman ini tidak dapat diakses jika belum ada yang login */
  header('Location: halaman-login.php');
}

$id_user = $_SESSION['id'];
$data = $conn->prepare("SELECT username FROM user WHERE id_user =$id_user");
$data->execute();
$user = $data->fetch();

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
   <link rel="stylesheet" href="assets/css/tampilan.css">

  <title>Halaman Menu Utama</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container">
            <h3><i class="fas fa-cart-plus text-succesess mr-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="#">NESHA STORE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Reseller <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="halaman-ubah-profile.php">Ubah Profile</a>
                </li>
              </ul>
                                 
            </ul>
            <form class="form-inline my-1 my-lg-0">
                <p class="font-weight-bold">Hi, <?php echo $user['username'] ?></p>
                <li><a href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" class="btn btn-danger ml-3">logout</a></li>
              </ul>
            </form>
            </div>
        </div>
      </nav>

      <div class="row mt-5">
            <div class="col-md-2 bg-light">
                <ul class="list-group list p-2 pt-4">
                    <li class="list-group-item bg-warning"><i class="fas fa-list"></i><b> KATEGORI PRODUK</b></li>
                    <li class="list-group-item"><i class="fas fa-angle-right"></i>Handphone</li>
                    <li class="list-group-item"><i class="fas fa-angle-right"></i>Laptop</li>
                    <li class="list-group-item"><i class="fas fa-angle-right"></i>TV</li>
                    <li class="list-group-item"><i class="fas fa-angle-right"></i>Wristwatch</li>
                    <li class="list-group-item"><i class="fas fa-angle-right"></i>Peralatan Electronik</li>
                </ul>
            </div>
            <div class="col-md-10">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="(../../assets/img/utama1.jpg" class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img src="(../../assets/img/utama.jpg" class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img src="(../../assets/img/utama2.jpg" class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                  <h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>


  <!--  -->
  <div class="container">
    <a href="form-tambah-company.php" class="btn btn-success">ADD Product</a>
    <!-- <hr>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <h4 class="font-weight-bold text-center font-italic">FLASH SALE!</h4>
      </div>
    </div> -->
    <hr>
    <?php if ($companies > 0) { ?>
      <div class="row">
        <!-- <div class="card-deck mt-5 "> -->
        <?php for ($i = 0; $i < count($companies); $i++) { ?>
          <div class="col-sm-4 mt-3">
            <div class="card">
              <?php if (isset($companies[$i])) { ?>
                <img class="card-img-top" src="image/<?php echo $companies[$i]['image'] ?>" alt="Card image cap" height="350px" width="100%">
                <div class="card-body">
                  <a href="#" class="card-title h5"><?php echo $companies[$i]['company_name'] ?></a>
                  <p class="card-text"><?php echo $companies[$i]['about'] ?></p>
                  <a href="halaman-ubah-detail.php?id=<?php echo $companies[$i]['id_company'] ?>" class="btn btn-primary">EDIT DETAILS</a>
                  <a href="hapuscompany.php?id=<?php echo $companies[$i]['id_company'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">DELETE</a>
                </div>
              <?php } ?>
            </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>




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