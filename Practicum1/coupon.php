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
        
        <form action ="coupons.php" method="post">
            <label for="weight">Total Number of Coupons:</label>
            <input  type ="text" id="thecoupons" name="thecoupons">
            <input type="submit" value ="Calculate">
        </form>
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