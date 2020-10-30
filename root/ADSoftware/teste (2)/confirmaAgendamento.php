<?php

session_start();
include 'conexao.php';

$sql = mysql_query("select * from tb_instrutor order by nome asc");


?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body link="blue" alink="blue" vlink="blue" onLoad=preencheCampos()>



<script>
    function preencheCampos(){
        //pega os valores já armazenados na localStorage
       var cpf = window.localStorage.getItem('cpf');
       var categoria = window.localStorage.getItem('categoria');
       var data = window.localStorage.getItem('data');
       var hora = window.localStorage.getItem('hora');
       var observacao = window.localStorage.getItem('observacao');
        //preenche os textbox com valores passados da localStorage
       document.getElementById("cpf").value = cpf;
       document.getElementById("categoria").value = categoria;
       document.getElementById("data").value = data;
       document.getElementById("hora").value = hora;
       document.getElementById("observacao").value = observacao;
       
    }
</script>

<form name="form1" method="post">
<font face="arial" size="5" color="red">
</font>
<p>

CPF <br> 
<input type="text" style="color: red;" id="cpf" name="txt_cpf" size="25" readonly=“true” required/><br>

Categoria <br>
<input type="text" style="color: red;" id="categoria" name="txt_categoria" size="25"  required/><br>

Data<br>
<input type="text" id="data" name="txt_data" size="25" required/> <br>

Hora<br>
<input type="text" id="hora" name="txt_hora" size="25" required/><br>


    <select name = "op_instrutor" required>
    <option value="empty"> Selectione um Instrutor: </option>
    <?php
		while($linha = mysql_fetch_assoc($sql)) {      
        ?> 
            <option value = "<?php echo $linha['nome']; ?>"> <?php echo $linha['nome']; ?></td></option>
                <?php }
             ?>
        
    </select>
    

<br>
<font color = "#ff3333">
*Os campos em vermelho não podem ser alterados
</font>
<p>
<input TYPE="submit" name="btn_update" VALUE="Agendar aula" onClick="document.form1.action='cadAgenda.php'">
<a href="agendaAula.php">Retornar ao Agendamento</a>

</form>
</body>
</html>