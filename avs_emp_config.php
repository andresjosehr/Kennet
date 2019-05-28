 <?php

include("conexion.php");


?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Personal</title>
     <link rel="stylesheet" href="dist/css/home.css"> 
     <?php AddJs(); ?>
<script type="text/javascript" src="funciones.js"></script>

<script type="text/javascript" src="trabajo1.js"></script>
<script>

$(document).ready(function(){  

   Inicializar();

});

/*function fConsultar(){
		var N=gv("Usu");

}*/

</script>

 </head>
 <body  <?php echo $LStrMsg;?> >
  
    <?php require_once('avs_emp_header.php'); ?>
    <?php require_once('avs_emp_header_buscar.php'); ?>

<section class="miPerfilContainer">
    <div class="miPerfilContainerRow">
     
            <div class="miPerfil_titulo">
                <h4>Hola <span>Emp</span></h4> 
            </div>
            <div class="miPerfil_masenlaces">
                <img src="img/subetufoto.jpg" alt="">
                <ul>
                    <li><a href="">Mi Amasynanas</a></li>
<!--                     <li><a href="">Mis Mensajes</a></li>
                    <li><a href="">Mis Reservaciones</a></li>
                    <li><a href="">Mis Trabajos</a></li> -->
                </ul>
            </div>
 
      
            <div class="miPerfil_imagenPremium">
             <!--    <img src="img/msjpremium.jpg" alt=""> -->
            </div>
            <div class="miPerfil_configuracion">
                <h2>Configuraciones de la cuenta</h2>
                <a href="#">informacion General</a>
                <a href="#">informacion General</a>
                <a href="#">informacion General</a>
                <a href="#">informacion General</a>
            </div>
            <div class="miPerfil_informacionGeneral">
                <div class="miPerfil_informacionGeneral_lista">

                    <div class="miPerfil_informacionGeneral_listaCont">

                                <div class="miPerfil_informacionGeneral_lista_Titulo1">Información general	</div>
                                <div class="miPerfil_informacionGeneral_lista_Descripcion1"><a href="">Editar</a></div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo2">Nombre de Pila </div>
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion2">Kennet2</div> 
                                    <div class="miPerfil_informacionGeneral_lista_Titulo3">Segundo nombre </div> 
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion3">  </div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo4">Apellido </div> 
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion4">Flores Rivera</div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo5">Dirección de envio </div>
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion5"> </div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo6">Ciudad </div>
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion6">Lima</div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo7">Estado </div> 
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion7">Kennet7</div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo8">cremallera </div> 
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion8">Kennet8</div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo9">Número de teléfono móvil </div>
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion9">Kennet9</div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo10">Teléfono alternativo </div> 
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion10">Kennet10</div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo11">Email </div> 
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion11">demo@gmail.com</div>
                                    <div class="miPerfil_informacionGeneral_lista_Titulo12">Contraseña </div> 
                                    <div class="miPerfil_informacionGeneral_lista_Descripcion12">******* <a href="">Cambiar contraseña</a></div>

                    </div>
                
                    <div class="miPerfil_informacionRedes">
                        <h5>Redes sociales</h5>
                        <p>Conecte sus cuentas de Care.com y de la red social para que pueda iniciar sesión rápida y fácilmente, compartir ofertas útiles, artículos y más.</p>
                        <div class="miPerfil_informacionRedesFacebook">
                                <div> 
                                <span class="miPerfil_facebook_left">Facebook</span> 
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=1485453468258402&autoLogAppEvents=1"></script>

                                <div class="fb-login-button" data-width="150" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="miPerfil_misfotos">
                <div class="miPerfil_misfotos_row">
                    <div><span class="miPerfil_misfotos_row_MisFotos" >Mis Fotos</span> <span><a href="">Editar</a></span></div>
                    <img src="img/subetufoto.jpg" alt="">
                 <p>Pon una cara con tu nombre ¡ <br>
                                    Personaliza tu perfil para la comunidad de Care.com subiendo una foto hoy!
                </p>
                <a href=""> Sube tu foto</a>
                </div>
                
            </div>
            <div class="miPerfil_necesidadesCuidado">
                <div class="miPerfil_necesidadesCuidado_row">
                    
                        <div><span class="miPerfil_misfotos_row_MisFotos" >Mi información familiar y necesidades de cuidado</span> <span><a href="">Editar</a></span></div>
                        <div class="espacio1"></div>
                        <div class="miPerfil_necesidadesCuidado_row_contenedor">
                            <div class="miPerfil_necesidadesCuidado_row_contenedor_row">
                                <div class="miPerfil_necesidadesCuidado_row_contenedor_row1">Intereses de servicio de cuidado</div>
                                <div class="miPerfil_necesidadesCuidado_row_contenedor_row_descripcion1">Gestión interna</div>
                                <div class="miPerfil_necesidadesCuidado_row_contenedor_row2">Descripción de la familia</div>
                                <div class="miPerfil_necesidadesCuidado_row_contenedor_row_descripcion2">manifestación</div>
                                <div class="miPerfil_necesidadesCuidado_row_contenedor_row3">Niños</div>
                                <div class="miPerfil_necesidadesCuidado_row_contenedor_row_descripcion3">Niñosto</div>
                            </div>
                        </div>
 
                </div>
            </div>
            <div class="miPerfil_Menbresia">
                <div class="miPerfil_Menbresia_row">
                    
                        <div><span class="miPerfil_misfotos_row_MisFotos" >Información de membresía	</span> <span><a href="">Editar</a></span></div>
                        <div class="espacio1"></div>
                        <div class="miPerfil_Menbresia_row_contenedor">
                            <div class="miPerfil_Menbresia_row_contenedor_row">
                                <div class="miPerfil_Menbresia_row_contenedor_row_contenedor_row1">Miembro desde</div>
                                <div class="miPerfil_Menbresia_row_contenedor_row_contenedor_row_descripcion1">16/12/2018</div>
                                <div class="miPerfil_Menbresia_row_contenedor_row_contenedor_row2">estado de la cuenta</div>
                                <div class="miPerfil_Menbresia_row_contenedor_row_contenedor_row_descripcion2">Activo</div>
                                <div class="miPerfil_Menbresia_row_contenedor_row_contenedor_row3">Plan de membresia</div>
                                <div class="miPerfil_Menbresia_row_contenedor_row_contenedor_row_descripcion3">Básico [ Actualizar ] </div>
                            </div>
                        </div>
 
                </div>
            </div>
            <div class="miPerfil_configuracionPrivacidad">
                <div class="miPerfil_configuracionPrivacidad_row">
                    <div><span class="miPerfil_configuracionPrivacidad_titulo">Configuraciones de privacidad y preferencias</span> <span><a href="">Editar</a></span></div>
                    <ul>
                        <li>Envíeme un correo electrónico acerca de las características, servicios, ofertas especiales y otras cosas interesantes de Care.com.</li>
                        <li>Envíeme por correo electrónico boletines con historias personales, artículos de actualidad, discusiones, consejos y más.</li>
                        <li>Envíeme un correo electrónico sobre nuevos cuidadores cerca de mí que se hayan unido recientemente a Care.com.</li>
                        <li>Compartir mi estado en línea con otros miembros de Care.com.</li>
                        <li>Enviar recibos de lectura con mensajes.</li>
                        <li>Hacer mi perfil y puestos de trabajo públicos.</li>
                        <li>Incluir mi perfil en los resultados de búsqueda de cuidadores y ciertos correos electrónicos de cuidadores.</li>
                        <li>Permitir que los cuidadores vean que he visto su perfil.</li>
                        <li>Compartir información sobre mí con facilitadores de comunicaciones de terceros para que puedan enviarme solicitudes de correo directo en nombre de otras compañías.</li>
                    </ul>
                </div>
            </div>
            <div class="miPerfil_tarjetaCredito">
                <div class="miPerfil_tarjetaCredito_row">
                        <div><span class="miPerfil_configuracionPrivacidad_titulo">Información de tarjeta de crédito</span> <span><a href="">Editar</a></span></div>   
                        <br>  
                        <div class="tarjetaCredito">
                            <div class="tarjetaCredito_row">
                                    <div class="tarjetaCredito_Titulo">Tarjeta de crédito en archivo</div>
                                    <div class="tarjetaCredito_Disponible">No disponible <br> <a href="">Ver historial de facturación</a></div>
                            </div>
                        </div>
                </div>
            </div>
   
    </div>
</section>

<?php require_once('nana_footer_blanco.php'); ?>
