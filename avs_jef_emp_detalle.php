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

<section class="bradbrumbs">
    <ul>
        <li> <a href="">Inicio</a>   </li>
        <li><a href="">Amas de casa</a> </li>
        <li><a href="">Resultados de la búsqueda</a> </li>
        <li> Annie S. </li>
    </ul>
</section>
<div class="suscribaseapremium">
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
                     <h4>S/ 20 - 30</h4>
                     <span>TARIFA POR HORA</span>
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
                            <a href="#">Contactar certificados adicionales</a>
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
            <div class="conoce">
                    <h3 class="titulo_perfil">Conoce a Maria</h3>
                    <p>Experiencia en limpieza de casas y oficinas desde hace más de 10 años. Tengo una flexibilidad extrema en
                            horas de disponibilidad y puedo proporcionar mi propio equipo y / o limpiadores cuando sea necesario.
                           Me encanta el reto de enfrentar un trabajo duro! Excelente para la organización, no fume y no tenga
                            problemas trabajando en un hogar con mascotas. ¡Soy una madre de 5 con solo una en casa! 
                           ¡Me ofrezco como voluntario en una escuela cristiana</p>
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
            <div class="seguridadVerificaciones">
                <h3 class="titulo_perfil">Seguridad y verificaciones</h3>
                <p>Para ayudar a mantener a nuestra comunidad segura, Care.com realiza una evaluación limitada de todos
                        los cuidadores. Pero hay que hacer más: Entrevistar candidatos. Consultar referencias. 
                       Ejecutar una verificación de antecedentes. Y visita nuestro Centro de Seguridad para aprender más.</p>

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

<div class="footer white">
<?php 
require_once("avs_footer.php");
?>
