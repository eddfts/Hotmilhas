<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vincular Associado</title>
<link href="../assets/css/formulario.css"  rel="stylesheet" />
<link href="../assets/css/menu.css"  rel="stylesheet" />
</head>

<body>
<?php
    include('menu.php');
    include_once '../models/contasSql.php';
	include_once '../models/associadoSql.php';
	 
?>
<div align="center">
<form  action="../controllers/vincula_conta.inc.php" name="frmAssociado" id="frmAssociado" onsubmit="return valida_campo_conta()" method="post">
         	<select name="selConta" id="selConta" class="campo">
	  			<option value=' ' selected='selected'>Selecione a conta...</option>
   			 	<?php
				if(mysqli_num_rows($query)!=0)
			 	{
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
             <select name="selAssociado" id="selAssociado">
	  			<option value=' ' selected='selected' class="campo">Selecione Associado...</option>
                <?php
				if(mysqli_num_rows($result)!=0)
				{
				  while( $coluna= mysqli_fetch_array($result) )
	 			  {
	       				$id_usuario_vinculo = $coluna['id_usuario'];
						$nome_usuario = $coluna['nome_usuario'];
	   		      
				?>
                    <option value='<?php print $id_usuario_vinculo; ?>'><?php print $nome_usuario; ?></option>
                <?php  }
				}
		        ?>
     			</select><br>
                
                <input type="submit" name="btnVincular" value="Vincular" class="botao"/>
       	</form>
 </div>
    <br>
   <br>
  <hr></hr> 
 <small>Copyright &copy; HotMilhas2018</small>      
</body>
</html>