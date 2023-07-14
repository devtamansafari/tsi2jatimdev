<br><br><br>
<div class="container-fluid my-5">

  <div class="container my-5">
    <p class="text-center py-2 font_sub_taman_hotel"> Park Map!</p>
    <p class="text-center font_header_nav text-dark">
      Telusuri apa yang Anda dan keluarga inginkan.
    </p>
    <nav class="nav nav-pills row d-flex justify-content-center">
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#the-park-map" role="tab" data-toggle="tab">The Park Map</a>
    </nav>
    <div class="row rounded">

      <div class="col-12 mt-2 mb-3">
        <div class=" rounded tab-content">
          <!--  -->
          <div role="tabpanel" class="tab-pane active" id="the-park-map">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
              <?php foreach ($siMap as $a) { ?>
              
                <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                  <div class="text-center">
                    <!-- <a href=""> -->
                      
                    <img id="park-map" class="img-fluid" src="<?= base_url('assets/dist/img/safari_info/') . $a->img_park_map?>" class="rounded">
                    <!-- <img id="park-map" class="img-fluid" src="<?= base_url() ?>asset-baru/img/img/safari-info/parkMap.png" class="rounded" alt="..."> -->
                    <!-- </a> -->
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