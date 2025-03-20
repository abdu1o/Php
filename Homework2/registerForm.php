<?php
session_start();

$session_id = 1;

echo "<h1>Please register</h1>";
echo "<p>Session ID: $session_id</p>";

if ($session_id == 0) {
    echo '<input type="text" name="login" placeholder="Login">
        <br>
        <input type="text" name="password" placeholder="Password">';
}
elseif ($session_id == 1) {
    echo '<p>You are registered, please log in</p>';
}
?>
