<?php
$month = 3;

$daysNumber = cal_days_in_month(CAL_GREGORIAN, $month, date("Y"));

echo "<p>Month = $month</p>";
echo "<p>Days in the month: $daysNumber</p>";
?>