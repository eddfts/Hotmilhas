<?php
$sql=" SELECT id_usuario,nome_usuario ".
	 " FROM db_hotmilhas.tbl_usuario ".
	 " ORDER BY nome_usuario";

$result = mysqli_query($con,$sql) or die(mysql_error()."<br>Erro execução query: 'associadoSql.php'");
?>