<?php
$tag = "div";
$background_color = "grey";
$color = "white";
$width = "200px";
$height = "100px";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Tag Page</title>
</head>
    <body>
        <?php
            echo "<" . $tag . " style=\"background-color: $background_color; color: $color; width: $width; height: $height; display: flex; align-items: center; justify-content: center; border: 1px solid black\">";
            echo "$tag";
        ?>
    </body>
</html>