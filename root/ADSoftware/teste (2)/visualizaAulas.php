<?php

session_start();
include 'conexao.php';

if(isset($_POST['busca']) != '') {
	// Query para caso queira buscar manualmente um usuario
	$sql = mysql_query("select * from tb_inner where cpf like '{$_POST['busca']}%' order by usuario asc");
} else {
	// Exibe todos os usuarios encontrados no BD em ordem alfabetica
    $sql = mysql_query("select * from tb_aula order by cpfaluno asc");
}

    // Apaga registro da tabela correspondente
//if(isset($_GET['apagar'])){
//	$sql = mysql_query("delete from tb_aula where cpfaluno=". $_GET['apagar']);

//	 echo "<br>";
//	 echo "<center>";
//    echo "<hr>";
//     echo "SOLICITACAO EXCLUIDA COM SUCESSO!!!";
//	 echo "<br>";
//	 echo "<br>";
//	 echo "<a href=\"visualizaAulas.php\">VOLTAR</a>";
//	 echo "<hr>";
//	return false;
//}

?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<center>
<font size="+3"><b> VISUALIZA AULAS </b></font>
</center>

<center>
<form name="form1" >

</form>

<table border="1" align="center">
		    <tr>
			<th colspan="7" bgcolor="orange">VISUALIZAÇÃO DE AULAS AGENDADAS</th>
			</tr>
			<tr>
			<!-- Adiciona as colunas da tabela -->
			<th bgcolor="yellow">CPF</th>
			<th bgcolor="yellow">INSTRUTOR</th>
			<th bgcolor="yellow">CATEGORIA</th>
			<th bgcolor="yellow">HORA</th>
			<th bgcolor="yellow">DATA</th>
			<!--<th colspan="1" bgcolor="yellow">ACAO</th>-->
			</tr>
			<tr>
			<?php
				while($linha = mysql_fetch_assoc($sql)) {
					
            ?>
            
			 <!-- Preenche as linhas e colunas com todos os registros encontrados no banco de dados -->
			<td align="center"><?php echo $linha['cpfaluno']; ?></td>
			<td align="center"><?php echo $linha['nomeinstrutor']; ?></td>
			<td align="center"><?php echo $linha['categoria']; ?></td>
			<td align="center"><?php echo $linha['hora']; ?></td>
            <td align="center"><?php echo $linha['data']; ?></td>
            
	       <!--<th><a href="visualizaAulas.php?apagar="><img src='deletar_usuario.png'</a></th>-->
	       <tr>
			 
			<?php  }
			  echo "<center>";
			  echo "<hr>";
			  echo "<a href=\"agendamento.php\">Solicitar Agendamento </a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
			  echo "<a href=\"login.html\">RETORNAR AO LOGIN </a>"; 
			  echo "<hr>";
			   
			?>	
</table>
</body>
</html>