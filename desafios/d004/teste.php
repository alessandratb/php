<pre>
    <?php
    $inicio = date("m-d-Y", strtotime("-7 days"));//o dia de hoje menos 7 dias
    $fim = date("m-d-Y"); //data atual
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
    //tratar dados em json
    $dados = json_decode(file_get_contents($url), true);
    //True diz que é um array
    //False diz que é um object
    
    //var_dump($dados);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    echo "A cotação foi $cotacao";
    ?>
</pre>