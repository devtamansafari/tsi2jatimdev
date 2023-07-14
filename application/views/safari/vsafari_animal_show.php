<br><br><br>
<div class="container-fluid my-5">

  <div class="container my-5">
    <p class="text-center py-2 font_sub_taman_hotel"> Safari Animal Show!</p>
    <p class="text-center font_header_nav text-dark">

Aneka jenis satwa siap menghibur Anda dan keluarga dari atas panggung. Mereka akan menampilkan aksi-aksi yang lucu dan menggemaskan. Selain itu, ada banyak pengetahuan tentang satwa yang bisa didapat putra-putri Anda dari pertunjukan satwa ini.

  </p>
    <nav class="nav nav-pills row d-flex justify-content-center">
        <!-- <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#education-show" role="tab" data-toggle="tab">Education Show</a> -->
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2 active" href="#elephant-story" role="tab" data-toggle="tab">Elephant Story</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#dolphin-and-friend" role="tab" data-toggle="tab">Dolphin And Friend</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#mysterious-jungle" role="tab" data-toggle="tab">Mysterious Jungle</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#tiger-show" role="tab" data-toggle="tab">Tiger Show</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#dog-horse-show" role="tab" data-toggle="tab">Dog & Horse Show</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#bird-show" role="tab" data-toggle="tab">Bird Show</a>
        <a type="button" class="btn btn-outline-success text-center text_custom text-uppercase ml-2 mt-2" href="#temple-of-terror" role="tab" data-toggle="tab">Temple of Terror</a>
      </nav>
  

    <div class="row rounded">
      
      <div class="col-12 mt-2 mb-3">
        <div class=" rounded tab-content">
          <!--  -->
          <div role="tabpanel" class="tab-pane active" id="elephant-story">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sasElephantStory as $a) { ?>
           
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_animal_show ?>">
                
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_animal_show ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="dolphin-and-friend">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sasDolphinAndFriend as $a) { ?>
           
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_animal_show ?>">
                
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_animal_show?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="mysterious-jungle">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sasMysteriousJungle as $a) { ?>
          
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_animal_show ?>">
                
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') .$a->img_safari_animal_show ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="tiger-show">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sasTigerShow as $a) { ?>
           
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_animal_show ?>">
                
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_animal_show ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="dog-horse-show">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sasDogHorseShow as $a) { ?>
           
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_animal_show ?>">
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_animal_show ?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
         
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="bird-show">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sasBirdShow as $a) { ?>
           
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_animal_show ?>">
                
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_animal_show?>" class="rounded" width="600">
                    </a>
                  </div>
                </div>
                <?php } ?>
             
              </div>
            </div>
          </div>
          <!--  -->
         
         
          <!--  -->
          <div role="tabpanel" class="tab-pane" id="temple-of-terror">
            <div class="container">
              <div class="row d-flex justify-content-center mb-5 mt-5">
                <!-- looping -->
                <?php foreach ($sasTempleOfTerror as $a) { ?>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                  <div class="text-center">
                  <a href="<?= $a->link_safari_animal_show ?>">
                
                      <img class="img-fluid" src="<?= base_url('assets/dist/img/safari/') . $a->img_safari_animal_show?>" class="rounded" width="600">
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