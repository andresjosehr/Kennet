<?php

session_start();
// Include the autoloader provided in the SDK
require_once 'Facebook/autoload.php';

// Include required libraries
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

$appId = '1013676792154139'; //Facebook App ID
$appSecret = 'e6bfa7e041658d732c1d2558022f1b12'; //Facebook App Secret
$redirectURL = 'https://www.amasynanas.com/redirect.php'; //Callback URL
$fbPermissions = array('email');  //Optional permissions
 
// $fb = new Facebook(array(
//     'app_id' => $appId,
//     'app_secret' => $appSecret,
//     'default_graph_version' => 'v2.10',
//         ));
 
 
//  $helper = $fb->getRedirectLoginHelper();
// $permissions = ['email']; // optional
// $loginUrl = $helper->getLoginUrl($redirectURL, $permissions);

// ini_set("error_reporting",1);

// $MAC="";


include("conexion.php");

//-------------------------	

$StrGT="";
$VP_RegXPag=10;
$LStrMsg="";
$LStrFoc="";
$LStrMM="";	

include("avs_login_fun.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php AddJs(); ?>

<script type="text/javascript" src="funciones.js"></script>

<script type="text/javascript" src="avs_login.js"></script>

<style>
form.form {
    width: 38%!important;
    margin-left: 0%!important;
    margin-top: 6% !important;
    padding: 0% !important;
}
body > section.hero > div > div.linkCT > div.signupCt > span > a {
    font-size: 1.5em;
}

    .hero form.form {
        width: 100%!important;
    }
    .login_btn{
        width: 100%;
        margin-top: -15px;
    }
    .fb-login-button{
        background-color: #3b5998;
    }
    .fb-login-button a{
        color: white;
        font-weight: 600;
        text-decoration: none;
    }
    .linkCT{
        text-align: center;
    }
    .linkCT a{
        color: black;
        text-decoration: none;
    }
    .hero{
        padding-left: 5%;
        margin-right: -40px;
    }
    .fondo_login{
                background-position-x: 75%;
                    margin-left: -22px;
    }
    @media (max-width: 768px) { 
        .row_hero{
            width: 97%;
            padding-left: 11%;
        }
     }
     body{
        overflow-x: hidden;
     }
</style>      
</head>
 

<body  <?php echo $LStrMsg;?>>
 
<header class="container">
   <div class="cabecera-logo">
      <figure class="logo-pequeno">
         <div class="burger-button"><img src="img/sandwich.svg" alt="sandwich"></div>
         <a href=""><img src="img/logo.png" alt="" srcset=""></a>
      </figure>
      <nav class="menu">
         <ol>
            <li class="active"><a href="">Inicio</a></li>
            <li><a href="">Mis Trabajos</a></li>
            <li><a href="">pagos</a></li>
            <li><a href="">mensajes</a></li>
         </ol>
      </nav>
      <span class="btnpremium">
      <a href="index.php">Registrarse</a>
      </span>
      <div class="perfil">
         <a href="#">Login</a>
      </div>
   </div>
</header>
<header class="mobil ocultar">
   <div class="close-button" id="close-button"> <a href=""><img  src="img/close.svg" alt=""></a> 
   </div>
   <div class="menu-responsive">
      <ol class="menu-lista">
         <div class="espacio1"></div>
         <li><a href=""><img src="img/menu-home.svg" alt=""> Inicio</a></li>
         <hr class="divider">
         <li><a href=""><img src="img/menu-jobs.svg" alt="" srcset=""> Mis Trabajos</a></li>
         <li><a href=""><img src="img/menu-search.svg" alt="" srcset=""> Buscar Cuidadoras</a></li>
         <li><a href=""><img src="img/menu-messages.svg" alt="" srcset=""> Mensajes</a></li>
         <li><a href=""><img src="img/menu-pagos.svg" alt="" srcset="">  Pagos</a></li>
         <li><a href=""><img src="img/menu-accounts.svg" alt="" srcset=""> Cuentas y configuraciones</a></li>
         <div class="espacio1"></div>
         <hr class="divider">
         <li> <a href="#">Login</a> | <a href="#">Registro</a></li>
      </ol>
   </div>
</header>
<!-- buscar -->
<section class="container2">
   <div class="cabecera-buscador">
      <div class="btnjob">
         <a href="index.php">Publicar un Trabajo</a>
      </div>
      <div class="buscador">
         <form name="searchBarForm" id="searchBarForm" method="GET" action="" autocomplete="off">
            <div class="cajasdetexto">
               <span class="buscador1">
                  <!-- <a href="#">Cuidador infantil <img src="img/flecha_down.svg" alt=""> </a> -->
                  <!-- dropdown -->
                  <span class="provider-search-field-data service-select">
                     <div class="dropdown custom-dropdown" data-dropdownname="sitterService" data-value="childCare">
                        <a class="dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-expanded="true">Buscar ahora &nbsp;
                        </a>
                        <input type="hidden" name="sitterService" id="searchBar" value="childCare">
                        <ul class="dropdown-menu">
                           <!-- CAREUS-63981 hide the smb speicific search options for groupie seeker-->
                           <li><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="childcare" data-value="childCare">Niñera</a></li>
                           <li class="sub-item"><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="babysit" data-value="babysitter">Guardería</a></li>
                           <li class="sub-item"><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="nanny" data-value="nanny">Tutoría</a></li>
                           <li class="sub-item"><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="cc_center" data-value="childCareLocation">Cuidado Adulto Mayor</a></li>
                           <li class="sub-item"><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="family_cc" data-value="familyCareLocation">Hands on Car</a></li>
                           <li class="sub-item"><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="nanny_agency" data-value="nannyLocation">Pet sitter</a></li>
                           <li class="sub-item"><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="camp" data-value="campsLocation">Ama de casa</a></li>
                           <li class="sub-item"><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="au_pair" data-value="auPair">Asistente Personal</a></li>
                           <li class="sub-item"><a href="javascript:;" data-eventname="NavSearchBar_Cat" data-eventcta="cc_afterschool" data-value="childCareAfterSchoolCare">Trabajos en Casa</a></li>
                        </ul>
                     </div>
                  </span>
                  <!-- dropdown -->
               </span>
               <span class="buscador2">
                  <!--           <span>Distrito</span>
                     <input type="text" name="zipCode" maxlength="5" size="5" value="68901" class="entry bold-text" aria-label="Please enter zipcode">
                     -->     
               </span>
               <span class="buscador3">
               <span>Distancia</span>
               <input type="text" name="zipCode" maxlength="5" size="5" value="10 Km" class="entry bold-text" aria-label="Please enter zipcode">
               </span>
               <span class="buscador4">
               </span>
               <span class="buscador5">
               <button type="submit" data-eventcta="search" class="btn-submit btn-searchbar-submit" aria-label="Search button">
               <img  class="lupa" src="img/lupa.svg" alt="">
               </button>
               </span>
            </div>
         </form>
      </div>
   </div>
</section>
<!-- buscar -->
<section class="hero">
   <div class="fondo_login">
      <div class="row row_hero">
         <div class="col-xl-4 col-lg-4 col-md-7 col-sm-12">
            <h2>Panel de ingreso</h2>
            <form id="Frm" name="Frm" method="post" action="avs_login.php" class="form sinpadding divLogin">
               <input name="TxtId" type="hidden" id="TxtId" value="<?php echo $StrId;?>"/>
               <input name="TxtPK" type="hidden" id="TxtPK" value="<?php echo $P_K;?>"/>
               <input name="TxtAc" type="hidden" id="TxtAc" value="" />
               <input name="TxtPag" type="hidden" id="TxtPag" value="<?php echo $LStrPag; ?>" />
               <input required name="TxtNom" id="TxtNom" type="email" placeholder="Email"  onKeyDown="return SoloTextoEx(event,'TxtPass');" value=""   tabindex="1">
               <input  required name="TxtPass" type="password" id="TxtPass" onkeydown="return SoloTextoEx(event,'CmdG');"  value="" placeholder="Contraseña" tabindex="2"  >     
               <div class="clearfix rememberMeCt" style="padding-bottom:22px;">
                  <div class="rememberMe">
                     <input type="checkbox" checked="checked" name="rememberMe" value="on"  tabindex="3">
                     <label class="rememberMeLbl"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recuérdame</font></font></label>
                  </div>
               </div>
               <button name="CmdG" class="login_btn" type="button" id="CmdG"    value="Iniciar sesion" 
                  onclick="fGuardar();"  tabindex="3">Iniciar sesión</button>
            </form>
            <hr>
            <div class="facebookLogin" >
               <div id="fb-root"></div>
               <!--<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=426613214795066&autoLogAppEvents=1"></script>-->
               <div class="fb-login-button btn btn-primary btn-block" data-width="150" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false"><a href="<?php echo $loginUrl; ?>">Ingresar con Facebook</a>
               </div>
            </div>
            <div class="linkCT" style="margin-top: 8px;">
               <div style="padding-bottom: 10px;">
                  <span><a href="#" id="getHelp" rel="nofollow">¿Se te olvidó tu contraseña?</a></span><br>
                  <span> <a href="#" rel="nofollow">¿Olvidaste el correo electrónico?</a></span>
               </div>
               <div class="signupCt">
                  ¿No tienes una cuenta? <span><a href="" rel="nofollow" style="font-size: 13px;"> Regístrate </a></span> 
               </div>
            </div>
         </div>
      </div>
   </div>
</section
   >
<br>
<div class="footer white">
<?php 
require_once("avs_footer.php");
?>