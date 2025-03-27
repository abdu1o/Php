<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_answers = [
        ["Answer1", "Answer3"], ["Answer2"], ["Answer1", "Answer4"], ["Answer3"], ["Answer2", "Answer3"],
        ["Answer4"], ["Answer1", "Answer2"], ["Answer3", "Answer4"], ["Answer1"], ["Answer2", "Answer4"]
    ];
    $score = 0;
    
    for ($i = 0; $i < 10; $i++) {
        if (isset($_POST["quest$i"])) {
            $selected = $_POST["quest$i"];
            if (!array_diff($correct_answers[$i], $selected) && !array_diff($selected, $correct_answers[$i])) {
                $score += 3;
            }
        }
    }

    $_SESSION['score2'] = $score;
    header("Location: page3.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test Page 2</title>
    <script>
        function validateForm() {
            let totalQuestions = 10;
            for (let i = 0; i < totalQuestions; i++) {
                let checkboxes = document.querySelectorAll(`input[name="quest${i}[]"]:checked`);
                if (checkboxes.length === 0) {
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
                echo "<input type='checkbox' name='quest{$i}[]' value='Answer$j'> Answer$j ";
            }
            echo "<br>";
        }
        ?>
        <button type="submit">Next</button>
    </form>
</body>
</html>
