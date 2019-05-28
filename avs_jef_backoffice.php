 <?php

include("conexion.php");


?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Back Office</title>
     <?php AddJs(); ?>
<script type="text/javascript" src="funciones.js"></script>

<script type="text/javascript" src="trabajo1.js"></script>
<script>

$(document).ready(function(){  

   Inicializar();

});

</script>

 </head>
 <body  <?php echo $LStrMsg;?> >
  
    <?php require_once('avs_jef_header.php'); ?>
    <?php require_once('avs_jef_header_buscar.php'); ?>



    <style>
        .tabs_section .nav-item {
  color: #444;
  font-weight: bold;
}

#tabs_section {
  margin-top: 30px;
}

#tabs_section .tab_card {
  border-radius: 17px;
  height: 120px;
  background-image: url(img/susana.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

.tabs_section {
  width: 100%;
  margin-top: 35px;
}

.tabs_section .nav-item a {
  text-decoration: none;
}

.tabs_section .cerca {
  margin-right: auto;
  padding-left: 150px;
  text-transform: uppercase;
}

.tabs_section .vistos {
  margin: 0 auto;
  text-transform: uppercase;
}

.tabs_section .favoritos {
  margin-left: auto;
  padding-right: 150px;
  text-transform: uppercase;
}

.tabs_section .nav-tabs .nav-link.active {
  /* color: #495057; */
  /* background-color: #fff; */
  border-color: transparent;
  border-bottom: 4px solid #5552a0;
  margin-bottom: -3px;
  -webkit-transition: border-bottom .15s;
  /* Safari */
  -moz-transition: border-bottom .15s;
  /* Safari */
  -o-transition: border-bottom .15s;
  /* Safari */
  transition: border-bottom .15s;
}

.tabs_section .nav-tabs {
  border-bottom: 4px solid #dee2e6;
}

.tabs_section .nav-link:hover,
.tabs_section .nav-tabs .nav-link:focus {
  border-top: 0px;
  border-left: 0px;
  border-right: 0px;
  margin-top: 1px;
}

.tabs_section .favoritos .nav-link:hover,
.nav-tabs .favoritos .nav-link:focus {
  margin-right: 1px;
}

.tabs_section .cerca .nav-link:hover,
.nav-tabs .cerca .nav-link:focus {
  margin-left: 1px;
}

.tabs_section .card {
  border: 0px;
}

.tabs_section .card-body {
  padding: 0rem;
}

.tabs_section .card_profile {
  padding-left: 7px;
  padding-right: 7px;
}

.tabs_section .fade.show {
  opacity: 1;
  margin-bottom: 50px;
}

@media screen and (max-width: 769px) {
  .tabs_section .cerca {
    padding-left: 0px;
  }
  .tabs_section .favoritos {
    padding-right: 0px;
  }
  .emp_backoffice .filter-box .input_div {
    margin-top: -10px;
  }
  .emp_backoffice .empb_tarjeta {
    margin-bottom: 35px;
  }
}

@media (min-width: 768px) {
  .emp_backoffice .empb_tarjeta {
    margin-bottom: 20px;
  }
}

@media (max-width: 575.98px) {
  .tabs_section_child {
    padding-left: 41px;
  }
  .emp_backoffice .filter-box {
    width: 93%;
    margin: 0 auto;
  }
}
    </style>

<section class="hero">
   <div class="container33">
      <div class="divjob">
         <div class="titlejob">
            <h2 class="black">Solicitar Nuevo</h2>
         </div>
         <span class="cardjob">
         <img src="img/mail.svg" alt="">
         <a class="publicar" href="avs_jef_nuevo_trabajo.php">Publicar Nuevo Trabajo</a>
         </span>
      </div>
      <div class="row tabs_section">
                 <div class="col-12 tabs_section_child">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="nav-item cerca">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cercanos</a>
                       </li>
                       <li class="nav-item vistos">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Vistos</a>
                       </li>
                       <li class="nav-item favoritos">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Favoritos</a>
                       </li>
                    </ul>
                    <div class="tab-content" id="tabs_section">
                       <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="row card_profile">
                             <div class="col-xl-3 col-lg-4 col-md-6 px-2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   <div class="card">
                                      <div class="tab_card">
                                      </div>
                                      <div class="card-body">
                                         <h3>Susana R.</h3>
                                         <h5>Lugar: Miraflores • $13-$16</h5>
                                         <span class="icon icon-stars-sm icon-stars-0-0">
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
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-xl-3 col-lg-4 col-md-6 px-2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   <div class="card">
                                      <div class="tab_card">
                                      </div>
                                      <div class="card-body">
                                         <h3>Susana R.</h3>
                                         <h5>Lugar: Miraflores • $13-$16</h5>
                                         <span class="icon icon-stars-sm icon-stars-0-0">
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
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-xl-3 col-lg-4 col-md-6 px-2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   <div class="card">
                                      <div class="tab_card">
                                      </div>
                                      <div class="card-body">
                                         <h3>Susana R.</h3>
                                         <h5>Lugar: Miraflores • $13-$16</h5>
                                         <span class="icon icon-stars-sm icon-stars-0-0">
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
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-xl-3 col-lg-4 col-md-6 px-2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   <div class="card">
                                      <div class="tab_card">
                                      </div>
                                      <div class="card-body">
                                         <h3>Susana R.</h3>
                                         <h5>Lugar: Miraflores • $13-$16</h5>
                                         <span class="icon icon-stars-sm icon-stars-0-0">
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
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-xl-3 col-lg-4 col-md-6 px-2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   <div class="card">
                                      <div class="tab_card">
                                      </div>
                                      <div class="card-body">
                                         <h3>Susana R.</h3>
                                         <h5>Lugar: Miraflores • $13-$16</h5>
                                         <span class="icon icon-stars-sm icon-stars-0-0">
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
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-xl-3 col-lg-4 col-md-6 px-2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   <div class="card">
                                      <div class="tab_card">
                                      </div>
                                      <div class="card-body">
                                         <h3>Susana R.</h3>
                                         <h5>Lugar: Miraflores • $13-$16</h5>
                                         <span class="icon icon-stars-sm icon-stars-0-0">
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
                                         </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">2...</div>
                       <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">3...</div>
                    </div>
                 </div>
              </div>
   </div>
</section>
<div class="espacio"></div>
<section class="premium_contenedor">
   <div class="suscribase">
      <h2>Suscribirse a Premium</h2>
      <a href="#">Suscribirse ahora</a>
   </div>
</section>
<div class="espacio"></div>
<section class="recursos">
   <h2 class="black">Consejos Practicos</h2>
   <div class="recursos_container">
      <div class="recursos_item1">
         <img src="img/consejos.jpg" alt="">
         <p> Cómo administrar su ama de llaves </p>
      </div>
      <div class="recursos_item2">
         <img src="img/consejos.jpg" alt="">
         <p> Cómo administrar su ama de llaves </p>
      </div>
      <div class="recursos_item3">
         <img src="img/consejos.jpg" alt="">
         <p> Cómo administrar su ama de llaves </p>
      </div>
      <div class="recursos_item4">
         <img src="img/consejos.jpg" alt="">
         <p> Cómo administrar su ama de llaves </p>
      </div>
      <div class="recursos_item5">
         <img src="img/consejos.jpg" alt="">
         <p> Cómo administrar su ama de llaves </p>
      </div>
      <div class="recursos_item6">
         <a href="">
            <div class="grey">
               <p>Mas</p>
            </div>
         </a>
      </div>
   </div>
</section>
<div class="espacio3"></div>
<section class="trabajos">
   <h2 class="black">Publicar otro trabajo</h2>
   <div class="trabajos_container">
      <a class="trabajos_item" href="#">
         <div >
            <img src="img/osito.svg" alt="">
            <h3>Cuidado de los niños</h3>
            <p> Ayuda para los más pequeños en tu vida. </p>
         </div>
      </a>
      <a class="trabajos_item" href="#">
         <div >
            <img src="img/adultomayor.svg" alt="">
            <h3>Cuidado Adulto Mayor</h3>
            <p> Compañerismo, asistencia domiciliaria y más.  </p>
         </div>
      </a>
      <a class="trabajos_item" href="#">
         <div >
            <img src="img/mascotas.svg" alt="">
            <h3>Cuidado de mascotas</h3>
            <p> Compañerismo, asistencia domiciliaria y más. </p>
         </div>
      </a>
      <a class="trabajos_item" href="#">
         <div >
            <img src="img/limpieza.svg" alt="">
            <h3>Limpieza Hogar</h3>
            <p> Así que tu casa puede brillar.. </p>
         </div>
      </a>
   </div>
</section>
<div class="footer white">
<?php 
require_once("avs_footer.php");
?>
