<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HotMilhas</title>
<link href="assets/css/formulario.css"  rel="stylesheet" />
<link href="assets/css/menu.css"  rel="stylesheet" />
</head>
	<body>
	<?php
	     require_once('views/menu.php'); 

		include_once 'models/linhasAereasSql.php';
		$resultado = mysqli_query($con,$sql) or die(mysql_error()."<br>Erro ao executar a inserção dos dados");
		if (mysqli_num_rows($resultado)!=0){
	?>
    <h2 align="center">Quero vender minhas milhas</h2>
 	<div class="campo" align="center">
		<form name='Combobox' action='views/login.php'  method='POST'>
	  		<select name="itens" id="itens">
	  		  <option value=' ' selected='selected'>Quant. Milhas:</option>
    		<?php
	 			 while($elemento = mysqli_fetch_array($resultado))
	 			{
	       			$nomeItem = $elemento['milhas'];
					$id_milhas = $elemento['id_milhas_quantidade'];
	 		?>
	      	<option value='<?php print $id_milhas; ?>'><?php print $nomeItem; ?></option>
  			<?php 
			  		}
			?>
	 
     		</select></br>
	 		<input type='submit' name='btnVender' value='Vender' class="botao">
   		</form>
	</div>   
<?php 
		} 
?>
 <br>
 <br>
 <hr></hr>
 <small>Copyright &copy; HotMilhas2018</small>
</body>
</html>