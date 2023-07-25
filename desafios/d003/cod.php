<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Coversor de Moedas v1.0</h1>
        <?php 
        //Cotação vinda do Google
        $cotacao = 4.78;
        $real = $_REQUEST["din"];
        $dolar = $real / $cotacao;

        echo "<p>Seus R$ " . number_format($real, 2, ",", "."). " equivalem a <strong>US$ " . number_format($dolar, 2, ",", ".") . "</strong></p>";
        echo "<p><strong>* Cotação fixa de R$ $cotacao</strong> informada diretamente no código</p>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>