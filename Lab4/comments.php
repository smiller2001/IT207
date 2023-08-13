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
								//delets the row based off of the index that it lies on, then it rearranges the index value and updates the rest of the text file.
								if(isset($_POST['delete'])){
									//checks to see if there is any comments to delete them. only occures if the text file exists.
									if (file_exists("comments.txt")){
										$rows = file("comments.txt");
										$count = count($rows);
										$deletecomment = $_POST['delete']-1;
										unset($rows[$deletecomment]);
										array_values($rows);
										$update_file = fopen("comments.txt", "w");
										fwrite($update_file, implode($rows));
									}
								}
								if(file_exists("comments.txt")){
									echo '
										<h2>Huh?</h2>
										<p>
											Krischer and Karpinski report that:<br />
											Students who used social networking sites while studying scored 20% lower on tests and students who used social media had <br />
											GPA of 3.06 versus non-users who had an average GPA of 3.82.<br />
											Source: Paul A. Kirschner and Aryn C. Karpinski," Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010
										</p>
										<h1>Comments</h1>
										<hr />	
									';
									$comments = file("comments.txt");
									$number_of_comments = count($comments);
									if($number_of_comments >= 1){
										$comment_num = 1;
										for($i=0;$i<$number_of_comments;$i++){
											$row = explode(",", $comments[$i]);
											echo "<p> $comment_num. 
												&nbsp&nbsp <b>Name:</b> <a href='mailto:$row[1]'>$row[0]</a><br />
												&emsp;&ensp; <b>Comments:</b> $row[2]<br /></p>
												<hr />";
												$comment_num++;
										}
										echo "<p><a href='index.php'>Add New Comment</a></p>
											<p><a href='ascending_order.php'>Sort Comments A-Z(by name)</a></p>
											<p><a href='decending_order.php'>Sort Comments Z-A(by name)</a></p>
											
											<form action='comments.php' method='POST'>
												Delete Comment Number: <input type ='text' name='delete' />
												<input type = 'submit' value = 'Delete Comment' />
											</form>";
										
									}
									else {
										echo "<p>No comments to be presented.</p>
											<hr />
											<p><a href='index.php'>Add Comments</a></p>";
									}
								}
								else {
									echo '<p>There are no comments to be presented since the "comments.txt" file doesnt exist</p>';
									echo "<a href='index.php'>Add Comments</a>";
								}
							?>
 </contentbox>
    <div class="footer"> 
     <?php include "footer.inc"; ?>
<!--#include virtual="heading.php" -->
    </div>
</body>
</html>