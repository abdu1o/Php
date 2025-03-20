<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Your Answers:</h2>";
    echo "<p>1. Selected: " . htmlspecialchars($_POST['q1']) . "</p>";

    if (!empty($_POST['q2'])) {
        echo "<p>2. Selected: " . implode(", ", array_map('htmlspecialchars', $_POST['q2'])) . "</p>";
    }
    else {
        echo "<p>No answer selected</p>";
    }

    echo "<p>3. Answer: " . nl2br(htmlspecialchars($_POST['q3'])) . "</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Page</title>
</head>
<body>
<h1>Quiz</h1>
<form method="post">
    <h3>1. Python cool?</h3>
    <label><input type="radio" name="q1" value="yes"> yes</label><br>
    <label><input type="radio" name="q1" value="yes"> no</label><br>

    <h3>2. Sho?</h3>
    <label><input type="checkbox" name="q2[]" value="gde"> gde</label><br>
    <label><input type="checkbox" name="q2[]" value="kogda"> kogda</label><br>

    <h3>3. Why?</h3>
    <textarea name="q3" rows="5" cols="50"></textarea><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
