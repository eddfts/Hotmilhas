<?php
    include_once 'conexao.php';
    
	$sql = "SELECT * FROM db_hotmilhas.tbl_usuario WHERE login_usuario ='$login_usuario' AND senha_usuario='$senha_usuario' LIMIT 1";
    
	$query = mysqli_query($con,$sql) or die("Erro execução query: 'validaLoginSql'");
    $linhas = mysqli_num_rows($query);
?>