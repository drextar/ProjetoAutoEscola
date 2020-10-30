<?php
    session_start();
	
    include 'conexao.php';

?>

<html>
    <head>
    <meta charset="UTF-8">
    </head>
        <body>
        <form name = "form1" method = "post"> 
            <h3> Por favor informe a categoria, data e hora que gostaria de realizar a aula </h3>
           <p>
            CPF:
            <input type="text" name="txt_cpf" required><br><br>
            Categoria do veiculo:
            <select name = "op_categoria">
            <option value = "Carro"> Carro</option>
            <option value = "Moto"> Moto</option>
            </select> <br><br>
            Hora:
            <input type="time" name="txt_hora" required><br><br>
            Data:
            <input type="date" name="txt_data" required><br><br>

            <input type="submit" name="btn_solicita" value="SOLICITA"   onClick="document.form1.action='agendamento.php'">
            </p>
        </form>
        </body>
    
</html>

