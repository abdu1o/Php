<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_answers = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p"];
    $score = 0;

    for ($i = 0; $i < 10; $i++) {
        if (isset($_POST["quest$i"]) && strtolower(trim($_POST["quest$i"])) == $correct_answers[$i]) {
            $score += 5;
        }
    }

    $_SESSION['score3'] = $score;
    header("Location: result.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Page 3</title>
    <script>
        function validateForm() {
            for (let i = 0; i < 10; i++) {
                let input = document.getElementsByName("quest" + i)[0];
                if (!input.value.trim()) {
                    alert("Please answer all questions");
                    return false;
                }
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post" onsubmit="return validateForm()">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<p>Question " . ($i + 1) . "</p>";
            echo "<input type='text' name='quest$i'>";
            echo "<br>";
        }
        ?>
        <button type="submit">Finish</button>
    </form>
</body>
</html>
