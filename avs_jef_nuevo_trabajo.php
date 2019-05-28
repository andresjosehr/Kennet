 <?php

include("conexion.php");


include("avs_jef_nuevo_trabajo_fun.php");


?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Nuevo Trabajo</title>

     <?php AddJs(); ?>
<script type="text/javascript" src="funciones.js"></script>
<script type="text/javascript" src="avs_jef_nuevo_trabajo.js"></script>
<script>

$(document).ready(function(){  

   Inicializar();

});

</script>

 </head>
 <body  <?php echo $LStrMsg;?> >
  
    <?php require_once('avs_jef_header.php'); ?>
    <?php require_once('avs_jef_header_buscar.php'); ?>

<picture class="anuncios">
    <img src="img/msjpremium.jpg" alt="">
</picture>
 
<section class="contenedorTrabajo">
    <div class="contenedorTrabajo-row">
            <h1>Publique un trabajo rápido y encuentre la atención que necesita.</h1>
            <h4>¿Qué tipo de ayuda necesitas?</h4>
    </div>

</section>
<section class="contenedorTrabajoServicios">
    <div class="contenedorTrabajoServicios-row">
        <div class="cuidadoNinos contenedorTrabajoLista">
            <img src="img/ositos.svg" alt="">
            <h4>Cuidado de niños</h4>
            <ul>
                <li><a href="nana_trabajo1.php">Niñera</a></li>
                <li><a href="">Guardería</a></li>
                <li><a href="">Tutoría</a></li>
            </ul>
        </div>
        <div class="cuidadoAnciano contenedorTrabajoLista">
                <img src="img/manos_corazon.svg" alt="">
                <h4>Cuidado Adulto Mayor</h4>
                <ul>
                    <li><a href="">Cuidado</a></li>
                    <li><a href="">Hands on Care</a></li>
             
                </ul>
        </div>
        <div class="cuidadoMascotas contenedorTrabajoLista">
                <img src="img/huellasperro.svg" alt="">
                <h4>Cuidado de mascotas</h4>
                <ul>
                    <li><a href="">Pet sitter</a></li>
                    <li><a href="">Estilista</a></li>
  
                </ul>
        </div>
        <div class="cuidadoHogar contenedorTrabajoLista">
                <img src="img/chisgete.svg" alt="">
                <h4>Cuidado de niños</h4>
                <ul>
                    <li><a href="">Ama de casa</a></li>
                    <li><a href="">Limpieza de casa</a></li>
                    <li><a href="">Asistente Personal</a></li>
                    <li><a href="">Trabajos en Casa</a></li>
                </ul>
        </div>
    </div>
</section>
<div class="footer white">
<?php 
require_once("avs_footer.php");
?>

