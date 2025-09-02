<?php
$name = $_GET['name'];
$score = $_GET['score'];
$grade = "";
$remark ="";

if($score >=95 && $score <=100){
    $grade = "Excellent";
    $remark = "Outstanding Performance!";
}
elseif ($score >=90 && $score <=94) {
    $grade = "Very Good";
    $remark="Great Job";
}
elseif ($score >=85 && $score <=89) {
    $grade = "Good";
    $remark="Good Effort, Keep it up!";
}
elseif ($score >=75 && $score <=74) {
    $grade = "Needs Improvement";
    $remark="Work harder next time.";
}
elseif ($score >=85 && $score <=89) {
    $grade = "Failed";
    $remark="You need to improve.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width: 400px;
            margin: auto;
            background: skyblue;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

    </style>
</head>
<body>

<div class="box">
  
<?php
echo "Student Name: ";
echo $name
?>

<br>

<?php
echo "Score: ";
echo $score
?>
<br>
<?php
echo "Grade: ";
echo $grade
?>
<br>
<?php
echo "Remarks: ";
echo $remark
?>
</div>

</body>
</html>