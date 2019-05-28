 <?php
session_start();

include("conexion.php");

$StrUSER_ID = $_SESSION['SYS_USER_ID'];

  $id = $StrUSER_ID;
//------------------------------------------------------------------

$StrGT="";$LStrMsg="";$LStrFoc="";$LStrMM="";

include("avs_emp_config_fun.php");

//------------------------------------------------------------------

$TI=0;

?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Mi perfil</title>
     <?php AddJs(); ?>
<script type="text/javascript" src="funciones.js"></script>

<script type="text/javascript" src="avs_emp_config.js"></script>
<script>

$(document).ready(function(){  

   Inicializar();

});
</script>



 </head>
 <body  <?php echo $LStrMsg;?> >
  
    <?php require_once('avs_emp_header.php'); ?>
    <?php require_once('avs_emp_header_buscar.php'); ?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-visible/1.2.0/jquery.visible.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>


<style>
.bradbrumbs li a,
.bradbrumbs li {
    font-size: 14px;
}

.bradbrumbs li {
    padding: 0 !important;
}

.suscribaseapremium {
    margin-top: 20px;
    margin-bottom: 40px;
}

.suscribaseapremium {
    padding-bottom: 3px !important;
    border-radius: 10px;
}

.suscribaseapremium_div {
    width: 100%;
    margin: 0 auto;
    text-align: center;
}

.description_menu {
    z-index: 1;
    top: 0;
    position: fixed;
    width: 100%;
    background: white;
    max-height: 220px;
    display: none;
}

.description_container {
    padding-top: 24px;
    padding-bottom: 16px;
    /*border-bottom: 1px solid #dedede;*/
}

.description_container img {
    border-radius: 8px;
    max-width: 130px;
}

.description_menu .stars {
    padding-top: 3px;
    margin-left: -5px;
}

.description_menu .details {
    font-weight: 600;
    font-size: 14px;
    color: black;
    padding-top: 15px;
}

.description_menu span {
    font-weight: 600;
    font-size: 14px;
    color: black;
}

.description_menu svg {
    height: 11px;
}

.stars-count {
    font-size: 13px;
    margin-left: -8px;
}

.description_menu h2 {
    font-size: 28px;
}

.description_menu hr {
    margin: 0;
}

.description_menu .profile_nav {
    max-height: 41px;
}

#reviews {
    margin-top: 40px;
}

#reviews .attributes-list-title {
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 14px;
    font-weight: bold;
    line-height: 22px;
}

#reviews .titulo_perfil {
    font-size: 18.72px;
    margin-top: 20px;
    margin-bottom: 10px;
}

#reviews .list_skill {
    padding: 12px 15px 11px 15px;
    font-size: 13px;
}

#reviews .btn-secondary-2 {
    font-size: 13px;
    margin-top: 20px;
    margin-bottom: 10px;
}

.total-ratings {
    margin-top: 25px;
}

</style><style>.icon {
    display: inline-flex;
    vertical-align: sub;
    color: #444;
}

.icon svg {
    -webkit-transition-duration: 0.125s;
    transition-duration: 0.125s;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transform-origin: center;
    -moz-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    margin: auto;
}

[class*='icon-stars'] .star {
    fill: #BCBCBC;
}

[class*='icon-stars'][class*='icon-stars-5'] [class*='star-5'] {
    fill: #EB0450;
}

[class*='icon-stars'][class*='icon-stars-5'] [class*='star-4'] {
    fill: #EB0450;
}

[class*='icon-stars'][class*='icon-stars-5'] [class*='star-3'] {
    fill: #EB0450;
}

[class*='icon-stars'][class*='icon-stars-5'] [class*='star-2'] {
    fill: #EB0450;
}

[class*='icon-stars'][class*='icon-stars-5'] [class*='star-1'] {
    fill: #EB0450;
}

.icon use:first-of-type {
    fill-opacity: 1;
}

.icon use:last-of-type {
    fill-opacity: 1;
}


/*! CSS Used from: https://s.cdn-care.com/css/global/A.nav.css,qv=190524.pagespeed.cf.ofDHt6Ac9O.css */

.profile-avatar {
    display: inline-block;
    height: 55px;
    position: relative;
    width: 55px;
    vertical-align: middle;
}

.profile-avatar div {
    background-color: #dedede;
    color: #444;
    border: 0px solid #fff;
    border-radius: 50%;
    display: table-cell;
    font-size: 23px;
    height: inherit;
    text-align: center;
    text-transform: uppercase;
    width: inherit;
    vertical-align: middle;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/providerProfile/A.pl-components.css,qv=190524.pagespeed.cf.6-mQmD4R_H.css */


/*! @import https://s.cdn-care.com/js/vendor/bower_components/ion.rangeSlider/css/normalize.css */

svg:not(:root) {
    overflow: hidden;
}


/*! end @import */

.icon {
    display: inline-flex;
    vertical-align: sub;
    color: #444;
}

.icon svg {
    -webkit-transition-duration: .125s;
    transition-duration: .125s;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transform-origin: center;
    -moz-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    margin: auto;
}

[class*="icon-stars"] .star {
    fill: #bcbcbc;
}

[class*="icon-stars"][class*="icon-stars-5"] [class*="star-5"] {
    fill: #eb0450;
}

[class*="icon-stars"][class*="icon-stars-5"] [class*="star-4"] {
    fill: #eb0450;
}

[class*="icon-stars"][class*="icon-stars-5"] [class*="star-3"] {
    fill: #eb0450;
}

[class*="icon-stars"][class*="icon-stars-5"] [class*="star-2"] {
    fill: #eb0450;
}

[class*="icon-stars"][class*="icon-stars-5"] [class*="star-1"] {
    fill: #eb0450;
}

.icon use:first-of-type {
    fill-opacity: 1;
}

.icon use:last-of-type {
    fill-opacity: 1;
}

:focus {
    outline: none;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/providerProfile/A.main.css,qv=190524.pagespeed.cf.DBz8hvUhfX.css */

.seeker-ratings {
    display: flex;
}

.seeker-name {
    font-size: 14px;
    font-weight: 600;
}

.seeker-rating-info {
    padding-left: 15px;
}

.post-date {
    font-size: 13px;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/crcm-pattern-lib/bootstrap/A.bootstrap.css,qv=190524.pagespeed.cf.Er0UG5DBQn.css */

.body-1 {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.body-1 {
    font-size: 14px;
    line-height: 24px;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/providerProfile/A.pl-components.css,qv=190524.pagespeed.cf.6-mQmD4R_H.css */

:focus {
    outline: none;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/providerProfile/A.main.css,qv=190524.pagespeed.cf.DBz8hvUhfX.css */

.review-comment-body {
    margin: 15px 0;
    width: 100%;
    word-break: break-word;
    word-wrap: break-word;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/crcm-pattern-lib/bootstrap/A.bootstrap.css,qv=190524.pagespeed.cf.Er0UG5DBQn.css */

svg:not(:root) {
    overflow: hidden;
}

button {
    color: inherit;
    font: inherit;
    margin: 0;
}

button {
    overflow: visible;
}

button {
    text-transform: none;
}

button {
    -webkit-appearance: button;
    cursor: pointer;
}

button::-moz-focus-inner {
    border: 0;
    padding: 0;
}

button {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    border-radius: 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.btn:focus,
.btn:active:focus {
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}

.btn:hover,
.btn:focus {
    color: #EB0450;
    text-decoration: none;
}

.btn:active {
    outline: 0;
    background-image: none;
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}

.btn-sm {
    padding: 5px 10px;
    font-size: 15px;
    line-height: 1.5;
    border-radius: 20px;
}

.icon {
    display: inline-flex;
    vertical-align: sub;
    color: #444;
}

.icon svg {
    -webkit-transition-duration: 0.125s;
    transition-duration: 0.125s;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transform-origin: center;
    -moz-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    margin: auto;
}

.btn {
    font-size: 18px;
    min-height: 40px;
    min-width: 130px;
    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 50px;
    line-height: 23px;
}

.btn:active {
    box-shadow: none;
}

.btn:active {
    box-shadow: none;
}

.btn:hover {
    box-shadow: none;
}

.btn-sm {
    font-size: 16px;
    min-height: 30px;
    min-width: 100px;
    padding-top: 2px;
    padding-bottom: 2px;
    padding-left: 20px;
    padding-right: 20px;
}

.btn-secondary-2 {
    color: #444;
    background-color: rgba(255, 255, 255, 0);
    border-color: #444;
    will-change: transform;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition: background 300ms ease-out, -webkit-transform 300ms ease-out;
    transition: background 300ms ease-out, -webkit-transform 300ms ease-out;
    transition: transform 300ms ease-out, background 300ms ease-out;
    transition: transform 300ms ease-out, background 300ms ease-out, -webkit-transform 300ms ease-out;
}

.btn-secondary-2:focus,
.btn-secondary-2:hover {
    color: #444;
    background-color: rgba(255, 255, 255, 0);
    border-color: #2b2b2b;
    -webkit-box-shadow: inset 0px 0px 0px 0.5px #444;
    box-shadow: inset 0px 0px 0px 0.5px #444;
    outline: 0!important;
}

.btn-secondary-2:active {
    color: #444;
    background-color: rgba(230, 230, 230, 0);
    border-color: #2b2b2b;
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    -o-transform: scale(0.9);
    transform: scale(0.9);
    -webkit-transition-duration: 300ms;
    transition-duration: 300ms;
}

.btn-secondary-2:active:hover,
.btn-secondary-2:active:focus {
    color: #444;
    background-color: rgba(230, 230, 230, 0);
    border-color: #2b2b2b;
}

.btn-secondary-2:active {
    background-image: none;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/providerProfile/A.pl-components.css,qv=190524.pagespeed.cf.6-mQmD4R_H.css */


/*! @import https://s.cdn-care.com/js/vendor/bower_components/ion.rangeSlider/css/normalize.css */

svg:not(:root) {
    overflow: hidden;
}

button {
    color: inherit;
    font: inherit;
    margin: 0;
}

button {
    overflow: visible;
}

button {
    text-transform: none;
}

button {
    -webkit-appearance: button;
    cursor: pointer;
}

button::-moz-focus-inner {
    border: 0;
    padding: 0;
}


/*! end @import */

.icon {
    display: inline-flex;
    vertical-align: sub;
    color: #444;
}

.icon svg {
    -webkit-transition-duration: .125s;
    transition-duration: .125s;
    -webkit-transition-property: all;
    transition-property: all;
    -webkit-transform-origin: center;
    -moz-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    margin: auto;
}

:focus {
    outline: none;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/providerProfile/A.main.css,qv=190524.pagespeed.cf.DBz8hvUhfX.css */

.found-helpful {
    color: #666;
    margin-left: 16px;
    font-size: 14px
}

.thanks-blk {
    color: #02768b;
    display: none;
}

.thanks-blk .icon {
    margin-right: 10px;
}

#reviews .btn-secondary-2 {
    font-size: 13px;
    margin-top: 10px;
    margin-bottom: 10px;
}


/*! CSS Used from: https://s.cdn-care.com/css/dw/providerProfile/A.profilePagePrint.css,qv=190524.pagespeed.cf.rys8Emybum.css ; media=print */

#reviews .stars-count {
    margin-left: 0px;
}

.review-percent {
    margin-bottom: 20px;
    margin-top: 20px;
}

#reviews svg.gauge {
    display: block;
    margin: 3px;
}

#reviews svg.gauge circle {
    fill: none;
    stroke-width: 2px;
    transform-origin: 50%;
    transform: rotate(270deg);
}

#reviews svg.gauge circle:nth-child(1) {
    stroke: #444;
}

#reviews svg.gauge circle:nth-child(2) {
    stroke: #28e2c2;
    stroke-dasharray: calc(314.59%);
    stroke-dashoffset: calc(0%);
    transition: all .5s ease-out;
}

#reviews svg.gauge circle.message-mask {
    stroke: #444;
}

#reviews svg.gauge text {
    fill: #444;
}

#reviews svg.gauge text.value {
    font-size: 18px;
    font-weight: bold;
}

#reviews svg.gauge text.message {
    font-weight: bold;
}

#reviews
/*! CSS Used from: https://s.cdn-care.com/css/dw/providerProfile/A.main.css,qv=190524.pagespeed.cf.DBz8hvUhfX.css */

#reviews .review-percent {
    text-align: center;
    margin: 15px 0;
}

#reviews .review-percent svg {
    display: inline-block;
}

#reviews .total-ratings {
    font-weight: 900;
    margin: 15px 0;
}

#reviews .stars-count {
    font-weight: normal;
}

.description_menu .profile_nav ul {
    list-style: none;
    border-bottom: 3px solid #dedede;
    padding-bottom: 6px;
}

.description_menu .profile_nav ul li a {
    display: inline;
    text-decoration: none;
    padding-bottom: 9px !important;
    text-transform: uppercase;
    font-weight: 600;
}

.btn_profile_mensaje {
    margin-top: 13px;
    margin-bottom: 15px;
    max-width: 240px;
    width: 100%;
    color: #444;
    background-color: rgba(230, 230, 230, 0);
    border-color: #2b2b2b;
    background-image: none;
    text-decoration: none;
    border-radius: 50px;
}

.btn_profile_pay {
    margin-top: 13px;
    margin-bottom: 15px;
    max-width: 240px;
    width: 100%;
    color: white;
    background-color: #444;
    border-color: #2b2b2b;
    background-image: none;
    text-decoration: none;
    border-radius: 50px;
}

#habilidades {
    margin-top: 40px;
}

#habilidades .attributes-list-title {
    margin-bottom: 10px;
    margin-top: 10px;
    font-size: 14px;
    font-weight: bold;
    line-height: 22px;
}

#habilidades .titulo_perfil {
    font-size: 18.72px;
    margin-top: 20px;
    margin-bottom: 10px;
}

#habilidades .list_skill {
    padding: 12px 15px 11px 15px;
    font-size: 13px;
}

@media (max-width: 767.98px) {
    .description_menu {
        display: none !important;
    }
}

@media (max-width: 992px) {
    .description_menu .container {
        max-width: 920px !important;
    }
}

.hero-perfil-container {
    padding-left: 5%;
    padding-right: 5%;
}

@media (max-width: 670px) {
    .datosDerecha {
        display: none !important;
    }
}

@media screen and (max-width: 480px) {
    #habilidades,
    #reviews {
        padding-left: 10%;
        padding-right: 10%;
    }
    .btn {
        padding-left: 0px;
        padding-right: 0px;
    }
}
</style>


<script>
    $(document).ready(function(){
        setInterval(function(){
            if ($(".datos-people").visible()==false) {
                $(".description_menu").fadeIn(200);
            } else{
                $(".description_menu").fadeOut(200);
            }
    }, 10);


        (function($) {
          "use strict"; // Start of use strict

          // Smooth scrolling using jQuery easing
          $('a.js-scroll-trigger').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: (target.offset().top - 220)
                }, 1000, "easeInOutExpo");
                return false;
              }
            }
          });

          // Closes responsive menu when a scroll trigger link is clicked
          // $('.js-scroll-trigger').click(function() {
          //   $('.navbar-collapse').collapse('hide');
          // });

          // Activate scrollspy to add active class to navbar items on scroll
          // $('body').scrollspy({
          //   target: '#profileNav',
          //   offset: 220
          // });

        })(jQuery); 
    });
</script>

<div class="description_menu">
   <div class="container">
      <div class="row description_container">
         <div class="col-xl-2 col-lg-2 col-lg-2 col-md-2 p-0" style="text-align: center">
            <img src="img/perfil.jpg" alt="">
         </div>
         <div class="col-xl-7 col-lg-7 col-lg-7 col-md-7 p-0 pl-2">
            <h2>Maria M.</h2>
            <div class="stars section-wrap go-to-review">
               <span class="icon icon-stars icon-stars-0-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="89" height="13" viewBox="0 0 89 13" xmlns:xlink="http://www.w3.org/1999/xlink">
                     <defs>
                        <path id="star" stroke="none" d="M4.6186 3.5457c.2006-.5534.2006-.5534.2376-.5675l.03-.1705L5.566.9332C5.7723.3648 6.093 0 6.5555 0c.472 0 .791.3773.9848.9596L8.17 2.8524l.3853 1.1584 2.217.075.996.0337c1.3364.045 1.6617 1.0928.5853 1.8863l-.8032.5922-.803.5923-.9813.7235c.027.0918.064.2207.121.4197.137.4753.159.5512.206.7573l.564 1.9133c.2304.802.018 1.486-.7275 1.486-.28 0-.5747-.124-.886-.347l-2.614-1.871-2.6626 1.8005c-.308.2084-.5978.3237-.87.3237-.7604 0-.9678-.6972-.7136-1.503l.302-.9522.302-.9522.3688-1.1626-.3444-.2685c-.464-.3617-.464-.3617-.3114-.3767h-.172l-.1354-.1058L.619 5.848c-1.054-.822-.7004-1.8602.6362-1.8693l.9963-.007 2.2182-.0158.149-.411z"></path>
                        <linearGradient id="fill" x1="0%" y1="0%" x2="100%" y2="0%">
                           <stop offset="50%" stop-color="#FB4C4C" stop-opacity="1"></stop>
                           <stop offset="50%" stop-color="#BCBCBC" stop-opacity="1"></stop>
                        </linearGradient>
                     </defs>
                     <use class="star star-1" xlink:href="#star"></use>
                     <use class="star star-2" xlink:href="#star" transform="translate(19)"></use>
                     <use class="star star-3" xlink:href="#star" transform="translate(38)"></use>
                     <use class="star star-4" xlink:href="#star" transform="translate(57)"></use>
                     <use class="star star-5" xlink:href="#star" transform="translate(76)"></use>
                  </svg>
               </span>
               <span class="stars-count stars-count-lg">(0)</span>
            </div>
            <div class="body-1 black details ">
               Part-Time pet sitter
               <span class="mid-dot"> · </span>
               <span> Hastings, NE </span>
               <span class="mid-dot"> · </span>
               <span> 5 </span>
               <span> years exp. </span>
               <span class="mid-dot"> · </span>
               <span> $13 - 16/hr</span>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-lg-3 col-md-3 p-0">
            <div>
               <a href="/seeker/upgradeMembershipPlan.do" class="btn btn-secondary-2 btn_profile_mensaje">Mensaje</a>
            </div>
            <div>
               <a href="/seeker/upgradeMembershipPlan.do" class="btn btn-secondary-2 btn_profile_pay">Pagar Ahora</a>
            </div>
         </div>
      </div>
   </div>
   <hr>
   <div class="container profile_nav">
      <nav class="navbar navbar-expand-lg" id="profileNav">
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link js-scroll-trigger pr-2" href="#bio">Bio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link js-scroll-trigger p-2" href="#antecedentes">Antecedentes</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link js-scroll-trigger p-2" href="#habilidades">Experiencia & Habilidades</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link js-scroll-trigger p-2" href="#reviews">Reseñas</a>
               </li>
            </ul>
         </div>
      </nav>
   </div>
   <hr style="background-color: #979797;">
</div>
<picture class="anuncios">
   <img src="img/msjpremium.jpg" alt="">
</picture>
<section class="bradbrumbs">
   <ul>
      <li> <a href="">Inicio</a> » </li>
      <li><a href="">Amas de casa</a> » </li>
      <li><a href="">Resultados de la búsqueda</a> » </li>
      <li> Annie S. </li>
   </ul>
</section>
<div class="suscribaseapremium">
   <div class="suscribaseapremium_div">
      <span>Suscribase a Premium</span>
      <ul>
         <li>Referencias</li>
         <li>Información de Contacto</li>
         <li>Antecedentes Policiales</li>
      </ul>
      <span class="btnpremium">
      <a href="#">Premium</a>
      </span>
   </div>
</div>
<section class="hero-perfil-container">
   <div class="hero-perfil">
      <picture class="imagen-perfil">
         <img src="img/perfil.jpg" alt="">
      </picture>
      <div class="datos-people">
         <h2>Maria M.</h2>
         <span>Asistenta del hogar</span> |
         <span>Tiempo parcial</span> |
         <span>Cercado de Lima</span>               
      </div>
      <div class="datos-people-dos">
         <div class="star">
            <span class="icon-star-full"></span>
            <span class="icon-star-full"></span>
            <span class="icon-star-full"></span>
            <span class="icon-star-full"></span>
            <span class="icon-star-full"></span>
         </div>
         <div class="experiencia">
            <h4>5</h4>
            <span>AÑS. EXP.</span>
         </div>
         <div class="tarifa">
            <h4>S/ 930.00</h4>
            <span>TARIFA POR MES</span>
         </div>
      </div>
      <div class="datosDerecha">
         <ul>
            <li>     
               <span class="btnDatosDerecha">
               <a href="#">Horario Maria M.</a>
               </span> 
            </li>
            <li>     
               <span class="btnDatosDerecha">
               <a href="#">Actualiza ahora para contactar</a>
               </span> 
            </li>
            <li> <span><a href="">Agregar a los favoritos</a></span></li>
            <li> <span><a href="">Imprimir para entrevista</a></span></li>
            <li> <span><a href="">Solicitar verificación de antecedentes</a></span></li>
         </ul>
      </div>
      <div class="datosAdicional1">
         <div class="generalAttributes">
            <div class="tickMarkSml"> Tiene transporte</div>
         </div>
         <div class="generalAttributes">
            <div class="tickMarkSml"> Dispuesto a viajar 15 Kilometros</div>
         </div>
         <div class="generalAttributes">
            <div class="crossMarkSml"> Proporciona suministros de limpieza.</div>
         </div>
      </div>
      <div class="datosAdicional2">
         <div class="generalAttributes">
            <div class="tickMarkSml"> Tiene transporte</div>
         </div>
         <div class="generalAttributes">
            <div class="tickMarkSml"> Dispuesto a viajar 15 Kilometros</div>
         </div>
         <div class="generalAttributes">
            <div class="crossMarkSml"> Proporciona suministros de limpieza.</div>
         </div>
      </div>
      <div class="datosAdicional3">
         <div class="generalAttributes">
            <div class="tickMarkSml"> Tiene transporte</div>
         </div>
         <div class="generalAttributes">
            <div class="tickMarkSml"> Dispuesto a viajar 15 Kilometros</div>
         </div>
         <div class="generalAttributes">
            <div class="crossMarkSml"> Proporciona suministros de limpieza.</div>
         </div>
      </div>
      <div class="actividad">
      </div>
      <div class="conoce" id="bio">
         <h3 class="titulo_perfil">Conoce a Maria</h3>
         <p>Experiencia en limpieza de casas y oficinas desde hace más de 10 años. Tengo una flexibilidad extrema en
            horas de disponibilidad y puedo proporcionar mi propio equipo y / o limpiadores cuando sea necesario.
            Me encanta el reto de enfrentar un trabajo duro! Excelente para la organización, no fume y no tenga
            problemas trabajando en un hogar con mascotas. ¡Soy una madre de 5 con solo una en casa! 
            ¡Me ofrezco como voluntario en una escuela cristiana
         </p>
      </div>
      <div class="tambienayudacon">
         <h4>Maria también puede ayudar con</h4>
         <div class="tambienayudaconIconos">
            <img src="img/heart.png" alt="Heart">
            <span>Noche de Citas</span>
         </div>
         <div class="tambienayudaconIconos">
            <img src="img/heart.png" alt="Heart">
            <span>Noche de Citas</span>
         </div>
         <div class="tambienayudaconIconos">
            <img src="img/heart.png" alt="Heart">
            <span>Noche de Citas</span>
         </div>
         <div class="tambienayudaconIconos">
            <img src="img/heart.png" alt="Heart">
            <span>Noche de Citas</span>
         </div>
      </div>
      <div class="seguridadVerificaciones"  id="antecedentes">
         <h3 class="titulo_perfil">Seguridad y verificaciones</h3>
         <p>Para ayudar a mantener a nuestra comunidad segura, Care.com realiza una evaluación limitada de todos
            los cuidadores. Pero hay que hacer más: Entrevistar candidatos. Consultar referencias. 
            Ejecutar una verificación de antecedentes. Y visita nuestro Centro de Seguridad para aprender más.
         </p>
      </div>
      <div class="seguridadVerificacionesBloque">
         <div class="seguridadVerificacionesBSection1">
            <h5 class="titulo titulo_perfil">Verificación de antecedentes penales</h5>
            <img src="img/suplantacion_identidad.png" alt="">
            <span class="btnpremium">
            <a href="#" class="botonSeguridadVerificacion">Verificar</a>
            </span>
         </div>
         <div class="seguridadVerificacionesBSection1">
            <h5 class="titulo titulo_perfil">Verificación de antecedentes penales</h5>
            <img src="img/suplantacion_identidad.png" alt="">
            <span class="btnpremium">
            <a href="#" class="botonSeguridadVerificacion">Verificar</a>
            </span>
         </div>
         <div class="seguridadVerificacionesBSection1">
            <h5 class="titulo titulo_perfil">Verificación de antecedentes penales</h5>
            <img src="img/suplantacion_identidad.png" alt="">
            <span class="btnpremium">
            <a href="#" class="botonSeguridadVerificacion">Verificar</a>
            </span>
         </div>
      </div>
      <div class="verificacionesAdicionales">
         <h3>Verificaciones adicionales:</h3>
         <div class="divVerificacionCont">
            <div class="divVerificacionCont-row">
               <div class="divverificacionesAdicionales1">
                  <span class="rpbgc-icons rpbgc-fb active"></span>
                  <span>Facebook </span> - <span class="info"> Sin verificar</span>
               </div>
               <div class="divverificacionesAdicionales2">
                  <span class="rpbgc-icons rpbgc-twitter"></span>
                  <span>twitter </span> - <span class="info"> Sin verificar</span>
               </div>
               <div class="divverificacionesAdicionales3">
                  <span class="rpbgc-icons rpbgc-phone active"></span>
                  <span>Phone number  </span> - <span class="info"> Sin verificar</span>
               </div>
               <div class="divverificacionesAdicionales4">
                  <span class="rpbgc-icons rpbgc-mail"></span>
                  <span>Email </span> - <span class="info"> Sin verificar</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="container" id="habilidades">
   <div class="row">
      <div class="col-lg-9">
         <h5 class="titulo titulo_perfil">Experiencia y Habilidades</h5>
         <div class="h5 attributes-list-title">Habilidades Profesionales</div>
         <div class="row">
            <?php for ($i=0; $i < 3 ; $i++) : ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 list_skill">
               <span class="icon icon-tick-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12">
                     <path fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M5.4814 10.9183l9.7562-9.7725m-9.7562 9.7725L1.1454 6.575"></path>
                  </svg>
               </span>
               Habilidad <?php echo $i; ?>
            </div>
            <?php endfor ?>
         </div>
      </div>
   </div>
   <div class="col-lg-9 pl-0 pt-3">
      <div class="h5 attributes-list-title">Experiencia</div>
      <div class="row">
         <?php for ($i=0; $i < 5 ; $i++) : ?>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 list_skill">
            <span class="icon icon-tick-lg">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12">
                  <path fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M5.4814 10.9183l9.7562-9.7725m-9.7562 9.7725L1.1454 6.575"></path>
               </svg>
            </span>
            Experiencia <?php echo $i; ?>
         </div>
         <?php endfor ?>
      </div>
   </div>
   <div class="col-lg-9 pl-0 pt-3">
      <div class="h5 attributes-list-title">Idiomas</div>
      <div class="row">
         <?php for ($i=0; $i < 2 ; $i++) : ?>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 list_skill">
            <span class="icon icon-tick-lg">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12">
                  <path fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" d="M5.4814 10.9183l9.7562-9.7725m-9.7562 9.7725L1.1454 6.575"></path>
               </svg>
            </span>
            Idioma <?php echo $i; ?>
         </div>
         <?php endfor ?>
      </div>
   </div>
</div>
<div class="container" id="reviews">
   <div class="row">
      <div class="col-lg-9">
         <div class="row">
            <div class="col-6 float-left">
               <h5 class="titulo titulo_perfil">Reseñas</h5>
            </div>
            <div class="col-6 float-right">
               <a href="#" class="btn btn-secondary-2 btn_profile_mensaje">Calificar</a>
            </div>
         </div>
         <div class="row">
            <div class="col-12" style="text-align: center;">
               <div class="review-percent">
                  <div class="total-ratings">
                     <span class="icon icon-stars icon-stars-5-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="89" height="13" viewBox="0 0 89 13" xmlns:xlink="http://www.w3.org/1999/xlink">
                           <defs>
                              <path id="star" stroke="none" d="M4.6186 3.5457c.2006-.5534.2006-.5534.2376-.5675l.03-.1705L5.566.9332C5.7723.3648 6.093 0 6.5555 0c.472 0 .791.3773.9848.9596L8.17 2.8524l.3853 1.1584 2.217.075.996.0337c1.3364.045 1.6617 1.0928.5853 1.8863l-.8032.5922-.803.5923-.9813.7235c.027.0918.064.2207.121.4197.137.4753.159.5512.206.7573l.564 1.9133c.2304.802.018 1.486-.7275 1.486-.28 0-.5747-.124-.886-.347l-2.614-1.871-2.6626 1.8005c-.308.2084-.5978.3237-.87.3237-.7604 0-.9678-.6972-.7136-1.503l.302-.9522.302-.9522.3688-1.1626-.3444-.2685c-.464-.3617-.464-.3617-.3114-.3767h-.172l-.1354-.1058L.619 5.848c-1.054-.822-.7004-1.8602.6362-1.8693l.9963-.007 2.2182-.0158.149-.411z"></path>
                              <linearGradient id="fill" x1="0%" y1="0%" x2="100%" y2="0%">
                                 <stop offset="50%" stop-color="#FB4C4C" stop-opacity="1"></stop>
                                 <stop offset="50%" stop-color="#BCBCBC" stop-opacity="1"></stop>
                              </linearGradient>
                           </defs>
                           <use class="star star-1" xlink:href="#star"></use>
                           <use class="star star-2" xlink:href="#star" transform="translate(19)"></use>
                           <use class="star star-3" xlink:href="#star" transform="translate(38)"></use>
                           <use class="star star-4" xlink:href="#star" transform="translate(57)"></use>
                           <use class="star star-5" xlink:href="#star" transform="translate(76)"></use>
                        </svg>
                     </span>
                     <span class="stars-count stars-count-lg">(2)</span>
                  </div>
                  <span>
                     <svg class="gauge" id="rehire_circle" percent="50" height="120" width="120">
                        <circle cx="60" cy="60" r="50" class="message-mask"></circle>
                        <circle cx="60" cy="60" r="50" style="stroke-dasharray: 314.159px; stroke-dashoffset: 0px;"></circle>
                        <text class="value" x="62" y="58" text-anchor="middle" style="font-size:18px;">
                           <tspan>100%</tspan>
                        </text>
                        <text class="message" x="60" y="80" text-anchor="middle" style="font-size:10px;text-transform:uppercase;">
                           <tspan>Would Rehire</tspan>
                        </text>
                     </svg>
                  </span>
                  <span>
                     <svg class="gauge" id="punctual_circle" percent="100" height="120" width="120">
                        <circle cx="60" cy="60" r="50" class="message-mask"></circle>
                        <circle cx="60" cy="60" r="50" style="stroke-dasharray: 314.159px; stroke-dashoffset: 0px;"></circle>
                        <text class="value" x="62" y="58" text-anchor="middle" style="font-size:18px;">
                           <tspan>100%</tspan>
                        </text>
                        <text class="message" x="60" y="80" text-anchor="middle" style="font-size:10px;text-transform:uppercase;">
                           <tspan>Punctual</tspan>
                        </text>
                     </svg>
                  </span>
                  <span>
                     <svg class="gauge" id="dependable_circle" percent="100" height="120" width="120">
                        <circle cx="60" cy="60" r="50" class="message-mask"></circle>
                        <circle cx="60" cy="60" r="50" style="stroke-dasharray: 314.159px; stroke-dashoffset: 0px;"></circle>
                        <text class="value" x="62" y="58" text-anchor="middle" style="font-size:18px;">
                           <tspan>100%</tspan>
                        </text>
                        <text class="message" x="60" y="80" text-anchor="middle" style="font-size:10px;text-transform:uppercase;">
                           <tspan>Dependable</tspan>
                        </text>
                     </svg>
                  </span>
               </div>
            </div>
            <?php for ($i=0; $i < 3 ; $i++) : ?>
            <div class="col-12">
               <div class="review-comment-header" style="display: flex;">
                  <div class="profile-avatar">
                     <div>BW</div>
                  </div>
                  <div class="seeker-rating-info">
                     <div class="seeker-name">
                        Breanne W. <span class="mid-dot">·</span> Hired Michaela
                     </div>
                     <div class="seeker-ratings">
                        <p class="icon icon-stars-sm icon-stars-5-0">
                           <svg xmlns="http://www.w3.org/2000/svg" width="70" height="10" viewBox="0 0 70 10" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <defs>
                                 <path id="star-sm" stroke="none" d="M3.4714 2.7416c.1505-.415.1505-.415.1707-.383l.03-.1704.51-1.406C4.353.312 4.627 0 5.042 0c.4237 0 .6966.323.857.8053l.4723 1.4195.2617.7863 1.576.054.747.0255c1.1206.0377 1.4115.9748.5088 1.6403l-.6024.444-.6023.4444-.6652.491.0665.231c.0986.3426.1176.4086.153.5686l.424 1.4347c.192.669.004 1.2735-.666 1.2735-.2406 0-.4845-.1025-.7373-.2836l-1.89-1.353-1.925 1.301c-.25.1694-.489.2646-.7227.2646-.683 0-.8667-.6175-.6546-1.29l.2266-.7142.2263-.714.2502-.7892-.1898-.148c-.229-.1783-.3075-.2394-.2798-.256h-.049L1.6914 5.53.512 4.61c-.884-.6893-.5677-1.618.553-1.6255l.7474-.0053 1.5767-.0117.082-.2262z"></path>
                                 <linearGradient id="fill" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="50%" stop-color="#FB4C4C" stop-opacity="1"></stop>
                                    <stop offset="50%" stop-color="#BCBCBC" stop-opacity="1"></stop>
                                 </linearGradient>
                              </defs>
                              <use class="star star-1" xlink:href="#star-sm"></use>
                              <use class="star star-2" xlink:href="#star-sm" transform="translate(15)"></use>
                              <use class="star star-3" xlink:href="#star-sm" transform="translate(30)"></use>
                              <use class="star star-4" xlink:href="#star-sm" transform="translate(45)"></use>
                              <use class="star star-5" xlink:href="#star-sm" transform="translate(60)"></use>
                           </svg>
                        </p>
                        <p class="post-date ml-2">May 23rd, 2019</p>
                     </div>
                  </div>
               </div>
               <div class="review-comment-body body-1">
                  Michaela was on time for the job. The kids immediately warmed up to her and loved her. She spent hours playing with the kids on the trampoline, no easy task. When we got home the kids were sound asleep in bed with their favorite animals. She has wonderful attention to detail with the kids. We hope to have her back to babysit again! 
               </div>
               <div class="review-comment-footer">
                  <button type="button" class="btn btn-secondary-2 btn-sm helpful-btn" data-loading-text="Loading..." data-review-id="2874897">
                     <span>
                        <span class="icon icon-like ">
                           <svg width="17" height="20" xmlns="http://www.w3.org/2000/svg">
                              <g stroke="#444" fill="none" fill-rule="evenodd">
                                 <path d="M11.094 2.169c-.147-.604-1.1-2.16-2.156-.24C6.258 6.8 1 8.892 1 8.892V17.138s2.44-.16 3.251 0c.742.146 2.16 1.853 4.148 1.853h1.885c1.464 0 2.05.164 2.624-.939.304-.584.035-.687.156-1.262.102-.484 1.28-.36 1.746-1.13.525-.867-.026-1.26.085-1.93.096-.582.867-.602 1.06-1.456.249-1.1-.612-1.35-.744-2.027-.145-.744.517-.74.267-1.786-.123-.52-.858-1.213-2.192-1.213-1.333 0-3.955-.015-3.955-.015s2.18-3.356 1.763-5.064z" stroke-linejoin="round"></path>
                                 <path d="M1 8v11" stroke-linecap="round"></path>
                              </g>
                           </svg>
                        </span>
                        Helpful
                     </span>
                  </button>
                  <span class="thanks-blk">
                     <span class="icon icon-like ">
                        <svg width="17" height="20" xmlns="http://www.w3.org/2000/svg">
                           <g stroke="#444" fill="none" fill-rule="evenodd">
                              <path d="M11.094 2.169c-.147-.604-1.1-2.16-2.156-.24C6.258 6.8 1 8.892 1 8.892V17.138s2.44-.16 3.251 0c.742.146 2.16 1.853 4.148 1.853h1.885c1.464 0 2.05.164 2.624-.939.304-.584.035-.687.156-1.262.102-.484 1.28-.36 1.746-1.13.525-.867-.026-1.26.085-1.93.096-.582.867-.602 1.06-1.456.249-1.1-.612-1.35-.744-2.027-.145-.744.517-.74.267-1.786-.123-.52-.858-1.213-2.192-1.213-1.333 0-3.955-.015-3.955-.015s2.18-3.356 1.763-5.064z" stroke-linejoin="round"></path>
                              <path d="M1 8v11" stroke-linecap="round"></path>
                           </g>
                        </svg>
                     </span>
                     Thanks!
                  </span>
                  <span class="found-helpful">  <span class="helpful-seeker-counter">0</span> people found this helpful
                  </span> 
               </div>
               <hr>
            </div>
            <?php endfor ?>
         </div>
      </div>
   </div>
</div>
<br>
<div class="footer purple">
<?php 
require_once("avs_footer.php");
?>
