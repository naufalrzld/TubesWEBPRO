  <!-- Body Index -->
	<div class="container">
    <!-- Slideshow -->
    <div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
         <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url("assets")?>/image/a.jpg" alt="Los Angeles" width="1100" height="500">
            <!-- <div class="carousel-caption">
              <h3>sale up to 30%</h3>
              <p>Berlaku sampai tanggal 25 Maret 2018</p>
            </div> -->   
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url("assets")?>/image/a.jpg" alt="Chicago" width="1100" height="500">
            <!-- <div class="carousel-caption">
              <h3>Yakali ga Order</h3>
              <p>Dapatkan Promo dari barang yang telah di order</p>
            </div> -->   
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url("assets")?>/image/c.jpg" alt="New York" width="1100" height="500">
            <!-- <div class="carousel-caption">
              <h3>Potongan Harga</h3>
              <p>Khusus pengguna BCA</p>
            </div> -->   
          </div>
        </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
      <!-- SlideShow End -->

      <!-- List Barang Begin -->
    <div class="row">
      <?php foreach ($barang as $barang): ?>
        <div class="col-md-2 col-sm-4 col-xs-6">
          <div class="frame-produk">
            <div class="pro-gambar">
              <a target="_blank" href="<?php echo base_url("assets")?>/image/baju.jpg">
                <img src="<?php echo base_url('assets')?>/image/barang/<?php echo $barang['images']; ?> " class="produk img-fluid" alt="Baju">
                <!-- <img src="image/baju.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              </a>
            </div>        
            <div class="desc">
              <h6 style="font-family: Arial; "><?php echo $barang['nama_barang']; ?></h6>
              <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.<?php echo $barang['harga']; ?></h6>
            </div>
            <div class="tombol-beli">
              <a href="<?php echo base_url('dashboard/detail')?>/<?php echo $barang['barang_id']; ?> " class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Detail Barang</a>
              <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
            </div>
          </div>        
        </div>
      <?php endforeach; ?>
      </div>
    </div>
    <!-- List Barang End -->
	</div>