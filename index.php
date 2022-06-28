<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP</title>
</head>
<body>

<?php
//para fazer o link com outra pasta -> 3 opções abaixo
require_once('funcoes.php');
//require()
//include 'funcoes.php'
/*$idade = 20 - 2;
echo "<h1>Fala Zé idade $idade <h1>";
echo somar() ."<br>";
somarIdade(25,30,26,28);*/
?>

<div class="container">
    <?php
    //echo calcularComissao(1500, 7.65);
    $montante = calcularMontatnte(1000,2.98,12);
    $parcela = number_format(($montante/12),2,',','.'); 
    echo '12 parcelas de R$'.$parcela.'<br/>';
    echo 'Valor total R$'. number_format(($montante),2,',','.');
    ?>
</div>

</body>
</html>