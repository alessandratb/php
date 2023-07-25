<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?
        /*Configure a área padrão da data
        GMT -3 = Horário do Brasil*/
        date_default_timezone_set("America/Sao_Paulo"); 

        /*Se não usar o código de cima, por padrão
        Usa-se o CET que é o horário do servidor*/

        echo "Hoje é dia " . date("d-D/M/Y");
        /* Data
        "d" = dia
        "D" = dia da semana
        "M" = mês
        "Y" = ano
        */

        echo "e a hora atual é " . date("G:i:s");
        /* Hora
        "G" = hora
        "i" = minuto
        "s" = segundo
        */
    ?>
</body>
</html>