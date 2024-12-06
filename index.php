<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git-Multiplication</title>
    <link rel="stylesheet" href="style.css">
    <style>
body {
	background-color: #E6E6FA;
    }
</style>
    </head>
</head>
<body>
<div class="ex1">
    <div class="ex2">
        <form method="POST">
        <h2>Learn Any Table</h2>
        <input type="text" name="data" placeholder="type any Number">
        <input type="submit" value="TABLE">
        <br><br>
        <?php
        if (isset($_POST["data"])) {
            $n = $_POST["data"];
            
            // Validate if the input is a number
            if (is_numeric($n) && $n > 0) {
                $n = intval($n);
                for ($z = 1; $z <= 10; $z++) {
                    $result = $n * $z;
                    echo "$n x $z = $result<br>";
                }
            } else {
                echo "Please enter a valid positive number";
            }
        }
        ?>
        </form>
    </div>
</body>
</html>

