<?php
$points = 0;

$question1 = $_POST['questionone'];
$question2 = $_POST['questiontwo'];
$question3 = $_POST['questionthree'];

if ($question1 == "false"){
    $points++;
}
if ($question2 == "false"){
    $points++;
}
if ($question3 == "false"){
    $points++;
}
if ($points <3){
    echo "You got $points/100 correct.";
}

if ($points ==3){
echo "You got $points/100 correct!";
}
?>
<br>
<br>
