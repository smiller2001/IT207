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
  <!--#include virtual="menu.inc" -->
</div>


 <div class="heading"> 
     <?php include "heading.php"; ?>
<!--#include virtual="heading.php" -->
</div>
<html>
	
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
								
								$user = 'smille78';
								$pass = 'Chan+1llyV1rg1n1a';
								$db = 'smille78';
								
								$db_connection = mysqli_connect('helios.vse.gmu.edu', $user, $pass) or die('Could not connect to the Database.');
								
								if($db_connection){
									mysqli_query($db_connection, "USE $db");
									$comment_table = mysqli_query($db_connection, "SELECT commentID,commentName,commentEmail,commentMessage FROM IT207_Lab4_Comments ORDER BY commentName ASC");
									$rows = mysqli_num_rows($comment_table);
									$num = 1;
									for($i=0;$i<$rows;$i++){
										mysqli_data_seek($comment_table, $i);
										$row = mysqli_fetch_row($comment_table);
										echo "<p> $num. 
											&nbsp&nbsp <b>Name:</b> <a href='mailto:$row[2]'>$row[1]</a><br />
											&emsp;&ensp; <b>Comments:</b> $row[3]<br /></p>
											<hr />";
											$num++;
									}
								}
							?>
							<br />
							<a href ="db_index.php">Add More Comments</a>
							<br />
							<a href ="db_comments.php">Go Back to All Comments(Database Version)</a>
                 </contentbox>
  </div>
    <div class="footer"> 
     <?php include "footer.inc"; ?>
    </div>
</body>
</html>
