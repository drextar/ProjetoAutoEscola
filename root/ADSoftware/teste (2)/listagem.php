<?php

session_start();
include 'conexao.php';

if(isset($_POST['busca']) != '') {
	// Query para caso queira buscar manualmente um usuario
	$sql = mysql_query("select * from tb_inner where cpf like '{$_POST['busca']}%' order by usuario asc");
} else {
	// Exibe todos os usuarios encontrados no BD em ordem alfabetica
	$sql = mysql_query("select * from tb_inner order by usuario asc");
}

    // Apaga registro da tabela correspondente
if(isset($_GET['apagar'])){
	$sql = mysql_query("delete from tb_inner where usuario=". $_GET['apagar']);
	$sql = mysql_query("delete from tb_login where usuario=". $_GET['apagar']);
	$sql = mysql_query("delete from tb_instrutor where usuario=". $_GET['apagar']);

	 echo "<br>";
	 echo "<center>";
     echo "<hr>";
     echo ('USUARIO EXCLUIDO COM SUCESSO!!!');
	 echo "<br>";
	 echo "<br>";
	 echo "<a href=\"listagem.php\">VOLTAR</a>";
	 echo "<hr>";
	return false;
}

?>

<html>
<head>

</head>
<body>
<center>
<font size="+3"><b> CONTROLE DE CONTAS </b></font>
</center>
<center>

<form name="form1" >

</form>

<table border="1" align="center">
		    <tr>
			<th colspan="11" bgcolor="orange">CONTROLE DE CONTAS CADASTRADAS</th>
			</tr>
			<tr>
			<!-- Adiciona as colunas da tabela -->
            <th bgcolor="yellow">NOME</th>
			<th bgcolor="yellow">USUARIO</th>
			<th bgcolor="yellow">SENHA</th>
			<th bgcolor="yellow">CPF</th>
			<th bgcolor="yellow">RG</th>
			<th bgcolor="yellow">ENDERECO</th>
			<th bgcolor="yellow">CIDADE</th>
			<th bgcolor="yellow">DATA NASCIMENTO</th>
            <th bgcolor="yellow">ACESSO</th>
			
			
			<th colspan="2" bgcolor="yellow">ACAO</th>
			
			</tr>
			<tr>
			
			<?php
				while($linha = mysql_fetch_assoc($sql)) {
					
			?>
			<script Language="JavaScript">
  			  function salvaUsuario(){

      		  	//converte os valores para string antes de passar para a localStorage
				var nome = String("<?php echo $linha['nome']; ?>")
				var endereco = String("<?php echo $linha['endereco']; ?>")
				var cidade = String("<?php echo $linha['cidade']; ?>")
				var datanasc = String("<?php echo $linha['datanasc']; ?>")
				var acesso = String("<?php echo $linha['acesso']; ?>")
				var usuario = String("<?php echo $linha['usuario']; ?>")
				var senha = String("<?php echo $linha['senha']; ?>")
				var cpf = String("<?php echo $linha['cpf']; ?>")
				var rg = String("<?php echo $linha['rg']; ?>")
				
				//armazena os valores da tabela em uma localStorage para depois ser usado no editarConta.php;
				localStorage.setItem('nome', nome);
				localStorage.setItem('usuario', usuario);
				localStorage.setItem('senha', senha);
				localStorage.setItem('cpf', cpf);
				localStorage.setItem('rg', rg);
				localStorage.setItem('endereco', endereco);
				localStorage.setItem('cidade', cidade);
				localStorage.setItem('datanasc', datanasc);
				localStorage.setItem('acesso', acesso);
  			 }
			</script>
			 <!-- Preenche as linhas e colunas com todos os registros encontrados no banco de dados -->
            <td align="center"><?php echo $linha['nome']; ?></td>
			<td align="center"><?php echo $linha['usuario']; ?></td>
			<td align="center"><?php echo $linha['senha']; ?></td>
			<td align="center"><?php echo $linha['cpf']; ?></td>
			<td align="center"><?php echo $linha['rg']; ?></td>
			<td align="center"><?php echo $linha['endereco']; ?></td>
			<td align="center"><?php echo $linha['cidade']; ?></td>
			<td align="center"><?php echo $linha['datanasc']; ?></td>
            <td align="center"><?php echo $linha['acesso']; ?></td>
	       <th><a href="listagem.php?apagar='<?php echo $linha['usuario']; ?>'"><img src='deletar_usuario.png'</a></th>
		   <th><a href="editarConta.php?codCli='<?php echo $linha['usuario']; ?>'" onClick="salvaUsuario()"><img src='edicao_usuario.png'</a></th>
	       <tr>
			 
		    
			
			 
			<?php  }
			  echo "<center>";
			  echo "<hr>";
			  echo "<a href=\"cadAlu.php\">Cadastrar aluno </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
			  echo "<a href=\"cadInstrutor.php\">Cadastrar Instrutor </a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
			  echo "<a href=\"agendaAula.php\">Agendar Aula </a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
			  echo "<a href=\"login.html\">RETORNAR AO LOGIN </a>"; 
			  echo "<hr>";
			   
			?>
				
</table>
</body>
</html>