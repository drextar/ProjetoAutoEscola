<?php

include 'conexao.php';

$usuario = $_POST["txt_usuario"];
$senha = $_POST["txt_senha"];
$categoria = $_POST["op_acesso"];
$sql = mysql_query("SELECT * FROM tb_login WHERE (usuario = '$usuario') and senha = '$senha' and (acesso = '$categoria')");
	
		//verifica se o valor do dropbox é Aluno, se for true valida usuario, senha e acesso do BD
	if($categoria == "Aluno"){
		if(mysql_num_rows($sql) > 0)  {
			echo "<center>";
			echo "<hr>";
			echo "BEM VINDO ALUNO";
			echo "<hr>";
			echo "<h3>Escolha uma opção: <br></h3>";
			echo "<br>";
			echo "<a href = \"solicitaAula.php\"> Solicitar Aulas </a><br><br>";
			echo "<a href = \"visualizaAulas.php\"> Visualizar Aulas </a>"; 
	} else {
			echo "<center>";
			echo "<hr>";
			echo "<h3>";
			echo "Credenciais inválidas!  Verifique-as e tente novamente.<br> Caso o problema persista contate o administrador ou a recepção da escola.";
			echo "<hr>";
			echo "<br>";
			echo "<a href = \"login.html\"> Voltar </a>";
	  }
	}
		//verifica se o valor do dropbox é Instrutor, se for true valida usuario, senha e acesso do BD
	if($categoria == "Instrutor"){
		if(mysql_num_rows($sql) > 0)  {
			echo "<center>";
			echo "<hr>";
			echo "BEM VINDO INSTRUTOR";
			echo "<hr>";
			echo "<h3>Escolha uma opção: <br></h3>";
			echo "<br>";
			echo "<a href = \"visualizaAulas.php\"> Visualizar Aulas </a><br><br>";
			echo "<a href = \"index.html\"> HOME </a>";
	} else {
			echo "<center>";
			echo "<hr>";
			echo "<h3>";
			echo "Credenciais inválidas!  Verifique-as e tente novamente.<br> Caso o problema persista contate o administrador ou a recepção da escola.";
			echo "<hr>";
			echo "<br>";
			echo "<a href = \"login.html\"> Voltar </a>";
	  }
	}
		//verifica se o valor do dropbox é Recepcionista, se for true valida usuario, senha e acesso do BD
	if($categoria == "Recepcionista"){
		if(($usuario == "recepcao" ) && ($senha == "adsoftware") && ($categoria == "Recepcionista"))  {
			echo "<center>";
			echo "<hr>";
			echo "BEM VINDO RECEPCAO";
			echo "<hr>";
			echo "<h3>Escolha uma opção: <br></h3>";
			echo "<br>";
			echo "<a href = \"cadAlu.php\"> Cadastro Aluno </a><br><br>";
			echo "<a href = \"cadInstrutor.php\"> Cadastro Instrutor </a><br><br>";
			echo "<a href = \"listagem.php\"> Controle de Contas </a><br><br>";
			echo "<a href = \"agendaAula.php\"> Gestão de Aulas </a>";

	} else {
			echo "<center>";
			echo "<hr>";
			echo "<h3>";
			echo "Credenciais inválidas!  Verifique-as e tente novamente.<br> Caso o problema persista contate o administrador ou a recepção da escola.";
			echo "<hr>";
			echo "<br>";
			echo "<a href = \"login.html\"> Voltar </a>";
	  }
	}
?>	

<html><meta charset="UTF-8"></html>