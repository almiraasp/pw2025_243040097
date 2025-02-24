<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2B</title>
    <style>
    body {letter-spacing: 5px; font-size: 20px;}</style>
</head>
<body>
<table> 
    <?php
      for ($row = 1; $row <= 10; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo "<td>$col</td>";
        }
        echo "</tr>";
      }  
    ?>
</table>
</body>
</html>