<?PHP
session_start();
$_SESSION['id_usuario'];
	if(isset($_SESSION['nome_usu_sessao']))
	{
		 print"<div align='right'>Seja, Bem vindo! ".$_SESSION['nome_usu_sessao'].'</div>';
	
	
	?>
    <nav id="menu">
    <ul>
        <li><a href="http://localhost:82/hotmilhas/index.php">Home</a></li>
        <li><a href="http://localhost:82/hotmilhas/views/cadastro_conta.php">Cadastro de Conta</a></li>
        <li><a href="http://localhost:82/hotmilhas/views/filtroExtrato.php">Extrato</a></li>
        <li><a href="http://localhost:82/hotmilhas/views/cadastro_associado.php">Vincular Associado</a></li>
        <li><a href="http://localhost:82/hotmilhas/views/login.php">Login</a></li>
        <li><a href="http://localhost:82/hotmilhas/views/logout.php">Logout</a> Bem vindo(a)</li>
    </ul>
      
</nav>
    
<?php	
	}
	 else{
		 print "<div align='center'> Para vizualizar todas as funcionalidades, realizar o login.</div>";	
		
		
?>
	  <nav id="menu">
      <ul>
        <li><a href="http://localhost:82/hotmilhas/index.php">Home</a></li>
        <li><a href="http://localhost:82/hotmilhas/views/login.php">Login</a></li>
        
      </ul>
</nav>
	 	
<?php		
	    

    }
	
?>
     
