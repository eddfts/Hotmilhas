<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HotMilhas</title>
<link href="../assets/css/formulario.css"  rel="stylesheet" />
<link href="../assets/css/menu.css"  rel="stylesheet" />
</head>
	<body>

<?PHP include('menu.php'); ?>
<?PHP
session_destroy(); # Destruir todas as sessões do navegador
?>
<div class="msg1 padding20">Logout efetuado com sucesso!<br><br>Redirecionando para a página inicial...</div>
<script type="text/javascript">
setTimeout("window.location='http://localhost:82/hotmilhas/index.php';",300);
</script>

       <br>
   <br>
  <hr></hr>
 <small>Copyright &copy; HotMilhas2018</small>                
</body>
</html>