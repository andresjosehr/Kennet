 <?php

include("conexion.php");
if(isset($_GET['ID']))
{
	$Id = $_GET['ID'];
	
		$s="DELETE FROM lab_liquidaciones WHERE id=$Id";	
		ejt($s);
}
include("avs_emp_jef_detalle_fun.php");
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

<script type="text/javascript" src="avs_emp_jef_detalle.js"></script>

<!--FIN_SCRIPT------------------------------------->  
<script>

$(document).ready(function(){  

   Inicializar();

});
</script>
<style>
.breadcrumb {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    border-radius: .25rem;
}
.breadcrumb-item+.breadcrumb-item {
    padding-left: .5rem;
}
.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    color: #6c757d;
    content: "/";
}
.breadcrumb-item a {
    text-decoration: none;
}
li.breadcrumb-item.active {
    color: #6c757d;
}
.project-detail-view .client-box .profile-photo {
    width: 70px;
    height: 70px;
}
.project-detail-new .client-box .user-info {
    min-height: 80px;
    padding-left: 100px;
    position: relative;
}
div#productName {
    padding: 0px 0px 15px 0px;
}
.trabajo_detalle img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
}
.user-info.col-sm-4.col-md-3.col-xs-12 {
    min-height: 80px;
    padding-left: 100px;
    position: relative;
}
.profile-photo.img.img-circle {
    width: 70px;
    height: 70px;
    position: absolute;
    top: 0;
    left: 15px;
}
.trabajo_detalle .col-md-9 {
    padding-left: 0px;
}
.container.emp_main {
    background: #9e9e9e12;
    border-radius: 5px;
    padding: 15px 0px 15px 0px;
}
.btn-info .btn-info.active.focus, .btn-info.active:focus, .btn-info.active:hover, .btn-info:active.focus, .btn-info:active:focus, .btn-info:active:hover, .open>.dropdown-toggle.btn-info.focus, .open>.dropdown-toggle.btn-info:focus, .open>.dropdown-toggle.btn-info:hover {
    color: #fff;
    background-color: #7d7d7d !important;
    border-color: #5b5b5b !important;
}
.btn-primary {
    color: #fff;
    background-color: #3D3876;
    border-color: #3D3876;
    text-decoration: none;
}


.btn-primary span {
    color: #fff;
 
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #3D3876;
    border-color: #3D3876;
    opacity:1;
}

.btn-primary:hover {
    background-color: #3D3876;
    opacity:0.8;
}

</style>
</head>

 <body  <?php echo $LStrMsg;?> >
  
    <?php require_once('avs_emp_header.php'); ?>
<br>

    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">AVVS</a></li>
                    <li class="breadcrumb-item"><a href="#">Trabajos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nanas</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container emp_main">
        <section class="trabajo_detalle">
            <div id="productName" class="row">
                <div class="col-sm-12">
                    <h1 class="title"><?php echo $Tit;?>
                        <span>
                            <div class="project-upsell-icons">
                            </div>
                        </span>
                    </h1>
                </div>            
            </div>
            <div class="row">
                <div class="user-info col-sm-4 col-md-3 col-xs-12">                       
                        <div class="profile-photo img img-circle "><img src="https://wkncdn.com/newx/assets/build/img/logos/default_logo_1-normal.bf6495f99.jpg" alt="Freelancer Elia T." title="Elia T." loading="lazy" width="50"></div>
                        <h4><?php echo $Nom;?> <?php echo shortTextOneCharacter($Apa, 1); ?></h4>
                </div>            
                <div class="col-md-3 col-xs-12">
                    <h4>Registrado desde:</h4> <?php echo $Dat;?>
                </div>            
                <div class="col-md-3 col-xs-12">
              <!--   <h4> Último login:</h4> Hace 2 meses -->
                </div>    
                <div class="col-md-3 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div><a href="#" role="button" class="btn btn-primary btn-block"><span>Envía una propuesta</span></a> <span><!----></span></div>
                        </div>
                    </div>
                </div>                        
            </div>
            <hr>
        <div class="project-status">
          <span class="status-icon open">
            <i class="wk2-icon"></i>
          </span> 
          <span class="status">
            Evaluando propuestas
          </span>
     <div class="row">
          <div class="col-sm-8 col-md-9">
            <h5>Descripción:</h5>
            <div class="specification">
             
            <?php echo $Des;?>
                    <br>
                    <br><strong>Categoría</strong>:  <?php echo $Cat;?>
 
                    <br><strong>¿Modo de Jornada?</strong>: Tiempo Completo
                    <br><strong>Disponibilidad requerida</strong>: Según se necesite
                    <br>
            </div>
          </div>
          <div class="col-md-3">
          <h3 class="budget text-success"> S/ 1500 </h3>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <p>Presupuesto</p>
                </div>
                <div class="col-xs-6 col-sm-12">
                    <h4>19</h4>
                    <p class="bids"> Propuestas </p>
                </div>
                <div class="col-xs-6 col-sm-12">
                    <h4>21</h4>
                    <p class="threads">Freelancers interesados</p>
                </div>
                <div class="col-xs-6 col-sm-12">
                    <p class="date"><strong>
                                                Publicado:                                </strong> Hace 3 meses </p>
                </div>
                <div class="col-xs-6 col-sm-12">
                    <p class="deadline"><strong>
                                                                                        Plazo:                                                                    </strong> No definido </p>
                </div>
                <div class="col-xs-6 col-sm-12">
                    <div>
                        <div title="Denunciar proyecto" class="report-project feedback"><a href="#" class="button"><i class="wk2-icon wk2-icon-notice"></i></a></div> <span><!----></span></div>
                </div>
            </div>          
          </div>     
     </div>
        </div>            
      </section>
    </div>

 
<div class="espacio"></div>
 
<div class="espacio3"></div>

<div class="footer white">
<?php 
require_once("avs_footer.php");
?>