<?php
include 'conexao.php';
$nome = $_POST ["txt_nome"];
$cpf = $_POST ["txt_cpf"];
$rg = $_POST ["txt_rg"];
$usuario = $_POST ["txt_usuario"];
$senha = $_POST ["txt_senha"];
$endereco = $_POST ["txt_endereco"];
$cidade = $_POST ["txt_cidade"];
$datanasc = $_POST ["txt_datanasc"];
$acesso = $_POST ["txt_acesso"];

$update = mysql_query("UPDATE tb_inner SET nome='$nome', usuario='$usuario', senha='$senha', endereco='$endereco', cidade='$cidade', datanasc='$datanasc' WHERE cpf=$cpf");
 
if(mysql_affected_rows() > 0){
     echo "Sucesso: Atualizado corretamente!"; 
     echo "<a href='listagem.php'> <br>Retornar ao Controle de Contas</a>";
}else{
   echo "Aviso: Não foi atualizado!";
}
?>
<html>
<head>

</head>

</html>
