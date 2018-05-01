<?php
  $user_data = $this->session->userdata('datauser');
  $hasToko = $this->session->userdata('has_toko');
  if ($hasToko != 0) {
    $status = "Penjual";
    $color = "#c40c41";
  } else {
    $status = "Customer";
    $color = "#9f9fa0";
  }
?>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img class="foto" src="<?php echo base_url('assets') ?>/image/uploads/<?php echo $user_data['foto'] ?>" style="margin-top: 30px;">  
      </div>
      <div class="col-md-9">
        <div class="jumbotron  people" style="background-color: white;">
          <a href="<?php echo site_url('profil/veditprofil')?>">
             <button type="button" class="btn btn-info btn_edit_profil">Edit</button>
          </a>
          <h4><?php echo $user_data['nama'] ?> <span class="badge badge-secondary" style="background-color: <?php echo $color; ?>;"><?php echo $status; ?></span></h4>
          <p><?php echo $user_data['email'] ?></p>
          <p><?php echo $user_data['no_tlp'] ?></p>
          <p><?php echo $user_data['alamat'] ?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p><h4>Riwayat Transaksi</h4></p>
      </div>
      <div class="col-table col-md-12">
        <table id="tblPemesanan" class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tanggal Pembelian</th>
              <th>Nama Barang</th>
              <th>Harga Satuan</th>
              <th>Kuantitas</th>
              <th>Total harga</th>
              <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Konten -->