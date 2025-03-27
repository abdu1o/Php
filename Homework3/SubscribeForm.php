<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Subscribe'])) {
        echo "Thank you for subscribing";
        exit;
    }
    else {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe Form</title>
</head>
<body>

<form method="post">
    <input type="text" name="tEmail" placeholder="Email">
    <br>
    <input type="checkbox" name="Subscribe" value="Subscribe">
    <label for="Subscribe">Subscribe</label>
    <br>
    <button type="submit" name="nSend" value="vSend">Send</button>
</form>

</body>
</html>
