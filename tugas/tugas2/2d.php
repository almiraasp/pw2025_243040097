<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2D (Papan Catur)</title>
    <link rel="stylesheet" href="css/style2d.css">
</head>
<body>
<table>
    <?php
        for ($row = 0; $row < 5; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 5; $col++) {
                $class = (($row + $col) % 2 == 0) ? "black" : "white";
                echo "<td class='$class'></td>";
            }
            echo "</tr>";
        }    
    ?>
</table>
</body>
</html>