<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

var_dump($a == $b);
var_dump($a == $b2);

var_dump($a === $b);
var_dump($a === $b2);

var_dump($a != $b);
var_dump($a != $b2);

var_dump($a !== $b);
var_dump($a !== $b2);

var_dump($a < $b);
var_dump($c < $b);
var_dump($d < $b);

var_dump($a > $b);
var_dump($c > $b);

var_dump($a >= $b);
var_dump($c <= $b);

// <=>

echo 2 <=> 1; // 1
echo 1 <=> 1; // 0
echo 3 <=> 4; // -1

$age = 23;

echo $age_undefined ?? $age;

echo "\n";