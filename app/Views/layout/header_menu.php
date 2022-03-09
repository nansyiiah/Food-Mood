<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="/img/burger.png" />
    <style>
    .col{
        word-wrap: break-word;
        padding-top: 25px;
        padding-left: 150px;
    }
    .deskripsi {
        width: 300px; 
        border: none;
        padding-left: 5px;
    }
    .navbar-content{
        background-color: #FF5500;
    }
    .wrapper {
      width: 100%;
      max-width: 31.25rem;
      margin: 6rem auto;
    }

    .label {
      font-size: .625rem;
      font-weight: 400;
      text-transform: uppercase;
      letter-spacing: +1.3px;
      margin-bottom: 1rem;
    }

    .searchBar {
      width: 100%;
      display: flex;
      flex-direction: row;
      align-items: center;
    }

    #searchQueryInput {
      width: 100%;
      height: 2.8rem;
      background: #f5f5f5;
      outline: none;
      border: none;
      border-radius: 1.625rem;
      padding: 0 3.5rem 0 1.5rem;
      font-size: 1rem;
    }
    #searchQuerySubmit {
        background: #FF5500;
        border: none;
        border-radius: 24px;
        margin-left: 12px;
        font-size: 20px;
    }
    .btn-desert{
      background: #ffff;
      border-radius: 24px;
      font-size: 18px;
    }
    .btn-desert:hover,.btn-desert:active,.btn-desert:focus {
      border-color: #FF5500;
      color: #FF5500;
    }
</style>

  </head>
  <body>
    <section class="navbar-content">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg py-1 navbar-light navbar-fixed-top navbar-inverse navbar-default" id="navbar_top">
        <div class="container" style="padding-top: 25px;">
          <a class="navbar-brand" href="#">
              <img src="/img/logo-menu.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ms-3" style="font-family: 'Roboto'; font-weight: bold;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= base_url(''); ?>" style="color: white;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('about'); ?>" style="color: white;">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('menu'); ?>" style="color: white;">Menu</a>
              </li>
            </ul>
            <!-- <a href="login"><button class="btn ms-lg-3" style="font-family: 'Roboto'; background-color: #FF5500; border-radius: 30px; color: white;">Sign in</button></a> -->
          </div>
        </div>
      </nav>
      <!-- Navbar -->
      <div class="row align-text-center">
                <div class="col">
                    <div class="col-17">
                        <h1 style="padding-left: 180px; font-size: 64px; padding-top: 70px; font-family: 'Roboto'; font-weight: bold;">A Chef in Every Tasty Meal box</h1>
                        <p style="padding-left: 180px; font-family: 'Roboto'; font-size: 20px;">
                            Get pre-portioned ingredients for Gusto Meal Kits best recipes delivered direct to your door!
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-5 ms-auto">
                        <img src="/img/steak-menu.png">
                    </div>
                </div>
            </div>
    </section>
    <?= $this->renderSection('content'); ?>

<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.kitacodein.com/" target="_blank">Food Mood</a> from Kitacodein. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/vendors/chart.js/Chart.min.js"></script>
<script src="/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="/js/dataTables.select.min.js"></script>
<script src="/js/myscript.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/js/off-canvas.js"></script>
<script src="/js/hoverable-collapse.js"></script>
<script src="/js/template.js"></script>
<script src="/js/settings.js"></script>
<script src="/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/js/dashboard.js"></script>
<script src="/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->
</body>

</html>