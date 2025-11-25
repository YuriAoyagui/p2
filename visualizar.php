<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylevisu.css">
    <title>Visualizar</title>
</head>
<body>
    <?php
    include_once("conexao.php");

    echo "<h1>Tela de Visualização</h1>";
    echo "<table>";
    echo "<tr>
          <th>|NOME DO JOGO|</th>
          <th>|PREÇO SEM PROMO|</th>
          <th>|PRECO COM PROMO|</th>
          </tr>";

    $busca="SELECT nome_jogo, preco_sp, preco_cp FROM cadastro";

    $resultado=mysqli_query($conexao, $busca);

    if(mysqli_num_rows($resultado) > 0)
    {
        while($linha=mysqli_fetch_assoc($resultado))
        {
            echo "<tr>";
            echo "<td>" . $linha['nome_jogo']."</td>";
            echo "<td>" . $linha['preco_sp']."</td>";
            echo "<td>" . $linha['preco_cp']."</td>";
            echo "</tr>";
        }
    }
    else
    {
        echo "<tr><td colspan=3> Não foi encontrado nenhum dado</td></tr>";
    }
    echo "</table>";

    mysqli_close($conexao);
    ?>
<p><a href="index.html">Voltar</a></p>
</body>
</html>