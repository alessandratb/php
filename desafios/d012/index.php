<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $second = $_REQUEST['second'];
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="second">Qual é o total de segundos?</label>
        <input type="number" name="second" id="second" required value="<?=$second?>">

        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            //Semana
            $sem = intdiv($second, 604_800);
            $resto = $second % 604_800;
            //Dia
            $dia = intdiv($resto, 86_400);
            $resto = $resto % 86_400;
            //Hora
            $hor = intdiv($resto, 3_600);
            $resto = $resto % 3_600;
            //Minuto
            $min = intdiv($resto, 60);
            $resto = $resto % 60;
            //Segundo
            $seg = $resto;
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($second, 0, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$sem?> semanas;
            <li><?=$dia?> dias;
            <li><?=$hor?> horas;
            <li><?=$min?> minutos;
            <li><?=$seg?> segundos.
        </ul>
    </section>
</body>
</html>