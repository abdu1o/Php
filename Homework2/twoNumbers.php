<?php
$num1 = 3;
$num2 = 3;

if ($num1 % 3 == 0 && $num2 % 3 == 0) {
    $sum = $num1 + $num2;
    echo "<p>Sum = $sum</p>";
}
elseif ($num2 != 0) {
    $division = $num1 / $num2;
    echo "<p>Division = $division</p>";
}
else {
    echo "<p>Division by zero is not allowed</p>";
}
?>