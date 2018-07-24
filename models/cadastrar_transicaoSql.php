
<?PHP

include_once 'conexao.php';

$query = "INSERT INTO db_hotmilhas.tbl_transacao (fk_id_conta, fk_id_usuario, fk_id_milhas_quantidade,".   
         " valor_transacao, data_prevista_transacao, status_transacao) ". 
         " VALUES ($id_conta,$id_usuario,$id_milhas,$total_pago,'$data_prevista', 'N')"; 

//print $query.'<br>';
$in =mysqli_query($con,$query) or die("Erro execução query: 'cadastrar_transicaoSql.php'");

 
?>
<div class="msg1 padding20">Cadastro realizado com sucesso</div>