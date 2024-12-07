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

table {
    margin: 15px;
}

table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  padding: 5px 30px 5px 30px;
}
    </style>
</head>
<body>
<div class="ex1">
    <div class="ex2">
    <table border="1">
    <tr>
        <th><h2>Learn Any Table</h2></th>
    </tr>
</table>

<form method="POST">
    <input type="text" name="data" placeholder="Type any number" required>
    <input type="submit" value="TABLE">
    <br><br>
</form>

<table border="1">
    <?php
    if (isset($_POST["data"])) {
        $n = $_POST["data"];
        
        // Validate if the input is a number
        if (is_numeric($n) && $n > 0) {
            $n = intval($n);
            for ($z = 1; $z <= 10; $z++) {
                $result = $n * $z;
                echo "<tr>";
                echo "<td>$n x $z <b>=</b> $result</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Please enter a valid positive number.</td></tr>";
        }
    }
    ?>
</table>

    </div>
</body>
</html>

