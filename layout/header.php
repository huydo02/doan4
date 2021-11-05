<?php 

// $ssuser = (isset($_SESSION['user'])) ? $_SESSION['user']: '';
$dms = CatDB::getCat();
$brs = brandDB::getBrand();
?>
<!doctype html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="OKTck9wDNpRbrEIn_nA3VTYsznd8NcVJlivXJdKGx40" />
    <link rel="shortcut icon" href="/images/favicon-96x96.png" />
   
    <meta name="description" content="Coolmate giải pháp mua sắm cả tủ đồ cho nam giới đầy đủ áo thun, quần short, quần lót, tất
(vớ), đồ thể thao. Mua online tại coolmate.me chất lượng tốt giá cả cạnh tranh, giao hàng nhanh toàn quốc, đổi trả miễn
phí 60 ngày." />
    <link rel="canonical" href="https://www.coolmate.me">

    <meta property="og:type" content="website">
    <meta property="og:title" content="CoolMate - Giải pháp mua sắm cả tủ đồ cho nam giới">
    <meta property="og:description" content="Coolmate giải pháp mua sắm cả tủ đồ cho nam giới đầy đủ áo thun, quần short, quần lót, tất
(vớ), đồ thể thao. Mua online tại coolmate.me chất lượng tốt giá cả cạnh tranh, giao hàng nhanh toàn quốc, đổi trả miễn
phí 60 ngày.">
    <meta property="og:url" content="https://www.coolmate.me">
    <meta property="og:site_name" content="Coolmate">
    <meta property="og:image" content="https://www.coolmate.me/images/og_img_0418.jpg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="800">



    <meta name="_token" content="PPjCitgzU1Ziq5iy5EWEvrBtLCuUQIG0WuS8CE7S" />
    <script>
        var cool_mate_settings = {
            DEVICE_TOKEN: "49e5a5e65a9c136368cd93039e44b372",
            BOX_TOKEN: "34df7df2af591625bf8d7d52ab98270f",
            API_URL: 'https://apiv2.coolmate.me/api/v1',
            APP_URL: 'https://www.coolmate.me',
            MEDIA_URL: 'https://media.coolmate.me',
            _TOKEN: 'PPjCitgzU1Ziq5iy5EWEvrBtLCuUQIG0WuS8CE7S',
            _LOGGED: '0',
            RELOAD_AFTER_AJAX_CALLED: '1',
            TET_CAMPAIGN: '1',
            DISCOUNT_MOMO: '',
            BG_ONE_CAMPAIGN: ''
        }


        function delayLoad(f, timeout) {
            if (typeof(timeout) == undefined) {
                timeout = 4000;
            }

            setTimeout(function() {
                f();
            }, 4000);
        }
    </script>
      <script src="https://www.coolmate.me/js/_pre.js?v=3zkMlgocEM5wBpw7KF"></script>
      <link href="https://www.coolmate.me/css/collection-page.css?v=3zkMlgocEM5wBpw7KF" rel="stylesheet" type="text/css">
<script defer src="https://www.coolmate.me/js/vendors/jquery.min.js?v=3zkMlgocEM5wBpw7KF"></script>
<script defer src="https://www.coolmate.me/js/vendors/jquery.lazyload.min.js?v=3zkMlgocEM5wBpw7KF"></script>

<link href="https://www.coolmate.me/css/fonts.css?v=3zkMlgocEM5wBpw7KF"
      rel="stylesheet" type="text/css">
    <link href="https://www.coolmate.me/css/home.css?v=3zkMlgocEM5wBpw7KF" rel="stylesheet" type="text/css">
<link defer href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet"
      type="text/css">
       <script src="https://www.coolmate.me/js/_pre.js?v=8ITVD3F78UsUZ1kfXW"></script>

    <script defer src="https://www.coolmate.me/js/vendors/jquery.min.js?v=8ITVD3F78UsUZ1kfXW"></script>
    <script defer src="https://www.coolmate.me/js/vendors/jquery.lazyload.min.js?v=8ITVD3F78UsUZ1kfXW"></script>

    <link href="https://www.coolmate.me/css/fonts.css?v=8ITVD3F78UsUZ1kfXW"
          rel="stylesheet" type="text/css">
        <link href="https://www.coolmate.me/css/account-page.css?v=8ITVD3F78UsUZ1kfXW"
          rel="stylesheet" type="text/css">
          
    <link rel="stylesheet" type="text/css"
          href="https://www.coolmate.me/css/vendors/daterangepicker.min.css?v=8ITVD3F78UsUZ1kfXW"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="https://www.coolmate.me/js/vendor.js?v=8ITVD3F78UsUZ1kfXW"></script>
    <script src="https://unpkg.com/@goongmaps/goong-sdk@1.0.7/umd/goong-sdk.min.js"></script>
    <link defer href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet"
          type="text/css">
          <style>
        .select2-container--default .select2-selection--single {
            height: 55px;
            border-radius: 0 !important;
        }

        .select2-selection__rendered {
            line-height: 55px !important;
            padding-left: 22px !important;
            padding-right: 27px !important;
        }

        .select2-selection__arrow {
            height: 55px !important;
            width: 35px !important;
        }

        .cart-coolclub-badget {
            left: 110px;
            position: absolute;
            margin-top: 20px;
            background: black;
            color: white;
            padding: 2px 7px;
            font-size: 12px;
            font-weight: bold;
            border: #000 solid 1px;
        }

        /* Remove 'powered by Google' logo in address auto Complete */
        .pac-container:after {
            background-image: none !important;
            height: 0;
        }

        .pac-item {
            padding: 7px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .form-control--error {
            border-color: #da5600 !important;
        }

        .help-text {
            color: #da5600 !important;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 99;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: calc(100vh - 500px) auto;
            padding: 20px;
            border: 2px solid #fa6400;
            width: 80vw;
            max-width: 480px;
            text-align: center;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            width: 53.05%;
        }

        .autocomplete-items div {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }
    </style>
    <style>
        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            width: 96%;
        }

        .autocomplete-items div {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }
    </style>

    <script defer src="https://www.coolmate.me/js/vendors/lazysizes.min.js?v=8ITVD3F78UsUZ1kfXW"></script>
    <script defer src="https://www.coolmate.me/js/vendors/ls.rias.min.js?v=8ITVD3F78UsUZ1kfXW"></script>
    <script defer src="https://www.coolmate.me/js/vendors/ls.bgset.min.js?v=8ITVD3F78UsUZ1kfXW"></script>

    <script defer src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Load Facebook SDK for JavaScript -->
    <style>
        .section-preorder {
            position: relative;
        }

        .section-preorder__bg {
            position: absolute;
            top: 20%;
            left: 0;
            width: 100%;
            height: 60%;
            opacity: 0.1;
        }

        .section-preorder__bg.left {
            height: 40%;
            top: auto;
            bottom: 0;
        }

        .section-preorder__bg.left img {
            width: 100%;
            height: 100%;
            object-position: right;
            object-fit: contain;
            transform: scaleX(-1);
        }

        .section-preorder__bg.right img {
            width: 100%;
            height: 100%;
            object-position: right;
            object-fit: contain;
        }

        .product-new__thumbnail:before {
            content: "";
            display: block;
            height: 0;
            width: 100%;
            padding-top: 66.95%;
        }

        .product-new__thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
        }

        .hotdeal-heading {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-image: linear-gradient(90deg, #f11200, #ff7b01);
            font-size: 36px;
            color: #fff;
            font-weight: bold;
            padding: 0px 70px 0px 0;
            border-top-right-radius: 100px;
            border-bottom-right-radius: 100px;
            position: relative;
            margin-bottom: 30px;
            height: 85px;
            margin-left: 240px;
        }

        .hotdeal-heading:before {
            content: "";
            position: absolute;
            top: 0px;
            right: 100%;
            width: 240px;
            height: 100%;
            background-image: url('https://mcdn.coolmate.me/image/July2021/3-31294_hot-deal-png-hot-deal-logo-png_(1)_1(2).png');
            background-size: auto 100%;
            background-repeat: no-repeat;
        }

        .section-hotdeal {
            position: relative;
        }

        .section-hotdeal:before {
            content: "";
            position: absolute;
            top: 13%;
            left: 0;
            width: 100%;
            height: 90%;
            background-image: url("https://mcdn.coolmate.me/image/July2021/Group_25(1).png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.5;
        }

        @media screen and (max-width: 768px) {
            .hotdeal-heading {
                font-size: 16px;
                height: 40px;
                margin-left: 75px;
                padding-right: 35px;
                margin-bottom: 15px;
            }
            .hotdeal-heading:before {
                width: 110px;
            }
            .section-products {
                padding-top: 0;
            }
            .blog__item,
            .blog__thumbnail {
                width: 100%;
            }
        }
    </style>

    <script defer src="https://www.coolmate.me/js/vendors/lazysizes.min.js?v=8ITVD3F78UsUZ1kfXW"></script>
    <script defer src="https://www.coolmate.me/js/vendors/ls.rias.min.js?v=8ITVD3F78UsUZ1kfXW"></script>
    <script defer src="https://www.coolmate.me/js/vendors/ls.bgset.min.js?v=8ITVD3F78UsUZ1kfXW"></script>

    <script defer src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <style>
        .product-grid__item--thumbnail:before,
        .product__image:before {
            content: "";
            position: absolute;
            bottom: 0px;
            right: 0px;
            width: 70%;
            height: 70%;
            
            background-size: contain;
            background-repeat: no-repeat;
            background-position: bottom right;
            z-index: 1;
            pointer-events: none;
        }


        .large-box-page .product__image:before,
        .builder-page .product__image:before {
            display: none;
        }
    </style>


    <!-- remove number arrows -->
    <style>
        .product__image--limited:after {
            content: "";
            background-image: url("https://mcdn.coolmate.me/image/March2021/Asset_12x.png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__image--new:after {
            content: "";
            background-image: url("https://mcdn.coolmate.me/image/April2021/New_(4)1.png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__image--sale:after {
            content: "";
            background-image: url("https://mcdn.coolmate.me/image/March2021/Frame_Website-04.png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__image--hot:after {
            content: "";
            background-image: url("https://mcdn.coolmate.me/image/March2021/Frame_Website-05.png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__balge--premium {
            position: absolute;
            right: -41px;
            font-size: 14px;
            font-weight: 700;
            -webkit-transform: rotate(45deg);
            border-bottom: 3px solid;
            border-top: 3px solid;
            color: #fff;
            padding: 7px 0 4px;
            letter-spacing: 1px;
            -webkit-box-shadow: 0 0 10px 0 #3333;
            box-shadow: 0 0 10px 0 #3333;
            content: "";
            background-image: url("https://mcdn.coolmate.me/uploads/July2021/pre3_12x(2).png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__balge--premium svg {
            display: none;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    <style>
        .site-footer__comments {
            background-color: #6f6f6f11;
            border-radius: 10px;
            padding: 15px;
            width: 240px;
            max-width: 100%;
        }

        .site-footer__comments .title {
            font-weight: 700;
            text-transform: uppercase;
            color: #000;
            font-size: 14px;
            margin-top: 0;
            margin-bottom: 0;
        }

        .site-footer__comments .desc {
            font-size: 14px;
            margin-bottom: 10px;
            margin-top: 0;
        }

        .site-footer__comments .link {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border: 2px solid #fa6400;
            color: #fa6400;
            border-radius: 3px;
            height: 35px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
        }

        .site-footer__comments .link .icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 16px;
            height: 16px;
            margin-right: 10px;
        }

        .site-footer__comments .link .icon path {
            fill: currentColor;
        }

        @media screen and (max-width: 768px) {
            .site-footer__comments {
                width: 100%;
            }
        }

        .site-header__cart .cartlabel {
            position: absolute;
            font-size: 12px;
            bottom: 6px;
            left: 0;
            width: 100%;
            text-align: center;
        }

        @media screen and (min-width: 1919px) {
            .site-header__cart .cartlabel {
                bottom: 10px;
            }
        }
    </style>


</head>

<body class="home-page  ">



    <div class="site-wrapper has-topbar" id="site-wrapper">
        <div class="site-header">
            <div class="site-topbar" style="z-index: 1"><a href="https://www.coolmate.me/page/chinh-sach-1010">GIẢM TOÀN BỘ 50% TỪ SẢN PHẨM THỨ 2 </a></div>
            <div class="site-header__wrapper">

                <div class="container">
                    <div class="site-header__inner">
                        <div class="site-header__logo">
                            <a href="trang-chu.html">


                        <img src="https://mcdn.coolmate.me/image/June2021/logo-coolmate_fm.png"
                             alt="Cool Mate - Everyday Excitement">


                    </a>
                        </div>
                        <div class="site-header__menu">
                            <div class="site-nav">
                                <ul class="no-style">
                
                                
                                    <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
                                        <a href="/collection/ao-thun-nam?sort=bestseller">
                LAPTOP THEO HÃNG
                <span class="new">Hot</span>
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
                                        <div class="site-megamenu">
                                            <div class="site-megamenu__container">
                                                <div class="site-megamenu__row">
                                                <?php
  if (!empty($brs)):
    foreach ($brs as $br):  
  ?> 
                                                    <div class="site-megamenu__column">
                                                        <a href="<?php echo Helper::get_url('laptop-theo-hang/'.$br->getNamebrand()); ?>" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <img src="<?php echo $br->getLogo(); ?>" alt="">
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                    <?php echo $br->getNamebrand(); ?>
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                    <?php endforeach; endif; ?> 
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
  if (!empty($dms)):
    foreach ($dms as $dm):  
?> 
                                    <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
                                        <a href="<?php echo Helper::get_url('danh-muc/'.$dm->getIdcat().'/'.Helper::rewrite($dm->getNamecat())); ?>"> <span style="text-transform: uppercase"><?php echo $dm->getNamecat(); ?></span></a>
                                    </li>
                                    <?php endforeach; endif; ?>
                                </ul>
                            </div>
                        </div>
                        <ul class="no-style site-header__tools">
                            <li class="desk--hidden large--hidden">
                                <a href="#" class="site-header__menubar-tablet" data-active-menu-tablet>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                            </li>
                            <?php if (!Form_Authen::is_login()) : ?>
                                <li class="user-menu">
                                    <a href="<?php echo Helper::get_url('?c=login') ?>" class="site-header__user">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 18">
                                                <defs></defs>
                                                <title>account</title>
                                                <g id="Layer_2" data-name="Layer 2">
                                                    <g id="Layer_1-2" data-name="Layer 1">
                                                        <path fill="currentColor" d="M14,17.18a.78.78,0,1,1-1.56,0A5.59,5.59,0,0,0,7,11.45a5.59,5.59,0,0,0-5.44,5.73A.8.8,0,0,1,.78,18,.8.8,0,0,1,0,17.18,7.18,7.18,0,0,1,7,9.82,7.18,7.18,0,0,1,14,17.18ZM7,9A4.4,4.4,0,0,1,2.72,4.5,4.4,4.4,0,0,1,7,0a4.4,4.4,0,0,1,4.28,4.5A4.4,4.4,0,0,1,7,9ZM7,7.36A2.79,2.79,0,0,0,9.72,4.5,2.79,2.79,0,0,0,7,1.64,2.79,2.79,0,0,0,4.28,4.5,2.79,2.79,0,0,0,7,7.36Z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="site-header__coolclub" style="white-space: nowrap;font-size: 12px;bottom: 6px;">Đăng nhập</span>
                                    </a>

                                </li>
                            <?php endif; ?>

                            <?php if (Form_Authen::is_login()) : ?>
                                <li class="user-menu">
                                    <a href="<?php echo Helper::get_url('?c=info') ?>" class="site-header__user">
                                        <span>
                                            <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M404 148C404 66.395 337.605 0 256 0S108 66.395 108 148c0 50.547 25.48 95.25 64.262 121.965-36.211 12.492-69.399 33.133-97.282 61.015C26.63 379.332 0 443.621 0 512h40c0-119.102 96.898-216 216-216 81.605 0 148-66.395 148-148zM256 256c-59.55 0-108-48.45-108-108S196.45 40 256 40s108 48.45 108 108-48.45 108-108 108zm66 135.98h190v40H322zM512 312v40H322v-40zM322 472h190v40H322zm0 0" />
                                            </svg>


                                        </span>

                                    </a>
                                    <ul class="site-header__user-menu no-style">
                                        <li><a href="<?php echo Helper::get_url('?c=info') ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.299" height="11.193" viewBox="0 0 11.299 11.193">
                                                    <g id="avatar2" transform="translate(0.001 -1.916)">
                                                        <g id="Group_2514" data-name="Group 2514" transform="translate(-0.001 1.916)">
                                                            <path fill="currentColor" id="Path_816" data-name="Path 816" d="M115.376,7.846a2.775,2.775,0,0,0,2.533-2.965c0-2.271-1.134-2.965-2.533-2.965s-2.533.694-2.533,2.965A2.775,2.775,0,0,0,115.376,7.846Z" transform="translate(-109.727 -1.916)" />
                                                            <path fill="currentColor" id="Path_817" data-name="Path 817" d="M11.243,225.636l-1.278-2.879a.641.641,0,0,0-.289-.308l-1.983-1.033a.128.128,0,0,0-.136.011,3.129,3.129,0,0,1-3.815,0,.128.128,0,0,0-.136-.011l-1.983,1.033a.641.641,0,0,0-.289.308L.055,225.636a.639.639,0,0,0,.584.9h10.02a.639.639,0,0,0,.584-.9Z" transform="translate(0.001 -215.342)" />
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span>Thông tin cá nhân</span>
                                            </a></li>
                                        <li><a href="<?php echo Helper::get_url('?c=orders') ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.312" height="12.598" viewBox="0 0 11.312 12.598">
                                                    <g id="Group_2516" data-name="Group 2516" transform="translate(0.1 0.1)">
                                                        <path data-name="Path 818" d="M112.416,200.484a.484.484,0,0,0-.484-.484h-4.988a.484.484,0,1,0,0,.969h4.988A.484.484,0,0,0,112.416,200.484Z" transform="translate(-104.525 -195.157)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2" />
                                                        <path data-name="Path 819" d="M106.943,280a.484.484,0,1,0,0,.969h3.029a.484.484,0,0,0,0-.969Z" transform="translate(-104.525 -273.22)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2" />
                                                        <path data-name="Path 820" d="M30.127,11.429h-1.62a.97.97,0,0,1-.969-.969V1.937a.97.97,0,0,1,.969-.969h5.954a.97.97,0,0,1,.969.969V4.915a.484.484,0,0,0,.969,0V1.937A1.939,1.939,0,0,0,34.461,0H28.507A1.939,1.939,0,0,0,26.57,1.937V10.46A1.939,1.939,0,0,0,28.507,12.4h1.62a.484.484,0,1,0,0-.969Z" transform="translate(-26.57)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2" />
                                                        <path data-name="Path 821" d="M248.891,272.449a1.454,1.454,0,0,0-2.054,0l-2.659,2.653a.484.484,0,0,0-.121.2l-.579,1.906a.484.484,0,0,0,.593.607l1.955-.541a.484.484,0,0,0,.213-.124l2.653-2.648A1.454,1.454,0,0,0,248.891,272.449Zm-3.247,3.927-.983.272.288-.948,1.794-1.79.685.685Zm2.563-2.558-.094.094-.685-.685.094-.093a.484.484,0,0,1,.685.685Z" transform="translate(-238.205 -265.437)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2" />
                                                        <path data-name="Path 822" d="M111.931,120h-4.988a.484.484,0,1,0,0,.969h4.988a.484.484,0,1,0,0-.969Z" transform="translate(-104.525 -117.094)" fill="currentColor" stroke="#bfbfbf" stroke-width="0.2" />
                                                    </g>
                                                </svg>
                                                <span>Danh sách đơn hàng</span>
                                            </a></li>
                                            <?php if(Form_Authen::is_admin()):?>
                                        <li><a href="<?php echo Helper::get_url('admin')?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512" width="512" height="512">
                                                    <title>Commercial delivery </title>
                                                    <polygon fill="currentColor" points="203.654 241.22 377.296 140.969 295.628 93.818 121.986 194.069 203.654 241.22" />
                                                    <polygon fill="currentColor" points="197 253.344 23 153.085 23 353.619 197 453.878 197 253.344" />
                                                    <rect x="351" y="356" width="19" height="19" />
                                                    <path d="M211,253.344V453.878l95-54.935V254.182A30.037,30.037,0,0,1,335.891,224H360.8a24.533,24.533,0,0,1,23.417-18H384V153.085Z" fill="currentColor" />
                                                    <rect x="374" y="220" width="61" height="21" rx="10.161" />
                                                    <polygon fill="currentColor" points="281.628 85.735 203.654 40.717 30.013 140.969 107.986 185.987 281.628 85.735" />
                                                    <path d="M472.916,238H447.733a23.942,23.942,0,0,1-23.143,17H384.217a23.944,23.944,0,0,1-23.144-17H335.891A16.022,16.022,0,0,0,320,254.182v202.1A15.628,15.628,0,0,0,335.891,472H472.916A15.793,15.793,0,0,0,489,456.282v-202.1A16.186,16.186,0,0,0,472.916,238ZM337,285.033A6.985,6.985,0,0,1,343.949,278h32.975A7.093,7.093,0,0,1,384,285.033v4.71a7.019,7.019,0,0,1-7.038,6.984A6.739,6.739,0,0,1,370.307,292H351v19h.276a7,7,0,1,1,0,14h-7.327A6.95,6.95,0,0,1,337,318.008ZM337,349a7,7,0,0,1,7-7h33a7,7,0,0,1,7,7v33a7,7,0,0,1-7,7H344a7,7,0,0,1-7-7Zm14.277,104h-7.328A6.752,6.752,0,0,1,337,446.244V413.269A7.191,7.191,0,0,1,343.949,406h32.975A7.3,7.3,0,0,1,384,413.269v6.745A7.037,7.037,0,0,1,369.929,420H351v19h.277a7,7,0,1,1,0,14Zm51.664-27.259-25.452,25.452a7,7,0,0,1-9.9,0L356.4,440.007a7,7,0,1,1,9.9-9.9l6.236,6.237,20.5-20.5a7,7,0,0,1,9.9,9.9Zm0-129.249-25.452,25.452a7,7,0,0,1-9.9,0L356.4,310.758a7,7,0,1,1,9.9-9.9l6.236,6.237,20.5-20.5a7,7,0,0,1,9.9,9.9ZM464.857,437H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Zm0-64H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Zm0-64H420.891a7,7,0,0,1,0-14h43.966a7,7,0,0,1,0,14Z" fill="currentColor" />
                                                </svg>
                                                <span>Admin</span>
                                            </a></li>
                                            <?php endif;?>
                                        <li><a href="<?php echo Helper::get_url('?c=logout') ?>">
                                                <svg height="512" width="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M480.971 239.029l-90.51-90.509a24 24 0 00-33.942 0 24 24 0 000 33.941L406.059 232H144a24 24 0 00-24 24 24 24 0 0024 24h262.059l-49.54 49.539a24 24 0 0033.942 33.941l90.51-90.51a24 24 0 000-33.941z" />
                                                    <path d="M304 392a24 24 0 00-24 24v24H72V72h208v24a24 24 0 0048 0V64a40 40 0 00-40-40H64a40 40 0 00-40 40v384a40 40 0 0040 40h224a40 40 0 0040-40v-32a24 24 0 00-24-24z" />
                                                </svg>
                                                <span>Thoát</span>
                            </a></li>
                        </ul>

                        
                    </li>
                            <?php endif; ?>
                            <?php
    
    $cart = [];
    if(isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
      
    }
    
    $count = 0;
    foreach ($cart as $item) {
        $count += $item['num'];
    }
    ?>
                            <li>
                                <button class="site-header__search">
                            <svg height="512" viewBox="0 0 6.35 6.35" width="512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M2.894.511a2.384 2.384 0 00-2.38 2.38 2.386 2.386 0 002.38 2.384c.56 0 1.076-.197 1.484-.523l.991.991a.265.265 0 00.375-.374l-.991-.992a2.37 2.37 0 00.523-1.485C5.276 1.58 4.206.51 2.894.51zm0 .53c1.026 0 1.852.825 1.852 1.85S3.92 4.746 2.894 4.746s-1.851-.827-1.851-1.853.825-1.852 1.851-1.852z" paint-order="stroke fill markers"/></svg>
                        </button>
                            </li>
                            <li class="site-header__mini-cart">
                                <a href="<?php echo Helper::get_url('?c=cart')?>" class="site-header__cart site-header__cart--active">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M89.5 137.6c-10.2 0-18.4 8.2-18.5 18.3v.2L53.8 480.5c0 10.2 8.2 18.4 18.3 18.5h367.6c10.2 0 18.4-8.2 18.5-18.3v-.1L441 156.1c.1-10.2-8.1-18.4-18.3-18.5H89.5zm18.3 36.8h296.5l17.2 287.8h-331l17.3-287.8z"/><path fill="currentColor" d="M366.5 170.8c10.2-.1 18.3-8.4 18.2-18.6v-.2c0-78-54-137-127.5-137S127.4 73.6 127.4 152c-.2 10.1 7.8 18.6 18 18.8 10.2.2 18.6-7.8 18.8-18v-.8c0-61.9 38.1-100.3 93.1-100.3 55 0 90.7 38 90.7 100.3-.2 10.1 7.9 18.5 18 18.7.1.1.3.1.5.1z"/><path fill="currentColor" d="M172 213.6c-7.7.1-13.9 6.4-13.8 14.1v.1c0 59.3 41.1 104.1 96.9 104.1 55.9 0 98.7-44.6 98.7-104.1.2-7.7-5.9-14.1-13.7-14.3-7.7-.2-14.1 5.9-14.3 13.7v.6c0 47-29 76.2-70.7 76.2-41.8 0-69-28.8-69-76.2.2-7.7-6-14.1-13.7-14.2h-.4z" stroke="currentColor" stroke-width="9" stroke-miterlimit="10"/></svg>
                            </span>
                            <span class="site-header__cartcount site-header__cart--active">
                            <?=$count?>                          </span>
                            <span class="cartlabel">
                                Giỏ hàng
                            </span>
                        </a>
                        <?php
$cart = [];
if(isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
}
$count = 0;
?>
                        <div class="mini-cart">
                                             
<?php
foreach($cart as $item){
    (++$count);
}
?>

                        <h2 class="mini-cart__heading">
                <span><?php  echo $count;?> Sản phẩm</span>
        <a href="<?php echo Helper::get_url('?c=cart')?>" class="text--primary">Xem tất cả</a>
    </h2>
  
   
    <div class="cart">

                 
<?php
foreach($cart as $item):
?>

    
                                                                                    <div class="mini-cart__item">
                        <div class="mini-cart__image">
                            <img class=" ls-is-cached lazyloaded" src="<?php echo $item['thumbnail'];?>" alt="">
                                                    </div>
                        <div class="mini-cart__title">
                            <h3>
                                <a href="https://www.coolmate.me/product/ao-so-mi-nam-dai-tay-cafe-dris-khu-mui"><?php echo $item['title'];?></a>
                            </h3>
                            <div class="mini-cart__prices">
                                                                                                    <span>
                                    <?php echo number_format($item['price'], 0, '', '.')?> VND
                                    </span>
                                                                                                </div>
                            <div class="mini-cart__variant">
                                <input type="hidden" name="_token" value="rO2rQ1vqNe14xcVBh8z2rmn5nqHbTopdVOk73HER">                                                                                                                                                                                    <div class="mini-cart__variant-field" data-id="60b48e486dfb751d685e83a4" data-option="option1" data-option-value="Trắng">
                                            <span>Màu sắc: </span>
                                            <span class="mini-cart__variant-select">Trắng</span>
                                        </div>
                                                                                                                                                                                        <div class="mini-cart__variant-field" data-id="60b48e486dfb751d685e83a4" data-option="option2" data-option-value="L">
                                            <span>Kích thước Áo: </span>
                                            <span class="mini-cart__variant-select">L</span>
                                        </div>
                                                                                                                                                                                                                                                        </div>
                            <div class="mini-cart__variant">
                                <div class="mini-cart__variant-field">
                                    <span>SL: <?php (++$count); echo $item['num'];?> </span>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                                        
                                        
                                        <?php endforeach; ?>
                                        </div>
                                       
</div>
                            </li>
                        </ul>

                        <div class="site-header__menu-tablet">
                            <div class="site-nav">
                                <ul class="no-style">
                                    <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
                                        <a href="#">
                BỘ SƯU TẬP
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
                                        <ul class="site-nav__submenu no-style">
                                            <li>
                                                <a href="/page/bo-suu-tap-thu-dong">
                        BST Thu-đông <span style="background: #fa6400;color: white;padding: 5px;border-radius: 3px;font-size: 10px;font-weight: bold;">HOT</span>
                    </a>
                                            </li>
                                            <li>
                                                <a href="/collection/care-and-share">
                        Care & Share
                    </a>
                                            </li>
                                            <li>
                                                <a href="/collection/gbr-collection">
                        GBR Collection
                    </a>
                                            </li>
                                            <li>
                                                <a href="/lp/bo-suu-tap-coolmate-x-lac-khoi">
                        Lạc Khởi Collection
                    </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
                                        <a href="/collection/ready-to-use-boxes">
                TỦ ĐỒ
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
                                        <ul class="site-nav__submenu no-style">
                                            <li><a href="/coolsub">Tủ đồ định kỳ - Cool Sub <span style="background: green;color: white;padding: 5px;border-radius: 3px;font-size: 10px;font-weight: bold;">NEW</span></a></li>
                                            <li><a href="/collection/ready-to-use-boxes">Tủ đồ tạo sẵn</a></li>

                                        </ul>
                                    </li>
                                    <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
                                        <a href="/collection/ao-thun-nam?sort=bestseller">
                ÁO
                <span class="new">Hot</span>
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
                                        <div class="site-megamenu">
                                            <div class="site-megamenu__container">
                                                <div class="site-megamenu__row">
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/ao-so-mi-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg width="448" height="480" viewBox="0 0 448 480" xmlns="http://www.w3.org/2000/svg"><path d="M86.168 447.787l136 32a7.99 7.99 0 003.664 0l136-32A7.998 7.998 0 00368 440v-40h40a8 8 0 007.882-6.629l32-184a8.012 8.012 0 00-.338-4.033l-48-136a7.997 7.997 0 00-5.604-5.099l-93.38-23.344-30.313-37.893A8.004 8.004 0 00264.08 0h-80.16a8.004 8.004 0 00-6.167 3.002l-30.314 37.893-93.38 23.344a7.997 7.997 0 00-5.603 5.099l-48 136a8.012 8.012 0 00-.338 4.033l32 184A8 8 0 0040 400h40v40a7.998 7.998 0 006.168 7.787zM224 43.504L201.08 16h45.84L224 43.504zM368 384v-24h37.445l-4.174 24H368zm63.76-175.31L408.228 344H368V160h-16v273.664L232 461.9V75.314l26.343 26.343a8.004 8.004 0 0012.313-1.22l28.873-43.309 86.358 21.59L431.76 208.69zM286.098 48.43l-23.341 35.013-27.934-27.934 29.05-34.86 22.225 27.78zM184.126 20.648l29.05 34.86-27.933 27.935L161.9 48.43l22.225-27.782zM62.112 78.718l86.358-21.59 28.874 43.31a7.999 7.999 0 0012.313 1.22L216 75.313V461.9L96 433.664V160H80v184H39.772L16.24 208.69 62.112 78.718zM42.554 360H80v24H46.728l-4.174-24z" fill="#000" fill-rule="nonzero"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo Sơ mi
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/ao-polo-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M486.238 211.926L465.284 86.207c-3.391-20.343-18.568-36.487-38.665-41.125l-80.203-18.508L331.079 3.57a8.016 8.016 0 00-5.615-3.5 7.777 7.777 0 00-1.055-.061V0H187.591v.006a7.79 7.79 0 00-1.055.064 8.017 8.017 0 00-5.615 3.5l-15.336 23.005L85.38 45.084c-20.097 4.638-35.273 20.78-38.665 41.125L25.762 211.926a8.016 8.016 0 004.93 8.762l80.473 32.189v251.107a8.017 8.017 0 008.017 8.017h273.637a8.017 8.017 0 008.017-8.017V252.877l80.473-32.189a8.02 8.02 0 004.929-8.762zM331.971 33.81L297.05 89.683a.501.501 0 01-.363.245.506.506 0 01-.423-.11L268.49 67.599l54.32-47.53 9.161 13.741zm-28.899-17.777L256 57.222l-47.073-41.189h94.145zm-37.986 69.376v76.529a.535.535 0 01-.534.534H247.45a.535.535 0 01-.534-.534V85.409L256 78.14l9.086 7.269zm-75.895-65.341l54.32 47.53-27.773 22.219a.511.511 0 01-.423.11.501.501 0 01-.363-.244L180.031 33.81l9.16-13.742zm-78.026 215.54l-68.526-27.411 2.647-15.877 65.879 26.353v16.935zm273.637 260.359H127.198v-18.171h257.603v18.171zm8.016-350.597a8.017 8.017 0 00-8.017 8.017v308.376H127.198V153.386c0-4.428-3.589-8.017-8.017-8.017s-8.017 3.588-8.017 8.017v48.017l-63.18-25.273L62.53 88.844c2.32-13.919 12.705-24.964 26.455-28.139l77.734-17.939 34.634 55.416a16.583 16.583 0 0014.045 7.785c3.736 0 7.398-1.265 10.354-3.63l5.127-4.1v63.701c0 9.136 7.432 16.568 16.568 16.568h17.102c9.136 0 16.568-7.432 16.568-16.568V98.237l5.127 4.101a16.59 16.59 0 0013.132 3.395 16.579 16.579 0 0011.267-7.551l34.634-55.415 77.735 17.938c13.75 3.175 24.136 14.219 26.455 28.139l14.548 87.286-63.183 25.273v-48.017a8.011 8.011 0 00-8.014-8.016zm8.017 90.238v-16.936l65.88-26.351 2.647 15.877-68.527 27.41z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo Polo
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/ao-in-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg height="512pt" viewBox="0 -40 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="M506.855 119.652c6.86-6.859 6.86-18.02 0-24.879L414.277 2.191A7.496 7.496 0 00408.984 0H354.52c-14.02 0-26.684 8.348-32.27 21.262-11.434 26.457-37.441 43.554-66.25 43.554s-54.816-17.097-66.25-43.554C184.168 8.344 171.5 0 157.48 0h-54.464a7.48 7.48 0 00-5.29 2.191L5.146 94.773c-6.86 6.86-6.86 18.02 0 24.88l58.543 58.542a7.48 7.48 0 0010.585 0 7.483 7.483 0 000-10.582L15.727 109.07a2.638 2.638 0 010-3.715l90.39-90.386h51.36c8.046 0 15.32 4.8 18.53 12.234C189.818 59.145 221.216 79.79 256 79.79s66.184-20.644 79.992-52.586c3.211-7.433 10.485-12.234 18.528-12.234h51.363l90.387 90.386a2.631 2.631 0 010 3.715l-79.84 79.84v-62.074a7.485 7.485 0 00-14.97 0v89.957h-54.48c-1.027-2.91-3.793-5-7.054-5s-6.031 2.09-7.055 5h-17.086c-11.93 0-22.133 7.523-26.125 18.074L266.625 212l42.04-41.73a7.488 7.488 0 00.042-10.586 7.488 7.488 0 00-10.586-.04L256 201.455l-42.117-41.81a7.488 7.488 0 00-10.586.04 7.488 7.488 0 00.039 10.586L245.379 212l-42.043 41.727a7.488 7.488 0 00-.04 10.585 7.468 7.468 0 005.313 2.211 7.463 7.463 0 005.274-2.171L256 222.543l31.86 31.625v33.191a7.353 7.353 0 00-1.532-.16h-3.992a7.485 7.485 0 000 14.969h3.992c.524 0 1.035-.055 1.531-.156v69.676c0 15.398 12.528 27.925 27.926 27.925H401.5v1.285c0 9.13-7.426 16.555-16.555 16.555h-257.89c-9.125 0-16.551-7.426-16.551-16.555v-65.847h150.16a7.482 7.482 0 007.48-7.485 7.482 7.482 0 00-7.48-7.484h-150.16V126.836a7.485 7.485 0 00-14.969 0v193.246H51.902a7.485 7.485 0 000 14.969h43.633v65.847c0 17.383 14.14 31.524 31.52 31.524h257.89c17.383 0 31.524-14.14 31.524-31.524v-1.289h26.281c15.398 0 27.926-12.523 27.926-27.921v-126.97c0-15.398-12.528-27.921-27.926-27.921h-26.32v-6.715zM455.707 244.72v126.969c0 7.144-5.812 12.957-12.953 12.957H315.785c-7.144 0-12.957-5.813-12.957-12.957v-126.97c0-7.14 5.813-12.956 12.957-12.956h126.969c7.14 0 12.953 5.812 12.953 12.957zm0 0"/><path d="M164.594 230.809a7.483 7.483 0 1014.965 0v-7.965a7.482 7.482 0 10-14.965 0zm0 0M164.594 259.68a7.483 7.483 0 1014.965 0v-7.965a7.482 7.482 0 10-14.965 0zm0 0M207.91 126.836a7.485 7.485 0 00-7.484-7.484h-7.676l-.39.003a7.486 7.486 0 00-7.383 7.586 7.486 7.486 0 007.484 7.38h7.965a7.485 7.485 0 007.484-7.485zm0 0M164.594 201.938a7.483 7.483 0 1014.965 0v-7.965a7.479 7.479 0 00-7.48-7.48 7.48 7.48 0 00-7.485 7.48zm0 0M188.242 294.684a7.482 7.482 0 007.48 7.484h7.965a7.485 7.485 0 000-14.969h-7.964a7.482 7.482 0 00-7.48 7.485zm0 0M178.973 130.395a7.482 7.482 0 00-10.282 2.503 27.961 27.961 0 00-3.738 10.118 7.486 7.486 0 007.399 8.68 7.486 7.486 0 007.378-6.29c.27-1.68.86-3.27 1.747-4.726a7.486 7.486 0 00-2.504-10.285zm0 0M164.594 173.066a7.483 7.483 0 1014.965 0v-7.964a7.479 7.479 0 00-7.48-7.48 7.48 7.48 0 00-7.485 7.48zm0 0M170.77 273.367a7.483 7.483 0 00-4.762 9.453 28.014 28.014 0 005.281 9.395 7.45 7.45 0 005.707 2.64 7.484 7.484 0 005.7-12.328 13.16 13.16 0 01-2.473-4.402 7.483 7.483 0 00-9.453-4.758zm0 0M340.387 128.926a7.482 7.482 0 00-10.563-.676 7.482 7.482 0 00-.676 10.563 13.174 13.174 0 012.555 4.359 7.49 7.49 0 009.54 4.59 7.487 7.487 0 004.589-9.54 28.04 28.04 0 00-5.445-9.296zm0 0M315.91 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.483 7.483 0 00-7.484 7.484 7.483 7.483 0 007.484 7.484zm0 0M347.41 161.473a7.485 7.485 0 00-14.969 0v7.96a7.485 7.485 0 0014.97 0zm0 0M287.04 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.966a7.483 7.483 0 00-7.484 7.484 7.483 7.483 0 007.484 7.484zm0 0M339.926 182.855a7.483 7.483 0 00-7.485 7.485v7.965a7.485 7.485 0 0014.969 0v-7.965a7.485 7.485 0 00-7.484-7.485zm0 0M258.168 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.485 7.485 0 000 14.968zm0 0M261.43 302.168a7.485 7.485 0 000-14.969h-7.965a7.485 7.485 0 000 14.969zm0 0M232.559 302.168a7.485 7.485 0 000-14.969h-7.965a7.485 7.485 0 000 14.969zm0 0M221.332 134.32h7.965a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.485 7.485 0 000 14.968zm0 0M260.664 352.969h-88.586a7.48 7.48 0 00-7.484 7.484 7.48 7.48 0 007.484 7.48h88.586a7.479 7.479 0 007.48-7.48 7.48 7.48 0 00-7.48-7.484zm0 0"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo in
                                    </span><br>
                                    <span class="megamenu__tag megamenu__tag--hot" style="background-color: #00a040">
                                        new
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                </div>
                                                <div class="site-megamenu__row">
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/ao-the-thao-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg width="513" height="512" viewBox="0 0 513 512" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M510.877 219.246L462.27 73.425c-4.985-14.958-16.312-26.711-31.073-32.245C316.485-1.838 322.66.453 321.937.275c-1.57-.381-130.188-.321-131.4-.09-1.014.194 6.004-2.376-109.65 40.994C66.127 46.714 54.8 58.467 49.815 73.424-3.322 232.834.043 221.162.043 226.426c0 11.789 9.207 21.73 20.96 22.635l83.04 6.388V480.04a7.998 7.998 0 005.19 7.49c83.837 31.44 203.67 33.733 293.62 0a7.999 7.999 0 005.19-7.49V255.448l83.039-6.388c14.45-1.11 24.51-15.662 19.795-29.814zM256.043 80.04c35.886 0 65.719-26.392 71.122-60.785l15.219 5.707c-7.975 40.929-44.034 71.078-86.34 71.078-42.306 0-78.364-30.15-86.34-71.08l15.219-5.706c5.4 34.394 35.233 60.786 71.12 60.786zm-55.42-64h110.839c-3.895 27.102-27.257 48-55.42 48-28.161 0-51.524-20.9-55.42-48zm289.232 217.067l-81.813 6.293v-55.361a8 8 0 00-16 0v290.396c-80.313 28.308-189.002 29.254-272 0V184.039a8 8 0 00-16 0v55.36l-81.813-6.292c-3.47-.267-6.188-3.201-6.188-6.682 0-1.693-2.987 7.872 48.95-147.941 3.453-10.355 11.294-18.492 21.514-22.324l68.018-25.507c10.429 47.039 52.426 81.387 101.518 81.387s91.09-34.347 101.519-81.387l68.019 25.508c10.219 3.83 18.06 11.968 21.51 22.323 52.06 156.177 48.953 146.325 48.953 147.94 0 3.482-2.717 6.417-6.187 6.683z" fill="#000" fill-rule="nonzero"/><path stroke="#000" stroke-width="13" stroke-linecap="round" d="M161.672 412.5l187.828-65M161.672 337.5l187.828-65"/></g></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo thể thao
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/ao-thun-nam-gioi" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon" style="width: 35px">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.7 407.7"><path d="M405.5 118.021a7.93 7.93 0 00-.29-.29l-84.16-74.8a7.994 7.994 0 00-2.64-1.6l-60.88-21.76a8 8 0 00-10.72 7.12c0 1.76-2.64 42.32-43.2 42.96-40.8-.64-43.36-41.2-43.44-42.96a8 8 0 00-10.64-7.12l-60.8 22c-.976.357-1.872.9-2.64 1.6l-83.6 74.56a8 8 0 000 11.6l66.56 67.28v184a8 8 0 008 8h253.6a8 8 0 008-8v-184l66.56-67.28a8 8 0 00.29-11.31zm-67.09 55.79v-37.12a8 8 0 00-16 0v235.52H84.73v-235.52a8 8 0 00-16 0v37.2l-49.2-49.84 76.16-68.16 50.08-18.08c6.204 31.966 37.147 52.851 69.113 46.647 23.607-4.582 42.065-23.04 46.647-46.647l50.08 18.08 75.92 68.16-49.12 49.76z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo ngắn tay

                                        
                                        
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/ao-cotton-compact-dai-tay" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon" style="width: 35px">
                                    <svg height="512" width="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M481.593 52.286c-19.64-22.929-46.824-37.96-76.462-42.312L340.985.171A15.193 15.193 0 0 0 338.72 0H173.28c-.759 0-1.516.058-2.266.172l-64.058 9.79c-29.724 4.364-56.909 19.396-76.548 42.324C10.799 75.18 0 104.45 0 134.707v312.908c0 8.284 6.716 15 15 15h71.805V497c0 8.284 6.716 15 15 15h308.389c8.284 0 15-6.716 15-15v-34.385H497c8.284 0 15-6.716 15-15V134.707c0-30.257-10.799-59.527-30.407-82.421zM322.087 30C315.278 60.72 287.95 83.554 256 83.554c-32.144 0-59.305-22.772-66.081-53.554zM30 432.615v-34.998h56.805v34.998zM395.194 482H116.805V175.796c0-8.284-6.716-15-15-15s-15 6.716-15 15v191.821H30v-232.91c0-23.104 8.236-45.444 23.192-62.905C68.117 54.376 88.758 42.955 111.4 39.631l48.372-7.393c8.113 46.435 48.347 81.315 96.227 81.315 24.876 0 48.579-9.434 66.738-26.563a98.437 98.437 0 0 0 29.475-54.754l48.474 7.408c22.555 3.312 43.196 14.732 58.121 32.158C473.764 89.263 482 111.603 482 134.707v232.91h-56.806V175.796c0-8.284-6.716-15-15-15s-15 6.716-15 15zm30-49.385v-34.998H482v34.998z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo thu đông
                                    </span>
                                    <span class="megamenu__tag megamenu__tag--hot">
                                        hot
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="site-nav__item  mobile--hidden">
                                        <a href="https://www.coolmate.me/collection/quan-short-nam">QUẦN</a>
                                    </li>
                                    <li class="site-nav__item site-nav__item--has-sub  mobile--hidden">
                                        <a href="/collection/quan-lot-nam">QUẦN LÓT<span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span></a>
                                        <div class="site-megamenu">
                                            <div class="site-megamenu__container">
                                                <div class="site-megamenu__row">
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/quan-lot-nam/trunk" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.25 24.27"><defs></defs><title>Trunk</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_shorts_3162471_000000-copy-3" data-name="np shorts 3162471 000000-copy-3"><path fill="currentColor" d="M26,24.27a60.81,60.81,0,0,1-7-.46.43.43,0,0,1-.38-.47L18.42,20H16.83v3.34c0,.19-.18.47-.37.47A59.12,59.12,0,0,1,.37,23.53c-.28,0-.37-.28-.37-.46.56-8,1.12-17,.84-22.51A.57.57,0,0,1,.93.19.47.47,0,0,1,1.3,0H33.67c.09,0,.28.09.37.09s.09.19.09.38A185,185,0,0,0,35.25,23c0,.28-.09.47-.37.47a45.11,45.11,0,0,1-8.84.83Zm-6.51-1.39a45.42,45.42,0,0,0,14.7-.37A212.45,212.45,0,0,1,33.11.84H1.77C2,6.32,1.4,14.88.93,22.6a51.21,51.21,0,0,0,15,.28V19.44a.73.73,0,0,1,.19-.37c.09-.1.19-.1.37-.1l2.51.1a.44.44,0,0,1,.47.46Z"/><path fill="currentColor" d="M34.13,5.3H1.39V0H34.13ZM1.65,4.37H33.2V.93H1.65Z"/><path fill="currentColor" d="M18.79,19.62l-2.51-.09c-4-.28-4.47-4.56-4.84-8.65a30.39,30.39,0,0,0-1-6V4.65c0-.09.18-.19.28-.19H24.18a.33.33,0,0,1,.28.1.34.34,0,0,1,.09.28c-.46,2.41-.55,4.65-.74,6.6-.28,4.56-.56,7.81-5,8.18ZM11.16,5.21a27.86,27.86,0,0,1,.93,5.67c.37,4.19.74,7.81,4.19,8l2.51.09c3.81-.28,4-3,4.28-7.44a54.42,54.42,0,0,1,.65-6.23H11.16Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Trunk
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                </div>
                                                <div class="site-megamenu__row">
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/quan-lot-nam/brief" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.55 24.21"><defs></defs><title>brief</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_mid-waist-brief_1579244_000000-copy" data-name="np mid-waist-brief 1579244 000000-copy"><path fill="currentColor" d="M9.63,24l.13.1.05,0a.54.54,0,0,0,.22.05h9.49a.54.54,0,0,0,.22-.05s0,0,.05,0l.13-.1h0l9.48-11a.57.57,0,0,0,.14-.37V.56A.56.56,0,0,0,29,0H.56A.56.56,0,0,0,0,.56v12A.62.62,0,0,0,.13,13L9.61,24ZM1.11,4.37H8.73L6,13.85A28.63,28.63,0,0,0,1.11,9.77Zm8.78,0h9.78l3,10.45A14.35,14.35,0,0,0,19,23.1H10.57a14.4,14.4,0,0,0-3.73-8.28Zm18.55,5.4a28.63,28.63,0,0,0-4.85,4.08L20.82,4.37h7.62ZM20.24,22c1-5.19,6.14-9.36,8.2-10.84V12.4Zm8.2-20.85V3.26H1.11V1.11Zm-27.33,10C3.17,12.6,8.34,16.77,9.31,22L1.11,12.4Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Brief
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                </div>
                                                <div class="site-megamenu__row">
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/quan-lot-nam/brief-boxer" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.05 24.18"><defs></defs><title>Brif boxer</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_boxer-brief_1579238_000000-copy-2" data-name="np boxer-brief 1579238 000000-copy-2"><path fill="currentColor" d="M13,23.07l1.87-5.56a2.13,2.13,0,0,0,1.29,0L18,23.07a1.65,1.65,0,0,0,1.56,1.11,1.73,1.73,0,0,0,.38-.05l9.89-2.53A1.59,1.59,0,0,0,31,19.72l-3.48-15a.79.79,0,0,0,0-.09.52.52,0,0,0,0-.11v-4A.52.52,0,0,0,27,0H4.05a.53.53,0,0,0-.52.52v4s0,.08,0,.11l0,.09L0,19.72A1.58,1.58,0,0,0,1.18,21.6l9.89,2.53A1.62,1.62,0,0,0,13,23.07ZM11.73,5h7.59c0,6.82-2,11.56-3.8,11.56S11.77,11.83,11.73,5ZM30,20a.53.53,0,0,1-.38.63l-9.89,2.53a.61.61,0,0,1-.7-.38L17.09,17c2.11-1.75,3.25-7,3.28-12h6.17ZM4.57,1h21.9V4H4.57Zm6.76,22.08L1.44,20.59A.55.55,0,0,1,1.05,20L4.51,5h6.17c0,5,1.17,10.23,3.27,12L12,22.74a.61.61,0,0,1-.7.38Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Boxer Brief
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
                                        <a href="/collection/tat-nam">PHỤ KIỆN<span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span></a>
                                        <div class="site-megamenu">
                                            <div class="site-megamenu__container">
                                                <div class="site-megamenu__row">
                                                    <div class="site-megamenu__column">
                                                        <a href="/collection/tat-nam" class="megamenu" style="width: 250px">
                                <span class="megamenu__icon">
                                    <svg height="512" viewBox="0 0 52 61" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M41.46 1.47A2 2 0 0039 .08L27.07 3.56c-.62-2.15-.65-2.8-1.57-3.31A2 2 0 0024 .08L8.52 4.6a2 2 0 00-1.39 2.45l7 26.23L3.54 44.35a9.306 9.306 0 0013 13.32L18 56.41a9.36 9.36 0 0013.52 1.26c6.77-5.83 9.24-8.1 14.28-11.61a12.12 12.12 0 004.77-13.31C42.4 4.07 59.2 63.94 41.46 1.47zM11.19 14.4L26.84 10l.61 2.1-15.69 4.42zm18.72-1.06L41.84 10l.61 2.1-11.93 3.4zM39.54 2l1.74 6-11.93 3.4c-.07-.23-1.8-6.21-1.72-5.94zm-15 0c.88 3-1.09-3.78 1.74 6l-15.61 4.47-1.59-6C25.2 1.8 24.44 2 24.54 2zm-8.43 30.75l-3.83-14.3L28 14l4.26 14.68c-7.19 3.79-10.2 10.83-5.5 17.86-3.39 2.56-6 4.9-10.44 8.66a28.67 28.67 0 00-10-10.81l9.31-9.71a2.05 2.05 0 00.48-1.93zm12.28 12.59c-3.87-5.85-1.48-11.34 4.45-14.71l.78 2.68a10.2 10.2 0 01-4 11.11c-.41.3-.82.58-1.23.92zM9.77 58a7.27 7.27 0 01-4.88-12.15 26.67 26.67 0 019.87 10.64A7.31 7.31 0 019.77 58zm9.72-2.87c3.27-2.76 2.49-2.17 5.8-4.87a26.87 26.87 0 014.46 6.27 7.32 7.32 0 01-10.26-1.42zm11.82.08A28.78 28.78 0 0026.85 49c1.28-1 2.59-2 3.93-2.92a12.18 12.18 0 004.76-13.3l-4.46-15.41L43 14l4.26 14.69c-7.16 3.77-10.22 10.8-5.5 17.86-3.94 2.95-5.48 4.45-10.45 8.64zm13.32-10.79c-.42.29-.83.6-1.25.9-3.83-5.8-1.51-11.31 4.46-14.69l.78 2.67a10.19 10.19 0 01-3.99 11.12z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Tất (vớ) + Khẩu Trang
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                </div>















                                                <div class="site-megamenu__row">
                                                    <div class="site-megamenu__column">
                                                        <a href="https://www.coolmate.me/collection/phu-kien" class="megamenu" style="width: 250px">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" enable-background="new 0 0 512 512"><path fill="currentColor" d="M381.919 107.826l-88.01-10.637c-34.595-4.181-69.702 4.046-98.839 23.169-29.137 19.122-50.654 48.051-60.584 81.459l-24.691 83.059-104.666 57.09a9.843 9.843 0 00-5.091 7.776 9.842 9.842 0 003.655 8.545c44.614 35.691 98.379 55.554 155.481 57.441 2.976.098 5.94.148 8.904.148 53.898 0 105.6-16.234 150.029-47.2l58.407-40.707 124.274 12.747a9.833 9.833 0 007.58-2.469 9.84 9.84 0 003.264-7.272l.366-75.683c.364-75.065-55.559-138.46-130.079-147.466zM306.857 352.53c-83.626 58.284-196.192 57.435-278.876-.615l92.12-50.247 226.413 23.222-39.657 27.64zm185.15-32.499l-361.124-37.038 6.199-20.852 68.574 7.394c.358.038.715.058 1.068.058 4.96 0 9.226-3.741 9.77-8.785.582-5.403-3.325-10.254-8.727-10.838l-64.983-7.007 10.564-35.538c17.858-60.074 75.977-98.217 138.201-90.7l88.01 10.637c64.599 7.807 113.078 62.762 112.763 127.831l-.315 64.838z"/><path fill="currentColor" d="M237.19 253.141l-.076-.008c-5.411-.589-10.216 3.331-10.797 8.734s3.366 10.257 8.769 10.839a9.8 9.8 0 001.065.058c4.961 0 9.227-3.743 9.77-8.787.581-5.403-3.328-10.254-8.731-10.836z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Phụ kiện khác (Mũ, túi,...)
                                    </span>
                                </div>
                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>



                                    <li class="site-nav__item mobile--hidden tablet--hidden">
                                        <a href="/lp/coolxprint-mo-hinh-dat-in-ao-theo-cong-dong">
                COOLXPRINT
                <span class="new">Mới</span>
            </a>
                                    </li>

                                    <li class="site-nav__item mobile--hidden tablet--hidden desk--hidden">
                                        <a href="/blog">COOLBLOG</a>
                                    </li>
                                    <li class="site-nav__item mobile--hidden tablet--hidden desk--hidden">
                                        <a href="/size-chart">CHỌN SIZE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="site-header__line-search">
                        <form method="post" action="https://www.coolmate.me/search" style="margin: 0;" onsubmit="handleSubmitSearch()">
                            <input type="hidden" name="_token" value="PPjCitgzU1Ziq5iy5EWEvrBtLCuUQIG0WuS8CE7S">
                            <div class="spotlight-search__wrapper">
                                <div class="container">
                                    <div class="spotlight-search__field">
                                        <input name="keyword" id="topbar--search" class="search-field" placeholder="Tìm sản phẩm..." autocomplete="off">
                                        <span class="spotlight__loading spotlight--loading">
                                </span>
                                        <button type="submit" id="search--button" class="spotlight-search__submit">
                                    <svg height="512" viewBox="0 0 6.35 6.35" width="512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M2.894.511a2.384 2.384 0 00-2.38 2.38 2.386 2.386 0 002.38 2.384c.56 0 1.076-.197 1.484-.523l.991.991a.265.265 0 00.375-.374l-.991-.992a2.37 2.37 0 00.523-1.485C5.276 1.58 4.206.51 2.894.51zm0 .53c1.026 0 1.852.825 1.852 1.85S3.92 4.746 2.894 4.746s-1.851-.827-1.851-1.853.825-1.852 1.851-1.852z" paint-order="stroke fill markers"/></svg>
                                </button>
                                        <button class="spotlight-search__close spotlight-search--close"></button>
                                    </div>
                                    <div class="spotlight__search">
                                    </div>
                                    <div class="spotlight__content spotlight__search--content">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="testlixi"></div>