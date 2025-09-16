<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 50vh;
            
        }
        .styles{
            background: yellow;
            font-weight: bold;
        }
        form{
            border-radius: 10px;
            margin-top: 50px;
        }
        table{
        border-collapse: collapse;
        margin-top: 20px;
        width: 80%;
        max-width: 700px;
        text-align: center;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }


    </style>
</head>
<body>
    <form action="index.php" method="post">
        <label for="row">Enter number of row</label>
        <input type="text" name="row"><br>
        <br>
        <label for="col">Enter number of column</label>
        <input type="text" name="col"><br>
        <input type="submit" value="CREATE">
    </form>
    </body>
</html>

<?php
$row = "";
$col = "";

if (isset($_POST['row'])) {
    $row = $_POST['row'];
}
if (isset($_POST['col'])) {
    $col = $_POST['col'];
}

if ($row != "" && $col != "" ) {
    echo "<table border='1' padding = '40px'>";
        echo "<tr>";
        echo "<th>X</th>";
        for($c = 1; $c <= $col; $c++){
            echo "<th>$c</th>";
        }
        echo "</tr>";
        for($r = 1; $r <= $row; $r++){
            echo "<tr>";
            echo "<th>$r</th>";
            for ($c=1; $c <= $col ; $c++) {
            $val = $r * $c;
            if($val %2 != 0){
                echo "<td class = 'styles'>$val</td>";
            }
            else {
                echo "<td>$val</td>";
            }
            }
            echo "</tr>";
        }
    echo "</table>";
 }


?>
