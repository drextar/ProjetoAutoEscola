<?php

$servidor="127.0.0.1";
$usuario="root";
$senha="usbw";
$banco="autoescola";
$conecta_db=mysql_connect($servidor, $usuario, $senha) or die (mysql_error());
mysql_select_db($banco) or die ("Erro_conexao");

?>