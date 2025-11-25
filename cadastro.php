<?php
include_once("conexao.php");

$nome=$_POST['nome'];
$preco_SP=$_POST['precoSP'];
$preco_CP=$_POST['precoCP'];

$insere="INSERT INTO cadastro(nome_jogo, preco_sp, preco_cp)
    VALUES('$nome', '$preco_SP', '$preco_CP')";

if(mysqli_query($conexao, $insere))
{
    echo "JOGO CADASTRADO COM SUCESSO";
}
else
{
    echo "HOUVE ALGUM ERRO NO CADASTRO!!";
}

mysqli_close($conexao);

?>