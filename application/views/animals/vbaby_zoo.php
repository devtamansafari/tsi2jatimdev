<br><br><br>
<div class="container-fluid my-5">

  <div class="container my-5">
    <p class="text-center py-2 font_sub_taman_hotel"> Baby Zoo!</p>
    <p class="text-center font_header_nav text-dark">

      Disini Anda bisa lebih dekat lagi dengan satwa. Bahkan, Anda dapat berinteraksi langsung dengan sebagian satwa dengan cara yang menyenangkan.
    </p>
    <nav class="nav nav-pills row d-flex justify-content-center">
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#foto-satwa" role="tab" data-toggle="tab">Foto Satwa</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#satwa-tunggang" role="tab" data-toggle="tab">Satwa Tunggang</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#aquatic-land" role="tab" data-toggle="tab">Aquatic Land</a>
      <!-- <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#safari-trek" role="tab" data-toggle="tab">Safari Trek & Outbond</a> -->
    </nav>


    <div class="row rounded">

      <div class="col-12 mt-2 mb-3">
        <div class=" rounded tab-content">
          <!--  -->
          <div role="tabpanel" class="tab-pane active" id="foto-satwa">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($aFotoSatwa as $a) { ?>
                  <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <div class="text-center">
                      <a href="<?= $a->link_baby_zoo ?>">
                        <img class="img-fluid" src="<?= base_url('assets/dist/img/animals/') . $a->img_baby_zoo ?>" class="rounded" width="600">
                      </a>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->

          <div role="tabpanel" class="tab-pane" id="satwa-tunggang">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($aSatwaTunggang as $b) { ?>
                  <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <div class="text-center">
                      <a href="<?= $b->link_baby_zoo ?>">
                        <img class="img-fluid" src="<?= base_url('assets/dist/img/animals/') . $b->img_baby_zoo ?>" class="rounded" width="600">
                      </a>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="aquatic-land">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($aAquaticLand as $a) { ?>
                  <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <div class="text-center">
                      <a href="<?= $a->link_baby_zoo ?>">
                        <img class="img-fluid" src="<?= base_url('assets/dist/img/animals/') . $a->img_baby_zoo ?>" class="rounded" width="600">
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