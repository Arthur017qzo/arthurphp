<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe e faz cálculo da soma de 2 números</title>
</head>
<body>
    <?php
    echo "<h3 align='center'>SOMA DE 2  NÚMEROS</>";
    echo "hr size='3' color='red'>";
    // Recupera os valores informados nas caixas de textos,e armazena nas variáveis,nas duas linhas abaixo.
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    echo "numero1:" .$num1;
    echo "numero2:" .$num2;
    echo "<hr size='3' color='blue' align='left' width='165'>";
    // Efetuando e exibindo o cálculo
    $soma = $num1 + $num2;
    echo "A soma de $num1 com $num2 é " .$soma;
    ?>
</body>
</html>