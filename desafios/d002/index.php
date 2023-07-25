<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório de 0 a 100...</p>
        <?php
        $num = rand(0, 100);
        echo "<p>O valor gerado foi <strong>$num</strong></p>";
        ?>
        
        <!--Recarregar a pagina-->
        <button onclick="javascript:document.location.reload()">
            Gerar outro
        </button>
    </main>
</body>
</html>