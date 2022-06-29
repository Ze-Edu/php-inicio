<link rel="stylesheet" href="css/style.css">
<?php
include 'config.php';

$atual = new Datetime();
$especifica = new Datetime('1990-01-22');
$diasAtraso = 125;
$texto = new Datetime("$diasAtraso day");

print_r($atual);
echo '<br>';
print_r($especifica);
echo '<br>';
print_r($texto);

$data = new Datetime();
echo $data->format('d-m-Y H:i:s');
echo '<br>';

$dataSistema = new Datetime();
$dataNascimento = new Datetime('2003-12-02');
$intervalo = $dataNascimento->diff($dataSistema);
echo $intervalo -> format('%y ano(s), %m mes(es) e %d dia(s)');
//18 ano(s), 6 mes(es) e 27 dia(s)
echo '<br>';
$intervalo1 = new DateInterval('P6Y');
echo $intervalo1->format('%y anos e %d dias');
echo '<br>';


$dataSistema->setTimeZone(new DateTimeZone('America/Sao_Paulo'));
echo $dataSistema->format('d-m-Y H:i:s');
echo '<br>';


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="refresh" content="1">
    <meta charset="UTF-8">
    <title>datatime</title>
</head>
<body>
    
</body>

<script>
</script>

</html>