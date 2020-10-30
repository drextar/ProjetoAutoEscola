<?php

session_start();
include 'conexao.php';

if(isset($_POST['busca']) != '') {
	// Query para caso queira buscar manualmente um usuario
	$sql = mysql_query("select * from tb_inner where cpf like '{$_POST['busca']}%' order by usuario asc");
} else {
	// Exibe todos os usuarios encontrados no BD em ordem alfabetica
    $sql = mysql_query("select * from tb_inner order by usuario asc");
    $sql = mysql_query("select * from tb_agendamento order by cpf asc");
}

    // Apaga registro da tabela correspondente
if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from tb_agendamento where cpf=". $_GET['apagar']);

	 echo "<br>";
	 echo "<center>";
     echo "<hr>";
     echo ('SOLICITACAO EXCLUIDA COM SUCESSO!!!');
	 echo "<br>";
	 echo "<br>";
	 echo "<a href=\"agendaAula.php\">VOLTAR</a>";
	 echo "<hr>";
	return false;
}

?>

<html>
<head>

</head>
<body>
<center>
<font size="+3"><b> AGENDAMENTO DE AULA </b></font>
</center>
<center>
<form name="form1" >

</form>

<table border="1" align="center">
		    <tr>
			<th colspan="6" bgcolor="orange">AGENDAMENTO DE AULAS</th>
			</tr>
			<tr>
			<!-- Adiciona as colunas da tabela -->
            <th bgcolor="yellow">CPF</th>
			<th bgcolor="yellow">CATEGORIA</th>
			<th bgcolor="yellow">HORA</th>
			<th bgcolor="yellow">DATA</th>
			
			
			
			<th colspan="2" bgcolor="yellow">ACAO</th>
			
			</tr>
			<tr>
			
			<?php
				while($linha = mysql_fetch_assoc($sql)) {
					
            ?>
            <script Language="JavaScript">
  			  function salvaUsuario(){

      		  	//converte os valores para string antes de passar para a localStorage
				var cpf = String("<?php echo $linha['cpf']; ?>")
				var categoria = String("<?php echo $linha['categoria']; ?>")
				var hora = String("<?php echo $linha['hora']; ?>")
				var data = String("<?php echo $linha['data']; ?>")
				
				
				
				//armazena os valores da tabela em uma localStorage para depois ser usado no editarConta.php;
				localStorage.setItem('cpf', cpf);
				localStorage.setItem('categoria', categoria);
				localStorage.setItem('hora', hora);
				localStorage.setItem('data', data);
				
  			 }
			</script>
			
			 <!-- Preenche as linhas e colunas com todos os registros encontrados no banco de dados -->
            <td align="center"><?php echo $linha['cpf']; ?></td>
			<td align="center"><?php echo $linha['categoria']; ?></td>
			<td align="center"><?php echo $linha['hora']; ?></td>
            <td align="center"><?php echo $linha['data']; ?></td>
            
            
	       <th><a href="agendaAula.php?apagar='<?php echo $linha['cpf']; ?>'"><img src='deletar_usuario.png'</a></th>
		   <th><a href="confirmaAgendamento.php" onClick="salvaUsuario()"><img src='icons8-selecionado-24.png'</a></th>
	       <tr>
			 
		    
			
			 
			<?php  }
			  echo "<center>";
			  echo "<hr>";
			  echo "<a href=\"cadAlu.php\">Cadastrar aluno </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
              echo "<a href=\"cadInstrutor.php\">Cadastrar Instrutor </a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
              echo "<a href=\"listagem.php\">Controle de Contas </a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
			  echo "<a href=\"login.html\">RETORNAR AO LOGIN </a>"; 
			  echo "<hr>";
			   
			?>
				
</table>
</body>
</html>