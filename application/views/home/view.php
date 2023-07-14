<!-- Hero -->
<div id="carouselControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <?php
        foreach($banner as $b => $v){
            $active="";
            if($b+1==1){
                $active="active";
            }
    ?>
    <div class="carousel-item <?= $active?>">
      <a href="<?= $v->link_banner_home?>">
            <?php if( $v->type_banner_home == "Video"){?>

                <video class="d-block w-100 carousel-img img-fluid" src="<?= base_url('assets/dist/img/homes/banner/') ?><?= $v->img_banner_home ?>"  autoplay loop preload="auto" muted>
            <?php }else{ ?>
                <img class="d-block w-100 carousel-img img-fluid" src="<?= base_url('assets/dist/img/homes/banner/') ?><?= $v->img_banner_home ?>">
            <?php }?>
        </a>
    </div>
    <?php }?>
    
    </div>

    <!--  -->
            <!-- <div class="mobile_style2 btn-group-fab text-align-right" role="group" aria-label="FAB Menu">
           
            <div class="btn d-flex justify-content-start">
                <a href="#">
                    <img width="275px" height="175" src="<?= base_url() ?>asset-baru/img/icon">
                </a>
            </div>

        </div> -->
    <!--  -->
</div>
<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>

</div>
<!-- End Hero -->

<!-- form beli tiket -->
<div class="container shadow panel_box_filter">
    <div class="row">
        <div id="tab_tiket" class="col-sm-6 active_tab">
            <div id="font_tab_tiket" class="d-flex justify-content-center font_tab_text_active">
                Tiket Taman
                <!-- <img id="img_tab_tiket" src="<?= base_url() ?>asset-baru/img/icon/icon_tab_tiket_active.svg" class="mr-2" />Tiket Taman -->
            </div>
        </div>
        <div id="tab_hotel" class="col-sm-6 inactive_tab">
            <div id="font_tab_hotel" class="d-flex justify-content-center font_tab_text_inactive">
                <!-- <img id="img_tab_hotel" src="<?= base_url() ?>asset-baru/img/icon/icon_tab_hotel_inactive.svg" class="mr-2" /> -->
                Hotel
            </div>
        </div>
    </div>

    <form id="form_ticketing" action="" method="POST">
        <div id="content_tab_tiket" class="row tabs_tsi shadow">
            <div class="col-lg-5">
                <div class="font_gotham_light_deskripsi mt-2 pl-3 mb-1" style="color:black">Pilih Destinasi
                </div>
                <div class="form-group">
                    <div class="input-group date" id="tanggal_pesanan" data-target-input="nearest">
                        <select id="taman_choose" name="data[taman]" class="form-control combobox_pilih_taman shadow" style="height:42.97px">
                            <option value="safari siang">Safari Siang</option>
                            <option value="safari malam">Safari Malam</option>
                            <option value="safari trek">Safari Trek</option>
                            <option value="istana panda">Istana Panda</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="font_gotham_light_deskripsi mt-2 pl-3 mb-1" style="color:black">Pilih Tanggal
                </div>
                <div class="form-group">

                    <div id="date_other_unit" class="input-group date" data-date-format="d MM yyyy">
                        <input class="form-control combobox_tanggal_produk" id="input_dropdown_date_tiket" name="data[tanggal]" type="text" readonly />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <div class="input-group-append" id="btn_dropdown_date_tiket" style="background-color:white">
                            <a class="input-group-text" style="border-color:#05542E; background-color:white; border-bottom-right-radius: 10px; margin-left:-10px;  border-top-right-radius: 10px;" data-target="#tanggal_pesanan" data-toggle="datetimepicker">
                                <img src="<?= base_url() ?>asset-baru/img/icon/btn_icon_arrow.svg"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2">
                <button type="button" id="btn_cari_tiket" style="margin-top:34px" class="btn btn_cari_tiket shadow">Cari
                    Tiket</button>
            </div>
        </div>
    </form>


    <div id="content_tab_hotel" class="row tabs_tsi shadow display_none">
        <div class="row">
            <div id="form__"></div>
            <div class="col-lg-3">
                <div class="font_gotham_light_deskripsi mt-2 pl-3 mb-1" style="color:black">Pilih Hotel</div>
                <div class="form-group">
                    <div class="input-group date" data-target-input="nearest">
                        <select class="form-control combobox_pilih_taman shadow" id="hotel_data" style="height:42.97px">
                            <option value="rsg">Royal Safari Garden</option>
                            <option value="lodge">Safari Resort</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="font_gotham_light_deskripsi mt-2 pl-3 mb-1" style="color:black">Check In Tanggal
                </div>
                <div class="form-group">
                    <div class="input-group date datepicker_web" data-date-format="d MM yyyy">
                        <input type='text' class="form-control combobox_tanggal_produk" id='checkIn' readonly />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <div class="input-group-append" id="btn_startdate_hotel" style="background-color:white">
                            <a class="input-group-text" style="border-color:#05542E; background-color:white; border-bottom-right-radius: 10px; margin-left:-10px;  border-top-right-radius: 10px;" data-target="#tanggal_pesanan" data-toggle="datetimepicker">
                                <img src="<?= base_url() ?>asset-baru/img/icon/btn_icon_arrow.svg"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="font_gotham_light_deskripsi mt-2 pl-3 mb-1" style="color:black">Check Out Tanggal
                </div>
                <div class="form-group">

                    <div class="input-group date datepicker_web" id="input_enddate_hotel" data-date-format="d MM yyyy">
                        <input type='text' class="form-control combobox_tanggal_produk" id='checkOut' readonly />
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <div class="input-group-append" id="btn_enddate_hotel" style="background-color:white">
                            <a class="input-group-text" style="border-color:#05542E; background-color:white; border-bottom-right-radius: 10px; margin-left:-10px;  border-top-right-radius: 10px;" data-target="#tanggal_pesanan" data-toggle="datetimepicker">
                                <img src="<?= base_url() ?>asset-baru/img/icon/btn_icon_arrow.svg"></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-2">
                <button id="btn_cari_hotel" style="margin-top:34px" class="btn btn_cari_tiket shadow">Booking
                    Kamar</button>
            </div>
        </div>

    </div>


</div>
<!-- end form beli tiket -->

<!-- Plan Your Visit -->

<div id="taman" class="container-fluid" style="">
    <div class="text-center font_sub_taman_hotel">Plan Your Visit</div>

    <div class="container mt-4">
        <div class="row d-flex align-items-center justify-content-center">
            <?php foreach ($plan_your_visit as $v) { ?>
                <div class="col-sm-4 mb-4">
                    <div class="card  card_item_image shadow">
                        <img class="card-img-top card_item_image_top " src="<?= base_url('assets/dist/img/homes/plan/') ?><?= $v->img_plan ?>">
                        <div class="card-body card_body_item">
                            <h5 class="card-title font_card_title"><?= $v->title_plan ?></h5>
                            <p class="card-text font_card_sub_deskripsi text-justify"><?= $v->desc_plan ?></p>

                            <div class="row mx-auto" style="position:absolute;bottom:20px;">
                                <div class="col-xs-6 ">
                                    <button id="btn_safari_beach_pesan" class="btn btn-success btn_pesan_tiket shadow"><img src="<?= base_url() ?>asset-baru/img/icon/icon_tiket_white.svg" class="mr-2" /><span>Pesan
                                            Tiket</span></button>
                                </div>
                                <div class="col-xs-6 ">
                                    <a href="<?= $v->link_detail_plan ?>" class="btn_lihat_detail ml-3">Lihat Detail <img src="<?= base_url() ?>asset-baru/img/icon/ic_right_arrow.svg"></a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>


            <!-- taman -->

        </div>

    </div>


</div>

<!-- End Plan Your Visit -->


<!--news -->
<div id="news" class="background_news">
    <br>
    <br>
    <br>

    <p class="text-center font_sub_taman_hotel">Ada yang baru nih!</p>

    <div class="container mt-4">
        <!-- news -->
        <div class="row">
                

            <div class="col-sm-12">
                <div class="owl-carousel owl-carousel1 owl-theme">
                    <?php foreach ($posts as $n) { ?>
                        <a class="btn_detail_news" href="<?= base_url('post/view/') . $n->post_slug ?>">
                            <div class="card text-center">
                                <img class="card-img-top" src="<?= base_url('assets/dist/img/posts/') . $n->post_thumbnail ?  base_url('assets/dist/img/posts/') . $n->post_thumbnail :  $this->config->item('post_thumbnail_default') ?>" alt="">
                                <div class="linear">
                                    <span class="text_card"><?= $n->post_title ?></span>
                                </div>
                            </div>
                        </a>
                    <?php }
                    ?>

                </div>

            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <a href="<?= base_url() ?>post" class="btn btn-success btn_pesan_tiket shadow">Lihat Semua</a>
        </div>
    
    </div>
   

    <!-- youtube -->
    <div class="container-fluid">
        <div class="row">   
            <!-- <?php
            if (isset($yt)) {
                $youtube_list = json_decode($yt->youtobe_response);
                if (isset($youtube_list->items)) {

                    foreach ($youtube_list->items as $y) { ?>
                        <div class="col-sm-3" style="padding:0px;margin:0px">
                            
                            <a href="https://www.youtube.com/watch?v=<?= $y->id->videoId?>">
                                <img class="img-fluid" style="width:100%;height:180px;object-fit: cover;" src="<?= $y->snippet->thumbnails->high->url ?>">
                                <div class="linear_sosmed">
                                    <table class="detil_text_sosmed" width="100%">
                                        <tr>
                                            <td valign="top"><img class="mr-2" src="<?= base_url() ?>asset/img/icon/icon_logo_tsi_somed.png"></td>
                                            <td style="padding-right:20px"><span><?= $y->snippet->title ?></span></td>
                                        </tr>
                                    </table>
                                </div>
                            </a>
                            
                        </div>
            <?php
                    }
                }
            }
            ?> -->
        </div>
    </div>
    <!--  -->

</div>
<!--news -->

    <!-- souvenir -->

<div id="souvenir" class="background_souvenir">
	<div class="container">
    <br>
		<br>
		<br>
		<p class="text-center font_sub_taman_hotel">Belanja Souvenir</p>
        <div class="souvenirSnapWidget embed-responsive embed-responsive-16by9">
            <iframe src="https://snapwidget.com/embed/643133" class="snapwidget-widget embed-responsive-item" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
        </div>
		<p class="text-center font_sub_taman_hotel">Instagram Kami</p>
        <div class="souvenirSnapWidget embed-responsive embed-responsive-16by9">
            <iframe src="https://snapwidget.com/embed/1019997" class="snapwidget-widget embed-responsive-item" allowtransparency="true" frameborder="0" scrolling="no"></iframe>

        </div>
		
	</div>
</div>

<!-- souvenir -->

<!-- Hubungi Kami -->

<div id="contact" class="container mb-4">
    <br>
    <br>
    <br>
    <p class="text-center font_sub_taman_hotel">Hubungi Kami</p>
    <div class="row">

        <?php foreach ($hubungi_kami as $hub) { ?>
            <div class="col-sm-9">
                <iframe width="100%" height="367.2px" src="<?= $hub->link_gmap ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <div class="col-sm-3" style="text-align:right">
                <div>
                    <span class="font_gotham_bold_18px"><?= $hub->title_hub ?></span>
                    <br>
                    <span class="font_gotham_light_16px">
                        <?= $hub->alamat_hub ?>

                    </span>
                </div>
                <div>
                    <span class="font_gotham_bold_18px"><?= $hub->title_hub_telp ?></span>
                    <br>
                    <span class="font_gotham_light_16px"><?= $hub->isi_hub_telp ?></span>
                </div>
                <div>
                    <span class="font_gotham_bold_18px"><?= $hub->title_hub_email ?></span>
                    <br>
                    <span class="font_gotham_light_16px"><?= $hub->isi_hub_email ?></span>
                </div>
                <div>
                    <span class="font_gotham_bold_18px"><?= $hub->title_hub_ikuti ?></span>
                    <br>
                    <span class="font_gotham_bold_18px">
                        <a href="<?= $hub->link_fb ?>" >

                            <img src="<?= base_url() ?>asset-baru/img/icon/icon_facebook.svg">
                        </a>
                    </span>
                    <span class="font_gotham_bold_18px">
                        <a href="<?= $hub->link_ig ?>" >

                            <img src="<?= base_url() ?>asset-baru/img/icon/icon_instagram.svg">
                        </a>
                    </span>
                    <!-- <table align="right" class="mt-2">
                        <tr>
                            <td>
                                <a href="<?= $hub->link_fb ?>">
                            <img
									src="<?= base_url() ?>asset-baru/img/icon/icon_facebook.svg">
                            </a>
                        </td>
                            
						<td>
                            <a href="<?= $link_ig ?>">
                                <img src="<?= base_url() ?>asset-baru/img/icon/icon_instagram.svg">
                            </a>
                        </td>
                        </tr>
                    </table> -->
                </div>

            </div>
        <?php } ?>
    </div>
</div>