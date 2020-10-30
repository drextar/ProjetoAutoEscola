<?php
include 'conexao.php';
$usuario = $_POST ["txt_usuario"];
$senha = $_POST ["txt_senha"];

$sql = mysql_query ("SELECT * FROM tb_login WHERE usuario = '$usuario'");
	if(mysql_num_rows($sql) > 0){
		echo "<center>";
		echo "<hr>";
		echo "CONTA EXISTENTE";
		echo "<hr>";
		echo "<br>";
		echo "<a href=\"login.html\"> RETORNAR AO LOGIN </a>";
	} else {
		$sql = mysql_query ("INSERT INTO tb_login(usuario, senha) VALUES ('$usuario', '$senha')");
		echo "<center>";
		echo "<hr>";
		echo "CONTA CRIADA COM SUCESSO";
		echo "<hr>";
		echo "<br>";
		echo "<a href = \"login.html\">RETORNAR AO LOGIN </a>";
	}
?>