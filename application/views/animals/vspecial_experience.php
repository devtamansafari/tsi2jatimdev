<br><br><br>
<div class="container-fluid my-5">

  <div class="container my-5">
    <p class="text-center py-2 font_sub_taman_hotel"> Special Experience!</p>
    <p class="text-center font_header_nav text-dark">

    </p>
    <nav class="nav nav-pills row d-flex justify-content-center">
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#paintball" role="tab" data-toggle="tab">Paintball</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#elephant-journey" role="tab" data-toggle="tab">Elephant Journey</a>
      </nav>
  

    <div class="row rounded">
      
      <div class="col-12 mt-2 mb-3">
        <div class=" rounded tab-content">
          <!--  -->
          <div role="tabpanel" class="tab-pane active" id="paintball">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($aPaintBall as $a) { ?>  
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_special_experience?>">
                
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/animals/') .$a->img_special_experience ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="elephant-journey">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($aElephantJourney as $a) { ?>  
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_special_experience ?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/animals/') .$a->img_special_experience ?>" class="rounded" width="600">
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