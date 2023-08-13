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
echo "<link rel='stylesheet' type='text/css' href='practicum.css' />";
        date_default_timezone_set('America/New_York');
        $coupons = $_POST["thecoupons"];
        $leftover = $coupons%10;
        $left = $leftover%3;
        
        echo "For $coupons coupons, you can get: <br>"; 
        
        function calculateCandy($coupons){
            $x = 1;
            $candy = $coupons/10;
            settype($candy, "integer");
            echo "$candy Candy Bars<br>";
            while ($x !=  $candy){
                echo "0 ";
                $x++;
            }
            echo "<br>";        
        }
        function calculateGumballs($leftover){
            $x = 0;
            $gumballs = $leftover;
            $total = $gumballs/3;
            settype($total, "integer");
            echo "$total Gumballs<br>";
            while ($x != $total){
                echo "0 ";
                
                $x++;
            }
            echo "<br>";
        }
        function calculateLeft ($left){
             $x = 0;
            echo "Coupons Left: $left<br>";
            while ($x != $left){
                echo "0 ";
                $x++;
            }
            echo "<br>";
        }
        calculateCandy($coupons, $leftover);
        calculateGumballs($leftover);
        calculateLeft($left);
        ?>
    </body>
</html>
        </contentbox>
                </body>
        <div class ="copyright">
            <?php
            readfile('footer.inc');
            ?>
            <!--#include virtual="footer.inc" -->
        </div>        
    </body>
</html>

