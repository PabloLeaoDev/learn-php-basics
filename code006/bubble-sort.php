<?php 

$arr = [ 2, 6, 1, 5, 2 ];
$arrLength = count($arr);
$lowestValue = 0;

for ($i = 0; $i < $arrLength; $i++) {
    for ($j = 0; $j < $arrLength - 1; $j++) { 
        $nextValue = $j + 1;
        if ($arr[$j] > $arr[$nextValue]) {
            $lowestValue = $arr[$nextValue];
            $arr[$nextValue] = $arr[$j];
            $arr[$j] = $lowestValue;
        } elseif ($arr[$j] < $arr[$nextValue]) {
            continue;
        }
    }
}

echo "<pre>" . print_r($arr, true) . "</pre>";