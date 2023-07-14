<br><br><br>
<div class="container-fluid my-5">

  <div class="container my-5">
    <p class="text-center py-2 font_sub_taman_hotel"> Restaurant!</p>
    <p class="text-center font_header_nav text-dark">
      Tak perlu khawatirkan rasa lapar yang melanda.
      Sebab, ada banyak macam hidangan yang dijamin kelezatannya
      di beberapa restoran di Taman Safari Indonesia 2 Jatim
    </p>
    <nav class="nav nav-pills row d-flex justify-content-center">
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#captain-crocs" role="tab" data-toggle="tab">Captain Croc's</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#gading-restaurant" role="tab" data-toggle="tab">Gading Restaurant</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#safari-fried-chicken" role="tab" data-toggle="tab">Safari Fried Chicken</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#tiger-cave-restaurant" role="tab" data-toggle="tab">Tiger Cave Restaurant</a>
      <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#warung-ndeso" role="tab" data-toggle="tab">Warung Ndeso</a>
    </nav>


    <div class="row rounded">

      <div class="col-12 mt-2 mb-3">
        <div class=" rounded tab-content">
          <!--  -->
          <div role="tabpanel" class="tab-pane active" id="captain-crocs">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($siCaptainCrocs as $a) { ?>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_restaurant?>">
                      <!-- <img class="img-fluid" src="https://images.unsplash.com/photo-1500964757637-c85e8a162699?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=903&q=80" class="rounded" alt="..." width="600"> -->
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari_info/') . $a->img_restaurant ?>" class="rounded" alt="..." width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>


              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="gading-restaurant">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($siGadingRestaurant as $a) { ?>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center"> 
                  <a href="<?= $a->link_restaurant?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari_info/') . $a->img_restaurant ?>" class="rounded" alt="..." width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>


              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="safari-fried-chicken">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($siSafariFriedChicken as $a) { ?>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_restaurant?>">
                    
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari_info/') . $a->img_restaurant?>" class="rounded" alt="..." width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>


              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="tiger-cave-restaurant">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($siTigerCaveRestaurant as $a) { ?>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_restaurant?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari_info/') . $a->img_restaurant?>" class="rounded" alt="..." width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>

              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="warung-ndeso">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($siWarungNdeso as $a) { ?>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_restaurant?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari_info/') . $a->img_restaurant ?>" class="rounded" alt="..." width="600">
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