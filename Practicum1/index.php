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
            echo "<br>"
            ?>
        <form action ="practicum.php" method="post">
            <label for="weight">Weight(in lbs):</label>
            <input  type ="text" id="weight" name="weight">
            <p> Running (at 6 mph) </p>
            <label for="weight">Duration(in minutes):</label>
            <input  type ="text" id="running" name="running">
            <p>Basketball</p>
            <label for="basketball">Duration (in minutes):</label>
            <input  type ="text" id="basketball" name="basketball">
            <p>Sleep</p>
            <label for="sleep">Duration(in hours:</label>
            <input  type ="text" id="sleep" name="sleep"> <br><br>
            <input type="submit" value ="Calculate">
        </form>
            <br>
<a href="https://helios.vse.gmu.edu/~smille78/IT207/BP1/coupon.php">Practicum 2</a>
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