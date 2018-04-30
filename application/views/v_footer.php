<!-- footer -->
      <!--Footer-->
      <footer class="page-footer font-small blue-grey lighten-5 pt-0">
          <div style="background-color: #c40c41;">
              <div class="container">
                  <!--Grid row-->
                  <div class="row py-4 d-flex align-items-center">
                      <!--Grid column-->
                      <div class="col-12 col-md-5 text-left mb-4 mb-md-0">
                          <h6 class="mb-0 white-text text-center text-md-left" style="color: white">Get connected with us on social networks!
                          </h6>
                      </div>
                      <!--Grid column-->
                      <!--Grid column-->
                      <div class="col-12 col-md-7 text-center text-md-right">
                          <!--Facebook-->
                          <a class="fb-ic ml-0"><i class="fa fa-facebook white-text mr-lg-4"> </i></a>
                          <!--Twitter-->
                          <a class="tw-ic"><i class="fa fa-twitter white-text mr-lg-4"> </i></a>
                          <!--Google +-->
                          <a class="gplus-ic"><i class="fa fa-google-plus white-text mr-lg-4"> </i></a>
                          <!--Linkedin-->
                          <a class="li-ic"><i class="fa fa-linkedin white-text mr-lg-4"> </i></a>
                          <!--Instagram-->
                          <a class="ins-ic"><i class="fa fa-instagram white-text mr-lg-4"> </i></a>
                      </div>
                      <!--Grid column-->
                  </div>
                  <!--Grid row-->
              </div>
          </div>
          <!--Footer Links-->
          <div class="container mt-5 mb-4 text-center text-md-left">
              <div class="row mt-3">
                  <!--First column-->
                  <div class="col-md-3 col-lg-4 col-xl-3 mb-4 dark-grey-text">
                      <h6 class="title font-weight-bold"><strong>Para Pelapak</strong></h6>
                      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <p>Ayo diorder , yakali ngga order barang disini. dapatkan potongan harga hingga 30%. Syarat dan ketentuan berlaku yaaa heheheh
                      </p>
                  </div>
                  <!--/.First column-->
                  <!--Second column-->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
                      <h6 class="title font-weight-bold"><strong>Pelapak</strong></h6>
                      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <p><a href="home.html" class="dark-grey-text">Home</a></p>
                      <p><a href="#!" class="dark-grey-text">Kecantikan</a></p>
                      <p><a href="#!" class="dark-grey-text">Baju</a></p>
                      <p><a href="#!" class="dark-grey-text">Kebutuhan Bayi</a></p>
                  </div>
                  <!--/.Second column-->
                  <!--Third column-->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 dark-grey-text">
                      <h6 class="title font-weight-bold"><strong>Useful links</strong></h6>
                      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <p><a href="profil.html" class="dark-grey-text">Your Account</a></p>
                      <p><a href="#!" class="dark-grey-text">Become an Affiliate</a></p>
                      <p><a href="#!" class="dark-grey-text">Shipping Rates</a></p>
                      <p><a href="#!" class="dark-grey-text">Help</a></p>
                  </div>
                  <!--/.Third column-->
                  <!--Fourth column-->
                  <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
                      <h6 class="title font-weight-bold"><strong>Contact</strong></h6>
                      <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <p><i class="fa fa-home mr-3"></i> Bandung, Jl. Buah Batu dayaehkolot Telkom University</p>
                      <p><i class="fa fa-envelope mr-3"></i> ini.com</p>
                      <p><i class="fa fa-phone mr-3"></i> 081 112 456</p>
                      <p><i class="fa fa-print mr-3"></i> 089 662 531</p>
                  </div>
                  </div>
                  <!--/.Fourth column-->
              </div>
          </div>
          <!--/.Footer Links-->
          <!-- Copyright-->
          <div class="footer-copyright py-3 text-center">
              <div class="container-fluid">
                  © 2018 Copyright: <a href="index.html"><strong>ini.com</strong></a>
              </div>
          </div>
          <!--/.Copyright -->
      </footer>
      <!--/.Footer-->

      <script src="<?php echo base_url('assets') ?>/js/custom.js"></script>
      <link rel="stylesheet" type="text/js" href="<?php echo base_url('assets') ?>/js/bootstrap.min.js">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/sweetalert2@7.15.1/dist/sweetalert2.all.js"></script>
      
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
            $('.add_cart').click(function(){
              var barang_id = $(this).data("barang_id");
              var nama_barang= $(this).data("nama_barang");
              var harga = $(this).data("harga");
              var quantity     = $('#' + produk_id).val();
              $.ajax({
                url : "<?php echo base_url('');?>dashboard/addToCart",
                method : "POST",
                data : {barang_id: barang_id, nama_barang: nama_barang, harga: harga, quantity: quantity},
                success: function(data) {
                  alert(data);
                }
              });
            });
            $('#detail_cart').load("<?php echo base_url();?>cart/load_cart");
            $(document).on('click','.hapus_cart',function(){
              var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
              $.ajax({
                url : "<?php echo base_url();?>cart/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                  $('#detail_cart').html(data);
                }
              });
            });
        } );
      </script>
</body>
</html>