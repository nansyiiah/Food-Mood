<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
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


@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
  .text-header{
    padding-left: 180px; font-size: 64px; font-family: 'Roboto'; font-weight: bold;
  }
  @media screen and (max-width: 600px) {
    .text-header {
      font-size: 25px;
      padding-left: 0px;
    }
  }
  .text-paragraph {
    padding-left: 180px; font-family: 'Roboto'; font-size: 20px;
  }

  @media screen and (max-width: 600px) {
    .text-paragraph {
      font-size: 10px;
      padding-left: 0px;
    }
  }

  .img-steak{
    width: 100%;
  }

  @media screen and (max-width: 600px) {
    .img-steak {
      width: 300%;
      padding-right: 80px;
    }
  }

</style>

  </head>
  <body>
    <section class="navbar-content">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg py-1 navbar-light navbar-fixed-top navbar-inverse navbar-default" id="navbar_top" style="background-color: #FF5500">
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
                <a class="nav-link" href="<?= base_url('/docs'); ?>" style="color: white;">Docs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/menu'); ?>" style="color: white;" >Menu</a>
              </li>
            </ul>
            <?php if(session()->get('username')){ ?>
              <a href="<?= base_url('/dashboard'); ?>"><button class="btn ms-lg-3" style="font-family: 'Roboto'; background-color: white; border-radius: 30px; color: #FF5500;">Dashboard</button></a>
              <?php }else{ ?>
            <a href="<?= base_url('/login'); ?>"><button class="btn ms-lg-3" style="font-family: 'Roboto'; background-color: white; border-radius: 30px; color: #FF5500;">Sign in</button></a>
                <?php } ?>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
      <div class="row align-text-center">
                    <div class="col">
                        <h1 class="text-header">A Chef in Every Tasty Meal box</h1>
                        <p class="text-paragraph">
                            Get pre-portioned ingredients for Gusto Meal Kits best recipes delivered direct to your door!
                        </p>
                    </div>
                <div class="col">
                    <div class="p-5 ms-auto">
                        <img class="img-steak" src="/img/steak-menu.png">
                    </div>
                </div>
            </div>
    </section>

    <!-- <div class="container-fluid banner">
        <div class="container">
            <h1 style="font-size: 24px; font-family: 'Roboto'; font-weight: bold; padding-left: 20px; padding-top: 35px;">
                Recipe
                <div class="searchBar">
                  <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
                  <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit" style="color: white;">
                      Search
                  </button>
                </div>
            </h1>
        </div> -->
        <!-- <div class="leftmenuinner">
            <div class="row">
              <div class="col ms-auto">
                <input class="btn-desert" type="button" name="btn-desert" id="btn-desert" value="Desert" style="margin-left: 185px;">
              </div>
              </div>
              <div class="col ms-auto">
                    <input class="btn-desert" type="button" name="btn-desert" id="btn-desert" value="Breakfast" style="margin-left: 173px;">
              </div>
              <div class="col ms-auto">
                    <input class="btn-desert" type="button" name="btn-desert" id="btn-desert" value="Lunch" style="margin-left: 173px;">
              </div>
              <div class="col ms-auto">
                    <input class="btn-desert" type="button" name="btn-desert" id="btn-desert" value="Dinner" style="margin-left: 173px;">
              </div>
            </div>
          </div> -->

        <div class="container">
          <div class="row text-center">
            <div class="col-8 text-center" style="margin: 0 auto; float: none; margin-bottom: 10px; margin-top: 20px;">
              <div class="card">
                <div class="card-body align-items-center">
                    <?php foreach($menu as $tes): ?>
                    <h5 class="card-title"><img src="<?= "../upload/".$tes->foto; ?>" height="50%" width="50%" alt="Image"></h5>
                    <h5 class="card-title"><?= $tes->nama_menu; ?></h5>
                    <p class="card-text"><?= $tes->deskripsi_menu; ?></p>
                    <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
<div class="modal fade" id="modalDetail" name="modalDetail">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit <?= $title; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('dashboard/ubah'); ?>" method="post">
        <input type="hidden" name="id" id="id_menuedit">
        <div class="form-group mb-0">
          <label for=""></label>
          <input type="text" name="nama_edit" id="nama_edit" class="form-control" placeholder="Edit Nama Menu">
        </div>
        <div class="form-group mb-0">
          <label for=""></label>
          <input type="text" name="deskripsi_edit" id="deskripsi_edit" class="form-control" placeholder="Edit Deskripsi Menu">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
  var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
  var collapseList = collapseElementList.map(function (collapseEl) {
    return new bootstrap.Collapse(collapseEl)
  })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
        document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        document.getElementById('navbar_top').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('navbar_top').classList.remove('fixed-top');
         // remove padding top from body
        document.body.style.paddingTop = '0';
      } 
  });
}); 
      </script>
<!-- <script src="/js/myscript.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
-->

  </body>
</html>
