<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2C</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 30px;
            height: 30px;
            text-align: center;
            background-color: salmon;
            color: black;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table> 
    <?php
    $n=10;
    for ($row = $n; $row >= 1; $row--) {
        echo "<tr>";
        for ($col = 1; $col <= $row; $col++) {
            echo "<td>$col</td>"; 
        }
        echo "</tr>";
    }  
    ?>
</table>
</body>
</html>