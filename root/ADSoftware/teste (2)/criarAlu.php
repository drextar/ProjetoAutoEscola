<?php
include 'conexao.php';
$cpf = $_POST ["txt_cpf"];
$nome = $_POST ["txt_nome"];
$rg = $_POST ["txt_rg"];
$usuario = $_POST ["txt_cpf"];
$endereco = $_POST ["txt_endereco"];
$cidade = $_POST ["txt_cidade"];
$nasc = $_POST ["txt_nascimento"];
$senha = $_POST ["txt_rg"];

$sql = mysql_query ("SELECT * FROM tb_inner WHERE cpf = '$cpf' or usuario = '$usuario'");
	if(mysql_num_rows($sql) > 0){
		echo "<center>";
		echo "<hr>";
		echo "CONTA EXISTENTE";
		echo "<hr>";
		echo "<br>";
		echo "<a href=\"login.html\"> RETORNAR AO LOGIN </a>";
	} else {
		$sql = mysql_query ("INSERT INTO tb_inner(cpf, nome, rg, usuario, endereco, cidade, datanasc, cnh, categoria, senha, acesso) VALUES ('$cpf', '$nome', '$rg', '$usuario', '$endereco', '$cidade', '$nasc', 'NULL','NULL','$senha', 'ALUNO')");
		echo "<center>";
		echo "<hr>";
		echo "ALUNO CADASTRADO COM SUCESSO";
		echo "<hr>";
		echo "<br>";
		echo "<a href = \"listagem.php\">RETORNAR AO CONTROLE DE CONTAS </a>";
    }
    
$sql = mysql_query ("SELECT * FROM tb_login WHERE  usuario = '$usuario'");
	if(mysql_num_rows($sql) < 0){
		echo "";
	} else {
		$sql = mysql_query ("INSERT INTO tb_login(usuario, senha, acesso, nome) VALUES ('$usuario', '$senha', 'ALUNO', '$nome')");
		echo "";
    }
    
?>