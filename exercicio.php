<h3>1-) Crie uma função que converta graus Celsius em graus Fahrenheit.</h3>

<?php
function converterTemperatura ($celsius){
   return $celsius * 9 / 5 + 32 ;
}
   echo "32 graus celsius: ".converterTemperatura(32)." Fahrenheit";
?>

<h3>2-) Gere um array aleatório utilizando rand(-50,50) com 25 itens.</h3>
<?php
function GerarArrayAleatorio($qtdIndices)
{
    $array = array( );
    for($i = 0; $i <= $qtdIndices; $i++)
    {
        array_push($array, rand(-50,50) );
    }
    return $array;
}
$array = GerarArrayAleatorio(25);
echo json_encode($array);

echo "<h3>3-) Utilize o array do exercício 2, multiplique todos os seus itens e imprima o resultado na tela.</h3>
";

function duplicaArray($lista){
    $novoArray = array();

    for($i = 0; $i < count ($lista); $i++){
        array_push($novoArray, $lista[$i] *2);
    }

    return $novoArray;
}
echo json_encode(duplicaArray($array));
?>

<h3>4-) Imprima na tela os números positivos do array do exercício 2.</h3>
<?php

function arrayPositivo($lista){
    $positivoArray = array();
    
    for($i = 0; $i < count ($lista); $i++){
        $item = $lista[$i];
        if($item >= 0){
            array_push($positivoArray, $item);
        }
    }

    return $positivoArray;
}
echo json_encode(arrayPositivo($array));

echo "<h3>5-) Imprima o maior valor do array do exercício 2.</h3>";

function numeroMaior($lista){
    $maiorNumero = $lista[0];

    for($i = 0 ; $i < count ($lista); $i++){
        $item = $lista[$i];
        if($item > $maiorNumero){
            $maiorNumero = $item;
        }
    }

    return $maiorNumero;
}
echo json_encode(numeroMaior($array));


echo "<h3>6-) Imprima na tela o array do exercício 2. Logo após imprimir , inverta as posições do array e imprima novamente.</h3>";

echo json_encode($array);

function inverteArray($lista){
    $numerosInvertidos = array();

    for($i = count($lista) - 1; $i >= 0; $i--){
        $item = $lista[$i];
        array_push($numerosInvertidos, $item);
    }

    return $numerosInvertidos;
}
echo "<br>";
echo json_encode(inverteArray($array));
?>