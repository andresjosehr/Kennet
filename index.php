<?php

session_start();

include("conexion.php");
//------------------------------------------------------------------

$_SESSION['SYS_USER_ID']="";
	
//------------------------------------------------------------------

$StrGT="";$LStrMsg="";$LStrFoc="";$LStrMM="";

include("avs_index_fun.php");

//------------------------------------------------------------------

$TI=0;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amas y Nanas</title>
<!--INI_SCRIPT------------------------------------------------------------------------------>

<?php AddJs(); ?>

<script type="text/javascript" src="funciones.js"></script> 

<script type="text/javascript" src="avs_index.js"></script>

<!--FIN_SCRIPT------------------------------------------------------------------------------->

<script>

$(document).ready(function(){  

   Inicializar();

});

</script>


<style>
    
</style>

</head>

<style>
    .tipo_usr{
        text-align: center;
    }
    .btnFocus{
        background-color: #363361 !important;
        border-bottom: 3px solid #272352 !important;
    }
    label.radio-label.btnLogin {
        margin-right: 10px;
        margin-left: 10px;
    }
    .heroinicio{
        padding-bottom: 70px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    } 

    .index_section{
        padding-bottom: 70px;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #f3f3f3;
        background-image: url(img/fondo2.jpg);
    }
    .index_section .container{
        background-color: transparent;
    }
    .index_section .index_logo{
        max-width: 109px;
    }
    .index_section .index_nav{
        padding: 22px;
    }

    .index_section .index_nav a{
        background: #56509f;
        color: #fff;
        border-radius: 5px;
        padding: 10px 15px;
        font-size: 12px;
        border: none;
        border-bottom: 5px solid #3d3876;
        display: inline-block;
        margin-top: 7px;
        text-decoration: none;
    }
    .description_banner .tit{
        font-size: 35px;
    }
    .index_section form.form{
        margin: 0 !important;
        width: 100% !important;
    }

    .banner_tit{
        font-size: 40px;
        margin-top: -13px;
        margin-bottom: 39px;
        font-style: italic;
    }
    .description_banner_div{
        margin-top: 40%;
    }
    .prueba{
        text-align: center;
    }

    @media (max-width: 768px) { 
        .description_banner_div{
        text-align: center;
        margin-bottom: 50px;
        margin-top: 0px;
        }
        .banner_tit{
            font-size: 25px !important;
            margin-top: 0px !important;
        }
        .tit{
            font-size: 23px !important;
                margin-top: -24px !important;
        }
        .sub_tit{
            font-size: 20px !important;
        }
    
    }

    @media (max-width: 360px) { 

        .label_contratar, .label_trabajo{
            width: 100%;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
        .label_trabajo{
            margin-top: 10px;
        }
    }



</style>

<script>
    function FocusBtn(element){

        $("label[for='contratar']").removeClass("btnFocus");
        $("label[for='trabajo']").removeClass("btnFocus");

        $("label[for='"+element.id+"']").addClass("btnFocus");
    }
</script>
<body>

    <section class="index_section">
        <div class="container">
            <div class="index_header">
                <div class="row index_nav">
                    <div class="col-6">
                        <img class="index_logo" src="img/logo-white.png" alt="" srcset="">
                    </div>
                    <div class="col-6">
                        <div class="btnlogin">
                              <a href="avs_login.php">Inicia sesión</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="index_banner">

                <div class="row">
                    <div class="col-12" align="center">
                        <h1 class="banner_tit">Conectando hogares con cuidadoras</h1>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 description_banner">
                        <div class="description_banner_div">
                            <h1 class="tit">¡Accede a perfiles cerca de ti!</h1>
                            <h1 class="sub_tit">Publica Ofertas de empleo</h1>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <form id="Frm" name="Frm" method="post" class="form colortransparente" action="index.php" enctype="multipart/form-data">
                               <h3 class="prueba">Prueba amasynanas.com</h3>
                               <p class="tipo_usr">
                                  <span>
                                  <label for="contratar" class="radio-label btnLogin btnFocus label_contratar">Buscas Cuidadora</label>
                                  <input style="display: none;" onchange="FocusBtn(this)" required="" type="radio" id="contratar" name="Typ" value="b_cuidadora" class="radio" checked="">
                                  </span>
                                  <span>
                                  <label for="trabajo" class="radio-label btnLogin label_trabajo">Buscas Trabajo</label>
                                  <input style="display: none;" onchange="FocusBtn(this)" required="" type="radio" id="trabajo" name="Typ" value="b_trabajo" class="radio">
                                  </span>
                               </p>
                               <div class="divTrabajo">
                                  <select name="Ser" id="Ser" class="listaServicios" tabindex="1" onchange="Apc_OC();">
                                  </select>
                               </div>
                               <input name="Nam" id="Nam" class="" tabindex="2" type="text" placeholder="Nombres">
                               <input name="Lna" id="Lna" class="" tabindex="3" type="text" value="" placeholder="Apellidos">
                               <div class="divTrabajo">
                                  <input name="Add" id="Add" tabindex="4" type="text" value="" placeholder="Dirección">
                               </div>
                               <div class="divContratar" style="display: block;">
                                  <input name="Zip" id="Zip" tabindex="5" class="" type="text" value="" placeholder="Codigo Postal">
                               </div>
                               <input name="Ema" id="Ema" tabindex="6" type="email" value="" placeholder="Email">
                               <input name="Pas" id="Pas" tabindex="7" type="password" value="" placeholder="Contraseña">
                               <select name="Hdy" id="Hdy" class="supisteNosotros" tabindex="8" onchange="Apc_OC();">
                               </select>
                               <p class="terminos">
                                  Al hacer clic en "Unirse ahora", usted acepta nuestros
                                  <span><a href="http://www.amasynanas.com/soporte/terminos-y-condiciones.html">Terminos y condiciones</a></span>
                                  <!-- y
                                     <span><a href="#">Politica de privacidad </a></span>-->
                               </p>
                               <input name="CmdB" type="button" id="CmdG" class="btm" value="Guardar" onclick="fGuardar();" tabindex="9">
                               <!--INI_OCULTOS-------------------------------->
                               <div id="DivH">
                                  <input name="TxtId" type="hidden" id="TxtId" value="" style="left:813px; top: 259px; width: 91px;">
                                  <input name="TxtAc" type="hidden" id="TxtAc" value="" style="left:718px; top: 230px; width: 91px;">
                                  <input name="TxtPag" type="hidden" id="TxtPag" value="">
                                  <input name="TxtFec" type="hidden" id="TxtFec" value="27-05-19" style="left:814px; top: 276px; width: 91px;">
                                  <input name="IdUsu" type="hidden" id="IdUsu" value="" style="left:909px; top: 280px; width: 91px;">
                                  <input name="UsuHW" type="hidden" id="UsuHW" value="" style="left:909px; top: 260px; width: 91px;">
                               </div>
                               <!--FIN_OCULTOS-------------------------------->
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="footer purple">
<?php 
require_once("avs_footer.php");
?>
<script>
    $(document).ready(function(){
        $.ajax({  
         type:"GET",  
         url:"conexion.php", 
          data:"getGervice= getService",   
         success:function(data){
             $('#Ser').html(data);
         }  
      }); 
        $.ajax({  
         type:"GET",  
         url:"conexion.php", 
          data:"avsAuxiliar= avsAuxiliar",   
         success:function(data){
             $('#Hdy').html(data);
         }  
      });
    })
</script>