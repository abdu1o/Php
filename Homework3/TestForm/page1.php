<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_answers = ["Answer1", "Answer3", "Answer2", "Answer4", "Answer1", "Answer2", "Answer3", "Answer1", "Answer4", "Answer2"];
    $score = 0;
    
    for ($i = 0; $i < 10; $i++) {
        if (isset($_POST["quest$i"]) && $_POST["quest$i"] == $correct_answers[$i]) {
            $score += 1;
        }
    }
    
    $_SESSION['score1'] = $score;
    header("Location: page2.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Page 1</title>
    <script>
        function validateForm() {
            for (let i = 0; i < 10; i++) {
                let radios = document.getElementsByName("quest" + i);
                let answered = false;
                for (let radio of radios) {
                    if (radio.checked) {
                        answered = true;
                        break;
                    }
                }
                if (!answered) {
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
            for ($j = 1; $j <= 4; $j++) {
                echo "<input type='radio' name='quest$i' value='Answer$j'> Answer$j ";
            }
            echo "<br>";
        }
        ?>
        <button type="submit">Next</button>
    </form>
</body>
</html>
