<?php
$server="localhost";
$user="root";
$senha="";
$banco="p2";

$conexao=mysqli_connect($server, $user, $senha, $banco);

if(!$conexao)
{
    die("HOUVE UM ERRO!!!" . mysqli_connect_error());
}

?>