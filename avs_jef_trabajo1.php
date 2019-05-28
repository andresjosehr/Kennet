 <?php

include("conexion.php");


include("trabajo1_fun.php");


?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Trabajo1</title>
     <link rel="stylesheet" href="dist/css/home.css"> 
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

 

 <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page"><a>< Atras</a></li>
        </ol>
</nav>
<form id="Frm" name="Frm" method="post" action="nana_trabajo1.php">
<section class="trabajo1">
    <div class="trabajo1-row">
            <h1 class="text-center">La forma más rápida de encontrar a tu ama de casa perfecta</h1>
            <div class="espacio2"></div>
            <p class="text-center">
                    Publicar un trabajo en minutos. Recibe respuestas en cuestión de horas.
            </p>
            <div class="espacio3"></div>

                <div class="form-group" id="jobType">
                    <h2 class="text-center">¿Cuándo necesitas ayuda?</h2>
                    <div class="espacio2"></div>
                    <div class="form-radiobuttom">
                        <label class="control segment-control text-center segment-checked" id="job_type_recurring">
                            <input type="radio" name="jobType" data-job-type="R" value="R">
                            <span class="control-indicator">
                                <span class="icon icon-tick-lg icon-lightest">
                                    <img src="img/check.svg" alt="">
                                </span> Tiempo Completo
                            </span>
                        </label>
                        <label class="control segment-control text-center segment-checked" id="job_type_onetime">
                            <input type="radio" name="jobType" data-job-type="O" value="O">
                            <span class="control-indicator">
                                <span class="icon icon-tick-lg icon-lightest">
                                    <img src="img/check.svg" alt="">
                                </span> Medio Tiempo
                            </span>
                        </label>
                    </div>
                <div>
                        <div class="espacio3"></div>
                        <hr class="divider">
                        <div class="espacio3"></div>       
                <div class="container regionDistrito">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-center" >Región?</h3>
                            <select class="form-control">
                                <option>Default select</option>
                              </select>
                        </div>
                        <div class="col-md-6">
                                <h3 class="text-center" >Ciudad / Distrito</h3>
                                <select class="form-control">
                                    <option>Default select</option>
                                  </select>
                        </div>
                    </div>
                </div>
                <div class="espacio3"></div>
                <hr class="divider">
                <div class="espacio3"></div>                     
                <div class="container direccion">
                    <div class="row">
                        <div class="col-md-12">
                                
                                <h3 class="text-center" >Dirección</h3>
                                <input class="form-control" type="text" placeholder="Dirección">
                        </div>
                    </div>
                </div>
                <div class="espacio3"></div>
                <hr class="divider">
                <div class="espacio3"></div> 
                <div class="container numninos" id="kids">
                    <div class="row">
                            <div class="col-md-12">
                                    <h3 class="text-center" >Numero de niños?</h3>    
                                </div>
                         
                    </div>
                    <div class="row justify-content-center">

                            <div class="col-xs-3 text-left">
                                <button type="button" class="btn btn-stepper btn-stepper-minus" data-operator="-" disabled="disabled"><span class="icon icon-minus-lg icon-primary">
                                   -
                                </span></button>
                            </div>
                            <div class="col-xs-6 stepper-content">
                                <input type="text" name="kids" value="1" class="stepper-value" data-inc="1" data-min="1" data-max="10">
                                <div class="stepper-label"><span class="st-flag-3"></span></div>
                            </div>
                            <div class="col-xs-3 text-right">
                                <button type="button" class="btn btn-stepper btn-stepper-plus" data-operator="+"><span class="icon icon-plus icon-primary">
                                    +
                                </span></button>
                            </div>
                    </div>                                             
                </div>
                <div class="espacio3"></div>
                <hr class="divider">
                <div class="espacio3"></div> 
                <div class="container agregarninos">
                        <div class="row justify-content-center">
                            <div class="col-7 ">
                                    <h5 class="text-center" >AÑOS</h5>
                                    <select class="form-control">
                                            <option>Seleccione Edad</option>
                                    </select>
                            </div>
                        </div>
                </div>
                <div class="espacio3"></div>
                <hr class="divider">
                <div class="espacio3"></div> 
                <div class="container presupuesto">
                        <div class="row justify-content-center">
                            <div class="col-7 ">
                                    <h5 class="text-center" >Presupuesto</h5>
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text">S/</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                              <span class="input-group-text">.00</span>
                                            </div>
                                          </div>
                            </div>
                        </div>
                </div>
                <div class="espacio3"></div>
                <hr class="divider">
                <div class="espacio3"></div> 

                <div class="responsabilidades_adicionales"  id="responsabilidades_adicionales">
                        <div>
                                <header class="section-headers">
                                    <h2 class="h4 text-center">Responsabilidades Adicionales</h2>
                                    <p class="body-4 text-center">Seleccione todas las que correspondan </p>
                                </header>
                                <div class="postAJob_Group">
                                    <div class="selectors">
                                        <label class="control segment-control   segment-multi-select text-center">
                                            <input type="checkbox" name="attr-job_lightHousekeeping" value="true"><span class="control-indicator responsabilidades">Limpieza ligera</span></label>
                                        <label class="control segment-control   segment-multi-select text-center">
                                            <input type="checkbox" name="attr-job_mealPreparation" value="true"><span class="control-indicator responsabilidades">Preparación de comida</span></label>
                                        <label class="control segment-control   segment-multi-select text-center">
                                            <input type="checkbox" name="attr-job_laundry" value="false"><span class="control-indicator responsabilidades">Lavandería</span></label>
                                        <label class="control segment-control   segment-multi-select text-center">
                                            <input type="checkbox" name="attr-job_homeworkHelp" value="false"><span class="control-indicator responsabilidades">Ayuda con las tareas</span></label>
                                        <label class="control segment-control   segment-multi-select text-center">
                                            <input type="checkbox" name="attr-job_errandsOrGroceries" value="false"><span class="control-indicator responsabilidades">Diligencias / compras de comestibles</span></label>
                                    </div>
                                    <!-- react-text: 259 -->
                                    <!-- /react-text -->
                                </div>
                            </div>
                       
                        </div>
                </div>
              
                <div class="espacio3"></div>
                <hr class="divider">
                <div class="espacio3"></div>                
                <section class="cuidador_ideal" id="cuidador_ideal">
                        <!-- react-text: 262 -->
                        <!-- /react-text -->
                        <div>
                            <header class="section-headers">
                                <h2 class="h4 text-center">Otras cualidades</h2>
                                <p class="body-4 text-center">Seleccione todas las que correspondan</p>                                
                            </header>
                            <div class="postAJob_Group">
                                <div class="selectors">
                                    <label class="control segment-control   segment-multi-select text-center">
                                        <input type="checkbox" name="attr-job_comfortableWithPets" value="false"><span class="control-indicator responsabilidades">Cómodo con mascotas.</span></label>
                                    <label class="control segment-control   segment-multi-select text-center">
                                        <input type="checkbox" name="collegeDegree" value="false"><span class="control-indicator responsabilidades">No fuma</span></label>
                                    <label class="control segment-control   segment-multi-select text-center">
                                        <input type="checkbox" name="attr-job_firstAidOrCPR" value="false"><span class="control-indicator responsabilidades">Tiene un titulo universitario</span></label>
                                    <label class="control segment-control   segment-multi-select text-center">
                                        <input type="checkbox" name="attr-job_dropPickupChildren" value="false">
                                        <span class="control-indicator responsabilidades">RCP / primeros auxilios entrenados</span></label>
                                         <label class="control segment-control   segment-multi-select text-center">
                                        <input type="checkbox" name="attr-job_dropPickupChildren" value="false">
                                        <span class="control-indicator responsabilidades">Puede ir a la Playa/Piscina</span></label>
                                </div>
                                <!-- react-text: 287 -->
                                <!-- /react-text -->
                            </div>
                        </div>
                    </section>
                    <div class="espacio3"></div>
                    <hr class="divider">
                    <div class="espacio3"></div> 
                    
                    <div class="stickyNav-container" id="stickyNav-container">
                            <div class="paj-submit-wrapper" id="paj-submit-wrapper">
                                <div class="body-4 paj-disclaimer">
                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">* Con algunas excepciones (como la niñera ocasional), casi todos los trabajos de cuidadores están sujetos a las leyes laborales federales, estatales y locales. </font><font style="vertical-align: inherit;">Asegúrese de cumplir con todos los requisitos de salario mínimo, nómina e impuestos que se aplican en su área.</font></font>
                                    </p>
                                </div>
                                <div class="paj-submit">
                                    <button type="button" class="btn btn-primary-1" data-loading-text="Loading..."><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Siguiente</font></font></span></button>
                                </div>
                            </div>
                    </div>
    </div>  

</section>
</form>
<div class="footer white">
<?php 
require_once("avs_footer.php");
?>

