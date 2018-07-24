<?php
#Receber os dados vindos do formulário
# incluir arquivo de conexao
//include('config.php');
session_start();
 
$id_associado = $_POST['selAssociado'];
$id_conta = $_POST['selConta'];


include_once '../models/vinculacontaSql.php';
?>


