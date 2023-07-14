<br><br><br>
<div class="container-fluid my-5">

  <div class="container my-5">
    <p class="text-center py-2 font_sub_taman_hotel"> Safari Adventure!</p>
    <p class="text-center font_header_nav text-dark">
      Ikuti perjalanan safari selama kurang lebih 45 menit untuk menyapa aneka satwa dari berbagai belahan dunia yang bebas berkeliaran seperti di habitat aslinya.
    </p>
    <nav class="nav nav-pills row d-flex justify-content-center">
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#zona-afrika" role="tab" data-toggle="tab">Zona Afrika</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#zona-amerika-eropa" role="tab" data-toggle="tab">Zona Amerika Eropa</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#zona-asia" role="tab" data-toggle="tab">Zona Asia</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#zona-australia" role="tab" data-toggle="tab">Zona Australia</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#zona-karnivora" role="tab" data-toggle="tab">Zona Karnivora</a>
    </nav>


    <div class="row rounded">

      <div class="col-12 mt-2 mb-3">
        <div class=" rounded tab-content">
          <!--  -->
          <div role="tabpanel" class="tab-pane active" id="zona-afrika">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($saZonaAfrika as $a) { ?>

                  <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <div class="text-center">
                      <a href="<?= $a->link_safari_adventure ?>">

                        <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_adventure ?>" class="rounded" width="600">
                      </a>
                    </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="zona-amerika-eropa">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($saZonaAmerikaEropa as $a) { ?>

                  <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <div class="text-center">
                      <a href="<?= $a->link_safari_adventure ?>">

                        <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_adventure ?>" class="rounded" width="600">
                      </a>
                    </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="zona-asia">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($saZonaAsia as $a) { ?>
                  <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                    <div class="text-center">
                    <a href="<?= $a->link_safari_adventure ?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_adventure ?>" class="rounded" width="600">
                      </a>
                    </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="zona-australia">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($saAustralia as $a) { ?>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_adventure ?>">

                    <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_adventure ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>

              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="zona-karnivora">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($saZonaKarnivora as $a) { ?>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_adventure ?>">

                    <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_adventure ?>" class="rounded" width="600">
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