<html>
<head>

</head>
<body link="blue" alink="blue" vlink="blue">
<form name="form1" method="post">
<font face="arial" size="5" color="red">
</font>
<p>
<fieldset>
<legend>Cadastro Veiculo</legend>
Placa<br>
<input type="text" name="txt_placa" size="25" required/><br>
Marca<br>
<input type="text" name="txt_marca" size="25" required/><br>
Modelo<br>
<input type="text" name="txt_modelo" size="25" required/><br>
Cor<br>
<input type="text" name="txt_cor" size="25" required/><br>
Categoria<br>
<select name = "op_categoria">
 <option value = "Moto"> Moto</option>
 <option value = "Carro"> Carro</option>
</select> <br>
<p>
<INPUT TYPE="submit" name="btn_criar" VALUE="Criar Conta" onClick="document.form1.action='criarVeic.php'">
<a href="login.php">Retornar ao Login</a>
</fieldset>
</form>
</body>
</html>