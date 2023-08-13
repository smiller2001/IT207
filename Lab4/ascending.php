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
               <link rel="stylesheet" href="comments.css">
    </head>
    <body>
<div class="menu">
    <?php require "menu.inc"; ?>
</div>


 <div class="heading"> 
     <?php include "heading.php"; ?>
</div>
<html>
	<body>
            <contentbox>
							<?php
								echo '<h2>Huh?</h2>
										<p>
											Krischer and Karpinski report that:<br />
											Students who used social networking sites while studying scored 20% lower on tests and students who used social media had <br />
											GPA of 3.06 versus non-users who had an average GPA of 3.82.<br />
											Source: Paul A. Kirschner and Aryn C. Karpinski," Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010
										</p>
										<h1>Comments(A-Z)</h1>
										<hr />';
										
								$comments = file("comments.txt");
								sort($comments);
								$number = 1;
								$counter = count($comments);
								for($i=0;$i<$counter;$i++){
									$row = explode(",", $comments[$i]);
									echo "<p> $number. 
										&nbsp&nbsp <b>Name:</b> <a href='mailto:$row[1]'>$row[0]</a><br />
										&emsp;&ensp; <b>Comments:</b> $row[2]<br /></p>
										<hr />";
									$number++;
								}
							?>
							<br />
							<a href ="index.php">Add More Comments</a>
							<br />
							<a href ="viewcomments.php">Go Back to All Comments</a>
 </contentbox>
    <div class="footer"> 
     <?php include "footer.inc"; ?>
    </div>
</body>
</html>

