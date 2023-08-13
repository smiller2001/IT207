<!DOCTYPE html PUBLIC " -//W3C//DTD HTML 4.01//EN
    "http://www.w3.org/TR/html4/strict.dtd">
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>IT 207 Index</title>
    <html xmlns= “http://www.w3.org/1999/xhtml”>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="index.css">

    </head>
    <body>
        <div class="menu">
            <?php
            require 'menu.inc';
            ?>
            <!--#include virtual="menu.inc" -->
        </div>
        <div class="heading"> 
            <?php
            include'heading.php';
            ?>
            <!--#include virtual="heading.php" -->
        </div>
    <html>
        <body>
        <contentbox>
        <?php
        // find the variables 
        date_default_timezone_set('America/New_York');
        $weightKG = $_POST["weight"] * 2.2;
        $weightlb = $_POST["weight"];
        $runDur = $_POST["running"];
        $basketDur = $_POST["basketball"];
        $sleepDur = $_POST["sleep"];
        echo "For a $weightlb pound person, it is estimated that: <br>"; 
        function calculateRunCal($weightKG, $runDur ){
            $runCal = 0.0175 * 10 * $weightKG * $runDur;
            echo "$runCal calories were burned while running<br>";
            return $runCal;
        }
        function calculateBasketCal($weightKG, $basketDur){
            $basketCal = 0.0175 * 8 * $weightKG * $basketDur;
            
           
            echo "$basketCal calories were burned while playing basketball<br>";
        return $basketCal;
            
        }
        function calculateSleepCal($weightKG, $sleepDur){
           $sleepCal = 0.0175 * 1 * $weightKG * $sleepDur;
            
            echo "$sleepCal calories were burned while sleeping.<br>";
            return $sleepCal;
        }
        function calculateTotalCal($runCal,$sleepCal, $basketCal){
            $totalCal = $runCal+$sleepCal+$basketCal;
                return $totalCal;
            }
       
        calculateRunCal($weightKG, $runDur );
        calculateBasketCal($weightKG, $basketDur);
        calculateSleepCal($weightKG, $sleepDur);
        calculateTotalCal($runCal, $basketCal, $sleepCal);
        echo "Total Calories Burned: $totalCal";
        ?>
        <br>
<a href="https://helios.vse.gmu.edu/~smille78/IT207/BP1/">Back to inputs</a>   
        </contentbox>
        <div class ="copyright">
            <?php
            readfile('footer.inc');
            ?>
            <!--#include virtual="footer.inc" -->
        </div>        
    </body>
</html>