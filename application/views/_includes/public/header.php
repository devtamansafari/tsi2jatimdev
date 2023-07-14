<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Taman Safari Indonesia II Jatim</title>
    <meta name="description" content="Taman Safari Indonesia (TSI) bukan sekadar sebuah tempat rekreasi. Melainkan, tempat konservasi satwa sekaligus edukasi bagi seluruh anggota keluarga.">
    <meta name="keywords" content="Taman Safari II Jatim">
    <meta name="author" content="Taman Safari indonesia">
    <meta property="og:title" content="Taman Safari Indonesia || Jatim">
    <meta property="og:description" content="Taman Safari Indonesia (TSI) prigen, bukan sekadar sebuah tempat rekreasi. Melainkan, tempat konservasi satwa sekaligus edukasi bagi seluruh anggota keluarga. ">
    <meta property="og:type" content="place">
    <meta property="og:url" content="<?= base_url('') ?>">
    <meta property="og:image" content="<?= base_url('') ?>asset-baru/img/logo/logoPrigen.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <link href="<?= base_url() ?>asset-baru/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.css?">
    <link rel="stylesheet" href="<?= base_url() ?>asset-baru/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>asset-baru/css/style_owl_carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>asset-baru/css/mobile_style.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/owl/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/owl/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/jquery-confirm/css/jquery-confirm.css">
    <link href="<?= base_url() ?>asset-baru/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link href="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" /> -->
    <!-- <style>
        body {
            display: none;
        }
    </style> -->

    <!-- DDPowerZoom -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>asset-baru/js/ddpowerzoomer.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {

            $('#park-map').addpowerzoom({
                // powerrange: [2,5],
                magnifiersize: [100, 100]
            })

        })
    </script>
    <!-- End DDPowerZoom -->

<style>
    /* Pagination */
    .pagination>li>a {
            background-color: white;
            color: #05542E;
        }

        .pagination>li>a:focus,
        .pagination>li>a:hover,
        .pagination>li>span:focus,
        .pagination>li>span:hover {
            color: #05542E;
            background-color: #eee;
            border-color: #ddd;
        }

        .pagination>.active>a {
            color: white;
            background-color: #05542E !Important;
            border: solid 1px #05542E !Important;
        }

        .pagination>.active>a:hover {
            background-color: #05542E !Important;
            border: solid 1px #05542E;
        }

        /* EndPagination */

        
</style>

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar_background fixed-top" id="navbar_top">
        <div class="container">

            <a href="<?= base_url() ?>" class="navbar-brand">
                <img width="155px" src="<?= base_url() ?>asset-baru/img/logo/logoPrigenPutihNew.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">

                <ul class="navbar-nav navbar-no-expand ml-auto">

                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu_margin" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <span class="font_header_nav">Animals</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item font_header_nav" href="<?= base_url() ?>animals/baby-zoo">
                                    Baby Zoo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item font_header_nav " href="<?= base_url() ?>animals/australiana">
                                    Australiana
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item font_header_nav " href="<?= base_url() ?>animals/special-experience">
                                    Special Experience
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!--  -->

                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu_margin" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <span class="font_header_nav">Safari</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item font_header_nav" href="<?= base_url() ?>safari/safari-adventure">
                                    Safari Adventure
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item font_header_nav" href=" <?= base_url() ?>safari/safari-animal-show">
                                    Safari Animal Show
                                </a>
                            </li>

                            <hr class="dropdown-divider">
                            <li>
                                <a class="dropdown-item font_header_nav" href=" <?= base_url() ?>safari/recreation-area">
                                    Recreation Area
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!--  -->
                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu_margin" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <span class="font_header_nav">Accomodations</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item font_header_nav" href="https://baobabsafariresort.com">
                                    Baobab Safari Resort
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!--  -->
                    <!--  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu_margin" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <span class="font_header_nav">Safari Info</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item font_header_nav" href="<?= base_url() ?>safari-info/package">
                                    Package
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item font_header_nav" href="<?= base_url() ?>safari-info/park-map">
                                    Park Map
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item font_header_nav" href="<?= base_url() ?>safari-info/restaurant">
                                    Restaurant
                                </a>
                            </li>

                        </ul>
                    </li>

                    <!--  -->

                    <li class="nav-item">
                        <a href="<?= base_url() ?>post" class="nav-link menu_margin"><span class="font_header_nav">News</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="#" class="nav-link menu_margin"><span class="font_header_nav">Contact</span></a>
                    </li> -->
                    <!-- <li class="nav-item mobile_style">
                        <a class="nav-link menu_margin"><span class="vl"></span></a>
                    </li> -->

                    <!-- <li class="nav-item">

                        <div class="dropdown">
                            <a href="" class="nav-link menu_margin dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                                <span class="font_header_nav"><b></b></span></a>


                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <img style="width:30px" class="ml-4 rounded-circle" src="" />
                                <a class="dropdown-item mt-2" href="#"><b>Hi,</b></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">My Order</a>
                                <a class="dropdown-item" href="">Akun</a>
                                <a class="dropdown-item" href="">Keluar</a>
                            </div>
                        </div>
                    </li> -->

                    <!-- <li class="nav-item">
                        <a href="" class="nav-link "><span class="font_header_nav">Login</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><span class="font_header_nav">Daftar</span></a>
                    </li> -->

                </ul>

            </div>

        </div>
    </nav>
    <!-- End Navbar -->