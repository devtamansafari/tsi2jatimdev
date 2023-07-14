<br><br><br>
<div class="container-fluid my-5">

  <div class="container my-5">
    <p class="text-center py-2 font_sub_taman_hotel"> Package!</p>
    <p class="text-center font_header_nav text-dark">

    Banyak pilihan paket-paket menarik untuk kebutuhan liburan anda sekeluarga

  </p>
    <nav class="nav nav-pills row d-flex justify-content-center">
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#harga-tiket" role="tab" data-toggle="tab">Harga Tiket</a>
      </nav>
  

    <div class="row rounded">
      
      <div class="col-12 mt-2 mb-3">
        <div class=" rounded tab-content">
          <!--  -->
          <div role="tabpanel" class="tab-pane active" id="harga-tiket">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($siHargaTiket as $a) { ?>
           
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_package?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari_info/') . $a->img_package ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
         
          


        </div>
        </a>
      </div>



    </div>
  </div>
</div>