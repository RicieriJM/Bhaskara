<?php

include("functions.php");

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

nulo_zero($a, $b, $c);

$delta = delta($a, $b, $c);

echo '<strong> <br> a = </strong>' . $a . '<br>';
echo '<strong> <br> b = </strong>' . $b . '<br>';
echo '<strong> <br> c = </strong>' . $c . '<br>';
echo '<strong> <br> delta = </strong>' . $delta . '<br>';

$x1 = x1($a, $b, $delta);
$x2 = x2($a, $b, $delta);

echo '<strong> <br> x1 = </strong>' . $x1 . '<br>';
echo '<strong> <br> x2 = </strong>' . $x2 . '<br>';

persistir($a, $b, $c, $delta, $x1, $x2);

?>

<br><br>

<input type='button' onclick="window.location='index.php';" value="Voltar">