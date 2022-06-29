<h3>Matrizes no PHP</h3>
<?php 
$carros[0][0]='Fiat';
$carros[0][1]='Uno';
$carros[0][2]='Taos';
$carros[0][3]='Siena';
$carros[0][4]='Toro';

$carros[1][0]='Honda';
$carros[1][1]='City';
$carros[1][2]='Civic';
$carros[1][3]='Fit';
$carros[1][4]='CR-V';

$carros[2][0]='chevrolet';
$carros[2][1]='Onix';
$carros[2][2]='Camaro';
$carros[2][3]='Corsa';
$carros[2][4]='Vectra';

echo count($carros);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <table class="tabela">
        <?php 
        for($linha=0; $linha < count($carros); $linha++){
            ?><tr><?php //echo '<tr>' = linha
            for ($coluna=0; $coluna < count($carros[$linha]); $coluna++) {//td = coluna
                ?><td>
                    <?php
                    if($coluna==0)
                     echo '<strong>'.$carros[$linha]
                     [$coluna].'</strong>'; 
                     else 
                     echo $carros[$linha][$coluna];
                    ?>
            </td><?php
            }?>

        </tr><?php
        }
        ?>
    </table>
</body>
</html>