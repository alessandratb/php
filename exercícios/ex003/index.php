<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal, 0b = binário, 0 = octal
        // $num = 300;
        // echo "O valor da variável é $num";

        // $v = true;
        // var_dump($v);
        // testa qual é o tipo primitivo da variável

        // $num = (int) 3e2; // 3 x 10(2)
        // var_dump($num);
        // echo "O valor é $num";

        // coerção = força um tipo primitivo
        // $num = (int) "950";
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);
        // echo "O valor para casado é $casado";

        // diz quais são todos os tipos primitivos 
        // $vet = [6, 7, "oi", 4 , true, 5, 8.9];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>