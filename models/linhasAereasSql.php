<?php
	include_once 'conexao.php';
	//lista milhas combobox
	$sql = "SELECT id_milhas_quantidade, CONCAT(MQ.quant_milhas_quantidade,' Milhas ',LA.nome_linha_aerea) AS milhas ". 
           " FROM db_hotmilhas.tbl_milhas_quantidade AS MQ ".
           " INNER JOIN db_hotmilhas.tbl_linha_aerea LA ON LA.id_linha_aerea = MQ.fk_id_linha_aerea";
     //print $sql;		   
?>