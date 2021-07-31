<?php

function nulo_zero($a, $b, $c)
{
    if ($a == null || $b == null || $c == null) {
        echo '<br> Preencha os campos! <br>';
        exit();
    } else {
        if ($a == 0 || $b == 0) {
            echo '<br> Digite um valor diferente de 0 para "a" e "b"! <br>';
            exit();
        }
    }
}

function delta($a, $b, $c)
{
    $delta = ($b * $b) - ((4 * $a) * $c);
         
    if ($delta < 0) {
        echo '<br> Não há valores reais de "x"! <br>';
        exit();
            
    } else {
        if ($delta >= 0) {
            return $delta;
        }
    }
}

function x1($a, $b, $delta)
{
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    return $x1;
}

function x2($a, $b, $delta)
{
    if ($delta == 0) {
        $x2 = null;
        
        echo '<br> Há somente uma raiz resultante! <br>';

    } else {
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
    }

    return $x2;
}

/*function xs($a, $b, $delta)
{
    if ($delta == 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = null;

        echo '<br> Há somente uma raiz resultante! <br>';
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
    }

    return $x1;
    return $x2;
}*/

function persistir($a, $b, $c, $delta, $x1, $x2)
{ 
    $conexao = mysqli_connect('localhost', 'root', '', 'bhaskara');
    $sqlinsert = "insert into calculo values(0, '$a', '$b', '$c', '$delta','$x1', '$x2')";
    $resultado = @mysqli_query($conexao, $sqlinsert);

    if (!$resultado) {
        die('<br> Query Inválida: ' . @mysqli_error($conexao) . '<br>');
    } else {

    }

    mysqli_close($conexao);
}

?>