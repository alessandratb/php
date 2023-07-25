<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['num'];
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Número: </label>
        <input type="number" name="num" id="inum" required value="<?=$numero?>">
        <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        $raizQua = sqrt($numero);
        $raizCub = $numero ** (1/3); //Raiz cúbica

        echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";
        echo "<ul><li>A sua raiz quadrada é <strong>".number_format($raizQua, 3, ",", ".")."</strong></li>";
        echo "<li>Analisando sua raiz cúbica é <strong>".number_format($raizCub, 3, ",", ".")."</strong></li></ul>";
        ?>
    </section>
</body>
</html>