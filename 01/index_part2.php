<?php
$f = fopen('input.txt', 'r');
$masses = [];
while(!feof($f)) {
    $masses[] = fgets($f);
}
fclose($f);

$total_req = 0;
foreach ($masses as $mass) {
    $current_fuel = $total_req = floor($mass / 3) - 2;
    while($current_fuel > 0) {
        $current_fuel = floor($current_fuel / 3) - 2;
        if($current_fuel > 0) {
            $total_req += $current_fuel;
        }
    }
}
echo $total_req;