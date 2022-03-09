<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
   <div class="row text-center">
      <div class="col-8 text-center" style="margin: 0 auto; float: none; margin-bottom: 10px; margin-top: 20px;">
         <div class="card">
            <div class="card-body align-items-center">
            <table class="table table-striped table-responsive-lg" style="text-align: center;">
                    <thead>
                      <tr>
                        <th>Method</th>
                        <th>End Point</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody class="initially-hidden-rows">
                        <tr>
                            <td>GET</td>
                            <td>/MenuApiController</td>
                            <td>Show all data menu</td>
                        </tr>
                        <tr>
                            <td>GET</td>
                            <td>/MenuApiController/show/:id</td>
                            <td>Show data menu from id</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>/MenuApiController/create</td>
                            <td>Insert data menu</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>/MenuApiController/update/:id</td>
                            <td>Update data menu from id</td>
                        </tr>
                        <tr>
                            <td>DELETE</td>
                            <td>/MenuApiController/delete/:id</td>
                            <td>Delete data menu from id</td>
                        </tr>
                        <tr>
                            <td>GET</td>
                            <td>/UserApiController</td>
                            <td>Show all data user</td>
                        </tr>
                        <tr>
                            <td>GET</td>
                            <td>/UserApiController/show/:id</td>
                            <td>Show data user from id</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>/UserApiController/create</td>
                            <td>Insert data user</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>/UserApiController/update/:id</td>
                            <td>Update data user from id</td>
                        </tr>
                        <tr>
                            <td>DELETE</td>
                            <td>/UserApiController/delete/:id</td>
                            <td>Delete data user from id</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
         </div>
         <br><br>
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
      </div>
   </div>
</div>

<?= $this->endSection(); ?>