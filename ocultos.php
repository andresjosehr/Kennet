<div id="DivH">

<input name="TxtId" type="hidden" id="TxtId" value="<?php echo $StrId;?>" style="left:813px; top: 259px; width: 91px;"/>

<input name="TxtAc" type="hidden" id="TxtAc" value="<?php
if(isset($_GET["ParamAc"]))
    {
        $TxtAc1 = $_GET["ParamAc"];
		echo $TxtAc1;
    }
  ?>" style="left:718px; top: 230px; width: 91px;" />

<input name="TxtPag" type="hidden" id="TxtPag" value="<?php echo $LStrPag; ?>" />

<input name="TxtFec" type="hidden" id="TxtFec" value="<?php echo date("d-m-y");?>" style="left:814px; top: 276px; width: 91px;" />

<input name="IdUsu" type="hidden" id="IdUsu" value="<?php echo $IdUsu; ?>"  style="left:909px; top: 280px; width: 91px;"/>

<input name="UsuHW" type="hidden" id="UsuHW" value="<?php echo $UsuHW; ?>" style="left:909px; top: 260px; width: 91px;" />

</div>