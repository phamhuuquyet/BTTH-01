<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$names = ['anh', 'sơn', 'thắng', 'tôi'];

$result = "";
for ($i = 0; $i < count($arrs); $i++) {
    $result .= "Màu {$arrs[$i]} là màu yêu thích của {$names[$i]}, ";
}
$result = rtrim($result, ', '); 
echo $result;
?>
