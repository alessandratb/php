<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_REQUEST['valor'];
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
        <input type="number" name="valor" id="valor" required value="<?=$valor?>" step="5">

        <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
        </form> 
    </main>
    <section>
        <?php
            // Valor 100
            $valor100 = intdiv($valor, 100);
            $resto = $valor % 100;
            // Valor 50
            $valor50 = intdiv($resto, 50);
            $resto = $resto % 50;
            // Valor 10
            $valor10 = intdiv($resto, 10);
            $resto = $resto % 10;
            // Valor 5
            $valor5 = intdiv($resto, 5);
            // $resto = $resto % 5;
            // Versão simplificada:
            $resto %= 5;
        ?>

        <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>

        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$valor100?>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?=$valor50?>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?=$valor10?>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?=$valor5?>
        </ul>
    </section>
</body>
</html>