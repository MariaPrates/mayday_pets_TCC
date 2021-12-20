<?php 

$conexao = mysqli_connect('localhost', 'id17849612_root','Carloscome1!');
$conexao_aux = mysqli_connect('localhost', 'id17849612_root','Carloscome1!');
$conexao_aux1 = mysqli_connect('localhost', 'id17849612_root','Carloscome1!');
$conexao_aux2 = mysqli_connect('localhost', 'id17849612_root','Carloscome1!');
$conexao_aux3 = mysqli_connect('localhost', 'id17849612_root','Carloscome1!');
$conexao_aux4 = mysqli_connect('localhost', 'id17849612_root','Carloscome1!');
$conexao_aux5= mysqli_connect('localhost', 'id17849612_root','Carloscome1!');


date_default_timezone_set('America/Sao_Paulo');

mysqli_select_db($conexao, 'id17849612_mayday');
mysqli_set_charset($conexao,"utf8");

mysqli_select_db($conexao_aux, 'id17849612_mayday');
mysqli_set_charset($conexao_aux,"utf8");

mysqli_select_db($conexao_aux1, 'id17849612_mayday');
mysqli_set_charset($conexao_aux,"utf8");

mysqli_select_db($conexao_aux2, 'id17849612_mayday');
mysqli_set_charset($conexao_aux2,"utf8");

mysqli_select_db($conexao_aux3, 'id17849612_mayday');
mysqli_set_charset($conexao_aux3,"utf8");

mysqli_select_db($conexao_aux4, 'id17849612_mayday');
mysqli_set_charset($conexao_aux4,"utf8");

mysqli_select_db($conexao_aux5, 'id17849612_mayday');
mysqli_set_charset($conexao_aux5,"utf8");
?>