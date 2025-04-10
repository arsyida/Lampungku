<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lampungku</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('css/detail.css');?>" rel="stylesheet">

</head>

<body>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?=$data['name']?></h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?= base_url('/');?>">Home</a>
      </li>
      <li class="breadcrumb-item active"><?=$data['name']?></li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
      <img class="img-fluid" src="<?=$data['picture']?>" alt="<?=$data['name']?>">
        
      <!-- <img class="img-fluid" src="https://heartline.co.id/wp-content/uploads/2024/09/Melihat-Dari-Dekat-Lumba-Lumba-Di-Teluk-Kiluan-Lampung.jpg" alt="Teluk Kiluan"> -->
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Description</h3>
        <p><?=$data['description']?></p>
        <!-- <p>Teluk Kiluan adalah destinasi wisata alam yang terletak di Kabupaten Tanggamus, Lampung, terkenal dengan keindahan lautnya yang jernih, pasir putih, dan pesona lumba-lumba yang berenang bebas di perairannya. Tempat ini menjadi favorit bagi wisatawan yang ingin menikmati pengalaman melihat lumba-lumba liar di habitat aslinya.
        </p> -->
        <h3 class="my-3">Daya Tarik Utama</h3>
        <ul>
          <?php 
          $interests = explode(',', $data['interesting']);
          foreach ($interests as $interest) {
            echo "<li>" . trim($interest) . "</li>";
          }
          ?>
        </ul>
        <!-- <ul>
          <li>Wisata Lumba-Lumba</li>
          <li>Keindahan Alam</li>
          <li>Pulau Kelapa dan Laguna Kilua</li>
        </ul> -->
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Related Pictures</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="./img/The-Golden-Temple-India8.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="./img/597529822Amritsar_Main.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="./img/imb-photos-warrior-medium.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="./img/photo1.jpg" alt="">
        </a>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Tour India</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

</body>

</html>