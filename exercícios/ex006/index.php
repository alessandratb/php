<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['v1'];
        $valor2 = $_GET['v2'];
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <!-- no action ele vai mandar os dados p/ a msm pág -->
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Valor 1: </label>
        <input type="number" name="v1" id="iv1" required value="<?=$valor1?>"> <!--Valor p/ aparecer na caixa-->
        <label for="v2">Valor 2: </label>
        <input type="number" name="v2" id="iv2" required value="<?=$valor2?>"> <!--Valor p/ aparecer na caixa-->
        <input type="submit" value="Somar">
        </form>
    </main>
    <section id="res">
        <h2>Resultado da Soma:</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong></p>";
        ?>
    </section>
</body>
</html>