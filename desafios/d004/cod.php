<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Coversor de Moedas v2.0</h1>
        <?php 
            //Cotação vinda do API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));//o dia de hoje menos 7 dias
            $fim = date("m-d-Y"); //data atual
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            //tratar dados em json
            $dados = json_decode(file_get_contents($url), true);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $real = $_REQUEST["din"];
            $dolar = $real / $cotacao;

            echo "<p>Seus R$ " . number_format($real, 2, ",", "."). " equivalem a <strong>US$ " . number_format($dolar, 2, ",", ".") . "</strong></p>";
            echo "<p><strong>* Cotação fixa de R$" . number_format($cotacao, 2, ",", ".") . "</strong> informada diretamente no código</p>"
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>