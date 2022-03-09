<?= $this->extend('layout/dashboard_template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    
      <div class="col-8">
            
            <h2>Menu</h2>
            <div class="card">
                <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Add Menu</button>
                </div>
              <div class="card-body">
                <table class="table table-striped table-responsive-lg">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Foto</th>
                      <th>Nama Menu</th>
                      <?php if (session()->get('role') == 'admin') {?>
                      <th>Opsi</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($menu as $row): ?>
                    <tr>
                      <td><?= $row['id_menu']; ?></td>
                      <td><img src="<?= "upload/".$row['foto']; ?>" height="40px" width="40px" alt="Image"></td>
                      <td><?= $row['nama_menu']; ?></td>
                      <td>
                      <?php if (session()->get('role') == 'admin') {?>
                        <button type="button" data-toggle="modal" data-target="#modalEdit" class="btn btn-sm btn-warning" id="btn-edit" data-id = "<?= $row['id_menu']; ?>"data-nama="<?= $row['nama_menu']; ?>" data-deskripsi="<?= $row['deskripsi_menu']; ?>">Edit</button>
                        <a href="<?= base_url('dashboard/delete/' . $row['id_menu']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('apa kamu yakin akan hapus data?')">X</a> 
                      <?php } ?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </div>
</div>

<!-- Modal tambah -->
<div class="modal fade modalTambah" id="modalTambah" name="modalTambah">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add <?= $title; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('dashboard/add'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group mb-0">
          <label for="">Nama Menu</label>
          <input type="text" name="nama_menu" id="nama_menu" class="form-control" placeholder="Input Nama Menu">
        </div>
        <div class="form-group mb-0">
          <label for="">Deskripsi Menu</label>
          <textarea id="deskripsi_menu" name="deskripsi_menu" class="form-control" placeholder="Input deskripsi menu " rows="10"></textarea>
        </div>
        <div class="form-group mb-0">
          <label for="image">Gambar Resep</label>
          <input type="file" class="form-control-file" id="image" name="image">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Menu</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit data -->
<div class="modal fade" id="modalEdit" name="modalEdit">
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
          <textarea id="deskripsi_edit" name="deskripsi_edit" class="form-control" placeholder="Edit Resep " rows="10"></textarea>
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

<!-- Modal hapus menu-->
<div class="modal fade" id="modalHapus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Apakah anda yakin ingin hapus ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/dashboard/hapus/<?= $row['id_menu']; ?>" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal edit -->
<div class="modal fade modalEditProfile" id="modalEditProfile" name="modalEditProfile">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit data diri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('customer/ubah'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idedit"  id="idpemesanan" value="<?php echo session()->get('user_id') ?>">
        <div class="form-group mb-0">
          <label for="">Username</label>
          <input type="text" name="usernameEdit" id="usernameEdit" class="form-control" value="<?php echo session()->get('username') ?>">
        </div>
        <div class="form-group mb-0">
          <label for="">Firstname</label>
          <input type="text" name="firstnameEdit" id="firstnameEdit" class="form-control" value="<?php echo session()->get('firstname') ?>">
        </div>
        <div class="form-group mb-0">
          <label for="">Lastname</label>
          <input type="text" name="lastnameEdit" id="lastnameEdit" class="form-control" value="<?php echo session()->get('lastname') ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalMessage" name="edit">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>