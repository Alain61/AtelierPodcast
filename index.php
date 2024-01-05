<?php
echo 'hello world';
$firstName ='Alain';
$lastName = 'Cuvelier';

$withDoubleQuotes = "$firstName $lastName"; //concatenation
$withSingleQuotes = $firstName.' '.$lastName; //concatenation

var_dump($withSingleQuotes);

$nb1 = 31;
$nb2 = 10;

$result = $nb1 + $nb2;

var_dump($result);

$i = 10;

var_dump(
    $i++,
    ++$i,


);

$nb1 = 5;
$nb2 = 10;

var_dump(
    $nb1<$nb2,
    $nb1<=$nb2,

)