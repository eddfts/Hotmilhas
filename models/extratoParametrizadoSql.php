<?php
include_once '../models/conexao.php';

 $sql= "SELECT transacao.id_transacao  AS id_transacao 
            ,conta.nome_conta As nome_conta
            ,conta.numero_conta AS numero_conta
            ,usuario.nome_usuario AS nome_usuario
            ,milhas_quantidade.quant_milhas_quantidade AS quant_milhas_quantidade
			,transacao.valor_transacao AS valor_transacao
            ,linha_aerea.nome_linha_aerea
            ,date_format(transacao.data_prevista_transacao, '%d/%m/%y') AS data_prevista_transacao
            ,date_format(transacao.data_realizada_transacao, '%d/%m/%y') AS data_realizada_transacao
			,transacao.status_transacao AS status_transacao
      FROM db_hotmilhas.tbl_transacao transacao
      INNER JOIN db_hotmilhas.tbl_conta AS conta ON conta.id_conta = transacao.fk_id_conta
	  INNER JOIN db_hotmilhas.tbl_usuario AS usuario ON usuario.id_usuario = transacao.fk_id_usuario
      INNER JOIN db_hotmilhas.tbl_milhas_quantidade AS milhas_quantidade ON milhas_quantidade.id_milhas_quantidade = transacao.fk_id_milhas_quantidade
      INNER JOIN db_hotmilhas.tbl_linha_aerea AS linha_aerea ON linha_aerea.id_linha_aerea = milhas_quantidade.fk_id_linha_aerea
      WHERE conta.numero_conta = '{$numero_conta}' 
      AND transacao.data_prevista_transacao >= '{$dataInicio}'
      AND transacao.data_prevista_transacao <= '{$dataFim}'";
//print $sql;	   
	   $query = mysqli_query($con,$sql) or die("Erro execução query: 'extratoParametrizadoSql'");
       $linhas = mysqli_num_rows($query);
?>
