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
	<body>
            <contentbox>
<?php
								//executes if the user filled out the name and email on the comment post.
								if(isset($_POST['name'], $_POST['email'])){
									$found = 0;
									$name = $_POST['name'];
									$email = $_POST['email'];
									$comment = $_POST['comment'];
									$comment_entry = $name . "," . $email . "," . addslashes($comment) . "\n";
									//checks to see if the person who is commenting has already placed and entry or not. 
									if (file_exists("comments.txt")){
										$file_content = file("comments.txt");
										$entry_num = count($file_content);
										for($i=0;$i<$entry_num;$i++){
											$row = explode(",", $file_content[$i]);
											if (strcasecmp($name, $row[0])==0){
												 $found = 1;
												 break;
											}
										}
									}
									//Displays that the comment is not added because the entry was already placed by the same user based off name.
									if ($found == 1){
										echo "<h1>Comments Not Added</h1>
											<hr />
											<p>One Comment per person!!! You have already left comments for this posting.</p>
											<hr />
											<a href = 'index.php'>Someone Else Want to Comment?</a><br/>
											<a href = 'comments.php'>View comments</a>";
									}
									else{
										//opens file and finds the name and commetnt and displays it if there are not previous entries by the same user.
										$append_file = fopen("comments.txt", "at");
										if (fwrite($append_file,$comment_entry)>0){
											echo "<h1>Comments Added</h1>
											<hr />
											<p>
												<b>Name:</b> <a href='mailto:$email'>$name</a><br />
												<b>Comment:</b> $comment
											</p>
											<hr />
											<a href = 'index.php'>Someone Else Want to Comment?</a><br/>
											<a href = 'comments.php'>View Posting Comments</a>";
										}
									}
								}
								else {
									echo '<h1>ERROR Entry!!!</h1>
										You have not entered all the details to submit this comment.<br />
										Please press the "back" button to go back and fill all information or press the "Return to Home Page" button below.<br />
										<a href = "index.php">Return to Home Page</a><br/>';
								}
							?>
 </contentbox>
    <div class="footer"> 
     <?php include "footer.inc"; ?>
<!--#include virtual="heading.php" -->
    </div>
</body>
</html>