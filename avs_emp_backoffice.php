<?php
   include("conexion.php");
   
   ?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>AVVS Amas y Nanas</title>
      <!--INI_SCRIPT------------------------------------------------------------------------------> 
      <?php AddJs(); ?>
      <script type="text/javascript" src="funciones.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <script type="text/javascript" src="avs_emp_backoffice.js"></script> -->
      <!--FIN_SCRIPT------------------------------------->  
      <script>
         $(document).ready(function(){  
         
            Inicializar();
         
         });
         
      </script>  
   </head>
   <body  <?php echo $LStrMsg;?> >
      <?php  require_once('avs_emp_header.php'); ?>
      <?php  require_once('avs_emp_header_buscar.php'); ?>
      <style>
         img.empb_imagen_perfil {
         width: 78%;
         }
         .empb_contenedor {
         padding: 10px;
         border: 1px solid #9e9e9eb5;
         border-radius: 10px;
         }
         .empb_tarjeta {
         margin-bottom: 10px;
         }
         .emp_backoffice{
         margin-top:10px;
         }
         .empb_contenedor {
         padding: 10px;
         border: 1px solid #9e9e9eb5;
         border-radius: 10px;
         min-height: 246px;
         }
         a.btn.btn-danger {
         text-decoration: none;
         }
         .filter-area{
         border: 1px solid #80808021;
         margin-top: 34px;
         background-color: #20bbd405;
         border-radius: 25px;
         }
         .within-select{
         width: 100%;
         }
         .margin-10{
         margin: 10px 0px;
         }
         .filter-box{
         border: 1px solid gray;
         background-color: #80808063;
         }
         .input-width{
         width: 90%;
         }
      </style>

<style>
.emp_backoffice .filter-box {
  border-radius: 16px !important;
  background-color: #56509f;
  -webkit-box-shadow: -16px 14px 35px -6px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: -16px 14px 35px -6px rgba(0, 0, 0, 0.75);
  box-shadow: -16px 14px 35px -6px rgba(0, 0, 0, 0.75);
}

.emp_backoffice .filter-box label {
  color: white;
  font-weight: 600;
}

.emp_backoffice .filter-area {
  border: 0px;
}

.emp_backoffice img.empb_imagen_perfil {
  width: 100% !important;
}

.emp_backoffice .empb_tarjeta .empb_contenedor {
  -webkit-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.75);
}

.emp_backoffice .empb_contenedor {
  padding: 21px;
  border: 0px !important;
}

.emp_backoffice .empb_imagen_perfil {
  border-radius: 50%;
}

.side_search {
  font-size: 25px;
  color: white;
  margin-top: 12px;
  margin-bottom: -25px;
}

.emp_backoffice .filter-box {
  margin-bottom: 60px
}

.emp_backoffice .div_info {
  text-align: center;
  margin-bottom: 20px !important
}

.emp_backoffice .general_info {
  font-size: 20px;
  color: white;
}

.dentro_div {
  margin-bottom: 6px;
}

.zip_code {
  border-radius: 0px;
  width: 100%
}

.div_radio_search {
  text-align: center;
}

#providerType {
  margin-bottom: 25px
}

.proyect_title {
  font-size: 19px;
  margin-bottom: 18px;
}

.proyect_text {
  margin-top: 10px
}

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












.checked {
  color: orange;
}
.fa-star{
  font-size: 12px !important;
  margin-left: -5px;
}

</style>

        <main class="container emp_backoffice">
           <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6 filter-box">
                 <div class="row mr-2 ml-2 mb-3" style="div_info">
                    <b class="side_search">Búsqueda: </b>
                 </div>
                 <div class="row filter-area mr-2 ml-2 mb-3">
                    <div class="col-md-12 mt-2 ml-2 mb-2 div_info">
                       <b class="general_info"> Información general</b>
                    </div>
                    <div class="col-md-6">
                       <label>Dentro</label>
                    </div>
                    <div class="col-md-6 input_div dentro_div">
                       <select class="supisteNosotros within-select filterValues form-control-sm" id="distance">
                          <option value="null">
                             Alguna
                          </option>
                          <option>1 Km</option>
                       </select>
                       </select>
                    </div>
                    <div class="col-md-6 margin-10"><label>Código postal</label></div>
                    <div class="col-md-6 margin-10 input_div">
                       <input type="text" id="zipcode" placeholder="Escribe el codigo" class="input-width filterValues form-control-sm zip_code">
                    </div>
                    <div class="col-md-6 margin-10"><label>Edad</label></div>
                    <div class="col-md-6 margin-10 input_div" align="right">
                       <select class="supisteNosotros within-select filterValues form-control-sm" id="providerAge">
                          <option value="null">
                             Alguna
                          </option>
                          <option value="18-20">18-20</option>
                          <option value="21-25">21-25</option>
                          <option value="26-30">26-30</option>
                          <option value="31-40">31-40</option>
                          <option value="41">41+</option>
                       </select>
                    </div>
                    <div class="col-md-6 margin-10"><label>Género</label></div>
                    <div class="col-md-6 margin-10 input_div">
                       <select class="supisteNosotros within-select filterValues form-control-sm" id="gender">
                          <option value="null">
                             Alguna
                          </option>
                          <option value="M">Masculino</option>
                          <option value="F">Femenino</option>
                       </select>
                    </div>
                    <div class="col-md-6 margin-10"><label>Idioma</label></div>
                    <div class="col-md-6 margin-10 input_div">
                       <select class="supisteNosotros within-select filterValues form-control-sm" id="language">
                          <option value="null">Alguno</option>
                          <option value="1">English</option>
                          <option value="2">Español</option>
                       </select>
                    </div>
                    <div class="col-md-6 margin-10"><label>Tarifa por hora</label></div>
                    <div class="col-md-6 margin-10 input_div">
                       <select class="supisteNosotros within-select filterValues form-control-sm" id="hourlyRate">
                          <option value="null">Alguno</option>
                       </select>
                    </div>
                    <div class="col-md-6 margin-10"><label>Último acceso</label></div>
                    <div class="col-md-6 margin-10 input_div">
                       <select class="supisteNosotros within-select filterValues form-control-sm" id="lastLogin">
                          <option value="null">
                             Alguno
                          </option>
                       </select>
                    </div>
                    <div class="col-md-12 margin-10 div_info"><b class="general_info">Tipo de proveedor</b></div>
                    <div class="col-md-12 input_div">
                       <select class="supisteNosotros within-select filterValues form-control-sm" id="providerType">
                          <option value="null">Alguna</option>
                          <option>Individual - Trabajo en casa</option>
                       </select>
                    </div>
                    <div class="col-md-7 col-sm-7 col-7 margin-10" align="center"><label>Tiene foto</label></div>
                    <div class="col-md-3 col-sm-3 col-3 margin-10 div_radio_search">
                       <input type="checkbox" name="" class="filterValues" value="">
                    </div>
                    <div class="col-md-7 col-sm-7 col-7 margin-10" align="center"><label>Tiene video</label></div>
                    <div class="col-md-3 col-sm-3 col-3 margin-10 div_radio_search">
                       <input type="checkbox" name="" class="filterValues" value="">
                    </div>
                    <div class="col-md-7 col-sm-7 col-7 margin-10" align="center"><label>Aceptar pagos no en efectivo</label></div>
                    <div class="col-md-3 col-sm-3 col-3 margin-10 div_radio_search">
                       <input type="checkbox" name="" class="filterValues" value="">
                    </div>
                    <div class="col-md-7 col-sm-7 col-7" align="center"><label>Dispuesto a tener impuestos</label></div>
                    <div class="col-md-3 col-sm-3 col-3 margin-10 div_radio_search">
                       <input type="checkbox" name="" class="filterValues" value="">
                    </div>
                 </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-md-6">
                 <div class="row" id="service_details">
                    <div class="col-xl-6 col-lg-6 col-md-12 empb_tarjeta">
                       <div class="empb_contenedor">
                          <div class="row">
                             <div class="col-md-12 div_radio_search">
                                <h2 class="proyect_title">Necesito Niñera cama a dentro</h2>
                             </div>
                             <div class="col-4">
                                <img class="empb_imagen_perfil" src="img/susana.png" alt="">
                             </div>
                             <hr />
                             <div class="col-8">
                                <h3>Susana R.</h3>
                                <h5>Lugar: Miraflores</h5>
                                <span class="icon icon-stars-sm icon-stars-0-0 pl-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </span>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-md-12">
                                <p class="proyect_text">Necesito niñera cama adentro que sea amable con los animales en miraflores, Atenta ...</p>
                             </div>
                             <div class="col-md-12">
                                <div class="empb_btn">
                                   <a class="btn btn-danger btn-block" href="avs_emp_jef_detalle.php">Ver mas detalles</a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- Ofertas -->
                    <!-- Ofertas -->
                    <div class="col-xl-6 col-lg-6 col-md-12 empb_tarjeta">
                       <div class="empb_contenedor">
                          <div class="row">
                             <div class="col-md-12 div_radio_search">
                                <h2 class="proyect_title">Necesito Niñera cama a dentro</h2>
                             </div>
                             <div class="col-4">
                                <img class="empb_imagen_perfil" src="img/susana.png" alt="">
                             </div>
                             <hr />
                             <div class="col-8">
                                <h3>Susana R.</h3>
                                <h5>Lugar: Miraflores</h5>
                                <span class="icon icon-stars-sm icon-stars-0-0 pl-1">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </span>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-md-12">
                                <p class="proyect_text">Necesito niñera cama adentro que sea amable con los animales en miraflores, Atenta ...</p>
                             </div>
                             <div class="col-md-12">
                                <div class="empb_btn">
                                   <a class="btn btn-danger btn-block" href="avs_emp_jef_detalle.php">Ver mas detalles</a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!----------------------------------------------->
                    <!-- codigo para usar -->
                 </div>
              </div>
              <div class="row tabs_section">
                 <div class="col-12 tabs_section_child">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="nav-item vistos">
                          <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Estas personas también buscan un asistente de cuidado</a>
                       </li>
                    </ul>
                    <div class="tab-content" id="tabs_section">
                       <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                         <div class="row card_profile">
                             <div class="col-xl-3 col-lg-4 col-md-6 px-2">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                   <div class="card">
                                      <div class="tab_card">
                                      </div>
                                      <div class="card-body">
                                         <h3>Susana R.</h3>
                                         <h5>Lugar: Miraflores • $13-$16</h5>
                                         <span class="icon icon-stars-sm icon-stars-0-0 pl-1">
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
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
                                         <span class="icon icon-stars-sm icon-stars-0-0 pl-1">
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
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
                                         <span class="icon icon-stars-sm icon-stars-0-0 pl-1">
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
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
                                         <span class="icon icon-stars-sm icon-stars-0-0 pl-1">
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
                                         <span class="icon icon-stars-sm icon-stars-0-0 pl-1">
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
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
                                            <span class="icon icon-stars-sm icon-stars-0-0 pl-1">
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star checked"></span>
                                              <span class="fa fa-star"></span>
                                              <span class="fa fa-star"></span>
                                          </span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </main>
      <!-- <div class="espacio"></div> -->
      <div class="espacio3"></div>
      <div class="footer white">
      <?php 
         require_once("avs_footer.php");
         ?>
      <script type="text/javascript">
         $(document).ready(function(){
             $('.filterValues').change(function(){
                  var distance = $('#distance').val();
                  var zipcode = $('#zipcode').val();
                  var providerAge = $('#providerAge').val();
                  var gender = $('#gender').val();
                  var language = $('#language').val();
                  var hourlyRate = $('#hourlyRate').val();
                  var lastLogin = $('#lastLogin').val();
                  var providerType = $('#providerType').val();
             $.ajax({  
              type:"POST",  
              url:"conexion.php", 
               data: 'distance='+distance+'&zipcode='+zipcode+'&providerAge='+providerAge+'&gender='+gender+'&language='+language+'&hourlyRate='+hourlyRate+'&lastLogin='+lastLogin+'&providerType='+providerType+'&filter=filter', 
              success:function(data){  
                  $('#service_details').html(data);
              }  
           });
             })
         })
      </script>