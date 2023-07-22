<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];
$value_b = $a['b']['o']['b'];
echo "Giá trị có key 'b' = $value_b\n";
$value_c = $a['a']['c'];
echo "Giá trị có key 'c' = $value_c\n";
$info_a = $a['a'];
echo "Thông tin của phần tử có key 'a':\n";
print_r($info_a);
?>
