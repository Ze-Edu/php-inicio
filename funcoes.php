<?php
// UDF(User defined functions - Funções definidas pelo usuario)
// funções com parâmetros por passagem de valor ou referência

/*function somar($valor1=60, $valor2=55, $valor3=3){
    return $valor1 + $valor2 + $valor3;
}

function somarIdade(int ...$idades){
    //var_dump($idades);
    //print_r($idades);
    
    if(isset($idades)){
        echo 'tem valor<br>';
    }else{
        echo 'Não tem valor<br>';
    }

    $soma = 0;
    foreach ($idades as $key => $value){
        echo ($key + 1).'° valor = '.$value .'<br>';
        $soma = $soma + $value;
    }
    echo 'Soma das idades: '.$soma;
}
function calcularComissao($vendas, $comissao=2.89){
    return $vendas * ($comissao / 100);
}*/

function calcularMontatnte($capital, $taxa = 0.98, $periodoMes = 1){
    $montante = $capital * pow((1 + ($taxa/100)),$periodoMes);
    return $montante;
}
?>