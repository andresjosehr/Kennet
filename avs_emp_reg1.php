<?php

session_start();

include("conexion.php");

$StrUSER_ID =$_SESSION['SYS_USER_ID'];

//------------------------------------------------------------------

$StrGT="";$LStrMsg="";$LStrFoc="";$LStrMM="";

include("avs_emp_reg1_fun.php");

//------------------------------------------------------------------

$TI=0;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro Empleado</title>
<!--INI_SCRIPT------------------------------------------------------------------------------>

<?php AddJs(); ?>

<script type="text/javascript" src="funciones.js"></script> 

<script type="text/javascript" src="avs_emp_reg1.js"></script>


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
                      <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
                                      <li class="list-group-item active">Experiencia</li>
                                      <li class="list-group-item">Disponibilidad</li>
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
           <form id="Frm" name="Frm" method="post" class="  colortransparente" action="avs_emp_reg1.php" enctype="multipart/form-data">            
              <div class="row emp_input">                  
                  <div class="col-md-12 col-xs-12">
                      <h4>Salario y Nomina</h4>
                      <div class="emp_sueldo form-group">
                          <label for="Sue">Sueldo</label>
                          <input type="text" class="form-control" id="Sue" name="Sue"placeholder="Sueldo">
                      </div>
                      <div class="emp_pago">
                        <h4>Tipos de Pago Aceptados</h4>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="Pag" value="p_efectivo">
                              <label class="form-check-label" for="inlineCheckbox1">Efectivo</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Pag" value="p_deposito" >
                              <label class="form-check-label" for="inlineCheckbox2">Deposito</label>
                            </div>
                      </div>
                  </div>
                  <div class="col-md-12 col-xs-12 emp_experiencia">
                    <h4>Informacion Adicional</h4>
                    <div class="form-group">
                        <label for="Exp">Experiencia</label>
                        <textarea class="form-control" id="Exp" name="Exp" rows="5"></textarea>
                  </div>
                  <div class="col-md-12 col-xs-12 emp_dni">
                      <h4>Documento de Identidad</h4>
                      <div class="form-group">
                          <label for="Exp">Numero de Identificación (DNI)</label>
                          <input type="text" class="form-control" id="Dni" name="Dni" placeholder="Dni">
                      </div> 
                  </div>
                  <div class="col-md-12 col-xs-12 emp_btnSig">
                    <div class="form-group">
                        <input name="CmdB" type="button" id="CmdG" class="btn btn-danger" 
                        <?php GOM_COMPLETARDATOS($StrUSER_ID);?> onclick="fGuardar();" 
                        tabindex="<?php echo ++$TI;?>"/>
                    </div>                    
                  </div>                                                    
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