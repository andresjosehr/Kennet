<?php

session_start();

include("conexion.php");

$StrUSER_ID =$_SESSION['SYS_USER_ID'];

//------------------------------------------------------------------

$StrGT="";$LStrMsg="";$LStrFoc="";$LStrMM="";

include("avs_emp_reg2_cat1_fun.php");

//------------------------------------------------------------------

$TI=0;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Empleado 2</title>
<!--INI_SCRIPT------------------------------------------------------------------------------>

<?php AddJs(); ?>

<script type="text/javascript" src="funciones.js"></script> 

<script type="text/javascript" src="avs_emp_reg2_cat1.js"></script>

<!--FIN_SCRIPT------------------------------------->    
 
<script>

$(document).ready(function(){  

   Inicializar();

});

</script>
 
</head>
<body>
  <header class="container">
        <div class="cabecera-logo">
            <figure class="logo-pequeno">  
              <div class="burger-button"><img src="img/sandwich.svg" alt="sandwich"></div>
              <a href=""><img src="img/logo.png" alt="" srcset=""></a>
            </figure>       
        </div>
  </header>  
  <main class="emp container">
    <div class="row ">
      <div class="col-md-1 col-xs-12">
      </div>
      <div class="col-md-4 col-xs-12">
          <div class="emp_progressbar">
                  <span>MI PROGRESO</span>
                  <div class="progress">
                      <div class="progress-bar" role="progressbar"  style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <HR>
          </div>
          <div class="emp_categorias">
            <div class="accordion" id="emp_acordion">
                    <div class="card">
                      <div class="card-header" id="emp_cabecera_uno">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#emp_colapsar_uno" aria-expanded="true" aria-controls="emp_colapsar_uno">
                            EMPEZAR
                            </button>
                          </h2>
                      </div>
                      <div id="emp_colapsar_uno" class="collapse show" aria-labelledby="emp_cabecera_uno" data-parent="#emp_acordion">
                        <div class="card-body">
                              <h3>Destacar Habilidades</h3>
                              <ul class="list-group">
                                    <li class="list-group-item ">Inicio</li>
                                    <li class="list-group-item active">Experiencia</li>
                                    <li class="list-group-item">Datos Personales</li>
                                </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="emp_cabecera_dos">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#emp_colapsar_dos" aria-expanded="false" aria-controls="emp_colapsar_dos">
                            CONECTARSE
                            </button>
                          </h2>
                        </div>
                        <div id="emp_colapsar_dos" class="collapse" aria-labelledby="emp_cabecera_dos" data-parent="#emp_acordion">
                          <div class="card-body">
                              <h3>Conectarse</h3>
                                  <ul class="list-group">
                                      <li class="list-group-item">Contacto</li>
                                  </ul>
                          </div>
                        </div>
                    </div>
            </div>    
          </div>
      </div>
      <div class="col-md-6 contForm">
        <h1>Comentanos tu Experiencia</h1>
          <aside class="container">
           <form id="Frm" name="Frm" method="post" class="  colortransparente" action="avs_emp_reg2_cat1.php" enctype="multipart/form-data">            
              <div class="row emp_input">                  
                  <div class="col-md-12 col-xs-12">
                      <h4>Salario</h4>
                      <div class="form-group">
                        <label for="Sal">¿Indique su presupuesto salarial?</label>
                        <input type="text" class="form-control" id="Sal" name="Sal" placeholder="">
                      </div> 
                    <div class="form-group">
                      <h4>Tipos de pago aceptados?</h4>
                      <div class="custom-control custom-checkbox emp_pago">
                        <input type="checkbox" class="custom-control-input" value="SI" id="Cpy" name="Cpy">
                        <label class="custom-control-label" for="Cpy">Pago en Efectivo</label>
                      </div>                  
                      <div class="custom-control custom-checkbox emp_pago">
                        <input type="checkbox" class="custom-control-input" value="SI" id="Bdp" name="Bdp">
                        <label class="custom-control-label" for="Bdp">Deposito Bancario</label>
                      </div>  
                    </div> 
                      
                  </div>
                  <div class="col-md-12 col-xs-12 emp_experiencia">
                          
                      <div class="form-group">
                        <h4>Estas dispuesto a viajar</h4>
                          <span>
                              <label for="yesTravel" class="">Si</label>
                              <input required type="radio"  id="yesTravel" name="Tra" value="SI" class="" >
                          </span>
                          <span>
                              <label for="noTravel" class="">No</label>
                              <input required type="radio"  id="noTravel" name="Tra" value="NO" class="" checked>
                          </span>
                      </div>                             
                      <div class="form-group">
                        <h4>Numero de niños con los que se siente comod(a) mirando a la vez</h4>
                          <span>
                              <input type="text" class="form-control" id="Ccs" name="Ccs" placeholder="">
                          </span>
                      </div>   
 
                      <div class="form-group">
                        <h4>Estas dispuesto a cuidar niños enfermos </h4>
                          <span>
                              <label for="yesSic" class="">Si</label>
                              <input required type="radio"  id="yesSic" name="Sic" value="SI" class="" >
                          </span>
                          <span>
                              <label for="noSic" class="">No</label>
                              <input required type="radio"  id="noSic" name="Sic" value="NO" class="" checked>
                          </span>
                      </div> 
                      <div class="form-group">
                        <h4>Tienes experincia con gemelos</h4>
                          <span>
                              <label for="yesWin" class="">Si</label>
                              <input required type="radio"  id="yesWin" name="Win" value="SI" class="" >
                          </span>
                          <span>
                              <label for="noWin" class="">No</label>
                              <input required type="radio"  id="noWin" name="Win" value="NO" class="" checked>
                          </span>
                      </div> 
                      <div class="form-group">
                        <h4>Tienes experiencia con niños con necesidades especiales</h4>
                          <span>
                              <label for="yesEsp" class="">Si</label>
                              <input required type="radio"  id="yesEsp" name="Esp" value="SI" class="" >
                          </span>
                          <span>
                              <label for="noEsp" class="">No</label>
                              <input required type="radio"  id="noEsp" name="Esp" value="NO" class="" checked>
                          </span>
                      </div> 
                      <div class="form-group">
                   
                      <h4>Con que grupos de edad tienes experiencia</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="custom-control custom-checkbox emp_pago">
                          <input type="checkbox" class="custom-control-input" value="SI" id="he1" name="he1">
                          <label class="custom-control-label" for="he1">0-6 meses</label>
                        </div>                  
                        <div class="custom-control custom-checkbox emp_pago">
                          <input type="checkbox" class="custom-control-input" value="SI" id="he2" name="he2">
                          <label class="custom-control-label" for="he2">7 meses - 3 años</label>
                        </div>  
                        <div class="custom-control custom-checkbox emp_pago">
                          <input type="checkbox" class="custom-control-input" value="SI" id="he3" name="he3">
                          <label class="custom-control-label" for="he3">4 - 6 años</label>
                        </div>                         
                      </div>
                      <div class="col-md-6">             
                        <div class="custom-control custom-checkbox emp_pago">
                          <input type="checkbox" class="custom-control-input" value="SI" id="he4" name="he4">
                          <label class="custom-control-label" for="he4">7 - 11 años</label>
                        </div>  
                        <div class="custom-control custom-checkbox emp_pago">
                          <input type="checkbox" class="custom-control-input" value="SI" id="he5" name="he5">
                          <label class="custom-control-label" for="he5">12+ años</label>
                        </div>  
                      </div>
 
                    </div> 
                      </div> 
                  <div class="col-md-12 col-xs-12 emp_btnSig">
                    <div class="form-group">
                        <input name="CmdB" type="button" id="CmdG" class="btn btn-danger" 
                        <?php GOM_COMPLETARDATOS($StrUSER_ID);?> onclick="fGuardar();" 
                        tabindex="<?php echo ++$TI;?>"/>
                    </div>                    
                  </div>
                   <p>Con excepciones como las niñeras por horas todos los salarios estan sujetos a las leyes del salario minimo en la ley de Perú.</p>                                                   
              </div>    
              <!--INI_OCULTOS-------------------------------->
                    
              <?php include("ocultos.php");?>
                    
              <!--FIN_OCULTOS-------------------------------->
			    </form>                      
         </aside>
      </div>
      <div class="cold-md-1"></div>
    </div>
  </main>
</body>
</html>