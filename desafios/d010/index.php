<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nasceu = $_GET['nasceu'];
        $ano = $_GET['ano'];
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasceu">Em que ano você nasceu? </label>
        <input type="number" name="nasceu" id="inasceu" required value="<?=$nasceu?>">
        <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong>2023</strong>)</label>
        <input type="number" name="ano" id="ano" required value="<?=$ano?>">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nasceu;
            
            echo "<p>Quem nasceu em $nasceu vai ter <strong>$idade anos </strong>em $ano!</p>";
        ?>
    </section>
</body>
</html>