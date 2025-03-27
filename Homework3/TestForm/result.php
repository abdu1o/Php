<?php
session_start();
$final_score = ($_SESSION['score1'] ?? 0) + ($_SESSION['score2'] ?? 0) + ($_SESSION['score3'] ?? 0);
session_destroy();

echo "<h1>Congratulations! Your score: $final_score</h1>";
?>
