<?php
//Crie um formulario que receba o valor do capital, a taxa de juros e o número de parcelas
//Apresente o valor da parcela utilizando juro SIMPLES no mesmo arquivo php(exercícios.php)
?>

<?php  
if(isset($_GET['capital'])){ 
    $txtcapital = $_GET['capital']; 
} 
?> 

<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>FormPHP</title> 
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/style.css"> 
</head> 
<body> 
    <?php  
        $capital = 1000; 
        $taxa = 0.50; 
        $parcelas = 12; 
    ?> 
    <form class="form" action="#" method="get"> 
        <input type="number" name="capital" placeholder="capital"> 
        <input type="number" name="taxa" placeholder="taxa">
        <input type="number" name="parcelas" placeholder="parcelas">
        <button type="submit" name="btn">Enviar</button> 
        <p> 
            <?php  
                if(isset($capital,$taxa,$parcelas)){ 
                    echo($capital); 
                } 
            ?> 
        </p> 
    </form> 
</body> 

</html>