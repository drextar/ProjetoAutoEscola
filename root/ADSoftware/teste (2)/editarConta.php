<?php

session_start();
include 'conexao.php';

?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body link="blue" alink="blue" vlink="blue" onLoad=preencheCampos()>

<script>
    function preencheCampos(){
        //pega os valores já armazenados na localStorage
       var cpf = window.localStorage.getItem('cpf');
       var nome = window.localStorage.getItem('nome');
       var rg = window.localStorage.getItem('rg');
       var usuario = window.localStorage.getItem('usuario');
       var endereco = window.localStorage.getItem('endereco');
       var cidade = window.localStorage.getItem('cidade');
       var datanasc = window.localStorage.getItem('datanasc');
       var senha = window.localStorage.getItem('senha');
       var acesso = window.localStorage.getItem('acesso');
        
        //preenche os textbox com valores passados da localStorage
       document.getElementById("nome").value = nome;
       document.getElementById("usuario").value = usuario;
       document.getElementById("senha").value = senha;
       document.getElementById("cpf").value = cpf;
       document.getElementById("rg").value = rg;
       document.getElementById("endereco").value = endereco;
       document.getElementById("cidade").value = cidade;
       document.getElementById("datanasc").value = datanasc;
       document.getElementById("acesso").value = acesso;
       
    }
</script>

<form name="form1" method="post">
<font face="arial" size="5" color="red">
</font>
<p>


Nome<br>
<input type="text" id="nome" name="txt_nome" size="25" required/><br>

CPF <br> 
<input type="text" style="color: red;" id="cpf" name="txt_cpf" size="25" readonly=“true” required/><br>

RG <br>
<input type="text" style="color: red;" id="rg" name="txt_rg" size="25" readonly=“true” required/><br>

Usuario<br>
<input type="text" id="usuario" name="txt_usuario" size="25" required/> <br>

Senha<br>
<input type="text" id="senha"name="txt_senha" size="25" required/><br>

Endereco<br>
<input type="text" id="endereco" name="txt_endereco" size="25" required/><br>

Cidade<br>
<input type="text" id="cidade" name="txt_cidade" size="25" required/><br>

Data de Nascimento<br>
<input type="text" id="datanasc" name="txt_datanasc" size="25" required/><br>

Acesso <br>
<input type="text" style="color: red;" id="acesso" name="txt_acesso" size="25" readonly=“true” required/><br>
<br>
<font color = "#ff3333">
*Os campos em vermelho não podem ser alterados
</font>
<p>
<input TYPE="submit" name="btn_update" VALUE="Atualizar cadastro" onClick="document.form1.action='uptadeCadastro.php'">
<a href="listagem.php">Retornar ao Controle de Contas</a>

</form>
</body>
</html>