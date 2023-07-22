<?php
function calculateOperations($arr) {
    $sum = array_sum($arr);
    $product = array_product($arr);
    $diff = $arr[0];
    $div = $arr[0];

    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $diff -= $arr[$i];
        $div /= $arr[$i];
    }

    echo "Tổng các phần tử = " . implode(" + ", $arr) . " = $sum\n";
    echo "Tích các phần tử = " . implode(" * ", $arr) . " = $product\n";
    echo "Hiệu các phần tử = " . implode(" - ", $arr) . " = $diff\n";
    echo "Thương các phần tử = " . implode(" / ", $arr) . " = $div\n";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
calculateOperations($arrs);
?>
