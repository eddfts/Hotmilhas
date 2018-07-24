<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HotMilhas | Login</title>
<link href="../assets/css/formulario.css"  rel="stylesheet" />
<link href="../assets/css/menu.css"  rel="stylesheet" />
</head>

<body>
<?PHP include('menu.php');
      session_start(); 
      $_SESSION['id_milhas_quantidade'] = $_POST['itens'];      
?>

<h2 align="center">Login</h2>
<br>
<div align="center">
    <form action="valida.php" method="post">
        <label for="login_usuario">Login:</label><input type="text" name="login_usuario" id="login_usuario" class="campo" size="20"></br>
        <label for="senha_usuario">Senha:</label><input type="password" name="senha_usuario" id="senha_usuario" class="campo" size="20"></br>
        <input type="submit" value="Login" class="botao">
    </form>
</div>
</body>
</html>