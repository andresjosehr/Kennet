<style type="text/css">
.buscador {
  line-height: 22px !important;
}

span.buscador4 {
  border-right: none !important;
}

.cajasdetexto {
  height: 35px !important;
}

#services,
.input_distancia,
.input_distrito {
  border: 0px;
  height: 33.9999px;
  border-radius: 10px;
}

.label_buscador {
  font-weight: 600;
  font-size: 15px;
  margin-right: 8px;
}

.buscador3,
.buscador2 {
  width: 115%;
}

.buscador3 input,
.buscador2 input {
  font-size: 15px;
}

.buscador {
  width: 95%;
  margin-left: auto;
}

.buscador5 {
  margin-left: auto;
  padding-right: 10px;
}

#searchBarForm {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  font-size: 12px;
  line-height: 30px;
  color: #757575;
}

.header_form_bar {
  margin-top: 14px;
  display: flex;
  background: #fff;
  border-radius: 9px;
  height: 33px;
}

.conainer2 {
  margin-bottom: 33px;
}

.container2 .container {
  background-color: #f5f5f5;
}

.container2 .container .btnjob {
  margin-top: 10px;
}

.menu_form_ubi {
  display: flex
}

#services {
  background: white;
}

#searchBarForm {
  width: 100%;
}

.div_btn_search {
  margin-left: auto;
}

.menu ol {
  display: flex;
}

@media (max-width: 767.98px) {
  .container2 {
    display: none;
  }
  .cabecera-logo {
    margin: 0 auto;
  }
}

@media screen and (max-width: 992px) {
  .buscador3,
  .btnjob {
    display: none;
  }
  .cabecera-buscador {
    max-width: 100%;
    width: 100%;
  }
  #searchBarForm {
    max-width: 94%;
  }
  .cajasdetexto {
    width: 77%;
    height: 35px !important;
    margin: auto;
  }
  .buscador5 {
    display: none;
  }
  .buscador2 {
    display: flex;
  }
  .search_md {
    display: block !important;
  }
  #services {
    width: 100%;
  }
  .header_form_bar {
    margin-top: 0px !important;
  }
}

@media screen and (max-width: 1200px) {
  .cabecera-buscador {
    margin: 0 auto;
  }
  #searchBarForm {
    max-width: 94%;
  }
  #services {
    width: 100%;
  }
  .buscador2,
  .buscador3 {
    margin-left: -46% !important;
  }
  .buscador4 {
    display: none;
  }
}

</style>

<section class="container2" style="">
   <div class="container">
      <div class="row">
         <div class="col-2">
            <div class="btnjob">
               <a class="btn btn-danger" href="#">Encontrar Trabajo</a>
            </div>
         </div>
         <div class="col-xl-10 col-lg-10 col-md-12">
            <form name="searchBarForm" id="searchBarForm" method="GET" action="#" autocomplete="off">
               <div class="header_form_bar">
                  <div class="col-6">
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
                  </div>
                  <div class="col-2 menu_form_ubi">
                     <span  class="label_buscador">Distrito</span>
                     <input type="text" name="zipCode" maxlength="5" size="5" value="68901" class="entry bold-text input_distrito" aria-label="Please enter zipcode">
                  </div>
                  <div class="col-2 menu_form_ubi">
                     <span class="label_buscador">Distancia</span>
                     <input type="text" name="zipCode" maxlength="5" size="5" value="10 Km" class="entry bold-text input_distancia" aria-label="Please enter zipcode">
                  </div>
                  <div class="col-1 div_btn_search">
                     <button type="button" id="search" data-eventcta="search" class="btn-submit btn-searchbar-submit" aria-label="Search button">
                     <img  class="lupa" src="img/lupa.svg" alt="">
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>


