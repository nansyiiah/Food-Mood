<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
      <style>
          .banner{
              background: url('img/bg-landing-page.png');
              background-size: cover;
          }
          .gallery{
              max-width: 100%;
          }
          .gallery>img{
              padding: 0px;
              margin: 0px;
          }
      </style>
      <!-- Banner -->
      <div class="container-fluid banner">
        <div class="container">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2">
                        <img class="img-tolol" src="/img/burger-landing-page.png" style="padding-top: 50px;">
                    </div>
                </div>
                <div class="col">
                  <div class="p-5 ms-auto">
                      <h1 class="text-bodoh">
                          Cook Easy With Recipe
                      </h1>
                      <p class="text-kecil" style="font-size: 20px; font-family: 'Roboto';">
                          Want to eat delicious food? Then come on over here. As fast as than you expect
                      </p>
                  </div>
              </div>
            </div>
            <div class="row align-text-center">
                <div class="col">
                    <div class="col-15">
                        <h1 class="text-bodoh" style="padding-left: 120px;">Herbs and Spices</h1>
                        <p style="padding-left: 120px; font-family: 'Roboto'; font-size: 20px;">
                            The benefits of spices are not only for cooking spices. Spices also have content that can provide protection for the body against various diseases.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-5 ms-auto">
                        <img class="img-tolol" src="/img/tomat-bawang-landing-page.png">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- Container -->

      <!-- Gallery -->
      <section class="gallery min-vh-100 text-center team">
          <div class="container-lg">
              <div class="row gambar-gallery" style="padding-top: 100px;">
                  <div class="col">
                      <img src="/img/gallery1.png" class="nama-team" alt="Gallery1">
                  </div>
                  <div class="col">
                      <img src="/img/gallery2.png" class="nama-team" alt="Gallery2">
                  </div>
                  <div class="col">
                    <img src="/img/gallery3.png" class="nama-team" alt="Gallery3">
                </div>
              </div>
        <!-- End of Gallery  -->
        <!-- Team -->
              <div class="caption-team">
                <h1 class="team-caption" style="text-align: center; padding-top: 100px; color: #FF5500; font-family: 'Roboto'; font-weight: bold;">
                  Team
                </h1>
                <p style="text-align: center; font-family: 'Roboto'; font-weight: bold;">
                  “In teamwork, silence is not golden, it is deadly”
                </p>
                <p style="text-align: center; font-family: 'Roboto'; font-weight: bold;">
                  ~ Mark Sanborn
                </p>
              </div>
        <!-- End of Team -->
        <!-- Setting -->
              <!-- <div class="row" style="padding-top: 100px;">
                <div class="col ms-auto" style="padding-left: 170px;">
                    <img src="/img/fitur-logo-landing-page.png" class="setting-item" alt="fitur" style="padding-left: 75px;">
                    <h1 style="padding-top: 10px; padding-left: 90px; font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                      Fitur
                    </h1>
                    <p style="text-align: center; padding-right: 140px;">
                      Website ini menyajikan fitur pencarian dan juga filtering
                    </p>
                </div>
                <div class="col">
                    <img src="/img/settings-landing-page.png" class="setting-item" alt="setting" style="padding-left: 75px;">
                    <h1 style="padding-top: 10px; padding-left: 85px; font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                      Setting
                    </h1>
                    <p style="text-align: center; padding-right: 140px;">
                      Website ini menggunakan server yang cepat sehingga pengguna tidak perlu khawatir terjadinya loading dengan waktu yang lama
                    </p>
                </div>
                <div class="col">
                  <img src="/img/mainlinks-landing-page.png" class="setting-item" alt="mainlink" style="padding-left: 75px;">
                  <h1 style="padding-top: 10px; padding-left: 65px; font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                    Main Links
                  </h1>
                  <p style="text-align: center; padding-right: 140px;">
                    Main menu yang disajikan dari website ini yaitu home, about, menu, dan profil
                  </p>
              </div>
            </div> -->
            <div class="container">
              <div class="row">
                <div class="col">
                  <img src="/img/fitur-logo-landing-page.png" alt="">
                  <h1 style="font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                      Fiture
                  </h1>
                  <p style="text-align: center;">
                      Website ini menyajikan fitur pencarian dan juga filtering
                  </p>
                </div>
                <div class="col">
                  <img src="/img/settings-landing-page.png" alt="">
                  <h1 style="font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                      Setting
                  </h1>
                  <p style="text-align: center;">
                      Website ini menggunakan server yang cepat sehingga pengguna tidak perlu khawatir terjadinya loading dengan waktu yang lama
                  </p>
                </div>
                <div class="col">
                  <img src="/img/mainlinks-landing-page.png" alt="">
                  <h1 style="font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                      Main Links
                  </h1>
                  <p style="text-align: center;">
                      Main menu yang disajikan dari website ini yaitu home, about, menu, dan profil
                  </p>
                </div>
              </div>
          </div>
            <!-- End of Setting -->
            <hr />
            <?= $this->endSection(); ?>