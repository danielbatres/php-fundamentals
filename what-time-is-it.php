<?php 

$seconds = readline("Enter time in seconds: ");

$hours = (int) ($seconds / 3600);

$seconds %= (int) (3600);

$minutes = (int) ($seconds / 60);

$seconds %= (int) (60);

echo "$hours hours, $minutes minutes and $seconds seconds";

echo "\n";