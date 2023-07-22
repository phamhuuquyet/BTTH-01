<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng trên
$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "Phần tử đầu tiên: $firstElement\n";
echo "Phần tử cuối cùng: $lastElement\n";

// Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
$largestNumber = max($numbers);
$smallestNumber = min($numbers);
$sum = array_sum($numbers);

echo "Số lớn nhất: $largestNumber\n";
echo "Số nhỏ nhất: $smallestNumber\n";
echo "Tổng các giá trị: $sum\n";


asort($numbers); 
print_r($numbers);

arsort($numbers); 
print_r($numbers);

ksort($numbers); 
print_r($numbers);

krsort($numbers); 
print_r($numbers);
?>
