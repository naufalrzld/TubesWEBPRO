	<div class="container">
		<div class="row">
			<!-- Barang -->
			<div class="col-md-9">
				<div class="jumbotron text-center bg_detail" style="background-color: white;">
					<div class="container coba">
						<div id="blabla" class="row">
							<div class="col-md-6">
								<img class="gbr_produk" src="<?php echo base_url('assets')?>/image/uploads/<?php echo $barang->images; ?> ">
							</div>
							<div class="col-md-6">
								<h6 class="judul_p"><?php echo $barang->nama_barang; ?></h6>
								<hr class="onepixel">
								<h3 class="harga" align="left">Rp. <?php echo $barang->harga; ?></h3>
								<button id="button_beli" class="btn btn-outline-danger btn-login">Beli</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Informasi Pelapak -->
			<div class="col-md-3 bg_detail2">
				<label>Pelapak</label>
					<div class="row">
						<div class="col-4">
							<img class="gbr_pelapak" src="<?php echo base_url('assets') ?>/image/uploads/default.png">
						</div>
						<div class="col">
							<a href="#" class="nm_pelapak">Icang Store</a><br>
							<a href="#" class="fdb_pelapak">97%(2525 feedback)</a><br>
							<p>Kota Malang</p>
						</div>	
					</div>
					<hr class="onepixel" style="width: 250px;">

			</div>
		</div>
		<!-- Detail Barang -->
		<div class="row text-left">
			<div class="col-md-9">
				<div class="jumbotron text-center bg_detail" style="background-color: white;">
					<p class="text-left">Detail Barang</p>
					<div class="row">
						<div class="col-md-3">
							<p class="text-left">Infromasi</p>
						</div>
						<div class="col-md-7">
							<p class="text-left"><?php echo $barang->informasi; ?></p>
						</div>						
					</div>
					<div class="row">
						<div class="col-md-3">
							<p class="text-left">Spesifikasi</p>
						</div>
						<div class="col-md-7">
							<p class="text-left"><?php echo $barang->spesifikasi; ?></p>
						</div>						
					</div>
					<div class="row">
						<div class="col-md-3">
							<p class="text-left">Deskripsi</p>
						</div>
						<div class="col-md-7">
							<p class="text-left"><?php echo $barang->deskripsi; ?></p>
						</div>						
					</div>
					<div class="row">
						<div class="col-md-3">
							<p class="text-left">Catatan</p>
						</div>
						<div class="col-md-7">
							<p class="text-left"><?php echo $barang->catatan; ?></p>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>