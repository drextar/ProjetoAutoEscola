<?php
include 'conexao.php';
$placa = $_POST ["txt_placa"];
$marca = $_POST ["txt_marca"];
$modelo = $_POST ["txt_modelo"];
$cor = $_POST ["txt_cor"];
$categoria = $_POST ["op_categoria"];

$sql = mysql_query ("SELECT * FROM tb_veiculos WHERE placa = '$placa'");
	if(mysql_num_rows($sql) > 0){
		echo "<center>";
		echo "<hr>";
		echo "CONTA EXISTENTE";
		echo "<hr>";
		echo "<br>";
		echo "<a href=\"login.html\"> RETORNAR AO LOGIN </a>";
	} else {
		$sql = mysql_query ("INSERT INTO tb_veiculos(placa, marca, modelo, cor, categoria) VALUES ('$placa', '$marca', '$modelo', '$cor', '$categoria')");
		echo "<center>";
		echo "<hr>";
		echo "VEICULO CADASTRADO COM SUCESSO";
		echo "<hr>";
		echo "<br>";
		echo "<a href = \"login.html\">RETORNAR AO LOGIN </a>";
	}
?>