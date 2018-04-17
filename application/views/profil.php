<?php
  $this->load->view("v_header");
?>
  <!-- Konten -->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="row">
          <div class="jumbotron text-center people" style="background-color: white;">
            <img class="gbr_people" src="<?php echo base_url("assets")?>/image/people.png">
          </div>          
        </div>
        <div class="row">
          <form>
            <input type="file" name="file_gambar" accept="image/*">
          </form>
        </div>

      </div>
      <div class="col-md-7">
        <div class="jumbotron  people" style="background-color: white;">

          
          <a href="update_profil.html">
             <button type="button" class="btn btn-info btn_edit_profil">Edit</button>
          </a>

          <h4>M Faisal Nur <span class="badge badge-secondary">Customer</span></h4>
          <p>Icang@gmail.com</p>
          <p>082216649130</p>
          <p>3 Februari 1998</p>
          <p>Jl. Telekomunikasi Terusan Buah Batu-Dayeuh Kolot Asrama (Putra) Gedung 10, Kamar 324 Telkom University- 40257 bandung jawa barat</p>
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
<?php
  $this->load->view("v_footer");
?>