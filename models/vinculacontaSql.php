<?php
include_once 'conexao.php';

$query = "INSERT INTO db_hotmilhas.tbl_conta_vinculo(fk_id_conta, fk_id_usuario) ".    
         " VALUES( $id_conta, $id_associado)";
//print $query;
$in =mysqli_query($con,$query) or die("Erro execução query: 'vinculacontaSql.php'");

 
?>
<div class="msg1 padding20">Cadastro realizado com sucesso</div>