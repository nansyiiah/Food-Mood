<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <title><?= $title; ?></title>
    <link rel="icon" type="image/x-icon" href="/img/burger.png" />
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg py-1 navbar-light navbar-fixed-top navbar-inverse navbar-default" id="navbar_top" style="background-color: white;">
        <div class="container" style="padding-top: 25px;">
          <a class="navbar-brand" href="#">
              <img src="/img/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ms-3" style="font-family: 'Roboto'; font-weight: bold;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= base_url(''); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/docs'); ?>">Docs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/menu'); ?>">Menu</a>
              </li>
            </ul>
            <?php if(session()->get('username')){ ?>
              <a href="<?= base_url('/dashboard'); ?>"><button class="btn ms-lg-3" style="font-family: 'Roboto'; background-color: #FF5500; border-radius: 30px; color: white;">Dashboard</button></a>
              <?php }else{ ?>
            <a href="<?= base_url('/login'); ?>"><button class="btn ms-lg-3" style="font-family: 'Roboto'; background-color: #FF5500; border-radius: 30px; color: white;">Sign in</button></a>
                <?php } ?>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <?= $this->renderSection('content'); ?>

      <!-- FOOTER -->
      <div class="text-center center-block">
               <p class="txt-railway">- About Us -</p>
               <a href="#"><img src="/img/instagram-landing-page.png"></a>
               <a href="#"><img src="/img/facebook-landing-page.png"></a>
               <a href="#"><img src="/img/twitter-landing-page.png"></a>
               <p><br>Made with ❤️ by Badut 2021</p>
            </div>
            <hr />
      </section>
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
    </body>
</html>