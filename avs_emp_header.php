<!--------------------------------------------------------->
<!--Inicio Desktop ---------------------------------------->
<!--------------------------------------------------------->  

<style>
  header {
  padding-bottom: 16px;
  padding-top: 18px;
}

body>header>div.menu-responsive {
  position: fixed;
  z-index: 99;
  margin-top: 21px;
  width: 100%;
  height: 100%
}

.menu-lista {
  margin-top: 45px;
}

.close-button img {
  width: 25.57px;
  margin-top: 10px;
  margin-left: 39px;
}

body>header>div.menu-responsive ol li {
  width: 75%;
  padding-left: 19%;
  margin: 0 auto;
}

@media (max-width: 767.98px) {
  .main_header {
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 99999;
    background: white;
  }
}

.emp_backoffice {
  padding-top: 100px
}

@media (max-width: 767.98px) {
  .burger-button {
    display: block;
  }
}
</style>


<script>
   function OpenmobileMenu() {
     $('.mobil').show('300')
     $('#open_mobile_menu').fadeOut('300');
   }
   function ClosemobileMenu() {
     $('.mobil').hide('300')
     $('#open_mobile_menu').fadeIn('300');
   }
</script>


<header class="main_header">
    <div class="container">
      <div class="cabecera-logo">
            <figure class="logo-pequeno">  
                <div class="burger-button"><a onclick="OpenmobileMenu()"><img id="open_mobile_menu" src="img/sandwich.svg" alt="sandwich"></a></div>
              <a href=""><img src="img/logo.png" alt="" srcset=""></a>
            </figure>       
        <nav class="menu">
                <ol>
                    <li class="active"><a href="">Inicio</a></li>
                    <li><a href="">Mis Trabajos Realizados</a></li>
                    <li><a href="avs_emp_messajes.php">mensajes</a></li>
                </ol>
                
        </nav>    
        <span class="btnpremium">
        </span>
       
    <div class="perfil">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" 
        role="button" aria-haspopup="true" aria-expanded="false">
        <img src="img/subetufoto.jpg" alt=""></a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="avs_emp_config.php">Editar Perfil</a>
              <a class="dropdown-item" href="http://www.amasynanas.com/contacto/">Centro de Ayuda</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="avs_login.php">Salir</a>
            </div>
          </li>
        </div>
    </div>
    </div>
</header>
<!--------------------------------------------------------->
<!--Fin Desktop ------------------------------------------->
<!--------------------------------------------------------->

<!--------------------------------------------------------->
<!--Inicio Celular ---------------------------------------->
<!--------------------------------------------------------->

    <header class="mobil ocultar main_header">
      <div class="close-button" id="close-button"><a onclick="ClosemobileMenu()"><img id="close_mobile_menu"  src="img/close.svg" alt=""></a> 
      </div>            
        <div class="menu-responsive">
          <ol class="menu-lista">
            <div class="espacio1"></div>
              <li><a href=""><img src="img/menu-home.svg" alt=""> Inicio</a></li>
              <hr class="divider">
              <li><a href=""><img src="img/menu-messages.svg" alt="" srcset=""> Mensajes</a></li>
              <li><a href=""><img src="img/menu-accounts.svg" alt="" srcset=""> Cuentas y configuraciones</a></li>
              <div class="espacio1"></div>
              <hr class="divider">
              <li><a href="avs_login.php"><img src="img/menu-perfil.svg" alt="" srcset="">  Cerrar Sesión</a></li>
          </ol>                    
        </div>  
    </header>
<!--------------------------------------------------------->
<!--Fin Celular ------------------------------------------->
<!--------------------------------------------------------->    