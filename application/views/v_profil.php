
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="row">
          <div class="jumbotron text-center people" style="background-color: white;">
            <img class="gbr_people" src="<?php echo site_url("assets/image/people.png")?>">
          </div>          
        </div>
        <div class="row">
          <form>
            <input class="btn" type="file" name="file_gambar" accept="image/*">
          </form>
        </div>

      </div>
      <div class="col-md-7">
        <div class="jumbotron  people" style="background-color: white;">

          
          <a href="update_profil.html">
             <button type="button" class="btn btn-info btn_edit_profil">Edit</button>
          </a>
          <?php
            $user_data = $this->session->userdata('datauser');
          ?>
          <h4><?php echo $user_data['nama'] ?> <span class="badge badge-secondary">Customer</span></h4>
          <p><?php echo $user_data['email'] ?></p>
          <p><?php echo $user_data['no_tlp'] ?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p><h4>Riwayat Transaksi</h1></p>
      </div>
      <div class="col-table col-md-12">
        <table id="tblPemesanan" class="table table-striped">
          <tr>
            <th>ID</th>
            <th>Tanggal Pembelian</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
            <th>Kuantitas</th>
            <th>Total harga</th>
            <th>Aksi</th>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- Konten -->
</body>
</html>