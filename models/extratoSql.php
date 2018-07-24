<?php
 include_once '../models/conexao.php';

 $sql= " SELECT id_transacao ".
       " ,Conta.nome_conta AS nome_conta".
       " ,Conta.numero_conta AS numero_conta ".
       " ,Usuario.nome_usuario AS nome_usuario".
       " ,Quantidade_Milhas.quant_milhas_quantidade AS quant_milhas_quantidade ".
       " ,valor_transacao AS valor_transacao".
       " ,Linha_Aerea.nome_linha_aerea AS nome_linha_aerea".
       " ,DATE_FORMAT(data_prevista_transacao, '%d/%m/%y')AS data_prevista_transacao".
	   " ,DATE_FORMAT(data_realizada_transacao,'%d/%m/%y')AS data_realizada_transacao".
       " ,status_transacao ".
       " FROM db_hotmilhas.tbl_transacao Transacao ".
       " INNER JOIN db_hotmilhas.tbl_conta AS Conta ON CONTA.id_conta = Transacao.fk_id_conta ". 
       " INNER JOIN db_hotmilhas.tbl_usuario AS Usuario ON Usuario.id_usuario = Transacao.fk_id_usuario".
       " INNER JOIN db_hotmilhas.tbl_milhas_quantidade AS Quantidade_Milhas ON Quantidade_Milhas.id_milhas_quantidade = Transacao.fk_id_milhas_quantidade". 
     " LEFT JOIN db_hotmilhas.tbl_linha_aerea  AS Linha_Aerea ON Linha_Aerea.id_linha_aerea = Quantidade_Milhas.fk_id_linha_aerea".
     " WHERE Transacao.fk_id_usuario =".$_SESSION['id_usuario'].";";
//print $sql;	   
	   $query = mysqli_query($con,$sql) or die("Erro execução query: 'extratoSql'");
       $linhas = mysqli_num_rows($query);
?>