<?php
$f = fopen('input.txt', 'r');
$masses = [];
while(!feof($f)) {
    $masses[] = fgets($f);
}
fclose($f);

$totalfuel = 0;
foreach ($masses as $mass) {
    $totalfuel += floor($mass / 3) - 2;
}
echo $totalfuel;