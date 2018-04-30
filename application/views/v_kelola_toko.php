<div class="container">
	<div class="header">
        <center>
            <h2>Kelola Toko</h2>
        </center>
	</div>
	<div class="row">
        <div class="col-table col-md-12">
            <table align="center" width="100%">
                <tr>
                    <td width="40%">
                        <a href="#">
                            <button class="btn btn-outline-danger btn-login">Edit Toko</button>
                        </a>
                    </td>
                    <td width="40%">
                        <a href="<?php echo site_url('kelola_toko/tambah_barang')?>">
                            <button class="btn btn-outline-danger btn-login">Tambah Barang</button>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-table col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Informasi</th>
                        <th>Spesifikasi</th>
                        <th>Deskripsi</th>
                        <th>Catatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dataBrg as $barang) {
                            $id = $barang["barang_id"];
                    ?>
                    <tr>
                        <td><img src="<?php echo base_url('assets') ?>/image/uploads/<?php echo $barang["images"]; ?>"></td>
                        <td><?php echo $barang["nama_barang"]; ?></td>
                        <td><?php echo $barang["harga"]; ?></td>
                        <td><?php echo $barang["informasi"]; ?></td>
                        <td><?php echo $barang["spesifikasi"]; ?></td>
                        <td><?php echo $barang["deskripsi"]; ?></td>
                        <td><?php echo $barang["catatan"]; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $id ?>"><span class="glyphicon glyphicon-edit"></span></button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?= $id?>"><span class="glyphicon glyphicon-trash"></span></button>
                        </td>
                    </tr>
                    <div class="modal fade" id="edit<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Edit Data</h3    >
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <center><h3 class="modal-title" id="exampleModalLabel">Data <?= $barang["nama_barang"] ?></h3></center>
                                    <!-- Insert Form here -->
                                    <form method="POST" action="<?php echo site_url('kelola_toko/edit_barang') ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Barang</label>
                                            <input type="text" class="form-control" value="<?= $barang["barang_id"] ?>" disabled>
                                            <input type="hidden" name="kode_barang" value="<?= $barang["barang_id"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang" value="<?= $barang["nama_barang"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Harga</label>
                                            <input type="text" class="form-control" name="harga" value="<?= $barang["harga"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Informasi</label>
                                            <input type="text" class="form-control" name="informasi" value="<?= $barang["informasi"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Spesifikasi</label>
                                            <input type="text" class="form-control" name="spec" value="<?= $barang["spesifikasi"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Deskripsi</label>
                                            <input type="text" class="form-control" name="desc" value="<?= $barang["deskripsi"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Catatan</label>
                                            <input type="text" class="form-control" name="catatan" value="<?= $barang["catatan"] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Gambar</label>
                                            <input type="file" name="userfile" size="20" />
                                        </div>
                                        <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="del<?= $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete <?= $barang["nama_barang"] ?> ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <form method="POST" action="<?php echo site_url('kelola_toko/delete_barang') ?>">
                                        <input type="hidden" name="kode_barang" value="<?= $id ?>">
                                        <button type="submit" name="delete" class="btn btn-danger">YA</a>
                                    </form>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
	</div>
</div>
