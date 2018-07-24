<?PHP
include_once '../models/conexao.php';
include_once 'menu.php';
include_once '../controllers/AntiSqlInjection.class.php';
 	
	$sqlInjection = new AntiSqlInjection; 
	$sqlInjection->AplicarSqlInjection($_POST['login_usuario']);       
	$login_usuario = $sqlInjection->ObterString();
	$sqlInjection->AplicarSqlInjection(md5($_POST['senha_usuario']));       
	$senha_usuario = $sqlInjection->ObterString();

include_once '../models/validaLoginSql.php';


if($linhas == '')
	{
		?>
        <div class="msg2 padding20">Usuário não encontrado ou usuário e senha inválidos.</div>
        <?PHP
	}
else
	{
		while($dados=mysqli_fetch_assoc($query))
			{
				session_start();
				$_SESSION['id_usuario'] = $dados['id_usuario'];				
				$_SESSION['nome_usu_sessao'] = $dados['nome_usuario'];
				header("Location: conteudo.php");
			}
	}
?>