<?php
$year = 1004;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "<p>Year = $year</p>";
    echo "<p>$year is a leap year</p>";
}
else {
    echo "<p>Year = $year</p>";
    echo "<p>$year isn't leap-year</p>";
}
?>