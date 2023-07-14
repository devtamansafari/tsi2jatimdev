<!-- footer -->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="font_gotham_bold_18px mt-4 text-center">Anggota dari</div>
                <table align="center" class="mt-2">
                    <tr>
                        <td><img class="img-fluid" src="<?= base_url() ?>asset-baru/img/img/anggota_1.svg"></td>
                        <td><img class="img-fluid" src="<?= base_url() ?>asset-baru/img/img/anggota_2.svg"></td>
                        <td><img class="img-fluid" src="<?= base_url() ?>asset-baru/img/img/anggota_3.svg"></td>
                    </tr>
                </table>

            </div>
            <div class="col-sm-6 ">
                <div class="mt-4 text-right font_gotham_bold_18px text-center">Taman Safari Indonesia Group</div>
                <img class="img-fluid mx-auto d-block mt-4" src="<?= base_url() ?>asset-baru/img/img/tsi_group.svg">
            </div>
        </div>
    </div>
</div>
<!-- footer -->

<!--fab-->

<div class="mobile_style btn-group-fab text-align-right" role="group" aria-label="FAB Menu">
    <div class="btn d-flex justify-content-end tiket">
        <a href="#" target="_blank">
            <img width="150px" src="<?= base_url() ?>asset-baru/img/icon/tiket1.png">
        </a>
    </div>
    <div class="btn d-flex justify-content-end">
        <a href="https://wa.me/628111327000" target="_blank">
            <img width="200px" src="<?= base_url() ?>asset-baru/img/icon/fab_wa.svg">
        </a>
    </div>

    <div class="btn d-flex justify-content-end">
        <a href="tel:1500212">
            <img width="200px" src="<?= base_url() ?>asset-baru/img/icon/fab_number.svg">
        </a>
    </div>

</div>

<!-- <div class="mobile_style2 btn-group-fab-kiri text-align-left" role="group" aria-label="FAB Menu">
    <div class="btn d-flex justify-content-end tiket">
        <a href="#" target="_blank">
            <img width="150px" src="<?= base_url() ?>asset-baru/img/icon/tiket1.png">
        </a>
    </div>
    <div class="btn d-flex justify-content-end">
        <a href="https://wa.me/628111327000" target="_blank">
            <img width="200px" src="<?= base_url() ?>asset-baru/img/icon/fab_wa.svg">
        </a>
    </div>

    <div class="btn d-flex justify-content-end">
        <a href="tel:1500212">
            <img width="200px" src="<?= base_url() ?>asset-baru/img/icon/fab_number.svg">
        </a>
    </div>

</div> -->





<!-- footer line-->

<div class="footer_line">
    <div>© <?= date('Y') ?> Taman Safari Bogor. Semua hak dilindungi undang-undang. </div>
    <!--  -->
    <!-- <div id="sfcpqxtfzangx7axph1c13xruyew566w6rr"></div>
        <script type="text/javascript" src="https://counter9.stat.ovh/private/counter.js?c=pqxtfzangx7axph1c13xruyew566w6rr&down=async" async></script>
        <noscript><a href="<?= base_url(); ?>" title="page view counter"><img src="https://counter9.stat.ovh/private/freecounterstat.php?c=pqxtfzangx7axph1c13xruyew566w6rr" border="0" title="page view counter" alt="page view counter"></a></noscript> -->
    <!--  -->
</div>


<script src="<?= base_url() ?>asset-baru/js/jquery.min.js"></script>
<script src="<?= base_url() ?>asset-baru/js/axios.min.js"></script>
<script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url() ?>asset-baru/js/js.js"></script>
<script src="<?= base_url() ?>asset-baru/js/hotel.js"></script>
<script src="<?= base_url() ?>asset-baru/js/modal.js"></script>
<script src="<?= base_url() ?>vendor/owl/js/owl.carousel.js"></script>
<script src="<?= base_url() ?>asset-baru/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url() ?>asset-baru/js/wb.stickylayer.min.js"></script>
<script src="<?= base_url() ?>vendor/jquery-confirm/js/jquery-confirm.js"></script>

<!-- 1423423423424 -->
<!-- Libs JS -->
<!-- <script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/libs/jquery/dist/jquery.slim.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url(); ?>assets/dist/js/tabler.min.js"></script> -->
<!-- <script>
    document.body.style.display = "block"
</script> -->

<!-- CustomJS -->
<script>
    var base_url = "<?= base_url() ?>";

    $(function() {

        $("#box_fix_sosial_media").stickylayer({
            orientation: 2,
            position: [0, 0],
            delay: 500
        });
        date_picker_config();
    });

    function date_picker_config() {
        var date_detail = new Date();
        date_detail.setDate(date_detail.getDate());
        $(".datepicker_web").datepicker({
            autoclose: true,
            startDate: '+0d',
            todayHighlight: true
        }).datepicker('update', date_detail);



        $("#date_other_unit").datepicker({
            autoclose: true,
            startDate: '+0d',
            todayHighlight: true
        }).datepicker('update', date_detail);

    }
</script>

<script>
    var base_url = "<?= base_url() ?>";
    var loading;
    alert_loading("", "supervan");

    var scroll = $(window).scrollTop();

    $(window).scroll(function(event) {
        var scroll = $(window).scrollTop();
        scroll_navbar(scroll);
    });
    scroll_navbar(scroll);


    $("#btn_dropdown_date_tiket").on('click', function() {
        $("#input_dropdown_date_tiket").focus();
    });

    $("#btn_startdate_hotel").on('click', function() {
        $("#checkIn").focus();
    });

    $("#btn_enddate_hotel").on('click', function() {
        $("#checkOut").focus();
    });



    function alert_loading(title, theme) {
        loading = $.confirm({
            title: title,
            content: `<div class="spinner-grow" role="status">
                <span class="sr-only">Loading...</span>
              </div>`,
            theme: theme,
            typeAnimated: true,
            buttons: false,
            closeIcon: false
        });
    }

    function scroll_navbar(scroll) {
        if (!window.matchMedia("(max-width: 767px)").matches) {
            var color = '#05542E';
            var color_navbar = 0;
            if (scroll < 40) {
                $('#navbar_top').addClass("navbar_background");
            }
            if (scroll > 40) {
                color_navbar = "0.3";
                $('#navbar_top').removeClass("navbar_background");
            }
            if (scroll > 60) {
                color_navbar = "0.5";
                $('#navbar_top').removeClass("navbar_background");
            }
            if (scroll > 140) {
                color_navbar = "0.8";
                $('#navbar_top').removeClass("navbar_background");
            }
            if (scroll > 150) {
                color_navbar = "1";
                $('#navbar_top').removeClass("navbar_background");
            }
            var rgbaCol = 'rgba(' + parseInt(color.slice(-6, -4), 16) +
                ',' + parseInt(color.slice(-4, -2), 16) +
                ',' + parseInt(color.slice(-2), 16) +
                ',' + color_navbar + ')';
            $('#navbar_top').css('background-color', rgbaCol);

        }
    }
</script>


<!-- carousel -->

<script>
    $(document).ready(function() {
        var silder = $(".owl-carousel");
        silder.owlCarousel({
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            items: 1,
            responsiveClass: true,
            stagePadding: 10,
            center: true,
            nav: true,
            margin: 20,
            dots: true,
            loop: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    navText: ["<img src='" + base_url + "asset-baru/img/icon/icon_arrow_left_carousel.svg'>",
                        "<img src='" + base_url + "asset-baru/img/icon/icon_arrow_right_carousel.svg'>"
                    ]
                },
                680: {
                    items: 2,
                    nav: true,
                    navText: ["<img src='" + base_url + "asset-baru/img/icon/icon_arrow_left_carousel.svg'>",
                        "<img src='" + base_url + "asset-baru/img/icon/icon_arrow_right_carousel.svg'>"
                    ]

                },
                1000: {
                    items: 3,
                    nav: true,
                    navText: ["<img src='" + base_url + "asset-baru/img/icon/icon_arrow_left_carousel.svg'>",
                        "<img src='" + base_url + "asset-baru/img/icon/icon_arrow_right_carousel.svg'>"
                    ]
                }
            }

        });

        $(".owl-prev").css("background-color", "hsla(290,60%,70%,0)");
        $(".owl-next").css("background-color", "hsla(290,60%,70%,0)");



        loading.close();

    });
</script>

<script>
    $("#btn_cari_tiket").on('click', function() {
        var taman = $("#taman_choose option:selected").val();
        if (taman == "2") {
            window.open('https://ticket.tamansafaribogor.com/', '_blank').focus();
        } else if (taman == "3") {
            window.open('https://ticket.safariprigen.com/', '_blank').focus();
        } else if (taman == "4") {
            window.open('https://booking.balisafarimarinepark.com/', '_blank').focus();
        } else if (taman == "5") {
            $("#form_ticketing").submit();
        }
    });


    $("#btn_safari_beach_pesan").on('click', function() {
        $("#taman_choose").val("5");
        $("#form_ticketing").submit();
    });
</script>


<script>
    // $("a[href^='#']").on('click', function(e) {

    //     e.preventDefault();

    //     var hash = this.hash;

    //     // //animate
    //     $('html, body').animate({
    //         scrollTop: $(hash).offset().top
    //     }, 500, function() {


    //         window.location.hash = hash;
    //     });

    // });
</script>
<!-- End CustomJS -->
</body>


</html>