<?PHP include('menu.php'); ?>
<?PHP
# Receber os dados vindos do formulário
# incluir arquivo de conexao
include('config.php');

$nome_usu = ucwords($_POST['nome_usu']); # Coloca a primeira letra da string em maiúsculo
$email_usu = $_POST['email_usu'];
$senha_usu = $_POST['senha_usu'];

$in = mysqli_query($conexao,"insert into tb_usuario (nome_usu,email_usu,senha_usu) values ('$nome_usu','$email_usu','$senha_usu')") or die("Erro");
?>
<div class="msg1 padding20">Cadastro realizado com sucesso</div>