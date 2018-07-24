<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HotMilhas| Filtro Extrato</title>
<link href="../assets/css/table.css" rel="stylesheet">
<link href="../assets/css/formulario.css"  rel="stylesheet" />
<link href="../assets/css/menu.css"  rel="stylesheet" />
<script type="text/javascript" src="../assets/js/valida_campos.js"></script>
<script type="text/javascript" src="../assets/js/mascara_data.js"></script>
</head>
<body>

<?php
     		 include('menu.php');
			 include_once '../models/contasSql.php';
		 	 if(mysqli_num_rows($query)!=0)
			 {
				
?>
<div align="center">
 <form  action="extratoParametrizado.php" name="frmExtrato" id="frmExtrato" onsubmit="return valida_campo_conta()" method="post">
         	<select name="selConta" id="selConta" class="comBordaComplexa">
	  			<option value=' ' selected='selected'>Selecione a conta...</option>
   			 	<?php
			     	while( $elemento = mysqli_fetch_array($query) )
	 			 	{
	       				$nomeConta= $elemento['conta'];
						$numero_conta = $elemento['numero_conta'];
	 		     ?>
	      		 	<option value='<?php print $numero_conta; ?>'><?php print $nomeConta; ?></option>
  				<?php  }
						 }
					?>
     			</select>
                <input type="text" name="txtDataInicio" onkeyup="mascara_data(this, this.value)" placeholder="01/01/1990" maxlength="10" class="campo"/>
                <input type="text" name="txtDataFim" onkeyup="mascara_data(this, this.value)" placeholder="31/12/2030" maxlength="10" class="campo"/></br>
        		<input type="button" name="btnLimpar" value="Limpar" class="botao"/>
                <input type="submit" name="btnFiltrar" value="Filtrar" class="botao"/>
       	</form>
</div>
   <br>
   <br>
  <hr></hr>       
<small>Copyright &copy; HotMilhas2018</small>
</body>
</html>
