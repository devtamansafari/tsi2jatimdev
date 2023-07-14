<br><br><br>
<div class="container-fluid my-5">

  <div class="container my-5">
    <p class="text-center py-2 font_sub_taman_hotel"> Recreation Area!</p>
    <p class="text-center font_header_nav text-dark">
    Habiskan waktu berharga Anda bersama keluarga dengan menikmati ragam wahana permainan yang seru dan menyenangkan. Anda juga bisa menguji adrenalin dengan mencoba beberapa wahana permainan yang cukup ekstrim sekaligus menegangkan
    </p>
    <nav class="nav nav-pills row d-flex justify-content-center">
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#amusement-park" role="tab" data-toggle="tab">Amusement Park</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#safari-water-world" role="tab" data-toggle="tab">Safari Water World</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#elephant-story" role="tab" data-toggle="tab">Elephant Story</a>
        <!-- <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#safari-trek" role="tab" data-toggle="tab">Safari Trek & Outbond</a> -->
      </nav>
  

    <div class="row rounded">
      
      <div class="col-12 mt-2 mb-3">
        <div class=" rounded tab-content">
          <!--  -->
          <div role="tabpanel" class="tab-pane active" id="amusement-park">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sAmusementPark as $a) { ?>  
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_recreation_area?>">
                
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_recreation_area ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="safari-water-world">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sSafariWaterWorld as $a) { ?>  
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_recreation_area?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_recreation_area ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="elephant-story">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sElephantStory as $a) { ?>  
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_recreation_area?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_recreation_area ?>" class="rounded" width="600">
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