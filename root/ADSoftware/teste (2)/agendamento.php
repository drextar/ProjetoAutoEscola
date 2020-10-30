<?php
include 'conexao.php';

$data = $_POST ["txt_data"];
$hora = $_POST ["txt_hora"];
$categoria = $_POST ["op_categoria"];
$cpf = $_POST ["txt_cpf"];

$sql = mysql_query ("SELECT * FROM tb_agendamento WHERE cpf = '$cpf' and data = '$data' and  hora = '$hora'");
	if(mysql_num_rows($sql) > 0){
		echo "<center>";
		echo "<hr>";
		echo "JA POSSUI AULA AGENDADA";
		echo "<hr>";
		echo "<br>";
		echo "<a href=\"login.html\"> RETORNAR AO LOGIN </a>";
	} else {
		$sql = mysql_query ("INSERT INTO tb_agendamento(cpf, categoria, data, hora) VALUES ('$cpf', '$categoria', '$data', '$hora')");
		echo "<center>";
		echo "<hr>";
		echo "SOLICITACAO REALIZADA COM SUCESSO!<br>A SOLICITAÇAO ESTARA PENDENTE ATE VALIDACAO DA RECEPCAO";
		echo "<hr>";
		echo "<br>";
		echo "<a href = \"login.html\">RETORNAR AO LOGIN </a><br>";
		echo "<a href = \"visualizaAulas.php\">Visualiza Aulas </a>";
	}
?>

<html><meta charset="UTF-8"></html>