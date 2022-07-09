<?php
  $conn = mysqli_connect('localhost', 'root', '', 'user-registration') or die($conn);
?>

<!DOCTYPE html>
<html amp >
<head>
  <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/yaa-60x61.png" type="image/x-icon">
  <meta name="description" content="">
  <meta name="amp-script-src" content="">
  
  <title>Home</title>
  
<link rel="canonical" href="./">
 <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
 
 <style amp-custom> 
div,span,h1,h2,h3,h4,h5,h6,p,blockquote,a,ol,ul,li,figcaption,textarea,input{font: inherit;}*{-webkit-box-sizing: border-box;box-sizing: border-box;outline: none;}*:focus{outline: none;}body{position: relative;font-style: normal;line-height: 1.6;color: #48525c;}section{background-color: #eeeeee;background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;overflow: hidden;padding: 0;}h1,h2,h3,h4,h5,h6{margin: 0;padding: 0;}p,li,blockquote{letter-spacing: normal;line-height: 1.6;}ul,ol,blockquote,p{margin-bottom: 0;margin-top: 0;}a{cursor: pointer;}a,a:hover{text-decoration: none;}a.mbr-iconfont:hover{text-decoration: none;}h1,h2,h3,h4,h5,h6,.display-1,.display-2,.display-4,.display-5,.display-7{word-break: break-word;word-wrap: break-word;}b,strong{font-weight: bold;}blockquote{padding: 10px 0 10px 20px;position: relative;border-left: 3px solid;}input:-webkit-autofill,input:-webkit-autofill:hover,input:-webkit-autofill:focus,input:-webkit-autofill:active{-webkit-transition-delay: 9999s;transition-delay: 9999s;-webkit-transition-property: background-color,color;-o-transition-property: background-color,color;transition-property: background-color,color;}html,body{height: auto;min-height: 100vh;}.mbr-section-title{margin: 0;padding: 0;font-style: normal;line-height: 1.2;width: 100%;color: #20202a;}.mbr-section-subtitle{line-height: 1.2;width: 100%;color: #20202a;}.mbr-text{font-style: normal;line-height: 1.6;width: 100%;color: #48525c;font-weight: 400;}.mbr-white{color: #ffffff;}.mbr-black{color: #000000;}.align-left{text-align: left;}.align-left .list-item{justify-content: flex-start;}.align-center{text-align: center;}.align-center .list-item{justify-content: center;}.align-right{text-align: right;}.align-right .list-item{justify-content: flex-end;}@media (max-width: 767px){.align-left,.align-center,.align-right{text-align: center;}.align-left .list-item,.align-center .list-item,.align-right .list-item{justify-content: center;}}.mbr-light{font-weight: 300;}.mbr-regular{font-weight: 400;}.mbr-semibold{font-weight: 600;}.mbr-bold{font-weight: 700;}.icons-list a{margin: 0;}.icons-list a:last-child{margin: 0;}.mbr-figure{align-self: center;}.hidden{visibility: hidden;}.super-hide{display: none;}.inactive{-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;pointer-events: none;-webkit-user-drag: none;user-drag: none;}.mbr-overlay{position: absolute;bottom: 0;left: 0;right: 0;top: 0;z-index: 0;}.map-placeholder{display: none;}.google-map,.google-map iframe{position: relative;width: 100%;height: 400px;}amp-img{width: 100%;}amp-img img{max-height: 100%;max-width: 100%;}img.mbr-temp{width: 100%;}.rounded{border-radius: 50%;}.is-builder .nodisplay + img[async],.is-builder .nodisplay + img[decoding="async"],.is-builder amp-img > a + img[async],.is-builder amp-img > a + img[decoding="async"]{display: none;}html:not(.is-builder) amp-img > a{position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index: 1;}.is-builder .temp-amp-sizer{position: absolute;}.is-builder amp-youtube .temp-amp-sizer,.is-builder amp-vimeo .temp-amp-sizer{position: static;}.mobirise-spinner{position: absolute;top: 50%;left: 40%;margin-left: 10%;-webkit-transform: translate3d(-50%,-50%,0);z-index: 4;}.mobirise-spinner em{width: 24px;height: 24px;background: #3ac;border-radius: 100%;display: inline-block;-webkit-animation: slide 1s infinite;}.mobirise-spinner em:nth-child(1){-webkit-animation-delay: 0.1s;}.mobirise-spinner em:nth-child(2){-webkit-animation-delay: 0.2s;}.mobirise-spinner em:nth-child(3){-webkit-animation-delay: 0.3s;}@-moz-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@-webkit-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@-o-keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}@keyframes slide{0%{-webkit-transform: scale(1);}50%{opacity: 0.3;-webkit-transform: scale(2);}100%{-webkit-transform: scale(1);}}.mobirise-loader .amp-active > div{display: none;}.iconfont-wrapper{display: inline-flex;}.mbr-flex{display: flex;}.flex-wrap{flex-wrap: wrap;}.mbr-jc-s{justify-content: flex-start;}.mbr-jc-c{justify-content: center;}.mbr-jc-e{justify-content: flex-end;}.mbr-row-reverse{flex-direction: row-reverse;}.mbr-column{flex-direction: column;}amp-img,img{height: 100%;width: 100%;}.hidden-slide{display: none;}.visible-slide{display: flex;}section,.container,.container-fluid{position: relative;word-wrap: break-word;}.mbr-fullscreen .mbr-overlay{min-height: 100vh;}.mbr-fullscreen{display: flex;align-items: center;height: 100vh;min-height: 100vh;padding: 3rem 0;}.container{padding: 0 1rem;width: 100%;margin-right: auto;margin-left: auto;}@media (max-width: 767px){.container{max-width: 540px;}} @media (min-width: 768px){.container{max-width: 720px;}} @media (min-width: 992px){.container{max-width: 960px;}} @media (min-width: 1200px){.container{max-width: 1140px;}}.container-fluid{width: 100%;padding: 0 1rem;}.btn{position: relative;font-weight: 700;margin: 0.4rem 0.9rem;border: 2px solid;font-style: normal;white-space: normal;transition: all 0.3s cubic-bezier(0.25,0.1,0.25,1);display: inline-flex;align-items: center;justify-content: center;word-break: break-word;line-height: 1.2rem;letter-spacing: normal;}.btn-form{padding: 1rem 2rem;}.btn-form:hover{cursor: pointer;}.btn{padding: 1rem 2rem;border-radius: 3px;}.btn-sm{padding: 0.4rem 0.8rem;border-radius: 3px;}.btn-md{padding: 1rem 2rem;border-radius: 3px;}.btn-lg{padding: 1.2rem 3.2rem;border-radius: 3px;}form .btn,form .mbr-section-btn{margin: 0;}.note-popover .btn:after{display: none;}.mbr-section-btn{margin: 0 -0.9rem;font-size: 0;}nav .mbr-section-btn{margin-left: 0rem;margin-right: 0rem;}.btn .mbr-iconfont,.btn.btn-md .mbr-iconfont{cursor: pointer;margin: 0 0.8rem 0 0;}.btn-sm .mbr-iconfont{margin: 0 0.5rem 0 0;}[type="submit"]{-webkit-appearance: none;}section.menu{min-height: 56px;overflow: visible;padding: 0;}.menu-container{display: flex;-webkit-box-pack: justify;-ms-flex-pack: justify;justify-content: space-between;align-items: center;min-height: 56px;}@media (max-width: 991px){.menu-container{max-width: 100%;padding: 0.5rem 1rem;}} @media (max-width: 767px){.menu-container{padding: 0.5rem 1rem;}}.navbar{z-index: 100;width: 100%;position: absolute;box-shadow: 0 2px 10px 0 rgba(0,0,0,0.07);}.navbar-fixed-top{position: fixed;top: 0;}.navbar-brand{display: flex;align-items: center;word-break: break-word;z-index: 1;}.navbar-logo{margin: 0 0.8rem 0 0;}@media (max-width: 767px){.navbar-logo amp-img{max-height: 35px;max-width: 35px;}}.navbar-caption-wrap{display: flex;}.navbar .navbar-collapse{display: flex;-ms-flex-preferred-size: auto;flex-basis: auto;align-items: center;justify-content: space-between;width: 100%;}@media (max-width: 991px){.navbar .navbar-collapse{display: none;position: absolute;top: 0;right: 0;height: 100vh;overflow-y: auto;padding: 70px 2rem 1rem;z-index: 1;}}@media (max-width: 991px){.navbar.opened .navbar-collapse.show,.navbar.opened .navbar-collapse.collapsing{display: block;}.is-builder .navbar-collapse{position: fixed;}}.navbar-nav{list-style-type: none;display: flex;flex-wrap: wrap;padding-left: 0;min-width: 10rem;}@media (max-width: 991px){.navbar-nav{flex-direction: column;}} .navbar-nav .mbr-iconfont{margin: 0 0.2rem 0 0;}.nav-item{word-break: break-all;}.nav-link{display: flex;align-items: center;justify-content: center;}.nav-link,.navbar-caption{transition: all 0.2s;letter-spacing: normal;}.nav-dropdown .dropdown-menu{min-width: 10rem;position: absolute;left: 0;padding: 10px 0;border-radius: 0 0 4px 4px;transition: opacity 0.2s cubic-bezier(0.25,0.1,0.25,1);}.nav-dropdown .dropdown-menu .dropdown-item{line-height: normal;display: flex;justify-content: center;align-items: center;padding: 0 15px;margin: 20px 0;white-space: nowrap;}.nav-dropdown .dropdown-menu .dropdown-item:active{background: none;}.nav-dropdown .dropdown-menu .dropdown{position: relative;}.dropdown-menu .dropdown:hover > .dropdown-menu{opacity: 1;pointer-events: all;}.nav-dropdown .dropdown-submenu{top: 0;left: 100%;margin: 0;}.nav-item.dropdown{position: relative;}.nav-item.dropdown .dropdown-menu{opacity: 0;pointer-events: none;}.nav-item.dropdown:hover > .dropdown-menu{opacity: 1;pointer-events: all;}.link.dropdown-toggle:after{content: "";margin-left: 0.25rem;border-top: 0.35em solid;border-right: 0.35em solid transparent;border-left: 0.35em solid transparent;border-bottom: 0;}.navbar .dropdown.open > .dropdown-menu{display: block;}@media (max-width: 991px){.is-builder .nav-dropdown .dropdown-menu{position: relative;}.nav-dropdown .dropdown-submenu{left: 0;}.nav-dropdown .dropdown-menu .dropdown-item{padding: 0;margin: 0 0 1rem 0;justify-content: center;}.nav-dropdown .dropdown-menu .dropdown-item:after{right: auto;}.navbar.opened .dropdown-menu{top: 0;}.dropdown-toggle[data-toggle="dropdown-submenu"]:after{content: "";margin-left: 0.25rem;border-top: 0.35em solid;border-right: 0.35em solid transparent;border-left: 0.35em solid transparent;border-bottom: 0;top: 55%;}}.navbar-buttons{display: flex;flex-wrap: wrap;align-items: center;justify-content: center;}@media (max-width: 991px){.navbar-buttons{flex-direction: column;}}.menu-social-list{display: flex;align-items: center;justify-content: center;flex-wrap: wrap;}.menu-social-list a{margin: 0 0.5rem;}.menu-social-list a span{font-size: 1.5rem;}button.navbar-toggler{position: relative;width: 31px;height: 20px;cursor: pointer;transition: all .2s;-ms-flex-item-align: center;-ms-grid-row-align: center;align-self: center;}.hamburger span{position: absolute;right: 0;width: 30px;height: 2px;border-right: 5px;}.hamburger span:nth-child(1){top: 0;transition: all .2s;}.hamburger span:nth-child(2){top: 8px;transition: all .15s;}.hamburger span:nth-child(3){top: 8px;transition: all .15s;}.hamburger span:nth-child(4){top: 16px;transition: all .2s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(4),nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(1){top: 8px;width: 0;opacity: 0;right: 50%;transition: all .2s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(2){transform: rotate(-45deg);transition: all .25s;}nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(3){transform: rotate(45deg);transition: all .25s;}.ampstart-btn.hamburger{position: relative;margin-left: auto;height: 20px;width: 30px;background: none;border: none;cursor: pointer;z-index: 1000;}@media (min-width: 992px){.nav-dropdown .dropdown-menu{box-shadow: 0 10px 25px 0 rgba(0,0,0,0.2);}.ampstart-btn,amp-sidebar{display: none;}.dropdown-menu .dropdown-toggle:after{content: "";border-bottom: 0.35em solid transparent;border-left: 0.35em solid;border-right: 0;border-top: 0.35em solid transparent;margin-left: 0.3rem;margin-top: -0.3077em;position: absolute;right: 1.1538em;top: 50%;}}.close-sidebar{width: 30px;height: 30px;position: relative;cursor: pointer;background-color: transparent;border: none;}.close-sidebar span{position: absolute;left: 0;width: 30px;height: 2px;border-right: 5px;top: 14px;}.close-sidebar span:nth-child(1){transform: rotate(-45deg);}.close-sidebar span:nth-child(2){transform: rotate(45deg);}.builder-sidebar{position: relative;height: 100vh;overflow-y: auto;min-width: 10rem;z-index: 1030;padding: 1rem 2rem;max-width: 20rem;}.builder-sidebar .dropdown:hover > .dropdown-menu{position: relative;text-align: center;}section.sidebar-open:before{content: '';position: fixed;top: 0;bottom: 0;right: 0;left: 0;background-color: rgba(0,0,0,0.2);z-index: 1040;}.is-builder section.horizontal-menu .ampstart-btn{display: none;}.is-builder section.horizontal-menu .dropdown-menu{z-index: auto;opacity: 1;pointer-events: auto;}.is-builder .menu{overflow: visible;}#sidebar{background-color: transparent;}.card-title{margin: 0;}.card{position: relative;background-color: transparent;border: none;border-radius: 0;width: 100%;padding: 0 1rem;}@media (max-width: 767px){.card:not(.last-child){padding-bottom: 30px;}} .card .card-img{width: auto;border-radius: 0;}.card .card-wrapper{height: 100%;}@media (max-width: 767px){.card .card-wrapper{flex-direction: column;}} .card img{height: 100%;-o-object-fit: cover;object-fit: cover;-o-object-position: center;object-position: center;}.card-inner,.items-list{display: flex;flex-direction: column;}.items-list{list-style-type: none;padding: 0;}.items-list .list-item{padding: 1rem 2rem;}.card-head{padding: 1.5rem 2rem;}.card-price-wrap{padding: 1rem 2rem;}.card-button{padding: 1rem;margin: 0;}.timeline-wrap{position: relative;}.timeline-wrap .iconBackground{position: absolute;left: 50%;width: 20px;height: 20px;line-height: 30px;text-align: center;border-radius: 50%;font-size: 30px;display: inline-block;background-color: #000000;top: 20px;margin: 0 0 0 -10px;}@media (max-width: 767px){.timeline-wrap .iconBackground{left: 0;}}.separline{position: relative;}@media (max-width: 767px){.separline:not(.last-child){padding-bottom: 2rem;}} .separline:before{position: absolute;content: "";width: 2px;background-color: #000000;left: calc(50% - 1px);height: calc(100% - 20px);top: 40px;}@media (max-width: 767px){.separline:before{left: 0;}}.gallery-img-wrap{position: relative;height: 100%;}.gallery-img-wrap:hover{cursor: pointer;}.gallery-img-wrap:hover .icon-wrap,.gallery-img-wrap:hover .caption-on-hover{opacity: 1;}.gallery-img-wrap:hover:after{opacity: .5;}.gallery-img-wrap amp-img{height: 100%;}.gallery-img-wrap:after{content: "";position: absolute;top: 0;bottom: 0;left: 0;right: 0;background: #000;opacity: 0;transition: opacity 0.2s;pointer-events: none;}.gallery-img-wrap .icon-wrap,.gallery-img-wrap .img-caption{z-index: 3;pointer-events: none;position: absolute;}.gallery-img-wrap .icon-wrap,.gallery-img-wrap .caption-on-hover{opacity: 0;transition: opacity 0.2s;}.gallery-img-wrap .icon-wrap{left: 50%;top: 50%;transform: translate(-50%,-50%);background-color: #fff;padding: .5rem;border-radius: 50%;}.gallery-img-wrap .amp-iconfont{color: #000;font-size: 1rem;width: 1rem;display: block;}.gallery-img-wrap .img-caption{left: 0;right: 0;}.gallery-img-wrap .img-caption.caption-top{top: 0;}.gallery-img-wrap .img-caption.caption-bottom{bottom: 0;}.gallery-img-wrap .img-caption:not(.caption-on-hover):after{content: "";position: absolute;top: 0;left: 0;right: 0;height: 100%;transition: opacity 0.2s;z-index: -1;pointer-events: none;}@media (max-width: 767px){.gallery-img-wrap:after,.gallery-img-wrap:hover:after,.gallery-img-wrap .icon-wrap{display: none;}.gallery-img-wrap .caption-on-hover{opacity: 1;}}.is-builder .gallery-img-wrap .icon-wrap,.is-builder .gallery-img-wrap .img-caption > *{pointer-events: all;}.amp-carousel-button,.dots-wrapper .dots span{transition: all 0.4s;cursor: pointer;outline: none;}.amp-carousel-button{width: 50px;height: 50px;border-radius: 50%;}.dots-wrapper .dots{display: inline-block;margin: 4px 8px;}.dots-wrapper .dots span{display: block;border-radius: 12px;height: 24px;width: 24px;background-color: #ffffff;border: 10px solid #cccccc;opacity: 0.5;}.dots-wrapper .dots span.current{width: 40px;}.dots-wrapper .dots span:hover,.dots-wrapper .dots span.current{opacity: 1;}.amp-carousel-button-next:after{right: 1rem;}.amp-carousel-button-prev:after{left: 1rem;}button.btn-img{cursor: pointer;}.is-builder .preview button.btn-img{opacity: 0.5;position: relative;pointer-events: none;}amp-image-lightbox,.lightbox{background: rgba(0,0,0,0.8);display: flex;flex-wrap: wrap;align-items: center;justify-content: center;width: 100%;height: 100%;overflow: auto;}amp-image-lightbox a.control,.lightbox a.control{position: absolute;cursor: default;top: 0;right: 0;}amp-image-lightbox .close,.lightbox .close{background: none;border: none;position: absolute;top: 16px;right: 16px;height: 32px;width: 32px;cursor: pointer;z-index: 1000;}amp-image-lightbox .close:before,amp-image-lightbox .close:after,.lightbox .close:before,.lightbox .close:after{position: absolute;top: 0;right: 16px;content: ' ';height: 32px;width: 2px;background-color: #fff;}amp-image-lightbox .close:before,.lightbox .close:before{transform: rotate(45deg);}amp-image-lightbox .close:after,.lightbox .close:after{transform: rotate(-45deg);}amp-image-lightbox .video-block,.lightbox .video-block{width: 100%;}div[submit-success] > *,div[submit-error] > *{padding: 15px;margin-bottom: 1rem;}.form-block{z-index: 1;background-color: transparent;padding: 0;position: relative;overflow: hidden;}.form-block .mbr-overlay{z-index: -1;}@media (max-width: 991px){.form-block{padding: 0;}}form input,form textarea,form select{padding: 1rem;line-height: 1.2rem;width: 100%;background: #ffffff;border-width: 2px;border-style: solid;border-color: #767676;border-radius: 3px;color: #000000;}form input[type="checkbox"],form input[type="radio"]{border: none;background: none;width: auto;}form .field{padding-bottom: 0.5rem;padding-top: 0.5rem;}form textarea.field-input{height: 200px;}form .fieldset{display: flex;justify-content: center;flex-wrap: wrap;align-items: center;}textarea[type="hidden"]{display: none;}.form-check{margin-bottom: 0;}.form-check-label{padding-left: 0;}.form-check-input{position: relative;margin: 4px;}.form-check-inline{display: inline-flex;align-items: center;padding-left: 0;margin-right: .75rem;}.mbr-row,.mbr-form-row{display: -webkit-box;display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-left: -1rem;margin-right: -1rem;}.mbr-form-row{margin-left: -0.5rem;margin-right: -0.5rem;}.mbr-form-row > [class*="mbr-col"]{padding-left: 0.5rem;padding-right: 0.5rem;}@media (max-width: 767px){.mbr-col,.mbr-col-auto{padding-right: 1rem;padding-left: 1rem;}.mbr-col-sm-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}@media (min-width: 768px){.mbr-col,.mbr-col-auto{padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-2{-ms-flex: 0 0 16.6666666667%;-webkit-box-flex: 0;flex: 0 0 16.6666666667%;max-width: 16.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-3{-ms-flex: 0 0 25%;-webkit-box-flex: 0;flex: 0 0 25%;max-width: 25%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-4{-ms-flex: 0 0 33.3333333333%;-webkit-box-flex: 0;flex: 0 0 33.3333333333%;max-width: 33.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-5{-ms-flex: 0 0 41.6666666667%;-webkit-box-flex: 0;flex: 0 0 41.6666666667%;max-width: 41.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-6{-ms-flex: 0 0 50%;-webkit-box-flex: 0;flex: 0 0 50%;max-width: 50%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-7{-ms-flex: 0 0 58.3333333333%;-webkit-box-flex: 0;flex: 0 0 58.3333333333%;max-width: 58.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-8{-ms-flex: 0 0 66.6666666667%;-webkit-box-flex: 0;flex: 0 0 66.6666666667%;max-width: 66.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-10{-ms-flex: 0 0 83.3333333333%;-webkit-box-flex: 0;flex: 0 0 83.3333333333%;max-width: 83.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-md-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}.mbr-col{-ms-flex: 1 1 auto;-webkit-box-flex: 1;flex: 1 1 auto;max-width: 100%;}.mbr-col-auto{-ms-flex: 0 0 auto;flex: 0 0 auto;width: auto;}@media (min-width: 992px){.mbr-col,.mbr-col-auto{padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-2{-ms-flex: 0 0 16.6666666667%;-webkit-box-flex: 0;flex: 0 0 16.6666666667%;max-width: 16.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-3{-ms-flex: 0 0 25%;-webkit-box-flex: 0;flex: 0 0 25%;max-width: 25%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-4{-ms-flex: 0 0 33.3333333333%;-webkit-box-flex: 0;flex: 0 0 33.3333333333%;max-width: 33.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-5{-ms-flex: 0 0 41.6666666667%;-webkit-box-flex: 0;flex: 0 0 41.6666666667%;max-width: 41.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-6{-ms-flex: 0 0 50%;-webkit-box-flex: 0;flex: 0 0 50%;max-width: 50%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-7{-ms-flex: 0 0 58.3333333333%;-webkit-box-flex: 0;flex: 0 0 58.3333333333%;max-width: 58.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-8{-ms-flex: 0 0 66.6666666667%;-webkit-box-flex: 0;flex: 0 0 66.6666666667%;max-width: 66.6666666667%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-9{-ms-flex: 0 0 75%;-webkit-box-flex: 0;flex: 0 0 75%;max-width: 75%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-10{-ms-flex: 0 0 83.3333333333%;-webkit-box-flex: 0;flex: 0 0 83.3333333333%;max-width: 83.3333333333%;padding-right: 1rem;padding-left: 1rem;}.mbr-col-lg-12{-ms-flex: 0 0 100%;-webkit-box-flex: 0;flex: 0 0 100%;max-width: 100%;padding-right: 1rem;padding-left: 1rem;}}@media (min-width: 992px){.lg-pb{padding-bottom: 3rem;}}@media (max-width: 991px){.md-pb{padding-bottom: 3rem;}}.mbr-pt-1,.mbr-py-1{padding-top: 10px;}.mbr-pb-1,.mbr-py-1{padding-bottom: 10px;}.mbr-px-1{padding-left: 10px;padding-right: 10px;}.mbr-p-1{padding: 10px;}.mbr-pt-2,.mbr-py-2{padding-top: 1rem;}.mbr-pb-2,.mbr-py-2{padding-bottom: 1rem;}.mbr-px-2{padding-left: 1rem;padding-right: 1rem;}.mbr-p-2{padding: 1rem;}.mbr-pt-3,.mbr-py-3{padding-top: 25px;}.mbr-pb-3,.mbr-py-3{padding-bottom: 25px;}.mbr-px-3{padding-left: 25px;padding-right: 25px;}.mbr-p-3{padding: 25px;}.mbr-pt-4,.mbr-py-4{padding-top: 2rem;}.mbr-pb-4,.mbr-py-4{padding-bottom: 2rem;}.mbr-px-4{padding-left: 2rem;padding-right: 2rem;}.mbr-p-4{padding: 2rem;}.mbr-pt-5,.mbr-py-5{padding-top: 3rem;}.mbr-pb-5,.mbr-py-5{padding-bottom: 3rem;}.mbr-px-5{padding-left: 3rem;padding-right: 3rem;}.mbr-p-5{padding: 3rem;}@media (max-width: 991px){.mbr-py-4,.mbr-py-5{padding-top: 1rem;padding-bottom: 1rem;}.mbr-px-4,.mbr-px-5{padding-left: 1rem;padding-right: 1rem;}.mbr-p-3,.mbr-p-4,.mbr-p-5{padding: 1rem;}}.mbr-ml-auto{margin-left: auto;}.mbr-mr-auto{margin-right: auto;}.mbr-m-auto{margin: auto;}#scrollToTopMarker{position: absolute;width: 0px;height: 0px;top: 300px;}#scrollToTopButton{position: fixed;bottom: 25px;right: 25px;opacity: .4;z-index: 5000;font-size: 32px;height: 60px;width: 60px;border: none;border-radius: 3px;cursor: pointer;}#scrollToTopButton:focus{outline: none;}#scrollToTopButton a:before{content: '';position: absolute;height: 40%;top: 36%;width: 2px;left: calc(50% - 1px);}#scrollToTopButton a:after{content: '';position: absolute;border-top: 2px solid;border-right: 2px solid;width: 40%;height: 40%;left: calc(30% - 1px);bottom: 30%;transform: rotate(-45deg);}.is-builder #scrollToTopButton a:after{left: 30%;}a{font-style: normal;}@media (max-width: 767px){.mbr-section-btn,.mbr-section-title{text-align: center;}}@media (min-width: 992px){.mbr-col-lg-11{flex: 0 0 91.666%;max-width: 91.666%;padding-right: 1rem;padding-left: 1rem;}}
body{font-family: Inter;}blockquote{border-color: #005af0;}div[submit-success] > *{background: #64bf46;color: #ffffff;}div[submit-error] > *{background: #ffdc00;color: #000000;}.display-1{font-family: 'Inter',sans-serif;font-size: 4rem;}.display-2{font-family: 'Inter',sans-serif;font-size: 3.25rem;}.display-4{font-family: 'Inter',sans-serif;font-size: 1rem;}.display-5{font-family: 'Inter',sans-serif;font-size: 1.8rem;}.display-7{font-family: 'Inter',sans-serif;font-size: 1.2rem;}.display-1 .mbr-iconfont-btn{font-size: 4rem;width: 4rem;}.display-2 .mbr-iconfont-btn{font-size: 3.25rem;width: 3.25rem;}.display-4 .mbr-iconfont-btn{font-size: 1rem;width: 1rem;}.display-5 .mbr-iconfont-btn{font-size: 1.8rem;width: 1.8rem;}.display-7 .mbr-iconfont-btn{font-size: 1.2rem;width: 1.2rem;}@media (max-width: 768px){.display-1{font-size: 3.2rem;font-size: calc( 2.05rem + (4 - 2.05) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (2.05rem + (4 - 2.05) * ((100vw - 20rem) / (48 - 20))));}.display-2{font-size: 2.6rem;font-size: calc( 1.7874999999999999rem + (3.25 - 1.7874999999999999) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.7874999999999999rem + (3.25 - 1.7874999999999999) * ((100vw - 20rem) / (48 - 20))));}.display-4{font-size: 0.8rem;font-size: calc( 1rem + (1 - 1) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1rem + (1 - 1) * ((100vw - 20rem) / (48 - 20))));}.display-5{font-size: 1.44rem;font-size: calc( 1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.28rem + (1.8 - 1.28) * ((100vw - 20rem) / (48 - 20))));}.display-7{font-size: 0.96rem;font-size: calc( 1.07rem + (1.2 - 1.07) * ((100vw - 20rem) / (48 - 20)));line-height: calc( 1.4 * (1.07rem + (1.2 - 1.07) * ((100vw - 20rem) / (48 - 20))));}}.bg-primary{background-color: #005af0;}.bg-success{background-color: #64bf46;}.bg-info{background-color: #eb49e1;}.bg-warning{background-color: #ff8f00;}.bg-danger{background-color: #ffdc00;}.btn-primary,.btn-primary:active,.btn-primary.active{background-color: #005af0;border-color: #005af0;color: #ffffff;}.btn-primary:hover,.btn-primary:focus,.btn-primary.focus{color: #ffffff;background-color: #003da3;border-color: #003da3;}.btn-primary.disabled,.btn-primary:disabled{color: #ffffff;background-color: #003da3;border-color: #003da3;}.btn-secondary,.btn-secondary:active,.btn-secondary.active{background-color: #00dcc0;border-color: #00dcc0;color: #ffffff;}.btn-secondary:hover,.btn-secondary:focus,.btn-secondary.focus{color: #ffffff;background-color: #00907d;border-color: #00907d;}.btn-secondary.disabled,.btn-secondary:disabled{color: #ffffff;background-color: #00907d;border-color: #00907d;}.btn-info,.btn-info:active,.btn-info.active{background-color: #eb49e1;border-color: #eb49e1;color: #ffffff;}.btn-info:hover,.btn-info:focus,.btn-info.focus{color: #ffffff;background-color: #d117c5;border-color: #d117c5;}.btn-info.disabled,.btn-info:disabled{color: #ffffff;background-color: #d117c5;border-color: #d117c5;}.btn-success,.btn-success:active,.btn-success.active{background-color: #64bf46;border-color: #64bf46;color: #ffffff;}.btn-success:hover,.btn-success:focus,.btn-success.focus{color: #ffffff;background-color: #46892f;border-color: #46892f;}.btn-success.disabled,.btn-success:disabled{color: #ffffff;background-color: #46892f;border-color: #46892f;}.btn-warning,.btn-warning:active,.btn-warning.active{background-color: #ff8f00;border-color: #ff8f00;color: #ffffff;}.btn-warning:hover,.btn-warning:focus,.btn-warning.focus{color: #ffffff;background-color: #b36400;border-color: #b36400;}.btn-warning.disabled,.btn-warning:disabled{color: #ffffff;background-color: #b36400;border-color: #b36400;}.btn-danger,.btn-danger:active,.btn-danger.active{background-color: #ffdc00;border-color: #ffdc00;color: #000000;}.btn-danger:hover,.btn-danger:focus,.btn-danger.focus{color: #000000;background-color: #b39a00;border-color: #b39a00;}.btn-danger.disabled,.btn-danger:disabled{color: #000000;background-color: #b39a00;border-color: #b39a00;}.btn-black,.btn-black:active,.btn-black.active{background-color: #333333;border-color: #333333;color: #ffffff;}.btn-black:hover,.btn-black:focus,.btn-black.focus{color: #ffffff;background-color: #0d0d0d;border-color: #0d0d0d;}.btn-black.disabled,.btn-black:disabled{color: #ffffff;background-color: #0d0d0d;border-color: #0d0d0d;}.btn-white,.btn-white:active,.btn-white.active{background-color: #ffffff;border-color: #ffffff;color: #808080;}.btn-white:hover,.btn-white:focus,.btn-white.focus{color: #808080;background-color: #d9d9d9;border-color: #d9d9d9;}.btn-white.disabled,.btn-white:disabled{color: #808080;background-color: #d9d9d9;border-color: #d9d9d9;}.btn-white,.btn-white:active,.btn-white.active{color: #333333;}.btn-white:hover,.btn-white:focus,.btn-white.focus{color: #333333;}.btn-white.disabled,.btn-white:disabled{color: #333333;}.btn-primary-outline,.btn-primary-outline:active,.btn-primary-outline.active{background: none;border-color: #00348a;color: #00348a;}.btn-primary-outline:hover,.btn-primary-outline:focus,.btn-primary-outline.focus{color: #ffffff;background-color: #005af0;border-color: #005af0;}.btn-primary-outline.disabled,.btn-primary-outline:disabled{color: #ffffff;background-color: #005af0;border-color: #005af0;}.btn-secondary-outline,.btn-secondary-outline:active,.btn-secondary-outline.active{background: none;border-color: #007667;color: #007667;}.btn-secondary-outline:hover,.btn-secondary-outline:focus,.btn-secondary-outline.focus{color: #ffffff;background-color: #00dcc0;border-color: #00dcc0;}.btn-secondary-outline.disabled,.btn-secondary-outline:disabled{color: #ffffff;background-color: #00dcc0;border-color: #00dcc0;}.btn-info-outline,.btn-info-outline:active,.btn-info-outline.active{background: none;border-color: #ba14af;color: #ba14af;}.btn-info-outline:hover,.btn-info-outline:focus,.btn-info-outline.focus{color: #ffffff;background-color: #eb49e1;border-color: #eb49e1;}.btn-info-outline.disabled,.btn-info-outline:disabled{color: #ffffff;background-color: #eb49e1;border-color: #eb49e1;}.btn-success-outline,.btn-success-outline:active,.btn-success-outline.active{background: none;border-color: #3c7629;color: #3c7629;}.btn-success-outline:hover,.btn-success-outline:focus,.btn-success-outline.focus{color: #ffffff;background-color: #64bf46;border-color: #64bf46;}.btn-success-outline.disabled,.btn-success-outline:disabled{color: #ffffff;background-color: #64bf46;border-color: #64bf46;}.btn-warning-outline,.btn-warning-outline:active,.btn-warning-outline.active{background: none;border-color: #995600;color: #995600;}.btn-warning-outline:hover,.btn-warning-outline:focus,.btn-warning-outline.focus{color: #ffffff;background-color: #ff8f00;border-color: #ff8f00;}.btn-warning-outline.disabled,.btn-warning-outline:disabled{color: #ffffff;background-color: #ff8f00;border-color: #ff8f00;}.btn-danger-outline,.btn-danger-outline:active,.btn-danger-outline.active{background: none;border-color: #998400;color: #998400;}.btn-danger-outline:hover,.btn-danger-outline:focus,.btn-danger-outline.focus{color: #000000;background-color: #ffdc00;border-color: #ffdc00;}.btn-danger-outline.disabled,.btn-danger-outline:disabled{color: #000000;background-color: #ffdc00;border-color: #ffdc00;}.btn-black-outline,.btn-black-outline:active,.btn-black-outline.active{background: none;border-color: #000000;color: #000000;}.btn-black-outline:hover,.btn-black-outline:focus,.btn-black-outline.focus{color: #ffffff;background-color: #333333;border-color: #333333;}.btn-black-outline.disabled,.btn-black-outline:disabled{color: #ffffff;background-color: #333333;border-color: #333333;}.btn-white-outline,.btn-white-outline:active,.btn-white-outline.active{background: none;border-color: #ffffff;color: #ffffff;}.btn-white-outline:hover,.btn-white-outline:focus,.btn-white-outline.focus{color: #333333;background-color: #ffffff;border-color: #ffffff;}.text-primary{color: #005af0;}.text-secondary{color: #00dcc0;}.text-success{color: #64bf46;}.text-info{color: #eb49e1;}.text-warning{color: #ff8f00;}.text-danger{color: #ffdc00;}.text-white{color: #ffffff;}.text-black{color: #000000;}a.text-primary:hover,a.text-primary:focus{color: #00348a;}a.text-secondary:hover,a.text-secondary:focus{color: #007667;}a.text-success:hover,a.text-success:focus{color: #3c7629;}a.text-info:hover,a.text-info:focus{color: #ba14af;}a.text-warning:hover,a.text-warning:focus{color: #995600;}a.text-danger:hover,a.text-danger:focus{color: #998400;}a.text-white:hover,a.text-white:focus{color: #cccccc;}a.text-black:hover,a.text-black:focus{color: #4d4d4d;}.alert-success{background-color: #64bf46;}.alert-info{background-color: #eb49e1;}.alert-warning{background-color: #ff8f00;}.alert-danger{background-color: #ffdc00;}a,a:hover{color: #005af0;}.mbr-plan-header.bg-primary .mbr-plan-subtitle,.mbr-plan-header.bg-primary .mbr-plan-price-desc{color: #bdd6ff;}.mbr-plan-header.bg-success .mbr-plan-subtitle,.mbr-plan-header.bg-success .mbr-plan-price-desc{color: #b3e0a5;}.mbr-plan-header.bg-info .mbr-plan-subtitle,.mbr-plan-header.bg-info .mbr-plan-price-desc{color: #ffffff;}.mbr-plan-header.bg-warning .mbr-plan-subtitle,.mbr-plan-header.bg-warning .mbr-plan-price-desc{color: #ffe9cc;}.mbr-plan-header.bg-danger .mbr-plan-subtitle,.mbr-plan-header.bg-danger .mbr-plan-price-desc{color: #fff8cc;}.mobirise-spinner em:nth-child(1){background: #005af0;}.mobirise-spinner em:nth-child(2){background: #00dcc0;}.mobirise-spinner em:nth-child(3){background: #64bf46;}#scrollToTopMarker{display: none;}#scrollToTopButton{background-color: #005af0;}#scrollToTopButton a:before{background: #ffffff;}#scrollToTopButton a:after{border-top-color: #ffffff;border-right-color: #ffffff;}.btn:not(.btn-form){box-shadow: 0 15px 35px -5px rgba(0,0,0,0.25);}.btn:not(.btn-form):hover,.btn:not(.btn-form):focus,.btn:not(.btn-form).focus{transform: translateY(-0.125rem);box-shadow: 0 25px 20px -15px rgba(0,0,0,0.15);}.amp-carousel-button{box-shadow: 0 10px 15px 0 rgba(0,0,0,0.4);background-color: #f3f3f3;}.amp-carousel-button:hover{background-color: #fff;box-shadow: 0 20px 30px 0 rgba(0,0,0,0.2);}.amp-carousel-button-next{background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='%23005AF0' %3E%3Cpath d='M9 3L7.94 4.06l4.19 4.19H3v1.5h9.13l-4.19 4.19L9 15l6-6z'/%3E%3C/svg%3E");}.amp-carousel-button-prev{background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='%23005AF0'%3E%3Cpath d='M15 8.25H5.87l4.19-4.19L9 3 3 9l6 6 1.06-1.06-4.19-4.19H15v-1.5z'/%3E%3C/svg%3E");}.cid-sizh00o7aw{background-color: #ffffff;overflow: visible;}.cid-sizh00o7aw .navbar{background: #ecf2fc;border-style: solid;border-bottom-color: #404040;border-top-width: 0px;border-right-width: 0px;border-bottom-width: 4px;border-left-width: 0px;}.cid-sizh00o7aw .brand-name{margin-right: 2rem;color: #000000;}.cid-sizh00o7aw .brand-name a{font-weight: 700;}.cid-sizh00o7aw .menu-container{padding: 0 30px;}.cid-sizh00o7aw .navbar-brand{flex-shrink: 0;padding: 0;margin: 0;}.cid-sizh00o7aw .nav-dropdown .dropdown-menu .dropdown-item{font-weight: 700;width: 100%;text-align: inherit;}.cid-sizh00o7aw a.nav-link{font-weight: 700;}.cid-sizh00o7aw .navbar-buttons .btn{box-shadow: none;transform: none;}.cid-sizh00o7aw .builder-sidebar,.cid-sizh00o7aw .dropdown-menu{background-color: #ffffff;}.cid-sizh00o7aw .close-sidebar:focus{outline: 2px auto #005af0;}.cid-sizh00o7aw .close-sidebar span{background-color: #000000;}.cid-sizh00o7aw .ampstart-btn,.cid-sizh00o7aw amp-sidebar{display: block;}.cid-sizh00o7aw .ampstart-btn:focus,.cid-sizh00o7aw amp-sidebar:focus{outline: none;}.cid-sizh00o7aw .navbar .navbar-collapse{display: none;}.cid-sizh00o7aw .navbar .navbar-collapse.show{display: block;position: absolute;top: 0;right: 0;height: 100vh;overflow-y: auto;padding: 70px 2rem 1rem;z-index: 1;background: #ffffff;}.cid-sizh00o7aw .dropdown.open > .dropdown-menu,.cid-sizh00o7aw .dropdown:hover > .dropdown-menu,.cid-sizh00o7aw .dropdown-item.dropdown-toggle{left: 0;position: relative;}@media (min-width: 992px){.cid-sizh00o7aw .dropdown-menu .dropdown-toggle:after{transform: rotate(90deg);}}.cid-sizh00o7aw .navbar-nav a{padding: 0;margin: 0 0 1rem;}.cid-sizh00o7aw .dropdown-menu{padding: 0;box-shadow: none;}.cid-sizh00o7aw .hamburger span{background-color: #000000;}.cid-sizh00o7aw amp-img{height: 37px;width: 30px;}.cid-sizh00o7aw amp-img img{height: 37px;object-fit: contain;}.cid-siHgnPT6Bn{padding-top: 75px;padding-bottom: 75px;background-color: #ffffff;}@media (min-width: 992px){.cid-siHgnPT6Bn .container-fluid{padding-left: 1rem;padding-right: 1rem;}.cid-siHgnPT6Bn .item{padding: 1rem;}.cid-siHgnPT6Bn .item-img{padding-bottom: 0;}}.cid-siHgnPT6Bn .title{padding-bottom: 1rem;}@media (max-width: 991px){.cid-siHgnPT6Bn .item{margin-bottom: 2rem;}}.cid-siHgnPT6Bn .item-wrapper{width: 100%;height: 100%;position: relative;}.cid-siHgnPT6Bn amp-img .item-sign{position: absolute;left: 0;right: 0;bottom: 0;padding: 1rem 2rem;z-index: 2;transition: 0.2s ease-in;background-color: rgba(0,90,240,0.5);color: #ffffff;}.cid-siHgnPT6Bn amp-img:hover .item-sign{background-color: #005af0;}.cid-siHgnPT6Bn .item-btn,.cid-siHgnPT6Bn .item-box-btn{margin: 0;}.cid-siHgnPT6Bn .item-box{justify-content: center;position: relative;width: 100%;background: #f7f7f7;overflow: auto;}@media (min-width: 992px){.cid-siHgnPT6Bn .item-box{max-width: 1000px;}}@media (max-width: 991px){.cid-siHgnPT6Bn .item-box{width: 90%;margin: 1rem;}}@media (min-width: 992px){.cid-siHgnPT6Bn .item-box-img{padding: 2rem;}}@media (max-width: 991px){.cid-siHgnPT6Bn .item-box-img{padding: 1rem;}}.cid-siHgnPT6Bn .item-box-img amp-img{height: auto;}.cid-siHgnPT6Bn .item-box-wrapper{background-color: #f7f7f7;}@media (min-width: 992px){.cid-siHgnPT6Bn .item-box-wrapper{padding: 2rem;}}@media (max-width: 991px){.cid-siHgnPT6Bn .item-box-wrapper{padding: 1rem;}}.cid-siHgnPT6Bn .item-wrapper{box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);}.cid-siHgnPT6Bn .icon-wrap{position: absolute;left: 0;top: 0;right: 0;bottom: 0;margin: auto;opacity: 0;transition: 0.4s;height: 2rem;width: 2rem;z-index: 2;}.cid-siHgnPT6Bn .icon-wrap span{color: #ffffff;font-size: 2rem;}.cid-siHgnPT6Bn amp-img:hover .icon-wrap{opacity: 1;}.cid-siHgnPT6Bn .item-wrapper{z-index: 12;border-radius: 10px;overflow: hidden;}.cid-siHgnPT6Bn .item{cursor: pointer;}.cid-sizw3wVL9n{padding-top: 0px;padding-bottom: 45px;background-color: #ffffff;}.cid-sizw3wVL9n .iconfont-wrapper{background: #005af0;margin: 10px 50px 0;border-radius: 10px;}.cid-sizw3wVL9n .iconfont-wrapper .amp-iconfont{color: #ffffff;font-size: 3rem;width: 3rem;}.cid-sizk6BLSn0{padding-top: 30px;padding-bottom: 45px;background-color: #20202a;}.cid-sizk6BLSn0 .image-block{align-items: center;height: 100%;}@media (max-width: 767px){.cid-sizk6BLSn0 .image-block{margin-bottom: 2rem;}}.cid-sizk6BLSn0 .image-block amp-img,.cid-sizk6BLSn0 .image-block img{width: 12rem;object-fit: contain;}@media (max-width: 991px){.cid-sizk6BLSn0 .items-col{margin: 1rem 0;}}.cid-sizk6BLSn0 .item{color: #f7f7f7;text-align: right;}
.engine{position: absolute;text-indent: -2400px;text-align: center;padding: 0;top: 0;left: -2400px;}[class*="-iconfont"]{display: inline-flex;}</style>
 
  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
  <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
  
  
  
</head>
<body><amp-sidebar id="sidebar" class="cid-sizh00o7aw" layout="nodisplay" side="right">
    <div class="builder-sidebar" id="builder-sidebar">
      <button on="tap:sidebar.close" class="close-sidebar">
      <span></span>
      <span></span>
      </button>
    
      
        <!-- NAVBAR ITEMS -->
        <ul class="navbar-nav nav-dropdown mbr-column nav-right" data-app-modern-menu="true"><li class="nav-item">
            <a class="nav-link link text-black display-4" href="index.php" aria-expanded="true">Home</a>
          </li><li class="nav-item"><a class="nav-link link text-black display-4" href="about.php">About us</a></li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="contact.php">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="account.php">Account<br></a>
          </li></ul>
        <!-- NAVBAR ITEMS END -->
        <!-- SHOW BUTTON -->
        
        <!-- SHOW BUTTON END -->
      </div>
  </amp-sidebar>
  
  <section class="menu horizontal-menu cid-sizh00o7aw" id="menu1-0">
    
    <nav class="navbar navbar-dropdown">
    <div class="menu-container mbr-jc-s container-fluid">
      <div class="navbar-brand">
          <span class="navbar-logo">
              <amp-img src="assets/images/yaa-60x61.png" layout="responsive" width="36.39344262295082" height="37" alt="Mobirise" class="mobirise-loader">
                  <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                  
              </amp-img>
          </span>
          <p class="brand-name mbr-fonts-style mbr-bold display-4">YArts<br></p>
      </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
        <!-- NAVBAR ITEMS -->
        <ul class="navbar-nav nav-dropdown mbr-column nav-right" data-app-modern-menu="true"><li class="nav-item">
            <a class="nav-link link text-black display-4" href="#" aria-expanded="true">Home</a>
          </li><li class="nav-item"><a class="nav-link link text-black display-4" href="#">About us</a></li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="#">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="#">Account<br></a>
          </li></ul>
        <!-- NAVBAR ITEMS END -->
        <!-- SHOW BUTTON -->
        
        <!-- SHOW BUTTON END -->
      </div>
      <!-- COLLAPSED MENU END -->
      
      <button on="tap:sidebar.toggle" class="ampstart-btn hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav>
  <!-- AMP plug -->
  
    
</section>

<section class="amp-lightbox-gallery cid-siHgnPT6Bn" id="gallery1-h">
    
    
    <div class="container">
        
        <div class="mbr-row">
            <?php $query = mysqli_query($conn, "SELECT * FROM tb_gambar");
              while($row = mysqli_fetch_array($query)){
              ?>
                <div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                   <div class="item-wrapper">
                      <amp-img lightbox="gallery2-3" src="upload/<?php echo $row['file'] ?>" layout="responsive" width="348" height="232" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="32" height="32"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        <p class="item-sign mbr-fonts-style mbr-bold display-4"><?php echo $row['author'] ?></p>
                      </amp-img>
                   </div>
                </div>
       		<?php } ?>

            <div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/06.jpg" layout="responsive" width="348" height="232" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div><div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/02.jpg" layout="responsive" width="348" height="232" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div><div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/05.jpg" layout="responsive" width="348" height="232" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div><div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/07.jpg" layout="responsive" width="348" height="232" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div><div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/mbr-1-696x464.jpg" layout="responsive" width="348" height="232" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div><div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/01.jpg" layout="responsive" width="348" height="232" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div><div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/mbr-1920x1280.jpg" layout="responsive" width="368.9295" height="245.953" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div><div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/mbr-1920x1357.jpg" layout="responsive" width="347.99540162122327" height="245.953" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div><div class="item gallery-image mbr-col-md-6 mbr-col-sm-12 mbr-col-lg-4">
                <div class="item-wrapper">
                    <amp-img lightbox="gallery2-3" src="assets/images/mbr-1-1920x1280.jpg" layout="responsive" width="368.9295" height="245.953" alt="image" class="placeholder-loader lb-image">
                        <div placeholder="" class="placeholder">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                        <div class="icon-wrap iconfont-wrapper">
                            <span class="amp-iconfont mobi-mbri-search mobi-mbri"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="100%" height="100%"><path d="M23.7 22.3l-9.4-9.4C15.4 11.5 16 9.8 16 8c0-4.4-3.6-8-8-8S0 3.6 0 8s3.6 8 8 8c1.8 0 3.5-.6 4.9-1.7l9.4 9.4 1.4-1.4zM8 14c-3.3 0-6-2.7-6-6s2.7-6 6-6 6 2.7 6 6-2.7 6-6 6z"></path></svg></span>
                        </div>
                        
                        
                    </amp-img>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="social-follow cid-sizw3wVL9n" id="social-follow-b">
    <div class="container">
        <h2 class="mbr-fonts-style mbr-section-title align-center mbr-bold mbr-pb-4 display-1">
            Follow Our Instagram
        </h2>
        <div class="icons-list align-center">
            <a href="https://www.instagram.com/dwiiputra.a/" target="_blank">
                <span class="iconfont-wrapper mbr-p-2">
                    <span class="amp-iconfont fa-instagram fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1152 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm138 0q0 164-115 279t-279 115-279-115-115-279 115-279 279-115 279 115 115 279zm108-410q0 38-27 65t-65 27-65-27-27-65 27-65 65-27 65 27 27 65zm-502-220q-7 0-76.5-.5t-105.5 0-96.5 3-103 10-71.5 18.5q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103-3 96.5 0 105.5.5 76.5-.5 76.5 0 105.5 3 96.5 10 103 18.5 71.5q20 50 58 88t88 58q29 11 71.5 18.5t103 10 96.5 3 105.5 0 76.5-.5 76.5.5 105.5 0 96.5-3 103-10 71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103 3-96.5 0-105.5-.5-76.5.5-76.5 0-105.5-3-96.5-10-103-18.5-71.5q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10-96.5-3-105.5 0-76.5.5zm768 630q0 229-5 317-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124t-124-322q-5-88-5-317t5-317q10-208 124-322t322-124q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"></path></svg></span>
                </span>
            </a><a href="https://www.instagram.com/afganzr/" target="_blank">
                <span class="iconfont-wrapper mbr-p-2">
                    <span class="amp-iconfont fa-instagram fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1152 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm138 0q0 164-115 279t-279 115-279-115-115-279 115-279 279-115 279 115 115 279zm108-410q0 38-27 65t-65 27-65-27-27-65 27-65 65-27 65 27 27 65zm-502-220q-7 0-76.5-.5t-105.5 0-96.5 3-103 10-71.5 18.5q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103-3 96.5 0 105.5.5 76.5-.5 76.5 0 105.5 3 96.5 10 103 18.5 71.5q20 50 58 88t88 58q29 11 71.5 18.5t103 10 96.5 3 105.5 0 76.5-.5 76.5.5 105.5 0 96.5-3 103-10 71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103 3-96.5 0-105.5-.5-76.5.5-76.5 0-105.5-3-96.5-10-103-18.5-71.5q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10-96.5-3-105.5 0-76.5.5zm768 630q0 229-5 317-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124t-124-322q-5-88-5-317t5-317q10-208 124-322t322-124q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"></path></svg></span>
                </span>
            </a><a href="https://www.instagram.com/anggadk01/" target="_blank">
                <span class="iconfont-wrapper mbr-p-2">
                    <span class="amp-iconfont fa-instagram fa"><svg width="100%" height="100%" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path d="M1152 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm138 0q0 164-115 279t-279 115-279-115-115-279 115-279 279-115 279 115 115 279zm108-410q0 38-27 65t-65 27-65-27-27-65 27-65 65-27 65 27 27 65zm-502-220q-7 0-76.5-.5t-105.5 0-96.5 3-103 10-71.5 18.5q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103-3 96.5 0 105.5.5 76.5-.5 76.5 0 105.5 3 96.5 10 103 18.5 71.5q20 50 58 88t88 58q29 11 71.5 18.5t103 10 96.5 3 105.5 0 76.5-.5 76.5.5 105.5 0 96.5-3 103-10 71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103 3-96.5 0-105.5-.5-76.5.5-76.5 0-105.5-3-96.5-10-103-18.5-71.5q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10-96.5-3-105.5 0-76.5.5zm768 630q0 229-5 317-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124t-124-322q-5-88-5-317t5-317q10-208 124-322t322-124q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"></path></svg></span>
                </span>
            </a></div>
        </div>
    </section>

<section class="footer2 cid-sizk6BLSn0" id="footer2-4">

    

    <div class="container">
        <div class="mbr-row mbr-jc-c">
            <div class="mbr-col-sm-12 mbr-col-lg-3 mbr-col-md-6">
                <div class="image-block mbr-flex mbr-jc-c">
                <amp-img src="assets/images/yaa-190x193.png" layout="responsive" width="176.21761658031087" height="179" alt="Mobirise" class="mobirise-loader i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 101.579%;"></i-amphtml-sizer>
                    <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div></div>
                    
                <img decoding="async" alt="Mobirise" src="assets/images/yaa-190x193.png" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
                    </div>
            </div>

            <div class="items-col mbr-col-sm-12 align-right mbr-col-md-6 mbr-col-lg-3">
                <h3 class="mbr-fonts-style group-title mbr-white mbr-bold mbr-pb-2 display-5"></h3>
                <div class="items">
                    
                    
                    
                <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4"></p></div>
            </div>

            <div class="items-col mbr-col-sm-12 mbr-col-lg-3 align-right mbr-col-md-6">
                <h3 class="mbr-fonts-style group-title mbr-white mbr-bold mbr-pb-2 display-5"></h3>
                <div class="items">
                    
                    
                    
                <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4"></p></div>
            </div>

            <div class="items-col mbr-col-sm-12 mbr-col-lg-3 align-right mbr-col-md-6">
                <h3 class="mbr-fonts-style group-title mbr-white mbr-bold mbr-pb-2 display-5">
                    Follow Us</h3>
                <div class="items">
                    
                    
                    
                <p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4">
                        Dwi Putra Ramadhan</p><p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4">
                        Angga Dwi Kurniawan</p><p class="item mbr-semibold mbr-fonts-style mbr-py-1 display-4">Muhammad Afgan Zulfikar</p></div>
            </div>

        </div>
    </div>
</section>
<!---<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/o" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Designed with <a href="https://mobirise.site/a" style="color:#aaa;">Mobirise</a></p></section>--->
  
  
</body>
</html>