<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HotMilhas | Cadastro Conta</title>
<link href="../assets/css/formulario.css"  rel="stylesheet" />
<link href="../assets/css/menu.css"  rel="stylesheet" />
<script type="text/javascript" src="../assets/js/valida_campos.js"></script>

</head>
<body>
	<?PHP include('menu.php'); ?>
	<div align="center">
	  <form action="../controllers/cadastrar_conta.inc.php" method="post" onSubmit="return valida_campos()">
	     <label for="nome_conta" class="campo" >Nome:</label><input type="text" name="nome_conta" id="nome_conta" class="campo" ></br>
	     <input type="submit" value="Cadastrar" class=" botao">
      </form>
     </div>
    <br>
   <br>
  <hr></hr>
<small>Copyright &copy; HotMilhas2018</small>    
</body>
</html>