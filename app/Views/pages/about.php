<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="this">
        <h3 style="text-align: center; color: #FF5500; padding-top: 50px;">This Website</h3>
        <!-- <img src="/img/komputer.png" class="center"  alt="komputer" style="text-align: center;"> -->
        <div class="text-center">
          <img src="/img/komputer.png" class="rounded">
        </div>
        <br>
        <p style="text-align: center; ">Website ini merupakan website yang menampung berbagai macam resep makanan. Dengan adanya website ini orang yang suka memasak dapat dengan mudah mencari resep makanan yang akan mereka masak. fitur yang disediakan meliputi pencarian berdasarkan menu dan dapat memfilter berdasarkan jenis makanannya.</p>
        
    </section>
    <section class="text-center team center-block" id="team">
        <h3 style="color: #FF5500;">Our Team</h3>
        <div class="row" style="padding-top: 20px;">
                <div class="col">
                    <img src="/img/team1.png" class="nama-team" alt="nama">
                    <h1 style="padding-top: 10px; font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                      Adrian Kurniawan
                    </h1>
                    <!-- <p style="text-align: center;">
                      Website ini menyajikan fitur pencarian dan juga filtering
                    </p> -->
                </div>
                <div class="col">
                    <img src="/img/team2.png" class="nama-team" alt="nama">
                    <h1 style="padding-top: 10px; font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                      Ricky Ridho Oetomo
                    </h1>
                    <!-- <p style="text-align: center;">
                      Website ini menggunakan server yang cepat sehingga pengguna tidak perlu khawatir terjadinya loading dengan waktu yang lama
                    </p> -->
                </div>
                <div class="col">
                  <img src="/img/team3.png" class="nama-team" alt="nama">
                  <h1 style="padding-top: 10px; font-size: 18px; font-family: 'Roboto'; font-weight: bold;">
                    Mufid Al Fikri
                  </h1>
                  <!-- <p style="text-align: center;">
                    Main menu yang disajikan dari website ini yaitu home, about, menu, dan profil
                  </p> -->
              </div>
            </div>
      </section>
            <?= $this->endSection(); ?>