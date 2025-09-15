<?php
$num = 153;
$originalNum = $num;
$sum = 0;
$length = strlen((string)$num);
while ($num > 0) {
    $digit = $num % 10;
    $sum += pow($digit, $length);
    $num = (int)($num / 10);
}
if ($sum == $originalNum) {
    echo "$originalNum is an Armstrong number.";
} else {
    echo "$originalNum is not an Armstrong number.";
}
?>
