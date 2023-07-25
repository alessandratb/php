<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $num = $_GET["num"];
            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            $num_ant = $num - 1;
            echo "<p>O seu número antecessor é $num_ant</p>";
            $num_suc = $num + 1;
            echo "<p>O seu número sucessor é $num_suc</p>";
            ?>
        </p>

        <!--Maneira de voltar para a pagina anterior-->
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>