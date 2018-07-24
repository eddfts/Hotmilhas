<?PHP
	#Conexão com o banco de dados
	$con = mysqli_connect('localhost','root','carcass') or die("Erro de conexão");
	$banco = mysqli_select_db($con,'db_hotmilhas') or die("Erro ao selecionar o banco de dados");
	//testar conexão
	/*if (!$con) {
 		die('Não foi possível conectar ao MySQL');
	}
	 else{
		  print 'Conexão bem sucedida!';
		  }
	*/
	

?>