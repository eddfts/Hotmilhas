<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?PHP include('menu.php'); ?>
<h1>Cadastro</h1>
<br>
<script type="text/javascript">
function valida_campos()
	{
		if(document.getElementById('nome_usu').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('nome_usu').focus();
				return false;
			}
		if(document.getElementById('email_usu').value == '')
			{
				alert('Por favor, preencha os campos obrigatórios.');
				document.getElementById('email_usu').focus();
				return false;
			}
		if(document.getElementById('senha_usu').value == '' || document.getElementById('senha_usu').value != document.getElementById('senha2_usu').value)
			{
				alert('Por favor, as senhas não conferem, por favor, redigite.');
				document.getElementById('senha_usu').focus();
				return false;
			}
	}
</script>
<form action="cadastrar.php" method="post" onSubmit="return valida_campos();">
	* Nome<br>
    <input type="text" name="nome_usu" id="nome_usu">
	<br>
	* E-mail<br>
	<input type="text" name="email_usu" id="email_usu">
<br>
	* Senha<br>
	<input type="password" name="senha_usu" id="senha_usu">
<br>
	* Confirmar senha
    <br>
    <input type="password" name="senha2_usu" id="senha2_usu">
  <br>
  <br><input type="submit" value="Cadastrar" class="but_comando">
</form>
</body>
</html>