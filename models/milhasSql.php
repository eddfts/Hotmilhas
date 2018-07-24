<?php
 include_once '../models/conexao.php';

 $sql= " SELECT MQ.quant_milhas_quantidade AS quant_milhas_quantidade  ".
       " , MQ.desc_milhas_quantidade AS desc_milhas_quantidade ".
       " , LA.nome_linha_aerea AS nome_linha_aerea".
       " ,M.valor_milhas AS valor_milhas ".
       ",round(M.valor_milhas * MQ.quant_milhas_quantidade, 2) - round(M.valor_milhas * MQ.quant_milhas_quantidade * MQ.desc_milhas_quantidade, 2) AS valor_total ".
       " FROM  db_hotmilhas.tbl_milhas_quantidade MQ ".
       " INNER JOIN db_hotmilhas.tbl_linha_aerea LA ON LA.id_linha_aerea = MQ.fk_id_linha_aerea ".
       " INNER JOIN db_hotmilhas.tbl_milhas M ON M.fk_linha_aerea = MQ.fk_id_linha_aerea ".  
       " WHERE id_milhas_quantidade =".$_SESSION['id_milhas_quantidade']."";
	   
	   $query = mysqli_query($con,$sql) or die("Erro execução query: 'milhasSql'");
       $linhas = mysqli_num_rows($query);
?>