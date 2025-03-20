<?php
$num1 = 4;
$num2 = 2;

if ($num1 == 0) {
    echo "Division by zero!";
}
elseif ($num1 % $num2 == 0) {
    echo "$num1 multiple of $num2";
}
else {
    echo "$num1 is not multiple of $num2";
}
?>