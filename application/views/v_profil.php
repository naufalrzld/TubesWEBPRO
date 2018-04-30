
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="row">
          <?php
            $user_data = $this->session->userdata('datauser');
            /*$this->load->model("m_edit_profil");
            $this->m_edit_profil->caridata($user_data['nama']);*/
            
          ?>
          <div class="jumbotron text-center people" style="background-color: white; height: 350px;">
            <img class="foto" src="<?php echo base_url('assets') ?>/image/uploads/<?php echo $user_data['foto'] ?>">
          </div>          
        </div>

      </div>
      <div class="col-md-7">
        <div class="jumbotron  people" style="background-color: white;">

          
          <a href="<?php echo site_url('profil/veditprofil')?>">
             <button type="button" class="btn btn-info btn_edit_profil">Edit</button>
          </a>
          
          <p><?php echo $user_data['member_id'] ?></p>
          <h4><?php echo $user_data['nama'] ?> <span class="badge badge-secondary">Customer</span></h4>
          <p><?php echo $user_data['email'] ?></p>
          <p><?php echo $user_data['no_tlp'] ?></p>
          <p><?php echo $user_data['alamat'] ?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p><h4>Riwayat Transaksi</h1></p>
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


</body>
</html>