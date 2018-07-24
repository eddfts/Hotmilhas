
<?PHP
# Receber os dados vindos do formulário
# incluir arquivo de conexao
//include('config.php');
session_start();
 
$id_usuario = $_SESSION['id_usuario'];
$nome_conta = $_POST['nome_conta'];
$data_atual = date('Y-m-d');

include_once '../models/cadastrar_contaSql.php';


?>
