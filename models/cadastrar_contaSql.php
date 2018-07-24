
<?PHP

include_once 'conexao.php';
/*
 *print $id_usuario;
 *print $nome_conta;
 *print $data_atual;
*/
$query = "INSERT INTO db_hotmilhas.tbl_conta (fk_id_usuario, nome_conta,data_conta) ".    
         " VALUES( $id_usuario ,'$nome_conta', ' $data_atual')";

$in =mysqli_query($con,$query) or die("Erro execução query: 'cadastrar_contaSql.php'");

 
?>
<div class="msg1 padding20">Cadastro realizado com sucesso</div>