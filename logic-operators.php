<?php

$feline_cats = true;
$cats_four_legs = true;
$cats_fly = false;
$cats_program_with_php = false;

var_dump($feline_cats && $cats_four_legs);
var_dump($cats_four_legs || $cats_fly);
var_dump(!$cats_four_legs);

$result = ($cats_four_legs and $cats_program_with_php);

var_dump($result);

echo "\n";