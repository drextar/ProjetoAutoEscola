<?php
include 'conexao.php';

$data = $_POST ["txt_data"];
$hora = $_POST ["txt_hora"];
$categoria = $_POST ["txt_categoria"];
$cpf = $_POST ["txt_cpf"];
$op = $_POST ["op_instrutor"];


//$instrutor = mysql_query ("select * from tb_inner where nome = '$op'")

$sql = mysql_query ("SELECT * FROM tb_aula WHERE cpfaluno = '$cpf' and data = '$data' and  hora = '$hora'");
	if(mysql_num_rows($sql) > 0){
		echo "<center>";
		echo "<hr>";
		echo "JA POSSUI SOLICITACAO EM ABERTO";
		echo "<hr>";
		echo "<br>";
		echo "<a href=\"login.html\"> RETORNAR AO LOGIN </a>";
	} else {
        $sql = mysql_query ("INSERT INTO tb_aula(cpfaluno, nomeinstrutor, categoria, hora, data ) VALUES ('$cpf', '$op', '$categoria', '$hora', '$data')");
        
		echo "<center>";
		echo "<hr>";
		echo "AULA AGENDADA COM SUCESSO";
		echo "<hr>";
		echo "<br>";
        echo "<a href = \"listagem.php\">RETORNAR AO CONTROLE DE CONTAS </a>";
        
	}
?>