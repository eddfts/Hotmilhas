<?php
 include_once '../models/conexao.php';

 /*$sql= " SELECT id_conta,nome_conta,numero_conta, CONCAT(nome_conta,' - ',numero_conta) AS conta ".
       " FROM db_hotmilhas.tbl_conta ".
       " WHERE fk_id_usuario =".$_SESSION['id_usuario']."".
       " ORDER BY  nome_conta";*/
	   
$sql = "SELECT conta.id_conta AS id_conta ". 
        ", nome_conta AS nome_conta ".
        ", conta.numero_conta AS numero_conta ".
        ", CONCAT(nome_conta,' - ',numero_conta) AS conta ".
  		"FROM db_hotmilhas.tbl_conta AS conta ".
  		"INNER JOIN db_hotmilhas.tbl_conta_vinculo AS conta_vinculo ON conta_vinculo.fk_id_conta= conta.id_conta ".
  		"WHERE conta_vinculo.fk_id_usuario =". $_SESSION['id_usuario']."";	   
	   //print $sql;
	   $query = mysqli_query($con,$sql) or die(mysql_error()."<br>Erro execução query: 'contasSql'");
	  
?>