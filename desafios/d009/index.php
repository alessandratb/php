<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];
        $peso1 = $_GET['peso1'];
        $peso2 = $_GET['peso2'];
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
        <label for="valor1">1º Valor: </label>
        <input type="number" name="valor1" id="ivalor1" required value="<?=$valor1?>">
        <label for="peso1">1º Peso: </label>
        <input type="number" name="peso1" id="ipeso1" required value="<?=$peso1?>">
        <label for="valor2">2º Valor: </label>
        <input type="number" name="valor2" id="ivalor2" required value="<?=$valor2?>">
        <label for="peso2">2º Peso: </label>
        <input type="number" name="peso2" id="ipeso2" required value="<?=$peso2?>">
        <input type="submit" value="Calcular Médias">
    </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
            echo "<p>Analisando os valores $valor1 e $valor2:</p>";

            $mediaAS = ($valor1 + $valor2) / 2;
            $valores = ($valor1 * $peso1) + ($valor2 * $peso2);
            $pesos = $peso1 + $peso2;
            $mediaAP = $valores / $pesos;

            echo "<ul><li>A <strong>Média Aritmética Simples </strong>entre os valores é igual a ".number_format($mediaAS, 2, ",", ".").".</li>";

            echo "<li>A <strong>Média Aritmética Ponderada </strong>com pesos $peso1 e $peso2 é igual a ".number_format($mediaAP, 2, ",", ".").".</li></ul>";
        ?>
    </section>
</body>
</html>