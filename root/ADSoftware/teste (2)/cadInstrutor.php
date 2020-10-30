<html>
<head>
    <style type="text/css">
        @import url("style.css");
    </style> 
</head>
<body link="blue" alink="blue" vlink="blue">
<form name="form1" method="post">
<font face="arial" size="5" color="red">
</font>
<p>
<fieldset>
<legend>Cadastro Instrutor</legend>
CPF<br>
<input type="text" name="txt_cpf" size="25" required/><br>
Nome<br>
<input type="text" name="txt_nome" size="25" required/><br>
RG<br>
<input type="text" name="txt_rg" size="25" required/><br>
Endereco<br>
<input type="text" name="txt_endereco" size="25" required/><br>
Cidade<br>
<input type="text" name="txt_cidade" size="25" required/><br>
Data Nascimento:<br>
<input type="date" name="txt_nascimento" size="25" required/><br>
CNH<br>
<input type="text" name="txt_cnh" size="25" required/><br>
Categoria que leciona
<select name = "op_categoria" >
 <option value = "Carro"> Carro</option>
 <option value = "Moto"> Moto</option>
 <option value = "Carro/Moto"> Moto/Carro</option>
</select> <br>
Modelo veiculo 
<input type="text" name="txt_modelo" size="25" required/> <br>
Placa <input type="text" name="txt_placa" size="25" required/>
</p>&nbsp;&nbsp;&nbsp;&nbsp;Criar conta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Voltar<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input TYPE="image" src="icons8-selecionado-24.png" name="btn_criar" VALUE="Criar Conta" onClick="document.form1.action='criarInstrutor.php'" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="home.html"><img src="undo-button.png" alt="some text" width=25 height=25></a>
</fieldset>
</form>
</body>
</html>