
<?PHP
# Receber os dados vindos do formulário
# incluir arquivo de conexao
//include('config.php');
session_start();
if($_POST['selConta']!= "")
{
  $id_conta = $_POST['selConta']; 
  $id_usuario = $_SESSION['id_usuario'];
  $id_milhas = $_SESSION['id_milhas_quantidade'];
  $total_pago = $_SESSION['total_pago'];
  $data = new DateTime('+1 day');
  $data_prevista = $data->format('Y-m-d');
} 
 else{
	  print 'É necessário selecionar uma conta!';
     }
     
include_once '../models/cadastrar_transicaoSql.php';


?>
