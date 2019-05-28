<div id="DivBtn"  align="left" style="position:absolute; left: 35px; top: 71px; width: 756px; height: 26px;">

<input name="CmdB" type="button" id="CmdG" class="btm" 

<?php GOM($StrId);?>

onclick="fGuardar();" 

tabindex="<?php echo ++$TI;?>"/>



<input name="CmdB" type="button" id="CmdC"  class="btm"

value="Nuevo" onClick="fCancelar();"  

tabindex="<?php echo ++$TI;?>" />



<input name="CmdB" type="button" id="CmdE" class="btm"

value="Eliminar" onClick="fEliminar();"

<?php DIS($StrId);?>

tabindex="<?php echo ++$TI;?>" />



<?php if(file_exists($BUSCAR)){?>

<input name="CmdB" type="button" id="CmdB" class="btm"

value="Buscar" onClick="fBuscar('<?php echo $BUSCAR;?>');"  

tabindex="<?php echo ++$TI;?>" />

<?php } ?>



<input name="CmdB" type="button" id="CmdZ" class="btm"

value="Menu" onClick="fBuscar('avs_adm_menu.php');"  

tabindex="<?php echo ++$TI;?>" />

</div>

